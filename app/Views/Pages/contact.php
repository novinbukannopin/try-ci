<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<p>Contact Us</p>
<?php foreach ($address as $a) : ?>
    <ul>
        <li><?= $a['type']; ?></li>
        <li><?= $a['address_detail']; ?></li>
        <li><?= $a['city']; ?></li>
    </ul>
<?php endforeach ?>
<?= $this->endsection(); ?>