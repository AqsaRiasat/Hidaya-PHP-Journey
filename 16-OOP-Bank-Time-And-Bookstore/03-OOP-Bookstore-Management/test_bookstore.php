<!DOCTYPE html>
<html>
<head>
    <title>Bookstore Assignment</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 30px;
            margin: 0;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .test-case {
            width: 500px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 15px 20px;
            margin: 20px auto;
            border-radius: 6px;
        }
        .test-case h3 {
            margin-top: 0;
            color: #0056b3;
            font-size: 16px;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
        .output-text {
            font-size: 15px;
            color: #444;
            line-height: 1.5;
            background-color: #fafafa;
            padding: 10px;
            border-left: 4px solid #0056b3;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h2>Bookstore System Test</h2>

    <?php
    require_once("Book.php");

    echo "<div class='test-case'>";
    echo "<h3>Test 1: Testing Author Class</h3>";
    echo "<div class='output-text'>";
   
    $author1 = new Author("Peter Jones", "peter@somewhere.com", "m");
    $author1->printAuthor();
    echo "</div></div>";

    echo "<div class='test-case'>";
    echo "<h3>Test 2: Testing Book Class Using Inheritance</h3>";
    echo "<div class='output-text'>";
  
    $book1 = new Book("PHP OOP Secrets", "Peter Jones", "peter@somewhere.com", "m", 45.50, 12);
    $book1->printBook();
    echo "</div></div>";

    echo "<div class='test-case'>";

    echo "<h3>Test 3: Testing getAuthorName() Method</h3>";
    echo "<div class='output-text'>";

    echo "Author of the book is: " . $book1->getAuthorName() . "<br />";
    echo "</div></div>";

    echo "<div class='test-case'>";
    echo "<h3>Test 4: Testing Setters and Price Validation</h3>";

    echo "<div class='output-text'>";
    $book1->setPrice(-10); 

    echo "Price after invalid update: " . $book1->getPrice() . "<br />";
    $book1->setPrice(59.99); 

    echo "Price after valid update: " . $book1->getPrice() . "<br />";
    echo "</div></div>";
    ?>

</body>
</html>