<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<div class="wrapper">
			<h3>Type hier beneden:</h3>
			<form action=""> 
				type hier:  <input type="text" id="txt1" onkeyup="showHint(this.value)">
			</form>
			<p>Suggesties: <span id="txtHint"></span></p> 
			<script>
				function showHint(str) {
				  var xhttp;
				  if (str.length == 0) { 
					document.getElementById("txtHint").innerHTML = "";
					return;
				  }
				  xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("txtHint").innerHTML = this.responseText;
					}
				  };
				  xhttp.open("GET", "gethint.php?q="+str, true);
				  xhttp.send();   
				}
			</script>
		</div>
	</body>
</html>
