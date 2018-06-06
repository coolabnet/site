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
?>