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

<div class="container bg_nav">
    <div class="content">
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
                </div>
            </div>







            <div class="menu_idioma">
                <a href="/home/" lang="en">ENG </a>
                <span>|</span>
                <a href="/" lang="es">ESP</a>
            </div>
        </div>
    </div>
</div>