<?php
header("Pragma: no-cache");
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
?>
<html>
<head>
	<title>Chrall</title>
	<link rel="stylesheet" type="text/css" href="chrall.css"/>
	<meta name="description" content="Chrall, une extension Chrome pour Mounty Hall"/>
	<meta name="keywords" content="chrome, extension, mounty hall">
</head>
<body class=very_short>

<div class=column_wrapper id="top_column_wrapper">
&nbsp;</div>

<div id="title_stripe">
<a href="/">canop.org</a> &gt; Chrall
</div>

<div class=column_wrapper id="content_column_wrapper">
<div id="content_wrapper">

<p>
Chrall est une extension Chrome pour le jeu <a href=www.mountyhall.com>Mounty Hall</a>.
</p>

<h2>Téléchargement</h2>
<p><a href=chrall.crx>installer Chrall dans Chrome</a></p>

<h2>Développement</h2>
<p>
Chrall est open-source.<br>
Vous pouvez participer au développement, signaler des bugs, ou simplement consulter les sources par curiosité via <a href=www.github.com/Canop/Chrall>github</a>.
</p>

</div> <!-- content_wrapper -->
</div> <!-- content_column_wrapper -->

<br><br>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15064357-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>