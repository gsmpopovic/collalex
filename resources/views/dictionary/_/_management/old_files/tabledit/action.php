<?php

//action.php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':lx'  => $_POST['lx'],
  ':lx_bfx'  => $_POST['lx_bfx'],
  ':ps_eng'   => $_POST['ps_eng'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE headwords 
 SET lx = :lx, 
 lx_bfx = :lx_bfx, 
 ps_eng = :ps_eng 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tbl_sample 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>