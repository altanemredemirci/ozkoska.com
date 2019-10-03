<?php 
include 'header.php'; 
include 'sidebar.php';

$ayarcek=$db->query("SELECT * from footer",PDO::FETCH_ASSOC);
foreach ($ayarcek as $yaz) {
	# code...
}
?>

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Dashboard</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Dashboard</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
</section> <br>

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Footer</h2>

		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="index.html">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Sayfalar</span></li>
				<li><span>Footer</span></li>
			</ol>

			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->
	<div class="row">
		<div class="col-md-12">
			<section class="panel">
				<header class="panel-heading">
					<div class="panel-actions">
						<a href="#" class="fa fa-caret-down"></a>
						<a href="#" class="fa fa-times"></a>
					</div>

					<h2 class="panel-title">Footer Ayarları</h2>
				</header>

				<div class="panel-body">
					<h4 class="panel-body">Adres- İletişim</h4>
					<form action="netting/islem.php" class="form-horizontal form-bordered" method="post">
						<div class="form-group">
							<label class="col-md-3 control-label" for="inputDefault">Adres</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="inputDefault" value="<?php echo $yaz['footer_adres']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Telefon</label>
							<div class="col-md-6">
								<input class="form-control" type="text" value="<?php echo $yaz['footer_telefon']; ?>">
							</div>
						</div>

					</div>

					<div class="panel-body">
						<h4 class="panel-body">Sosyal Medya</h4>

						<div class="form-group">
							<label class="col-md-3 control-label" for="inputDefault">Facebook</label>
							<div class="col-md-9">
								<input type="text" class="form-control" id="inputDefault" value="<?php echo $yaz['footer_facebook']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Twitter</label>
							<div class="col-md-9">
								<input class="form-control" type="text" value="<?php echo $yaz['footer_twitter']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Instagram</label>
							<div class="col-md-9">
								<input class="form-control" type="text" value="<?php echo $yaz['footer_instagram']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label">Footer</label>
							<div class="col-md-9">
								<input class="form-control" type="text" value="<?php echo $yaz['footer_footer']; ?>">
							</div>
						</div>

						<hr>
						<div class="col-md-12">
							<div class="form-group col-md-2 pull-right">
								<input class="form-control btn btn-success" type="submit" name="footerkaydet" value="Kaydet">
							</div>                            
						</div>
					</div>

				</form>
			</section>

		</div>
	</div>

	<!-- end: page -->
</section>


<aside id="sidebar-right" class="sidebar-right">
	<div class="nano">
		<div class="nano-content">
			<a href="#" class="mobile-close visible-xs">
				Collapse <i class="fa fa-chevron-right"></i>
			</a>
			
			<div class="sidebar-right-wrapper">

				<div class="sidebar-widget widget-calendar">
					<h6>Upcoming Tasks</h6>
					<div data-plugin-datepicker data-plugin-skin="dark" ></div>

					<ul>
						<li>
							<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
							<span>Company Meeting</span>
						</li>
					</ul>
				</div>

				<div class="sidebar-widget widget-friends">
					<h6>Friends</h6>
					<ul>
						<li class="status-online">
							<figure class="profile-picture">
								<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
							</figure>
							<div class="profile-info">
								<span class="name">Joseph Doe Junior</span>
								<span class="title">Hey, how are you?</span>
							</div>
						</li>
						<li class="status-online">
							<figure class="profile-picture">
								<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
							</figure>
							<div class="profile-info">
								<span class="name">Joseph Doe Junior</span>
								<span class="title">Hey, how are you?</span>
							</div>
						</li>
						<li class="status-offline">
							<figure class="profile-picture">
								<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
							</figure>
							<div class="profile-info">
								<span class="name">Joseph Doe Junior</span>
								<span class="title">Hey, how are you?</span>
							</div>
						</li>
						<li class="status-offline">
							<figure class="profile-picture">
								<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
							</figure>
							<div class="profile-info">
								<span class="name">Joseph Doe Junior</span>
								<span class="title">Hey, how are you?</span>
							</div>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</aside>
</section>

<!-- Vendor -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
<script src="assets/vendor/flot/jquery.flot.js"></script>
<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="assets/vendor/raphael/raphael.js"></script>
<script src="assets/vendor/morris/morris.js"></script>
<script src="assets/vendor/gauge/gauge.js"></script>
<script src="assets/vendor/snap-svg/snap.svg.js"></script>
<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets/javascripts/theme.init.js"></script>


<!-- Examples -->
<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>


</body>
</html>