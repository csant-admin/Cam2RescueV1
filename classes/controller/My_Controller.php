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

        public function fileUploader() {
            foreach ($_FILES["attachment"]["error"] as $key => $error) {
                $tmp_name = $_FILES["attachment"]["tmp_name"][$key];
                if (!$tmp_name) continue;
                $name = basename($_FILES["attachment"]["name"][$key]);
                if ($error == UPLOAD_ERR_OK)
                {
                    if ( move_uploaded_file($tmp_name, "/tmp/".$name) )
                        $uploaded_array[] .= "Uploaded file '".$name."'.<br/>\n";
                    else
                        $errormsg .= "Could not move uploaded file '".$tmp_name."' to '".$name."'<br/>\n";
                }
                else $errormsg .= "Upload error. [".$error."] on file '".$name."'<br/>\n";
            }
        }
    }

?>