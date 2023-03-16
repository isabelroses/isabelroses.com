<script>
    document.getElementById('theme-toggle').addEventListener('click', function() {
        if (document.body.classList.contains('theme-ctp-mocha')) {
            document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Macchiato';
            document.body.classList.remove('theme-ctp-mocha');
            document.body.classList.add('theme-ctp-macchiato');
            localStorage.setItem('theme', 'theme-ctp-macchiato');
        } else if (document.body.classList.contains('theme-ctp-macchiato')) {
            document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Frappe';
            document.body.classList.remove('theme-ctp-macchiato');
            document.body.classList.add('theme-ctp-frappe');
            localStorage.setItem('theme', 'theme-ctp-frappe');
        } else if (document.body.classList.contains('theme-ctp-frappe')) {
            document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Latte';
            document.body.classList.remove('theme-ctp-frappe');
            document.body.classList.add('theme-ctp-latte');
            localStorage.setItem('theme', 'theme-ctp-latte');
        } else if (document.body.classList.contains('theme-ctp-latte')) {
            document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Mocha';
            document.body.classList.remove('theme-ctp-latte');
            document.body.classList.add('theme-ctp-mocha');
            localStorage.setItem('theme', 'theme-ctp-mocha');
        } else {
            document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Macchiato';
            document.body.classList.add('theme-ctp-macchiato');
            localStorage.setItem('theme', 'theme-ctp-macchiato');
        }
    });
    window.addEventListener("load", (event) => {
        var theme = localStorage.getItem('theme');
        if (theme != null) {
            document.body.classList.add(theme);
            if (theme == "theme-ctp-mocha") {
                document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Mocha';
            } else if (theme == "theme-ctp-macchiato") {
                document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Macchiato';
            } else if (theme == "theme-ctp-frappe") {
                document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Frappe';
            } else {
                document.getElementById('theme-toggle-words').innerHTML = 'Catppuccin Latte';
            }
        }
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("sw.js");
        }
    });
</script>