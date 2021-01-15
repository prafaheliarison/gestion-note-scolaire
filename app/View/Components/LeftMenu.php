<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Repositories\ClasseRepository;

class LeftMenu extends Component
{
    
    protected $oClasse;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(ClasseRepository $oClasse)
    {
        $this->oClasse = $oClasse;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.left-menu', ['oClasses' => $this->oClasse->all()]);
    }
}
