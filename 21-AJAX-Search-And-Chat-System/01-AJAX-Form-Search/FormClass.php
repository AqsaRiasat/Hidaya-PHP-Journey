<?php
session_start();

class FormClass {
    public $conn;

    public function __construct() {
        include('conn.php');
        $this->conn = $conn;
    }

    //  Keyword se posts find kro
    public function searchPosts($keyword) {
        $sql = "SELECT * FROM posts WHERE title LIKE '%$keyword%'";
        return mysqli_query($this->conn, $sql);
    }

    // ID se single post lo
    public function getPostById($id) {
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        return mysqli_query($this->conn, $sql);
    }
}
?>