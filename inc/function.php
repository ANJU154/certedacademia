<?php
function headlink()
{
  include("inc/db.php");
  $get_link=$con->prepare("select * from contact");
  $get_link->setFetchMode(PDO::FETCH_ASSOC);
  $get_link->execute();
  $row=$get_link->fetch();
  echo "  <ul>
      <li><a href='https://facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook-f'></i></a></li>
      <li><a href='https://instagram.com/".$row['ins']."' target='_blank'><i class='fab fa-instagram'></i></a></li>
    </ul>";
}

function classmenu()
{
  include("inc/db.php");
$get_class=$con->prepare("select * from class");
$get_class->setFetchMode(PDO::FETCH_ASSOC);
$get_class->execute();
while($row=$get_class->fetch()):
  echo "  <li><a href='#''></a><i class='fas fa-users'></i>".$row['classno']."</li>";
endwhile;

}
function homeclass(){
  include("inc/db.php");
$get_class=$con->prepare("select * from class");
$get_class->setFetchMode(PDO::FETCH_ASSOC);
$get_class->execute();
while($row=$get_class->fetch()):
  echo "  <li><a href='#'>
    <center>
    <i class='fas fa-users'></i>
    <h4>".$row['classno']."</h4>
    <p>2</p>
     </center>
  </a> </li>";
endwhile;
}

 ?>
