<!-- Je devine les actions de votre souris : <input type="button" id="test" style="color:red" value="Cliquez-moi" onmousedown="document.getElementById('test').value='Vous enfoncez le bouton de la souris'" onmouseup="document.getElementById('test').value='Vous venez de relâcher le bouton de la souris'" onmouseover="document.getElementById('test').value='Vous survolez le bouton'" onmouseout="document.getElementById('test').value='Vous venez de quitter le bouton'"/> -->
<!-- le code ci dessus permet d'afficher un text une fois que le curseur est depossé sur le bouton-->
<!DOCTYPE html>
<html>
			<head>
				<title>Mon blog</title>
				<meta charset = "utf-8" />
				<link rel = "stylesheet" href = "index.css" />
				<meta name = "viewport" content = "width-device-width, initial-scale=1" />
			</head>
	<body>

		<div id = "entete">
		<img src = "logo.jpg" id = "logo"/>
			<span id = "pensif">Le Pensif</span>
			<span id = "pense" ><h3><u>Pensée de la semaine:</h3></u>
			" <i>La meilleure façon de prédire l'avenir c'est de le créer.</i> "__Peter Drucker</span>
		</div>
			<article id = "article"><br/>
				<h2 align="center">Articles</h2><br/><br/>
					<br/><br/>
					<a href = "#">Articles récents</a><br/><br/><a href = "#">Catégories</a>	
			</article>
			
			<aside id = "body">
<nav class="salut"><u>BIENVENUE </u><span class="suite"> Chers Lecteurs.</span></nav><br/><br/>
<span class="first">Le Pensif  </span> est un recueil de productions écrites qui vous 
propose des articles précis, des revues orientées, des chroniques et 
autres productions à caractère littéraire dans le but d’éduquer, 
d’évader, d’afficher et dénoncer les tares de la société,, et 
éventuellement proposer un modèle social plus solide, plus durable… 
Vous trouverez ici des productions écrites qui portent sur des 
thématiques variées, relevant de plusieurs domaines notamment 
l’environnement, l’économie, la santé, l’actualité globale, la société, la 
littérature et éventuellement tout autre domaine qui nécessite notre 
intervention.<br/><br/><br/><br/><br/>
<nav class="salut"><u>WELCOME </u><span class="suite"> Dear Readers.</span></nav><br/><br/>
<span class = "first">Le Pensif  </span> is a collection of written productions which 
offers you specific articles and magazines, chronicles and other 
literary productions with the aim of educating, entertaining, displaying 
and denouncing the plagues of society.You will find here written productions which relate to various themes, 
relating to several fields in particular the environment, economy, 
health, global news, society, literature and any other field which could 
also require our intervention.<br/><br/><br/><br/>
<nav id="fin">Cogitare <span class="ti">-</span> Meditare <span class="ti">-</span> Output Effectus</nav>
			</aside>
			
			<aside id = "propo"><br/>
				<h2 align="center">A propos de nous !</h2><br/><br/>
				<p><a href = "#">Nous suivre</a></p><br/>
				<p><a href = "#">Actualités</a></p><br/>
				<p><a href = "#">Publicités</a></p><br/>
			</aside>
	</body>
</html>
