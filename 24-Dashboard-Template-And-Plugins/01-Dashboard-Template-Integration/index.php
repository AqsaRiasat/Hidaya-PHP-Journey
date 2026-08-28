<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Phantom by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="css/main.css" />
	<noscript>
		<link rel="stylesheet" href="css/noscript.css" />
	</noscript>
	<link rel="stylesheet" href="css/js-image-slider.css" />

	<link rel="stylesheet" href="codebase/calendar.css">
	<script type="text/javascript" src="codebase/calendar.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: '#mytextarea', // Yeh line batati hai ke kis Textarea ko editor banana hai
			height: 300,
			menubar: false,
			plugins: 'lists link image charmap preview',
			toolbar: 'undo redo | blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat'
		});
	</script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">

				<!-- Logo -->
				<a href="index.html" class="logo">
					<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!--Slider--->
		<div id="sliderFrame">
			<div id="slider">
				<img src="images/pic01.jpg" alt="Slider Image 1" />
				<img src="images/pic02.jpg" alt="Slider Image 2" />
				<img src="images/pic03.jpg" alt="Slider Image 3" />
				<img src="images/pic04.jpg" alt="Slider Image 4" />
			</div>
		</div>

		<!-- CALENDAR SECTION START -->
		<div style="margin: 40px 0; text-align: center;">
			<h2>Select Date from Calendar</h2>
			<center>
				<div id="calendar_container"></div>
			</center>
		</div>

		<div
			style="margin: 50px 0; max-width: 800px; margin-left: auto; margin-right: auto; padding: 20px; background: #fff; border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
			<h2 style="color: #f2849e; text-align: center; margin-bottom: 20px;">Write Your Post (WYSIWYG Editor)</h2>
			<form method="POST" action="">
				<div class="field">
					<textarea name="editor_content"
						id="mytextarea">Yahan apna paragraph likhein aur bold/italic kar ke test karein...</textarea>
				</div>
				<br>
				<ul class="actions special">
					<li><input type="submit" name="submit_editor" value="Submit Post" class="primary" /></li>
				</ul>
			</form>
		</div>

		<!--insertion form-->
		<div
			style="margin: 30px 0; max-width: 900px; margin-left: auto; margin-right: auto; padding: 20px; background: #f9f9f9; border: 1px dashed #f2849e; border-radius: 8px; color: #333;">
			<h3 style="color: #f2849e;">Add New Student Record</h3>

			<?php
    
    if (isset($_POST['add_student'])) {
        $conn = mysqli_connect("localhost", "root", "", "hitech_db");
        
        $roll = mysqli_real_escape_string($conn, $_POST['roll_no']);
        $name = mysqli_real_escape_string($conn, $_POST['student_name']);
        $course = mysqli_real_escape_string($conn, $_POST['course_name']);
        
        if (!empty($roll) && !empty($name) && !empty($course)) {
            $insert_query = "INSERT INTO students (roll_no, name, course, status) VALUES ('$roll', '$name', '$course', 'Active')";
            if (mysqli_query($conn, $insert_query)) {
                echo "<p style='color: green; font-weight: bold;'>✔ Student successfully added to MySQL database!</p>";
            } else {
                echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
            }
        } else {
            echo "<p style='color: red;'>Please fill all fields!</p>";
        }
        mysqli_close($conn);
    }
    ?>

			<form method="POST" action="">
				<div style="display: flex; gap: 15px; margin-bottom: 15px;">
					<input type="text" name="roll_no" placeholder="Roll No (e.g. 26-CS-04)"
						style="background:#fff; color:#333; border:1px solid #ccc;" required />
					<input type="text" name="student_name" placeholder="Student Name"
						style="background:#fff; color:#333; border:1px solid #ccc;" required />
					<input type="text" name="course_name" placeholder="Course"
						style="background:#fff; color:#333; border:1px solid #ccc;" required />
				</div>
				<input type="submit" name="add_student" value="Add Student to DB" class="primary"
					style="padding: 10px 20px; font-size: 0.8em;" />
			</form>
		</div>
		<!--data table-->
		<div
			style="margin: 50px 0; max-width: 900px; margin-left: auto; margin-right: auto; padding: 20px; background: #fff; border: 1px solid #e0e0e0; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); color: #333;">
			<h2 style="color: #f2849e; text-align: center; margin-bottom: 20px;">Student Records (From MySQL Database)
			</h2>

			<table id="myStudentTable" class="display" style="width:100%">
				<thead>
					<tr style="background: #f2849e; color: #fff;">
						<th>Roll No</th>
						<th>Student Name</th>
						<th>Course</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
            
            $conn = mysqli_connect("localhost", "root", "", "hitech_db");

        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            
            $sql = "SELECT * FROM students";
            $result = mysqli_query($conn, $sql);

            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['roll_no'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['course'] . "</td>";
                    echo "<td><span style='color: green; font-weight: bold;'>" . $row['status'] . "</span></td>";
                    echo "</tr>";
                }
            }
            
        
            mysqli_close($conn);
            ?>
				</tbody>
			</table>
		</div>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="generic.html">Ipsum veroeros</a></li>
				<li><a href="generic.html">Tempus etiam</a></li>
				<li><a href="generic.html">Consequat dolor</a></li>
				<li><a href="elements.html">Elements</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1>This is Phantom, a free, fully responsive site<br />
						template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus
						arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros
						aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
				</header>
				<section class="tiles">
					<article class="style1">
						<span class="image">
							<img src="images/pic01.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Magna</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style2">
						<span class="image">
							<img src="images/pic02.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Lorem</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style3">
						<span class="image">
							<img src="images/pic03.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Feugiat</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style4">
						<span class="image">
							<img src="images/pic04.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Tempus</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style5">
						<span class="image">
							<img src="images/pic05.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Aliquam</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style6">
						<span class="image">
							<img src="images/pic06.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Veroeros</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style2">
						<span class="image">
							<img src="images/pic07.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Ipsum</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style3">
						<span class="image">
							<img src="images/pic08.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Dolor</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style1">
						<span class="image">
							<img src="images/pic09.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Nullam</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style5">
						<span class="image">
							<img src="images/pic10.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Ultricies</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style6">
						<span class="image">
							<img src="images/pic11.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Dictum</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					<article class="style4">
						<span class="image">
							<img src="images/pic12.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Pretium</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
				</section>
			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Get in touch</h2>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="field half">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" placeholder="Message"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send" class="primary" /></li>
						</ul>
					</form>
				</section>
				<section>
					<h2>Follow</h2>
					<ul class="icons">
						<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
						<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
						<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</section>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/browser.min.js"></script>
	<script src="js/breakpoints.min.js"></script>
	<script src="js/util.js"></script>
	<script src="js/main.js"></script>
	<script src="js/js-image-slider.js"></script>
	<script>
		// creating dhtmlxCalendar
		var calendar = new dhx.Calendar("calendar_container");

		<script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script>
			$(document).ready(function() {
				$('#myStudentTable').DataTable({
					"pageLength": 5
				});
    });
	</script>
	</script>

</body>

</html>