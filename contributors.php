<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-05
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "MoDisco Contributors";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<a name="goals"></a>
		<img align="right" src="resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
    	<p align="justify">
    		The MoDisco component is initiated by the <a href="http://www.inria.fr/recherche/equipes/atlas.fr.html">ATLAS team</a>, <a href="http://www.inria.fr">INRIA</a>.
		</p>
    	<p align="justify">
	    	Here is the current list of committers, contributors and interested parties. This list will be regularly updated.
    	</p>
		<hr class="clearer" />

	    	<div class="homeitem">
				<h3>List of contributors</h3>
	    	<ul class="midlist">
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
					    		<a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a>
		  					</td>
							<td align="right">
								<a href="http://www.inria.fr/recherche/equipes/atlas.en.html"><img align="right" src="http://www.sciences.univ-nantes.fr/lina/atl/inria.png" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
				    			<a href="http://www.sciences.univ-nantes.fr/lina/atl/">University of Nantes</a>
		  					</td>
							<td align="right">
								<a href="http://www.sciences.univ-nantes.fr/lina/atl/"><img align="right" src="http://www.sciences.univ-nantes.fr/lina/atl/univ-nantes.jpg" height="55" /></a>
							</td>
						</tr>
					</table>
    			</li>
	    		<li>
	    			<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
	    			    		<a href="http://www.mia-software.com">MIA Software</a>
		  					</td>
							<td align="right">
								<a href="http://www.mia-software.com"><img align="right" src="http://www.mia-software.com/img/logo.png" height="55" /></a>
							</td>
						</tr>
					</table>
	    		</li>
	    	</ul>
		</div>
		<hr class="clearer" />
	</div>

	</div>

	<div id="rightcolumn">

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
