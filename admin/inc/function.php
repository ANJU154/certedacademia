<?php

function add_class(){
  include("inc/db.php");
  if(isset($_POST['add_class']))
  {
    $class_name=$_POST['class_name'];
    $add_class=$con->prepare("insert into class(classno) values('$class_name')");
    if($add_class->execute()){
      echo "<script> alert('Added successfully')</script>";
      echo "<script> window.open('index.php?class','_self') </script>";
    }
    else {
      echo "<script> alert('Not added successfully')</script>";
      echo "<script> window.open('index.php?class','_self') </script>";
    }
  }
} ?>
