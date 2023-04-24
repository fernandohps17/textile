<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#DCD3E4">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description" content="En Textile realizamos creamos y diseños con las mejores telas.">

    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="canonical" href="https://www.textile.com/">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">

    <title>Textile | Login</title>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Textile",
            "image": "https://www.textile.com/public/img/home_textile_logo.webp",
            "telephone": ["58 412 555 51 18"],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Distrito Capital, Caracas - 1010, Venezuela"
            },
            "url": "https://www.textile.com/"
        }
    </script>
</head>

<body>


    <?php
    require_once "../comons/bar_top.php";
    ?>


    <!-- Menu de Navegacion -->
    <div class="container bg_nav">
        <div class="content">
            <div class="nav">
                <div class="nav_logo" id="home">
                    <picture>
                        <source type='image/webp' srcset="/public/img/home-textile-logo.webp">
                        <img class="imageSlider" src="/public/img/home-textile-logo.png" alt="Textile Logo" title="Textile Logo" width="100" height="100">
                    </picture>
                </div>
                <div class="toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
                        <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
                    </svg>
                </div>

                <nav class="nav_enlaces" id="menuMobile">
                    <p class="closeMenu" id="closeMenu">X</p>
                    <a href="/">Inicio</a>
                    <a href="/#about">Nosotros</a>
                    <a href="/#services">Servicios</a>
                    <a href="/#contact">Contacto</a>
                </nav>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="content">
            <div class="pdf">
                <section class="pdf_title">
                    <header>
                        <h1>Subir PDF</h1>
                    </header>
                    <p>El archivo PDF debe tener el nombre (catalogo)</p>
                </section>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="documento" id="">
                    <br><br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

    <?php

    $width = 200;

    if (isset($_FILES['documento']) && $_FILES['documento']['type'] == 'application/pdf') {

        if ($_FILES['documento']['size'] < ($width * 1024)) {

            move_uploaded_file($_FILES['documento']['tmp_name'], 'documentos/' . $_FILES['documento']['name']);
            echo "<br>";
            echo "<div class='exito'>Documento guardado correctamente</div>";
        } else {
            echo "<br>";
            echo "<div class='alerta'>El documento supera el peso permitido</div>";
        }
    } else if (isset($_FILES['documento']) && $_FILES['documento']['type'] != 'application/pdf') {
        echo "<br>";
        echo "<div class='error'>Solo se admiten documentos PDF</div>";
    };


    ?>

    <?php
    require_once "../comons/btn_top.php";
    require_once "../comons/footer.php";
    ?>

</body>

<script src="/public/js/menu.js"></script>
<script src="/public/js/carga_diferida.js"></script>


</html>