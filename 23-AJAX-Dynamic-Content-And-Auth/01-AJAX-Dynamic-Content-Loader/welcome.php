<!DOCTYPE html>
<html>
<head>
    <title>Welcome Dashboard</title>
    <style>
        body { 
            background-color: white; 
            font-family: sans-serif; 
            margin: 20px; 
        }
        .main-container { 
            width: 800px; 
            background-color: #5b9bd5; 
            min-height: 500px; 
            margin: 0 auto; 
            padding: 20px; 
            color: white; 
        }
        .sidebar { 
            float: left; 
            width: 20%; 
        }
        .sidebar button { 
            display: block; 
            color: #ffc000; 
            background: none;
            border: none;
            margin-bottom: 10px; 
            font-weight: bold; 
            cursor: pointer;
            font-size: 16px;
        }
        .content-area { 
            float: right; 
            width: 75%; 
            min-height: 400px; 
        }
        .email-table { 
            width: 100%; 
            border-collapse: collapse; 
        }
        .email-table th, .email-table td { 
            border: 1px solid white; 
            padding: 8px; 
            color: black; 
        }
        .form-table {
            width: 100%;
        }
        .form-table input, .form-table textarea { 
            width: 95%; 
            padding: 5px; 
        }
        .btn { 
            background-color: #d9d9d9; 
            padding: 5px 15px; 
            color: black; 
            cursor: pointer; 
        }
        .logout-btn { 
            float: right; 
            color: white; 
            background-color: red; 
            padding: 5px 10px; 
            text-decoration: none; 
        }
        .clear {
            clear: both;
        }
    </style>
    <script>
        function checkLogin() {
            var myCookie = document.cookie;
            if (myCookie.indexOf("user_login=") == -1) {
                window.location.href = "login_system.php?msg=Please Login First!";
            }
        }

        function loadPage(pageName) {
            checkLogin();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content-area").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "load_content.php?page=" + pageName, true);
            xmlhttp.send();
        }

        function sendEmail() {
            checkLogin();
            var form = document.getElementById("emailForm");
            var formData = new FormData(form);
            formData.append("send_email", "1");

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content-area").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "load_content.php?page=compose", true);
            xmlhttp.send(formData);
        }

        function saveDraft() {
            checkLogin();
            var form = document.getElementById("emailForm");
            var formData = new FormData(form);
            formData.append("draft_email", "1");

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content-area").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "load_content.php?page=compose", true);
            xmlhttp.send(formData);
        }

        function deleteEmails(pageName) {
            checkLogin();
            var form = document.getElementById("emailListForm");
            var formData = new FormData(form);
            formData.append("delete_emails", "1");

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("content-area").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("POST", "load_content.php?page=" + pageName, true);
            xmlhttp.send(formData);
        }

        window.onload = function() {
            checkLogin();
            loadPage('compose');
        };
    </script>
</head>
<body>

<div class="main-container">
    <a href="cookie_destroy.php" class="logout-btn">Logout</a>
    <h2>Email System</h2>
    <hr/>

    <div class="sidebar">
        <button onclick="loadPage('compose')">Compose Email</button>
        <button onclick="loadPage('inbox')">Inbox</button>
        <button onclick="loadPage('draft')">Drafts</button>
        <button onclick="loadPage('sent')">Sent</button>
        <button onclick="loadPage('trash')">Trash</button>
    </div>

    <div id="content-area" class="content-area">
        </div>
    <div class="clear"></div>
</div>

</body>
</html>