<?php

namespace App\Repositories;

use App\Models\Eleve;
use App\Models\Matiere;
use App\Models\Note;

class NoteRepository {
    
    protected $oNote;
    
    public function __construct(Note $oNote) {
        $this->oNote = $oNote;
    }
    
    /**
     * Get all notes
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\classe[]
     */
    public function all() {
        return $this->oNote->all();
    }
    
    /**
     * Add new note
     * @param [] $aData
     * @return object
     */
    public function create($aData) {
        return $this->oNote->create($aData);
    }
    
    /**
     * Update a note
     * @param int $nId
     * @param [] $aData
     * @return object
     */
    public function update($nId, $aData) {
        $oclasse = $this->oNote->find($nId);
        return $oclasse->update($aData);
    }
    
    /**
     * Delete a note
     * @param int $nId
     * @return boolean
     */
    public function delete($nId) {
        return $this->oNote->destroy($nId);
    }
    
    /**
     * Show note info
     * @param int $nId
     * @return object
     */
    public function show($nId) {
        return $this->oNote->findOrFail($nId);
    }
    
    /**
     * Get student notes
     * @param int $nStudentId
     * @return unknown
     */
    public function getStudentNotes($nStudentId) {
        return $this->oNote::where('eleve_id', $nStudentId)->get();
    }
    
    /**
     * Student report
     * @param int $nStudentId
     * @return []
     */
    public function getStudentReport($nStudentId) {
        $aNotes = $aAllStudentsNote = [];
        $nStudentNote = $nRang = $nMaxNote = 0;
        $oNotes = $this->getStudentNotes($nStudentId);         
        $oStudent = Eleve::find($nStudentId);
        foreach ( $oNotes as $oNote ) {            
            $oMatiere = Matiere::find($oNote->matiere_id);
            $aNotes[$oMatiere->name] = ['value' => $oNote->value, 'coeff' => $oMatiere->coeff];
            $nStudentNote += $oNote->value;
            $nMaxNote += 20 * $oMatiere->coeff;
        }
        
        //No notes defined for the student
        if ( empty($oNotes->all()) ) {
            foreach ( Matiere::all() as $oRow ) {
                $aNotes[$oRow->name] = ['value' => '-', 'coeff' => $oRow->coeff];
                $nMaxNote += 20 * $oRow->coeff;
            }
        }
        
        //Get notes for all students        
        $oStudents = Eleve::where('classe_id', $oStudent->classe_id)->get();        
        $nTotal = count($oStudents->all());
        foreach ( $oStudents as $oRow ) {
            $oStudentNotes = $this->oNote::where('eleve_id', $oRow->id)->get();            
            $nNotes = 0;
            foreach ( $oStudentNotes as $oStudentNote ) {
                $nNotes += $oStudentNote->value;
            }
            $aAllStudentsNote[] = $nNotes;
        }
        //Sort note by desc
        rsort($aAllStudentsNote);
        
        //Get student rank
        $i = 1;
        foreach ( $aAllStudentsNote as $nNote) {
            if ( $nStudentNote == $nNote ) {
                $nRang = $i;
                break;
            }
            $i += 1;
        }
        
        return [
            'totalStudent' => $nTotal,
            'totalNote' => $nStudentNote,
            'maxNote' => $nMaxNote,
            'note' => $aNotes,
            'student' => $oStudent,
            'rang' => $nRang,
            'moyenne' => round(($nStudentNote * 20)/$nMaxNote, 2)
        ];
    }
    
}
