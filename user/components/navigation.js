document.addEventListener('DOMContentLoaded', function() {
    const mainContent = document.getElementById('main-content');
    const navLinks = document.querySelectorAll('.nav-sidebar .nav-link');
    const navItems = document.querySelectorAll('.nav-sidebar .nav-item');
    const contentCache = new Map();

    // Preload function
    function preloadContent(url) {
        if (!contentCache.has(url)) {
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    contentCache.set(url, data);
                })
                .catch(error => console.error('Preload error:', error));
        }
    }

    // Load content function
    function loadContent(url) {
        if (contentCache.has(url)) {
            mainContent.innerHTML = contentCache.get(url);
            return Promise.resolve();
        } else {
            return fetch(url)
                .then(response => response.text())
                .then(data => {
                    contentCache.set(url, data);
                    mainContent.innerHTML = data;
                });
        }
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('href');
            if (url !== '#') {
                loadContent(url)
                    .then(() => updateActiveState(this))
                    .catch(error => console.error('Error:', error));
            }
        });

        // Preload content on mouseover
        link.addEventListener('mouseover', function() {
            const url = this.getAttribute('href');
            if (url !== '#') {
                preloadContent(url);
            }
        });
    });

    function updateActiveState(clickedLink) {
        // Remove active class from all links
        navLinks.forEach(link => link.classList.remove('active'));
        
        // Add active class to clicked link
        clickedLink.classList.add('active');

        // Handle menu-is-opening and menu-open classes
        navItems.forEach(item => {
            item.classList.remove('menu-is-opening', 'menu-open');
            if (item.contains(clickedLink) && item.querySelector('.nav-treeview')) {
                item.classList.add('menu-is-opening', 'menu-open');
            }
        });
    }

    // Initial preload of all pages
    navLinks.forEach(link => {
        const url = link.getAttribute('href');
        if (url !== '#') {
            preloadContent(url);
        }
    });
});