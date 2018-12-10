    <footer class="footer bg-dark navbar-dark  ">
        <div class="footer-div-1 d-flex align-items-center justify-content-between container">
            <nav class="nav-1 navbar navbar-dark ">
                <a class="nav-link medium text-light d-flex align-items-center" href="contato.html">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-contato.png" width="35" height="25" class="contato-img d-inline-block align-top"
                        alt=""> Contato
                </a>
                <a class="medium nav-link nav-link-barra" href="">|</a>
                <a class="medium nav-link nav-link-barra" href="quemsomos.html">Quem somos
                    <span class="sr-only">(current)</span>
                </a>
                <a class="medium nav-link nav-link-barra" href="comoparticipar.html">Como participar</a>
                <a class="medium nav-link nav-link-barra" href="projetos.html">Projetos</a>
                <a class="medium nav-link nav-link-barra" href="blog.html">Blog</a>
                <a class="medium nav-link nav-link-barra" href="documentacao.html">Documentação</a>
            </nav>

            <nav class="nav-2 navbar navbar-dark justify-content-center row">
                <a class="nav-link text-light img-redes" href="https://www.facebook.com/coolab.br"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-fb.png"
                        width="35" alt=""></a>
                <a class="nav-link text-light img-redes" href="https://www.flickr.com/search/?sort=date-taken-desc&safe_search=1&tags=coolab&user_id=35034359718%40N01&view_all=1"><img
                        src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-flickr.png" width="35" alt=""></a>
                <a class="nav-link text-light img-redes" href="https://twitter.com/coolabdiz"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/icon-twitter.png"
                        width="35" alt=""></a>
            </nav>

        </div>
        <div class="footer-div-2 d-flex align-items-end justify-content-between container ">
            <nav class="nav-3 navbar navbar-dark d-flex flex-column align-items-start">
                <label class="medium" for="email">Assinar a newsletter</label>
                <div class="d-flex bg-transprent">
                    <input type="email" name="email" id="">
                    <button>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/icons/seta.png" alt="">
                    </button>
                </div>
            </nav>
            <nav class="nav-4 navbar navbar-dark d-flex flex-column">
                <p class="medium">₢2018 Coolab. Todos os direitos reservados.</p>
            </nav>
        </div>

    </footer>
    <!-- is this needed?     -->
    <!-- script do jquery primeiro
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.slim.min.js"></script> -->
    <!-- para validação do forms
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.validate.min.js"></script> -->
    <!-- script do bootstrap
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/bootstrap.min.js"></script> -->

    <?php wp_footer(); ?>

  </body>

</html>
