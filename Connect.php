<?php
$servername="localhost";
$username="root";
$password="";
$database_name="login";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql_query ="INSERT INTO id (username,password) VALUES ('$username','$password')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "login successfully...";
    }
    else
    {
        echo "ERROR" .$sql ."".mysqli_connect($conn);
    }
    mysqli_close($conn);
}
?>
