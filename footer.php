
<footer class="site-footer container">
    <div class="footer-container">
        <?php
            $args = array (
                'theme_location' => 'van-blog-menus',
                'container' => 'nav',
                'container_class' => 'main-menu'
            );

            wp_nav_menu($args);
        ?>

        <div class="site-info">
            WebSite Developed by Dylan Bradley
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- jQuery For Responsive Nav Bar -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menu-btn').click(function() {
                    $('nav').toggleClass('active')
                })
            })
        </script>


</body>
</html>
