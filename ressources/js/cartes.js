

const cartes = document.querySelectorAll(".carte");

window.addEventListener("mousemove", (e) => {

    cartes.forEach( (carte) => {
        const blob = carte.querySelector(".blob");
        const fakeblob = carte.querySelector(".fakeblob");

        const rec = fakeblob.getBoundingClientRect();

        blob.animate(
            [{
                transform: `translate(${e.clientX - rec.left - (rec.width / 2)}px,${e.clientY - rec.top - (rec.height / 2)}px)`,
            }],
            {
                duration: 300,
                fill: "forwards",
            }
        );
    });
});
