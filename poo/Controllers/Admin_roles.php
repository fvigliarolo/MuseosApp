<?php


class Admin_roles extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }

    public function admin_roles()
    {
        $data['page_id']=3;
        $data['page_tag'] ="Usuarios";
        $data['page_title'] ="Administradores";
        $data['page_name'] ="Usuarios->Administradores";
        
        $this->views->getView($this,"admin_roles",$data);

        
    }

    public function getRoles()
    {
        $arrData = $this->model->selectRoles();

        for ($i=0; $i < count($arrData); $i++) { 

            $arrData[$i]['Acciones'] ="<button class='btn btn-info' type='button' title='Editar'><i class='fa fa-pencil' aria-hidden='true'></i></button>
            <button class='btn btn-danger' type='button' title='Eliminar' ><i class='fa fa-trash' aria-hidden='true' style='font-size:20px'></i></button>";
            
        }
        
        
          echo json_encode($arrData,JSON_UNESCAPED_UNICODE); // transformamos los datos de la sentencia en formato JSON, para poder manipularlo con el DATA TABLES
         die();

    }

    public function setRol()
    {
        $intDocumento = intval($_POST['modalFormRol_AdministradorDocumento']);
        $strNombre = strClean($_POST['modalFormRol_AdministradorNombre']);
        $strApellido = strClean($_POST['modalFormRol_AdministradorApellido']);
        $strEmail = strClean($_POST['modalFormRol_AdministradorEmail']);
        $intCelular = strClean($_POST['modalFormRol_AdministradorCelular']);
        $request_rol = $this->model->insertRol($intDocumento, $strNombre, $strApellido, $strEmail, 
        $intCelular );
            
         if($request_rol == "exist")
        {
            $arrResponse = array('status' => false, 'msg' => 'Error dato/s duplicado');
        }else{
            $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente');
        }
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
        die();


    }

    

}
?>