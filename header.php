<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<script>
		if ("geolocation" in navigator) {
			console.log('Habemus geolocalización');
			navigator.geolocation.getCurrentPosition(function (position) {
				var latitude = position.coords.latitude,
					longitude = position.coords.longitude;

				console.log(latitude, longitude);


				var xhttp = new XMLHttpRequest(),
					url = '/wp-admin/admin-ajax.php',
					params = "action=send_he_geo&lat=" + latitude + "&long=" + longitude;

				xhttp.onreadystatechange = function () {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
						console.log('Enviado: ' + response);
					}
				};

				xhttp.open("POST", url);
				xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
				xhttp.send(params);
			});
		} else {
			console.warn('Ups, no hay geolocalización');
		}
	</script>
	<?php wp_head(); ?>

	<meta name="apple-itunes-app" content="app-id=432102730">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@wikiloc">
	<meta name="twitter:title" content="Wikiloc | Rutas del Mundo">
	<meta name="twitter:description"
		content="Encuentra las mejores rutas al aire libre para excursiones de senderismo en la montaña, itinerarios de tours en bici, vueltas en MTB y hasta 70 tipos de actividades. Descubre los lugares más bonitos del mundo, descarga tracks GPS y sigue el itinerario de los senderos más top desde un mapa. Graba tu propio recorrido desde la app, sube la ruta y compártela con la comunidad.">

	<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
	<link rel="dns-prefetch" href="https://sc.wklcdn.com/">
	<link rel="dns-prefetch" href="https://s0.wklcdn.com/">
	<link rel="dns-prefetch" href="https://s1.wklcdn.com/">
	<link rel="dns-prefetch" href="https://s2.wklcdn.com/">
	<link rel="dns-prefetch" href="https://s3.wklcdn.com/">

	<link rel="image_src" href="https://sc.wklcdn.com/wikiloc/images/wikiloc-logo-facebook.png">
	<link rel="apple-touch-icon" sizes="180x180" href="https://sc.wklcdn.com/apple-touch-icon.png?v=3">
	<link rel="icon" type="image/png" sizes="32x32" href="https://sc.wklcdn.com/favicon-32x32.png?v=3">
	<link rel="icon" type="image/png" sizes="16x16" href="https://sc.wklcdn.com/favicon-16x16.png?v=3">
	<link rel="manifest" href="https://sc.wklcdn.com/site.webmanifest?v=3">
	<link rel="mask-icon" href="https://sc.wklcdn.com/safari-pinned-tab.svg?v=3" color="#4c8c2b">
	<link rel="shortcut icon" href="https://sc.wklcdn.com/favicon.ico?v=3">

	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/wikiloc_home_files/bootstrap.min.css">
	<link href="<?=get_template_directory_uri()?>/wikiloc_home_files/wikiloc.min.89291803.css" rel="stylesheet">
	<link href="<?=get_template_directory_uri()?>/wikiloc_home_files/wikiloc-font.min.7a3ba9d0.css" rel="stylesheet">
	<link href="<?=get_template_directory_uri()?>/wikiloc_home_files/css" rel="stylesheet">
	<link href="<?=get_template_directory_uri()?>/wikiloc_home_files/css(1)" rel="stylesheet">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/wikiloc_home_files/home.min.34e9f9a4.css"
		type="text/css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/wikiloc_home_files/pictograms.min.cf20de74.css"
		type="text/css">
	<link rel="search" type="application/opensearchdescription+xml" title="Wikiloc"
		href="https://www.wikiloc.com/wikiloc/wikilocopensearch.xml">

	<link rel="canonical" href="https://es.wikiloc.com/">
	<link rel="alternate" href="https://www.wikiloc.com/" hreflang="en">
	<link rel="alternate" href="https://es.wikiloc.com/" hreflang="es">
	<link rel="alternate" href="https://ca.wikiloc.com/" hreflang="ca">
	<link rel="alternate" href="https://gl.wikiloc.com/" hreflang="gl">
	<link rel="alternate" href="https://eu.wikiloc.com/" hreflang="eu">
	<link rel="alternate" href="https://fr.wikiloc.com/" hreflang="fr">
	<link rel="alternate" href="https://it.wikiloc.com/" hreflang="it">
	<link rel="alternate" href="https://sv.wikiloc.com/" hreflang="sv">
	<link rel="alternate" href="https://nl.wikiloc.com/" hreflang="nl">
	<link rel="alternate" href="https://de.wikiloc.com/" hreflang="de">
	<link rel="alternate" href="https://uk.wikiloc.com/" hreflang="uk">
	<link rel="alternate" href="https://ru.wikiloc.com/" hreflang="ru">
	<link rel="alternate" href="https://el.wikiloc.com/" hreflang="el">
	<link rel="alternate" href="https://sr.wikiloc.com/" hreflang="sr">
	<link rel="alternate" href="https://hu.wikiloc.com/" hreflang="hu">
	<link rel="alternate" href="https://pl.wikiloc.com/" hreflang="pl">
	<link rel="alternate" href="https://pt.wikiloc.com/" hreflang="pt">
	<link rel="alternate" href="https://tr.wikiloc.com/" hreflang="tr">
	<link rel="alternate" href="https://is.wikiloc.com/" hreflang="is">
	<link rel="alternate" href="https://da.wikiloc.com/" hreflang="da">
	<link rel="alternate" href="https://zh.wikiloc.com/" hreflang="zh">
	<link rel="alternate" href="https://www.wikiloc.com/" hreflang="x-default">

</head>


