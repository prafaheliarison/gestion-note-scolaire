<?php

namespace App\Repositories;

use App\Models\Classe;

class ClasseRepository {
    
    protected $classe;
    
    public function __construct(Classe $classe) {
        $this->classe = $classe;
    }
    
    /**
     * Get all classes
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\classe[]
     */
    public function all() {
        return $this->classe->all();
    }
    
    /**
     * Add new class
     * @param [] $aData
     * @return object
     */
    public function create($aData) {
        return $this->classe->create($aData);
    }
    
    /**
     * Update a class
     * @param int $nId
     * @param [] $aData
     * @return object
     */
    public function update($nId, $aData) {
        $oclasse = $this->classe->find($nId);
        return $oclasse->update($aData);
    }
    
    /**
     * Delete a class
     * @param int $nId
     * @return boolean
     */
    public function delete($nId) {
        return $this->classe->destroy($nId);
    }
    
    /**
     * Show class info
     * @param int $nId
     * @return object
     */
    public function show($nId) {
        return $this->classe->findOrFail($nId);
    }
}
