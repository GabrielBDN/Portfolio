<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gabriel BÉDUNEAU</title>
    <link rel="icon" href="<?php echo Chemins::IMAGES . 'icon.ico'; ?>" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo Chemins::STYLES . 'bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo Chemins::STYLES . 'styles.css'; ?>">
    <script src="<?php echo Chemins::JS . 'jquery-3.2.1.min.js'; ?>"></script>
    <script src="<?php echo Chemins::JS . 'bootstrap.min.js'; ?>"></script>
    <script src="<?php echo Chemins::JS . 'mixitup.js'; ?>"></script>

</head>

<body>
<div id="content-wrapper">
    <header class="header header--bg">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">ACCUEIL</a></li>
                        <li><a href="index.php?controleur=APM&action=afficher">À PROPOS DE MOI</a></li>
                        <li><a href="index.php?controleur=Skill&action=afficher">SKILL</a></li>
                        <li><a href="index.php?controleur=Portfolio&action=afficher">PORTFOLIO</a></li>
                        <li><a href="index.php?controleur=Contact&action=afficher">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
            <div class="header__content text-center">
                <span class="header__content__block">BONJOUR</span>
                <h1 class="header__content__title">JE SUIS GABRIEL BÉDUNEAU</h1>
                <ul class="header__content__sub-title">

                    <li>DÉVELOPPEUR WEB</li>

                </ul>
                <a class="header__button" href="index.php?controleur=Contact&action=afficher">Me contacter ?</a>
            </div>
        </div>
    </header>