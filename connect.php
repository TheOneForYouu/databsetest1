<?php
$con = mysqli_connect('localhost', 'root', '','semautospa');

$txtName = $_POST['txtName'];
$txtPhone = $_POST['txtPhone'];

$sql = "INSERT INTO `infodesunat` (`Id`, `fldName`, `fldNumber`) VALUES ('0', '$txtName', '$txtPhone')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>