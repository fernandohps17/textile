<?php
$inicio = "";
$nosotros = "";
$servicios = "";
$proyecto = "";
$contacto = "";

if (strpos($_SERVER['REQUEST_URI'], 'servicios')) {
    $servicios = "here activeNav2";
} else if (strpos($_SERVER['REQUEST_URI'], 'nosotros')) {
    $nosotros = "here activeNav2";
} else if (strpos($_SERVER['REQUEST_URI'], 'contacto')) {
    $contacto = "here activeNav2";
} else if (strpos($_SERVER['REQUEST_URI'], 'proyecto')) {
    $proyecto = "here activeNav2";
} else if (strpos($_SERVER['REQUEST_URI'], 'inicio')) {
    $inicio = "";
} else {
    $inicio = "here activeNav2";
}
?>

<div class="container bg_header">
    <div class="content">

        <!-- Seccion  menu -->
        <div class="bar_top">
            <div class="bar_top_logo">
                <a href="/">
                    <picture class="picture-defer">
                        <source class="image source" type='image/webp' data-img="/public/img/textile-logo.webp">
                        <img class="image" data-img="/public/img/textile-logo.png" alt="Textile Logo" title="Textile Logo" width="100" height="100">
                    </picture>
                </a>
            </div>

            <div class="menu">
                <div class="toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" id="openMenu" height="48" width="48">
                        <path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z" />
                    </svg>
                </div>

                <div class="menu_enlaces" id="menuMobile">
                    <nav class="menu_enlaces_a">
                        <p class="closeMenu" id="closeMenu">X</p>
                        <a href="/" class="<?php echo $inicio ?>">Inicio</a>
                        <a href="#" class="<?php echo $nosotros ?>">Sobre Nosotros</a>
                        <a href="#" class="<?php echo $servicios ?>">Servicios</a>
                        <a href="#" class="<?php echo $proyecto ?>">Proyectos</a>
                        <a href="#" class="<?php echo $contacto ?>">Contacto</a>
                    </nav>
                    <div class="menu_idioma2">
                        <div class="menu_social_idioma">
                            <a href="/home/" lang="en">ENG </a>
                            <span>|</span>
                            <a href="/" lang="es">ESP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu_idioma">
                <a href="/home/" lang="en">ENG </a>
                <span>|</span>
                <a href="/" lang="es">ESP</a>
            </div>
        </div>



        <!-- Seccion Header -->
        <div class="header">

            <div class="header_img">
                <picture class="picture-defer">
                    <source class="image source" type='image/webp' data-img="/public/img/textile-header-imagen-principal.webp">
                    <img class="image" data-img="/public/img/textile-header-imagen-principal.jpg" alt="Textile imagen principal" title="Textile imagen principal" width="100" height="100">
                </picture>

                <div class="header_img_icon">
                    <a href="www.facebook.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a><br>

                    <a href="www.twitter.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"/></svg></a><br>

                    <a href="www.linkeding.com"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                </div>

            </div>


            <section class="header_content">
                <p class="encabezado"><b>Ganador de premios 2021</b></p>
                <header>
                    <h1 class="title">Textil y prendas de vestir <br> de alta calidad</h1>
                </header>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p><br>

                <div class="btn">
                    <a href="#">Aprende más</a>
                </div>
            </section>

        </div>



    </div>
</div>