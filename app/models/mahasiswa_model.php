<?php


class mMahasiswa_model{
    private $dbh;
    private $stmt;

    public function __construct(){
        $dsn = 'mysql:host = localhost;dbname = phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die ($e->getMessege());
        }
    }
    // private $mhs = [
    //     [
    //         "nama" => "Iis Khaerunnisa",
    //         "NRP" => "193040139",
    //         "email" => "193040139.iis@mal.unpas.ac.id",
    //         "jurusan"=> "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Iis ",
    //         "NRP" => "193040179",
    //         "email" => "193040179.iis@mal.unpas.ac.id",
    //         "jurusan"=> "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Khaerunnisa",
    //         "NRP" => "193040039",
    //         "email" => "193040039.iis@mal.unpas.ac.id",
    //         "jurusan"=> "Teknik Informatika"
    //     ]

    //     ];

        public function getAllMahasiswa(){
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->excute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        }
}