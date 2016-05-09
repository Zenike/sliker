# Readme
sliker is a responsive jQuery slideshow

- mettre ".full" sur la balise "img" si on souhaite qu'elle prenne 100% du li, sinon elle prendra sa taille réelle<br />
<br />
- départ sur un slide précis possible (comme ici) grace à la classe "selected" à mettre sur un "li".<br />
<br />
- pour masquer les puces, mettre la class "no_btn" sur la base du slider.<br />
<br />
- mettre la class "vam" (pour vertical align middle) sur la base du slider pour que les li soient alignés verticalement<br />
<br />
- mettre la classe "safeload" à la racine (.sliker) afin d'avoir un chargement moins saccadé dans le cas d'un slider élastique (une image)<br />
<br />
- utiliser l'attribut data-arrow sur la base du slider en indiquant une class font-awesome (ou autre) sans la terminaison -left -right (ex: "fa fa-caret")<br />
<br />
- utiliser l'attribut data-bullet pour utiliser une icone comme puce à la place d'un span arrondi => spécifier la class font-awesome entière dans l'attribut (ex: "fa fa-star")<br />
<br />
<br />
LES VARIABLES:<br />
'nbr_li': indique combien de li passer à chaque action de slide (pas le nombre de li visibles !!!)<br />
'vitesse_auto': le temps entre deux défilements automatiques (en millisecondes)<br />
'vitesse': la vitesse de déplacement du slider en mouvement<br />
'auto': si le slider bouge de lui même (1) ou si il est totalement statique (0)<br />
'type': soit rien de spécial (none), soit le zoom d'un double slider (visualiseur) soit le menu (menu)<br />
'cible': dans le cas d'un double slider, donner l'id de son partenaire (ex: "#slider_articles")<br />
'isolement': si un fond noir apparait quand on active le slider (1 ou 0)<br />
'pc_only': si pc only est actif (1), ce slider disparait sur un périphérique mobile<br />
'loop': si le slider boucle (première image après la dernière, etc) (0 ou 1).<br />
'liquide': si les li prennent toute la largeur du slide (100%) (0 ou 1)<br />
'drag': si on peut slider en cliquer/glisser sur les photos (ne peut pas être désactivé sur mobile) (0 ou 1)<br />
'creer_afficheur': crée automatiquement une structure de zoom au dessus du slider (0 ou 1)<br />
'fading_mode': le défilement des slides se fait en fondu et plus en glissé (0 ou 1)<br />
'buffering_nbr': nombre d'images suivants les images visibles qui sont déjà chargées (classique: 1 pour un slider élastique, sinon nbr identique au images visibles)<br />
'fullscreen': affiche ou non le bouton (et donc la fonctionnalité) fullscreen(0 ou 1)<br />
<br />
<br />
VARIABLES LESS
<br />
Ces variables s'appliquent en css. Il faut cibler le slider dans le css normal (par son id par exemple) et lui appliquer un de ces mixins: 
<br />
<br />
.sliker_colors(@color,@bg);<br />
@color pour la couleur de fond (au repos) des puces et fleches.<br />
@bg pour la couleur active (survol) des puces et fleches.<br />
<br /><br />
.sliker_bullets(@size,@round);<br />
@size pour la taille: hauteur et largeur de la puce ou font-size de l'icone.<br />
@round pour l'arrondi de la puce (ex:2px pour un carré légèrement arrondi) => inutile si la puce est une icone<br />
<br /><br />
.sliker_bullets_out(@spacing);<br />
@spacing pour modifier les marges (top et bot) des boutons<br />
- ce mixin sort les puces du slideret les positionnes après celui ci.<br />
Ecrire .sliker_bullets_out; sans option est donc tout à fait viable;
<br /><br />
.sliker_bullets_in(@spacing);<br />
! position par defaut !<br />
@spacing pour modifier la marge des boutons (séparation du bas du slider)<br />
- ce mixin rentre les puces dans le bas du slider, par dessus le contenu<br />
Ecrire .sliker_bullets_in; sans option est viable et appliquera la marge par defaut;
<br /><br />
.sliker_arrows_out(@spacing);<br />
@spacing pour modifier l'espacement entre les fleches et le bord du slider (sans compter le padding autour de l'icone)<br />
- ce mixin sort les fleches en dehors du slider<br />
Ecrire .sliker_arrows_out; utilsera un spacing de 0px et les fleches seront contre le slider.
<br /><br />
.sliker_arrows_in(@spacing);<br />
! position par defaut !<br />
@spacing pour modifier l'espacement entre les fleches et le bord du slider (sans compter le padding autour de l'icone)<br />
- ce mixin rentre les fleches dans le slider<br />
Ecrire .sliker_arrows_in; utilsera un spacing de 0px (par defaut) et les fleches seront contre le slider.