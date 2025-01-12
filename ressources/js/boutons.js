const boutonSpecial = document.getElementById("btn-special");
const heroBgVideo = document.getElementById("heroBgVideo");
const actualHeroBg = document.getElementById("actualHeroBg");
let heroBgVideoEnCours = false;

let heroBgVideoSRC = ["bg-video-purpleNebula.mp4", "bg-video-galaxy.mp4"];
let maskImageSRC = ["transition-ink", "transition-inkSplash1", "transition-inkSplash2"];
let actualSRC = heroBgVideoSRC[0];

function pickRandomVideo() {
    return "../ressources/video/" + heroBgVideoSRC[Math.floor(Math.random() * (heroBgVideoSRC.length))];
}

function pickRandomMaskImage() {
    return "../ressources/img/" + maskImageSRC[Math.floor(Math.random() * (heroBgVideoSRC.length))] + ".gif";
}

boutonSpecial.addEventListener("mouseenter", ev => {
    heroBgVideo.style.filter = "blur(2px)"
    heroBgVideo.style.transition = "0.5s all ease";  // Directly modify the style
});

boutonSpecial.addEventListener("mouseleave", ev => {
    heroBgVideo.style.filter = "blur(0px)";
    heroBgVideo.style.transition = "0.5s all ease";// Directly modify the style
});

let On = false;
boutonSpecial.addEventListener("click", ev => {
    let newSRC;
    //Force animation replay by invalidating mask-image with a timestamp
    const timestamp = Date.now();
    if (!On) {
        do {
            newSRC = pickRandomVideo();
            console.log(newSRC)
        } while (newSRC === actualSRC)
        heroBgVideo.src = newSRC;
        actualHeroBg.style.maskImage =  "none";
        actualHeroBg.style.backgroundColor = "transparent";
        heroBgVideo.style.maskImage =  `url("${pickRandomMaskImage()}?${timestamp}")`;
        heroBgVideoEnCours ? heroBgVideo.play() : heroBgVideo.pause();
    } else {
        heroBgVideo.style.maskImage =  "none";
        actualHeroBg.style.backgroundColor = "#121212";
        actualHeroBg.style.maskImage =  `url("${pickRandomMaskImage()}?${timestamp}")`;
    }
    On = !On;
});


function spin(element) {
    if (!element.classList.contains("rotated")) {
        element.classList.add("rotated");
        heroBgVideo.play();
        heroBgVideoEnCours = true;
        if (element.style.rotate === "")
            element.style.rotate = "90deg";
        else
            element.style.rotate = `calc(${element.style.rotate} + 90deg)`;
    } else {
        element.classList.remove("rotated");
        heroBgVideo.pause();
        heroBgVideoEnCours = false;
        element.style.rotate = `calc(${element.style.rotate} + 90deg)`;
    }
}





