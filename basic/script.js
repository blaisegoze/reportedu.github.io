const modeToggleBtn = document.getElementById('mode-toggle-btn');
const body = document.body;

modeToggleBtn.addEventListener('click', () => {
  body.classList.toggle('dark-mode');
});
