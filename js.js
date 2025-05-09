const icons = document.querySelectorAll('.nav-icon');
const highlight = document.getElementById('highlight');
const highlightIcon = document.getElementById('highlight-icon');

function moveHighlightTo(icon) {
    const rect = icon.getBoundingClientRect();
    const parentRect = icon.parentElement.getBoundingClientRect();
    const offset = rect.left - parentRect.left + rect.width / 2 - 32;
    highlight.style.left = `${offset}px`;

    // Skift ikon i cirkel
    const iconClass = icon.getAttribute('data-icon');
    highlightIcon.innerHTML = `<i class="fa-solid ${iconClass}"></i>`;

    // Vis alle ikoner igen
    icons.forEach(ic => ic.style.visibility = 'visible');

    // Skjul det valgte ikon nedenunder cirklen
    icon.style.visibility = 'hidden';
}

window.addEventListener('load', () => {
    const defaultIcon = document.querySelector('[data-icon="fa-tree"]');
    moveHighlightTo(defaultIcon);
});

icons.forEach(icon => {
    icon.addEventListener('click', () => {
        moveHighlightTo(icon);
    });
});