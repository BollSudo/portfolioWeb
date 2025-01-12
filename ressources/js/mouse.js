let xCoord = 0;
let yCoord = 0;
let xOffset = 10;
let yOffset = 10;
// const trail = createTrail(100, 10);

class Trail {
    trailLength;
    trailColor;
    trailSize;
    trailContainer;

    constructor(trailLength, trailColor, trailSize) {
        this.trailLength = trailLength;
        this.trailColor = trailColor;
        this.trailSize = trailSize;
        this.trailContainer = [];
    }

    update() {
        const rect = canvas.getBoundingClientRect();
        const scaleX = canvas.width / canvas.offsetWidth;
        const scaleY = canvas.height / canvas.offsetHeight;
        const x = (xCoord+xOffset - rect.left) * scaleX;
        const y = (yCoord+yOffset - rect.top) * scaleY;
        trail.get().push({ x, y });
        if (this.trailContainer.length > this.trailLength) {
            this.trailContainer.shift();
        }
    }

    get() {
        return this.trailContainer;
    }

    getLength() {
        return this.trailLength;
    }

    getSize() {
        return this.trailSize;
    }

    getColor() {
        return this.trailColor;
    }
}

const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const trail = new Trail(10, '25, 25, 100', 1.2)

document.addEventListener("scroll", (event) => {
    // trail.style.top = yCoord+yOffset+yScroll+"px";
    // trail.style.left = xCoord+xOffset+xScroll+"px";
    trail.update();
});

document.addEventListener("mousemove", (event) => {
    xCoord = event.clientX;
    yCoord = event.clientY;
    // trail.style.top = yCoord+yOffset+yScroll+"px";
    // trail.style.left = xCoord+xOffset+xScroll+"px";
    trail.update();
});

document.addEventListener("touchmove", (event) => {
    xCoord = event.clientX;
    yCoord = event.clientY;
    trail.update();
});

// Animation loop (using requestAnimationFrame)
function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw trail elements
    trail.get().forEach((dot, index) => {
        const alpha = (trail.getLength() - index) / trail.getLength();
        ctx.fillStyle = `rgba(${trail.getColor()}, ${alpha})`;
        ctx.shadowBlur = 5;
        ctx.shadowColor = `rgba(${trail.getColor()}, ${alpha})`;
        ctx.beginPath();
        ctx.arc(dot.x, dot.y, trail.getSize(), 0, 2 * Math.PI);
        ctx.fill();
    });
    requestAnimationFrame(animate);
}

animate();