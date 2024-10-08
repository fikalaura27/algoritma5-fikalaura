<?php

date("Y- echo m-d H:i:s"); 

 // output contoh: 2023-03-15 14:00:00
 echo date("l, d-m-Y");
 echo "<hr>";
  // output contoh: Rabu, 15-03-2023
  echo date("l, d-m-Y"); 
  echo "<hr>";
  // output contoh: Rabu, 15-03-2023
  date_default_timezone_set('Asia/Jakarta');
echo date("Y-m-d H:i:s");
echo "<hr>";
 // output akan sesuai dengan zona waktu Jakarta
 echo date("Y-m-d", strtotime("+1 week")); 
 echo "<hr>";
 // menambahkan satu minggu dari tanggal saat ini
 var_dump(checkdate(2, 29, 2021));
  // output: bool(false) karena tahun 2021 bukan tahun kabisat

