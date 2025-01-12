function openModal(imageSrc, title) {
    let modal = document.getElementById("myModal");
    let modalImg = document.getElementById("modalImage");
    let modalTitle = document.getElementById("modalTitle");
    modalTitle.innerHTML = title;
    modal.style.display = "block";
    modalImg.src = imageSrc;

}
function closeModal() {
    let modal = document.getElementById("myModal");
    modal.style.display = "none";
}