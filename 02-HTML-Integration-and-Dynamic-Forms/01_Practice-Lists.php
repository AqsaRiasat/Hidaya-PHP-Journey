<?php
echo "<h1>HTML Lists Practice</h1>";
echo "<p>Exploring Ordered, Unordered, Nested, and Definition lists.</p>";
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01_Practice-Lists</title>
</head>
<body>

<h2>Unorderd List In HTML</h2>
    <ul type="disc">
        <li>Apple</li>
    <li>Banana</li>
    <li>Mango</li>
    <li>Potato</li>
    <li>Tomato</li>
    <li>Onion</li>
    <li>Red</li>
    <li>Green</li>
    </ul>

    <ul type="square">
        <li>Laptop</li>
    <li>Mobile</li>
    <li>Tablet</li>
    <li>Pen</li>
    <li>Pencil</li>
    <li>Eraser</li>
    <li>HTML</li>
    <li>CSS</li>
    </ul>

    <ul type="circle">
        <li>Tea</li>
    <li>Coffee</li>
    <li>Juice</li>
    <li>Maths</li>
    <li>Science</li>
    <li>English</li>
    <li>Eraser</li>
    <li>HTML</li>
    </ul>

    <h2>Ordered List</h2>
    <ol type="1">
        <li>Eating</li>
    <li>Sleeping</li>
    <li>Coding</li>
    <li>Pakistan</li>
    <li>Australia</li>
    <li>England</li>
    <li>Burger</li>
    <li>Pizza</li>
    </ol>

    <ol type="A">
        <li>Eating</li>
    <li>Sleeping</li>
    <li>Coding</li>
    <li>Pakistan</li>
    <li>Australia</li>
    <li>England</li>
    <li>Burger</li>
    <li>Pizza</li>
    </ol>

    <ol type="I">
        <li>Eating</li>
    <li>Sleeping</li>
    <li>Coding</li>
    <li>Pakistan</li>
    <li>Australia</li>
    <li>England</li>
    <li>Burger</li>
    <li>Pizza</li>
    </ol>

    <h2>Nested orederd lists</h2>

    <ol>
        <li>Make tea
          <ol type="i">
            <li>boil water</li>
            <li>Add sugar</li>
          </ol>
        </li>
    </ol>

    <ol type="A">
        <li>Schooling
            <ol type="1">
                <li>Primary</li>
                <li>Secondary</li>
            </ol>
        </li>
    </ol>

    <ol type="I">
        <li> Web project
            <ol type="a">
                <li>Coding</li>
                <li>Designing</li>
            </ol>
        </li>
    </ol>

    <ol>
        <li>Pakistan
            <ol type="A">
                <li>Karachi</li>
                <li>Lahore</li>
            </ol>
        </li>
    </ol>

    <ol type="1">
        <li>Routine
            <ol type="i">
                <li>Breakfast</li>
                <li>Lunch</li>
            </ol>
        </li>
    </ol>

    <h2>Unordered lists Nested</h2>

    <ul>
        <li>Fruits
            <ul>
                <li>Mango</li>
                <li>Banana</li>
            </ul>
        </li>
    </ul>

    <ul type="square">
        <li>Laptop
            <ul type="circle">
                <li>Dell</li>
                <li>HP</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li>
            <ul type="disc">
                <li>T-shirts</li>
                <li>Shorts</li>
            </ul>
        </li>
    </ul>

    <ul type="circle">
        <li>Apps
            <ul type="square">
                <li>Facebook</li>
                <li>WhatsApp</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li>Dark Colors
            <ul>
                <li>Navy Blue</li>
                <li>Yellow</li>
            </ul>
        </li>
    </ul>

    <h2>Nested definition list</h2>
    <dl>
        <dt>Music</dt>
        <dd>Instruments
            <dt>Guitar</dt>
            <dd>Strings</dd>
        </dd>
    </dl>

    <dl>
        <dt>Winter</dt>
        <dd>Clothes
            <dl>
                <dt>Jackets </dt>
                <dd>Leather</dd>
            </dl>
        </dd>
    </dl>

    <dl>
    <dt>Forest</dt>
    <dd>Trees
        <dl>
            <dt>Pine</dt>
            <dd>Leaves</dd>
        </dl>
    </dd>
</dl>

<dl>
    <dt>Cricket</dt>
    <dd>Equipment
        <dl>
            <dt>Bat</dt>
            <dd>Willow</dd>
        </dl>
    </dd>
</dl>


<dl>
    <dt>Kitchen</dt>
    <dd>Tools
        <dl>
            <dt>Knife</dt>
            <dd>Steel</dd>
        </dl>
    </dd>
</dl>
    

<h2>Definition List</h2>
<dl>
    <dt>Keyboard</dt>
    <dd>An input device used for typing.</dd>
</dl>

<dl>
    <dt>Camera</dt>
    <dd>A device used to capture photos and videos.</dd>
</dl>

<dl>
    <dt>Oxygen</dt>
    <dd>A gas that humans need to breathe.</dd>
</dl>

<dl>
    <dt>Desert</dt>
    <dd>A dry area of land with very little water.</dd>
</dl>

<dl>
    <dt>Ocean</dt>
    <dd>A very large body of salt water.</dd>
</dl>
</body>
</html>

</html>