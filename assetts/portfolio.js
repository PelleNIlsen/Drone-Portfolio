function openModal(modalId) {
    var modal = document.getElementById(modalId);
    var img = modal.previousElementSibling.previousElementSibling;
    var captionText = document.getElementById(modalId + 'caption');
    modal.style.display = "block";
    var modalImg = modal.querySelector(".modal-content");
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}