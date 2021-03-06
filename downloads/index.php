<?php
/*******************************************************************************
 * Copyright (c) 2009, 2014 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Gr?goire Dup? (Mia-Software)
 *	  Hugo Bruneliere (Inria)
 *******************************************************************************/

	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, modeling, emf, modisco, reverse engineering, modernization, mde";
	$pageAuthor		= "Gregoire Dupe, Hugo Bruneliere";
	$pageTitle 		= "Download";
	
$html="";

$drops="modeling/mdt/modisco/downloads/drops";
$download_rootdir="/home/data2/httpd/download.eclipse.org/$drops/";
$archive_rootdir="/home/data2/httpd/archive.eclipse.org/$drops/";
$http_prefix="http://www.eclipse.org/downloads/download.php?file=/";

function browse($rootdir){
	$version_dirs = scandir($rootdir);
	$arr=array();
	for ($i = 2 ; $i < count($version_dirs) ; $i++){
	    $version = $version_dirs[$i];
	    $qualifiers_dirs = scandir("$rootdir/$version");
	    for ($j = 2 ; $j < count($qualifiers_dirs) ; $j++){
	      $qualifier = $qualifiers_dirs[$j];
	      $files = scandir("$rootdir/$version/$qualifier");
	      for ($k = 2 ; $k < count($files) ; $k++){
	          $xxx = $files[$k];
	          $filepath = "$rootdir/$version/$qualifier/$xxx";
	          if (substr($xxx, -strlen(".zip")) === ".zip"){
		          if (!file_exists($filepath.".hidden")){
		              $arr[]=array(
		                 "path" => "$version/$qualifier/$xxx",
		                 "shortname" => $xxx,
		                 "qualifier" => $qualifier,
		                 "filepath" => $filepath
		              );
		          }
	          }
	      }
	    }
	}
	return $arr;
}

function print_li($http_prefix,$drops,$result,$i){
    $html ="";
    $href="$http_prefix/$drops/".$result[$i]["path"];
    $txt=$result[$i]["shortname"];
    $html.="<li><a href='$href'>$txt</a></li>";
    return $html;
}

function cmp($a, $b){
  $result = 0;
  
  $regex = "/.*?(\d+\.\d+\.\d+).*?(\d+|)\.zip/";
  
  preg_match($regex, $a["shortname"], $matches);
  $version_a = $matches[1];
  $qualifier_a = intval($matches[2]);

  preg_match($regex, $b["shortname"], $matches);
  $version_b = $matches[1];
  $qualifier_b = intval($matches[2]);

  $version_compare = version_compare($version_a, $version_b);
  if ($version_compare === 0) {
    if ($qualifier_a == $qualifier_b) {
      $result = 0;
    } elseif ($qualifier_a > $qualifier_b) {
      $result = -1;
    } else {
      $result = 1;
    }
  } else {
    $result = $version_compare;
  }
  return -$result;
}

$download_result = browse($download_rootdir);
$archive_result = browse($archive_rootdir);
$merged= array_merge($download_result, $archive_result);
$result = array();
foreach ($merged as $current) {
    if (!in_array($current, $result)) {
        $result[] = $current;
    }
}
usort($result, "cmp");

$html="<h1>Releases</h1>";
$html.="<ul>";
for ($i = 0; $i < count($result) ; $i++){
    $qualifier = $result[$i]["qualifier"];
    if (strpos($qualifier, "R") === 0){
        $html.=print_li($http_prefix,$drops,$result,$i);
    }
}
$html.="</ul>";
$html.="<h1>Stable builds</h1>";
$html.="<ul>";
for ($i = 0; $i < count($result) ; $i++){
    $qualifier = $result[$i]["qualifier"];
    if (strpos($qualifier, "S") === 0){
        $html.=print_li($http_prefix,$drops,$result,$i);
    }
}
$html.="</ul>";



$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
