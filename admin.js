function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('active');
}

document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.querySelector('.menu-toggle');
    if (window.innerWidth <= 992) {
        if (sidebar && !sidebar.contains(event.target) && !toggleBtn.contains(event.target)) {
            sidebar.classList.remove('active');
        }
    }
});