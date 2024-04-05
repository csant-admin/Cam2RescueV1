<?php 

    class My_Controller extends My_Model {

        public function getRawData($tbl, $data, $type='') {
            $result = $this->get_row_data($tbl, $data, $type);
            return ($result) ? $result : false;
        }
        
        public function insertRawData($tbl, $data) {
            $result = $this->insert_data($tbl, $data);
            return $result;
        }

        public function updateRawData($tbl_name, $set, $where) {
            $result = $this->update_data($tbl_name, $set, $where);
            return ($result) ? true : false;
        }

        public function deleteRawData($tbl_name, $where) {
            $result = $this->delete_data($tbl_name, $where);
            return ($result) ? true : false;
        }

        public function checkExistEmail($tbl, $data, $type='') {
            $result = $this->get_row_data($tbl, $data, $type);
            return ($result) ? $result : false;
        }
    }

?>