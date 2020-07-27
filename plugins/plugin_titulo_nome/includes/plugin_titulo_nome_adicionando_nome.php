<?php



add_filter('title_save_pre','plugin_titulo_nome_adicionando_nome');

function plugin_titulo_nome_adicionando_nome($title){
	$pattern = '/' . get_bloginfo('name') . '/';
	if(preg_match($pattern, $title)){
		return $title;
	}else{
		return $title . ' - ' . get_bloginfo('name');
	} 
}