<?php



class Proveedor {


    public $Id;
    public $NombreYApellido;
    public $NumeroDocumento;
    public $Producto;
   
    public function MostrarDatos() {

        echo 'el Id del proveedor es : '. $this->Id . '<br>';
        echo 'el Nombre y apellido es : '. $this->NombreYApellido . '<br>';
        echo 'documento: '. $this->NumeroDocumento . '<br>';
        echo '----------------------------------- <br>';
        echo 'el codigo del Producto : '. $this->Producto->Codigo . '<br>';
        echo 'la descripcion del Producto : '. $this->Producto->Descripcion . '<br>';
        echo 'el id del Producto : '. $this->Producto->Id . '<br>';
        echo '----------------------------------- <br>';
        echo 'el id de la marca  : '. $this->Producto->Marca->Id . '<br>';

        echo 'el codigo de la marca del producto : '. $this->Producto->Marca->Codigo . '<br>';
        echo 'la descripcion de la marca : '. $this->Producto->Marca->Descripcion . '<br>';
        
    }
}