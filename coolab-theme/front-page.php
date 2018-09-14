<?php get_header();?>
<?php get_template_part('template-parts/coolab','video'); ?>
<div class="content-wrapper">
    <!--chama os projetos-->
    <?php get_template_part('template-parts/coolab','projetos'); ?>
    
    <?php get_template_part('template-parts/coolab', 'noticias');?>
    <!-- coolab-info -->
    <?php get_template_part('template-parts/coolab', 'info');?>

    <!-- footer vai arqui-->
    <?php get_footer();?>
</div>