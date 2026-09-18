<footer class="py-4 mt-auto">
        <div class="container">
            <div class="row gy-4">
                
                <div class="col-md-4">
                    <h5><?php bloginfo('name'); ?></h5>
                    <p class="small mb-0">
                        Promovendo o avanço da tecnologia e da inovação por meio da colaboração entre
                        estudantes, pesquisadores e profissionais.
                    </p>
                </div>

                <div class="col-md-4">
                    <h5>Links Rápidos</h5>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'container'      => false,
                        'menu_class'     => 'list-unstyled small',
                        'fallback_cb'    => false,
                    ));
                    ?>
                </div>

                <div class="col-md-4">
                    <h5>Redes Sociais</h5>
                    <div class="d-flex gap-3 fs-4">
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>

            <hr class="border-secondary mt-4">

            <div class="text-center small">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>