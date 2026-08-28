<?php

class Author {
    private $name;
    private $email;
    private $gender;

    public function __construct($n, $e, $g) {
        $this->name = $n;
        $this->email = $e;
        $this->gender = $g;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $this->email = $e;
    }

    public function getGender() {
        return $this->gender;
    }

    public function printAuthor() {
        echo $this->name . " (" . $this->gender . ") at " . $this->email . "<br />";
    }
}
?>