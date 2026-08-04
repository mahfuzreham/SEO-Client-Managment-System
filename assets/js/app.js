document.addEventListener('DOMContentLoaded', () => {
  const bars = document.querySelectorAll('[data-progress]');
  bars.forEach((bar) => {
    const value = bar.getAttribute('data-progress') || '0';
    bar.style.width = `${value}%`;
    bar.setAttribute('aria-valuenow', value);
  });
});
