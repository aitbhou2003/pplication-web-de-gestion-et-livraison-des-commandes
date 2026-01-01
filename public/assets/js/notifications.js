/**
 * Système de notifications toast
 */

function showNotification(message, type = 'info', duration = 5000) {
    // Créer le conteneur s'il n'existe pas
    let container = document.getElementById('toast-container');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toast-container';
        container.style.cssText = 'position: fixed; top: 20px; right: 20px; z-index: 9999; max-width: 400px;';
        document.body.appendChild(container);
    }

    // Créer la notification
    const toast = document.createElement('div');
    toast.className = `alert alert-${type} alert-dismissible fade show`;
    toast.setAttribute('role', 'alert');
    toast.style.cssText = 'margin-bottom: 1rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);';
    
    // Icônes selon le type
    const icons = {
        'success': '✓',
        'danger': '✕',
        'warning': '⚠',
        'info': 'ℹ'
    };
    
    toast.innerHTML = `
        <strong>${icons[type] || ''}</strong> ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    container.appendChild(toast);
    
    // Auto-suppression après la durée spécifiée
    if (duration > 0) {
        setTimeout(() => {
            if (toast.parentNode) {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 300);
            }
        }, duration);
    }
    
    return toast;
}

// Fonction pour afficher une notification de succès
function showSuccess(message, duration) {
    return showNotification(message, 'success', duration);
}

// Fonction pour afficher une notification d'erreur
function showError(message, duration) {
    return showNotification(message, 'danger', duration);
}

// Fonction pour afficher une notification d'avertissement
function showWarning(message, duration) {
    return showNotification(message, 'warning', duration);
}

// Fonction pour afficher une notification d'information
function showInfo(message, duration) {
    return showNotification(message, 'info', duration);
}



