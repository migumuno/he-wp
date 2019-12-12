<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<body>
	<header id="header-main">
		<div class="container">
			<div class="row lang-anchor">
				<div id="language_check">
					<p>Wikiloc in <span id="switch_lang_lang"></span>? Visit <a
							onclick="ga(&#39;send&#39;, &#39;pageview&#39;, &#39;/trail/lang_change&#39;);"
							rel="nofollow" id="switch_lang_url" href="https://es.wikiloc.com/#"></a></p>
					<p><a onclick="ga(&#39;send&#39;, &#39;pageview&#39;, &#39;/trail/lang_keep&#39;);" rel="nofollow"
							id="switch_lang_cancel" href="https://es.wikiloc.com/#">No, gracias</a></p>
				</div>

				<div class="col-xs-6 col-sm-5 col-md-4">
					<a class="navbar-brand" href="https://es.wikiloc.com/">Wikiloc</a>
				</div>
				<div class="col-xs-12 col-sm-6 sm-mln">
					<h1 class="title-h1">Rutas del Mundo</h1>
					<p class="bigger text"> Wikiloc es un sitio para descubrir y compartir rutas al aire libre a pie, en
						bici y de muchas otras actividades</p>
				</div>
				<div class="access-wrapper col-xs-12 col-sm-1 col-md-2">
					<div class="access-links">
						<a href="https://es.wikiloc.com/wikiloc/start.do"
							class="btn btn-warning visible-sm visible-xs">Entrar</a>
						<a href="https://es.wikiloc.com/wikiloc/start.do"
							class="btn btn-link hidden-sm hidden-xs">Entrar</a>
						<a href="https://es.wikiloc.com/wikiloc/signingup.do"
							class="btn btn-warning hidden-sm hidden-xs">Registrarse</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--[if lt IE 9]>
