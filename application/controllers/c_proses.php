<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_resep extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function buatresep(){
		$koderesep = $this->input->post('koderesep');
		$namaresep = $this->input->post('namaresep');
		$porsi = $this->input->post('porsi');
		$waktu = $this->input->post('waktu');
		$bahan = $this->input->post('bahan');
		$langkah = $this->input->post('langkah');
        $foto = $this->input->post('foto');
        $deskripsi = $this->input->post('deskripsi');
		$data = array(
			'koderesep' => $koderesep,
			'namaresep' => $namaresep,
			'porsi' => $porsi,
            'waktu' => $waktu,
            'bahan' => $bahan,
            'langkah' => $langkah,
            'foto' => $foto,
            'deskripsi' => $deskripsi,
        );
		$status = $this->m_resep->simresep("resepmasakan",$data);
		if($status){
			redirect(base_url("index.php/Welcome/index"));
		}
        }
}

