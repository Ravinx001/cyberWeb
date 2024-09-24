// Simple-DataTable
window.addEventListener('DOMContentLoaded', event => {
    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }
});

// Toggle the side navigation
window.addEventListener('DOMContentLoaded', event => {

    const sidebarToggle = document.body.querySelector('#sidebarToggle');

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// Flash Alert Auto hide
document.addEventListener("DOMContentLoaded", function () {

    // Hide the alert after 10 seconds
    setTimeout(function () {
        document.querySelector('.alert').classList.add('fade');
        setTimeout(function () {
            document.querySelector('.alert').style.display = 'none';
        }, 500); // Wait for the fade-out animation to complete
    }, 5000); // 10000 milliseconds = 10 seconds
});
