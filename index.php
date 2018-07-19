<!doctype html>

<html>

<?php include "header.php"?>

<body>

	<div class="container cont100">
		<div class="row" style="margin-bottom: 0;">
			<div class="col s12 m5 colacc-left">
				<div class="imageacc"></div>
				<div class="textacc">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur repellendus, molestiae laboriosam, minima iure quaerat alias aut explicabo beatae. Exercitationem cupiditate nostrum, consectetur quod eum..</p>
				</div>
			</div>
			<div class="col s12 m7 colacc-co">
				<div class="row">
					<div class="col s12 m6 offset-m3">
						<div class="card card-form">
							<div class="row">
								<form class="col s12" action="" onsubmit="return false">

									<div class="row">
										<div class="input-field col s12">
											<input id="email" type="email" class="validate">
											<label for="email">Email</label>
										</div>

										<div class="input-field col s12">
											<input id="password" type="password" class="validate">
											<label for="password">Mot de passe</label>
										</div>

										<div class="col s12">
											<button type="submit" name="action" id="login" class="waves-effect waves-light btn">Se connecter</button>
										</div>
										<div id= "verif">

										</div>
									</div>

								</form>
							</div>
						</div>
						<p class="text-signin">Vous n’avez pas encore de compte ? Vous pouvez vous inscrire en <a href="signin.php">cliquant ici</a> !</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
			$('#login').click(function() {
				if ($('#email').val() != "" && $('#password').val() != "") {
					$.ajax({
						url: "login_form.php",
						data: {
							email: $('#email').val(),
							mdp: $('#password').val(),
							cookie: $('#remember').prop('checked')
						},
						type: "POST",
						success: function(data) {
							$('#verif').html(data);
							/*window.location.assign('admin.php')*/
						}
					});
				} else {
					$('#verif').html('ça a buggué déso');
				}
			});

		</script>
</body>

</html>
