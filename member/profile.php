<?php
session_start();

if($_SESSION['status'] !="member"){
    if ($_SESSION['status'] !="mentor") {
        header("location:/kuycoding");
    }
    
}
?>