<!docytpe html>
<html>
<head>
	<?php include 'slices/head.php' ?>
</head>
<body>
	<?php include 'slices/analytics.php' ?>
	<header class="text-center">
		<h1><a href="/"><i class="icon-tint"></i> Color Monster</a></h1>
	</header>

	<div id="main" class="container">
		<form id="color-form" class="text-center">
			<input type="text" id="color" class="input-xlarge text-center" name="color" placeholder="#EFEFEF">
		</form>

		<!-- EXAMPLES
		========================================================================== -->
		<div id="examples" class="row-fluid">
			<div class="page-header">
				<h2><i class="icon-beaker"></i> Examples</h2>
			</div>
			<div class="row-fluid">
				<div id="ex-buttons" class="span4 text-center">
					<a id="light-button" class="btn btn-large btn-block" href="#light-button-modal" data-toggle="modal"><i class="icon-magic"></i> Awesome</a>
					<a id="dark-button" class="btn btn-large btn-block" href="#dark-button-modal" data-toggle="modal"><i class="icon-fire"></i> Possum</a>
				</div>
				<div id="light-button-modal" class="modal hide fade">
					<div class="modal-header">
						<button type="button" class="close muted" data-dismiss="modal"><i class="icon-remove-sign"></i></button>
						<h3>Light Button</h3>
					</div>
					<div class="modal-body row-fluid">
