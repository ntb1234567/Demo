
<?php 

if(isset($_POST['submit'])) {
   
$username = $_POST['username'];
$password = $_POST['password'];
    
    
$connection = mysqli_connect('192.168.30.23', 'newuser', 'Test123', 'db2');    
    
    if($connection) {
    
    echo "We are connected";
    
    } else {
    
    die("Database connection failed");
    
    }
    
}
?>

<!DOCTYPE html>
<html
    <head>
        <meta charset="UFT-8">
        <title>
            Welcome to login
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    
    <body>

        <div class="container">
    
            <div class="col-sm-6">
                <form action="login.php" method="post">
                    <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                    </div>

                     <div class="form-group">
                        <label                                                                  for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">

                </form>
            </div>





</div>

    </body>
</html>