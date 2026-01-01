/**
 * Gestion des modals Bootstrap et confirmations
 */

// Confirmation avant action importante
function confirmAction(message, callback) {
    const modal = document.createElement('div');
    modal.className = 'modal fade';
    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>${message}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirm-btn">Confirmer</button>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    const bsModal = new bootstrap.Modal(modal);
    bsModal.show();
    
    modal.querySelector('#confirm-btn').addEventListener('click', function() {
        callback();
        bsModal.hide();
        setTimeout(() => modal.remove(), 300);
    });
    
    modal.addEventListener('hidden.bs.modal', function() {
        modal.remove();
    });
}

// Initialiser les confirmations pour les boutons avec data-confirm
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('[data-confirm]').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const message = this.getAttribute('data-confirm');
            const form = this.closest('form');
            
            confirmAction(message, function() {
                if (form) {
                    form.submit();
                } else if (this.href) {
                    window.location.href = this.href;
                }
            }.bind(this));
        });
    });
});



