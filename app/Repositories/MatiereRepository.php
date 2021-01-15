<?php

namespace App\Repositories;

use App\Models\Matiere;

class MatiereRepository {
    
    protected $oMatiere;
    
    public function __construct(Matiere $matiere) {
        $this->oMatiere = $matiere;
    }
    
    /**
     * Get all oMatieres
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\$matiere[]
     */
    public function all() {
        return $this->oMatiere->all();
    }
    
    /**
     * Add new class
     * @param [] $aData
     * @return object
     */
    public function create($aData) {
        return $this->oMatiere->create($aData);
    }
    
    /**
     * Update a class
     * @param int $nId
     * @param [] $aData
     * @return object
     */
    public function update($nId, $aData) {
        $ooMatiere = $this->oMatiere->find($nId);
        return $ooMatiere->update($aData);
    }
    
    /**
     * Delete a class
     * @param int $nId
     * @return boolean
     */
    public function delete($nId) {
        return $this->oMatiere->destroy($nId);
    }
    
    /**
     * Show class info
     * @param int $nId
     * @return object
     */
    public function show($nId) {
        return $this->oMatiere->findOrFail($nId);
    }
}
