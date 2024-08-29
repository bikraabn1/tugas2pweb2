<?php

// Mendefinisikan kelas DB untuk mengatur koneksi ke database.
class DB {
    // Properti private untuk menyimpan informasi koneksi database.
    private $host = 'localhost'; // Nama host database.
    private $user = "root"; // Nama pengguna database (default pada XAMPP atau LAMP).
    private $pass = ""; // Kata sandi pengguna database (default kosong pada XAMPP atau LAMP).
    private $db = "db_siwali"; // Nama database yang akan digunakan.
    
    // Properti protected untuk menyimpan objek koneksi database.
    protected $conn;

    // Konstruktor kelas DB yang akan dijalankan saat instansiasi objek.
    public function __construct(){
        // Membuat koneksi ke database menggunakan kelas mysqli dan menyimpannya di properti $conn.
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

        // Mengecek apakah terjadi kesalahan saat melakukan koneksi ke database.
        if ($this->conn->error) {
            // Jika terjadi kesalahan, program akan dihentikan dan menampilkan pesan error.
            die("Connection failed: " . $this->conn->error);
        }
    }
}

// Mendefinisikan interface Read yang akan digunakan untuk mengimplementasikan metode read().
interface Read {
    public function read(); // Metode read() harus diimplementasikan oleh kelas yang mengimplementasikan interface ini.
}

// Membuat instansiasi objek dari kelas DB untuk memulai koneksi ke database.
$db = new DB();

