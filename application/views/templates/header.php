<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>ini website</title>
</head>
<body class="bg-danger">
<div class="p-5">
 <div class="bg-white">
  <div class="p-4">
    <div  class="pb-4 row justify-content-center" > 
        <img src="<?php echo base_url('img/tra.png'); ?>" style="weight: auto; height: 100px;"/>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url(); ?>post">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>post/Tambah">Daftar Artikel</a>
                </li>
            </ul>
            <form action="<?= base_url(); ?>post" method="POST" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Mau cari apa?" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit" name="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>
    
