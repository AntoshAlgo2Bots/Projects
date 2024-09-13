<?php

include("../controllers/getData.php");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "daily_txn_book";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";




if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['pieChartData'])) {

        $table_name = "daily_txn_book";
        $column_name = "form_status";
        $id = 28;
        // $searchColumn = "PO_number";

        $daily_txn_book = StatusAndValue("daily_txn_book", "form_status");
        // $requisition_table = StatusAndValue("requisition_table",  "status");
        // $grnStatus = StatusAndValue("grn_sub_line_status",  "status");


        $sql = 'SELECT  CONCAT(year_of_membership," " ,status, " ",membership_type) , count( year_of_membership) FROM membership_project.receipt_details group by year_of_membership,status,membership_type  ;
 ';


        $result = mysqli_query($conn, $sql);




        $paidUnpaidByYear = [];





        while ($row = mysqli_fetch_array($result)) {





            $paidUnpaidByYear[$row['CONCAT(year_of_membership," " ,status, " ",membership_type)']] = (int) $row['count( year_of_membership)'];




        }




        $sql2 = 'SELECT  CONCAT(a.year_of_membership," " ,a.status, " ",a.membership_type)  as year, count( a.year_of_membership)  count


FROM membership_project.receipt_details a  left JOIN member_table b
ON a.member_id = b.membership_no 
 where  a.status="unpaid" or a.status=" "  
group by a.year_of_membership,a.status,a.membership_type  
;
 ';



        $result2 = mysqli_query($conn, $sql2);



        $paidStatements = [];


        while ($row2 = mysqli_fetch_array($result2)) {



            $paidStatements[$row2['year']] = (int) $row2['count'];



        }





        $response['daily_txn_book'] = $receipt_details;
        // $response['activeMembership'] = $activeMembership;
        // $response['paidMmbersByYear'] = $paidMmbersByYear;
        // $response['paidUnpaidByYear'] = $paidUnpaidByYear;
        // $response['paidStatements'] = $paidStatements;
        // $response['purchaseOrder']= $purchaseOrder;
        // $response['grnStatus']= $grnStatus;



        // echo print_r($data);
        echo json_encode($response);



    }



}




?>