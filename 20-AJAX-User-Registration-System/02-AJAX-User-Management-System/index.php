<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>..:: AJAX CRUD APPLICATION ::..</title>

	<style>
		body {
			background-color: #f0f4f8;
			color: #1a202c;
			font-family: Arial, sans-serif;
		}
		
		h1 {
			color: #1e3a8a;
		}

		fieldset {
			border: 2px solid #cbd5e1;
			background-color: #ffffff;
			border-radius: 8px;
			padding: 15px;
			margin-bottom: 20px;
		}

		legend {
			font-weight: bold;
			color: #1e3a8a;
			padding: 0 10px;
		}

		input[type="text"] {
			width: 900px;
			height: 30px;
			border: 1px solid #cbd5e1;
			border-radius: 4px;
			padding-left: 10px;
		}

		.btn-search {
			background-color: #1e3a8a; 
			color: white;
			padding: 10px 15px;
			border: none;
			border-radius: 6px;
			font-weight: bold;
			cursor: pointer;
		}

		.btn-search:hover {
			background-color: #172554;
		}
	</style>
</head>

<script>
	get_form();
	show_post();
	  
	function get_form(){
		let xhr = null;
		if(window.XMLHttpRequest){
			xhr = new XMLHttpRequest;
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhr.onreadystatechange = function (){
			if(xhr.readyState == 4 && xhr.status == 200 ){
				document.getElementById("get_form").innerHTML = xhr.responseText;
			}
		}
		xhr.open("GET","process.php?action=get_form");
		xhr.send();
	}

	function show_post(){
		let xhr = null;
		if(window.XMLHttpRequest){
			xhr = new XMLHttpRequest;
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhr.onreadystatechange = function (){
			if(xhr.readyState == 4 && xhr.status == 200){
				document.getElementById("show_post").innerHTML = xhr.responseText;
			}
		}
		xhr.open("GET","process.php?action=show_post");
		xhr.send();
	}

	function search_post(){
		var search = document.getElementById("search").value;
		let xhr = null;
		if(window.XMLHttpRequest){
			xhr = new XMLHttpRequest;
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4 && xhr.status == 200){
				document.getElementById("show_post").innerHTML = xhr.responseText;
			}
		}
		xhr.open("GET","process.php?action=show_post&search="+search);
		xhr.send();
	}

	function add_post(){
		var title = document.getElementById("title").value;
		var summary = document.getElementById("summary").value;
		var description = document.getElementById("description").value;

		let xhr = null;
		if(window.XMLHttpRequest){
			xhr = new XMLHttpRequest;
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				document.getElementById("message").innerHTML = xhr.responseText;
				show_post();
				get_form();
			}
		}
		xhr.open("POST","process.php");
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		xhr.send("action=add_post&title="+title+"&summary="+summary+"&description="+description);
	}

	function edit_post(post_id){
		let xhr = null;
		if(window.XMLHttpRequest){
			xhr = new XMLHttpRequest;
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				document.getElementById("get_form").innerHTML = xhr.responseText;
			}
		}
		xhr.open("GET","process.php?action=get_edit_form&post_id="+post_id);
		xhr.send();
	}

	function update_post(post_id){
		var title = document.getElementById("title").value;
		var summary = document.getElementById("summary").value;
		var description = document.getElementById("description").value;

		let xhr = null;
		if(window.XMLHttpRequest){
			xhr = new XMLHttpRequest;
		}else{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				document.getElementById("message").innerHTML = xhr.responseText;
				show_post();
				get_form();
			}
		}
		xhr.open("POST","process.php");
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		xhr.send("action=update_post&post_id="+post_id+"&title="+title+"&summary="+summary+"&description="+description);
	}

	function delete_post(post_id){
		if(confirm("Do You Really Want To Delete Post ID: " + post_id)) {
			let xhr = null;
			if(window.XMLHttpRequest){
				xhr = new XMLHttpRequest;
			}else{
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xhr.onreadystatechange = function(){
				if (xhr.readyState == 4  && xhr.status == 200){
					document.getElementById("message").innerHTML = xhr.responseText;
					show_post();
				}
			}
			xhr.open("GET","process.php?action=delete_post&post_id="+post_id);
			xhr.send();
		}
	}

	function cancle(){
		document.getElementById("title").value = "";
		document.getElementById("summary").value = "";
		document.getElementById("description").value = "";
	}
</script>

<body>

	<center>
		<h1><i>..:: AJAX CRUD APPLICATION ::..</i></h1>
		<hr/>

		<div id="message"></div>
		<div id="get_form"></div>

		<br>
		<fieldset>
			<legend>Search</legend>
			<table cellpadding="3">
				<tr>
                  <td style="font-size: 20px; font-weight: bold;">Search</td>
                  <td><input type="text" name="search" id="search"></td>
                  <td>
                  	<button onclick="search_post()" class="btn-search">Search</button>
                  	<button onclick="show_post()" class="btn-search">Show All</button>
                  </td>
				</tr>
			</table>
		</fieldset>

		<br>
		<div id="show_post"></div>
	</center>
	
</body>
</html>