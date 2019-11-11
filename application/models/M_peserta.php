
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_peserta extends CI_Model {
	
		private $_table = "peserta";


	    public function getAll()
  		{
        	return $this->db->get($this->_table)->result();
   		}

   		public function getSelected($id)
		{
			$this->db->select('*');
		    $this->db->from($this->_table);
		    $this->db->where('id',$id);
		    $res2 = $this->db->get();
	  		return $res2;
		}

   		public function addPelatihan($data)
		{

			$this->db->insert($this->_table,$data);
		}

		public function update_data($data, $id = NULL)
		{
			$this->db->set($data);
	        $this->db->where('id', $id);
	        $this->db->update($this->_table);
		}

		public function edit_data($where)
		{
			return $this->db->get_where($this->_table,$where);
		}

		public function deletePelatihanData($id)
		{

			$this->db->where('trainingId', $id);
			$this->db->delete($this->_table);
			// echo json_encode($data);
		}

		// public function get_events($start, $end)
		// {
		//     return $this->db->where("start_date >=", $start)->where("end_date <=", $end)->get($this->_table);
		// }	

		// public function deleteJadwal($id)
	 //    {

	 //        $this->db->where('id', $id);
	 //        $this->db->delete($this->_table);
	 //        // echo json_encode($data);
	 //    }


	
	}	

/* End of file m_jadwal.php */
/* Location: ./application/models/m_jadwal.php */	

