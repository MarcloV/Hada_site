<!doctype html>

<html>
<?php
session_start();

?>
<?php include "header.php"?>

<body>

	<?php include "nav.php"?>



	<div class="row">
		<div class="col m3 #f5f5f5 grey lighten-4 card">
			<div class="row">
				<div class="col m12 center-align">
					<h6>PHOTO CHAT</h6>
					<img src="img/photo_chat.jpg" alt="" class="circle responsive-img">
				</div>
				<div class="row">
					<div class="col m6">
						<img src="img/photo_chat.jpg" alt="" class="responsive-img">
					</div>
					<div class="col m6">
						<img src="img/photo_chat.jpg" alt="" class="responsive-img"> </div>
				</div>
				<div class="row">
					<div class="col m6">
						<img src="img/photo_chat.jpg" alt="" class="responsive-img">
					</div>
					<div class="col m6">
						<img src="img/photo_chat.jpg" alt="" class="responsive-img"> </div>
				</div>
				<div class="row">
					<div class="col m6">
						<img src="img/photo_chat.jpg" alt="" class="responsive-img">
					</div>
					<div class="col m6">
						<img src="img/photo_chat.jpg" alt="" class="responsive-img"> </div>
				</div>
			</div>
		</div>

		<div class="col m9">
			<div class="card cont-resume">
				<div class="row center-align">
					<h5 id="h5-resume">RESUME</h5>
					<ul id="tabs-swipe-demo" class="tabs #f5f5f5 grey lighten-4">
						<li class="tab col s3"><a href="#test-swipe-1">CHAT 1</a></li>
						<li class="tab col s3"><a class="active" href="#test-swipe-2">CHAT 2</a></li>
						<li class="tab col s3"><a href="#test-swipe-3">CHAT 3</a></li>
					</ul>
				</div>

				<div class="row">
					<div class="col m12 #f5f5f5 grey lighten-4">
						<div class="divider"></div>
						<div class="section color-vert">
							<h5>Section 1</h5>
							<p>Stuff</p>
						</div>
						<div class="divider" id="ligne"></div>
						<div class="section color-vert">
							<h5>Section 2</h5>
							<p>Stuff</p>
						</div>
						<div class="divider" id="ligne"></div>
						<div class="section color-vert">
							<h5>Section 3</h5>
							<p>Stuff</p>
						</div>
						<div class="divider" id="ligne"></div>
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
							<div class="col m2"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include "footer.php"?>
</body>

</html>
