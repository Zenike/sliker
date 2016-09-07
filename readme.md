# Sliker
### <http://flexvision.be/formflex/sliker.php>

`sliker` est un plugin slider/slideshow écrit en `jQuery`

# dépendances
- `jQuery`: une version récente sans limitation précise
- `Less`: le css de ce plugin est écrit en LESS, quelques variables de couleur devront être définies pour son bon fonctionnement.
- ´FontAwesome´: les flèches de navigation utilisent des icones FontAwesome. Il est possible de s'en passer (voir plus bas)

# Installation
1. récuperer les fichiers `sliker.less` et `sliker.js` à la racine du projet GitHUb
2. inclure le fichier `sliker.js` dans la document avant la fermeture de la balise `</body>`
3. lier et génerer un css à partir de `sliker.less`

# Utilisation
- créer la structure html suivant l'exemple
```html
<div id="slider_example" class="sliker">
	<div class="conteneur_strict">
		<ul class="grand_slider">
			<li><img src="./example.jpg"></li>
			<li><img src="./example.jpg"></li>
			<li><img src="./example.jpg"></li>
		</ul>
	</div>
</div>
```
- déclarer le slider en javascript
```javascript
$('#slider_example').slider_nike({
'nbr_li':1, //nombre d'éléments qui défilent à chaque mouvement.
'vitesse_auto':3000, //temps entre deux mouvements automatiques.
'vitesse': 500, //rapidité du mouvement (automatique ou manuel, même paramètre).
'auto':0, //activer ou non le défilement automatique.
'type':"none", //définit le role du slider dans le cas d'une liaison. Options: visualiseur, menu, none.
'cible':"none", //spécifie l'id du slider compagnon dans le cas d'une liaison (ex: #slider_deux).
'isolement': 0, //si actif, le slider est isolé par un fond noir transparent lors de son utilisation.
'pc_only':0, //si actif, le slider sera éffacé sur tous les dispositifs mobiles.
'loop':0, //si actif, le slider répetera son contenu indéfiniment, créant un rail infini.
'liquide':1, //si actif, l'élément prendra, de façon élastique, toute la zone du slider.
'drag':0, //permet la manipulation du slider aux doigts ou en cliquer/glisser à la souris.
'creer_afficheur': 0, //crée automatiquement une zone avec l'image zoomée au dessus du slider.
'fading_mode': 1, //remplace la transition en "déplacement de rail" par un fondu.
'buffering_nbr': 1, //nombre d'image préchargé autour de l'image active. Nécessite l'utilisation de data-src au lieu de src.
'fullscreen': 0, //affiche ou masque le bouton fullscreen.
'bullets': 1, //affiche ou maque les puces du slider.
'bullets_limit': 20, //limite de puces au délà de laquelle celles ci se transforme en un menu pages (ex: 7/22).
});
```

# Personnalisation

## Couleurs
Par défaut, le less de Slike chercher après la variable @theme et se sert de celle-ci pour coloriser ses éléments de navigation.
Il est donc nécessaire que cette variable existe.
Il est toutefois possible de modifier ses couleurs indépendement en utilisant en ciblant le slider en CSS et 
en utilisant un mixin LESS :
```css
.sliker_colors(@color,@bg);
```
- @color pour la couleur de fond (au repos) des puces et fleches.
- @bg pour la couleur active (survol) des puces et fleches.

##### Exemple
```css
#slider_example{
.sliker_colors(red,white);
}
```

## Icones
Par défaut, Sliker utilise des icones font-awesome pour ses flèches de navigation et des span arrondis en CSS pour ses puces.
Ces éléments sont remplaçables facilement par d'autres icones (FontAwesome ou autre).

- pour remplacer les flèches, ajouter un attribut `data-arrow` à la base du slider et y spécifier la classe `FontAwesome` ou autre (set d'icone personnalisé). Il est nécessaire que ces nouvelles flèches aient deux variantes se terminant respectivement par `-left` et par `-right`. Indiquez le mot clé dans `data-arrow` sans la terminaison indiquant le sens (voir exemple ci dessous).

##### Exemple
```html
<div id="slider_example" class="sliker" data-arrow="fa fa-caret" >
	<div class="conteneur_strict">
		...
```

- Pour remplacer les puces, utiliser l'attribut `data-bullet` à la base du slider et y spécifier la classe FontAwesome ou autre (set d'icone personnalisé).

##### Exemple
```html
<div id="slider_example" class="sliker" data-bullet="fa fa-star" >
	<div class="conteneur_strict">
		...
```

## Timer
Sliker permet de configurer un mode de défilement automatique. Cette option se configure au moment de l'appel javascript en spécifiant la propriété `auto`. `auto` à 0 désactivera le défilement automatique alors que `auto`à 1 l'activera et utilisera la propriété `vitesse_auto` comme temps d'attente entre deux slides.
La dernière option est "custom". Si `auto` est paramétré sur "custom", chaque slide peut avoir son propre timer. Pour indiquer ces timings il suffit d'écrire une valeur temporelle, en minisecondes, dans un attribut data-timer sur chaque li du slider.
Important: en mode custom, chaque li doit posséder son propre data-timer, sans exception.

##### Exemple
```html
<div id="slider_example" class="sliker" data-arrow="fa fa-caret-left" >
	<div class="conteneur_strict">
		<ul class="grand_slider">
			<li data-timer="3000">
				...
```

## Variables LESS
Ces variables s'appliquent en css. Il faut cibler le slider dans le css normal (par son id par exemple) et lui appliquer un de ces mixins: 

```css
.sliker_bullets(@size,@round);
```
- @size pour la taille: hauteur et largeur de la puce ou font-size de l'icone.
- @round pour l'arrondi de la puce (ex:2px pour un carré légèrement arrondi) => inutile si la puce est une icone

```css
.sliker_bullets_out(@spacing);
```
- @spacing pour modifier les marges (top et bot) des boutons.
- ce mixin sort les puces du slideret les positionnes après celui ci. Ecrire .sliker_bullets_out; sans option est donc tout à fait viable.

```css
.sliker_bullets_in(@spacing);
```
- position par defaut !
- @spacing pour modifier la marge des boutons (séparation du bas du slider).
- ce mixin rentre les puces dans le bas du slider, par dessus le contenu. Ecrire .sliker_bullets_in; sans option est viable et appliquera la marge par defaut.

```css
.sliker_arrows_out(@spacing);
```
- @spacing pour modifier l'espacement entre les fleches et le bord du slider (sans compter le padding autour de l'icone).
- ce mixin sort les fleches en dehors du slider. Ecrire .sliker_arrows_out; utilsera un spacing de 0px et les fleches seront contre le slider.

```css
.sliker_arrows_in(@spacing);
```
- position par defaut !
- @spacing pour modifier l'espacement entre les fleches et le bord du slider (sans compter le padding autour de l'icone).
- ce mixin rentre les fleches dans le slider. Ecrire .sliker_arrows_in; utilsera un spacing de 0px (par defaut) et les fleches seront contre le slider.

## Informations diverses
- mettre ".full" sur la balise "img" si on souhaite qu'elle prenne 100% du li, sinon elle prendra sa taille réelle.
- départ sur un slide précis possible grace à la classe "selected" à mettre sur un "li".
- pour masquer les puces, mettre la class "no_btn" sur la base du slider.
- mettre la class "vam" (pour vertical align middle) sur la base du slider pour que les li soient alignés verticalement.
- mettre la classe "safeload" à la racine (.sliker) afin d'avoir un chargement moins saccadé dans le cas d'un slider élastique (une image).
