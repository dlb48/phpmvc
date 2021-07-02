<?php
class About {
    public function index($nama = 'kosong;', $pekerjaan= 'kosong'){
        echo "halo, nama $nama, saya adalah seorang $pekerjaan";
    }
    public function page(){
        echo 'About/page';
    }
}