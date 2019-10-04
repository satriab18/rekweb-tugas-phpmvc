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

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db=new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', :nama, :nrp, :email, :jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data){
        $query = "UPDATE mahasiswa
                    SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}



?>