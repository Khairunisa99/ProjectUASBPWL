<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_resep extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_resep');
	}

	public function index(){
		$data['data'] = $this->m_resep->tampil('resepmasakan');
		$this->load->view('welcome_message', $data);
	}

	public function tamresep(){
		$this->load->view('tambahresep');
	}
    
    public function edresep(){
		$this->load->view('editresep');
	}
	public function tambahResep()
	{
		$this->m_resep->simresep();
		redirect('c_resep');
	}
	public function masuk_resep(){
		move_uploaded_file($_FILES['gambar']['tmp_name'],'./assets/product/'.$_FILES['gambar']['name']);
		$name = $_POST['name'];
		$porsi = $_POST['porsi'];
		$waktu = $_POST['waktu'];
		$bahan = $_POST['bahan'];
		$langkah = $_POST['langkah'];
		$deskripsi = $_POST['deskripsi'];
		
		$product = [
			"namaresep" => $name,
			"porsi" => $porsi,
			"waktu" => $waktu,
			"bahan" => $bahan,
			"langkah" => $langkah,
			"deskripsi" => $deskripsi,
			"foto" => $_FILES['gambar']['name']
		];

		$this->m_resep->insert_resep('resepmasakan', $product);
		redirect('c_login/admin');
	}

	public function tampilresep(){
		$id = array (
			'koderesep' => $_GET['id'],
		);
		$data['data'] = $this->m_resep->tampilresep('resepmasakan', $id);
		$this->load->view('tampilresep', $data);
	}

	public function tabeluser(){
		$data['data'] = $this->m_resep->tampil('user');
		$this->load->view('tabeluser', $data);
	}

	public function hapususer(){
		$id = $_GET['id'];
		$this->m_resep->hapus('user', $id);
		redirect('c_resep/tabeluser');
	}

	public function hapusresep(){
		$id = $_GET['id'];
		$this->m_resep->hapusresep('resepmasakan', $id);
		redirect('c_login/admin');
	}

	public function edituser()
{
	$id = array (
		'id' => $_GET['id'],
	);
	$data['data'] = $this->m_resep->tampilresep('user', $id);
	$this->load->view('edituser', $data);

}

	public function updateuser(){
		$data = array (
			'username' => $_POST['username'],
			'password' => $_POST['password'],
		);
		$id = $_POST['id'];
		$this->m_resep->updateuser($data, $id);
		redirect('c_resep/tabeluser');
	}

	public function editresep()
{
	$id = array (
		'koderesep' => $_GET['id'],
	);
	$data['data'] = $this->m_resep->tampilresep('resepmasakan', $id);
	$this->load->view('editresep', $data);

}

	public function updateresep(){
		move_uploaded_file($_FILES['gambar']['tmp_name'],'./assets/product/'.$_FILES['gambar']['name']);
		$data = array (
			'namaresep' => $_POST['name'],
			'porsi' => $_POST['porsi'],
			'bahan' => $_POST['bahan'],
			'langkah' => $_POST['langkah'],
			'deskripsi' => $_POST['deskripsi'],
			"foto" => $_FILES['gambar']['name']
		);
		$id = $_POST['id'];
		$this->m_resep->updateresep($data, $id);
		redirect('c_login/admin');
	}

}

