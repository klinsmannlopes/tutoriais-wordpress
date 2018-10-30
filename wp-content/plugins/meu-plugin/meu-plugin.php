<?php
/*
    Plugin name: Meu plugin
    Plugin uri:
    Description: Esse e um plugin de teste
    Version: 1.0
    Author: Adam Silva
    Author uri:
    License: GPLv2 or later
 */


function mp_mensagem_post( $mp_post ) {
    $mp_mensagem = "Mensagem será mostrada em cada post teste teste garotear";
    $mp_resultado = "<h1>$mp_mensagem</h1>";
    $mp_resultado .= $mp_post;

    return $mp_resultado;
}

add_filter( 'the_content', 'mp_mensagem_post');