<!DOCTYPE html>
<html>
<head>
    <title>Scientific Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        #calculator-card {
            background-color: white;
            padding: 25px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.05);
            width: 440px;
        }

        #output {
            width: 100%;
            height: 60px;
            font-size: 32px;
            text-align: right;
            padding: 5px 10px;
            margin-bottom: 20px;
            background-color: white;
            color: #212121;
            border: 1px solid #bcbcbc;
            box-sizing: border-box;
        }

        .button-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .btn {
            width: 54px;
            height: 38px;
            font-size: 13px;
            cursor: pointer;
            border: 1px solid #dcdcdc;
            border-radius: 3px;
            background-color: #f1f1f1;
            color: #444;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .num-btn {
            background-color: #fcfcfc;
            font-weight: normal;
        }

        .equal-btn {
            background-color: #4285f4;
            color: white;
            border: 1px solid #4285f4;
            font-weight: bold;
            font-size: 16px;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div id="calculator-card">
        <input type="text" id="output" value="0" readonly>

        <div class="button-row">
            <button class="btn" onclick="clickBtn('Rad')">Rad</button>
            <button class="btn" onclick="clickBtn('')"> </button>
            <button class="btn" onclick="clickBtn('!')">x!</button>
            <button class="btn" onclick="clickBtn('(')">(</button>
            <button class="btn" onclick="clickBtn(')')">)</button>
            <button class="btn" onclick="clickBtn('%')">%</button>
            <button class="btn" onclick="clearData()">AC</button>
        </div>

        <div class="button-row">
            <button class="btn" onclick="clickBtn('Inv')">Inv</button>
            <button class="btn" onclick="findSin()">sin</button>
            <button class="btn" onclick="clickBtn('ln')">In</button>
            <button class="btn num-btn" onclick="clickBtn('7')">7</button>
            <button class="btn num-btn" onclick="clickBtn('8')">8</button>
            <button class="btn num-btn" onclick="clickBtn('9')">9</button>
            <button class="btn" onclick="clickBtn('/')">÷</button>
        </div>

        <div class="button-row">
            <button class="btn" onclick="findPi()">π</button>
            <button class="btn" onclick="findCos()">cos</button>
            <button class="btn" onclick="findLog()">log</button>
            <button class="btn num-btn" onclick="clickBtn('4')">4</button>
            <button class="btn num-btn" onclick="clickBtn('5')">5</button>
            <button class="btn num-btn" onclick="clickBtn('6')">6</button>
            <button class="btn" onclick="clickBtn('*')">×</button>
        </div>

        <div class="button-row">
            <button class="btn" onclick="clickBtn('e')">e</button>
            <button class="btn" onclick="findTan()">tan</button>
            <button class="btn" onclick="findRoot()">√</button>
            <button class="btn num-btn" onclick="clickBtn('1')">1</button>
            <button class="btn num-btn" onclick="clickBtn('2')">2</button>
            <button class="btn num-btn" onclick="clickBtn('3')">3</button>
            <button class="btn" onclick="clickBtn('-')">-</button>
        </div>

        <div class="button-row">
            <button class="btn" onclick="clickBtn('Ans')">Ans</button>
            <button class="btn" onclick="clickBtn('EXP')">EXP</button>
            <button class="btn" onclick="clickBtn('^')">xʸ</button>
            <button class="btn num-btn" style="width: 54px;" onclick="clickBtn('0')">0</button>
            <button class="btn num-btn" onclick="clickBtn('.')">.</button>
            <button class="btn equal-btn" onclick="getResult()">=</button>
            <button class="btn" onclick="clickBtn('+')">+</button>
        </div>
    </div>

    <script>
        var isCalculated = false;

        function clickBtn(val) {
            var txt = document.getElementById("output");
            if (txt.value == "0" || isCalculated) {
                txt.value = val;
                isCalculated = false;
            } else {
                txt.value = txt.value + val;
            }
        }

        function clearData() {
            document.getElementById("output").value = "0";
            isCalculated = false;
        }

        function getResult() {
            try {
                var text = document.getElementById("output").value;
                var ans = eval(text);
                document.getElementById("output").value = ans;
                isCalculated = true;
            } catch (err) {
                document.getElementById("output").value = "Error";
                isCalculated = true;
            }
        }

        function findRoot() {
            var n = document.getElementById("output").value;
            var ans = Math.sqrt(eval(n));
            document.getElementById("output").value = ans;
            isCalculated = true;
        }

        function findLog() {
            var n = document.getElementById("output").value;
            var ans = Math.log(eval(n));
            document.getElementById("output").value = ans;
            isCalculated = true;
        }

        function findPi() {
            var txt = document.getElementById("output").value;
            if (txt == "0" || isCalculated) {
                document.getElementById("output").value = Math.PI;
            } else {
                document.getElementById("output").value += Math.PI;
            }
            isCalculated = false;
        }

        function findSin() {
            var n = document.getElementById("output").value;
            var deg = eval(n);
            var rad = deg * (Math.PI / 180);
            var ans = Math.sin(rad);
            document.getElementById("output").value = ans;
            isCalculated = true;
        }

        function findCos() {
            var n = document.getElementById("output").value;
            var deg = eval(n);
            var rad = deg * (Math.PI / 180);
            var ans = Math.cos(rad);
            document.getElementById("output").value = ans;
            isCalculated = true;
        }

        function findTan() {
            var n = document.getElementById("output").value;
            var deg = eval(n);
            var rad = deg * (Math.PI / 180);
            var ans = Math.tan(rad);
            document.getElementById("output").value = ans;
            isCalculated = true;
        }
    </script>

</body>
</html>