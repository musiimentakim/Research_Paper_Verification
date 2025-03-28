document.addEventListener("DOMContentLoaded", function () {
    // Select the toggle button, icon, and collapsible content
    const toggleButton = document.getElementById('toggleDetails');
    const toggleIcon = document.getElementById('toggleIcon');
    const collapseSection = document.getElementById('criteriaDetails');

    // Initialize Bootstrap Collapse (this will be used to toggle the collapse content)
    const collapse = new bootstrap.Collapse(collapseSection, {
        toggle: false  // Initial state, don't toggle automatically
    });

    // Add click event to toggle button
    toggleButton.addEventListener('click', function() {
        // Toggle the collapse section
        collapse.toggle();
    });

    // Listen to Bootstrap collapse events to change the icon
    collapseSection.addEventListener('shown.bs.collapse', function () {
        // When the collapse section is shown, update the icon to minus
        toggleIcon.classList.remove('fa-plus-circle');
        toggleIcon.classList.add('fa-minus-circle');
    });

    collapseSection.addEventListener('hidden.bs.collapse', function () {
        // When the collapse section is hidden, update the icon to plus
        toggleIcon.classList.remove('fa-minus-circle');
        toggleIcon.classList.add('fa-plus-circle');
    });
});
