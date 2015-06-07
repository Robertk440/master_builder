<?php
	set_include_path($_SERVER['DOCUMENT_ROOT'] . '/includes');
	$primary = 2;
	include('header.php');
?>

<div id="main" role="document">

	<section class="container-fluid">
		<h2>Buttons</h2>

		<h3>Normal Buttons</h3>

		<div class="wrap">
			<div class="col-3">
				<button class="btn default">Button</button>
			</div>

			<div class="col-3">
				<button class="btn colored">Colored</button>
			</div>

			<div class="col-3">
				<button class="btn disabled">Disabled</button>
			</div>

			<div class="col-3">
				<a href="#" class="cta">Link</a>
			</div>
		</div>


		<h3>Flat Buttons</h3>
		<div class="wrap">
			<div class="col-3">
				<button class="btn flat default">Button</button>
			</div>

			<div class="col-3">
				<button class="btn flat colored">Colored</button>
			</div>

			<div class="col-3">
				<button class="btn flat disabled">Disabled</button>
			</div>

			<div class="col-3">
				<a href="#" class="flat cta">Link</a>
			</div>
		</div>


		<h3>Raised Buttons</h3>
		<div class="wrap">
			<div class="col-3">
				<button class="btn default raised">Button</button>
			</div>

			<div class="col-3">
				<button class="btn colored raised">Colored</button>
			</div>

			<div class="col-3">
				<button class="btn disabled raised">Disabled</button>
			</div>

			<div class="col-3">
				<a href="#" class="cta raised">Link</a>
			</div>
		</div>

		<h3>Action Buttons</h3>
		<div class="wrap">
			<div class="col-3">
				<button class="menu action material-menu">
					<span class="line top"></span>
					<span class="line mid"></span>
					<span class="line bot"></span>
				</button>
			</div>
		</div>
	</section>

	<hr/>

	<section class="container-fluid">
		<h2>Cards and Shadows</h2>

		<div class="wrap">
			<div class="col-4">
				<div class="card shadow-z0">
					<h3>Shadow 0</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus nisl arcu, a finibus erat rutrum id. Phasellus pretium pharetra sem at facilisis. Mauris interdum vestibulum faucibus. Sed non arcu nisl. </p>
				</div>
			</div>

			<div class="col-4">
				<div class="card shadow-z1">
					<h3>Shadow 1</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus nisl arcu, a finibus erat rutrum id. Phasellus pretium pharetra sem at facilisis. Mauris interdum vestibulum faucibus. Sed non arcu nisl. </p>
				</div>
			</div>

			<div class="col-4">
				<div class="card shadow-z2">
					<h3>Shadow 2</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus nisl arcu, a finibus erat rutrum id. Phasellus pretium pharetra sem at facilisis. Mauris interdum vestibulum faucibus. Sed non arcu nisl. </p>
				</div>
			</div>

			<div class="col-4">
				<div class="card shadow-z3">
					<h3>Shadow 3</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus nisl arcu, a finibus erat rutrum id. Phasellus pretium pharetra sem at facilisis. Mauris interdum vestibulum faucibus. Sed non arcu nisl. </p>
				</div>
			</div>

			<div class="col-4">
				<div class="card shadow-z4">
					<h3>Shadow 4</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus nisl arcu, a finibus erat rutrum id. Phasellus pretium pharetra sem at facilisis. Mauris interdum vestibulum faucibus. Sed non arcu nisl. </p>
				</div>
			</div>

			<div class="col-4">
				<div class="card shadow-z5">
					<h3>Shadow 5</h3>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer maximus nisl arcu, a finibus erat rutrum id. Phasellus pretium pharetra sem at facilisis. Mauris interdum vestibulum faucibus. Sed non arcu nisl. </p>
				</div>
			</div>
		</div>
	</section>

	<hr/>

	<!-- <section class="container-fluid">
		<h2>Radio Buttons</h2>

		<h2>Toggle Buttons</h2>
	</section>

	<hr/>
 	-->

	<section class="container-fluid">
		<h2>Input</h2>

		<div class="wrap">
			<div class="col-6">
				<h3>Basic Placeholder</h3>
				<input type="text" placeholder="Label" />
			</div>

			<div class="col-6">
				<h3>Floating Placeholder</h3>
				<input class="floating-input" type="text" placeholder="Label" />
			</div>

			<div class="col-6">
				<h3>Hints</h3>
				<div class="floating hint">
					<input type="text" placeholder="Label" />
					<span class="hint">*Hint: Lorem ipsum dolor</span>
				</div>
			</div>

			<div class="col-6">
				<h3>Disabled Input</h3>
				<input type="text" placeholder="Label" disabled />
			</div>
		</div>
	</section>

	<hr/>

	<!-- <section class="container-fluid">
		<h2>Progress Bars</h2>

		<h3>Basic Progress Bar</h3>

		<div class="wrap">
			<progress value="75"></progress>
		</div>
	</section> -->
</div>

<?php include('footer.php'); ?>

