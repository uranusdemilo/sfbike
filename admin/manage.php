<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
<style>
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Bike Managment Page</title>
	<link rel="shortcut icon" href="http://sfbikerescue.com/wp-content/themes/atahualpa/images/favicon/new-favicon.ico">
<!--<<script type="text/javascript" src="/sfbike/scripts/jquery_002.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/sfbike/scripts/sfbike.css">
<!--<script type="text/javascript">-->
<script>
var app = angular.module('forSaleApp',[]);
app.controller('forSaleController',function($scope, $http){
   $http.get("http://192.168.1.237/sfbike/scripts/getbikes.php?type=A")
      .then(function(response){$scope.bikes = response.data.bikes;});
   $scope.getType = function(Type){
      $http.get("http://192.168.1.237/sfbike/scripts/getbikes.php?type=" + Type)
      .then(function(response){$scope.bikes = response.data.bikes;});
      };
});
<?php
function createTabAction($num){
   print "$(document).ready(function(){\n";
   print "\t$('#editbutton" . $num . "').click(function(){\n";
   print "\t\t$('#panel" . $num . "').slideDown('slow');\n";
   print "\t});\n";
   print "});\n";
}

$fsconnect=mysqli_connect("localhost","dbagent","patches","sfbikerescue");
$getBikeQuery="select bikeid from bikesforsale";
$bikeresult = $fsconnect->query($getBikeQuery);
$bikeindex=array();
while($bikeInfo = $bikeresult->fetch_row()){
   #echo $bikeInfo[0] . "<br>";
   array_push($bikeindex,$bikeInfo[0]);
}
foreach($bikeindex as $bike){
   createTabAction($bike);
}
?>
</script>
<style type="text/css">
   .recentcomments a{
      display:inline !important;
      padding:0 !important;margin:0 !important;
   }
   
   .tableMember{
      font-family:helvetica;
      padding-left:10px;
      padding-right:10px;
   }
   img{
      border:none;
   }
   .panel{
      padding: 30px;
      display: none;
      text-align: left;
      background-color: #e5eecc;
      border: solid 1px #c3c3c3;
      width: 400px;
   }
</style>
</head>

<body class="home page page-id-4 page-template-default">
<div id="wrapper">
<div id="container">
<table id="layout" border="0" cellpadding="0" cellspacing="0">
<colgroup>
<col class="colone"><col class="coltwo">
<col class="colthree"></colgroup> 
	<tbody><tr>
		<!-- Header -->
		<td id="header" colspan="3">
		<table id="logoarea" border="0" cellpadding="0" cellspacing="0" width="100%">
			<tbody><tr><td rowspan="2" class="logoarea-logo" valign="middle"><a href="http://sfbikerescue.com/"><img class="logo" src="/sfbike/scripts/logo.png" alt="SF Bike Rescue"></a></td>
            <td rowspan="2" class="logoarea-title" valign="middle"><h2 class="blogtitle"><a href="http://sfbikerescue.com/">SF Bike Rescue</a></h2><p class="tagline"></p></td>   
	      </tbody>
      </table> 
		<div class="horbar1">&nbsp;</div>
		<div id="imagecontainer" class="header-image-container" style="background: url('http://sfbikerescue.com/wp-content/themes/atahualpa/images/header/bikeheader 3.jpg') top center no-repeat;">
		<div class="codeoverlay"></div><div class="opacityleft">&nbsp;</div>
		<div class="opacityright">&nbsp;</div></div>
		<div id="bfa_page_menu"><table style="margin: 0 auto" cellpadding="0" cellspacing="0">
			<tbody>
				<tr><td align="center">
					<div id="menu1" class="menu-main-menu-container">
					<ul id="rmenu2" class="clearfix rMenu-hor rMenu">
						<li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-4 current_page_item menu-item-6"><a href="http://sfbikerescue.com/"><span>Home</span></a></li>
						<li id="menu-item-36" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-36"><a href="http://sfbikerescue.com/category/rescues/"><span>Rescues</span></a></li>
						<li id="menu-item-59" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-59"><a href="http://sfbikerescue.com/category/bike-art/"><span>Bike Art</span></a></li>
						<li id="menu-item-70" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-70"><a href="http://sfbikerescue.com/category/bike-recovery-services/"><span>Bike Recovery Services</span></a></li>								<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"><a href="http://sfbikerescue.com/about-us/"><span>About Us</span></a></li>
						<li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="http://sfbikerescue.com/contact/"><span>Contact</span></a></li>
						<li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="http://sfbikerescue.com/blog/"><span>blog</span></a></li>
						<li id="menu-item-74" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-74"><a href="http://sfbikerescue.com/category/donations/"><span>Donations</span></a></li>
					</ul>
					</div>
				</td></tr>					</tbody></table></div> <div class="horbar2">&nbsp;</div>
			</td>
		<!-- / Header -->
		</tr>

	<!-- Main Body -->	
	<tr id="bodyrow">

				<!-- Left Sidebar -->
		<td id="left">

			<div id="pages-2" class="widget widget_pages"><div class="widget-title"><h3>Pages</h3></div>		<ul>
			<li class="page_item page-item-47"><a href="http://sfbikerescue.com/about-us/">About Us</a></li>
