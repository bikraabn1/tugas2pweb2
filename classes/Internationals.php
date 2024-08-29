<?php 
// Mengimpor file "DB.php" yang berisi kelas DB.
require_once "DB.php";

// Mendefinisikan kelas Internationals yang mewarisi kelas DB dan mengimplementasikan interface Read.
class Internationals extends DB implements Read {

    // Konstruktor kelas Internationals.
    public function __construct(){
        // Memanggil konstruktor dari kelas induk (DB) untuk menginisialisasi koneksi database.
        parent::__construct();
    }

    // Implementasi metode read() dari interface Read.
    public function read(){
        // Mendefinisikan query SQL untuk mengambil data dari tabel "student" dan "achievements".
        // Query ini melakukan JOIN antara tabel "student" dan "achievements" berdasarkan id_achievements.
        // Hanya data siswa yang memiliki id_achievements = 5 yang akan diambil.
        $sql = "SELECT student.*, achievements.achievement_type AS nama_prestasi 
                FROM student 
                JOIN achievements ON student.id_achievements = achievements.id_achievements 
                WHERE student.id_achievements = 5";
        
        // Menjalankan query SQL dan mengembalikan hasilnya.
        return $this->conn->query($sql);
    }
}

// Membuat instansiasi objek dari kelas Internationals.
$Internationals = new Internationals();

// Memanggil metode read() pada objek $Internationals dan menyimpan hasilnya ke dalam variabel $datas.
$datas = $Internationals->read();
