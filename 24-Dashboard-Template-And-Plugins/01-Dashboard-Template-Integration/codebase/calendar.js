
if (typeof dhx === "undefined") {
    var dhx = {
        Calendar: function(containerId) {
            var container = document.getElementById(containerId);
            if(container) {
                var today = new Date();
                var html = "<div style='border:1px solid #ccc; padding:15px; width:250px; text-align:center; background:#fff; color:#333; border-radius:4px;'>";
                html += "<h3 style='margin:0 0 10px 0; color:#f2849e;'>" + today.toLocaleString('default', { month: 'long' }) + " " + today.getFullYear() + "</h3>";
                html += "<table style='width:100%; border-collapse:collapse;'>";
                html += "<tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr>";
                html += "<tr><td style='color:#ccc;'>28</td><td style='color:#ccc;'>29</td><td style='color:#ccc;'>30</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>";
                html += "<tr><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td></tr>";
                html += "<tr><td>12</td><td>13</td><td>14</td><td style='background:#f2849e; color:#fff; font-weight:bold; border-radius:50%;'>15</td><td>16</td><td>17</td><td>18</td></tr>";
                html += "</table></div>";
                container.innerHTML = html;
            }
        }
    };
}