<li class="page_item page-item-32"><a href="http://sfbikerescue.com/blog/">blog</a></li>
<li class="page_item page-item-13"><a href="http://sfbikerescue.com/contact/">Contact</a></li>
<li class="page_item page-item-101"><a href="http://sfbikerescue.com/favorite-bike-builds/">Favorite Bike Builds</a></li>
<li class="page_item page-item-4 current_page_item"><a href="http://sfbikerescue.com/">Home</a></li>
		</ul>
		</div>		<div id="recent-posts-2" class="widget widget_recent_entries">		<div class="widget-title"><h3>Recent Posts</h3></div>		<ul>
					<li>
				<a href="http://sfbikerescue.com/bike-blenders/" title="Bike Blenders">Bike Blenders</a>
						</li>
					<li>
				<a href="http://sfbikerescue.com/things-built-using-bikes/" title="Things Built Using Bikes">Things Built Using Bikes</a>
						</li>
					<li>
				<a href="http://sfbikerescue.com/bikes-i-miss-already/" title="Bikes I Miss Already">Bikes I Miss Already</a>
						</li>
					<li>
				<a href="http://sfbikerescue.com/donations/" title="Donations">Donations</a>
						</li>
					<li>
				<a href="http://sfbikerescue.com/stolen-bikes-in-sf/" title="Stolen Bikes in SF">Stolen Bikes in SF</a>
						</li>
				</ul>
<!--		</div><div id="recent-comments-2" class="widget widget_recent_comments"><div class="widget-title"><h3>Recent Comments</h3></div><ul id="recentcomments"></ul></div><div id="ngg-mrssw-2" class="widget ngg_mrssw"><div class="widget-title"><h3>Media RSS</h3></div><ul class="ngg-media-rss-widget">-->
  
</ul>
</div>
		</td>
		<!-- / Left Sidebar -->
		
				

		<!-- Main Column -->
		<td id="middle">	
			<div class="post-4 page type-page status-publish hentry post odd" id="post-4">
			<div class="post-headline"><h1>Manage Bikes for Sale</h1></div>
         <div><a href="newbike.html"><h3 style="display:inline-block;padding-right:10px">New Item</h3><img src="icons/newitem.jpg"></a></div>
<!--CONTENT BODY-->
<div ng-app="forSaleApp" ng-controller="forSaleController">
<table ng-repeat="bike in bikes">
   <tr><td style="width:250px;">
      <table>
         <tr><td class='tableMember'>{{ bike.bikenum }}</td></tr>
         <tr><td class='tableMember'>{{ bike.biketitle }}</td></tr>
         <tr><td class='tableMember'>${{ bike.bikeprice }}</td></tr>
         <tr><td>
            <img src="icons/editbutton.jpg" id="{{ 'editbutton' + bike.bikenum }}">
            <img src="icons/nukebutton.jpg" id="{{ 'nukebutton' + bike.bikenum }}">
         </td></tr>
         </table>
      <td>
      <img src ="{{'/sfbike/images/bike-' + bike.bikenum + '-0.jpg'}}" height="120"></td>
      <tr><td colspan="2">
         <div class="panel" id="{{'panel' + bike.bikenum}}">Hi</div>
      </tr></td>
   </tr></td>
</table>
</div>
<!--END CONTENT BODY-->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>	
						
	
					

</td>
<!-- / Main Column -->

<!-- Right Inner Sidebar -->

<!-- Right Sidebar -->
<td id="right">

	<div id="categories-2" class="widget widget_categories"><div class="widget-title"><h3>Categories</h3></div>		<ul>
	<li class="cat-item cat-item-5"><a href="http://sfbikerescue.com/category/bike-art/" title="View all posts filed under Bike Art">Bike Art</a>
</li>
	<li class="cat-item cat-item-6"><a href="http://sfbikerescue.com/category/bike-recovery-services/" title="View all posts filed under Bike Recovery Services">Bike Recovery Services</a>
</li>
	<li class="cat-item cat-item-7"><a href="http://sfbikerescue.com/category/donations/" title="View all posts filed under Donations">Donations</a>
</li>
	<li class="cat-item cat-item-4"><a href="http://sfbikerescue.com/category/rescues/" title="View all posts filed under Rescues">Rescues</a>
</li>
	<li class="cat-item cat-item-1"><a href="http://sfbikerescue.com/category/uncategorized/" title="View all posts filed under Uncategorized">Uncategorized</a>
</li>
		</ul>
</div>
</td>
<!-- / Right Sidebar -->

</tr>
<!-- / Main Body -->
<tr>

<!-- Footer -->
<td id="footer" colspan="3">
    Copyright © 2016 <a href="http://sfbikerescue.com/">SF Bike Rescue</a> - All Rights Reserved<br>Powered by <a href="http://wordpress.org/">WordPress</a> &amp; <a href="http://forum.bytesforall.com/">Atahualpa</a>    
    
    	<div style="display:none">
	</div>

</tr>
</tbody></table><!-- / layout -->
</div><!-- / container -->
</div><!--<img id="wpstats" alt=":)" src="scripts/g.gif" height="5" width="6">-->

</body></html>