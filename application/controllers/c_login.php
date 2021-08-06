<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
        $this->load->model('m_resep');
	}

	public function index(){
		$this->load->view('Login');
	}

    public function aksi_login()
    {
        $name = $_POST['username'];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
        );
        $data = $this->m_login->cek_login("user", $where)->result_array();
        $cek = $this->m_login->cek_login("user", $where)->num_rows();
            foreach($data as $row ){
                if($row['username'] == $username){
                    if ($row['username'] == 'admin'){
                        redirect(base_url("c_login/admin"));
                        break;
                    }
                    else {
                        redirect(base_url("c_resep"));
                    break;
                    }
                    
                } 
                 else {
                    //redirect(base_url("c_login"));
                    echo 'gagal';
                    break;
                }
            }
    }

    public function admin(){
        $data['data'] = $this->m_resep->tampil('resepmasakan');
        $this->load->view('homeadmin', $data);
    }
}

