<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\save;
use Illuminate\Support\Facades\Session;

class CreateCurso extends Component
{

    public save $curso;
    public function render()
    {
        return view('livewire.create-curso');
    }
    public function save(){
        $this-> curso-> store();
        Session::flash("success","Curso Registrado");
        $this->redirect("/cursos",true);
    }
}
