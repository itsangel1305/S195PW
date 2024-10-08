<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
   public $titulo;
   public $encabezado;
   public $textoBoton;
    public function __construct($titulo,$encabezado,$textoBoton)
    {
        
        $this->titulo=$titulo;
        $this->encabezado=$encabezado;
        $this->textoBoton=$textoBoton;
    }

   
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
