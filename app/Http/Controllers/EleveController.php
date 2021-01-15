<?php

namespace App\Http\Controllers;

use App\Repositories\EleveRepository;
use App\Repositories\MatiereRepository;
use App\Repositories\NoteRepository;
use Illuminate\Http\Request;
use App\Repositories\ClasseRepository;

class EleveController extends Controller
{
    
    protected $oStudent;    
    protected $oNote;
    protected $oMatiere;
    protected $oClasse;
    
    public function __construct(EleveRepository $oStudent, NoteRepository $oNote, MatiereRepository $oMatiere, ClasseRepository $oClasse) {
        $this->oStudent = $oStudent;
        $this->oNote = $oNote;
        $this->oMatiere = $oMatiere;
        $this->oClasse = $oClasse;
    }
    
    /**
     * Show students list
     * @param Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request) {
        return view('student.list', ['oStudents' => $this->oStudent->paginate( !empty($request->id) ? $request->id : 0 )]);
    }
    
    /**
     * Add a new student
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add() {
        return view('student.form', ['oStudent' => NULL, 'oClasses' => $this->oClasse->all()]);
    }
    
    /**
     * Show existing student / Save student information
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|unknown
     */
    public function form(Request $request) {
        if ( $request->isMethod('POST') ) {
            //Save the form
            if ( 0 != $request->id ) {
                $this->oStudent->update($request->id, $request->all());
                return redirect()->back()->with('message', 'Modifications effectués !');
            } else {
                $oNewStudent = $this->oStudent->create($request->except(['id']));
                return redirect('student/' . $oNewStudent->id)->with('message', 'Ajout effectué !');
            }            
        } else {
            return view('student.form', ['oStudent' => $this->oStudent->show($request->id), 'oClasses' => $this->oClasse->all()]);
        }
    }
    
    /**
     * Remove a student
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request) {
        $this->oStudent->delete($request->id);
        return redirect()->back()->with('message', 'Suppression effectuée !');
    }
    
    /**
     * Show student notes
     * @param Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function note(Request $request) {
        $oNotes = $this->oNote->getStudentNotes($request->studentId);
        $aNotes = $oNotes->all();
        $aStudentNotes = [];
        if ( !empty($aNotes) ) {
            foreach ( $aNotes as $aNote ) {
                $aStudentNotes[$aNote['matiere_id']] = ['id' => $aNote['id'], 'value' => $aNote['value']];
            }
        }
        return view('student.note', ['oStudent' => $this->oStudent->show($request->studentId), 'aStudentNotes' => $aStudentNotes, 'oMatieres' => $this->oMatiere->all()]);
    }
    
    /**
     * Save student notes
     * @param Request $request
     */
    public function saveNote(Request $request) {    
        $oMatieres = $this->oMatiere->all();
        foreach ( $oMatieres as $oMatiere ) {
            $sFieldInputNote = 'note_' . $oMatiere->id;
            $sFieleInputValue = 'value_' . $oMatiere->id;            
            if ( 0 == $request->$sFieldInputNote ) {
                //Insert a note    
                if ( !empty($request->$sFieleInputValue) ) {
                    $this->oNote->create([
                        'eleve_id' => $request->eleve_id,
                        'matiere_id' => $oMatiere->id,
                        'value' => $request->$sFieleInputValue
                    ]);
                }
            } else {
                //Update a note
                if ( !empty($request->$sFieleInputValue) ) {
                    $this->oNote->update($request->$sFieldInputNote, [                        
                        'value' => $request->$sFieleInputValue
                    ]);
                }
            }
        }
        return redirect()->back()->with('message', 'Enregistrement des notes effectués !');
    }
    
    /**
     * Show student report
     * @param Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function report(Request $request) {
        return view('student.report', ['aReport' => $this->oNote->getStudentReport($request->id)]);
    }
}
