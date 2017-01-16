<?php
@session_start();
use mikehaertl\wkhtmlto\Pdf;

if (isset($_POST['firstname']))
    {
        $_SESSION = $_POST;
        include 'cvChoiceController.php';
    }
    else
    {
        include 'src/view/form.php';
    }

#$Pdf = new Pdf();

?>