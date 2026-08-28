<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <style>
        h1 {
            text-align: center;
            color: #a91079;
        }

        .full-width {
            width: 100%;
            padding: 20px;
            font-size: 50px;
            text-align: center;
            background-color: #570a57;
            color: #fcc5ff;
            border: 2px solid #a91079;
            border-radius: 10px;
        }

        .btn {
            padding: 15px 30px;
            font-size: 20px;
            cursor: pointer;
            margin: 5px;
            color: white;
            border: none;
        }

        .set-btn { background-color: #a91079; }
        .start-btn { background-color: #570a57; }
        .stop-btn { background-color: #440044; }
    </style>
</head>
<body>

    <h1>Countdown Timer</h1>
    <input type="text" id="display" class="full-width" value="0" disabled>

    <br><br>

    <div style="text-align: center;">
        <button class="btn set-btn" onclick="setTimer()">Set Time</button>
        <button class="btn start-btn" onclick="startTimer()">Start</button>
        <button class="btn stop-btn" onclick="stopTimer()">Stop</button>
    </div>

    <script>
        var time;
        var timerId = null;

        function setTimer() {
            time = prompt("Kitne seconds ka timer lagana hai?");
            document.getElementById("display").value = time;
        }

        function startTimer() {
            if (timerId == null) {
                timerId = setInterval(start, 1000);
            }
        }

        function start() {
            if (time > 0) {
                time--;
                document.getElementById("display").value = time;
            } else {
                stopTimer();
                alert("Time's Up!");
            }
        }

        function stopTimer() {
            clearInterval(timerId);
            timerId = null;
        }
    </script>

</body>
</html>