const icons = document.querySelectorAll('.nav-icon');
const highlight = document.getElementById('highlight');
const highlightIcon = document.getElementById('highlight-icon');

function moveHighlightTo(icon) {
    const rect = icon.getBoundingClientRect();
    const parentRect = icon.parentElement.getBoundingClientRect();
    const offset = rect.left - parentRect.left + rect.width / 2 - 32;
    highlight.style.left = `${offset}px`;

    // Skift ikon i cirkel
    const iconType = icon.getAttribute('data-icon');

    if (iconType === 'custom-image') {
        highlightIcon.innerHTML = `<img src="images/julehjaelp-hat-icon.png" style="width: 60%; height: 60%;">`;
    } else {
        highlightIcon.innerHTML = `<i class="fa-solid ${iconType}"></i>`;
    }

    // Vis alle ikoner igen
    icons.forEach(ic => ic.style.visibility = 'visible');

    // Skjul det valgte ikon nedenunder cirklen
    icon.style.visibility = 'hidden';
}

window.addEventListener('load', () => {
    const path = window.location.pathname;
    let currentIcon;

    if (path.includes('donate')) {
        currentIcon = document.querySelector('[data-icon="fa-dollar-sign"]');
    } else if (path.includes('info')) {
        currentIcon = document.querySelector('[data-icon="fa-circle-info"]');
    } else {
        currentIcon = document.querySelector('[data-icon="custom-image"]'); // default
    }

    if (currentIcon) {
        moveHighlightTo(currentIcon);
    }
});

icons.forEach(icon => {
    icon.addEventListener('click', () => {
        moveHighlightTo(icon);
    });
});
