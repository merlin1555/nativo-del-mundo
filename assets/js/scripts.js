const btnTop = document.getElementById('btnTop');

window.addEventListener('scroll', () => {
  if (window.scrollY === 0) {
    btnTop.classList.remove('hidden');
  } else {
    btnTop.classList.add('hidden');
  }
});
