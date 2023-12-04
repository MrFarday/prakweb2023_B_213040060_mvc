<?php

class About {
    public function index($nama = 'Jauhari', $pekerjaan = 'Pengangguran')
    {
        echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
    }