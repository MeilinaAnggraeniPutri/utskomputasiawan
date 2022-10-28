<?php
$con = mysqli_connect('utsmeilina.csziinv4kd1n.us-east-1.rds.amazonaws.com', 'admin', 'meilina23.', 'mahasiswa');
if (!$con) {
  echo 'Gagal terhubung ke database';
  die;
}
