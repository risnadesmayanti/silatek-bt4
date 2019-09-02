
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_jadwal extends CI_Model {
	
		private $_table = "tb_pelatihan";


	    public function getAll()
  		{
        	return $this->db->get($this->_table)->result();
   		}

   		public function addJadwal($data)
		{

			$this->db->insert($this->_table,$data);
		}	

	
	}	

/* End of file m_jadwal.php */
/* Location: ./application/models/m_jadwal.php */	

