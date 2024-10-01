<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Curso;

class save extends Form
{
    #[Validate("required",message:"Ingrese el nombre del curso")]
    public $nombre_curso;
    
    public $descripcion;
    #[Validate("required",message: "Ingrese el precio del curso")]
    public $precio;

    public function store(){
        $this->validate();
        Curso::create([
            'nombre_curso' => $this->nombre_curso,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio
        ]);
    }
}
