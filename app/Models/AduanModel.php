<?php

namespace App\Models;

use CodeIgniter\Model;

class AduanModel extends Model
{
    protected $table = "aduan";
    protected $useTimestamps = true;
    protected $useAutoIncrement = true;
    protected $primaryKey = 'id';
    protected $createdField = 'create_at';
    protected $updatedField = 'update_at';
    protected $dataFormat = 'datetime';
    protected $allowedFields = ['user_id', 'judul', 'date', 'kategori', 'nama', 'alamat', 'nik', 'body', 'image', 'status', 'judul_image', 'tanggapan'];


    public function getAduan($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM aduan WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array
        $data = $query->getResultArray();
        // Kembalikan hasil kueri ke kontroller
        return $data;
    }

    public function getLogin($id)
    {
        // pembuatan query
        $sql = "SELECT * FROM aduan WHERE id='$id'";
        // Eksekusi query
        $query = $this->db->query($sql);
        // uraikan hasil kueri dalam bentuk array

        return;
    }

    public function getUpdate($id)
    {
        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $judul = $_POST['judul'];
            $date = $_POST['date'];
            $kategori = $_POST['kategori'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $nik = $_POST['nik'];
            $body = $_POST['body'];
            $image = $_POST['image'];
            // pembuatan query
            $sql = "UPDATE aduan SET judul='$judul',date='$date',kategori='$kategori',nama='$nama',alamat='$alamat',nik='$nik',body='$body',image='$image' WHERE id='$id'";
            // Eksekusi query
            $query = $this->db->query($sql);
            // uraikan hasil kueri dalam bentuk array

            return;
        }
    }

    public function getGambar()
    {
        return $this->findAll();
    }
    public function simpan_gambar($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getChartData()
    {
        return $this->findAll(); // Mengambil semua data dari tabel
    }

    function search($keyword)
    {
        // $builder = $this->table('aduan');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('aduan')->like('nama', $keyword);
    }

    function dataAduan($userId)
    {

        return $this->where('user_id', $userId)
            ->findAll();
    }

    function Aduan($userId)
    {

        return $this->where('id', $userId)
            ->findAll();
    }

    // public function insertAduan($data)
    // {
    //     return $this->insert($data);
    // }

    public function getGrafik()
    {
        return $this->db->table('aduan')->get()->getResultArray();
    }
}
