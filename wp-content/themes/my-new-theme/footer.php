</div><!-- #content -->

        <footer id="colophon" class="site-footer">
            <div class="site-info">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                ));
                ?>
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
                   <?php printf(esc_html__('Theme by %s', 'my-new-theme'), '<a href="#">Your Name</a>'); ?>
                </p>
            </div>
        </footer>
    </div><!-- #page -->

    <?php wp_footer(); ?>
</body>
</html>