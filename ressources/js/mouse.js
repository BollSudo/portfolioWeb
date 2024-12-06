let xCoord = 0;
let yCoord = 0;
let xOffset = 10;
let yOffset = 10;
const trail = createTrail(100, 10);


function createTrail() {
    const trail = document.createElement("div");
    trail.id = "mouse-trail";
    trail.classList.add("mouse-trail");
    trail.style.position = "absolute";
    trail.style.top = yCoord+yOffset+"px";
    trail.style.left = xCoord+xOffset+"px";
    trail.style.backgroundColor = "blue";
    trail.style.height = "50px";
    trail.style.width = "50px";
    document.body.appendChild(trail);
    return trail;
}

document.addEventListener("mousemove", (event) => {
    xCoord = event.clientX;
    yCoord = event.clientY;
    trail.style.top = yCoord+yOffset+"px";
    trail.style.left = xCoord+xOffset+"px";
    console.log(trail);
});


