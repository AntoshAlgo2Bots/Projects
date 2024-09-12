<?php 


$serial_no = $_POST['serial_no'];
$user_name = $_POST['user_name'];
$user_address = $_POST['user_address'];
$user_phone_number = $_POST['user_phone_number'];
$user_email = $_POST['user_email'];
$item_required = $_POST['item_required'];
$item_shape = $_POST['item_shape'];
$item_type = $_POST['item_type'];
$item_size = $_POST['item_size'];
$item_height = $_POST['item_height'];
$item_finish = $_POST['item_finish'];
$project_status = $_POST['project_status'];
$packed_start_date = $_POST['packed_start_date'];
$packed_completion_date = $_POST['packed_completion_date'];
$installation_required = $_POST['installation_required'];
$installation_need_date = $_POST['installation_need_date'];
$tentative_installation = $_POST['tentative_installation'];
$installation_date = $_POST['installation_date'];
$followup = $_POST['followup'];
$shop_drawing_date = $_POST['shop_drawing_date'];
$shop_drawing_approved = $_POST['shop_drawing_approved'];
$quotation_shared_date = $_POST['quotation_shared_date'];
$sample_approval_start_date = $_POST['sample_approval_start_date'];
$sample_approval_date = $_POST['sample_approval_date'];
$query_received = $_POST['query_received'];
$query_start_date = $_POST['query_start_date'];
$query_update_date = $_POST['query_update_date'];
$query_created_by = $_POST['query_created_by'];
$query_update_by = $_POST['query_update_by'];
$re_query = $_POST['re_query'];
$re_query_closure_date = $_POST['re_query_closure_date'];
$query_end_date = $_POST['query_end_date'];
$perfomance_invoice = $_POST['perfomance_invoice'];
$assemble_start_date = $_POST['assemble_start_date'];
$assemble_completion_date = $_POST['assemble_completion_date'];
$dismantle_start_date = $_POST['dismantle_start_date'];
$dismantle_completion_date = $_POST['dismantle_completion_date'];
$packed_start_date = $_POST['packed_start_date'];
$packed_completion_date = $_POST['packed_completion_date'];
$remarks = $_POST['remarks'];

$mysqli = new mysqli("localhost", "root", "root", "sale_form");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}



$sql = "INSERT INTO sale_order_table (
    serial_no, user_name, user_address, user_phone_number, user_email,
    item_required, item_shape, item_type, item_size, item_height, item_finish,
    project_status, packed_start_date, packed_completion_date, installation_required,
    installation_need_date, tentative_installation, installation_date, followup,
    shop_drawing_date, shop_drawing_approved, quotation_shared_date,
    sample_approval_start_date, sample_approval_date, query_received,
    query_start_date, query_update_date, query_created_by, query_update_by,
    re_query, re_query_closure_date, query_end_date, perfomance_invoice,
    assemble_start_date, assemble_completion_date, dismantle_start_date,
    dismantle_completion_date, remarks
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";


// Prepare statement
$stmt = $mysqli->prepare($sql);

// Bind parameters
$stmt->bind_param(
    'sssssssssssssssssssssssssssssss',
    $serial_no, $user_name, $user_address, $user_phone_number, $user_email,
    $item_required, $item_shape, $item_type, $item_size, $item_height, $item_finish,
    $project_status, $packed_start_date, $packed_completion_date, $installation_required,
    $installation_need_date, $tentative_installation, $installation_date, $followup,
    $shop_drawing_date, $shop_drawing_approved, $quotation_shared_date,
    $sample_approval_start_date, $sample_approval_date, $query_received,
    $query_start_date, $query_update_date, $query_created_by, $query_update_by,
    $re_query, $re_query_closure_date, $query_end_date, $perfomance_invoice,
    $assemble_start_date, $assemble_completion_date, $dismantle_start_date,
    $dismantle_completion_date, $remarks
);

// Execute statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$mysqli->close();
?>

?>