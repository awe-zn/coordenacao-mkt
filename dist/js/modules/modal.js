export default function initModal() {
  const modalButtons = document.querySelectorAll('[data-modal-item="button"]');

  modalButtons.forEach((modalButton) => {
    modalButton.addEventListener('click', handleModal);
  });

  function handleModal({ currentTarget }) {
    const modal = document.querySelector(`#${currentTarget.dataset.modalId}`);

    if (currentTarget.dataset.modalAction === 'open') {
      modal.classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
    } else if (currentTarget.dataset.modalAction === 'close') {
      modal.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    }
  }
}
