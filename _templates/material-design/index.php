<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$primary = 2;
	include('header.php');
?>

<div id="main" role="document">

	<section class="container-fluid">
		<h2>Normal Buttons</h2>
		<div class="col-3">
			<button class="default">Button</button>
		</div>

		<div class="col-3">
			<button class="colored">Colored</button>
		</div>

		<div class="col-3">
			<button class="disabled">Disabled</button>
		</div>

		<div class="col-3">
			<a href="#" class="cta">Link</a>
		</div>


		<h2>Flat Buttons</h2>
		<div class="col-3">
			<button class="default">Button</button>
		</div>

		<div class="col-3">
			<button class="colored">Colored</button>
		</div>

		<div class="col-3">
			<button class="disabled">Disabled</button>
		</div>

		<div class="col-3">
			<a href="#" class="cta">Link</a>
		</div>


		<h2>Raised Buttons</h2>
		<div class="col-3">
			<button class="default shadow-z1">Button</button>
		</div>

		<div class="col-3">
			<button class="colored shadow-z1">Colored</button>
		</div>

		<div class="col-3">
			<button class="disabled shadow-z1">Disabled</button>
		</div>

		<div class="col-3">
			<a href="#" class="cta shadow-z1">Link</a>
		</div>
	</section>
</div>

<?php include('footer.php'); ?>

