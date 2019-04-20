<?php
function getRows($query){
  $rows=[];
  $con =  mysqli_connect('localhost','root','','blog');
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
    array_push($rows,$row);
  }
  mysqli_close($con);
  return $rows;
}