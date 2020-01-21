<?php 
ini_set("display_errors",1);
error_reporting(E_ALL);

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['peserta'] = $this->M_peserta->getAll();
		$this->load->view('templates/header');
		$this->load->view('peserta/peserta', $data);
		$this->load->view('templates/footer');

		
	}

	public function detailIns($id){
		$data = $this->M_instruktur->getSelected($id);
        echo json_encode($data);
	}

	public function AddPeserta()
	{
		// $data['pelatihan'] = $this->M_jadwal->getAll();
		$data['training'] = $this->M_jadwal->getJadwalPelatihan();

		$this->load->view('templates/header');
		$this->load->view('peserta/add_peserta', $data);
		$this->load->view('templates/footer');
	}

	public function AddingPeserta()
	{

		$i=0;
		$id = 'PST'.rand();
		$nama = $this->input->post('nama_peserta');
		$usia = $this->input->post('usia');
		$gender = $this->input->post('gender');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$idpelatihan = $this->input->post('pelatihan');
		$ndt = $this->input->post('ndt');
		$deskripsi = $this->input->post('deskripsi');

		$training = $this->M_training->getSelectedName($idpelatihan);
		foreach ($training as $array => $row)
		{
		    // print_r($row);
		    $train = $row->name;

		} 
         $data = array(
			'id' => $id,
			'id_training' => $idpelatihan,
			'nama' => $nama,
			'usia' => $usia,
			'sex' => $gender,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'training' => $train,
			'status_ndt' => $ndt,
			'deskripsi' => $deskripsi
			);
            echo "<pre>";
            print_r($data);
            echo "</pre>";

            echo "<pre>";
            // print_r($result);

            echo "</pre>";
             // echo "lalala".$this->input->post('images');
            

         $this->M_peserta->AddPeserta($data);
		redirect('/Peserta');

	}

	public function updatePeserta($id)
	{
		$where = array('id' => $id);
		$data['peserta'] = $this->M_peserta->edit_data($where,'nama')->result();
		$data['training'] = $this->M_training->getAll();
		$this->load->view('templates/header');
		$this->load->view('peserta/upd_peserta',$data);
		$this->load->view('templates/footer');
		// print_r($data);
	}



	public function updatingPeserta($id)
	{
		$nama = $this->input->post('nama_peserta');
		$usia = $this->input->post('usia');
		$gender = $this->input->post('gender');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$pelatihan = $this->input->post('pelatihan');
		$ndt = $this->input->post('ndt');
		$deskripsi = $this->input->post('deskripsi');

         $data = array(
			'id' => $id,
			'nama' => $nama,
			'usia' => $usia,
			'sex' => $gender,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'training' => $pelatihan,
			'status_ndt' => $ndt,
			'deskripsi' => $deskripsi
			);

            echo "<pre>";
            print_r($data);
            echo "</pre>";
		

			$this->M_peserta->update_data($data,$id);
			redirect('/Peserta');
	}


	public function delete($id)
	{
		//$where = array('id' => $id);
		$this->M_peserta->deletePesertaData($id);
		redirect('/Peserta');
		//redirect('crud/index');
	}

	public function _uploadImage() {
        // setting konfigurasi upload
        $config['upload_path'] = './upload/instruktur';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = true;
        $config['file_name'] = $id; 
        $config['max_size']  = 1024; // 1MB

        // load library upload
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
        	return $this->upload->data("file_name");
    	}

    	 return "default.jpg";
    }
}

/* End of file  */
/* Location: ./application/controllers/ */