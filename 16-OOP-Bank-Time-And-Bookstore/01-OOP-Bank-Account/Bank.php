<?php

class Bank {
    protected $conn;
    protected $name;
    protected $email;
    protected $phone;
    protected $account;
    protected $balance;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "bank_db");
        if (!$this->conn) {
            die("Connection Failed: " . mysqli_connect_error());
        }
    }

    public function user_information($n, $e, $p, $a, $b) {
        $this->name = $n;
        $this->email = $e;
        $this->phone = $p;
        $this->account = $a;
        $this->balance = $b;

        $sql = "INSERT INTO accounts (full_name, email, phone_number, account_number, bank_balance) 
                VALUES ('$n', '$e', '$p', '$a', '$b')";
        
        mysqli_query($this->conn, $sql);
    }

    public function deposit($a, $amount) {
        $sql = "UPDATE accounts SET bank_balance = bank_balance + $amount WHERE account_number = '$a'";
        mysqli_query($this->conn, $sql);
    }

    public function withdraw($a, $amount) {
        $check = "SELECT bank_balance FROM accounts WHERE account_number = '$a'";
        $res = mysqli_query($this->conn, $check);
        $row = mysqli_fetch_assoc($res);

        if ($row['bank_balance'] >= $amount) {
            $sql = "UPDATE accounts SET bank_balance = bank_balance - $amount WHERE account_number = '$a'";
            mysqli_query($this->conn, $sql);
            return true;
        } else {
            echo "<script>alert('Insufficient Balance!');</script>";
            return false;
        }
    }

    public function show_user_account_information($a) {
        $sql = "SELECT * FROM accounts WHERE account_number = '$a'";
        $res = mysqli_query($this->conn, $sql);
        
        if (mysqli_num_rows($res) > 0) {
            $row = mysqli_fetch_assoc($res);
            
            echo "<div class='receipt-box'>";
            echo "<h4>ACCOUNT DETAILS</h4>";
            echo "Full Name: ........................ " . $row['full_name'] . "<br />";
            echo "Email: ............................ " . $row['email'] . "<br />";
            echo "Phone Number: .................... " . $row['phone_number'] . "<br />";
            echo "Bank Account Number: ........... " . $row['account_number'] . "<br />";
            echo "Bank Balance: .................. " . $row['bank_balance'] . "<br />";
            echo "</div>";
        }
    }
}
?>