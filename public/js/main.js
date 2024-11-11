const modalComponent = document.querySelector("#modal");

function openModal() {
  modalComponent.classList.add("open");
  modalComponent.classList.remove("close");
}

function closeModal() {
  modalComponent.classList.add("close");
  modalComponent.classList.remove("open");
}