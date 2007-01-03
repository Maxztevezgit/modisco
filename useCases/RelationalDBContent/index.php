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
	$pageTitle 		= "MoDisco Use Case - Relational Database Content";
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> Use Case - Relational Database Content</h1>

		<a name="goals"></a>
		<img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
		<blockquote>
			<ul>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#documentation"><b>Documentation</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
			</ul>
		</blockquote>
    		    	
		<hr class="clearer" />

		<div id="container>
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>


		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>
		
		<p align="justify">
	    	This use case is about discovering information on database contents (i.e. tuples) from real databases stored into a DBMS. The objective is to express the database's contents as models that conform to a database's content metamodel. This use case is provided by <b><a href="http://www.inria.fr/recherche/equipes/atlas.en.html">INRIA ATLAS</a></b>. The overall approach is shown in the following figure:
    	</p>
	  	<p align="center">
	  		<img src="../resources/schemas/MoDisco_RelationalDBContent_UseCaseOverview.png"/>
	  		<br /><br />
			<b>"Relational Database Content" Use Case's Overview</b>
		</p>
		<p align="justify">
			The <a href="http://wiki.eclipse.org/index.php/MoDisco#Definitions">discoverer</a> is named <b>DBContentDiscoverer</b>. It retrieves, by using the JDBC Java API, the information concerning a database content from a specified database (stored into a DBMS such as MySQL) and injects these data into a model. This created model conforms to the <b>RelationalDBContent metamodel</b>.
	  		<br/><br/>
			We defined this metamodel, which has been designed for describing the database contents, by studying the SQL language and several database samples. This metamodel is available at the <a href="#download">Download section</a>.
			<br/><br/>
			We provide below a short excerpt, representing a tuple of the simple <i>Employees</i> table described <b><a href="../RelationalDBSchema/RelationalDBSchema.php#RelationalDBSchema_ModelExcerpt">here<a></b>, of a model (in Ecore format) created by using this discoverer:	
	  	</p>
	  	<p align="center">
	  		<img src="../resources/excerpts/RelationalDBContent_ModelExcerpt.png"/>
	  		<br /><br />
			<b>Excerpt (representing a tuple of the <i>Employees</i> table) of a model produced by the discoverer</b>
		</p>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases</a></h4>
		
		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a use case</h4></td>
		
		<td align="center">
		<a href="../RelationalDBSchema/">
			<img src="../resources/buttons/RelationalDBSchema_button_y.jpg"/>
		</a>
		</td>
		
		<td>
	    	This use case allows discovering information on the schema of databases. The models it produces may be used in complementarity with those produced by the <i>Relational Database Content</i> use case for performing complex operations (i.e. chains of transformations, weavings, etc).
    	</td>
    	
    	</tr>
    	<tr></tr>
    	</table>
		
		<br>
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a document</h4></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/RelationalDBContent/downloads/DBContentDiscoverer_Description.pdf">-->
			<img src="../resources/buttons/Description_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>DBContentDiscoverer Description</b>: General description of the discoverer, its architecture, its possible uses, the RelationalDBContent metamodel, etc.
			<br>Available soon...
		</td>		
		</tr>
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/RelationalDBContent/downloads/DBContentDiscoverer_InstallationUserGuide.pdf">-->
			<img src="../resources/buttons/InstallationUserGuide_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			<b>DBContentDiscoverer Installation & User Guide</b>: How to install and use the discoverer for building database content models from already existing databases.
			<br>Available soon... 
		</td>		
		</tr>
		
		</table>
		
		
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

		<table>
			<COLGROUP>
				<COL width="15%">
				<COL width="20%">
				<COL width="65%">
		<tr>
		<td ALIGN=center><h4>Choose a download</h4></td>

		<td align="center">
		<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#RelationalDBContent">
			<img src="../resources/buttons/Metamodel_button.jpg"/>
		</a>
		</td>
		<td>
			<b>DBContentDiscoverer metamodel</b> expressed in the Ecore format. It is also available <b><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#RelationalDBContent">here</a></b> in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format, or in the <a href="downloads/RelationalDBContent.png">PNG</a> and <a href="downloads/RelationalDBContent.vsd">Visio</a> formats.
		</td>		
		</tr>
		
		<tr>
		<td></td>

		<td align="center">
		<!--<a href="http://www.eclipse.org/downloads/download.php?file=/gmt/modisco/useCases/RelationalDBContent/downloads/DBContentDiscoverer_v1-0.zip">-->
			<img src="../resources/buttons/Discoverer_button.jpg"/>
		<!--</a>-->
		</td>
		<td>
			First version available soon...
		</td>		
		</tr>
		
		</table>



		</td>
		</tr>
		</table>
		</div>
	    
		<hr class="clearer" />
	</div>
	
	
	<!-- Right Part -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.mysql.com">MySQL Database Management System</a></li>
				<li>-------------------------------------</li>
				<li><a href="http://www.postgresql.org/">PostgreSQL Database Management System</a></li>
				<li>-------------------------------------</li>
				<li><a href="http://www.oracle.com">Oracle Database Management System</a></li>
			</ul>
		</div>

	</div>
	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>