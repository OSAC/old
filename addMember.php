 <?php

//This is the directory where images will be saved
$target = "your directory";
$target = $target . basename( $_FILES['photo']['name']);

//This gets all the other information from the form
$name=$_POST['nameMember'];
$bandMember=$_POST['bandMember'];
$photo=($_FILES['photo']['name']);


// Connects to your Database
mysql_connect("localhost", "root", "") or die(mysql_error()) ;
mysql_select_db("osac") or die(mysql_error()) ;

//Writes the information to the database
mysql_query("INSERT INTO `upload`(`id`, `nameMember`, `bandMember`, `photo`) VALUES ([value-1],[value-2],[value-3],[value-4])") ;

//Writes the photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
{

//Tells you if its all ok
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

//Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}
?>
