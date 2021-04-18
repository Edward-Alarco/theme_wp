<footer>
    <div class="footer-inner">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php if(is_active_sidebar('sidebar-footer-izq')): ?>
                            <?php dynamic_sidebar('sidebar-footer-izq'); ?>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-4">
                        <?php if(is_active_sidebar('sidebar-footer-cent')): ?>
                            <?php dynamic_sidebar('sidebar-footer-cent'); ?>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-4">
                        <?php if(is_active_sidebar('sidebar-footer-der')): ?>
                            <?php dynamic_sidebar('sidebar-footer-der'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>