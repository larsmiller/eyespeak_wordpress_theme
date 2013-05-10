<style type="text/css">
	.accent-bg,
	.dropdown-menu,
	.btn-primary,
	.btn,
	.gform_button,
	.navbar .btn-navbar,
	input[type="button"],
	input[type="reset"],
	input[type="submit"],
	#service-areas-in,
	.explore-menu {
		background-color: <?php echo $accent_color; ?>;
	}	
	.accent-color,
	a,
	a:hover,
	a:focus,
	code,
	.dropdown-menu > li > a:hover,
	.dropdown-menu > li > a:focus,
	.dropdown-submenu:hover > a,
	.dropdown-submenu:focus > a,
	.dropdown-menu > .active > a,
	.dropdown-menu > .active > a:hover,
	.dropdown-menu > .active > a:focus,
	#secondary a:hover {
		color: <?php echo $accent_color; ?>;
	}
	textarea:focus,
	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="datetime"]:focus,
	input[type="datetime-local"]:focus,
	input[type="date"]:focus,
	input[type="month"]:focus,
	input[type="time"]:focus,
	input[type="week"]:focus,
	input[type="number"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="color"]:focus,
	.uneditable-input:focus {
		border-color: <?php echo $accent_color; ?>;
		-webkit-box-shadow: inset 0 1px 1px <?php echo $accent_color; ?>, 0 0 8px <?php echo $accent_color; ?>;
		-moz-box-shadow: inset 0 1px 1px <?php echo $accent_color; ?>, 0 0 8px <?php echo $accent_color; ?>;
		box-shadow: inset 0 1px 1px <?php echo $accent_color; ?>, 0 0 8px <?php echo $accent_color; ?>;
	}
	.navbar .nav > .active > a,
	.navbar .nav > .active > a:hover,
	.navbar .nav > .active > a:focus {
		border-bottom: 4px solid <?php echo $accent_color; ?>;
	}
	*::selection {
		background: <?php echo $accent_color; ?>;
		color: #ffffff;
	}
	*::-moz-selection {
		background: <?php echo $accent_color; ?>;
		color: #ffffff;
	}
	#main-menu a:hover,
	#main-menu a.active {
		border-bottom: 2px solid <?php echo $accent_color; ?>;
		text-decoration: none;
	}
</style>