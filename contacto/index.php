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
    <meta name="description" content="En Textile realizamos creamos y diseñamos con las mejores telas.">

    <link rel="stylesheet" href="/public/css/home.css">
    <link rel="stylesheet" href="/public/css/about.css">
    <link rel="canonical" href="https://www.textile.com/contacto">
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
            "url": "https://www.textile.com/contacto"
        }
    </script>
</head>

<body>
    <main>
        <?php
        require_once "../comons/bar_top.php";
        require_once "../comons/nav.php";
        require_once "../comons/button_ws.php";
        ?>

        <!-- Section Contacto -->
        <div class="banner1">
            <div class="container">
                <div class="content">
                    <!-- SECCION FROM -->
                    <div class="section_form" id="contact">

                        <div class="section_form_form">
                            <div class="section_form_form_text">
                                <div class="section_form_form_subtitle show_contacto">
                                    <p><b>Contacto</b></p>
                                </div>
                            </div>

                            <section class="section_form_form_text_title">
                                <header>
                                    <h2>¿Quieres un contacto <br> más directo con nuestro equipo?</h2>
                                </header>
                            </section>

                            <div class="section_formulario">
                                <div class="form_form">
                                    <form class="section_form_inputs" action="/consulta/" method="POST">
                                        <div class="section_from_uno">
                                            <label class="section_form_inputs_encabezado">
                                                <input type="text" name="name" required placeholder="Nombre">
                                            </label>

                                            <label class="section_form_inputs_encabezado">
                                                <input type="text" name="email" required placeholder="Email">
                                            </label>
                                        </div>

                                        <label class="section_form_inputs_encabezado">
                                            <textarea name="mensaje" cols="3" rows="5" placeholder="Mensaje" required></textarea>
                                        </label>

                                        <div class="section_form_inputs_botones">
                                            <div class="section_form_boton">
                                                <input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
                                                <button type="submit">Envia tu mensaje</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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