<?php

$serial_no = $_POST['serial_no'];
$creation_date = $_POST['creation_date'];
$starting_fy = $_POST['starting_fy'];
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$company_email_id = $_POST['company_email_id'];
$category = $_POST['category'];

$person_name = $_POST['person_name'];
$person_email_id = $_POST['person_email_id'];
$person_phone_no = $_POST['person_phone_no'];
$udayam_aadhar_card = $_POST['udayam_aadhar_card'];
$old_membership_number = $_POST['old_membership_number'];
$pan_no = $_POST['pan_no'];
$gst_no = $_POST['gst_no'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "membership";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


$sql = "INSERT INTO member_table (serial_no, creation_date, starting_fy, company_name, company_address, company_email_id, category, person_name, person_email_id, person_phone_no, udayam_aadhar_card, old_membership_number, pan_no, gst_no)

VALUES ('$serial_no', '$creation_date', '$starting_fy', '$company_name', '$company_address', '$company_email_id', '$category', '$person_name', '$person_email_id', '$person_phone_no', '$udayam_aadhar_card', '$old_membership_number', '$pan_no', '$gst_no')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>