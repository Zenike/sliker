<?php
$pathLinkFile="./assets/";
?>

<!doctype html>
<html lang="fr">
<head>
	<title>formflex</title>

	<meta name="description" content="Description courte de la page" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="fr" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="<?php echo $pathLinkFile; ?>css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href="<?php echo $pathLinkFile; ?>img/favicon.png" rel="shortcut icon" type="image/png" />
</head>
<body>
<div id="wrapper">

<h1>
	<i class="fa fa-link"></i> SliKer
</h1>

<div id="slider_classique" class="sliker sliker--safeload" data-arrow="fa fa-caret" data-bsullet="<i class='fa fa-star'></i>">
	<div class="sliker__window">
		<ul class="sliker__track">
			<?php for($i=1;$i<=10;$i++){ ?>
			<li class="sliker__item <?php if($i==3){echo "sliker__item--selected";} ?>">
				<div class="block-3-2">
					<span>
						<img src="<?php echo $pathLinkFile; ?>img/examples/<?php echo $i; ?>.jpg">
					</span>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>

<blockquote>
&lt;div id="slider_classique" class="sliker safeload" data-arrow="fa fa-caret" data-bullet="fa fa-star">
	&lt;div class="sliker__window">
		&lt;ul class="sliker__track">
			&lt;?php for($i=1;$i&lt;=10;$i++){ ?>
			&lt;li class="&lt;?php if($i==3){echo "selected";} ?>">
				&lt;div class="block-3-2">
					&lt;span>
						&lt;img src="&lt;?php echo $pathLinkFile; ?>img/examples/&lt;?php echo $i; ?>.jpg">
					&lt;/span>
				&lt;/div>
			&lt;/li>
			&lt;?php } ?>
		&lt;/ul>
	&lt;/div>
&lt;/div>

$('#slider_classique').sliker({
'nbr_li':1, //nombre d'éléments qui défilent à chaque mouvement.
'vitesse_auto':3000, //temps entre deux mouvements automatiques.
'vitesse': 500, //rapidité du mouvement (automatique ou manuel, même paramètre).
'auto':0, //activer (1) en utilisant vitesse_auto, désactiver (0) ou personnaliser ("custom"). Voir la rubrique Timer.
'type':"none", //définit le role du slider dans le cas d'une liaison. Options: visualiseur, menu, none.
'cible':"none", //spécifie l'id du slider compagnon dans le cas d'une liaison (ex: #slider_deux).
'isolement': 0, //si actif, le slider est isolé par un fond noir transparent lors de son utilisation.
'pc_only':0, //si actif, le slider sera éffacé sur tous les dispositifs mobiles.
'loop':0, //si actif, le slider répetera son contenu indéfiniment, créant un rail infini.
'liquide':1, //si actif, l'élément prendra, de façon élastique, toute la zone du slider.
'drag':0, //permet la manipulation du slider aux doigts ou en cliquer/glisser à la souris.
'creer_afficheur': 0, //crée automatiquement une zone avec l'image zoomée au dessus du slider.
'fading_mode': 1, //remplace la transition en "déplacement de rail" par un fondu.
'fading_type': 1, //mode 1: fondu blanc. mode 2: fondu enchainé entre deux images.
'buffering_nbr': 1, //nombre d'image préchargé autour de l'image active. Nécessite l'utilisation de data-src au lieu de src.
'fullscreen': 1, //affiche ou masque le bouton fullscreen.
'bullets': 1, //affiche ou masque les puces du slider.
'bullets_limit': 20, //limite de puces au délà de laquelle celles ci se transforme en un menu pages (ex: 7/22).
'bullets_limit_mobile': 8, //identique à bullets_limit mais ne s'applique qu'en cas de mobile
'arrows': 1, //affiche ou masque les flèches du slider.
});
</blockquote>

</div><!-- \#wrapper -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo $pathLinkFile; ?>/../../../sliker.js"></script>
<script>
// menus code infos
$(document).ready(function(){
	$("pre").each(function(){
		$(this).append('<span>code <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
	$("blockquote").each(function(){
		$(this).append('<span>infos <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
});

$("pre, blockquote").on("click","span",function(){
	target = $(this).parents("pre, blockquote");

	if(target.is(".selected")){
		target.removeClass("selected");
	}else{
		target.addClass("selected");
	}
});
</script>
</body>
</html>
<script>
$(document).ready(function(){
	$('#slider_classique').sliker({
	'nbr_li':1, //nombre d'éléments qui défilent à chaque mouvement.
	'vitesse_auto':3000, //temps entre deux mouvements automatiques.
	'vitesse': 0.5, //rapidité du mouvement (automatique ou manuel, même paramètre).
	'auto':0, //activer (1) en utilisant vitesse_auto, désactiver (0) ou personnaliser ("custom"). Voir la rubrique Timer.
	'type':"none", //définit le role du slider dans le cas d'une liaison. Options: visualiseur, menu, none.
	'cible':"none", //spécifie l'id du slider compagnon dans le cas d'une liaison (ex: #slider_deux).
	'isolement': 1, //si actif, le slider est isolé par un fond noir transparent lors de son utilisation.
	'pc_only':0, //si actif, le slider sera éffacé sur tous les dispositifs mobiles.
	'loop':0, //si actif, le slider répetera son contenu indéfiniment, créant un rail infini.
	'liquide':1, //si actif, l'élément prendra, de façon élastique, toute la zone du slider.
	'drag':1, //permet la manipulation du slider aux doigts ou en cliquer/glisser à la souris.
	'creer_afficheur': 0, //crée automatiquement une zone avec l'image zoomée au dessus du slider.
	'fading_mode': 0, //remplace la transition en "déplacement de rail" par un fondu.
	'fading_type': 1, //mode 1: fondu blanc. mode 2: fondu enchainé entre deux images.
	'buffering_nbr': 1, //nombre d'image préchargé autour de l'image active. Nécessite l'utilisation de data-src au lieu de src.
	'fullscreen': 1, //affiche ou masque le bouton fullscreen.
	'bullets': 1, //affiche ou masque les puces du slider.
	'bullets_limit': 20, //limite de puces au délà de laquelle celles ci se transforme en un menu pages (ex: 7/22).
	'bullets_limit_mobile': 8, //identique à bullets_limit mais ne s'applique qu'en cas de mobile
	'arrows': 1, //affiche ou masque les flèches du slider.
	});
});//doc ready
</script>
