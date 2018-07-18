<!doctype html>

<html>

<?php include "header.php"?>
<script type="text/javascript">

	function confirmPass(){
		var  pass=document.getElementById('password').value;
		var cpass=document.getElementById('confirm_password').value;
		if(cpass !=pass){

document.getElementById("result").innerHTML= "password not matching, try again";

			}
	else {
		$(document).ready(function(){

			$("#sub").click(function(){

				var user_email =$("#email").val();
				var user_pass =$("#password").val();

				$.ajax({
					url:'signin_code.php',
					data:{email:user_email,pass:user_pass},
					type:'POST',
					success: function(data){
    $("#result").html(data);
window.location = 'http://localhost/hada/Hada_site-branchpm/admin.php'
					}
				});

			});
		});

		}
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

										<button type="submit" name="sub" id="sub" onclick="confirmPass()" class="waves-effect waves-light btn" >S'inscrire</button>
									</div>
								</div>

							</form>
							<div id="result"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "footer.php"?>
</body>

</html>
