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
	$pageTitle 		= "MoDisco Documentation";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="50%">
					<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Documentation</h1>
				</td>
				<td align="right">
					<img alt="MoDisco Logo" src="../resources/logoMoDiscoSmall.jpg" valign="top" />
				</td>
			</tr>
		</table>

		<h3>Documentation</h3
		<p>
          <ul class="midlist">
          	<li>
		      <b><a href="MoDisco_Flyer-Poster_1.0.pdf">MoDisco Flyer-Poster</a></b>: A new flyer-poster describing the MoDisco project.
			</li>
			<br>
            <li>
		      <b><a href="MoDisco_Proposal_1.0.pdf">MoDisco Proposal</a></b>: Official (and accepted) proposal for the MoDisco project.
			</li>
			<br>
			<li>
		      <b><a href="MoDisco_Overview_1.0.pdf">MoDisco Overview (initial slides)</a></b>: Overall presentation of the MoDisco project.
			</li>
			<br>
			<li>
		      <b><a href="MoDisco-ESE2009-Symposium/demo.htm">MoDisco ESE-2009 Symposium (screencast)</a></b>: MoDisco presentation at Eclipse Summit Europe 2009 (<a href="http://www.eclipsecon.org/summiteurope2009/sessions?id=886">session page</a>).
			</li>
		  </ul>
		</p>
		
      	<hr class="clearer" />
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
