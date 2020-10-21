<?php

function add_class(){
  include("inc/db.php");
  if(isset($_POST['add_class']))
  {
    $class_name=$_POST['class_name'];
    $check=$con->prepare("select * from class where classno='$class_name'");
    $check->setFetchMode(PDO:: FETCH_ASSOC);
    $check->execute();
    $count=$check->rowCount();
    if($count==1){
      echo "<script> alert('Already added successfully')</script>";
      echo "<script> window.open('index.php?class','_self') </script>";
    }
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
}
function select_class()
{
   include("inc/db.php");
   $get_class=$con->prepare("select * from class");
   $get_class->setFetchMode(PDO:: FETCH_ASSOC);
   $get_class->execute();
   while($row=$get_class->fetch()):
       echo "<option value='".$row['classid']."'>".$row['classno']."</option>";
   endwhile;
 }

 function add_subclass(){
   include("inc/db.php");
   if(isset($_POST['add_subclass']))
   {
     $subclass_name=$_POST['subclass_name'];
     $class_id=$_POST['class_id'];
     $check=$con->prepare("select * from subject where subname='$subclass_name'");
     $check->setFetchMode(PDO:: FETCH_ASSOC);
     $check->execute();
     $count=$check->rowCount();
     if($count==1){
       echo "<script> alert('Already added successfully')</script>";
       echo "<script> window.open('index.php?subclass','_self') </script>";
     }
     $add_class=$con->prepare("insert into subject(subname,classid) values('$subclass_name','$class_id')");
     if($add_class->execute()){
       echo "<script> alert('Added successfully')</script>";
       echo "<script> window.open('index.php?subclass','_self') </script>";
     }
     else {
       echo "<script> alert('Not added successfully')</script>";
       echo "<script> window.open('index.php?subclass','_self') </script>";
     }
   }
 }
 function viewclass()
 {
   include("inc/db.php");
   $get_class=$con->prepare("select * from class");
   $get_class->setFetchMode(PDO:: FETCH_ASSOC);
   $get_class->execute();
   $i=1;
   while($row=$get_class->fetch()):
     echo "<tr>
            <td>".$i++."</td>
            <td>".$row['classno']."</td>
            <td><a href='#'>Edit</a></td>
            <td><a href='#'>Delete</a></td>
          </tr>";
   endwhile;
 }
 function viewsubclass()
 {
   include("inc/db.php");
   $get_class=$con->prepare("select * from subject");
   $get_class->setFetchMode(PDO:: FETCH_ASSOC);
   $get_class->execute();
   $i=1;
   while($row=$get_class->fetch()):
     $id=$row['classid'];
     $get_c=$con->prepare("select * from class where classid='$id'");
     $get_c->setFetchMode(PDO:: FETCH_ASSOC);
     $get_c->execute();
     $row_class=$get_c->Fetch();
    echo "<tr>
            <td>".$i++."</td>
            <td>".$row['subname']."</td>
            <td>".$row_class['classno']."</td>
            <td><a href='#'>Edit</a></td>
            <td><a href='#'>Delete</a></td>
          </tr>";
      endwhile;
 }

 ?>
