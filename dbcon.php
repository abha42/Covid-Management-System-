<?php
$server="localhost";
$username="root";
$password="";
$database="covid";
$con=mysqli_connect($server,$username,$password,$database);
if($con->connect_error){
    ?>
    <script>
        alert("no Connection ");
        </script>
        <?php
}else{
    ?>
    <script>
        alert("Connection Successful");
        </script>
        <?php
}

?>