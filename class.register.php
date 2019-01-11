<?php
class register
{
private $host="localhost";
private $db="osac";
private $user="root";
private $pass="";
private $mysqli;
function __construct()
{
$this->mysqli=new MySQLi($this->host,$this->user,$this->pass,$this->db);
if($this->mysqli->error)
{
echo $this->mysqli->error;
}
else
{
echo "connected to database";
}
}//end of function

function add_record()
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$college=$_POST['college'];
$event=$_POST['sel_event'];
$message=$_POST['message'];
if(isset($_POST['register']))
{
$sql="INSERT INTO register(name,email,phone,college,event,message) VALUES('$name','$email','$phone','$college','$event','$message')";
$this->mysqli->query($sql);
if($this->mysqli->error)
{
echo $this->mysqli->error;
}
else
{
echo "registered successfully";
}
}//end of if statement
}//end of function;



}//end of class
?>