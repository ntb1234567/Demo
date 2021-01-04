<?php

if (isset($_POST['submit']))
{
    echo "yes post function" . '<br>';
    $name=$_POST['name'];
    $Email =$_POST['email'];
    echo $name . "". $Email;
}
?>