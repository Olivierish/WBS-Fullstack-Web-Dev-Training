<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Tag 09</title>
    <style>
        

        :root{
            --color-primary: #D83054; /*bs Body background */
            --color-secondary: #A90F2F; /*bs main background */
            --color-text: #1A1A1A; /*bs forms aside background */
            --color-accent: white; /*bs text main */
            --color-gray: #6C6C6C; /*bs text h1 */
            --color-green: #67ae1e; /*bs text green */
        }
        @font-face {
        font-family: 'Bellefair';
        src:url('fonts/Bellefair-Regular.ttf') format('truetype'),
            url('fonts/Bellefair-Regular.woff2') format('woff2'),
            url('fonts/Bellefair-Regular.woff') format('woff');
        }

        @font-face {
        font-family: 'Belleza';
        src:url('fonts/Belleza-Regular.ttf') format('truetype'),
            url('fonts/Belleza-Regular.woff2') format('woff2'),
            url('fonts/Belleza-Regular.woff') format('woff');
        }
        /*
        .bg-body{
            background-color: #193559 !important;
        }
        .bg-main{
            background-color: #262625;
        }
        .bg-second{
            background-color: #1A2873; 
        }
        */
        .color-1{
            color: var(--color-primary) !important;
        }
        .color-2{
            color: var(--color-secondary) !important;
        }
        .color-3{
            color: var(--color-green) !important;
        }
        .color-text{
            color: var(--color-text) !important;
        }
        .color-accent{
            color: var(--color-accent) !important;
        }
        .color-h0{
            color:white; /*form*/ 
        }
        .color-h1{
            color:#D9631E; /*h1*/
        }
        .color-h2{
            color:#DBF229; /*h2*/
        }
        .color-h3{
            color:#A6372D; /*h3 h4*/
        }
        body{
            margin: 0;
            font-family:  'Belleza',Helvetica, sans-serif !important;
        }
        
        /* For titles */
        h1, h2, h3, h4, h5, h6 {
        font-family: 'Bellefair', serif !important;
        }
        .logo{
            width: 180px;
            height: 50px;
            color: green;
        }
        .logo img{
            width: 100%;
            height: 100%;
        }
        .nav-link{
            color: var(--color-accent) !important;
            font-family:  'Belleza',Helvetica, sans-serif !important;

        }
        .nav-link:hover, .active{
            color:var(--color-primary) !important;
            text-decoration: underline; 
            text-underline-offset: 4px;
        }
        .man{
            color: var(--color-green);
        }
        .woman{
            color: var(--color-primary);
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }


    </style>
</head>
<body>
<div class="container position-fixed translate-20" style="z-index:5; left:50%; transform: translateX(-50%);">
    <nav class="navbar  navbar-expand-lg" >     
            <a class="navbar-brand" href="#">
                <div class="logo">
                    <img src="images/logo.svg" alt="logo"/>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-2"><a href="index.php" class="nav-link  text-light <?= classActiv($page);?>">Home</a></li>
                    <li class="nav-item px-2"><a href="index.php?page=kunden" class="nav-link  text-light <?= classActiv($page,'kunden');?>">Kunden</a></li>
                    <li class="nav-item px-2"><a href="index.php?page=rechner"  class="nav-link  text-light <?= classActiv($page,'rechner');?>">Rechner</a></li>
                    <li class="nav-item px-2"><a href="index.php?page=origin"  class="nav-link  text-light <?= classActiv($page,'origin');?>">Origin</a></li>
                </ul>
            </div>
    </nav>
</div>
