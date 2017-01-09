<?php
@session_start();
if(isset($_GET['page']))
{
    if(file_exists("src/controller/".$_GET['page'].".php"))
    {
        $contenu = "src/controller/".$_GET['page'].".php";
    }
    else
    {
        $contenu = "src/controller/404Controller.php";
    }
}
else
{
    $contenu = ("src/controller/homeController.php");
}
require "src/view/layout.php"
?>