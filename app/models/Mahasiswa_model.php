<?php 

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Satria Bagus Indrajati",
    //         "nrp" => "173040020",
    //         "email" => "satria.bagus18@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Indrawansyah Prasetyo",
    //         "nrp" => "123060004",
    //         "email" => "indrawansyahprstyo@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Perencanaan & Wilayah Kota"
    //     ],
    //     [
    //         "nama" => "Michael Herda",
    //         "nrp" => "143030005",
    //         "email" => "michaelhs@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Bella Aprilia H",
    //         "nrp" => "183020019",
    //         "email" => "bellaah@mail.unpas.ac.id",
    //         "jurusan" => "Teknologi Pangan"
    //     ],
    //     [
    //         "nama" => "Virgiawan Ramdhani",
    //         "nrp" => "133010032",
    //         "email" => "vramdhani@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "Adnan Hadiyana",
    //         "nrp" => "163050035",
    //         "email" => "satria.bagus18@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Lingkungan"
    //     ]
    // ];

    private $dbh; //database handler
    private $stmt; //statement

    public function __construct(){
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}



?>