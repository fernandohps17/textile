<?php
session_start();
require_once "../comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#9c1323">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriend" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description" content="En Textile realizamos creamos y diseños con las mejores telas.">

    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet" href="/public/css/about.css">
    <link rel="canonical" href="https://www.textile.com/">
    <link rel="apple-touch-icon" href="/public/icon/favicon.ico">
    <link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
    <link rel="icon" href="/public/icon/favicon.ico">

    <title>Maceió textile | Nosotros</title>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "Maceió textile",
            "image": "https://www.textile.com/public/img/home_textile_logo.webp",
            "telephone": ["55 4631 2410"],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Distrito Capital, Caracas - 1010, Venezuela"
            },
            "url": "https://www.textile.com/"
        }
    </script>
</head>

<body>
    <main>
        <?php
        require_once "../comons/bar_top.php";
        require_once "../comons/nav.php";
        ?>

        <!-- Section About -->
        <div class="banner">
            <div class="container">
                <div class="content">
                    <div class="about">
                        <div class="about_subtitle">
                            <p><b>NOSOTROS</b></p>
                        </div>


                        <!-- Primera Section de texto -->
                        <div class="about_texto">
                            <section class="about_title">
                                <header>
                                    <h1>Sobre Maceió Textile</h1>
                                </header>
                            </section>
                            <div class="about_subtitle">
                                <p>El principal perfil de nuestra empresa es la venta de telas en tapicería de calidad y alta decoración.</p>
                                <p>El diseño moderno, las texturas variadas y una amplia gama de colores hacen a nuestra <br> colección muy atractiva, siguiendo las tendencias actuales estamos constantemente enriqueciendo nuestras nuevas colecciones.</p>
                            </div>
                        </div>

                        <!-- Segunda Section de texto -->
                        <div class="about_texto">

                            <section class="about_title">
                                <header>
                                    <h2>DISEÑO INNOVADOR + TENDENCIAS</h2>
                                </header>
                            </section>
                            <div class="about_subtitle">
                                <p>Pensando a futuro, visitamos las ferias de textiles, decoración y muebles <br> más importantes del mundo, prestando atención a las nuevas tendencias de diseño y color.</p>
                            </div>
                        </div>

                        <!-- Tercera Section de texto -->
                        <div class="about_texto">
                            <section class="about_title">
                                <header>
                                    <h2>STOCK Y DISTRIBUCIÓN</h2>
                                </header>
                            </section>
                            <div class="about_subtitle">
                                <p>Contamos con un centro de distribución, ubicado estratégicamente en el corazón <br> industrial de CDMX, garantizamos la entrega de nuestras telas en dos días hábiles.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        require_once "../comons/footer.php";
        ?>
    </main>
</body>
<script src="/public/js/menu.js"></script>

</html>