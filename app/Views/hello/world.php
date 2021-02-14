<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>selamat datang di web penjualan saya </h1>
<h4>
    <?php
    echo session()->get('username');
    ?>
</h4>
<?= $this->endSection() ?>