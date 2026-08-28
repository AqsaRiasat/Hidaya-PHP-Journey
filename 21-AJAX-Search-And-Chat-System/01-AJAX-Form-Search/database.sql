CREATE DATABASE google_search;
USE google_search;


CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);


INSERT INTO posts (title, description) VALUES 
('php stands for', 'PHP stands for Hypertext Preprocessor. It is a widely-used open source server-side scripting language.'),
('php w3schools', 'W3Schools PHP tutorial provides easy to learn code examples and web development steps for students.'),
('php interview questions', 'Common PHP interview questions include OOPs concepts, sessions, cookies, and database connectivity.'),
('php mysql connection', 'To connect PHP with MySQL, we use the mysqli_connect() function with host, username, password, and db name.'),
('javascript ajax tutorial', 'AJAX allows web pages to be updated asynchronously by exchanging data with a web server behind the scenes.');
