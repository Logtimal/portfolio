</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="site-info">
            <p>&copy; <?php echo date('Y'); ?> Louison Petit - Portfolio</p>
            <div class="footer-links">
                <a href="https://github.com/Logtimal" target="_blank">GitHub</a>
                <a href="https://linkedin.com/in/louison-petit" target="_blank">LinkedIn</a>
                <a href="mailto:louisonpetit67@gmail.com">Contact</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    // Script simple pour le menu déroulant
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownBtn = document.querySelector('.dropbtn');
        if (dropdownBtn) {
            dropdownBtn.addEventListener('click', function() {
                this.nextElementSibling.classList.toggle('show');
            });
        }

        // Fermer le menu déroulant si l'utilisateur clique en dehors
        window.addEventListener('click', function(event) {
            if (!event.target.matches('.dropbtn') && !event.target.matches('.arrow')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        });
    });
</script>
</body>
</html>