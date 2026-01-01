/**
 * Gestion du thème (mode clair/sombre)
 */

const THEME_KEY = 'app-theme';
const DARK_THEME = 'dark';
const LIGHT_THEME = 'light';

function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem(THEME_KEY, theme);
    
    // Mettre à jour le toggle si présent
    const toggle = document.getElementById('theme-toggle');
    if (toggle) {
        toggle.checked = theme === DARK_THEME;
    }
}

function getTheme() {
    return localStorage.getItem(THEME_KEY) || LIGHT_THEME;
}

function toggleTheme() {
    const currentTheme = getTheme();
    const newTheme = currentTheme === DARK_THEME ? LIGHT_THEME : DARK_THEME;
    setTheme(newTheme);
}

// Initialisation au chargement
document.addEventListener('DOMContentLoaded', function() {
    const savedTheme = getTheme();
    setTheme(savedTheme);
    
    // Ajouter l'écouteur sur le toggle
    const toggle = document.getElementById('theme-toggle');
    if (toggle) {
        toggle.addEventListener('change', function() {
            toggleTheme();
        });
    }
});



