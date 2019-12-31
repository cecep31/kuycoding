<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
   <link rel="stylesheet" href="config/gaya.css">
</head>
<body>
<div class="navbar">
  <a href="/kuycoding">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Mentor 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <?php
   session_start();
   
    // if($_SESSION['status'] !=="member"){
    //     if ($_SESSION['status'] !="mentor") {
    //         echo "<a style='float: right' href='?p=loginmem'>login</a>";
    //     }else{
    //         echo "<a style='float: right' href='?p=loginmem'>login</a>";
    //     }
    // }else{echo "<a style='float: right' href='?p=logout'>LOGOUT</a>";}

    if (!isset($_SESSION['status'])) {
        echo "<a style='float: right; background-color: rgb(255, 187, 0);' href='?p=loginmem'>LOGIN</a>";
    }else{echo "<a style='float: right; background-color: rgb(255, 187, 0);' href='?p=logout'>LOGOUT</a>";}
    
        
    
    
?>
</div>

  




    
</body>
</html>
<?php
include "config/koneksi.php";
if(isset($_GET['p'])){
    $page = $_GET['p'];

    switch ($page) {
        case 'loginmem':
            include "member/login.php";
            break;
        case 'logout':
            include "logout.php";
            break;
        case 'home':
            include "home.php";
            break;
        }
    }else{
        include "home.php";
    }





?>