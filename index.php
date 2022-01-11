<?php include("rab_dbcon.php");$timestamp = strtotime("today");

$today=date("Y-m-d");

$a = $_SERVER[REQUEST_URI];
$len = strlen($a);
$len = substr($a,$len - 3); 

if ($len=='-fb') {
	$a = str_replace('-fb', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Facebook','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}elseif ($len=='-ig') {
	$a = str_replace('-ig', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Twitter','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}elseif ($len=='-tt') {
	$a = str_replace('-tt', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Twitter','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}elseif ($len=='-gg') {
	$a = str_replace('-gg', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Google Plus','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}elseif ($len=='-gp') {
	$a = str_replace('-gp', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Public','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}elseif ($len=='-in') {
	$a = str_replace('-in', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Linkedin','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}elseif ($len=='-pi') {
	$a = str_replace('-pi', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Pinterest','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}elseif ($len=='-tb') {
	$a = str_replace('-tb', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Tumblr','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");	
}elseif ($len=='-se') {
	$a = str_replace('-se', '', $a);
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Twitter','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}else{
$result = mysqli_query($cxn, "INSERT INTO  anonymous(anonymousID,anonymousName,anonymousIP,anonymousRating,anonymousDownload,anonymousFrom,anonymousPlatform,anonymousDevice,anonymousCountry,anonymousCity,anonymousTime,anonymousRegDate)VALUES (NULL,'$commenter','$userIP','',NULL,'Lost','$anonymousPlatform','$anonymousDevice','$anonymousCountry','','$anonymousTime','$today')") or die("Couldn't execute insert query anon.56");
}

if (strpos($a,'/archive/music-') !== false) {
	$a = str_replace('/archive/music-', '../index.php?1=musicpreview.php?songed=', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/instant') !== false) {
	$a = str_replace('/archive/instant', '../instant.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archivemember-') !== false) {
	$a = str_replace('/archive/member-', '../index.php?1=member.php?emailconfirmation=', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/member') !== false) {
	$a = str_replace('/archive/member', '../index.php?1=member.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/blog') !== false) {
	$a = str_replace('/archive/blog', '../index.php?1=blog.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/music') !== false) {
	$a = str_replace('/archive/music', '../index.php?1=music.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/labels') !== false) {
	$a = str_replace('/archive/labels', '../index.php?1=labels.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/videos') !== false) {
	$a = str_replace('/archive/videos', '../index.php?1=videos.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/visuals') !== false) {
	$a = str_replace('/archive/visuals', '../index.php?1=videos.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/news') !== false) {
	$a = str_replace('/archive/news', '../index.php?1=blog.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/people') !== false) {
	$a = str_replace('/archive/people', '../index.php?1=people.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/about') !== false) {
	$a = str_replace('/archive/about', '../index.php?1=about.php', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/person-') !== false) {
	$a = str_replace('/archive/person-', '../index.php?1=person.php?personed=', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/label-') !== false) {
	$a = str_replace('/archive/label-', '../index.php?1=label.php?labeled=', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/article-') !== false) {
	$a = str_replace('/archive/article-', '../index.php?1=blogarticle.php?blogged=', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/album-') !== false) {
	$a = str_replace('/archive/album-', '../index.php?1=albumpreview.php?albumed=', $a);
	header("Location: $a");
}
elseif (strpos($a,'/archive/video-') !== false) {
	$a = str_replace('/archive/video-', '../index.php?1=video.php?videoed=', $a);
	header("Location: $a");
}
else{unset($a);}
$b = $_SERVER[REQUEST_URI];

if(strpos($b,'musicpreview') !== false){
$item = str_replace('/index.php?1=musicpreview.php?songed=', '', $b);

$sql = mysqli_query ($cxn, "SELECT * FROM songs WHERE songURL='$item' LIMIT 1");while($row=mysqli_fetch_assoc($sql)){extract($row);} 

$title = $songTitle." by ".$songArtist; 
if ($songArtistFt !=''){$title .= " Ft ".$songArtistFt;}
if ($songProducer !=''){$title .= ". Produced by ".$songProducer;}

if($songDescription==''){
	$description = $songArtist." drops a sizzling ".$songGenre." track, titled ".$songTitle."."; 
if ($songArtistFt !=''){$description .= " The song features ".$songArtistFt." who added his flavour to the song.";}
$description .="Overall it's a nice song";
if ($songProducer !=''){$description .= ". Produced by ".$songProducer;}
}else{
$description = "$songDescription. Listen to, download, share and comment on this song.";
}
$keywords = "$songTitle, $songArtist, $songArtistFt, $songAlbum, $songProducer, $songType, $songGenre, $songYear, $songLanguage, Nigerian Music, greenbox, music";
$img = "http://www.gbngr.com/songsimg/$songArt";
$url = "http://www.gbngr.com/archive/music-$songURL-gp";
}

elseif(strpos($b,'person') !== false){
$item = str_replace('/index.php?1=person.php?personed=', '', $b);

$item=str_replace('___', ' ', $item);$item=str_replace('__', ' ', $item);$item=str_replace('_', ' ', $item);
$sql = mysqli_query ($cxn, "SELECT * FROM persons WHERE personStageName='$item' LIMIT 1");while($row=mysqli_fetch_assoc($sql)){extract($row);} 

$title = 'Discover '.$personStageName;
if ($personBirthName){$title = 'Discover '.$personBirthName.' "'.$personStageName.'"';}
if ($personLabel){$title .= " [".$personLabel."]";}

if(!$personLifeStory){	$description = "Meet ".$personStageName.", primarily a ".$personProfession1." ...More.";}else{$description = substr_replace($personLifeStory,'...',190)."More";}

$keywords = "$personStageName, $personBirthName, $personFanName, $personGenre, $personBirthDay, $personBirthYear, $personPlaceOfOrigin, $personProfession1, $personProfession2, $personProfession3, $personProfession4, $personCareerStartYear, $personLabel, $personLifeStory, Nigerian labels, Nigerian artists, Nigerian Music, greenbox, music";
$img = "http://www.gbngr.com/personsimg/$personPic1";
$pikin = str_replace(' ', '_', $personStageName);
$url = "http://www.gbngr.com/archive/person-$pikin-gp";
}

elseif(strpos($b,'label') !== false){
$item = str_replace('/index.php?1=label.php?labeled=', '', $b);

$item=str_replace('___', ' ', $item);$item=str_replace('__', ' ', $item);$item=str_replace('_', ' ', $item);
$sql = mysqli_query ($cxn, "SELECT * FROM labels WHERE labelName='$item' LIMIT 1");while($row=mysqli_fetch_assoc($sql)){extract($row);} 

if ($labelName){$title = 'Discover '.$labelName;}

if(!$labelHistory){	$description = $labelName.", founded by ".$labelOwner.", housing $labelArtists, $labelProducers, $labelOthers ...More.";}else{$description = substr_replace($personLifeStory,'...',190)."More";}

$keywords = "$labelName, $labelPic, $labelOwner, $labelFounded, $labelHistory, $labelArtists, $labelProducers, $labelOthers, Nigerian labels, Nigerian artists, Nigerian Music, greenbox, music";
$img = "http://www.gbngr.com/labelsimg/$labelPic";
$pikin = str_replace(' ', '_', $labelName);
$url = "http://www.gbngr.com/archive/label-$item-gp";
}

elseif(strpos($b,'blogarticle') !== false){
$item = str_replace('/index.php?1=blogarticle.php?blogged=', '', $b);

$item=str_replace('___', ' ', $item);$item=str_replace('__', ' ', $item);$item=str_replace('_', ' ', $item);
$sql = mysqli_query ($cxn, "SELECT * FROM blog WHERE blogName='$item' LIMIT 1");while($row=mysqli_fetch_assoc($sql)){extract($row);} 

$title = 'Discover '.$blogName;

$description = substr_replace($blogWriteup,'...',190)."More";

$keywords = "$blogName, $blogTag1, $blogTag2, $blogTag3, $blogTag4, $blogTag5, $blogSource";
$img = "http://www.gbngr.com/blogimg/$blogPic";
$pikin = str_replace(' ', '_', $blogName);
$url = "http://www.gbngr.com/archive/article-$item-gp";
}

elseif(strpos($b,'albumpreview') !== false){
$item = str_replace('/index.php?1=albumpreview.php?album=', '', $b);

$item=str_replace('___', ' ', $item);$item=str_replace('__', ' ', $item);$item=str_replace('_', ' ', $item);
$sql = mysqli_query ($cxn, "SELECT * FROM songs WHERE songAlbum='$item' LIMIT 1");while($row=mysqli_fetch_assoc($sql)){extract($row);} 

$title = 'Discover '.$songAlbum." By ".$songArtist;

$description = $songAlbum.", by ".$songArtist.", with tracks $songTitle...More.";

$keywords = "$songTitle, $songArtist, $songArtistFt, $songAlbum, $songProducer, $songType, $songGenre, $songYear, $songLanguage, Nigerian Music, greenbox, music";
$img = "http://www.gbngr.com/songsimg/songArt";
$pikin = str_replace(' ', '_', $songAlbum);
$url = "http://www.gbngr.com/archive/album-$item-gp";
}
elseif(strpos($b,'video') !== false){
$item = str_replace('/index.php?1=video.php?videoed=', '', $b);

$item=str_replace('___', ' ', $item);$item=str_replace('__', ' ', $item);$item=str_replace('_', ' ', $item);
$sql = mysqli_query ($cxn, "SELECT * FROM videos WHERE videoTitle='$item' LIMIT 1");while($row=mysqli_fetch_assoc($sql)){extract($row);} 

$title = $videoTitle." by ".$videoArtist; 
if ($videoArtistFt !=''){$title .= " Ft ".$videoArtistFt;}
if ($videoDirector !=''){$title .= ". Director, ".$videoDirector;}

if($videoDescription==''){
			$description = $songArtist." drops a sizzling the visuals for ".$videoTitle."."; 
		if ($videoArtistFt !=''){$description .= " featuring ".$videoArtistFt." who added his flavour to the song.";}
		$description .="Overall it's a nice song";
		if ($videoDirector !=''){$description .= ". Director, ".$videoDirector;}
		}else{
		$description = "$videoDescription. Listen to, download, share and comment on this song.";
		}
		$keywords = "$videoTitle, $videoArtist, $videoArtistFt, $videoDirector, video, music video, Nigerian Music, greenbox, music";
		$img = "http://www.gbngr.com/videosimg/$videoPic";
		$pikin = str_replace(' ', '_', $videoTitle);
		$url = "http://www.gbngr.com/archive/video-$item-gp";
}
elseif($_GET['1']=='member.php'){
	$title = 'Become a member';

$description = "Are you a professional in the music industry? Sign In or Sign Up in Greenbox Nigeria, get your plane in the library, create a profile, you can also upload your songs and share";

$keywords = "music industry, Sign In, Sign Up, Greenbox Nigeria, library, create a profile, upload your songs, share, Nigerian Music, greenbox, music";
$img = "http://www.gbngr.com/images/flood_profile.png";
$url = "http://www.gbngr.com/archive/member-gp";
	}
else{
	$title = 'Afro Music Central';

$description = "imagine a platform that brings out all the element of the Afro music... most of it tho. Letting you in on the Afro music you love...";

$keywords = "Nigerian Music, greenbox, music";
$img = "http://www.gbngr.com/images/logo.png";
$url = "http://www.gbngr.com";
	}
$description=str_replace('"', "'", $description);
$description=str_replace('"', "'", $description);if(strlen($description)>200){$description = substr_replace($description,'...',190)."More";}

?>
<!DOCTYPE html>
<html>
<head>
<title id='title1'><?php echo $title ?></title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
<meta name="viewport" content="user-scalable=no,maximum-scale=1" />
<meta name="MobileOptimized" content="width" />
<meta id='description' name="description" content="Discover The Nigerian Music Industry; the songs, the people, the labels and the news" />
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta id='keywords' name="keywords" content="Nigerian Music,  Artist, label, song, news" />
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name="viewport" content="width=device-width, user-scalable=no">
<link href="style/cascade.css" rel="stylesheet" type="text/css"/>
<link href="style/day.css" rel="stylesheet" type="text/css"/>
<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />
<meta name="author" content="GreenboxNigeria" />
<meta name="copyright" content="Renegade &copy; <?php echo date("Y"); ?>" />
<meta name="application-name" content="GreenboxNigeria" />
<meta itemprop="name" content="<?php echo $title ?>">
<meta itemprop="description" content="<?php echo $description ?>">
<meta itemprop="image" content="<?php echo $img ?>">
<meta name="twitter:site" value="@greenboxnigeria" />
<meta name="twitter:text:title" content="<?php echo $title ?>" />
<meta name="twitter:text:description" content="<?php echo $description ?>" />
<meta property="twitter:url" content="<?php echo $url ?>" />
<meta property="twitter:title" content="<?php echo $title ?>" />
<meta property="twitter:description" content="<?php echo $description ?>" />
<meta name="author" content="Greenbox Nigeria" />
<meta name="tone" content="feature" id="article-tone" />
<meta name="byl" content="By Greenbox Nigeria" />
<meta name="PT" content="article" />
<meta name="CG" content="arts" />
<meta name="SCG" content="television" />
<meta name="PST" content="Review" />
<meta name="tom" content="Review" />
<meta name="edt" content="Nigeria" />
<meta property="og:image" content="<?php echo $img ?>" />
<meta property="twitter:image:alt" content="<?php echo $title ?>" />
<meta property="twitter:image" content="<?php echo $img ?>" />
<meta name="twitter:card" value="summary_large_image" />
<meta property="article:author" content="http://www.gbngr.com" />
<meta name="twitter:creator" value="@greenboxnigeria" />
<meta property="og:title" content="<?php echo $title ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $url ?>" />
<meta property="og:image" content="<?php echo $img ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta property="og:site_name" content="Greenbox Nigeria" />
<meta property="article:published_time" content="<?php echo $timestamp ?>" />
<meta property="article:modified_time" content="<?php echo $timestamp ?>" />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="1032329466862501" />
</head>

<?php
if ($detect->isMobile()){

//mobile?>

<body onResize="fold()" onLoad="review()">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86989025-1', 'auto');
  ga('send', 'pageview');

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '337064256628425',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<?php $sql = mysqli_query ($cxn, "SELECT * FROM songs WHERE songRating='5' ORDER BY songID DESC LIMIT 1");while($row=mysqli_fetch_assoc($sql)) {extract($row);	}?>

<table id="mySidenav" class="sidenav"><tr><td style="background:#FFF">
<table style="height:100%"><tr><td style="height:40px" align="center">
<table style="height:30px;" onclick="closeNav()"><tr><td align="center" style="background:url(images/logo.png) center no-repeat; background-size:contain;">&nbsp;</td></tr></table>
</td></tr>
<tr valign="middle" bgcolor="#FFF"><td align="center" style="width:98%; padding:5px 0; height:10px">
<table class="playerart" style="background:url(songsimg/<?php echo $songArt?>) #FFF center no-repeat; background-size:cover; width:120px; height:120px; border-radius:50%; box-shadow:0 0 1px #000"><tr><td align="center">
<table style="width:40px; height:40px; background:#FFF; border-radius:50%; vertical-align:middle"><tr><td>
<table style="width:20px; height:20px;" align="center" id="played1" onClick="playerplay()"><tr><td></td></tr></table>
</td></tr></table>
</td></tr></table>
<span class="playertitle" style="font-size:.8em; overflow:hidden; height:20px">
<table style="text-align:center">
<tr><td style="font-size:1em; font-weight:700" colspan="2"><?php echo $songTitle ?></td></tr>
<tr><td><span style="font-size:1em; font-weight:700;"><?php echo $songArtist ?></span><?php if($songArtistFt){echo " ft ".$songArtistFt;} ?></td></tr>
<tr><td colspan="2"><?php echo $songProducer ?></td></tr>
</table>
</span>
</td></tr>
<tr><td style="background:#EEE; padding:10px 0">
<table style="text-align:center"><tr><td style="font-size:.8em; font-weight:700; color:#000" onClick="openPlay()">Open Music Player</td></tr></table>
</td></tr>
<tr valign="middle"><td style="background:#FFF">
<table><tr><td colspan="2" class="menu" id="member" onClick="linker('member')">&bull; MEMBER </td></tr>
<tr class="menu"><td id="music"onClick="linker('music')" style="padding-left:10px">&bull; MUSIC </td><td style="width:20%">
<table style="border-radius:5%; box-shadow:0 0 5px rgba(0,0,0,.15); font-size:.8em; width:90%; background:#EEE"><tr><td align="center" style="padding:5px 10px;" onClick="menus()">&bull;</td></tr></table>
</td></tr>
<tr><td style="display:none; padding-left:20px" id="submenu" colspan="2">
<table style="width:100%">
<tr><td class="submenu" id="music"onClick="linkered('musiclist.php?t=new')">&bull; New </td></tr>
<tr><td class="submenu" id="music"onClick="linkered('musiclist.php?t=artist')">&bull; Artist </td></tr>
<tr><td class="submenu" id="music"onClick="linkered('musiclist.php?t=producer')">&bull; Producer </td></tr>
<tr><td class="submenu" id="music"onClick="linkered('musiclist.php?t=album')">&bull; Album </td></tr>
</table></td></tr>
<tr><td colspan="2" class="menu" id="videos"onClick="linker('videos')">&bull; VIDEOS </td></tr>
<tr><td colspan="2" class="menu" id="blog" onClick="linker('blog')">&bull; NEWS FEED </td></tr>
<tr><td colspan="2" class="menu" id="people" onClick="linker('people')">&bull; PEOPLE </td></tr>
<tr><td colspan="2" class="menu" id="labels" onClick="linker('labels')" >&bull; LABELS </td></tr>
<tr><td colspan="2" class="menu" id="about" onClick="linker('about')">&bull; ABOUT </td></tr></table>
</td></tr>
<tr><td style="background:#FFF; font-size:.5em; font-weight:700; color:#000" align="center">
<table style=" width:95%; font-size:1.5em"><tr valign="middle"><td>Follow Greenbox Nigeria</td>
<td title="Facebook" align="center"><a target="_blank" href="https://www.facebook.com/Greenbox-Nigeria-1032329466862501/"><div style="background:url(images/fb.png) center no-repeat;background-size:cover;width:20px;height:20px"></div></a></td>
<td title="Twitter" align="center"><a target="_blank" href="https://twitter.com/GreenboxNigeria"><div style="background:url(images/tt1.png) center no-repeat;background-size:cover;width:20px;height:20px"></div></a></td>
<td title="Google+" align="center"><a target="_blank" href="https://plus.google.com/u/0/101846096960635449425"><div style="background:url(images/gg.png) center no-repeat;background-size:cover;width:20px;height:20px"></div></a></td>
<td title="LinkedIn" align="center"><a target="_blank" href="https://www.linkedin.com/company/greenbox-nigeria"><div style="background:url(images/in.png) center no-repeat;background-size:cover;width:20px;height:20px"></div></a></td>
<td title="Instagram" align="center"><a target="_blank" href="https://www.instagram.com/greenboxnigeria/"><div style="background:url(images/ig.png) center no-repeat;background-size:cover;width:20px;height:20px"></div></a></td></tr></table><br>
<span>&copy; Copyright 2015 - <?php echo date('Y') ?>, The Greenbox Nigeria devx team.</span>
</td></tr></table></td><td style="width:20%; font-size:2em; background:none" onclick="closeNav()" align="center"></td></tr></table>


<table align="center" style="width:100%; position:absolute; z-index:4; height:100%; top:-1000%; background:#FFF" id="dog">
<tr><td style="height:40px" align="center">
<table style="background:url(images/logo.png) center no-repeat; background-size:contain; height:30px; margin:5px" onClick="closePlay()"><tr><td>&nbsp;</td></tr></table>
</td></tr>
<tr><td align="center">
<table style="height:200px; width:200px"><tr><td onClick="linker('previewsong')" class="playerart" style="background:url(songsimg/<?php echo $songArt?>) rgba(0,0,0,.04) center no-repeat; background-size:cover;" align="center"><input type="hidden" id="art" value="<?php echo $songID?>"></td></tr></table>
</td></tr>
<tr><td class="playertitle">
<table style='text-align:center'><tr><td style='font-size:1em; font-weight:700' colspan='2'><?php echo $songTitle ?></td></tr><tr><td><span style='font-size:1em; font-weight:700;height:20px'><?php echo $songArtist ?></span><?php if($songArtistFt){echo ' ft '.$songArtistFt;} ?></td></tr><tr><td colspan='2'><?php echo $songProducer ?></td></tr></table>
</td></tr>
<tr><td id="playerrating" align="center">
<table style="width:100px" align="center"><tr>
<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>
<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>
<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>
<?php if($songRating>3){echo"<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>";}?>
<?php if($songRating>4){echo"<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>";}?>
</tr></table>
</td></tr>
<audio src='songs/<?php echo $songURL?>' type='audio/mp3' id="player2" preload="none" onError="this.load()"></audio>
<tr><td>

<table style="font-weight:700; font-size:.8em; background:#F5F5F5;">
<tr><td style="height:5px;" colspan="2"></td></tr>
<tr><td style="height:3px;" colspan="2" align="center">
<div style="border:none;border-right:thick solid #00E676; width:20%; height:5px; display:inline-block; padding:0; margin:0; background:#EEE" onClick="seek14()"></div>
<div style="border:none;border-right:thick solid #00E676; width:20%; height:5px; display:inline-block; padding:0; margin:0; background:#EEE" onClick="seek12()"></div>
<div style="border:none;border-right:thick solid #00E676; width:20%; height:5px; display:inline-block; padding:0; margin:0; background:#EEE" onClick="seek34()"></div>
<div style="border:none;width:20%; height:5px; display:inline-block; padding:0; margin:0; background:#EEE"></div>
</td></tr>
<tr><td style="height:1px;" colspan="2"><div id="buffet" style=" background:#FFF"><div id="timeline" style="background: #00E676;"></div></div></td></tr>
<tr><td style="text-align:left; padding-left:10px" id="playertimercurrent">00:00</td><td style="height:45px; text-align:right; padding-right:10px" id="playertimerend">00:00</td></tr>
</table>
<table style="font-size:1.5em; font-weight:700; background:rgba(0,0,0,0); height:50px; margin:20px 0"><tr valign="middle" align="center">
<td style="width:14%" id="repeater" onClick="repeating()"><table style="background:url(images/repeat.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
<td style="width:14%" id="shuffler" onClick="shuffling()"><table style="background:url(images/shuffle.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%" ></td></tr></table></td>
<td onClick="prev()" id="prever"><table style="background:url(images/prev.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
<td style="width:50px; height:50px; border-radius:50%; box-shadow:0 0 5px rgba(0,0,0,.25)" align="center" onClick="playerplay()"><table style="width:20px; height:20px"><tr><td style="width:20%" id="played"><input type="hidden" id="playerplay"></td></tr></table></td>
<td onClick="next()" id="nexter"><table style="background:url(images/next.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
<td style="width:14%; border-bottom:solid thin #FFF" id="playlistener" onClick="playlister()"><table style="background:url(images/playlist.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
<td style="width:14%" onClick="closePlay()"><table style="background:url(images/close.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
</tr></table>
<table align="center"><tr valign="middle" align="center"><td id="playlist" style="display:none;">
<table><tr style=" background:rgba(0,0,0,0.04); height:50px;" valign="middle"><td style="width:70px;padding:5px 10px; " colspan="2">SONGS</td>
<td align="right" style="padding:5px 10px;"> <table style="border-radius:5%; box-shadow:0 0 5px rgba(0,0,0,.25); font-size:.8em; width:0"><tr>
<td align="center" style="padding:5px 10px;" onClick="restack()"><span style="font-size:.8em; font-weight:700"> RESTACK </span></td></tr></table> </td></tr></table>
<table><tr><td id='playlisting' align="center">
<?php $sql = mysqli_query ($cxn, "SELECT * FROM songs WHERE songRating='5' ORDER BY songID DESC LIMIT 20");$counter=1;while($row=mysqli_fetch_assoc($sql)) {extract($row);?>
<table  onClick="playee('<?php echo $songTitle ?>', '<?php echo $songURL ?>', '<?php echo $songArt ?>',  '<?php echo $songArtist ?>', '<?php echo $songArtistFt ?>', '<?php echo $songProducer ?>', '<?php echo $songAlbum ?>', '<?php echo $songID ?>', '<?php echo $songYear ?>', '<?php echo $songRating ?>', '<?php echo $counter ?>')" style="width:95%; border-bottom:thin solid rgba(0,0,0,.1)"><tr valign="middle"><td style="padding:5px 0; width:70px; height:50px;" align="center">
<table style="width:15px; height:15px;font-size:.6em; font-weight:700; text-align:center" id="playindex<?php echo $counter ?>"><tr><td ><?php echo $counter ?></td></tr></table>
</td><td style="padding:5px 10px;font-size:.9em; font-weight:700">
<?php echo $songTitle ?><br>
<?php echo $songArtist ?><span style="font-size:.8em; font-weight:100"><?php if($songArtistFt){echo " ft ".$songArtistFt;} if($songProducer){echo " &bull; ".$songProducer;} ?></span>
</td></tr></table>
<span style="display:none">
<span id="song<?php echo $counter ?>a"><?php echo $songTitle ?></span>
<span id="song<?php echo $counter ?>b"><?php echo $songURL ?></span>
<span id="song<?php echo $counter ?>c"><?php echo $songArt ?></span>
<span id="song<?php echo $counter ?>d"><?php echo $songArtist ?></span>
<span id="song<?php echo $counter ?>e"><?php echo $songArtistFt ?></span>
<span id="song<?php echo $counter ?>f"><?php echo $songProducer ?></span>
<span id="song<?php echo $counter ?>g"><?php echo $songAlbum ?></span>
<span id="song<?php echo $counter ?>h"><?php echo $songID ?></span>
<span id="song<?php echo $counter ?>i"><?php echo $songYear ?></span>
<span id="song<?php echo $counter ?>j"><?php echo $songRating ?></span>
<span id="song<?php echo $counter ?>k"><?php echo $counter ?></span>
</span>
<?php $counter++;}?>
</td></tr></table>
</td></tr></table>
</td></tr>
<tr><td height="50px">
<input type="hidden" id="song00" value="0">
<input type="hidden" id="repeat00" value="0">
<input type="hidden" id="shuffle00" value="0">
</td></tr></table>



<table style="width:100%; position:absolute; z-index:3; height:100%; left:-200%; background:rgba(0,0,0,.4)" id="lost"><tr><td style="background:url(images/body_bg.png) right bottom #FFF no-repeat;background-size:contain;">
<table align="center" style="height:100%"><tr><td style="height:40px">
<table style="background:url(images/logo.png) center no-repeat; background-size:contain; height:30px; margin:5px 0" onClick="closeLost()"><tr><td>&nbsp;</td></tr></table>
</td></tr>
<tr><td style="height:50px; padding-top:30px" align="center"><form onSubmit="return keyworder()">
<input onKeyUp="seek()" onChange="seek()" id='keyword' style='width:90%; height:30px; border:none;border-bottom:thin solid #999; padding:20px 5px 10px 5px ; color:#000;font-family:myFirstFont; font-size:1em; text-align:center' value="" placeholder="Search.." maxlength="70"/></form>
</td></tr>
<tr valign="top"><td id="looked"></td></tr></table>
</td><td style="width:20%; font-size:5em; color:#FFF;" onClick="closeLost()" valign="bottom" align="center"></td></tr></table>

<table align="center" style="width:100%; position:absolute; z-index:3; height:100%; background:rgba(0,0,0,.4); top:-200%" id="intiating"><tr valign="middle">
<td align="center">
<div class="loader" align="center"></div>
</td></tr></table>

<?php include_once("analyticstracking.php") ?>
<iframe style="display:none"></iframe>
<table class="splash" style="z-index:5; position:fixed; background:#FFF">
<tr valign="middle"><td align="center">
<table style="background:url(images/logo.png) center no-repeat; background-size:contain; height:100px; width:100px; margin-bottom:100px"><tr><td></td></tr></table>
<div class="loader" align="center"></div>
</td></tr></table>


<table class="header">
<tr>
<td colspan="3"><table>
<tr height="40px" valign="middle">
<td align="center" width="40px" onclick="openNav()"><table style="background:url(images/menu.png) center no-repeat; background-size:contain; height:30px"><tr><td>&nbsp;</td></tr></table></td>
<td align="center" onClick="linker('home')"><table style="background:url(images/logo.png) center no-repeat; background-size:contain; height:30px"><tr><td>&nbsp;</td></tr></table></td>
<td align="center" width="40px" onClick="openLost()"><table style="background:url(images/search.png) center no-repeat; background-size:contain; height:30px"><tr><td>&nbsp;</td></tr></table></td>
</tr>
</table></td>
</tr>
</table>
<iframe class="body" src="<?php if($_GET['1']!=''){echo $_GET['1'];}else{echo"home.php";}?>"></iframe>
<script src="scirpt/mob_layout.js"></script> 
<script src="scirpt/mob_links.js"></script>
<iframe id="service"></iframe>
</body>
</html>


<?php }else{?>


<body onResize="fold()" onLoad="review()" style="background:#EEE">
<table class="splash" style="z-index:5; position:fixed; background:#FFF">
<tr valign="middle"><td align="center">
<table style="background:url(images/logo.png) center no-repeat; background-size:contain; height:100px; width:100px; margin-bottom:100px"><tr><td></td></tr></table>
<div class="loader" align="center"></div>
</td></tr></table>



<?php $sql = mysqli_query ($cxn, "SELECT * FROM songs WHERE songRating='5' ORDER BY songID DESC LIMIT 1");while($row=mysqli_fetch_assoc($sql)) {extract($row);}?>


<table align="center" style=" z-index:2; position:absolute; top:-200%; width:100%; background:#FFF;" id="dog">
<tr valign="middle"><td style="height:40px" align="center" colspan="2">

<table onClick="closePlay()"><tr><td style="width:5%">&nbsp;</td>
<td style="background:url(images/logo.png) center no-repeat; background-size:contain; height:30px;">&nbsp;</td>
<td style="background:url(images/close.png) center no-repeat; background-size:contain; height:30px;width:5%">&nbsp;</td></tr></table>

</td></tr><tr valign="middle"><td align="center">

<table><tr><td width="300px">

<table><tr><td align="center">

<table style="height:250px; width:250px"><tr>
<td onClick="linker('previewsong')" class="playerart" style="background:url(songsimg/<?php echo $songArt?>) rgba(0,0,0,.04) center no-repeat; background-size:cover;" align="center"><input type="hidden" id="art" value="<?php echo $songID?>">
</td>
</tr></table><br>
<table><tr><td class="playertitle" style="height:70px;">
<table style='text-align:center;color:#000'><tr><td style='font-size:1em; font-weight:700' colspan='2'><?php echo $songTitle ?></td></tr><tr><td><span style='font-size:1em; font-weight:700;height:20px'><?php echo $songArtist ?></span><?php if($songArtistFt){echo ' ft '.$songArtistFt;} ?></td></tr><tr><td colspan='2'><?php echo $songProducer ?></td></tr></table>
</td></tr></table><br>
</td></tr>
<tr style="height:20px"><td id="playerrating" align="center">
<table style="width:100px" align="center"><tr>
<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>
<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>
<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>
<?php if($songRating>3){echo"<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>";}?>
<?php if($songRating>4){echo"<td style='background:url(images/star1.png) left no-repeat; background-size:cover; width:20px; height:20px;'></td>";}?>
</tr></table>
</td></tr></table>


<audio src='songs/<?php echo $songURL?>' type='audio/mp3' id="player2" preload="none" onError="this.load()"></audio>
<table style="font-weight:700; font-size:.8em;">
<tr valign="bottom"><td style="text-align:left; padding-left:10px; width:40px" id="playertimercurrent">00:00</td>
<td style="height:3px;" align="center">
<div style="border:none;border-right:thick solid #00E676; width:23%; height:5px; display:inline-block; padding:0; margin:0; background:#FAFAFA" onClick="seek14()"></div>
<div style="border:none;border-right:thick solid #00E676; width:23%; height:5px; display:inline-block; padding:0; margin:0; background:#FAFAFA" onClick="seek12()"></div>
<div style="border:none;border-right:thick solid #00E676; width:23%; height:5px; display:inline-block; padding:0; margin:0; background:#FAFAFA" onClick="seek34()"></div>
<div style="border:none;width:23%; height:5px; display:inline-block; padding:0; margin:0; background:#FAFAFA"></div>
<div align="left"><div id="buffet" style=" background:#DDD"><div id="timeline" style="background: #00E676;"></div></div></div>
</td><td style="text-align:right; padding-right:10px; width:40px" id="playertimerend">00:00</td></tr>
</table>

<table style="font-size:1.5em; font-weight:700; background:rgba(0,0,0,0); height:40px; width:400px; margin-top:10px" align="center"><tr valign="middle" align="center">
<td style="width:14%" id="repeater" onClick="repeating()"><table style="background:url(images/repeat.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
<td onClick="prev()" id="prever"><table style="background:url(images/prev.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
<td style="width:40px; height:40px; border-radius:50%; box-shadow:0 0 5px rgba(0,0,0,.25)" align="center"><table style="width:15px; height:15px"><tr><td style="width:20%" onClick="playerplay()" id="played"><input type="hidden" id="playerplay"></td></tr></table></td>
<td onClick="next()" id="nexter"><table style="background:url(images/next.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%"></td></tr></table></td>
<td style="width:14%" id="shuffler" onClick="shuffling()"><table style="background:url(images/shuffle.png) center no-repeat; background-size:contain; width:20px; height:20px"><tr><td style="width:20%" ></td></tr></table></td>
</tr></table>

<input type="hidden" id="song00" value="0">
<input type="hidden" id="repeat00" value="0">
<input type="hidden" id="shuffle00" value="0">
</td></tr></table>

</td></tr><tr>
<td>

<table align="center" style="width:50%"><tr valign="middle" align="center"><td id="playlist">
<table><tr style="height:50px;" valign="middle"><td style="width:70px;padding:5px 10px; " colspan="2">PLAYLIST</td><td align="right" style="padding:5px 10px;"> <table style="border-radius:5%; box-shadow:0 0 5px rgba(0,0,0,.25); font-size:.8em; width:0"><tr>
<td align="center" style="padding:5px 10px;" onClick="restack()"><span style="font-size:.8em; font-weight:700; cursor:pointer">RESTACK</span></td></tr></table> </td></tr></table>
<table><tr><td id='playlisting' align="center">
<?php $sql = mysqli_query ($cxn, "SELECT * FROM songs ORDER BY RAND() LIMIT 20");$counter=1;while($row=mysqli_fetch_assoc($sql)) {extract($row);?>
<table  onClick="playee('<?php echo $songTitle ?>', '<?php echo $songURL ?>', '<?php echo $songArt ?>',  '<?php echo $songArtist ?>', '<?php echo $songArtistFt ?>', '<?php echo $songProducer ?>', '<?php echo $songAlbum ?>', '<?php echo $songID ?>', '<?php echo $songYear ?>', '<?php echo $songRating ?>', '<?php echo $counter ?>')" style="width:95%; border-bottom:thin solid rgba(0,0,0,.05); font-size:.9em"><tr valign="middle"><td style="width:70px;" align="center">
<table style="width:15px; height:15px;font-size:.6em; font-weight:700; text-align:center" id="playindex<?php echo $counter ?>"><tr><td ><?php echo $counter ?></td></tr></table>
</td><td style="padding:5px 10px;font-size:.9em; font-weight:700">
<?php echo $songTitle ?> - <?php echo $songArtist ?><span style="font-size:.8em; font-weight:100"><?php if($songArtistFt){echo " ft ".$songArtistFt;} if($songProducer){echo " &bull; ".$songProducer;} ?></span>
</td></tr></table>
<span style="display:none">
<span id="song<?php echo $counter ?>a"><?php echo $songTitle ?></span>
<span id="song<?php echo $counter ?>b"><?php echo $songURL ?></span>
<span id="song<?php echo $counter ?>c"><?php echo $songArt ?></span>
<span id="song<?php echo $counter ?>d"><?php echo $songArtist ?></span>
<span id="song<?php echo $counter ?>e"><?php echo $songArtistFt ?></span>
<span id="song<?php echo $counter ?>f"><?php echo $songProducer ?></span>
<span id="song<?php echo $counter ?>g"><?php echo $songAlbum ?></span>
<span id="song<?php echo $counter ?>h"><?php echo $songID ?></span>
<span id="song<?php echo $counter ?>i"><?php echo $songYear ?></span>
<span id="song<?php echo $counter ?>j"><?php echo $songRating ?></span>
<span id="song<?php echo $counter ?>k"><?php echo $counter ?></span>
</span>
<?php $counter++;}?>
</td></tr></table>
</td></tr></table>


</td>
</tr></table>

</td></tr></table>




<table style="width:100%; position:absolute; z-index:3; height:100%; left:-100%; background:rgba(0,0,0,.4)" id="lost">
<tr><td onClick="closeLost()" style="width:200px"></td><td style="background:#EEE">

<table style="height:100%;"><tr>
<td style=" width:40%" align="center"><form onSubmit="return keyworder()">
<input onKeyUp="seek()" onChange="seek()" id='keyword' style='background:none; width:90%; height:30px; border:none;border-bottom:thin solid #999; padding:20px 5px 10px 5px ; color:#000;font-family:myFirstFont; font-size:1em; text-align:center' value="" placeholder="Search.." maxlength="70"/></form></td>
<td id="looked"></td>
</tr></table>

</td></tr>
</table>

<table align="center" style="width:100%; position:absolute; z-index:3; height:100%; background:rgba(0,0,0,.4); top:-100%" id="intiating"><tr valign="middle">
<td align="center">
<div class="loader" align="center"></div>
</td></tr></table>

<script type='text/javascript' src="scirpt/scroll.js"></script>
<?php include_once("analyticstracking.php") ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86989025-1', 'auto');
  ga('send', 'pageview');

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '337064256628425',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<iframe style="display:none"></iframe>

<table class="header" style="background:#EEE"><tr><td>
<table>
<tr height="40px" valign="middle">
<td align="center" onClick="lonker('home')"><table style="background:url(images/logo.png) center no-repeat; background-size:contain; height:30px"><tr><td>&nbsp;</td></tr></table></td>
</tr>
</table></td>
</tr>
</table>

<table style="height:100%"><tr valign="bottom"><td style="width:200px; background:#EEE" align="center">

<table style="font-size:.9em;">
<tr><td class="menu" onClick="openLost()">SEARCH </td></tr>
<tr><td class="menu" id="home" onClick="lonker('home')">HOME </td></tr>
<tr><td class="menu" id="member" onClick="lonker('member')">MEMBER </td></tr>
<tr><td class="menu" id="music"onClick="lonker('music')">MUSIC </td></tr>
<tr><td class="menu" id="videos"onClick="lonker('videos')">VIDEOS </td></tr>
<tr><td class="menu" id="blog" onClick="lonker('blog')">NEWS FEED </td></tr>
<tr><td class="menu" id="people" onClick="lonker('people')">PEOPLE </td></tr>
<tr><td class="menu" id="labels" onClick="lonker('labels')" >LABELS </td></tr>
<tr><td class="menu" id="about" onClick="lonker('about')">ABOUT </td></tr>
</table>
<table style="height:180px; width:180px; background:#EEE; margin:10px 10px 0 10px">
<tr><td align="center">&hArr;</td></tr>
</table>
</td><td>
<iframe class="body" src="<?php if($_GET['1']!=''){echo $_GET['1'];}else{echo"home.php";}?>"></iframe>

</td><td style=" width:200px; background:#EEE" align="center">

<table id="sideplay" style="height:100%"><tr valign="top"><td align="center">
<?php $sql = mysqli_query ($cxn, "SELECT * FROM songs WHERE songRating='5' ORDER BY songID DESC LIMIT 1");while($row=mysqli_fetch_assoc($sql)) {extract($row);}?> 
<table class="playerart" style="background:url(songsimg/<?php echo $songArt?>) #FFF center no-repeat; background-size:cover; width:120px; height:120px; border-radius:50%; box-shadow:0 0 1px #000; margin-top:10px"><tr><td align="center">
<table style="width:40px; height:40px; background:#FFF; border-radius:50%; vertical-align:middle"><tr><td>
<table style="width:20px; height:20px;" align="center" id="played1" onClick="playerplay()"><tr><td></td></tr></table>
</td></tr></table>
</td></tr></table>

<table><tr><td class="playertitle" style="padding:0 5px;">
<table style="text-align:center; font-size:.8em; font-weight:700;height:20px">
<tr><td colspan="2"><?php echo $songTitle ?></td></tr>
<tr><td><?php echo $songArtist ?><?php if($songArtistFt){echo " ft ".$songArtistFt;} ?></td></tr>
<tr><td colspan="2"><?php echo $songProducer ?></td></tr></table>
</td></tr></table>

</td></tr><tr valign="middle"><td height="280px">

<table><tr style="height:50px; font-size:.7em" valign="middle"><td style="width:70px;padding:5px 10px; " colspan="2">PLAYLIST</td><td align="right" style="padding:5px 10px;"><table style="border-radius:5%; box-shadow:0 0 5px rgba(0,0,0,.25); font-size:.8em; width:0"><tr>
<td align="center" style="padding:5px 10px;" onClick="restack()"><span style="font-size:.8em; font-weight:700; cursor:pointer"> RESTACK </span></td></tr></table></td></tr></table>
<div id="hot">

<table><tr><td id='playlisting1' align="center">
<?php $sql = mysqli_query ($cxn, "SELECT * FROM songs WHERE songRating='5' ORDER BY songID DESC LIMIT 20");$counter=1;while($row=mysqli_fetch_assoc($sql)) {extract($row);?>
<table  onClick="playee('<?php echo $songTitle ?>', '<?php echo $songURL ?>', '<?php echo $songArt ?>',  '<?php echo $songArtist ?>', '<?php echo $songArtistFt ?>', '<?php echo $songProducer ?>', '<?php echo $songAlbum ?>', '<?php echo $songID ?>', '<?php echo $songYear ?>', '<?php echo $songRating ?>', '<?php echo $counter ?>')" style="width:99%; border-bottom:thin solid rgba(0,0,0,.05); font-size:.9em"><tr valign="middle"><td style="width:20px;" align="center">
<table style="width:15px; height:15px;font-size:.6em; font-weight:700; text-align:center" id="playindex<?php echo $counter ?>"><tr><td ><?php echo $counter ?></td></tr></table>
</td><td style="padding:5px 10px;font-size:.9em; font-weight:700">
<?php echo $songTitle ?> - <?php echo $songArtist ?><span style="font-size:.8em; font-weight:100"><?php if($songArtistFt){echo " ft ".$songArtistFt;} if($songProducer){echo " &bull; ".$songProducer;} ?></span>
</td></tr></table>
<span style="display:none">
<span id="song<?php echo $counter ?>a"><?php echo $songTitle ?></span>
<span id="song<?php echo $counter ?>b"><?php echo $songURL ?></span>
<span id="song<?php echo $counter ?>c"><?php echo $songArt ?></span>
<span id="song<?php echo $counter ?>d"><?php echo $songArtist ?></span>
<span id="song<?php echo $counter ?>e"><?php echo $songArtistFt ?></span>
<span id="song<?php echo $counter ?>f"><?php echo $songProducer ?></span>
<span id="song<?php echo $counter ?>g"><?php echo $songAlbum ?></span>
<span id="song<?php echo $counter ?>h"><?php echo $songID ?></span>
<span id="song<?php echo $counter ?>i"><?php echo $songYear ?></span>
<span id="song<?php echo $counter ?>j"><?php echo $songRating ?></span>
<span id="song<?php echo $counter ?>k"><?php echo $counter ?></span>
</span>
<?php $counter++;}?>
</td></tr></table>

</div>
<table style="text-align:center"><tr><td style="font-size:.8em; font-weight:700; padding:20px 0; cursor:pointer" onClick="document.getElementById('dog').style.top = '0';">&bull; Open Music Player &bull;</td></tr></table>

</td></tr></table>

</td></tr></table>

<table><tr valign="middle">
<td style="padding-right:10px; font-size:.6em; font-weight:700; height:20px; background:#EEE" align="center"><span>&copy; Copyright 2015 - <?php echo date('Y') ?>, The Greenbox Nigeria devx team.</span></td>
</tr>
</table>
</td></tr></table>

<script src="scirpt/layout.js"></script> 
<script src="scirpt/links.js"></script>
<iframe id="service"></iframe>
</body>
</html>
<?php }?>