<?php


// include("./db.php");
// include('./dbconnection/db.php');








function StatusAndValue($tableNAme,  $statusColumnName)
{

    $con = mysqli_connect(
        "localhost",
        "root",
        "root",
        "membership_project"
    );
    
    
    
    if (mysqli_connect_error()) {
        echo "Connection Error.<br>";
    }
    // include("../db.php");
    // include('./controllers/');
    // include("./db.php");
    $query = "SELECT $statusColumnName  from $tableNAme ; ";




    $result = mysqli_query($con, $query);









    if ($result) {



        $data = [];


        while ($row = mysqli_fetch_assoc($result)) {


            $data[] = $row[$statusColumnName];

        }
            

        $totalIndex = count($data);


        $filteredArray = array_filter($data, function($value) {
            return is_string($value) || is_int($value);
        });



        $unicIndex = array_count_values($filteredArray);

        $response["total"] = $totalIndex;

        $response["Indexes"] = $unicIndex;


        return $response;
    } else {



        return json_encode(mysqli_error($con));

    }


}















?>