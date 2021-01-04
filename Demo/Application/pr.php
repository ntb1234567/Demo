


<?php

if (isset($_POST['submit']))
{
    echo "yes post function" . '<br>';
    $name=$_POST['name'];
    $Email =$_POST['email'];
    echo $name . "". $Email;
}
?>

<!-- comment --><html>
<body>

    <form action="form_process.php" method="post">
    
Name: <input type="text" name="name">
E-mail: <input type="text" name="email"><br>

<input type="submit" name="submit">

</form>

</body>
</html>