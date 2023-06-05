<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Übungen Tag 7</title>
    <style>
    
    .bg-body{
        background-color: #212B40 !important;
    }
    .bg-main{
        background-color: #FFFFFF;
    }
    .bg-second{
        background-color: #49BFAA; /* Forms */
    }
    .color-0{
        color:white; /*form*/ 
    }
    .color-1{
        color:#212B40; /*h1*/
    }
    .color-2{
        color:#45858C; /*h2*/
    }
    .color-3{
        color:#A6372D; /*h3 h4*/
    }

    section{
        border-bottom: solid 1px #03588C;
    }
    p{
        color :#D9D9D9;
    }
.navbar-nav > li:hover{
  background-color: #49BFAA;
  transition: all 0.3s ease-in-out;
}
</style>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
    <header  class="jumbotron bg-image px-5 py-3 " style="background-image :url('images/bg.jpg'); height: calc(100vh - 450px); background-size:100% 100%;">
        <div class="h-100 position-relative">
            <nav class="navbar navbar-light navbar-expand-md">
                <a href="#" class="navbar-brand">php.olivieris</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto bg-main">
                        <li class="nav-item border-end px-2"><a href="../tag01/bsp01_php_grundlagen.php" class="nav-link  color-1">Tag 01</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag02/bsp01_schleifen_array.php" class="nav-link  color-1">Tag 02</a></li>
                        <li class="nav-item border-end px-2"><a href="#" class="nav-link  color-1">Tag 03</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag04/uebung_05.php"  class="nav-link  color-1">Tag 04</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag05/uebung_06.php"  class="nav-link  color-1">Tag 05</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag06/uebung_07.php"  class="nav-link  color-1">Tag 06</a></li>
                        <li class="nav-item active px-2"><a href="#"  class="nav-link  color-1">Tag 07</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="bg-main p-5">
    <main>
        <div class="row sticky-top bg-main mb-5"> <!-- Special for the Tag 07-->
            <nav class="navbar navbar-light navbar-expand-md bg-main">
            <h1 class="color-1">Tag 07</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto bg-main">
                        <li class="nav-item border-end px-2"><a href="index.php" class="nav-link  color-1 fw-bold">Home</a></li>
                        <li class="nav-item border-end px-2"><a href="index.php?page=infos" class="nav-link  color-1 fw-bold">8 Themen </a></li>
                        <li class="nav-item border-end px-2"><a href="index.php?page=login"  class="nav-link  color-1 fw-bold">Login</a></li>
                    </ul>
                </div>
            </nav>
    </div>
      