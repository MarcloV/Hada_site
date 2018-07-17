<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<?php include "nav.php"?>

	<div class="row">
		<div class="col m3 #f5f5f5 grey lighten-4 card">
			<div class="row">
				<div class="col m12 center-align">
					<h6>INFO SANTE GENERALE</h6>
					<img src="img/220x220.png" alt="" class="circle responsive-img">
				</div>
				<p class="color-vert">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, incidunt, culpa. Rem dolores illo itaque sunt tenetur minus molestiae qui aliquam saepe distinctio reiciendis ex nulla, hic maxime reprehenderit blanditiis. </p>
			</div>
		</div>

		<div class="col m9">
			<div class="card card-blue">
				<div class="row">
					<div class="col s12">
						<h5 class="title-page">SANTE</h5>
					</div>
					<div class="col s12">
						<ul class="tabs tab-chats">
							<li class="tab col s3"><a class="active" href="#chat-1">Chat 1</a></li>
							<li class="tab col s3"><a href="#chat-2">Chat 2</a></li>
							<li class="tab col s3"><a href="#chat-3">Chat 3</a></li>
						</ul>
					</div>

					<div class="col s12">
						<div class="col s12 grey lighten-4" id="chat-1">
							<div class="divider"></div>
							<div class="section color-vert">
								<h5>Section 1</h5>
								<p>Stuff</p>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sed cum pariatur maiores architecto voluptatem voluptatum. Praesentium esse aliquam repellendus quae vitae, maxime beatae at. Sint, mollitia. Quidem tempore culpa consequatur quam tempora sequi eos atque odio! Unde maiores aspernatur dolorum fugit, odit magni cupiditate, omnis, voluptate labore nobis nihil id quo. Itaque id sapiente maxime tempora et! Provident, facere. </p>
							<div class="divider"></div>
							<div class="section color-rouge">
								<div class="col m2"></div>
								<div class="col m8">
									<div class="card" id="popup">
										<ul class="collapsible">
											<li>
												<div class="collapsible-header"><i class="material-icons">filter_drama</i>NOTIFICATIONS</div>
												<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col s12 grey lighten-4" id="chat-2">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nisi cupiditate sapiente voluptates iste officia fuga blanditiis saepe unde necessitatibus quis facere dolor eius illum, ducimus ea? Accusantium, placeat, nam.
						</div>
						<div class="col s12 grey lighten-4" id="chat-3">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores nesciunt placeat similique temporibus cum quas autem, dolorem nisi repellat. Soluta neque nemo eveniet ipsa, qui dolores. Temporibus voluptas itaque accusamus?
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			$('.tabs').tabs({
				swipeable: true
			});
		});

	</script>

</body>

</html>
