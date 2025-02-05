<!-- Copyright <?php echo date('Y'); ?> © Cogian Sergiu -->
<!DOCTYPE html>
<html>
	<head>
		<script src="./source/js/jquery.js"></script>
		<script src="./source/js/login.js?<?php echo time(); ?>"></script>
		<link rel="stylesheet" href="./source/css/structure.css?<?php echo time(); ?>">
		<link rel="stylesheet" href="./source/css/<?php echo $theme; ?>.css?<?php echo time(); ?>" class="theme-stylesheet">
		<link rel="stylesheet" href="./source/css/resize.css?<?php echo time(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="theme-color" content="<?php echo $theme_color; ?>">
		<title>X:/Notes</title>
	</head>
	
	<body id="<?php echo $device; ?>">
		<div class="login-page-overlay"></div>
		<div class="login-wrapper">
			<div class="login-remember-wrapper noselect button <?php echo $remember_me; ?>">
				<span class="login-remember-text">Ține-mă minte</span>
			</div>
			<div class="login-container">
				<div class="login-form-wrapper">
					<input class="login-input-field username" type="text" placeholder="Utilizator">
					<input class="login-input-field password" type="password" placeholder="Parolă">
				</div>
				<button class="login-button">Conectare</button>
			</div>
		</div>
		<div class="placeholder-page">
			<div class="column sidebar-wrapper noselect">
				<div class="sidebar-top">
					<div class="sidebar-icon-wrapper">
						<?php echo $compose_icon; ?>
					</div>
				</div>
				<div class="sidebar-middle">
					<div class="sidebar-icon-wrapper active">
						<?php echo $note_icon; ?>
					</div>
					<div class="sidebar-icon-wrapper">
						<?php echo $locked_icon; ?>
					</div>
					<div class="sidebar-icon-wrapper">
						<?php echo $globe_icon; ?>
					</div>
				</div>
				<div class="sidebar-bottom">
					<div class="sidebar-icon-wrapper">
						<?php echo $help_icon; ?>
					</div>
					<div class="sidebar-icon-wrapper">
						<?php echo $settings_icon; ?>
					</div>
					<div class="sidebar-icon-wrapper">
						<?php echo $logout_icon; ?>
					</div>
				</div>
			</div>
			<div class="column notes-wrapper noselect">
				<div class="notes-list-wrapper">
					<div class="notes-list"></div>
					<div class="notes-list-padding"></div>
				</div>
				<?php if($search_box == "visible") { ?>
					<div class="column-navbar search-wrapper">
						<input class="search-bar" type="text" placeholder="Căutare..." name="search" autocomplete="off">
					</div>
				<?php } ?>
			</div>
			<div class="column editor-wrapper">
				<div class="editor-container">
					<div class="editor-content editor-empty"></div>
				</div>
			</div>
		</div>
		<div class="notification-area"></div>
	</body>
</html>
