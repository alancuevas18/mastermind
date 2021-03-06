<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Master extends Controller
{

    public $AmountOfColors;
    public $ColorsAllwed;
    public $IaSelection;
    public $UserSelection;

    function __construct(){
        $this->AmountOfColors = 4;
        $this->ColorsAllwed = ['rojo', 'azul', 'morado', 'verde', 'naranja'];
        $this->IaSelection = ['rojo', 'azul', 'morado', 'verde'];
        $this->UserSelection = [];
    }



    function ejecutar($color1, $color2, $color3, $color4){

        array_push($this->UserSelection, $color1, $color2, $color3, $color4);
        if(count($this->UserSelection) != 4){
            return 'Cantidad de colores incorrecta';
        }
        $negros = 0;
        $blancos = 0;
		for ($x=0; $x < $this->AmountOfColors ; $x++) { 
			if ($this->UserSelection[$x] == $this->IaSelection[$x]) {
				$negros +=1;
				// echo "El color ". $this->UserSelection[$x]. " esta correcto <br>";
			}elseif(in_array($this->UserSelection[$x], $this->IaSelection)){
				// echo "el color ". $this->UserSelection[$x]. " esta fuera de posicion <br>";
                $blancos +=1;
			}elseif(!in_array($this->UserSelection[$x], $this->ColorsAllwed)){
				// echo "el color ". $this->UserSelection[$x]. " no esta en la lista de colores disponibles <br>";
			}elseif(!in_array($this->UserSelection[$x], $this->IaSelection)){
				// echo "el color ". $this->UserSelection[$x]. " es incorrecto <br>";
			}
		}
        return   $negros. ' Cantidad de negras '.$blancos.' cantidad de blancas';
	}
    
}
