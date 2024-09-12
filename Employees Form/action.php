<?php

$joiner_info = $_POST["joiner_info"];
$serial_no = $_POST["serial_no"];
$emp_name = $_POST["emp_name"];
$emp_dob = $_POST["emp_dob"];
$emp_department = $_POST["emp_department"];
$emp_mobile_no = $_POST["emp_mobile_no"];
$emp_address = $_POST["emp_address"];
$emp_email = $_POST["emp_email"];
$emp_pan_card = $_POST["emp_pan_card"];

// $targetDir = "uploads/";
// $emp_image = basename($_FILES['emp_image']['name']);
// $targetFilePath = $targetDir . $emp_image;

$organization_name = $_POST["organization_name"];
$deputed_location = $_POST["deputed_location"];
$last_ctc = $_POST["last_ctc"];
$current_ctc = $_POST["current_ctc"];
$tentative_date = $_POST["tentative_date"];
$exact_date = $_POST["exact_date"];
$notice_period = $_POST["notice_period"];
$notice_served = $_POST["notice_served"];
$job_role = $_POST["job_role"];
$job_description = $_POST["job_description"];
$date_of_anniversary = $_POST["date_of_anniversary"];
$offer_letter_date = $_POST["offer_letter_date"];

// $offer_letter_file = basename($_FILES['offer_letter_file']['name']);
// $targetFilePath = $targetDir . $offer_letter_file;

$date_of_leaving = $_POST["date_of_leaving"];

// $date_of_leaving_file = basename($_FILES['date_of_leaving_file']['name']);
// $targetFilePath = $targetDir . $date_of_leaving_file;


$con = mysqli_connect(
  "localhost",
  "root",
  "root",
  "employees"
);

if (mysqli_connect_error()) {
  echo "Connection Error. <br>";
}


$sql = "INSERT INTO employees_information(joiner_info, serial_no, emp_name, emp_dob, emp_department, emp_mobile_no, emp_address, emp_email, emp_pan_card, organization_name, deputed_location, last_ctc, current_ctc, tentative_date, exact_date, notice_period, notice_served, job_role, job_description, date_of_anniversary, offer_letter_date, date_of_leaving) VALUE ('$joiner_info',  '$serial_no', '$emp_name', '$emp_dob', '$emp_department', '$emp_mobile_no', '$emp_address' ,'$emp_email', '$emp_pan_card', '$organization_name', '$deputed_location', '$last_ctc', '$current_ctc', '$tentative_date', '$exact_date', '$notice_period', '$notice_served', '$job_role', '$job_description', '$date_of_anniversary', '$offer_letter_date', '$date_of_leaving')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

?>