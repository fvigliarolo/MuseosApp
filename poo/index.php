<?php 

    require_once("Config/Config.php");
    require_once("Helpers/Helpers.php");
    

    $url = !empty($_GET['url']) ? $_GET['url']: 'home/home'; //tomamos los datos que se ingresan en el buscador
    $arrUrl = explode("/",$url); // convertimos lo obtenido en un array

    $controller= $arrUrl[0];
    $method= $arrUrl[0];
    $params="";

    if(!empty($arrUrl[1]))
    {
        if($arrUrl[1] != "")
        {
            $method = $arrUrl[1];
        }  
    }
 
    if(!empty($arrUrl[2]))
    {
        if ($arrUrl[2] != "")
        {
            for ($i=2; $i < count($arrUrl); $i++){
                $params .= $arrUrl[$i].',';
            }
            $params = trim($params,',' );

        }
    }

    require_once("Libraries/Core/AutoLoad.php");
    require_once("Libraries/Core/Load.php");


    
    



 /*   echo "<br>";
    echo "Controlador: ".$controller;
    echo "<br>";
    echo "Metodo: ".$method;
    echo "<br>";

    
    echo "Parametros: ".$params; */

    ?>