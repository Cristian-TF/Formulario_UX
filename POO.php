<?php

class Solicitud {
    public $nombre;
    public $email;
    public $fecha;
    public $fono;
    public $comentarios;
    public $enlace;

    function __construct($nombre, $email, $fecha, $fono, $comentarios, $enlace) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->fecha = $fecha;
        $this->fono = $fono;
        $this->comentarios = $comentarios;
        $this->enlace = $enlace;
    }

}

$misolicitud = new Solicitud($_POST['nombre'], $_POST['email'], $_POST['fecha'], $_POST['fono'], $_POST['comentarios'], $_POST['enlace']);

?>
