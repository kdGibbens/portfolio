<?php include('inc/header.php'); ?>
	
	<div class="jumbotron jumbo-logo animation-logo" id="home">
		<div class='logo text-center'>
			<h1>Kelly D. Gibbens</h1>
			<h2 class="animation-triangle">∆</h2>
			<h1>Web Developer</h3>
		</div>

		<div class='scroll-arrow'>
			<a href="#about_me"><h3>Scroll Down</h3>
			<span class="glyphicon glyphicon-download" aria-hidden="true"></span></a>
		</div>
	</div>
<div class="about" id="about_me">
<div class='row'>
		<h2 class="text-center">Who is Kelly Gibbens?</h2>
	
		<div class="jumbo-picture col-sm-6 col-md-4 hidden-xs">
			<img src="img/kelly.png" alt="Kelly D Gibbens" class="col-sm-12 img-responsive">
		</div>
		
		<div class="jumbotron jumbo-about col-sm-6 col-md-4">
			<div class="container">
				<h2 class="text-center">Hello!</h2>
				<p>My name is Kelly and I'm a front-end web developer and designer from Kansas. What does a web developer do? Well, I help build this wonderful place we call the internet. Besides the web I'm a pop culture junkie, and enjoy a mean cup of joe.</p>
			</div>
		</div>
	
	<div class="jumbo-social col-sm-12 col-md-4 text-center">
		<h2>Connect with me on Social Media</h2>
		<div class="row">
			<a href="https://www.linkedin.com/pub/kelly-gibbens/39/7a0/98" target="__blank"><i class="fa fa-linkedin fa-5x"></i></a>
			<a href="https://github.com/kdGibbens" target="_blank"><i class="fa fa-github-square fa-5x"></i></a>
			<a href="https://twitter.com/gibbens" target="_blank"><i class="fa fa-twitter fa-5x"></i>	</a>
		</div>
		<h2><a href="#">Take a look at my resume</a></h2>
	</div>
</div>
</div>

	<div class="jumbo-portfolio" id="work">
		<h2 class="text-center">View some of my work</h2>
			<div class="row">
				
				<div class="site col-sm-4">
					<a href="http://denafineart.com" target="_blank"><img src="img/dena.png" alt="Dena Fine Art" class="img-thumbnail img-responsive"></a>
				</div>
				<div class="site col-sm-4">
					<a href="http://missionpawn.com" target="_blank"><img src="img/mission-pawn.png" alt="Mission Pawn"class="img-thumbnail img-responsive"></a>
				</div>
				<div class="site col-sm-4">
					<a href="http://students.jccc.edu/kgibben2/dena" target="_blank"><img src="img/scroll-magic.png" alt="Scroll Magic Example" class="img-thumbnail img-responsive"></a>
				</div>
			</div>
		</div>
	</div>



	<div class="jumbotron" id="contact">
		<div class="container">
			<?php include('inc/form.php'); ?>
		</div>
		<div class="scroll-up text-center">
			<a href="#home">
				<h2>Scroll Up!</h2>
				<i class="fa fa-arrow-circle-o-up"></i>
			</a>
	</div>



<?php include('inc/footer.php'); ?>