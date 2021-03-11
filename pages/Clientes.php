y<?php
Class Cliente{

private $Dni;
private $Usuario;
private $Hash;
private $Correo;
private $Sexo;


public function get_Dni()
 {return $this->Dni;}


public function get_Usuario()
 {return $this->Usuario;}

public function get_Hash()
 {return $this->Hash;}

public function get_Correo()
 {return $this->Correo;}

public function get_Sexo()
 {return $this->Sexo;}

public function __construct($Dni,$Usuario,$Hash,$Correo,$Sexo)
    {
    $this->Dni=$Dni;
    $this->Usuario=$Usuario;
    $this->Hash=$Hash;
    $this->Correo=$Correo;
    $this->Sexo=$Sexo;
    }
}

?>
