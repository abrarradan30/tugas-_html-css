<?php
include_once 'koneksi.php';
include_once 'models/pesanan.php';

// 1. menangkap request form
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];
$pelanggan_id = $_POST['pelanggan_id'];

// menangkap form diatas dijadikan array
$data = [
    $tanggal,
    $total,
    $pelanggan_id
];

$model = new Pesanan();
$tombol = $_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data); break;
    case 'ubah':
        $data[] = $_POST[idx]; $model->ubah($data); break;
    default:
    header('Location:index.php?url=pesanan');
    break;
}
header('Location:index.php?url=pesanan');
?>