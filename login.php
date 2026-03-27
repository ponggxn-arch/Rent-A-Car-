<?php

  include("connectdb.php");

        $us = isset($_REQUEST['us']) ? trim($_REQUEST['us']) : "";
        $pw = isset($_REQUEST['pw']) ? trim($_REQUEST['pw']) : "";
        $pw = md5($pw);

        $sql= "SELECT * FROM tbusers WHERE (user_name='$us') AND (pass_word='$pw') AND (user_status='user') ";

        $query=$conn->query($sql);
   
        $rs_number=mysqli_num_rows($query);

        if($rs_number>0){
         echo '{"login":"OK"}';

        }else{
         echo '{"login":"NO"}';

        }

?>