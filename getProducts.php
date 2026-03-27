<?php
include("connectdb.php");
    $sql="SELECT * FROM tbproducts ";
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