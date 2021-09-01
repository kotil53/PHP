<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">	
<title>KOTİL</title>
<style>
	body{
		background-color:black;
		color:white;
	}
</style>
<script type="text/javascript" language="javascript">
	function Deneme(){
		document.getElementById("IslemAlani").innerHTML = "Osman KOTİL";
	}
</script>
</head>

<body>
<?php
	echo "Osman KOTİL<br /><br />";
?>
<input type="button" onClick="Deneme();" value="İşlem Yap"><br /><br />
<div id="IslemAlani"></div>
</body>
</html>