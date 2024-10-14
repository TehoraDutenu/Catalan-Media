
<footer>

    <div class="f-main">
        <div class="f-navigation">
            <?php wp_nav_menu([
                "theme_location" => "footer-menu",
                "menu_class" => "f-menu",
                "container" => false,
                "walker" => new CM_Menu()
                ]
            )
            ?>
        </div>
        <div class="f-logo">
            <a href="<?php echo get_bloginfo('wpurl'); ?>">
                <img class="f-image"src='<?php echo get_template_directory_uri() . "/images/logos/logo2.png"; ?>' alt="logo catalan media">
            </a>
        </div>
    </div>

    <div class="rights">
        <p class="copyright">&copy; 2024 Catalan Media.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<!-- Leaflet JS -->
<!-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
 -->

<?php wp_footer(); ?>
</body>

</html>