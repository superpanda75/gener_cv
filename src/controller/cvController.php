<?php
if (isset($_POST['cvKind']))
{
    $cvChoice = $_POST['cvKind'];
    include 'src/content/model'.$cvChoice.'.php';
}
else
{
    include 'src/view/cv.php';
}
?>