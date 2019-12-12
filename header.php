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
	<?php wp_head(); ?>

	<style type="text/css">
		.tippy-iOS {
			cursor: pointer !important
		}

		.tippy-notransition {
			transition: none !important
		}

		.tippy-popper {
			-webkit-perspective: 700px;
			perspective: 700px;
			z-index: 9999;
			outline: 0;
			transition-timing-function: cubic-bezier(.165, .84, .44, 1);
			pointer-events: none;
			line-height: 1.4;
			max-width: calc(100% - 10px)
		}

		.tippy-popper[x-placement^=top] .tippy-backdrop {
			border-radius: 40% 40% 0 0
		}

		.tippy-popper[x-placement^=top] .tippy-roundarrow {
			bottom: -8px;
			-webkit-transform-origin: 50% 0;
			transform-origin: 50% 0
		}

		.tippy-popper[x-placement^=top] .tippy-roundarrow svg {
			position: absolute;
			left: 0;
			-webkit-transform: rotate(180deg);
			transform: rotate(180deg)
		}

		.tippy-popper[x-placement^=top] .tippy-arrow {
			border-top: 8px solid #333;
			border-right: 8px solid transparent;
			border-left: 8px solid transparent;
			bottom: -7px;
			margin: 0 6px;
			-webkit-transform-origin: 50% 0;
			transform-origin: 50% 0
		}

		.tippy-popper[x-placement^=top] .tippy-backdrop {
			-webkit-transform-origin: 0 25%;
			transform-origin: 0 25%
		}

		.tippy-popper[x-placement^=top] .tippy-backdrop[data-state=visible] {
			-webkit-transform: scale(1) translate(-50%, -55%);
			transform: scale(1) translate(-50%, -55%)
		}

		.tippy-popper[x-placement^=top] .tippy-backdrop[data-state=hidden] {
			-webkit-transform: scale(.2) translate(-50%, -45%);
			transform: scale(.2) translate(-50%, -45%);
			opacity: 0
		}

		.tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=visible] {
			-webkit-transform: translateY(-10px);
			transform: translateY(-10px)
		}

		.tippy-popper[x-placement^=top] [data-animation=shift-toward][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(-20px);
			transform: translateY(-20px)
		}

		.tippy-popper[x-placement^=top] [data-animation=perspective] {
			-webkit-transform-origin: bottom;
			transform-origin: bottom
		}

		.tippy-popper[x-placement^=top] [data-animation=perspective][data-state=visible] {
			-webkit-transform: translateY(-10px) rotateX(0);
			transform: translateY(-10px) rotateX(0)
		}

		.tippy-popper[x-placement^=top] [data-animation=perspective][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(0) rotateX(60deg);
			transform: translateY(0) rotateX(60deg)
		}

		.tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
			-webkit-transform: translateY(-10px);
			transform: translateY(-10px)
		}

		.tippy-popper[x-placement^=top] [data-animation=fade][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(-10px);
			transform: translateY(-10px)
		}

		.tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=visible] {
			-webkit-transform: translateY(-10px);
			transform: translateY(-10px)
		}

		.tippy-popper[x-placement^=top] [data-animation=shift-away][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(0);
			transform: translateY(0)
		}

		.tippy-popper[x-placement^=top] [data-animation=scale][data-state=visible] {
			-webkit-transform: translateY(-10px) scale(1);
			transform: translateY(-10px) scale(1)
		}

		.tippy-popper[x-placement^=top] [data-animation=scale][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(0) scale(.5);
			transform: translateY(0) scale(.5)
		}

		.tippy-popper[x-placement^=bottom] .tippy-backdrop {
			border-radius: 0 0 30% 30%
		}

		.tippy-popper[x-placement^=bottom] .tippy-roundarrow {
			top: -8px;
			-webkit-transform-origin: 50% 100%;
			transform-origin: 50% 100%
		}

		.tippy-popper[x-placement^=bottom] .tippy-roundarrow svg {
			position: absolute;
			left: 0;
			-webkit-transform: rotate(0);
			transform: rotate(0)
		}

		.tippy-popper[x-placement^=bottom] .tippy-arrow {
			border-bottom: 8px solid #333;
			border-right: 8px solid transparent;
			border-left: 8px solid transparent;
			top: -7px;
			margin: 0 6px;
			-webkit-transform-origin: 50% 100%;
			transform-origin: 50% 100%
		}

		.tippy-popper[x-placement^=bottom] .tippy-backdrop {
			-webkit-transform-origin: 0 -50%;
			transform-origin: 0 -50%
		}

		.tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=visible] {
			-webkit-transform: scale(1) translate(-50%, -45%);
			transform: scale(1) translate(-50%, -45%)
		}

		.tippy-popper[x-placement^=bottom] .tippy-backdrop[data-state=hidden] {
			-webkit-transform: scale(.2) translate(-50%);
			transform: scale(.2) translate(-50%);
			opacity: 0
		}

		.tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=visible] {
			-webkit-transform: translateY(10px);
			transform: translateY(10px)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=shift-toward][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(20px);
			transform: translateY(20px)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=perspective] {
			-webkit-transform-origin: top;
			transform-origin: top
		}

		.tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=visible] {
			-webkit-transform: translateY(10px) rotateX(0);
			transform: translateY(10px) rotateX(0)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=perspective][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(0) rotateX(-60deg);
			transform: translateY(0) rotateX(-60deg)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=visible] {
			-webkit-transform: translateY(10px);
			transform: translateY(10px)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=fade][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(10px);
			transform: translateY(10px)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=visible] {
			-webkit-transform: translateY(10px);
			transform: translateY(10px)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=shift-away][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(0);
			transform: translateY(0)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=visible] {
			-webkit-transform: translateY(10px) scale(1);
			transform: translateY(10px) scale(1)
		}

		.tippy-popper[x-placement^=bottom] [data-animation=scale][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateY(0) scale(.5);
			transform: translateY(0) scale(.5)
		}

		.tippy-popper[x-placement^=left] .tippy-backdrop {
			border-radius: 50% 0 0 50%
		}

		.tippy-popper[x-placement^=left] .tippy-roundarrow {
			right: -16px;
			-webkit-transform-origin: 33.33333333% 50%;
			transform-origin: 33.33333333% 50%
		}

		.tippy-popper[x-placement^=left] .tippy-roundarrow svg {
			position: absolute;
			left: 0;
			-webkit-transform: rotate(90deg);
			transform: rotate(90deg)
		}

		.tippy-popper[x-placement^=left] .tippy-arrow {
			border-left: 8px solid #333;
			border-top: 8px solid transparent;
			border-bottom: 8px solid transparent;
			right: -7px;
			margin: 3px 0;
			-webkit-transform-origin: 0 50%;
			transform-origin: 0 50%
		}

		.tippy-popper[x-placement^=left] .tippy-backdrop {
			-webkit-transform-origin: 50% 0;
			transform-origin: 50% 0
		}

		.tippy-popper[x-placement^=left] .tippy-backdrop[data-state=visible] {
			-webkit-transform: scale(1) translate(-50%, -50%);
			transform: scale(1) translate(-50%, -50%)
		}

		.tippy-popper[x-placement^=left] .tippy-backdrop[data-state=hidden] {
			-webkit-transform: scale(.2) translate(-75%, -50%);
			transform: scale(.2) translate(-75%, -50%);
			opacity: 0
		}

		.tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=visible] {
			-webkit-transform: translateX(-10px);
			transform: translateX(-10px)
		}

		.tippy-popper[x-placement^=left] [data-animation=shift-toward][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(-20px);
			transform: translateX(-20px)
		}

		.tippy-popper[x-placement^=left] [data-animation=perspective] {
			-webkit-transform-origin: right;
			transform-origin: right
		}

		.tippy-popper[x-placement^=left] [data-animation=perspective][data-state=visible] {
			-webkit-transform: translateX(-10px) rotateY(0);
			transform: translateX(-10px) rotateY(0)
		}

		.tippy-popper[x-placement^=left] [data-animation=perspective][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(0) rotateY(-60deg);
			transform: translateX(0) rotateY(-60deg)
		}

		.tippy-popper[x-placement^=left] [data-animation=fade][data-state=visible] {
			-webkit-transform: translateX(-10px);
			transform: translateX(-10px)
		}

		.tippy-popper[x-placement^=left] [data-animation=fade][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(-10px);
			transform: translateX(-10px)
		}

		.tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=visible] {
			-webkit-transform: translateX(-10px);
			transform: translateX(-10px)
		}

		.tippy-popper[x-placement^=left] [data-animation=shift-away][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(0);
			transform: translateX(0)
		}

		.tippy-popper[x-placement^=left] [data-animation=scale][data-state=visible] {
			-webkit-transform: translateX(-10px) scale(1);
			transform: translateX(-10px) scale(1)
		}

		.tippy-popper[x-placement^=left] [data-animation=scale][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(0) scale(.5);
			transform: translateX(0) scale(.5)
		}

		.tippy-popper[x-placement^=right] .tippy-backdrop {
			border-radius: 0 50% 50% 0
		}

		.tippy-popper[x-placement^=right] .tippy-roundarrow {
			left: -16px;
			-webkit-transform-origin: 66.66666666% 50%;
			transform-origin: 66.66666666% 50%
		}

		.tippy-popper[x-placement^=right] .tippy-roundarrow svg {
			position: absolute;
			left: 0;
			-webkit-transform: rotate(-90deg);
			transform: rotate(-90deg)
		}

		.tippy-popper[x-placement^=right] .tippy-arrow {
			border-right: 8px solid #333;
			border-top: 8px solid transparent;
			border-bottom: 8px solid transparent;
			left: -7px;
			margin: 3px 0;
			-webkit-transform-origin: 100% 50%;
			transform-origin: 100% 50%
		}

		.tippy-popper[x-placement^=right] .tippy-backdrop {
			-webkit-transform-origin: -50% 0;
			transform-origin: -50% 0
		}

		.tippy-popper[x-placement^=right] .tippy-backdrop[data-state=visible] {
			-webkit-transform: scale(1) translate(-50%, -50%);
			transform: scale(1) translate(-50%, -50%)
		}

		.tippy-popper[x-placement^=right] .tippy-backdrop[data-state=hidden] {
			-webkit-transform: scale(.2) translate(-25%, -50%);
			transform: scale(.2) translate(-25%, -50%);
			opacity: 0
		}

		.tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=visible] {
			-webkit-transform: translateX(10px);
			transform: translateX(10px)
		}

		.tippy-popper[x-placement^=right] [data-animation=shift-toward][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(20px);
			transform: translateX(20px)
		}

		.tippy-popper[x-placement^=right] [data-animation=perspective] {
			-webkit-transform-origin: left;
			transform-origin: left
		}

		.tippy-popper[x-placement^=right] [data-animation=perspective][data-state=visible] {
			-webkit-transform: translateX(10px) rotateY(0);
			transform: translateX(10px) rotateY(0)
		}

		.tippy-popper[x-placement^=right] [data-animation=perspective][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(0) rotateY(60deg);
			transform: translateX(0) rotateY(60deg)
		}

		.tippy-popper[x-placement^=right] [data-animation=fade][data-state=visible] {
			-webkit-transform: translateX(10px);
			transform: translateX(10px)
		}

		.tippy-popper[x-placement^=right] [data-animation=fade][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(10px);
			transform: translateX(10px)
		}

		.tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=visible] {
			-webkit-transform: translateX(10px);
			transform: translateX(10px)
		}

		.tippy-popper[x-placement^=right] [data-animation=shift-away][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(0);
			transform: translateX(0)
		}

		.tippy-popper[x-placement^=right] [data-animation=scale][data-state=visible] {
			-webkit-transform: translateX(10px) scale(1);
			transform: translateX(10px) scale(1)
		}

		.tippy-popper[x-placement^=right] [data-animation=scale][data-state=hidden] {
			opacity: 0;
			-webkit-transform: translateX(0) scale(.5);
			transform: translateX(0) scale(.5)
		}

		.tippy-tooltip {
			position: relative;
			color: #fff;
			border-radius: 4px;
			font-size: .9rem;
			padding: .3rem .6rem;
			max-width: 350px;
			text-align: center;
			will-change: transform;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			background-color: #333
		}

		.tippy-tooltip[data-size=small] {
			padding: .2rem .4rem;
			font-size: .75rem
		}

		.tippy-tooltip[data-size=large] {
			padding: .4rem .8rem;
			font-size: 1rem
		}

		.tippy-tooltip[data-animatefill] {
			overflow: hidden;
			background-color: transparent
		}

		.tippy-tooltip[data-interactive],
		.tippy-tooltip[data-interactive] path {
			pointer-events: auto
		}

		.tippy-tooltip[data-inertia][data-state=visible] {
			transition-timing-function: cubic-bezier(.54, 1.5, .38, 1.11)
		}

		.tippy-tooltip[data-inertia][data-state=hidden] {
			transition-timing-function: ease
		}

		.tippy-arrow,
		.tippy-roundarrow {
			position: absolute;
			width: 0;
			height: 0
		}

		.tippy-roundarrow {
			width: 24px;
			height: 8px;
			fill: #333;
			pointer-events: none
		}

		.tippy-backdrop {
			position: absolute;
			will-change: transform;
			background-color: #333;
			border-radius: 50%;
			width: calc(110% + 2rem);
			left: 50%;
			top: 50%;
			z-index: -1;
			transition: all cubic-bezier(.46, .1, .52, .98);
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden
		}

		.tippy-backdrop:after {
			content: "";
			float: left;
			padding-top: 100%
		}

		.tippy-backdrop+.tippy-content {
			transition-property: opacity;
			will-change: opacity
		}

		.tippy-backdrop+.tippy-content[data-state=visible] {
			opacity: 1
		}

		.tippy-backdrop+.tippy-content[data-state=hidden] {
			opacity: 0
		}
	</style>

