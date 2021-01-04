<!-- comment -->

<!DOCTYPE html>
<html>
<head>
<title>MakersBox</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php echo  "<body>"  ?>

<?php
$servername = "192.168.30.23";
$username = "newuser";
$password = "Test123";
$dbname = "autod";
//$fsoNo="13"

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "select  FSO_No,FSO_Name,Login_Type,Email_ID,Mobile_No,OTP from  autod.FSO_Master ";
$result = mysqli_query($conn, $sql);
?> 
<table class='table table-striped'>
            <thead>
                <tr>
                    <th>FSO No </th>
                    <th>Name</th>
                    <th>Mobile</th>
                </tr>
            </thead>
<?Php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo '<tbody>';  
  while($row = mysqli_fetch_assoc($result)) {
  
 // echo "Name: " . $row["FSO_Name"]. "<br>";
     ?>
     
           
                <tr>
                    <td> <?php echo $row["FSO_No"] ?> </td>
                    <td> <?php echo $row["FSO_Name"] ?> </td>
                    <td> <?php echo $row["Mobile_No"] ?> </td>
                </tr>
           

  <?php       
  }
  echo '</tbody>';
  echo '</table>'; 
}
else {
  echo "0 results";
}

mysqli_close($conn);
?>

</body>