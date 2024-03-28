<?php 

    class My_Controller {

        public function getRawData($tbl, $data, $type='') {
            $result = $this->get_row_data($tbl, $data, $type);
            if($result):
                switch($type) { 
                    case 'row':
                        return $result->fetch();
                        break;
                    case 'array':
                        return $result->fetchAll();
                        break;
                    default:
                        return $result->fetchAll();
                        break;
                }
            else:
                return false;
            endif;
        }
        
        public function insertRawData($tbl, $data) {
            $result = $this->insert_data($tbl, $data);
            return ($result) ? true : false;
        }

        public function updateRawData($tbl_name, $set, $where) {
            $result = $this->update_data($tbl_name, $set, $where);
            return ($result) ? true : false;
        }

        public function deleteRawData($tbl_name, $where) {
            $result = $this->delete_data($tbl_name, $where);
            return ($result) ? true : false;
        }

        public function __load_assets_css__($page) {
            if(isset($page)):
                switch($page) {
                    case 'home':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/css/home.css';
                        break;
                    case 'about':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/css/about.css';
                        break;
                    case 'team':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/css/team.css';
                        break;
                    case 'contact':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/css/contact.css';
                        break;
                    case 'login':
                    case 'register':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/css/login.css';
                        break;
                    default:
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/css/home.css';
                        break;
                }
                return (file_exists($file)) ? $file : '';
            else: return '';
            endif;
        }
        
        public function __load_assets_js__($page) {
            if(isset($page)):
                switch($page) {
                    case 'home':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/js/home.js';
                        break;
                    case 'about':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/js/about.js';
                        break;
                    case 'team':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/js/team.js';
                        break;
                    case 'contact':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/js/contact.js';
                        break;
                    case 'login':
                    case 'register':
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/js/login.js';
                        break;
                    default:
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/assets/js/home.js';
                        break;
                }
                return (file_exists($file)) ? $file : '';
            else: return '';
            endif;
        }  
    }

?>