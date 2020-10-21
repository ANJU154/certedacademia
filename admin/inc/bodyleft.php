<div id="bodyleft">
  <h3>Category Management</h3>
  <ul>
      <li><a href="index.php">Dashboard</a></li>
    <li><a href="index.php?class">View categories</a></li>
    <li><a href="index.php?subclass">View subcategories</a></li>
  </ul>
  <h3>Class Management</h3>
  <ul>
    <li><a href="#">View class</a></li>
    <li><a href="#">View sub class</a></li>
  </ul>
  <h3>Subject Management</h3>
  <ul>
    <li><a href="#">View class</a></li>
    <li><a href="#">View sub class</a></li>
    <li><a href="#">View all students</a></li>
    <li><a href="#">View all subjects</a></li>
  </ul>
  <h3>User Management</h3>
  <ul>
    <li><a href="#">View all students</a></li>
    <li><a href="#">View all subjects</a></li>
    <li><a href="#">View all students</a></li>
    <li><a href="#">View all subjects</a></li>
  </ul>
  <h3>Page Management</h3>
  <ul>
    <li><a href="#">Terms and conditions</a></li>
    <li><a href="#">Contact us page</a></li>
    <li><a href="#">About us</a></li>
    <li><a href="#">FAQ page</a></li>
    <li><a href="#">Slider mangemnt</a></li>

  </ul>
</div>
<?php
 if(isset($_GET['class']))
{
  include("class.php");
  }
  if(isset($_GET['subclass']))
  {
      include("subclass.php");
    }?>
