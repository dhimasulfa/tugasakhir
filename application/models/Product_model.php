<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";
    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'nomor',
            'label' => 'No Hp',
            'rules' => 'required'],
        ];
    }

    public function rulesbwadd()
    {
        return [
            // ['field' => 'name',
            // 'label' => 'Nama',
            // 'rules' => 'required'],

            ['field' => 'luas',
            'label' => 'Luas Lahan',
            'rules' => 'required'],

            ['field' => 'sellok',
            'label' => 'lokasi',
            'rules' => 'required'],
        ];
    }

    public function rulesharga()
    {
        return [
            ['field' => 'selcat',
            'label' => 'Kategori',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Harga',
            'rules' => 'numeric'],
            
            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required']
        ];
    }

    public function ruleslogin()
    {
        return [
            ['field' => 'uname',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function rulesregister()
    {
        return [
            ['field' => 'name',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'nohp',
            'label' => 'No Handphone',
            'rules' => 'required'],

            ['field' => 'uname',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'gender',
            'label' => 'Jenis Kelamin',
            'rules' => 'required']
        ];
    }

    public function rulesnews()
    {
        return [
            ['field' => 'nama',
            'label' => 'Penulis',
            'rules' => 'required'],

            ['field' => 'judul',
            'label' => 'Judul Berita',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required'],

            ['field' => 'isi',
            'label' => 'Deskripsi Berita',
            'rules' => 'required'],
        ];
    }

    public function rulesctg()
    {
        return [
            ['field' => 'name',
            'label' => 'Nama',
            'rules' => 'required']
        ];
    }

    public function ruleskec()
    {
        return [
            ['field' => 'kec',
            'label' => 'Kecamatan',
            'rules' => 'required']
        ];
    }

    public function getAll($table)
    {
        return $this->db->get($table)->result();
    }

    public function tablejoin2($table1, $table2, $where)
    {
        return $this->db
                    ->select('*')
                    ->from($table1)
                    ->join($table2,$where)
                    ->get()->result();
    }

    public function srcjoin($table1,$table2,$where,$id)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $where);
        $this->db->where($id);
        return $this->db->get()->row();
    }
    
    public function getById($table, $id)
    {
        return $this->db->get_where($table, $id)->row();
    }
    public function savedata($table, $data)
    {
        $this->db->insert($table,$data);
        $this->_uploadImage($data["brg_gambar"]);
        $cid = $this->db->insert_id();
        return $cid;

    }

    public function savedatanews($table, $data)
    {
        $this->db->insert($table,$data);
        $this->_uploadImage($data["news_gambar"]);
        $cid = $this->db->insert_id();
        return $cid;

    }

    public function savedata2($table, $data)
    {
        $this->db->insert($table,$data);
        // $cid = $this->db->insert_id(); 
        // return $cid;

    }

    function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

    public function update($table,$data,$id,$identifier)
    {
        if ($identifier == "lama"){
            return $this->db->update($table, $data, $id);
        } else {
            $this->_deleteImage($table,$id);
            $this->_uploadImage($data["brg_gambar"]);
            return $this->db->update($table, $data, $id);
        }
    }

    public function update2($table,$data,$id)
    {
        return $this->db->update($table, $data, $id);
    }

    public function delete($table,$id)
    {
        $this->_deleteImage($table,$id);
        return $this->db->delete($table, $id);
    }

    public function cek_user($db, $username, $password) {
        $this->db->where($username);
        $this->db->where($password);
        $query = $this->db->get($db);
        return $query->row_array();
      }

      private function _uploadImage($product_id)
      {
          $config['upload_path']          = './upload/product/';
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          $config['file_name']            = $product_id;
          $config['overwrite']			  = true;
          $config['max_size']             = 2048; // 2MB
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;
      
          $this->load->library('upload', $config);
      
          if ($this->upload->do_upload('image')) {
              return $this->upload->data("file_name");
          }
          
          return "default.jpg";
      }

      private function _deleteImage($table,$id)
    {
    $product = $this->getById($table,$id);
        if ($product->brg_gambar != "default.jpg") {
            $filename = explode(".", $product->brg_gambar)[0];
            return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }

// ****************************************************SHOPPING CART**************************************

public function get_produk_kategori($kategori)
	{
		if($kategori>0)
			{
				$this->db->where('categori',$kategori);
			}
		$query = $this->db->get('harga');
		return $query->result_array();
	}
	
	public function get_kategori_all()
	{
		$query = $this->db->get('categori');
		return $query->result_array();
	}
	
	public  function get_produk_id($id)
	{
		$this->db->select('harga.*,ctg_nama');
		$this->db->from('harga');
		$this->db->join('categori', 'categori=categori.ctg_id','left');
   		$this->db->where('brg_id',$id);
        return $this->db->get();
    }	
	
	// public function tambah_pelanggan($data)
	// {
	// 	$this->db->insert('tbl_pelanggan', $data);
	// 	$id = $this->db->insert_id();
	// 	return (isset($id)) ? $id : FALSE;
	// }
	
	public function tambah_order($data)
	{
		$this->db->insert('transaksi', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_detail_order($data)
	{
		$this->db->insert('transaksi_detail', $data);
	}
}
?>
