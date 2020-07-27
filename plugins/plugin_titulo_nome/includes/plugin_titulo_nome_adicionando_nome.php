<?php



add_filter('title_save_pre','plugin_titulo_nome_adicionando_nome');

function plugin_titulo_nome_adicionando_nome($title){
	$title_nome = bloginfo('name');

	return $title." - ".$title_nome;
}