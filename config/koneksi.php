<?php

$DBHOST='localhost';
$DBUSER='root';
$DBPASS= '';
$DBNAME= 'kuycoding';
$db = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME);
if ($db->connect_error) {
    die("Koneksi ke database gagal!");
}