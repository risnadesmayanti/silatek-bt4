<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// header('Access-Control-Allow-Origin: *');

class Dashboard extends CI_Controller {

	public function index()
	{

	    $data['train'] = $this->M_peserta->getByPelatihan();
		$data['jadwal'] = $this->M_jadwal->getJadwalBulanan();

		// $data = [];
 
      foreach($data['train'] as $row) {
            $data['label1'][] = $row->training;
            $data['data1'][] = $row->jumlah_peserta;
      }
      foreach($data['jadwal'] as $row) {
      		if ($row->bulan == '1') {
            	$data['label2'][] = 'Januari';
      			
      		}elseif ($row->bulan == '2') {
            	$data['label2'][] = 'Februari';
      			
      		}elseif ($row->bulan == '3') {
            	$data['label2'][] = 'Maret';
      		}elseif ($row->bulan == '4') {
            	$data['label2'][] = 'April';
      			
      		}elseif ($row->bulan == '5') {
            	$data['label2'][] = 'Mei';
      			
      		}elseif ($row->bulan == '6') {
            	$data['label2'][] = 'Juni';
      			
      		}elseif ($row->bulan == '7') {
            	$data['label2'][] = 'Juli';
      			
      		}elseif ($row->bulan == '8') {
            	$data['label2'][] = 'Agustus';
      			
      		}elseif ($row->bulan == '9') {
            	$data['label2'][] = 'September';
      			
      		}elseif ($row->bulan == '10') {
            	$data['label2'][] = 'Oktober';
      			
      		}elseif ($row->bulan == '11') {
            	$data['label2'][] = 'November';
      			
      		}elseif ($row->bulan == '12') {
            	$data['label2'][] = 'Desember';
      			
      		}
            $data['data2'][] = $row->jumlah_bulanan;
      }

      $data['chart_data'] = json_encode($data);

		$this->load->view('templates/header');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}

	public function chart()
	{
		// $data['train'] = $this->M_peserta->getByPelatihan();
		// $data['jadwal'] = $this->M_jadwal->getJadwalBulanan();

		//   foreach($data['train'] as $row => $value) {
  //           $data['label1'][] = $value->training;
  //           $data['data1'][] = $value->jumlah_peserta;
	 //      }

		//   foreach($data['jadwal'] as $row => $value) {
	 //            $data['label2'][] = $value->bulan;
	 //            $data['data2'][] = $value->jumlah_bulanan;
	 //      }  
	  // $data['chart_data'] = json_encode($data['train']);
   //    $data['chart_dataBar'] = json_encode($data['jadwal']);

		// $training= $this->M_peserta->getByPelatihan();
		$data['train'] = $this->M_peserta->getByPelatihan();
		$data['jadwal'] = $this->M_jadwal->getJadwalBulanan();

		// $data = [];
 
      foreach($data['train'] as $row) {
            $data['label1'][] = $row->training;
            $data['data1'][] = $row->jumlah_peserta;
      }
      foreach($data['jadwal'] as $row) {
            $data['label2'][] = $row->bulan;
            $data['data2'][] = $row->jumlah_bulanan;
      }
      // 	echo "<pre>";
	     // print_r($data);
      // 	echo "</pre>";

      $data['chart_data'] = json_encode($data);

       echo json_encode($data);
	}
	

	public function AllPelatihan()
	{
		// $this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('AllPelatihan');
		$this->load->view('templates/footer');
	}

	
	public function detail($id){
		$data = $this->M_instruktur->getSelected(array('id' => $id));
        echo json_encode($data);
	}

	// public function details(){
	// 	$phoneData = $this->input->post('phoneData');
	// 	if(isset($phoneData) and !empty($phoneData)){
	// 		$records = $this->M_instruktur->getSelected($phoneData);
	// 		$output = '';
 //            foreach($records->result_array() as $row){
 //             $output .='<div class="todo">
 //              <ul>
 //                <li class="clearfix">
 //                  <div class="txt"> ID Instruktur </div>
 //                  <div class="pull-right">'.$row["id"].'</div></li></ul></div>';


 //         	}
 //         	 echo $output;
	// 	// print_r($records);
	// 	}
	// }

public function get_phone_result()
 {
 	$phoneData = $this->input->post('phoneData');
 }
	
	private function uploadImage()
	{
	    $config['upload_path']          = './upload/instruktur/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    // $config['file_name']            = $this->product_id;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    $config['max_width']            = 1024;
	    $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('image')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "default.jpg";
	}

	public function AddingIns()
	{
		$validation= $this->form_validation;
		$validation->set_rules();
	}

}

/* End of file Dashboard */
/* Location: ./application/controllers/Dashboard */