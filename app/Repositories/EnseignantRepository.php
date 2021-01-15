<?php

namespace App\Repositories;

use App\Models\Enseignant;

class oTeacherRepository {
    
    protected $oTeacher;
    
    public function __construct(Enseignant $oTeacher) {
        $this->oTeacher = $oTeacher;
    }
    
    /**
     * Get all teachers
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\Enseignant[]
     */
    public function all() {
        return $this->oTeacher->all();
    }
    
    /**
     * Add new teacher
     * @param [] $aData
     * @return object
     */
    public function create($aData) {
        return $this->oTeacher->create($aData);
    }
    
    /**
     * Update a teacher
     * @param int $nId
     * @param [] $aData
     * @return object
     */
    public function update($nId, $aData) {
        $ooTeacher = $this->oTeacher->find($nId);
        return $ooTeacher->update($aData);
    }
    
    /**
     * Delete a teacher
     * @param int $nId
     * @return boolean
     */
    public function delete($nId) {
        return $this->oTeacher->destroy($nId);
    }
    
    /**
     * Show teacher info
     * @param int $nId
     * @return object
     */
    public function show($nId) {
        return $this->oTeacher->findOrFail($nId);
    }
}
