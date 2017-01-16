<?php
@session_start();
if (isset($_POST['cvKind']))
{
    $cvChoice = $_POST['cvKind'];

    include 'src/content/model'.$cvChoice.'/index.php';

}
else
{
    include 'src/view/cvChoice.php';
}
?>