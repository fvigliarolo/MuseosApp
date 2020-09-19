<?php


class Menu_principal extends Controllers{
    public function __construct()
    {
        parent::__construct();
    }

    public function Menu_principal()
    {
        $data['page_id']=3;
        $data['page_tag'] ="Menu Principal";
        $data['page_title'] ="Pagina principal";
        $data['page_name'] ="Menu_Principla";
        
        $this->views->getView($this,"Menu_principal",$data);
       
    }
}
?>