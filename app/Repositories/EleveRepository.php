<?php

namespace App\Repositories;

use App\Models\Eleve;

class EleveRepository {
    
    protected $oStudent;
    
    public function __construct(Eleve $oStudent) {
        $this->oStudent = $oStudent;
    }
    
    /**
     * Get all students
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\Eleve[]
     */
    public function all() {
        return $this->oStudent->all();
    }
    
    /**
     * Get students using pagination
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\Eleve[]
     */
    public function paginate($nClassId) {
        return 0 == $nClassId ? $this->oStudent::orderBy('first_name', 'ASC')->paginate(10) : $this->oStudent::where('classe_id', $nClassId)->orderBy('first_name', 'ASC')->paginate(10);
    }
    
    /**
     * Add new student
     * @param [] $aData
     * @return object
     */
    public function create($aData) {
        return $this->oStudent->create($aData);
    }
    
    /**
     * Update a student
     * @param int $nId
     * @param [] $aData
     * @return object
     */
    public function update($nId, $aData) {
        $oEleve = $this->oStudent->find($nId);
        return $oEleve->update($aData);
    }
    
    /**
     * Delete a student
     * @param int $nId
     * @return boolean
     */
    public function delete($nId) {
        return $this->oStudent->destroy($nId);
    }
    
    /**
     * Show student info
     * @param int $nId
     * @return object
     */
    public function show($nId) {
        return $this->oStudent->findOrFail($nId);
    }
}
