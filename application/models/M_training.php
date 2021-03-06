
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_training extends CI_Model {
	
		private $_table = "training";


	    public function getAll()
  		{
        	return $this->db->get($this->_table)->result();
   		}

   		public function getSelected($id)
		{
			$this->db->select('*');
		    $this->db->from($this->_table);
		    $this->db->where('trainingId',$id);
		    $res2 = $this->db->get();
	  		return $res2;
		}

		public function getSelectedName($id)
		{
			$this->db->select('name');
		    $this->db->from($this->_table);
		    $this->db->where('trainingId',$id);
		    $res2 = $this->db->get();
	  		return $res2->result();
		}


		public function addPelatihan($data)
		{

			$this->db->insert($this->_table,$data);
		}

		public function update_data($data, $id = NULL)
		{
			$this->db->set($data);
	        $this->db->where('trainingId', $id);
	        $this->db->update($this->_table);
		}

		public function edit_data($where)
		{
			return $this->db->get_where($this->_table,$where);
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

