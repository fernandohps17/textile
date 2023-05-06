(() => {
    const sourceMobile = document.getElementById("sourceMobile");
    const sourceDes = document.getElementById("sourceDes");
    const imageDes = document.getElementById("imageDes");

    const imagenes = [
        {
            image: "/public/img/home-textile-portada-slides1.jpg",
            webp: "/public/img/home-textile-portada-slides1.webp",
            mobile: "/public/img/home-textile-portada-slides1-mobile.webp",
        },
        {
            image: "/public/img/bg_services.jpg",
            webp: "/public/img/bg_services.jpg",
            mobile: "/public/img/bg_services.jpg",
        },
    ];

    let indiceImagenes = 0;

    function cambiarImagenes() {
        imageDes.src = imagenes[indiceImagenes].image;
        sourceDes.srcset = imagenes[indiceImagenes].webp;
        sourceMobile.srcset = imagenes[indiceImagenes].mobile;

        if (indiceImagenes < 1) {
            indiceImagenes++;
        } else {
            indiceImagenes = 0;
        }
    }

    setInterval(cambiarImagenes, 5000);
})();