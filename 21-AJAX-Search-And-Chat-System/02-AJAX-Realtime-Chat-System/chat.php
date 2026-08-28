<?php
session_start();
require_once('general.php');
$general = new General();

if (!isset($_SESSION['user'])) {
    header('location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $general->site_title(); ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fff1f2 0%, #ffe4e6 100%);
            margin: 0;
            padding: 20px;
            color: #333;
        }
        
        h1 {
            color: #db2777; 
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 5px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.05);
        }
        
        hr {
            border: 0;
            height: 1px;
            background: #fbcfe8;
            margin: 15px 0;
        }

        .welcome-text {
            text-align: right;
            font-size: 15px;
            color: #4b5563;
            margin-bottom: 15px;
        }

        .btn-logout {
            background: #f43f5e;
            color: white;
            padding: 6px 14px;
            border-radius: 20px; 
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            box-shadow: 0 2px 4px rgba(244, 63, 94, 0.2);
            transition: all 0.2s ease;
        }
        .btn-logout:hover {
            background: #e11d48;
            box-shadow: 0 4px 6px rgba(244, 63, 94, 0.3);
        }

        .chat-main-div {
            width: 76%; 
            border: none; 
            height: 520px; 
            float: left;
            background-color: #ffffff;
            border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(219, 39, 119, 0.05);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .messages-display-div {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #fffdfd; 
            background-image: radial-gradient(#fbcfe8 1px, transparent 1px); 
            background-size: 16px 16px;
        }

        .my-msg-card, .other-msg-card {
            max-width: 80%;
            margin-bottom: 12px;
        }
        
        .bubble-table {
            border-collapse: collapse;
            width: auto;
        }

        .my-msg-card {
            background: #ec4899; 
            color: white !important;
            padding: 10px 16px;
            border-radius: 18px 18px 2px 18px; 
            box-shadow: 0 3px 8px rgba(236, 72, 153, 0.2);
        }
        .my-msg-card .text-blue {
            color: #fce7f3 !important; 
        }
        .my-msg-card .text-dark {
            color: #ffffff !important;
        }
        .my-msg-card .time-text {
            color: #fff1f2 !important;
            opacity: 0.8;
        }

        .other-msg-card {
            background: #ffffff; 
            color: #1f2937;
            padding: 10px 16px;
            border-radius: 18px 18px 18px 2px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.02);
            border: 1px solid #fce7f3;
        }
        .other-msg-card .text-dark {
            color: #1f2937 !important;
        }
        .other-msg-card b.text-dark {
            color: #db2777 !important; 
        }
        .other-msg-card .time-text {
            color: #9ca3af !important;
        }

        .time-text {
            font-size: 10px;
            display: block;
            margin-top: 4px;
        }

        .input-table {
            width: 100%;
            background: #ffffff;
            padding: 10px;
            border-top: 1px solid #fce7f3;
        }
        
        textarea#message {
            width: 95%;
            padding: 12px;
            border: 2px solid #fbcfe8;
            border-radius: 15px;
            font-family: inherit;
            resize: none;
            outline: none;
            transition: border-color 0.2s;
        }
        textarea#message:focus {
            border-color: #ec4899;
        }

        .btn-send {
            background: #ec4899;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 15px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(236, 72, 153, 0.15);
            transition: background 0.2s;
        }
        .btn-send:hover {
            background: #db2777;
        }

        .online-users-sidebar {
            width: 20%;
            float: right;
            background-color: #ffffff;
            height: 520px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(219, 39, 119, 0.05);
            overflow: hidden;
        }

        .sidebar-heading {
            background: #db2777; 
            color: white;
            margin: 0;
            padding: 15px;
            text-align: center;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .online-users-box {
            padding: 15px;
            height: 440px;
            overflow-y: auto;
        }

        .online-user-item {
            padding: 8px 12px;
            background: #fff5f7;
            border-radius: 12px;
            margin-bottom: 8px;
            transition: background 0.2s;
        }
        .online-user-item:hover {
            background: #fce7f3;
        }

        .online-dot {
            height: 10px;
            width: 10px;
            background-color: #10b981; 
            border-radius: 50%;
            display: inline-block;
            margin-right: 8px;
            box-shadow: 0 0 8px #10b981;
        }
    </style>
    <script>
        function send_message() {
            var message = document.getElementById("message").value;
            if (message.trim() == "") return;

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("message").value = "";
                    show_messages();
                }
            }
            xhr.open("GET", "process.php?action=send_message&message=" + encodeURIComponent(message));
            xhr.send();
        }

        function show_messages() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var msgBox = document.getElementById("show_messages");
                    var scrollControl = msgBox.scrollHeight - msgBox.clientHeight <= msgBox.scrollTop + 50;
                    msgBox.innerHTML = xhr.responseText;
                    if (scrollControl) {
                        msgBox.scrollTop = msgBox.scrollHeight;
                    }
                }
            }
            xhr.open("GET", "process.php?action=show_messages");
            xhr.send();
        }

        setInterval(function() {
            show_messages();
            show_online_users();
        }, 1000);

        function show_online_users() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("online_users_box").innerHTML = xhr.responseText;
                }
            }
            xhr.open("GET", "process.php?action=show_online_users");
            xhr.send();
        }
    </script>
</head>
<body>
    <h1><i><?php echo $general->site_title(); ?></i></h1>

    <div style="display: flex; justify-content: space-between; align-items: center; max-width: 98%; margin: 10px auto 20px auto; background: rgba(255, 255, 255, 0.5); padding: 10px 20px; border-radius: 50px; backdrop-filter: blur(5px);">
        <span style="font-size: 16px; color: #4b5563; font-weight: 500;">
            Welcome, <b style="color: #db2777; font-size: 18px;"><?php echo $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name']; ?></b> 
        </span>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

    <div class="chat-main-div">
        <div id="show_messages" class="messages-display-div"></div>
        <table class="input-table">
            <tr>
                <td>
                    <textarea id="message" placeholder="Type a message... " rows="2"></textarea>
                </td>
                <td style="width: 80px; text-align: center;">
                    <button onclick="send_message()" class="btn-send">Send</button>
                </td>
            </tr>
        </table>
    </div>

    <div class="online-users-sidebar">
        <h3 class="sidebar-heading">Online Friends</h3>
        <div id="online_users_box" class="online-users-box"></div>
    </div>
</body>
</html>