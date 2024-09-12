<?php 
include("./controller/db.php");


// $transaction_no = $_POST["transaction_no"];
$transaction_date = $_POST["transaction_date"];
$amount_type = $_POST["amount_type"];
$credit_amt = $_POST["credit_amt"];
$debit_amt = $_POST["debit_amt"];
$particuler_to = $_POST["particuler_to"];
$site = $_POST["site"];
$main_head = $_POST["main_head"];
$sub_head = $_POST["sub_head"];
$bill_cheque_no = $_POST["bill_cheque_no"];
$invoice_date = $_POST["invoice_date"];
$invoice_no = $_POST["invoice_no"];
$gst_no = $_POST["gst_no"];
$remarks = $_POST["remarks"];

$sql = "INSERT INTO for_office.daily_txn_book(transaction_date, amount_type, credit_amt, debit_amt, particuler_to, site, main_head, sub_head, bill_cheque_no, invoice_date, invoice_no, gst_no, remarks) 
VALUES('$transaction_date', '$amount_type', '$credit_amt', '$debit_amt', '$particuler_to', '$site', '$main_head', '$sub_head', '$bill_cheque_no', '$invoice_date', '$invoice_no', '$gst_no', '$remarks')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>