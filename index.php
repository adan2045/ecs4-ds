<?php


require_once 'modelos/cliente.php';
require_once 'modelos/marca.php';
require_once 'modelos/producto.php';
require_once 'modelos/proveedor.php';

$c=new Cliente;
$c->NombreApellido='Luis Grosso';
$c->NumeroDocumento=33847868;

$m= new Marca;
$m->Id=125212;
$m->Codigo=5;
$m->Descripcion='nacional';

$p= new Producto;
$p->Id=125;
$p->Codigo=5555;
$p->Descripcion='gaseosas';
$p->Marca=$m;

$pro= new Proveedor;
$pro->Id=1;
$pro->NombreYApellido='coca cola';
$pro->NumeroDocumento=33847868;
$pro->Producto=$p;


$c-> MostarDatos();
$pro-> MostrarDatos();





