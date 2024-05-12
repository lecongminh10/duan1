<?php

function loadall_baiviet(){
  $sql= "SELECT * FROM baiviet";
  $listbaiviet= pdo_query($sql);
  return  $listbaiviet; // trả về danh sách danh mục
}

function  update_baiviet($id, $anh1, $anh2, $anh3, $noidung1, $noidung2,$noidung3){
  $sql= "UPDATE baiviet 
  SET id='".$id."',anh1='".$anh1."',anh2='".$anh2."',anh3='".$anh3."',noidung1='".$noidung1."',noidung2='".$noidung2."',noidung3='".$noidung3."' WHERE id=".$id;
  pdo_execute($sql);
}


 
?>