<pre>color: #d8ffff;
border: 1px solid #0c4782;
background: #5893ce;
background: -moz-linear-gradient(top,  #5893ce 0%, #326da8 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5893ce), color-stop(100%, #326da8));
background: -webkit-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: -o-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: -ms-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: linear-gradient(to bottom, #5893ce 0%, #326da8 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5893ce', endColorstr='#326da8', GradientType=0);
</pre>
					</div>
				</div>

				<div id="dark-button-modal" class="modal hide fade">
					<div class="modal-header">
						<button type="button" class="close muted" data-dismiss="modal"><i class="icon-remove-sign"></i></button>
						<h3>Dark Button</h3>
					</div>
					<div class="modal-body row-fluid">
<pre>color: #d8ffff;
border: 1px solid #000002;
background: #5893ce;
background: -moz-linear-gradient(top,  #5893ce 0%, #326da8 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5893ce), color-stop(100%, #326da8));
background: -webkit-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: -o-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: -ms-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: linear-gradient(to bottom, #5893ce 0%, #326da8 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5893ce', endColorstr='#326da8', GradientType=0);
</pre>
					</div>
				</div>
			</div>
		</div>

		<!-- PERCENTAGE COLORS
		========================================================================== -->
		<div id="calculated-colors" class="row-fluid">
			<div class="page-header">
				<h2><i class="icon-bolt"></i> Calculated Colors</h2>
			</div>
			<div class="row-fluid text-center">
				<div id="darker" class="span6">
					<h3>Darker</h3>
					<div class="row-fluid">
						<div id="dark-25"  class="darker-box span4">
							<code>25%</code>
							<div class="percentage-box"></div>
							<pre>#002d68<br>rgb(0,45,104)</pre>
						</div>
						<div id="dark-15" class="darker-box span4">
							<code>15%</code>
							<div class="percentage-box"></div>
							<pre>#0c4782<br>rgb(12,71,130)</pre>
						</div>
						<div id="dark-5" class="darker-box span4">
							<code>5%</code>
							<div class="percentage-box"></div>
							<pre>#25609b<br>rgb(37,96,155)</pre>
						</div>
					</div>
					<div class="row-fluid">
						<div id="dark-65"  class="darker-box span4">
							<code>65%</code>
							<div class="percentage-box"></div>
							<pre>#000002<br>rgb(0,0,2)</pre>
						</div>
						<div id="dark-45" class="darker-box span4">
							<code>45%</code>
							<div class="percentage-box"></div>
							<pre>#000035<br>rgb(0,0,53)</pre>
						</div>
						<div id="dark-35" class="darker-box span4">
							<code>35%</code>
							<div class="percentage-box"></div>
							<pre>#00144f<br>rgb(0,20,79)</pre>
						</div>
					</div>
				</div>
				<div id="lighter" class="span6">
					<h3>Lighter</h3>
					<div class="row-fluid">
						<div id="light-5" class="lighter-box span4">
							<code>5%</code>
							<div class="percentage-box"></div>
							<pre>#3f7ab5<br>rgb(63,122,181)</pre>
						</div>
						<div id="light-15" class="lighter-box span4">
							<code>15%</code>
							<div class="percentage-box"></div>
							<pre>#5893ce<br>rgb(88,147,206)</pre>
						</div>
						<div id="light-25" class="lighter-box span4">
							<code>25%</code>
							<div class="percentage-box"></div>
							<pre>#72ade8<br>rgb(114,173,232)</pre>
						</div>
					</div>
					<div class="row-fluid">
						<div id="light-35" class="lighter-box span4">
							<code>35%</code>
							<div class="percentage-box"></div>
							<pre>#8bc6ff<br>rgb(139,198,255)</pre>
						</div>
						<div id="light-45" class="lighter-box span4">
							<code>45%</code>
							<div class="percentage-box"></div>
							<pre>#a5e0ff<br>rgb(165,224,255)</pre>
						</div>
						<div id="light-65" class="lighter-box span4">
							<code>65%</code>
							<div class="percentage-box"></div>
							<pre>#d8ffff<br>rgb(216,255,255)</pre>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- GRADIENTS
		========================================================================== -->
		<div id="gradients" class="row-fluid">
			<div class="page-header">
				<h2><i class="icon-adjust"></i> Gradients</h2>
			</div>
			<div id="gradient-creation" class="row-fluid">
				<div class="span4">
					<h4>First Gradient <small>(top)</small></h4>
					<div id="gradient-first" class="btn-group" data-toggle="buttons-radio">
						<button type="button" class="btn">Base</button>
						<h5>Light</h5>
							<button type="button" class="btn" value="5">5%</button>
							<button type="button" class="btn active" value="15">15%</button>
							<button type="button" class="btn" value="25">25%</button>
							<button type="button" class="btn" value="35">35%</button>
							<button type="button" class="btn" value="45">45%</button>
							<button type="button" class="btn" value="65">65%</button>
						<h5>Dark</h5>
							<button type="button" class="btn" value="-5">5%</button>
							<button type="button" class="btn" value="-15">15%</button>
							<button type="button" class="btn" value="-25">25%</button>
							<button type="button" class="btn" value="-35">35%</button>
							<button type="button" class="btn" value="-45">45%</button>
							<button type="button" class="btn" value="-65">65%</button>
					</div>
				</div>
				<div class="span4">
					<h4>Second Gradient <small>(bottom)</small></h4>
					<div id="gradient-second" class="btn-group" data-toggle="buttons-radio">
						<button type="button" class="btn active">Base</button>
						<h5>Light</h5>
							<button type="button" class="btn" value="5">5%</button>
							<button type="button" class="btn" value="15">15%</button>
							<button type="button" class="btn" value="25">25%</button>
							<button type="button" class="btn" value="35">35%</button>
							<button type="button" class="btn" value="45">45%</button>
							<button type="button" class="btn" value="65">65%</button>
						<h5>Dark</h5>
							<button type="button" class="btn" value="-5">5%</button>
							<button type="button" class="btn" value="-15">15%</button>
							<button type="button" class="btn" value="-25">25%</button>
							<button type="button" class="btn" value="-35">35%</button>
							<button type="button" class="btn" value="-45">45%</button>
							<button type="button" class="btn" value="-65">65%</button>
					</div>
				</div>
				<!-- <div id="gradient-options" class="span4">
					<h4>Options</h4>
					<div class="btn-group" data-toggle="buttons-checkbox">
						<button type="button" class="btn active">Bordered</button>
						<button type="button" class="btn active">Light Text</button>
						<button type="button" class="btn">Dark Text</button>
					</div> -->
					<!-- <div class="btn-group" data-toggle="buttons-radio">
						<button type="button" class="btn active">Text Shadow</button>
						<button type="button" class="btn">Inset Text Shadow</button>
					</div> -->
				<!-- </div> -->
			</div>
			<div class="row-fluid">
					<div class="span9">
<pre>color: #d8ffff;
border: 1px solid #0c4782;
background: #5893ce;
background: -moz-linear-gradient(top,  #5893ce 0%, #326da8 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5893ce), color-stop(100%, #326da8));
background: -webkit-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: -o-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: -ms-linear-gradient(top, #5893ce 0%, #326da8 100%);
background: linear-gradient(to bottom, #5893ce 0%, #326da8 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5893ce', endColorstr='#326da8', GradientType=0);
</pre>
				</div>
				<div id="gradient-example"class="span3">
					<p id="gradient-text" class="text-center">
						<i class="icon-heart"></i> <span>Colors</span>
					</p>
				</div>
			</div>
		</div>

		<!-- THE SCIENCE
		========================================================================== -->
		<div id="science" class="row-fluid">
			<div class="page-header">
				<h2><i class="icon-lightbulb"></i> The Science <small>math and calculations and nerd stuff</small></h2>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<h4>Background Color</h4>
					<p>Choose wisely.</p>
				</div>
				<div class="span3">
					<h4>Gradients</h4>
					<p class="text-info">The first and second colors of a gradient work best <strong>3 to 5 shades</strong> away from each other.</p>
					<p>Subtle with a good pop from <code>15%</code> lighter to the <code>base</code> color.</p>
					<p>Borders look good on gradients when they are <code>15%</code> darker.
					<p><strong>Tip:</strong> The colors of a gradient should be <code>15%</code> apart.</p>
				</div>
				<div class="span3">
					<h4>Text Color</h4>
					<p class="text-info">Text color should be at least <strong>6 shades lighter</strong> than the base color.</p>
					<p>Text should never be pure white on a colored background. It pops too much and is jarring.</p>
					<p>To create a more subtle lighter text color, use <code>65%</code> lighter.</p>
					<p><strong>Icons:</strong> 5 shades darker is great.</p>
				</div>
				<div class="span3">
					<h4>Shadows</h4>
					<p>Like text shouldn't be pure white, text shadows shouldn't be pure black.</p>
					<p>Text shadows work well at <code>65%</code> darker.</p>
					<p>Inset text shadows work best at <code>45%</code> darker so that they are subltle.</p>
				</div>
			</diV>
		</div>

		<!-- FUTURE
			========================================================================== -->
		<div id="future" class="row-fluid">
			<div class="page-header">
				<h2><i class="icon-heart"></i> The Future</h2>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>Add hover colors (reversed gradient).</li>
						<li>Add calculated complementary colors.</li>
						<li>Add more options for generating gradients.</li>
						<li>Add easier to copy code.</li>
						<li>Add buttons to generate full color schemes.</li>
					</ul>
				</div>
			</div>
		</div>

	</div><!-- /main -->

	<!-- FOOTER
	========================================================================== -->
	<footer class="container">
		<div class="row-fluid well">
			<div class="span6">
				<h3><i class="icon-glass"></i> What is Color Monster?</h3>
				<p>We are a team that is admittedly a bit OCD over a lot of things.</p>
				<p>We like things that are calculated exactly (we use a lot of golden ratio in our sites), and there is a mathematical way to make colors work together.</p>
				<p>Usually you just get a color picker and click away to your heart's desire. Color Monster is a way to make beautiful and calculated color schemes.</p>
			</div>
			<div class="span6">

			</div>

		</div>
		<div id="copyright" class="text-center">
			<small>a project by <a href="http://scotch.io">scotch.io</a></small>
		</div>
	</footer>

</body>
</html>