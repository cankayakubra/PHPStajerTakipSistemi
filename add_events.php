<?php
//include("baglanti1.php");
$title= $_POST['title'];
$start= $_POST['start'];
$end= $_POST['end'];
  private $db;
    private $dsn;
    private $user;
    private $password;

 function __construct() {       
        $this->dsn = 'mysql:host=localhost;dbname=ebb;charset=utf8';
        $this->user = 'root';
        $this->password = '';
    }

    private function baglantiAc() {
        try { $this->db = new PDO($this->dsn, $this->user, $this->password); }
        catch (PDOException $e) { echo 'Veritabanı bağlantısı başarısız oldu: ' . $e->getMessage(); }
    }

    private function baglantiKapat() {
        $this->db = null;
    }

?>