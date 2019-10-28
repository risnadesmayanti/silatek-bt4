
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_jadwal extends CI_Model {
	
		private $_table = "tb_jadwal";


	    public function getAll()
  		{
        	return $this->db->get($this->_table)->result();
   		}

   		public function addJadwal($data)
		{

			$this->db->insert($this->_table,$data);
		}

		public function edit_data($where)
		{
			return $this->db->get_where($this->_table,$where);
		}

		public function get_biaya($id)
		{
		    return $this->db->where("trainingId", $id)->get($this->_table);
		}	

		public function get_events($start, $end)
		{
		    return $this->db->where("start_date >=", $start)->where("end_date <=", $end)->get($this->_table);
		}	

		public function getJadwalPelatihan()
		{
			$this->db->select('*');
			$this->db->from('training');
			$this->db->join('tb_jadwal', 'training.trainingId = tb_jadwal.id_pelatihan');
			return $this->db->get()->result();

			// return $query;
		}

		// SELECT * FROM training INNER JOIN tb_jadwal ON training.trainingId = tb_jadwal.id_pelatihan

		 public function deleteJadwal($id)
    {

        $this->db->where('id', $id);
        $this->db->delete($this->_table);
        // echo json_encode($data);
    }


	
	}	

/* End of file m_jadwal.php */
/* Location: ./application/models/m_jadwal.php */	

