<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EleveRepository;

class ClasseController extends Controller
{
    
    protected $oClasse;
    
    public function __construct(EleveRepository $oClasse) {
        $this->oClasse = $oClasse;
    }
}
