<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <!-- Favicon -->
    <link rel="icon" href="/application/public/img/main/logo.png" type="image">
    <link rel="shortcut icon" href="/application/public/img/main/icon.png">
    <!-- OG Tags -->
    <meta property="og:title" content="<?php echo $title ?>">
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="http://agency.nlf.name/application/public/img/main/Logo.png">
    <meta property="og:site_name" content="<?php echo $site_name ?>">
    <!-- Bootstrap Reboot CSS -->
    <link rel="stylesheet" href="/application/public/css/bootstrap-reboot.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/application/public/css/bootstrap.min.css">
    <!-- Hamburger -->
    <link rel="stylesheet" href="/application/public/css/hamburger.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <!-- Lightbox -->
    <link rel="stylesheet" href="/application/public/css/lightbox.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/application/public/css/main_2.css">
    <?php if(isset($css)): foreach($css as $style):?>
    <link href="/application/public/css/<?php echo $style;?>.css" rel="stylesheet">
    <?php endforeach; endif; ?>
</head>

<body translate="no">
