<?php
/*
  Plugin Name: annuEval
  Description: Plugin pour annuaireEval
  Author: alexandra
  Version: 1.0.0
 */

  function shortcode_bienvenue(){
    return "<h2>Bienvenue sur l'annuaire !</h2>";

}
add_shortcode('bienvenue', 'shortcode_bienvenue');

function shortcode_tableau(){
    
    global $wpdb;

// function shortcode_tableau(){

$result = $wpdb->get_results( "SELECT * FROM wp_annuaire");

foreach($result as $row)
{

	echo $row->id." ".$row->prenom." ".$row->nom." ".$row->mail."<br>";
}
}
add_shortcode('tableau', 'shortcode_tableau');


