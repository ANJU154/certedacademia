<div id="bodyleft">
  <h3>Category Management</h3>
  <ul>
      <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
    <li><a href="index.php?class"><i class="fas fa-school"></i> View categories</a></li>
    <li><a href="index.php?subclass"><i class="fas fa-book-open"></i> View subcategories</a></li>
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
    <li><a href="index.php?contact"><i class="far fa-id-card"></i> Contact us page</a></li>
    <li><a href="index.php?about"><i class="fas fa-address-card"></i> About us page</a></li>
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
    }
    if(isset($_GET['contact']))
   {
     include("contact.php");
     }
     if(isset($_GET['about']))
    {
      include("about.php");
      }
     ?>
