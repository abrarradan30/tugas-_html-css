<?php
session_start();
//memanggil dan memproses file bagian atas
include_once 'koneksi.php';
include_once 'models/produk.php';
include_once 'models/jenis_produk.php';
include_once 'models/member.php';
include_once 'models/kartu.php';
include_once 'models/pelanggan.php';
include_once 'models/pesanan.php';

$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){

include_once 'top.php';
//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        <?php 
                        //algoritma menangkap url agar masuk kedalam index
                        $url = $_GET['url'];
                        if($url == 'dashboard'){
                            include_once 'dashboard.php';
                        } else if (!empty($url)){
                            include_once ''.$url.'.php';
                        } else { 'dashboard.php';
                       
                        }
                        
                        ?>
                    </div>
                </main>
</div>

<?php
//memanggil file bagian bawah
include_once 'bottom.php';
} else {
    echo '<script> alert("anda tidak boleh masuk"); history.back(); </script>';
}
?>