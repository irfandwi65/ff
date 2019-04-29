<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model
{
    private $_table = "berita";

    public $berita_id;
    public $judul;
    public $penerbit;
    public $genre;
    public $gambar;
    public $tanggal;
    public $deskripsi;

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($berita_id)
    {
        return $this->db->get_where($this->_table, ["id_berita" => $berita_id])->result();
    }

    public function save($gambar)
    {
        $post = $this->input->post();
        // $this->id = uniqid();
        $this->nama = $post["judul"];
        $this->harga = $post["penerbit"];
        $this->jenis = $post["genre"];
        $this->jumlah = $post["tanggal"];
        $this->jumlah = $post["deskripsi"];
        $this->img = $gambar;
        $this->db->insert($this->_table, $this);
    }

    public function update($gambar)
    {
        $post = $this->input->post();
        $this->nama = $post["judul"];
        $this->harga = $post["penerbit"];
        $this->jenis = $post["genre"];
        $this->jumlah = $post["tanggal"];
        $this->jumlah = $post["deskripsi"];
        $this->img = $gambar;
        $this->db->update($this->_table, $this, array('berita_id' => $post['berita_id']));
    }
    public function getGambarsById($id)
    {
        return $this->db->query("SELECT `gambar` FROM `berita` WHERE `id_berita`='$id'")->result();
    }
    public function deleteBeritaById($id)
    {
        return $this->db->delete($this->_table, array("id_berita" => $id));
    }
    public function inputBeritaAction($judul,$kategori, $penulis, $isi, $gambar)
    {
        return $this->db->query("INSERT INTO `berita` (`judul`,`kategori`,`penulis`, `gambar`, `isi`, `id_user`, `tanggal`) VALUES ('$judul','$kategori', '$penulis', '$gambar.jpg', '$isi', '1', CURRENT_TIMESTAMP);");
    }
    public function editBeritaAction($id, $judul, $kategori, $penulis, $isi, $gambar)
    {
        return $this->db->query("UPDATE `berita` SET `judul`='$judul', `kategori`='$kategori' , `penulis`='$penulis',`gambar`='$gambar.jpg',`isi`='$isi',`tanggal`=CURRENT_TIMESTAMP WHERE `id_berita`='$id'");
    }
    public function getTopThree()
    {
        return $this->db->query("SELECT * FROM `berita` LIMIT 3")->result();
    }
}