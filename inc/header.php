<?php include("function.php"); ?>
<div id='header'>
  <div id='up_head'>
    <div id='link'>
    <?php echo headlink(); ?>

    </div>
    <div id="date">
    <p>  <?php echo date('l, d F Y'); ?></p>
    </div>
    <div id='slog'>
      <p>Let's make learning and teaching, the new entertainment</p>
    </div>
  </div>
  <div id='title'>
    <h2><a href='index.php'> Cert-ed Academia</a></h2>
  </div>
  <div id="menu">
   <h2><i class="fas fa-bars"></i></h2>
   <?php include("inc/classmenu.php"); ?>
  </div>
  <div id="head_search">
   <form method="post" enctype="multipart/form-data">
     <input type="search" name="query" placeholder="     Search Class from here"  />
     <button name="search"><i class="fas fa-search"></i></button>
   </form>
  </div>
  <div id="head_material">
   <a href="matt.php"><i class="fas fa-book"></i></a>
  </div>
  <div id="head_login">
   <h4><i class="fas fa-sign-in-alt"></i> Login</h4>
  </div>
  <div id="head_signup">
   <h4><i class="fas fa-user-plus"></i> Signup</h4>
  </div>
</div>
