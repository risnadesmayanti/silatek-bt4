
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_training extends CI_Model {
	
		private $_table = "training";


	    public function getAll()
  		{
        	return $this->db->get($this->_table)->result();
   		}

   		public function addJadwal($data)
		{

			$this->db->insert($this->_table,$data);
		}

		 public function deleteJadwal($id)
    {

        $this->db->where('id', $id);
        $this->db->delete($this->_table);
        // echo json_encode($data);
    }


	
	}	

/* End of file m_jadwal.php */
/* Location: ./application/models/m_jadwal.php */	

