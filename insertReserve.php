<?php
include("connectdb.php");

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_name = isset($_REQUEST['user_name']) ? trim($_REQUEST['user_name']) : "";
$product_id = isset($_REQUEST['product_id']) ? trim($_REQUEST['product_id']) : "";
$reserve_num = isset($_REQUEST['reserve_num']) ? trim($_REQUEST['reserve_num']) : "";

$sql = "INSERT INTO tbreserve (user_name, product_id, reserve_num) VALUES ('$user_name', '$product_id', $reserve_num)";

$rs = $conn->query($sql);

if ($rs) {
    echo json_encode(array("insert" => "OK"));
} else {
    echo json_encode(array("insert" => "NO", "error" => $conn->error));
}
?>
