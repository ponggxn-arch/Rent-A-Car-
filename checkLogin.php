<?php

  include("connectdb.php");

        $us = isset($_REQUEST['us']) ? trim($_REQUEST['us']) : "";
        $pw = isset($_REQUEST['pw']) ? trim($_REQUEST['pw']) : "";
        $pw = md5($pw);

        $sql="SELECT * FROM tbusers WHERE (user_name='$us') AND (pass_word='$pw')  ";

        $query=$conn->query($sql);
   
        $rs_number=mysqli_num_rows($query);
        
        if($rs_number>0){
           while($data=$query->fetch_assoc()){
              $u_st= $data['user_status'];
              echo '{"login":"OK","status":"'.$u_st.'"}';
            }
         }else{
            echo '{"login":"NO"}';
         }
                 /*
                 $data=array();
                 $index=0;
         
                 while($rs=$query->fetch_assoc()){
                   $data[$index] = $rs;
                   $index++;
                 }
                
                 $json = json_encode($data);
                 echo $json;
                 */
?>