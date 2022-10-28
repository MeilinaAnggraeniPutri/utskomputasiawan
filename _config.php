<?php
$host='localhost';
$user='root';
$password='';
$db='mahasiswa';
$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
  echo 'Gagal terhubung ke database';
  die;
}