<p class="browsehappy alert alert-warning text-center">¡Tu navegador está <strong>anticuado!</strong>. <a href="http://browsehappy.com/?locale=es" class="alert-link">Actualiza tu navegador</a> para ver esta página correctamente.</p>
<![endif]-->

	<div id="trail-slider">
		<div class="container">
			<ul class="trail-nav clearfix">
				<li id="act-li-0" class=""><a href="https://es.wikiloc.com/rutas/mountain-bike"
						title="&lt;span&gt;Rutas&lt;/span&gt; mountain bike" data-id="51363"
						class="pictogram activity-2"><span>Rutas</span> mountain bike</a></li>
				<li id="act-li-1" class=""><a href="https://es.wikiloc.com/rutas/senderismo"
						title="&lt;span&gt;Rutas&lt;/span&gt; senderismo" data-id="214476"
						class="pictogram activity-1"><span>Rutas</span> senderismo</a></li>
				<li id="act-li-2" class=""><a href="https://es.wikiloc.com/rutas/ciclismo"
						title="&lt;span&gt;Rutas&lt;/span&gt; ciclismo" data-id="881663"
						class="pictogram activity-29"><span>Rutas</span> ciclismo</a></li>
				<li id="act-li-3" class=""><a href="https://es.wikiloc.com/rutas/carrera"
						title="&lt;span&gt;Rutas&lt;/span&gt; carrera" data-id="1065299"
						class="pictogram activity-21"><span>Rutas</span> carrera</a></li>
				<li id="act-li-4" class=""><a href="https://es.wikiloc.com/rutas/cicloturismo"
						title="&lt;span&gt;Rutas&lt;/span&gt; cicloturismo" data-id="256549"
						class="pictogram activity-47"><span>Rutas</span> cicloturismo</a></li>
				<li id="act-li-5" class=""><a href="https://es.wikiloc.com/rutas/todo-terreno"
						title="&lt;span&gt;Rutas&lt;/span&gt; todo terreno" data-id="1921553"
						class="pictogram activity-3"><span>Rutas</span> todo terreno</a></li>
				<li id="act-li-6" class=""><a href="https://es.wikiloc.com/rutas/alpinismo"
						title="&lt;span&gt;Rutas&lt;/span&gt; alpinismo" data-id="1972883"
						class="pictogram activity-14"><span>Rutas</span> alpinismo</a></li>
				<li id="act-li-7" class=""><a href="https://es.wikiloc.com/rutas/carrera-por-montana"
						title="&lt;span&gt;Rutas&lt;/span&gt; carrera por montaña" data-id="1879385"
						class="pictogram activity-48"><span>Rutas</span> carrera por montaña</a></li>
				<li id="act-li-8" class=""><a href="https://es.wikiloc.com/rutas/a-pie"
						title="&lt;span&gt;Rutas&lt;/span&gt; a pie" data-id="1050777"
						class="pictogram activity-43"><span>Rutas</span> a pie</a></li>
				<li id="act-li-9" class=""><a href="https://es.wikiloc.com/rutas/esqui-de-montana"
						title="&lt;span&gt;Rutas&lt;/span&gt; esquí de montaña" data-id="453676"
						class="pictogram activity-40"><span>Rutas</span> esquí de montaña</a></li>
				<li id="act-li-10" class="selected"><a href="https://es.wikiloc.com/rutas/motociclismo"
						title="&lt;span&gt;Rutas&lt;/span&gt; motociclismo" data-id="385851"
						class="pictogram activity-8"><span>Rutas</span> motociclismo</a></li>
				<li id="act-li-11"><a href="https://es.wikiloc.com/rutas/moto-trail"
						title="&lt;span&gt;Rutas&lt;/span&gt; moto trail" data-id="129759"
						class="pictogram activity-38"><span>Rutas</span> moto trail</a></li>
				<li id="act-li-12"><a href="https://es.wikiloc.com/rutas/kayac"
						title="&lt;span&gt;Rutas&lt;/span&gt; kayac" data-id="1442385"
						class="pictogram activity-11"><span>Rutas</span> kayac</a></li>
				<li id="act-li-13"><a href="https://es.wikiloc.com/rutas/raquetas"
						title="&lt;span&gt;Rutas&lt;/span&gt; raquetas" data-id="1474249"
						class="pictogram activity-17"><span>Rutas</span> raquetas</a></li>
				<li id="act-li-14"><a href="https://es.wikiloc.com/rutas/quad"
						title="&lt;span&gt;Rutas&lt;/span&gt; quad" data-id="251440"
						class="pictogram activity-6"><span>Rutas</span> quad</a></li>
				<li id="act-li-15"><a href="https://es.wikiloc.com/rutas/coche"
						title="&lt;span&gt;Rutas&lt;/span&gt; coche" data-id="1809440"
						class="pictogram activity-50"><span>Rutas</span> coche</a></li>
				<li id="act-li-16"><a href="https://es.wikiloc.com/rutas/vela"
						title="&lt;span&gt;Rutas&lt;/span&gt; vela" data-id="1377250"
						class="pictogram activity-9"><span>Rutas</span> vela</a></li>
				<li id="act-li-17"><a href="https://es.wikiloc.com/rutas/esqui-de-fondo"
						title="&lt;span&gt;Rutas&lt;/span&gt; esquí de fondo" data-id="1367378"
						class="pictogram activity-13"><span>Rutas</span> esquí de fondo</a></li>
				<li id="act-li-18"><a href="https://es.wikiloc.com/rutas/a-caballo"
						title="&lt;span&gt;Rutas&lt;/span&gt; a caballo" data-id="1388192"
						class="pictogram activity-27"><span>Rutas</span> a caballo</a></li>
				<li id="more-activities"><a style="background-image:none;text-indent:0"
						href="https://es.wikiloc.com/rutas">…</a></li>
			</ul>
			<div id="slides">
				<div id="trail-info" class="clearfix">
					<div class="trail-main">
						<span id="trail-activity">motociclismo</span>
						<h3 id="trail-name" class="long"><a id="trail-name-link"
								href="https://es.wikiloc.com/rutas-motociclismo/20080806-garmisch-partenkirchen-griesen-curon-venosta-spondigna-passo-stelvio-livigno-385851">20080806
								Garmisch-Partenkirchen – Griesen - Curon Venosta – …</a></h3>
						<span id="trail-meta"><em>239 km</em>. Garmisch-Partenkirchen, Bayern (Deutschland)</span>
					</div>
					<div class="trail-user hidden-xs clearfix">
						<a href="https://es.wikiloc.com/wikiloc/user.do?id=43550" id="trail-user-photo"
							class="trail-user-link"><img src="https://s2.wklcdn.com/image_1/43550/photo_tn.jpg"
								alt=""></a>
						<span class="user-info">Autor<a href="https://es.wikiloc.com/wikiloc/user.do?id=43550"
								id="trail-user-name" class="trail-user-link">MacGuffin</a></span>
					</div>
				</div>
				<div id="trail-photos" class="hidden-xs clearfix"><a
						href="https://es.wikiloc.com/rutas-motociclismo/20080806-garmisch-partenkirchen-griesen-curon-venosta-spondigna-passo-stelvio-livigno-385851/photo-107870"><img
							src="https://s2.wklcdn.com/image_1/43550/385851/107870.120x90.jpg"></a><a
						href="https://es.wikiloc.com/rutas-motociclismo/20080806-garmisch-partenkirchen-griesen-curon-venosta-spondigna-passo-stelvio-livigno-385851/photo-107873"><img
							src="https://s2.wklcdn.com/image_1/43550/385851/107873.120x90.jpg"></a><a
						href="https://es.wikiloc.com/rutas-motociclismo/20080806-garmisch-partenkirchen-griesen-curon-venosta-spondigna-passo-stelvio-livigno-385851/photo-107875"><img
							src="https://s1.wklcdn.com/image_1/43550/385851/107875.120x90.jpg"></a><a
						href="https://es.wikiloc.com/rutas-motociclismo/20080806-garmisch-partenkirchen-griesen-curon-venosta-spondigna-passo-stelvio-livigno-385851/photo-107880"><img
							src="https://s0.wklcdn.com/image_1/43550/385851/107880.120x90.jpg"></a></div>
				<div id="previous-but" class="arrow previous">&nbsp;</div>
				<div id="next-but" class="arrow next">&nbsp;</div>
				<a id="map-logo" href="https://maps.google.com/" target="_blank"></a>
			</div>

		</div>
		<div class="mapoverlay mapleft"></div>
		<div id="imagemap" style="background-image: url(&quot;https://sc.wklcdn.com/homemap/385851.jpg&quot;);"></div>
		<div class="mapoverlay mapright"></div>
		<div id="act-tool" class="activity-tooltip"></div>
	</div>

	<div id="trail-counter">
		<div class="container">
			<div class="row">
				<div id="the-counter" class="col-sm-6 col-md-7 col-lg-6 hidden-xs">
					<div class="counter1"><img style="position: absolute; right: 5px; top: -455px;"
							class="jodometer_integer_0"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 1"><img style="position: absolute; right: 60px; top: -260px;"
							class="jodometer_integer_1"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 2"><img style="position: absolute; right: 115px; top: -585px;"
							class="jodometer_integer_2"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 3">
						<div style="position:absolute; width:10px; height:65px; background:url(https://sc.wklcdn.com/wikiloc/images/jodometer-numbers-dot.png?v=2) no-repeat center bottom; right:170px;"
							class="jodometer_dot"></div><img style="position: absolute; right: 185px; top: -130px;"
							class="jodometer_integer_3"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 4"><img style="position: absolute; right: 240px; top: -390px;"
							class="jodometer_integer_4"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 5"><img style="position: absolute; right: 295px; top: -260px;"
							class="jodometer_integer_5"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 6">
						<div style="position:absolute; width:10px; height:65px; background:url(https://sc.wklcdn.com/wikiloc/images/jodometer-numbers-dot.png?v=2) no-repeat center bottom; right:350px;"
							class="jodometer_dot"></div><img style="position: absolute; right: 365px; top: -325px;"
							class="jodometer_integer_6"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 7"><img style="position: absolute; right: 420px; top: -130px;"
							class="jodometer_integer_7"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/jodometer-numbers-dot.png"
							alt="Integer 8">
					</div>
				</div>
				<div id="bigintro" class="col-sm-12 col-md-5 col-lg-6">
					<p>Ya somos <strong>5.335.629</strong> miembros explorando y compartiendo <strong
							id="trail-count">14.351.836</strong> rutas y <strong id="photo-count">26.111.130</strong>
						fotos al aire libre.<br><a class="join-us"
							href="https://es.wikiloc.com/wikiloc/signingup.do">Participa!</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div id="section-grey" class="row ">
			<div id="share-trail" class="col-xs-12 col-sm-5">
				<img src="<?=get_template_directory_uri()?>/wikiloc_home_files/home-share.gif"
					class="share-illustration" alt="Share">
				<h3>Muestra tus rutas preferidas</h3>
				<a href="https://es.wikiloc.com/wikiloc/create.do" class="btn btn-success">Sube tu ruta</a>
			</div>
			<div id="search-trails" class="col-xs-6 col-sm-4">
				<h3>Descubre nuevas rutas</h3>
				<form id="search-trails-form" action="https://es.wikiloc.com/wikiloc/find.do" method="get"
					class="form-inline">
					<div class="form-group hidden-xs">
						<input id="search-trails-input" type="text" name="q" class="form-control" style="width: 196px;">
					</div>
					<button type="submit" class="btn btn-success" style="display: none;">Buscar</button><a
						href="https://es.wikiloc.com/#" class="btn btn-success" id="search-submit">Buscar</a>
				</form>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div id="world-map">
					<a class="map-link"
						onclick="ga(&#39;send&#39;, &#39;pageview&#39;, &#39;/enterwikiloc/worldmap&#39;);"
						title="Mapa del Mundo" href="https://es.wikiloc.com/wikiloc/map.do"><span class="display">Mapa
							del Mundo</span></a>
				</div>
			</div>
		</div>
		<div class="row row-top">
			<div class="col-md-12">
				<h2 class="title-h2">Wikiloc para iPhone &amp; Android</h2>
			</div>
		</div>
		<div class="row container">
			<div class="mobile-app clearfix col-md-12">
				<div class="row">
					<div class="mobile-app-column col-xs-12 col-sm-7 col-sm-push-5">
						<div class="text">Crea tus propias rutas GPS con tu smartphone.</div>
						<div class="text">Súbelas directamente a Wikiloc.</div>
						<ul>
							<li>Navegación Outdoor</li>
							<li>Mapas offline gratuitos para tus aventuras al aire libre</li>
							<li class="hidden-sm">Seguimiento en vivo</li>
							<li class="hidden-md">Búsqueda por Zona de Paso</li>
						</ul>
						<p class="text-center"><a class="btn btn-lg btn-warning"
								href="https://es.wikiloc.com/outdoor-navigation-app"
								onclick="ga(&#39;send&#39;, &#39;pageview&#39;, &#39;/home/mobile&#39;);">Descárgate la
								App</a></p>
					</div>
					<div class="mobile-app-column col-xs-12 col-sm-5 col-sm-pull-7">
						<div class="new-app">¡Mejorada!</div>
						<a href="https://es.wikiloc.com/outdoor-navigation-app"
							onclick="ga(&#39;send&#39;, &#39;pageview&#39;, &#39;/home/mobile&#39;);"><img
								class="img-responsive"
								src="<?=get_template_directory_uri()?>/wikiloc_home_files/mobile-app.png"
								title="Wikiloc App" alt="Wikiloc App"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-top align-items-start">
			<div class="col-md-4">
				<div>
					<div class="wrap-title">
						<h2 class="title-h2">Wikiloc Premium</h2>
					</div>
					<div style="background: #ededed url(https://sc.wklcdn.com/wikiloc/assets/styles/images/home/background-white-seamless-horizontal.png) repeat-x;"
						class="round-corner">
						<a href="https://es.wikiloc.com/premium">
							<img class="img-responsive premium-box round-corner"
								src="<?=get_template_directory_uri()?>/wikiloc_home_files/premium-alerts.png">

						</a>
					</div>

					<div class="text space-1m text-center">
						Todas las funciones exclusivas incluidas</div>
				</div>
			</div>
			<div class="col-md-4">
				<div>
					<div class="wrap-title">
						<h2 class="title-h2">Wikiloc</h2>
						<img class="" src="<?=get_template_directory_uri()?>/wikiloc_home_files/badge-org.png"
							style="width: 40px; margin-left:15px;">
					</div>
					<a href="https://es.wikiloc.com/wikiloc/org.do">
						<img class="img-responsive round-corner"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/org.png">

					</a>
					<div class="text space-1m text-center">
						¡Promociona tu marca y rutas a millones de personas!</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="container-fluid">
					<div class="wrap-title-with-images">
						<div class="wrap-title">
							<h2 class="title-h2">GeoPromotion Pack</h2>
						</div>
					</div>
					<a href="https://es.wikiloc.com/wikiloc/pois.do">
						<img class="img-responsive round-corner"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/wikiloc-para-empresas-poi.png">
					</a>
					<div class="container-fluid text space-1m text-center">
						¡Deja que te encuentren y contacten!</div>
				</div>
			</div>
		</div>

		<div class="country-links row row-top">
			<h3 class="country-links col-xs-12">Encuentra rutas directamente</h3>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<ul>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/alemania" title="rutas Alemania"><span>Rutas
								en</span> Alemania</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/andorra" title="rutas Andorra"><span>Rutas
								en</span> Andorra</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/argentina" title="rutas Argentina"><span>Rutas
								en</span> Argentina</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/austria" title="rutas Austria"><span>Rutas
								en</span> Austria</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/belgica" title="rutas Bélgica"><span>Rutas
								en</span> Bélgica</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/brasil" title="rutas Brasil"><span>Rutas en</span>
							Brasil</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/canada" title="rutas Canadá"><span>Rutas en</span>
							Canadá</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<ul>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/chile" title="rutas Chile"><span>Rutas en</span>
							Chile</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/china" title="rutas China"><span>Rutas en</span>
							China</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/colombia" title="rutas Colombia"><span>Rutas
								en</span> Colombia</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/corea-republica-de"
							title="rutas Corea, República de"><span>Rutas en</span> Corea, República de</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/espana" title="rutas España"><span>Rutas en</span>
							España</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/estados-unidos"
							title="rutas Estados Unidos"><span>Rutas en</span> Estados Unidos</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/francia" title="rutas Francia"><span>Rutas
								en</span> Francia</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<ul>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/grecia" title="rutas Grecia"><span>Rutas en</span>
							Grecia</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/islandia" title="rutas Islandia"><span>Rutas
								en</span> Islandia</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/italia" title="rutas Italia"><span>Rutas en</span>
							Italia</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/marruecos" title="rutas Marruecos"><span>Rutas
								en</span> Marruecos</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/mexico" title="rutas México"><span>Rutas en</span>
							México</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/noruega" title="rutas Noruega"><span>Rutas
								en</span> Noruega</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/paises-bajos"
							title="rutas Países Bajos"><span>Rutas en</span> Países Bajos</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<ul>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/polonia" title="rutas Polonia"><span>Rutas
								en</span> Polonia</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/portugal" title="rutas Portugal"><span>Rutas
								en</span> Portugal</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/reino-unido" title="rutas Reino Unido"><span>Rutas
								en</span> Reino Unido</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/republica-checa"
							title="rutas República Checa"><span>Rutas en</span> República Checa</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/rusia" title="rutas Rusia"><span>Rutas en</span>
							Rusia</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/suiza" title="rutas Suiza"><span>Rutas en</span>
							Suiza</a></li>
					<li><a href="https://es.wikiloc.com/rutas/outdoor/turquia" title="rutas Turquía"><span>Rutas
								en</span> Turquía</a></li>
				</ul>
			</div>
			<p class="col-xs-12"><a href="https://es.wikiloc.com/rutas" id="activities-link">Descubre rutas por
					actividad o país →</a></p>
		</div>
	</div>
	<footer id="footer-main">
		<div id="footer-nav" class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-12">
					<h2>Descárgate la App</h2>
					<div class="col-sm-12 col-xs-6">
						<a href="https://apps.apple.com/es/app/wikiloc-outdoor-navigation-gps/id432102730?mt=8">
							<img class="img-responsive"
								src="<?=get_template_directory_uri()?>/wikiloc_home_files/apple-store.png"
								alt="Available on the iPhone App Store">
						</a>
					</div>
					<div class="col-sm-12 col-xs-6">
						<a
							href="https://play.google.com/store/apps/details?id=com.wikiloc.wikilocandroid&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">
							<img class="img-responsive" height="40" width="135" alt="Disponible en Google Play"
								src="<?=get_template_directory_uri()?>/wikiloc_home_files/google-play-badge-es.png">
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<h2>Ayuda</h2>
					<ul>
						<li><a href="https://ayuda.wikiloc.com/">Centro de Ayuda</a>
						</li>
						<li><a href="https://es.wikiloc.com/forum">Foro y Sugerencias</a></li>
					</ul>
				</div>
				<div class="col-sm-3 col-xs-6">
					<h2>Servicios Wikiloc</h2>
					<ul>
						<li><a href="https://es.wikiloc.com/premium">Wikiloc Premium</a></li>
						<li><a href="https://es.wikiloc.com/wikiloc/pois.do">Promociona tu negocio</a></li>
						<li><a href="https://es.wikiloc.com/wikiloc/org.do">Promociona tus rutas</a></li>
					</ul>
				</div>
				<div class="col-sm-2 col-xs-6">
					<h2>Acerca de Wikiloc</h2>
					<ul>
						<li><a href="https://es.wikiloc.com/wikiloc/about-us.do">Sobre Nosotros</a></li>
						<li><a href="https://es.wikiloc.com/wikiloc/findPeople.do">Comunidad</a></li>
						<li><a href="https://es.wikiloc.com/wikiloc/donate.do?event=donors">Donantes</a></li>
						<li><a href="https://es.wikiloc.com/wikiloc/donate.do">Donar</a></li>
						<li><a href="https://es.wikiloc.com/jobs">Jobs</a></li>
					</ul>
				</div>
				<div class="col-sm-1 col-xs-6">
					<a style="text-decoration:none; padding-top: 13px;" target="_blank"
						href="https://es.wikiloc.com/wikiloc/one-percent.do"
						onclick="ga(&#39;send&#39;, {hitType: &#39;event&#39;, eventCategory: &#39;link&#39;, eventAction: &#39;click&#39;, eventLabel: &#39;open-one-percent-landing&#39;, transport: &#39;beacon&#39;});">
						<img class="img-responsive" width="100px"
							src="<?=get_template_directory_uri()?>/wikiloc_home_files/onepercent-logo-vertical-white.png"
							alt="Logo 1% for the planet" title="Logo 1% for the planet">
					</a>
				</div>
			</div>
		</div>
		<div class="container-grey">
			<div id="footer-copyright" class="container">
				<div id="footer-copyright-ornament"></div>
				<div class="row reorder-xs">
					<div id="footer-copyright-text" class="col-xs-12 col-sm-9" style="padding-bottom: 50px;">
						<p>© Wikiloc. All rights reserved. <a
								href="https://es.wikiloc.com/wikiloc/terms_es.html?v5.1">Condiciones de uso</a> | <a
								href="https://es.wikiloc.com/wikiloc/privacy_es.html?v2.0">Tu privacidad</a></p>
					</div>
					<div id="social-media" class="col-xs-12 col-sm-2">
						<div>
							<a href="https://twitter.com/wikiloc"
								onclick="ga(&#39;send&#39;, {hitType: &#39;event&#39;, eventCategory: &#39;link&#39;, eventAction: &#39;click&#39;, eventLabel: &#39;redirect-to-twitter-account&#39;, transport: &#39;beacon&#39;});">
								<img alt="Twitter icon" class="social-icon social-icon-white pul-right"
									src="<?=get_template_directory_uri()?>/wikiloc_home_files/icon-twitter.png">
							</a>
							<a href="https://instagram.com/wikiloc/"
								onclick="ga(&#39;send&#39;, {hitType: &#39;event&#39;, eventCategory: &#39;link&#39;, eventAction: &#39;click&#39;, eventLabel: &#39;redirect-to-instagram-account&#39;, transport: &#39;beacon&#39;});">
								<img alt="Instagram icon" class="social-icon social-icon-white pul-right"
									src="<?=get_template_directory_uri()?>/wikiloc_home_files/icon-instagram.png">
							</a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-1">
						<div id="select-language" class="dropup">
							<a href="https://es.wikiloc.com/#" class="dropdown-toggle btn" data-toggle="dropdown">
								Español<span class="icon icon-up-open"></span>
							</a>
							<ul id="lang-selector" class="dropdown-menu dropdown-menu-right">
								<li><a id="en" href="https://www.wikiloc.com/">English</a></li>
								<li><a id="es" href="https://es.wikiloc.com/">Español</a></li>
								<li><a id="ca" href="https://ca.wikiloc.com/">Català</a></li>
								<li><a id="gl" href="https://gl.wikiloc.com/">Galego</a></li>
								<li><a id="eu" href="https://eu.wikiloc.com/">Euskaraz</a></li>
								<li><a id="fr" href="https://fr.wikiloc.com/">Français</a></li>
								<li><a id="it" href="https://it.wikiloc.com/">Italiano</a></li>
								<li><a id="sv" href="https://sv.wikiloc.com/">Svenska</a></li>
								<li><a id="nl" href="https://nl.wikiloc.com/">Dutch</a></li>
								<li><a id="de" href="https://de.wikiloc.com/">Deutsch</a></li>
								<li><a id="uk" href="https://uk.wikiloc.com/">Українська</a></li>
								<li><a id="ru" href="https://ru.wikiloc.com/">Русский</a></li>
								<li><a id="el" href="https://el.wikiloc.com/">Ελληνικά</a></li>
								<li><a id="sr" href="https://sr.wikiloc.com/">Српски&nbsp;(БиХ)</a></li>
								<li><a id="hu" href="https://hu.wikiloc.com/">Hungarian&nbsp;(Magyar)</a></li>
								<li><a id="pl" href="https://pl.wikiloc.com/">Polski&nbsp;(Polish)</a></li>
								<li><a id="pt" href="https://pt.wikiloc.com/">Portuguese</a></li>
								<li><a id="tr" href="https://tr.wikiloc.com/">Türkçe</a></li>
								<li><a id="is" href="https://is.wikiloc.com/">Íslenska</a></li>
								<li><a id="da" href="https://da.wikiloc.com/">Dansk</a></li>
								<li><a id="zh" href="https://zh.wikiloc.com/">中文 Chinese</a></li>
								<li class="arrow"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="cookie-monster" style="display: block;">
				Usamos cookies para proporcionarte una mejor experiencia online. Al utilizar nuestros servicios, aceptas
				el uso que hacemos de las cookies.&nbsp;<a href="https://es.wikiloc.com/#" id="acept-cookies"
					class="btn btn-default btn-xs">&nbsp;OK&nbsp;</a>&nbsp;<a
					href="https://es.wikiloc.com/wikiloc/privacy_es.html?v2.0#cookies">Más información</a>
			</div>
		</div>
	</footer>
	<script>
		var showLanguage = true;
		var isLangCancelled = false;

		window.onscroll = function (e) {
			hideLanguageCheck();
		};

		window.addEventListener('DOMContentLoaded', function (event) {
			var switchLangCancel = document.querySelector('#switch_lang_cancel');
			if (switchLangCancel) {
				switchLangCancel.addEventListener('click', function () {
					isLangCancelled = true;
				});
			}
			hideLanguageCheck();
			hasToAddPaddingToBottom();
			var accept = document.querySelector('#acept-cookies');
			if (accept) {
				accept.addEventListener('click', function (event) {
					accept.style.display = 'none';
					hasToAddPaddingToBottom(event);
					if (showLanguage) {
						setTimeout(function () {
							var languageCheck = document.querySelector('#language_check');
							if (languageCheck) {
								languageCheck.parentNode.removeChild(languageCheck);
								checkLanguage();
							}
						}, 500);
					}
				});
			}

			var selectLanguage = document.querySelector('#select-language');
			if (selectLanguage) {
				selectLanguage.addEventListener('click', function () {
					showLanguage = false;
					var switchLangCancel = document.querySelector('#switch_lang_cancel');
					if (switchLangCancel) {
						switchLangCancel.click();
					}
				});
			}
		});

		/**
		 * Add padding to the bottom of the page if the cookie is displayed
		 */
		function hasToAddPaddingToBottom(event) {
			var cookieMonster = document.querySelector('#cookie-monster');
			var footer = document.querySelector('#footer-copyright-text');
			if ((cookieMonster && cookieMonster.style.display === 'block') && !event) {
				footer.style.paddingBottom = '50px';
			} else {
				footer.style.paddingBottom = '0';
			}
		}

		/**
		 * Hide the language popup if we are at the end of the page
		 */
		function hideLanguageCheck() {

			/**
			 * The language dropdown is open
			 * @returns {boolean}
			 */
			function languageDropdownActive() {
				var selectLanguage = document.querySelector('#select-language');
				if (!selectLanguage) {
					return false;
				}

				return selectLanguage.getAttribute('class').indexOf('open') > -1;
			}

			/**
			 * Check if the scroll is at the end of the page
			 * @returns {boolean}
			 */
			function isEndOfThePage() {
				//We add a little offset
				return window.innerHeight + window.scrollY >= document.body.clientHeight - 20;
			}

			if (languageDropdownActive()) {
				showLanguage = false;
				var switchLang = document.querySelector('#switch_lang_cancel');
				switchLang.click();
			}

			var languageCheck = document.querySelector('#language_check');
			var switchLangLang = document.querySelector('#switch_lang_lang');
			if (languageCheck) {
				if (isEndOfThePage()) {
					languageCheck.style.display = 'none';
				} else if (showLanguage && !isLangCancelled && switchLangLang.textContent != "") {
					languageCheck.style.display = 'block';
				}
			}
		}


	</script>
	<script src="<?=get_template_directory_uri()?>/wikiloc_home_files/jquery.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/wikiloc_home_files/underscore-min.js"></script>
	<script src="<?=get_template_directory_uri()?>/wikiloc_home_files/bootstrap.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/wikiloc_home_files/jquery.cookie.min.js"></script>
	<script src="<?=get_template_directory_uri()?>/wikiloc_home_files/common.min.427cf05a.js"></script>
	<script>var isoLang = 'es';</script>
	<script>var WEBAPP_DEV_MODE = false;</script>
	<script src="<?=get_template_directory_uri()?>/wikiloc_home_files/jquery.jodometer.js"></script>
	<script>
		var translations = { "txtActivities": "Actividades" };
		var baseurl = "https://es.wikiloc.com";
	</script>
	<script src="<?=get_template_directory_uri()?>/wikiloc_home_files/home.min.a54b3e14.js"></script>

<?php
get_footer();
