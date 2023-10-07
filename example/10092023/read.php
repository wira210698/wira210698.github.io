<?php
include('db.php');
$database = new database; 
$hadi = 0;
$tidakHadi = 0;
$ragu = 0;
$sql = "select * from tb_comments";
$select = $database->koneksi->prepare($sql);
$select->execute();
$komentar = $select->fetchAll(PDO::FETCH_OBJ);
foreach ($komentar as $key => $value) {
   if ($value->kehadiran == "Hadir") {
        $hadi += 1;
    } elseif ($value->kehadiran == "Tidak Hadir"){
       $tidakHadi += 1;
    }elseif ($value->kehadiran == "Masih Ragu"){
       $ragu += 1;
   
   }
   
}
$data =[
    "data" =>$komentar,
    "hadi" => $hadi,
    "tidakHadi" => $tidakHadi,
    "ragu" => $ragu
];
echo json_encode($data);
