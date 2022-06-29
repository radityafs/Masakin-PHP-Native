<?php

/*
    File ini digunakan untuk mengakses eksekusi / query ke database 
*/


class DatabaseHandler
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "masakin");
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
            die();
        }
    }

    public function executeQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        return $result;
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}