<meta name="description" content="Ruta Robledo de Chavela - La Almenara - Robledo de Chavela de senderismo en Robledo de Chavela, Madrid (España). Descarga el track GPS y sigue el recorrido del itinerario del sendero desde un mapa. Robledo de Chavela - La Almenara - Robledo de Chavela. 
 
 Datos Técnicos : 
  
 • Situación : Robledo de Chavela. 
 • Acceso : Desde Madrid – Carretera de los pantanos M-501 – Desvío Km 43,5 por M-512 después de rodear Navas del Rey – Entrando a Robledo desviarse a la derecha por desviarse por Avda. Virgen de la Navahonda hasta Urbanización. En los últimos chalets del Camino de la Ermita. Viene indicado con señales en el pueblo. 
 • Tipo de Recorrido : Circular-Lineal 
 • Distancia : 12 km. Aprox. 
 • Dificultad : Fácil hasta la última subida a la Almenara. Es una trepada de unos 50 metros que tienes que ayudarte un poco de las manos. 
 • Tiempo Total : 3h,30m. 
 • Tiempo en movimiento : 3h. 
 • Tipo de firme : Pista inicial y después senda marcada. 
 • Desnivel acumulado de subida : 400 metros aprox. 
 • Cota mínima : 865 metros ( Robledo de Chavela ) 
 • Cotas máximas : 1.259 metros ( La Almenara ). 
 • Agua : Las dos fuentes que te encuentras en la pista están cortadas. 
 • Epoca recomendada : Cualquiera. Con hielo o agua precaución en la subida a La Almenara. 
 • Refugios : Algún Vivac natural cerca de los pinos. 
 • Señalización : Señalizado todo el camino. 
  
 Descripción de la ruta: 
  
 Dejamos el coche cerca de una urbanización de chalets en las afueras de Robledo de Chavela. 
 Empezamos la ruta cogiendo la pista GR-10 hasta un collado ( kilometro 3,5 ) que nos desviamos a la derecha pasando por unos tornos o puerta giratoria. Muy cerca se encuentra un poste eléctrico. 
 En los últimos tramos antes de llegar a La Almenara el camino no está muy marcado pero no tiene pérdida. 
 La última subida hasta el pico de La Almenara tiene mas pendiente y en algunos momentos tenemos que hacer uso de las manos. 
 En el pico se encuentra una torre de piedras. Desde allí aprovechamos para hacer unas fotos y reponer fuerzas. 
 Desde allí se puede observar El San Benito, Las Machotas, La sierra de Guadarrama, La Sierra de Hoyo. 
 Durante el tiempo que estuvimos en el pico, un buitre leonado sobrevolaba toda la zona. 
 Aunque el pico no es alto, las vistas son increibles. 
 Hicimos algunas fotos también a las antenas de la NASA que se encuentran en la base de la Almenara. 
 Iniciamos el camino de vuelta con alguna variación para no ir por el mismo camino. 
 Ruta fácil sin ninguna dificultad. Solo se necesita un poco de atención en la subida al pico. 
  
  
 ">
 
	 <meta name="apple-itunes-app" content="app-id=432102730">
	 <meta name="apple-mobile-web-app-capable" content="yes">
	 <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com/">
	 <link rel="dns-prefetch" href="https://sc.wklcdn.com/">
	 <link rel="dns-prefetch" href="https://s0.wklcdn.com/">
	 <link rel="dns-prefetch" href="https://s1.wklcdn.com/">
	 <link rel="dns-prefetch" href="https://s2.wklcdn.com/">
	 <link rel="dns-prefetch" href="https://s3.wklcdn.com/">
 
	 <meta name="twitter:card" content="summary_large_image">
	 <meta name="twitter:site" content="@wikiloc">
	 <meta name="twitter:title" content="Robledo de Chavela - La Almenara - Robledo de Chavela">
	 <meta name="twitter:description" content="Ruta Robledo de Chavela - La Almenara - Robledo de Chavela de senderismo en Robledo de Chavela, Madrid (España). Descarga el track GPS y sigue el recorrido del itinerario del sendero desde un mapa. Robledo de Chavela - La Almenara - Robledo de Chavela. 
  
 Datos Técnicos : 
  
 • Situación : Robledo de Chavela. 
 • Acceso : Desde Madrid – Carretera de los pantanos M-501 – Desvío Km 43,5 por M-512 después de rodear Navas del Rey – Entrando a Robledo desviarse a la derecha por desviarse por Avda. Virgen de la Navahonda hasta Urbanización. En los últimos chalets del Camino de la Ermita. Viene indicado con señales en el pueblo. 
 • Tipo de Recorrido : Circular-Lineal 
 • Distancia : 12 km. Aprox. 
 • Dificultad : Fácil hasta la última subida a la Almenara. Es una trepada de unos 50 metros que tienes que ayudarte un poco de las manos. 
 • Tiempo Total : 3h,30m. 
 • Tiempo en movimiento : 3h. 
 • Tipo de firme : Pista inicial y después senda marcada. 
 • Desnivel acumulado de subida : 400 metros aprox. 
 • Cota mínima : 865 metros ( Robledo de Chavela ) 
 • Cotas máximas : 1.259 metros ( La Almenara ). 
 • Agua : Las dos fuentes que te encuentras en la pista están cortadas. 
 • Epoca recomendada : Cualquiera. Con hielo o agua precaución en la subida a La Almenara. 
 • Refugios : Algún Vivac natural cerca de los pinos. 
 • Señalización : Señalizado todo el camino. 
  
 Descripción de la ruta: 
  
 Dejamos el coche cerca de una urbanización de chalets en las afueras de Robledo de Chavela. 
 Empezamos la ruta cogiendo la pista GR-10 hasta un collado ( kilometro 3,5 ) que nos desviamos a la derecha pasando por unos tornos o puerta giratoria. Muy cerca se encuentra un poste eléctrico. 
 En los últimos tramos antes de llegar a La Almenara el camino no está muy marcado pero no tiene pérdida. 
 La última subida hasta el pico de La Almenara tiene mas pendiente y en algunos momentos tenemos que hacer uso de las manos. 
 En el pico se encuentra una torre de piedras. Desde allí aprovechamos para hacer unas fotos y reponer fuerzas. 
 Desde allí se puede observar El San Benito, Las Machotas, La sierra de Guadarrama, La Sierra de Hoyo. 
 Durante el tiempo que estuvimos en el pico, un buitre leonado sobrevolaba toda la zona. 
 Aunque el pico no es alto, las vistas son increibles. 
 Hicimos algunas fotos también a las antenas de la NASA que se encuentran en la base de la Almenara. 
 Iniciamos el camino de vuelta con alguna variación para no ir por el mismo camino. 
 Ruta fácil sin ninguna dificultad. Solo se necesita un poco de atención en la subida al pico. 
  
  
 ">
	 <meta name="twitter:image" content="https://sc.wklcdn.com/images/pictograms/social/1-thumb-big.png">
 
	 <meta property="og:title" content="Robledo de Chavela - La Almenara - Robledo de Chavela">
	 <meta property="og:site_name" content="Wikiloc - Rutas del Mundo">
	 <meta property="og:description" content="Ruta Robledo de Chavela - La Almenara - Robledo de Chavela de senderismo en Robledo de Chavela, Madrid (España). Descarga el track GPS y sigue el recorrido del itinerario del sendero desde un mapa. Robledo de Chavela - La Almenara - Robledo de Chavela. 
  
 Datos Técnicos : 
  
 • Situación : Robledo de Chavela. 
 • Acceso : Desde Madrid – Carretera de los pantanos M-501 – Desvío Km 43,5 por M-512 después de rodear Navas del Rey – Entrando a Robledo desviarse a la derecha por desviarse por Avda. Virgen de la Navahonda hasta Urbanización. En los últimos chalets del Camino de la Ermita. Viene indicado con señales en el pueblo. 
 • Tipo de Recorrido : Circular-Lineal 
 • Distancia : 12 km. Aprox. 
 • Dificultad : Fácil hasta la última subida a la Almenara. Es una trepada de unos 50 metros que tienes que ayudarte un poco de las manos. 
 • Tiempo Total : 3h,30m. 
 • Tiempo en movimiento : 3h. 
 • Tipo de firme : Pista inicial y después senda marcada. 
 • Desnivel acumulado de subida : 400 metros aprox. 
 • Cota mínima : 865 metros ( Robledo de Chavela ) 
 • Cotas máximas : 1.259 metros ( La Almenara ). 
 • Agua : Las dos fuentes que te encuentras en la pista están cortadas. 
 • Epoca recomendada : Cualquiera. Con hielo o agua precaución en la subida a La Almenara. 
 • Refugios : Algún Vivac natural cerca de los pinos. 
 • Señalización : Señalizado todo el camino. 
  
 Descripción de la ruta: 
  
 Dejamos el coche cerca de una urbanización de chalets en las afueras de Robledo de Chavela. 
 Empezamos la ruta cogiendo la pista GR-10 hasta un collado ( kilometro 3,5 ) que nos desviamos a la derecha pasando por unos tornos o puerta giratoria. Muy cerca se encuentra un poste eléctrico. 
 En los últimos tramos antes de llegar a La Almenara el camino no está muy marcado pero no tiene pérdida. 
 La última subida hasta el pico de La Almenara tiene mas pendiente y en algunos momentos tenemos que hacer uso de las manos. 
 En el pico se encuentra una torre de piedras. Desde allí aprovechamos para hacer unas fotos y reponer fuerzas. 
 Desde allí se puede observar El San Benito, Las Machotas, La sierra de Guadarrama, La Sierra de Hoyo. 
 Durante el tiempo que estuvimos en el pico, un buitre leonado sobrevolaba toda la zona. 
 Aunque el pico no es alto, las vistas son increibles. 
 Hicimos algunas fotos también a las antenas de la NASA que se encuentran en la base de la Almenara. 
 Iniciamos el camino de vuelta con alguna variación para no ir por el mismo camino. 
 Ruta fácil sin ninguna dificultad. Solo se necesita un poco de atención en la subida al pico. 
  
  
 ">
	 <meta property="og:image:height" content="628">
	 <meta property="og:image:width" content="1200">
	 <meta property="og:image" content="https://sc.wklcdn.com/images/pictograms/social/1-thumb-big.png">
	 <meta property="og:url"
		 content="https://es.wikiloc.com/rutas-senderismo/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944">
 
 
 
	 <link rel="shortcut icon" type="image/ico" href="https://sc.wklcdn.com/favicon.ico?v=3.0">
	 <link rel="apple-touch-icon" href="https://sc.wklcdn.com/apple-touch-icon.png">
	 <link rel="stylesheet" href="./wiki_mobile_files/bootstrap.min.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/leaflet.min.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/leaflet-switchmap.min.650a04ec.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/leaflet-wkl.min.15da27a9.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/leaflet.fullscreen.min.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/light-border.css">
	 <link href="./wiki_mobile_files/wikiloc.min.89291803.css" rel="stylesheet">
	 <link href="./wiki_mobile_files/wikiloc-font.min.7a3ba9d0.css" rel="stylesheet">
	 <link href="./wiki_mobile_files/css" rel="stylesheet">
	 <link href="./wiki_mobile_files/css(1)" rel="stylesheet">
	 <link rel="stylesheet" href="./wiki_mobile_files/trailpage.min.edfd5ffe.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/elevation.min.a59f5e17.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/pictograms.min.cf20de74.css" type="text/css">
	 <link rel="stylesheet" href="./wiki_mobile_files/meteo-card.min.e5d1ac84.css">
	 <link rel="stylesheet" href="./wiki_mobile_files/stars.min.6f465f20.css" media="all"
		 onload="if(media!=&#39;all&#39;)media=&#39;all&#39;">
	 <link rel="stylesheet" href="./wiki_mobile_files/font-awesome.min.css" media="all"
		 onload="if(media==&#39;none&#39;)media=&#39;all&#39;">
	 <link rel="stylesheet" href="./wiki_mobile_files/socialLogin.min.efc3fc12.css">
	 <link rel="image_src" href="https://sc.wklcdn.com/images/pictograms/social/1-thumb-big.png">
 
	 <!-- prettyURLs must be set as request.attribute -->
	 <link rel="canonical"
		 href="https://es.wikiloc.com/rutas-senderismo/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944">
	 <!--
	 prettyURLs is a Map<String,String> where key is lang and value is the lang's prettyURL
	 prettyURLs must be set as request attribute
 -->
 
	 <link rel="alternate"
		 href="https://www.wikiloc.com/hiking-trails/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="en">
	 <link rel="alternate"
		 href="https://es.wikiloc.com/rutas-senderismo/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="es">
	 <link rel="alternate"
		 href="https://ca.wikiloc.com/rutes-senderisme/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="ca">
	 <link rel="alternate"
		 href="https://gl.wikiloc.com/rutas-sendeirismo/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="gl">
	 <link rel="alternate"
		 href="https://eu.wikiloc.com/ibilbide-senderismo/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="eu">
	 <link rel="alternate"
		 href="https://fr.wikiloc.com/itineraires-randonnee/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="fr">
	 <link rel="alternate"
		 href="https://it.wikiloc.com/percorsi-escursionismo/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="it">
	 <link rel="alternate"
		 href="https://sv.wikiloc.com/spar-vandra/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="sv">
	 <link rel="alternate"
		 href="https://nl.wikiloc.com/routes-wandelen/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="nl">
	 <link rel="alternate"
		 href="https://de.wikiloc.com/routen-wandern/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="de">
	 <link rel="alternate"
		 href="https://uk.wikiloc.com/marshruty-pokhid/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="uk">
	 <link rel="alternate"
		 href="https://ru.wikiloc.com/marshruty-pokhod/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="ru">
	 <link rel="alternate"
		 href="https://el.wikiloc.com/oreibasia-diadromes/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="el">
	 <link rel="alternate"
		 href="https://sr.wikiloc.com/rute-pjesacenje-po-planinama/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="sr">
	 <link rel="alternate"
		 href="https://hu.wikiloc.com/turazas-nyomvonalak/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="hu">
	 <link rel="alternate"
		 href="https://pl.wikiloc.com/szlaki-wycieczki-piesze/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="pl">
	 <link rel="alternate"
		 href="https://pt.wikiloc.com/trilhas-trekking/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="pt">
	 <link rel="alternate"
		 href="https://tr.wikiloc.com/gezi-yuruyus-rotalari/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="tr">
	 <link rel="alternate"
		 href="https://is.wikiloc.com/fjallaferd-slodir/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="is">
	 <link rel="alternate"
		 href="https://da.wikiloc.com/vandring-spor/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="da">
	 <link rel="alternate"
		 href="https://zh.wikiloc.com/jian-xing-hangxian/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="zh">
	 <link rel="alternate"
		 href="https://www.wikiloc.com/hiking-trails/robledo-de-chavela-la-almenara-robledo-de-chavela-3678944"
		 hreflang="x-default">

</head>


