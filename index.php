<?php
session_start();
require_once "./comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Textile, empresa del area textil">
    <meta name="theme-color" content="#2b2c6b">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="canonical" href="https://www.textile.com/">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">

    <title>Textile</title>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Manisur",
            "image": "https://www.textile.com/public/img/textile-logo.webp",
            "telephone": ["34 956 888 601"],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Direccion sin local"
            },
            "url": "https://www.textile.com/"
        }
    </script>
</head>

<body>
    <?php
        require_once './comons/nav.php';
        require_once './comons/icon_principal.php';
        require_once './comons/about.php';
        require_once './comons/services.php';
        require_once './comons/projects.php';
        require_once './comons/testimony.php';
    ?>

    <script src="/public/js/carga_diferida.js"></script>
    <script src="/public/js/menu.js"></script>
</body>
</html>