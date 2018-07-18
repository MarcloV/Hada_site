<!doctype html>

<html>

<?php include "header.php"?>
<script type="text/javascript">

$(document).ready(function () {
	$("#sub").click(function () {

		var user_email = $("#email").val();
		var user_pass = $("#password").val();
		var user_confirm_pass = $("#confirm_password").val();

		if(user_pass != user_confirm_pass) {
			$("#result").html('password not matching, try again');
			return;
		}

		$.ajax({
			url: 'signin_code.php',
			data: { email: user_email, pass: user_pass },
			type: 'POST',
			success: function (data) {
				var json = $.parseJSON(data);
				
				if(json.success) {
					$('.modal-close').click(function(){
						window.location.assign("index.php");
					});
				}

				$('#signup-result').text(json.message);
				$('#modal-signup').modal();
				$('#modal-signup').modal('open');
			}
		});

	});
});

	function confirmPass() {
		var pass = document.getElementById('password').value;
		var cpass = document.getElementById('confirm_password').value;

		return cpass == pass;
	}
</script>

<body>

	<div class="container cont100 signin">
		<div class="row">
			<div class="col s12 m6 offset-m3">
				<div class="row">
					<div class="card card-form">
						<div class="row">
							<form class="col s12" action="" method="" onsubmit="return false">

								<div class="row">
									<div class="input-field col s12">
										<input id="email" type="email" class="validate">
										<label for="email">Email</label>
									</div>

									<div class="input-field col s12">
										<input id="password" type="password" class="validate">
										<label for="password">Mot de passe</label>
									</div>

									<div class="input-field col s12">
										<input id="confirm_password" type="password" class="validate">
										<label for="confirm_password">Confirmer le mot de passe</label>
									</div>

									<div class="col s12">

										<button type="submit" name="sub" id="sub" class="waves-effect waves-light btn">S'inscrire</button>
									</div>
								</div>

							</form>
							<div id="result"></div>
							<div id="modal-signup" class="modal">
								<div class="modal-content">
									<h4>Inscription</h4>
									<p id="signup-result"></p>
								</div>
								<div class="modal-footer">
									<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "footer.php"?>
</body>

</html>