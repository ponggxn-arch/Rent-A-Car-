<?php
include("connectdb.php");
    $sql="SELECT S.id,S.username, S.product_id ";
    $sql= $sql . " P.product_name, S.reserve_num, P.product_price ";
    $sql= $sql . " (S.reserve_num*P.product_price) AS total,";
    $sql= $sql . " S.reserve_datetime, S.reserve_status, S.reserve_slip ";
    $sql= $sql . " FROM tbproducts P, tbproducts S";
    $sql= $sql . " WHERE (P.product_id=S.product_id) ORDER BY S.id asc";
    $query=$conn->query($sql);


    $data = array();
    $id = 0;

    while($rs=$query->fetch_assoc()){
        $data[$id] = $rs;
        $id++;
    }
    $json = json_encode($data);
    echo $json;

?>