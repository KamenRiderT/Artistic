<?php
SESSION_START();
	$msg = "";
$conn = mysqli_connect("localhost", "root", "", "gallery");

if (isset($_POST['upload'])) {

	$name = $_POST['piece_name'];
	$caption = $_POST['caption'];
	$image = $_FILES['image']['name'];
	$uploader = $_SESSION['u_id'];

	$target = "archive/".basename($_FILES['image']['name']);
echo $target;
	$sql = "INSERT INTO art (Art_Name, Art_Caption, Art_File, Uploader) VALUES ('$name', '$caption', '$image', '$uploader')";
	mysqli_query($conn, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
echo "success";
		$msg = "Image uploaded successfully";
		header("Location: ../Artistic/index.php");
	}else{
		echo "There was a problem uploading the file";
	}
}
