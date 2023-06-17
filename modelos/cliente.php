<?php

class Cliente
{



    public $NombreApellido;

    public $NumeroDocumento;


    public function MostarDatos()
    {

        echo 'Nombre cliente y apellido son: ' . $this->NombreApellido . '<br>';

        echo 'documento: ' . $this->NumeroDocumento . '<br>';
        echo '----------------------------------- <br>';
    }
}
