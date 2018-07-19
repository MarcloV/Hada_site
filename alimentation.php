<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="row">


		<div class="col s12">
			<div class="card card-blue">
				<div class="row">
					<div class="col s12">
						<h5 class="title-page">ALIMENTATION</h5>
						<ul class="tabs tab-chats">
							<li class="tab col s3"><a class="active" href="#stock">Gestion des stocks</a></li>
							<li class="tab col s3"><a href="#nourriture">Informations</a></li>
						</ul>

					<div id="stock" class="col s12 grey lighten-4" style="text-align:center">
						<table>
							<thead style="font-weight:600">
								<tr>
									<td>Type de nourriture</td>
									<td>Stock de départ</td>
									<td>Quantité par jour</td>
									<td>Stock restant restant</td>
									<td>Supprimer</td>
								</tr>
							</thead>

								<?php
								$connect = mysqli_connect("localhost","root","","hada");

									if ($connect) {
										$id_user = 1;

										$recup_infos = "SELECT * FROM alimentation WHERE id_utilisateur = '$id_user'";
										$query = mysqli_query($connect, $recup_infos);
									
										if ($query != FALSE) {
										/*var_dump($query);*/
											while($line = mysqli_fetch_assoc($query)) { 
											$date = date_create($line['date']);
											$jj = date_create(date("Y-m-d"));
											$nb_jour = date_diff($date, $jj );
											$jour = $nb_jour->format('%R%a');
											$stok = $line['stock']/$line['quantite'];
											$stock = $jour*$stok;
											$reelstock = $line['stock'] - $stock;
								?>
								<tr>
									<td style="padding:10px">
										<?php echo $line['nom'] ?>
									</td>
									<td style="padding:10px">
										<?php echo $line['stock'] ?>
									</td>
									<td style="padding:10px">
										<?php echo $line['quantite'] ?>
									</td>
									<td style="padding:10px">
										<?php echo $reelstock ?>
									</td>
									<td><button type="submit" class="waves-effect waves-light btn grey" name="<?php echo $line['id'] ?>" id="delete"><i class="material-icons">delete</i></button></td>
								</tr>
								<?php }
									} else {
										echo 'Il y a eu une erreur ! Veuillez réessayer.';
									}
									} else {
										echo 'Il y a eu une erreur ! Veuillez réessayer.';
									}
								?>
						</table>

							<form action="" onsubmit="return false">
								<table>
									<tr>
										<td style="padding:10px">
											<label for="">Nourriture</label>
											<input type="text" name="" id="nom_alim">
										</td>
										<td style="padding:10px">
											<label for="">Stock</label>
											<input type="number" name="" id="stok">
										</td>
										<td style="padding:10px">
											<label for="">Dose journalière</label>
											<input type="number" name="" id="q_jour">
										</td>
										<td style="padding:10px">
											<button type="submit" name="action" class="waves-effect waves-light btn" id="calcul">Ajouter</button>
										</td>
									</tr>
								</table>
							</form>
							<div id="result"></div>
						</div>

						<div id="nourriture" class="col s12">
						<div class="row">
						<ul class="collapsible expandable">
							<li>
								<div class="collapsible-header">						
									<h5>Informations générales</h5>
								</div>
								<div class="collapsible-body" id="fondAccordeon">
								<span>Le chat est un carnivore dit strict. Contrairement au chien, ces organes ne synthétisent pas ce qui provient du végétal (C’est-à-dire qu’il ne peut pas les transformer pour en faire quelque chose dont son corps a besoin). Par contre, il peut assimiler une petite partie de certain éléments nutritive tel que les vitamines par exemple, tout se qui n’est pas assimilé devient alors une surcharge pour son corps qu’il peine a évacué.
									Il faut savoir que le chat a les reins fragiles (se phénomène s’accentue avec l’âge vieillissant, en effet les vieux chats sont très sujets aux problèmes rénaux et autre calcul rénaux.) mais comme chez les humains certains chats seront plus sensibles que d’autres a certaine maladie. 
									Ainsi, un bon équilibre alimentaire protège autant ces reins, son foie, son cerveau, son cœur, que ces articulations.  Et oui, le chat aussi a des problèmes articulatoires, surtout en vieillissant, la grande flexibilité de ces articulations ne laisse souvent rien paraitre. Mais cela n’empêche pas l’arthrose et autre arthrite de s’installer. Souvent, dans un âge avancer, vous verrez sa motricité ralentis mais vous verrez rarement un chat avec le train arrière paralysé comme sur un vieux berger allemand. Et pourtant, cela n’empêche pas la maladie d’être là, même s’il ne sent plain pas, attention donc quand vous manipuler vos vieux animaux pour éviter de leur faire mal.
									Par conséquent, bien nourrir son chat à un impact directe sur sa santé, même si on ne peut pas les empêcher de tomber malade ou de vieillir, On peut les accompagner pour qu’il vieillisse au mieux.

									De quoi ont donc besoin les chats ?
									Et bien il faut savoir quand générale ils boivent peut car dans la nature, c’est leur proie qu’il leur donne une grande partie de ce qu’ils ont besoin.
									Faire attention au sel et au produit saler qu’on leur donne, car les chats aiment ce gout qui les aide souvent à boire mais mal gérer cela provoque des problèmes rénaux important, voir fatal si jamais le chat ne boit pas assez pour compenser.
									Donc s’assurer qu’ils s’hydratent assez pour leur gabarit, sachant que cela peut être influencer par le type de nourriture donner (ou les friandises). Mais un chat qui boit sans cesse ou réclame trop souvent peut avoir du diabète, n’hésiter à demander conseil a votre vétérinaire car c’est une maladie grave mais tout à fait soignable (comme chez les humains) avec lequel il peut vivre longtemps à vos côtés.

									Le chat ne détecterait pas la saveur sucrer, bon nombre aliment leur étant destiné sont bourré de glucide, cela fragile les yeux et surtout créer un embonpoint qui peut entrainer bon nombre de maladie : Diabète, problèmes articulaires, cardiaque, etc. …

									Un fort taux de glucides favorise la prise de poids donc méfier vous en choisissant son alimentation. Mais n’essayer pas de l’éliminer totalement car il a besoin d’un minima dans son alimentation.

									Un chat a besoin d’une alimentation ayant un minimum de graisse, en effet c’est ce qu’on appelle « l’appétence » d’un aliment. Un chat sent sa gamelle, et le gras est un bon fixateur d’odeur comme de gout. Il est souvent constaté chez les chats qui tombent malade et ont le nez boucher, une perte importante voir totale d’appétit. Attention, manger un peu moins ne le tuera pas, il remangera normalement, une fois guéri par contre un chat qui refuse de manger alors qu’il est malade ne fait que s’affaiblir encore plus, demander conseil a votre vétérinaire qui vous aidera à résoudre le problème.

									Il faut donc adapter l’alimentation a l’état de santé de votre animal et éviter les carences alimentaires. (Un véto peut vous conseiller, une prise de sang peut être faites pour savoir si votre animal a des problèmes rénaux que vous devez prendre en compte par exemple).
									La quantité a son gabarit, son activité physique (les chats ayant un jardin se dépense plus, ils mange donc un poil plus, les chats d’appartement peuvent vouloir manger autant mais prendront du poids inutilement), a ces gouts car certain sont très difficile mais aussi il faut le dire à votre budget. Il faut aussi toujours prendre en compte la satiété de l’animal, certain ne sont jamais rassasié, essayer donc un autre type d’aliment qui lui tiendra peut-être plus longtemps.

										Types d'aliments :

									Il y a trois grand type aliments, que je vais mettre dans l’ordre croissant : 
									Un bon aliment doit toujours avoir le maximum de protéine animal surtout pas de sous-produit animal (ce sont des déchets de l’industrie non comestible ayant aucun intérêt nutritionnel), peu de céréales voir pas du tout.
									Pour savoir lire une étiquette d’un produit,je vous conseil se site:  
									<a href="http://www.vetodescoudreaux.fr/Publication/Show.aspx?item=1529" target="_blank">http://www.vetodescoudreaux.fr</a> 
								</span>								
								</div>
							</li>
							<li>
								<div class="collapsible-header">
									<h5>Les rations ménagéres</h5>
								</div>
								<div class="collapsible-body" id="fondAccordeon">
									<span>
									Les rations ménagères (Le plus proche de ce qu’il mange dans la nature).
									Si vous pouvez vous le permettre c’est le must de l’alimentation. En termes de nutriment ou de satiété il n’y a pas mieux.
									Son seul défaut, sa demande du temps et un peu investissement au propriétaire pour savoir comment sa se prépare, mais beaucoup de bénéfice pour l’animal en retour.
									Sa consiste en un mélange essentiellement de viande (volaille ou bœufs, jamais de porcs !) avec certain légumes/fruits pour compléter les apports nutritionnels (mais pas n’importe lesquels). Vous n’avez pas besoin de changer la recette pour éviter les carences, seulement de panacher dans la semaine une fois un type de viande, une autre fois un autre type de viande. (En gros, quelque jour de la volaille puis quelque du bœuf, ou un mixe des deux). Niveaux digestion cela dépend de l’animal.
									Il y a deux versions :
									-	Cru : vous aurez tous les bienfaits nutritionnels des aliments, il faudra alors penser à vermifuger souvent pour éviter les parasites intestinaux.
									Il y a très peu de légumes dans cette version car la viande est optimisée à son maximum niveau nutritionnel. Votre véto pourra vous conseiller sur quand et comment bien le vermifuger.
									-	Cuit : Plus facile à mettre en place pour certain en termes de stockage, vous perdez un peu de nutriment/vitamine pendant la cuisson qui se compense aisément. Aucun risque de parasite. On peut servir froid se qui a été cuit, et facilement stocker au congèle pour sortir au fur et à mesure de ce dont l’animal a besoin.

									Aucun problème hydratation ici car une bonne partie se trouve dans la nourriture. Pas de sucre, ni de sel dans les recettes pour éviter les problèmes de santé. Certain rajoute des compléments alimentaires, renseigner vous ce qu’ils contiennent et demander conseil a un veto pour vérifier qu’il n’y a pas surdosage de quelque chose pour votre animal.
									Vous trouverez bon nombre de groupe sur les réseaux sociaux et de site internet qui vous donnerons des conseils pour créer votre ration ménage. Vous pouvez consulter aussi un veto nutritionniste pour une recette sur mesure (ce que je conseil surtout pour les animaux à risque, anorexie maladie diverse ...). Certaines entreprises en font même tout faites. A vous de choisir si vous prenez cette option.
									</span>
								</div>
							</li>
							<li>
								<div class="collapsible-header">
									<h5>Les patées</h5>
								</div>
								<div class="collapsible-body" id="fondAccordeon">
									<span>
									Comme dans l’option précédentes, pas de problèmes d’hydratation ici car une grande partie est composé d’eau. Une bonne pâtée, ne contient pas de sous-produits, ni de céréales.
									Il faut par contre bien lire les étiquettes afin de connaitre les taux de protéines, de glucides, de sel quelles peuvent contenir. Et choisir en fonction de l’âge du chat, et de son activité.
									La sensation de satiété est moindre mais tout dépend du chat, certain étant plus gros mangeur que d’autre.

									Voici un récapitulatif pour vous aider à choisir :
									(Ces informations provient de ce site ou vous trouvez d’autre informations complémentaires sur les pâtées tel que des marques précises et ou les acheter : <a href="http://www.rescue-forum.com/chats-145/patees-pour-chats-8747/page-63.html#post2460116" target="_blank">www.rescue-forum.com</a>
									Si vous donnez exclusivement de la pâtée :
									« Un chat doit manger 5.2 à 6g de protéines/kg/jour. Donc pour un chat de 5kg ça fait 26 à 30g de protéines par jour. Donc avec une pâtée à 8% de protéines, ça ferait 325 à 375g de pâtée par jour. Pour une pâtée à 10% de protéines, 260 à 300g par jour. Vous pouvez en général vous fiez aux quantités recommandées sur les boîtes.
									Il est important de varier les pâtées pour varier les apports des différentes protéines (différentes viandes). L'idéal étant de donner au moins 3 variétés différentes.»

									Si vous souhaitez donner une alimentation mixte : 
									(C’est-à-dire pâtée plus croquettes ou rations ménagères)
									« Les quantités recommandées sont de 50 à 200g par jour (en fonction du poids du chat, et de la quantité de croquettes que vous souhaitez qu'il mange). Tout en laissant des croquettes à volonté à sa disposition. »

									Occasionnellement :
									« Si vous souhaitez donner de la pâtée occasionnellement, uniquement comme friandise, il ne faut pas dépasser 20g/jour (ou environ 140g par semaine) pour un chat de 4kg, 30g/jour pour un chat de 6kg »

									Ici, il est possible que le chat boive moins car sa nourriture est très humide, cela protège évidement ces reins de accumulations de minéraux ou d’un surplus de sel dans ces croquettes par exemple.
									Important, acheter en gros permet de faire des économies et vous faire gagner du temps mais une boite de pâtée ouverte se consomme dans les 3 jours grand maximum (à conserver au frigo) alors attention, préféré de plus petite boite pour éviter des problèmes intoxications du au développement de bactérie.
									</span>
								</div>
							</li>
							<li>
								<div class="collapsible-header">
									<h5>Les croquettes</h5>
								</div>
								<div class="collapsible-body" id="fondAccordeon">
									<span>
									C’est souvent le moyen le plus utilisé pour nourrir les chats car le plus pratique pour nous humains. Mais aussi pour une fausse idée : « c’est moins cher ».
									En cherchant vous verrez que pour avoir une bonne qualité de croquette, le prix est quasi identique aux deux autres options déjà mentionnées précédemment.
									Evidement, nous choisissions aussi en fonction de différente contrainte : notre budget, le temps etc...
									Les croquettes conviennent bien pour ce type de contrainte mais seulement si on fait attention à ce qu’on prend. Les croquettes ont un fort taux de minéraux et de sel ce qui est extrêmement dangereux pour la santé du chat. Cela vient du fait que c’est un aliment industriel déshydrater. Il n’y a aucune humidité dans ce produit pour contrer les taux fort de minéraux à coter. Certaine marque rajoute même du sel dans leur recette pour essayer inciter le chat à s’hydrater malheureusement ça ne fonctionne pas sur tous les chats.
									Pas de panique tout de même, il suffit de vérifier que le chat s’hydrate bien et avec de l’eau bien sûr ! et les chances d’avoir un problème diminue grandement.

									Voici un récapitulatif pour vous aider à choisir :
									(Ces informations provient de ce site ou vous trouvez d’autre informations complémentaires sur les croquettes tel que des marques précises et ou les acheter : http://www.rescue-forum.com/chats-145/re-croquettes-avis-compos-venez-parler-recap-p-520-a-8491/page-520.html#post2171462)
									« Voici les taux idéaux pour des chats stérilisés de moins de 10 ans environ:
									-	Protéines: entre 30 et 50%
									-	Graisses: pour les chats qui ont tendance à grossir, entre 9 et 15% pour ceux qui sortent et/ou ont tendance à être minces, entre 13 et 22%
									-	Cendres: entre 5 et 7%
									-	Calcium: entre 0.7 et 1.3%
									-	Phosphore: entre 0.6 et 1.1%
									-	Magnésium: inférieur à 0.1%
									-	Taurine: minimum 0.1%

									Le taux de Ca/P doit être contenu entre 1 et 1.3
									Glucides: le plus bas possible! dans tous les cas inférieur à 40% 
									le taux de glucides n'est pas toujours donné, alors voici comment le calculer
									-> 100 - %protéines - %graisses - %fibres - %humidité - %cendres
									exemple: pour les croquettes qui contiendraient
									35% de protéines, 15% de graisses, 10% de fibre, 10% d'humidité et 6% de cendres, ça nous fait
									100-35-15-10-10-6 = 24% de glucides
									Pour calculer les calories il suffit de faire (pour 100g): taux de protéines x4 + taux de graisses x9 + taux de glucides x4
									par exemple des croquettes avec 40% de protéines, 20% de graisses et 20% de glucides donneront 40x4 + 20x9 + 20x4 = 420 calories pour 100g (4200 par kg)

									Pour les chats stérilisés de plus de 10 ans (environ), les taux de cendres, calcium et phosphore doivent être de préférence dans le bas de la norme donnée. (Pour éviter les problèmes rénaux)

									Pour les chatons, le taux de graisses autour de 20%, et les taux de calcium et phosphore dans le haut de la norme donnée (voir légèrement au-dessus).
									ATTENTION : lorsque l'on change de croquettes, il ne faut pas oublier de faire une transition de 2-3 semaines. »

									J’explique ce qu’est une transition, c’est un mélange des anciennes croquettes avec les nouvelles. On peut diviser en 4 étapes comme ceci : ¼ de nouvelle avec ¾ des anciennes pendants 4 à 7 jours. Puis 2/4 de chaque. Puis ¾ et enfin 100% des nouvelles. Comment savoir si ça marche ? le chat ne doit pas avoir de vomissement, ni diarrhée lors d’une nouvelle étape. Si sa dure plus de journée ou que les symptômes sont trop importants, revenir à étape d’avant.
									Si des symptômes de problèmes digestifs apparaissent, même épisodiquement (même une fois par semaine), sa peut vouloir dire qu’il digère mal ces croquettes, donc changer en. La digestion et état du poils sont un bon indicateur pour savoir si alimentation lui convient.

									</span>
								</div>
							</li>
							<li>
								<div class="collapsible-header">
									<h5>Rythmes des repas et problème digestif</h5>
								</div>
								<div class="collapsible-body" id="fondAccordeon">
									<span>
									Un félin dans la nature chasse pour mange dès qu’il a faim, ainsi manger plusieurs repas est un instinct primitif pour lui si sa proie n’est pas assez grosse pour le rassasié en une fois. C’est la qualité de son alimentation qui fait qu’il n’a pas à chasser h24 car il est rassasié et peut ainsi faire d’autre activité. Bien qu’il aime beaucoup dormir, il passe le plus clair de son temps réveiller à jouer ou explorer une fois rassasier bien sûr.
									C’est un animal actif quand il est réveillé qui s’est s’économiser pour ne pas avoir à devoir chasser parce que ces activités lui auront donner faim.

									Le plus souvent, nous laissons les croquettes en libre-service ce qui permet aux chats qui ont tous un petit estomac d’aller grignoter régulièrement dès qu’ils ont faim. Attention aux chats qui ne savent pas se réguler, la prise de poids importante peut en découler.
									Avec une alimentation de pâtée complète un chat va moins grignoter (En moyenne un chat reste sans manger de 4 à 8 heures maxi d’affilée) qu’avec des croquettes mais un peu plus qu’avec une ration ménagère (seulement 2 à 3 repas par jours selon l’appétit/activité du chat). 
									</span>
								</div>
							</li>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
<script type="text/javascript">
				var elem = document.querySelector('.collapsible.expandable');
				var instance = M.Collapsible.init(elem, {
					accordion: false
				});

			</script>
	<script>
		$(document).ready(function() {
			$('.tabs').tabs({
				swipeable: true
			});
		});

	</script>

	<script>
		$(document).ready(function() {
			$('#calcul').click(function() {
				$.ajax({
					url: "php/calc-alim.php",
					data: {
						nom_alim: $('#nom_alim').val(),
						stock: $('#stok').val(),
						q_jour: $('#q_jour').val()
					},
					type: "POST",
					success: function(data) {
						$('#result').html(data);
					}
				});
			});

			$('#delete').click(function() {
				var id_line = $(this).attr('name');
				console.log(id_line);
				$.ajax({
					url: "php/delet-alim.php",
					data: {
						id: id_line
					},
					type: "POST",
					success: function(data) {
						$('#result').html(data);
					}
				});
			});

		});

	</script>

</body>

</html>
