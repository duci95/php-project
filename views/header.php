<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Miks Zona</title>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <a href="index.php?page=pocetna"><img src="images/logo.png" alt="logo"  ></a>
        </div>
        <nav>
            <ul>
                <?php
                $sum = select("SELECT * FROM link WHERE ID_link_parent = -1");
                foreach ($sum as $item) : ?>
                    <li><a href="index.php?<?=$item->putanja?>" class="nav"><?=$item->naziv ?></a></li>
                <?php endforeach;
                if(isset($_SESSION['user'])): ?>
                    <li class="info-left"><a href="#"  class="nav "><?=$_SESSION['user']->username?></a></li>
                    <li class="info-right"><a href="odjava.php" class="nav">Odjavi se</a></li>
                <?php else: ?>
                    <li class="info-left"> <a href="prijava.php" class="nav">Prijava</a></li>
                    <li class="info-right"> <a href="registracija.php" class="nav ">Registracija</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div id="criteria">
            <input type="search" id="search" placeholder="Pretraži vesti..." />
            <i class="fa fa-search"></i>
        </div>
    </div>
