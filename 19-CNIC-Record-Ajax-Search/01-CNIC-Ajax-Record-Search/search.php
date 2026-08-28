<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registry Search Link</title>
	<style>
		body {
			background: #eef2f3;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			text-align: center;
		}

		.header-title {
			background: #4a148c;
			color: white;
			padding: 20px;
			border-bottom: 5px solid #7c4dff;
		}

		.search-box {
			width: 420px;
			background: white;
			padding: 25px;
			border-radius: 12px;
			margin: 30px auto;
			box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
		}

		.search-box input[type="text"] {
			width: 70%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		.search-box button {
			padding: 8px 15px;
			background: #7c4dff;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		.output-table {
			background: #e8f5e9;
			width: 100%;
			border-collapse: collapse;
			margin-top: 15px;
			text-align: left;
		}

		.output-table td {
			padding: 12px;
			border: 1px solid #004d40;
		}

		.error-alert {
			color: #b71c1c;
			font-weight: bold;
			margin-top: 25px;
			font-size: 18px;
		}

		.avatar {
			width: 110px;
			height: 110px;
			object-fit: cover;
			border: 2px solid #4a148c;
			border-radius: 4px;
		}
	</style>
	<script>
		function lookupMember() {
			let searchKey = document.getElementById("search_input").value;
			if (searchKey == "") {
				alert("Please enter identity number");
				return;
			}

			let req = new XMLHttpRequest();
			req.onreadystatechange = function () {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById("display_panel").innerHTML = req.responseText;
				}
			}
			req.open("GET", "process.php?id_number=" + encodeURIComponent(searchKey), true);
			req.send();
		}
	</script>
</head>

<body>

	<h2 class="header-title">Member Verification Panel</h2>

	<div class="search-box">
		<input type="text" id="search_input" placeholder="Enter Identity / CNIC Number">
		<button onclick="lookupMember()">Verify</button>
	</div>

	<div id="display_panel"></div>

</body>

</html>