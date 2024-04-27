<?php 

    require '../../index.php';

    class My_Controller extends My_Model {

        public function __loader__($module='') {
            if($module) {
                switch($module) {
                    case 'register':
                        return BASE_URL . 'assets/js/modules/register.js';
                        break;

                    case 'login':
                        return BASE_URL . 'assets/js/modules/login.js';
                        break;

                    case 'home':
                        return BASE_URL . 'assets/js/modules/home.js';
                        break;

                    case 'dashboard':
                        return BASE_URL . 'assets/js/modules/dashboard.js';
                        break;
                    
                    case 'adoption':
                        return BASE_URL . 'assets/js/modules/adoption.js';
                        break;

                    case 'rescue':
                        return BASE_URL . 'assets/js/modules/rescue.js';
                        break;

                    case 'user':
                        return BASE_URL . 'assets/js/modules/user.js';
                        break;
                    
                    case 'pets':
                        return BASE_URL . 'assets/js/modules/pets.js';
                        break;
                    
                    default: 
                        return BASE_URL . 'assets/js/modules/home.js';
                }

            } else {
                
                return BASE_URL . 'assets/js/modules/home.js';
            }
        }

        public function loadHomePage() {

            header('Location :' . BASE_URL . 'modules/home/index.php');
            
            exit;
        }


        public function generateUniqueID($pattern = 'C2C') {
            $randomDigits = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
            $uniqueID = $pattern . $randomDigits;
            $uniqueID = substr($uniqueID, 0, 7);
            return $uniqueID;
        }
        
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

        public function fileUploader($files, $moduleDirectory) {
            $uploaded_paths = [];
            $errormsg = "";
        
            if (isset($files['tmp_name'])) {
                $files = [$files];
            }
        
            foreach ($files as $file) {
                if (isset($file["tmp_name"]) && isset($file["name"]) && isset($file["error"])) {
                    if (is_array($file["name"])) {
                        foreach ($file["name"] as $key => $name) {
                            $tmp_name = $file["tmp_name"][$key];
                            $error = $file["error"][$key];
                            if ($error == UPLOAD_ERR_OK) {
                                $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . "/cam2rescue-v1/Cam2RescueV1/uploads/" . $moduleDirectory . "/";
                                if (!file_exists($uploadDirectory)) {
                                    mkdir($uploadDirectory, 0777, true);
                                }
                                $uniqueName = uniqid() . '_' . $name;
                                $uploadPath = $uploadDirectory . $uniqueName;
                                if (move_uploaded_file($tmp_name, $uploadPath)) {
                                    $uploaded_paths[] = $uploadPath;
                                } else {
                                    $errormsg .= "Could not move uploaded file '" . $tmp_name . "' to '" . $uploadPath . "'<br/>\n";
                                }
                            } else {
                                $errormsg .= "Upload error. [" . $error . "] on file '" . $name . "'<br/>\n";
                            }
                        }
                    } else {
                        $tmp_name = $file["tmp_name"];
                        $name = basename($file["name"]);
                        $error = $file["error"];
        
                        if ($error == UPLOAD_ERR_OK) {
                            $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . "/cam2rescue-v1/Cam2RescueV1/uploads/" . $moduleDirectory . "/";
                            if (!file_exists($uploadDirectory)) {
                                mkdir($uploadDirectory, 0777, true);
                            }
                            $uniqueName = uniqid() . '_' . $name;
                            $uploadPath = $uploadDirectory . $uniqueName;
                            if (move_uploaded_file($tmp_name, $uploadPath)) {
                                $uploaded_paths[] = $uploadPath;
                            } else {
                                $errormsg .= "Could not move uploaded file '" . $tmp_name . "' to '" . $uploadPath . "'<br/>\n";
                            }
                        } else {
                            $errormsg .= "Upload error. [" . $error . "] on file '" . $name . "'<br/>\n";
                        }
                    }
                } else {
                    $errormsg .= "Invalid file array structure.<br/>\n";
                }
            }
        
            return ['image' => $uniqueName, 'errors' => $errormsg];
        }
        
    }
        
?>