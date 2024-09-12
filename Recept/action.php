<?php

$receipt_no = $_POST['receipt_no'];
$payment_method = $_POST['payment_method'];
$membership_type = $_POST['membership_type'];
$year_of_membership = $_POST['year_of_membership'];
$one_time_enrollment_fee = $_POST['one_time_enrollment_fee'];
$yearly_charges = $_POST['yearly_charges'];
$share_allocated = $_POST['share_allocated'];
$total_amount = $_POST['total_amount'];
$next_amount_due = $_POST['next_amount_due'];
$date_amount_paid = $_POST['date_amount_paid'];
$utr_no = $_POST['utr_no'];
$transaction_date = $_POST['transaction_date'];
$balance = $_POST['balance'];
$status = $_POST['status'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "office";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";


$sql = "INSERT INTO receipt_data(receipt_no, payment_method, membership_type, year_of_membership, one_time_enrollment_fee, yearly_charges, share_allocated, total_amount, next_amount_due, date_amount_paid, utr_no, transaction_date, balance, status) 

values('$receipt_no', '$payment_method', '$membership_type', '$year_of_membership', '$one_time_enrollment_fee', '$yearly_charges', '$share_allocated', '$total_amount', '$next_amount_due', '$date_amount_paid', '$utr_no', '$transaction_date', '$balance', '$status')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>