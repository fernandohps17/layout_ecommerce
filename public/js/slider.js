(() => {
    const sourceMobile = document.getElementById("sourceMobile");
    const sourceDes = document.getElementById("sourceDes");
    const imageDes = document.getElementById("imageDes");
    // const timeInteval = 1000;

    const imagenes = [
        {
            image: "/public/img/imagen1.jpg",
            webp: "/public/img/imagen1.webp",
            mobile: "/public/img/imagen1.webp",
        },
        {
            image: "/public/img/imagen2.jpg",
            webp: "/public/img/imagen2.webp",
            mobile: "/public/img/imagen2.webp",
        },
        {
            image: "/public/img/imagen3.jpg",
            webp: "/public/img/imagen3.webp",
            mobile: "/public/img/imagen3.webp",
        },
        {
            image: "/public/img/imagen4.jpg",
            webp: "/public/img/imagen4.webp",
            mobile: "/public/img/imagen4.webp",
        },
        {
            image: "/public/img/imagen5.jpg",
            webp: "/public/img/imagen5.webp",
            mobile: "/public/img/imagen5.webp",
        },
    ];

    let indiceImagenes = 0;

    function cambiarImagenes(action = "next") {
        if (action === "next") {
            if (indiceImagenes < imagenes.length - 1) {
                indiceImagenes++;
            } else {
                indiceImagenes = 0;
            }
        } else {
            if (indiceImagenes === 0) {
                indiceImagenes = imagenes.length - 1
            } else {
                indiceImagenes--;
            }
        }

        imageDes.src = imagenes[indiceImagenes].image;
        sourceDes.srcset = imagenes[indiceImagenes].webp;
        sourceMobile.srcset = imagenes[indiceImagenes].mobile;
        // title.innerHTML = imagenes[indiceImagenes].title;
        // subtitle.innerHTML = imagenes[indiceImagenes].subtitle;
    }

    // arrow_right.addEventListener('click', () => {
    //     cambiarImagenes()

    //     clearInterval(myTimer);
    //     myTimer = window.setInterval(cambiarImagenes, timeInteval);
    // });

    // arrow_left.addEventListener('click', () => {
    //     cambiarImagenes("prev")

    //     clearInterval(myTimer);
    //     myTimer = window.setInterval(cambiarImagenes, timeInteval);
    // });

    // let myTimer = window.setInterval(cambiarImagenes, timeInteval);
    setInterval(cambiarImagenes, 5000)
})();