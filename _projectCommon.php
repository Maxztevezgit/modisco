<?php

	# set default theme
	$_theme = "Lazarus";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
	<STYLE TYPE="text/css">
	  .sideitem { border-width: 1px 1px; }
	  body { font-size: small; }
	  #midcolumn { margin-top: 5px; }
	</STYLE>

EOBRANDING;
	$Menu->setProjectBranding($branding);

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("GMT", "/gmt/");
	$Nav->addCustomNav("Download", "/gmt/download/", "_self", 1);
	$Nav->addCustomNav("Documentation", "/gmt/doc/", "_self", 1);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/GMT", "_self", 1);
	$Nav->addCustomNav("MoDisco", "/gmt/modisco/", "_self", 1);
	$Nav->addCustomNav("Roadmap", "/gmt/modisco/roadmap.php", "_self", 2);
	$Nav->addCustomNav("Use Cases", "/gmt/modisco/useCases.php", "_self", 2);
	$Nav->addCustomNav("Contributors", "/gmt/modisco/contributors.php", "_self", 2);
	$Nav->addCustomNav("Related Projects", "/gmt/modisco/relatedProjects.php", "_self", 2);
	$Nav->addCustomNav("Documentation", "/gmt/modisco/doc/", "_self", 2);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/MoDisco", "_self", 2);
	$Nav->addCustomNav("Newsgroup", "news://news.eclipse.org/eclipse.modeling.gmt.modisco", "_self", 2);
?>
