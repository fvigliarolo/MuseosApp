<?php


function base_url()
{
    return BASE_URL;
}

function media()
{
    return BASE_URL."/Assets";
}

function headerAdmin($data="")
{
    $view_header="Views/Template/header_admin.php";
    require_once($view_header);
}

function headerMenu_principal($data="")
{
    $view_header="Views/Template/header_Menu_principal.php";
    require_once($view_header);
}

function footerAdmin($data="")
{
    $view_footer="Views/Template/footer_admin.php";
    require_once($view_footer);
}


function dep($data)
{
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

function getModal(string $nameModal, $data)
{
    $view_modal = "Views/Template/Modals/{$nameModal}.php";
    require_once($view_modal);
}

function strclean($strcadena){

$string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''],$strcadena);
$string = trim($string); //Eliminar espacios en blanco al inicio y al final
$string = stripslashes($string); // Elimina las invertidas - Sstring);
$string = str_replace("<script>","",$string); 
$string = str_replace("</script>", "", $string);
$string = str_replace("<script src>","",$string); 
$string = str_ireplace("<script type=>", "", $string);
$string = str_replace("SELECT * FROM","",$string); 
$string = str_ireplace("DELETE * FROM","",$string);
$string = str_ireplace("INSERT * INTO","",$string);
$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
$string = str_replace("DROP TABLE","",$string);
$string = str_replace("OR '1'='1","",$string);
$string = str_replace('OR "1"="1"',"",$string);
$string = str_replace('OR` `1`=`1`',"",$string);
$string = str_ireplace("is NULL; --","",$string);
$string = str_replace("LIKE `","",$string);
$string = str_replace('LIKE `',"",$string);
$string = str_replace("LIKE `","",$string);
$string = str_replace("OR 'a'='a","",$string);
$string = str_replace('OR "a"="a',"",$string);
$string = str_replace("OR `a`=`a","",$string);
$string = str_replace("--","",$string);
$string = str_replace("^","" ,$string);
$string = str_replace("[","",$string);
$string = str_replace("]","", $string);
$string = str_replace("##","",$string);

return $string;
}

?>