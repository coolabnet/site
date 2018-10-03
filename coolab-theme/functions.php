<?php
if(function_exists('register_nav_menu')){
	register_nav_menu('menu_coolab', 'menu coolab na cor verde'); 
	register_nav_menu('menu_coolab_preto', 'menu coolab na cor preta'); 
}

function estilizar_items_menu($classes, $item){
	$classes[] = "pure-menu-item";
	return $classes;
}
add_filter('nav_menu_css_class', 'estilizar_items_menu', 10, 2);

function registrar_sidebars(){
	register_sidebar(
		array(
			'id'=>'coolab-sidebar',
			'name'=>__('Coolab Sidebar', 'coolab-theme'),
			'description'=>'Barra lateral exbindo arquivos',
			'before_widget'=>'<div id="%1$s"  class="widget %2$s">',
			'after_widget'=>'</div>',
			'before_title'=>'<h3 class="widget-title">',
			'after_title'=>'</h3>'
			)
		);
}
add_action('init', 'registrar_sidebars');
?>