<?php

class Admin_rolesModel extends Mysql
{

public    $intDocumento;
public    $strNombre;
public    $strApellido; 
public    $strEmail;
public    $intCelular; 

    public function __construct()
    {
        parent::__construct();
    }

    public function  selectRoles()
    {
        $sql = "select p.Documento, p.Nombre, p.Apellido, p.Fecha_Nacimiento, p.Numero_Celular from Persona p, Administrador a where a.DocumentoAdministrador = p.Documento;";
        // $sql = "select p.Documento, p.Nombre, p.Apellido, p.Fecha_Nacimiento, p.Numero_Celular from Persona p, Administrador a";
        $request = $this->select_all($sql);
        return $request;
    }

    public function insertRol(int $documento, string $nombre, string $apellido, string $email, int $celular)
    {
        $return= "";
        $this->intDocumento = $documento;
        $this->strNombre=$nombre;
        $this->strApellido=$apellido;
        $this->strEmail=$email;
        $this->intCelular=$celular;

    // $sql = "SELECT * FROM Administrador where documentoAdministrador = '{$this->intDocumento}'";
    //     $request = $this->select_all($sql);

    $sql = "SELECT * FROM Persona where Documento = '{$this->intDocumento}' ";
    $request = $this->select_all($sql);


        if(empty($request))
        {
            $query_insert = "INSERT INTO Persona(Documento, Nombre, Apellido, Fecha_Nacimiento, Numero_Celular, Numero_Linea) VALUES(?,?,?,?,?,?)";
            $arrData = array($this->intDocumento, $this->strNombre , $this->strApellido,"2000-01-10",$this->intCelular, "2");
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "exist";
        }
        return $return;
    }
    
}

?>