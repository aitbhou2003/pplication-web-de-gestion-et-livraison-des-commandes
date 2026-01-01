/**
 * Système de filtrage dynamique pour les tableaux et listes
 */

function setupTableFilters() {
    document.querySelectorAll('[data-filter-table]').forEach(filterInput => {
        const tableId = filterInput.getAttribute('data-filter-table');
        const table = document.getElementById(tableId);
        
        if (!table) return;
        
        filterInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = table.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    });
}

function setupStatusFilters() {
    document.querySelectorAll('[data-filter-status]').forEach(filterBtn => {
        filterBtn.addEventListener('click', function() {
            const status = this.getAttribute('data-filter-status');
            const tableId = this.getAttribute('data-filter-table');
            const table = document.getElementById(tableId);
            
            if (!table) return;
            
            // Mettre à jour les boutons actifs
            this.parentNode.querySelectorAll('button').forEach(btn => {
                btn.classList.remove('active');
            });
            this.classList.add('active');
            
            // Filtrer les lignes
            const rows = table.querySelectorAll('tbody tr');
            rows.forEach(row => {
                if (status === 'all') {
                    row.style.display = '';
                } else {
                    const rowStatus = row.getAttribute('data-status');
                    row.style.display = rowStatus === status ? '' : 'none';
                }
            });
        });
    });
}

function setupAdvancedFilters() {
    document.querySelectorAll('.filter-form').forEach(form => {
        form.addEventListener('change', function() {
            const tableId = this.getAttribute('data-filter-table');
            const table = document.getElementById(tableId);
            
            if (!table) return;
            
            const formData = new FormData(this);
            const filters = {};
            
            for (let [key, value] of formData.entries()) {
                if (value) {
                    filters[key] = value.toLowerCase();
                }
            }
            
            const rows = table.querySelectorAll('tbody tr');
            rows.forEach(row => {
                let matches = true;
                
                for (let [key, value] of Object.entries(filters)) {
                    const cell = row.querySelector(`[data-filter-${key}]`);
                    if (cell) {
                        const cellText = cell.textContent.toLowerCase();
                        if (!cellText.includes(value)) {
                            matches = false;
                            break;
                        }
                    }
                }
                
                row.style.display = matches ? '' : 'none';
            });
        });
    });
}

// Initialisation
document.addEventListener('DOMContentLoaded', function() {
    setupTableFilters();
    setupStatusFilters();
    setupAdvancedFilters();
});



