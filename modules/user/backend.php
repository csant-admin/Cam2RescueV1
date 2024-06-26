<?php
    session_start();

    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';

    class ViewController extends My_Controller{

        public function __construct() {

            if ($_SERVER['REQUEST_METHOD'] === 'GET') {

                $this->displayUser();

            } elseif($_SERVER['REQUEST_METHOD'] === 'POST') {

                if(isset($_POST['action'])) {

                    $action = trim($_POST['action']);
                    switch($action) {
                        case 'editUserFetchDetails':
                            $this->editUserFetchDetails();
                            break;
    
                        case 'editData':
                            $this->editData();
                            break;
    
                        case 'deleteUser':
                            $this->deleteUser();
                            break;
    
                        case 'updateUserStatus':
                            $this->activateDeactivateUser();
                            break;
            
                        default: 
                            echo json_encode(array('success' => false, 'error' => 'Unknown action'));
                            break;
                    }
                } else {
                    echo json_encode(array('success' => false, 'error' => 'No action specified'));
                }
            }
        }
    

        public function displayUser() {
            // $controller = new MY_Controller();
            $response = array('success' => false);
            $fetch_query = array(
                'select'    => 'user_id, account_status, lastname, firstname, username, contact',
                'where'     => array('userType' => 2),
                'join'      => array('user_details as detail' => 'user.user_id = detail.fk_user_id')
            );
        
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            
            $perPage = 5;
        
            $offset = ($page - 1) * $perPage;
        
            // $controller = new My_Controller();
            $result = $this->getRawData('user', $fetch_query, $type='array'); 
    
            $paginatedResult = array_slice($result, $offset, $perPage);
        
            $totalUser = count($result);
            $html = '';
            foreach ($paginatedResult as $user) {
                $html .= '<tr>';
                $html .= '<td>' . $user['lastname'] . '</td>';
                $html .= '<td>' . $user['firstname'] . '</td>';
                $html .= '<td>' . $user['username'] . '</td>';
                $html .= '<td>' . $user['contact'] . '</td>';
                $html .= '<td><button class="btn btn-danger delete-btn delete ml-2" data-id="'. $user['user_id'] .'"><i class="fa fa-trash"></i></button>';
                $html .= '<button class="btn btn-warning edit-btn edit" data-id="'. $user['user_id'] .'"><i class="fa fa-edit"></i></button>';
                $html .= '<button class="btn btn-danger activate-deactivate" data-id="'. $user['user_id'] .'" data-status="'. $user['account_status'] .'">';
                $html .= ((int)$user['account_status'] === 1) ? '<i class="fa fa-lock"></i>' : '<i class="fa fa-unlock"></i></button></td>';
                $html .= '</tr>';
            }
            $totalPages = ceil($totalUser / $perPage);
            $pagination = '';
            for ($i = 1; $i <= $totalPages; $i++) {
                $pagination .= '<li class="page-item ' . (($page == $i) ? 'active' : '') . '">';
                $pagination .= '<a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a>';
                $pagination .= '</li>';
            }
        
            echo json_encode(array(
                'users' => $html,
                'pagination' => $pagination
            ));
        }

        function editUserFetchDetails() {
            $response = array('success' => false);
            if(isset($_POST)) {

                $fetch_query = array(
                    'select'    => 'user_id, username, lastname, firstname, barangay, city, contact, office_name, office_type, day_available',
                    'where'     => array('user_id' =>  trim($_POST['userID'])),
                    'join'      => array('user_details as detail' => 'user.user_id = detail.fk_user_id')
                );

                try{
                    $result = $this->getRawData('user', $fetch_query, $type='row'); 
                    if($result) {
                        $response['success'] = true;
                        $response['data'] = $result;
                    } else {
                        $response['msg'] = 'Failed get the user details with user id of ' . trim($_POST['userID']);
                    }
                } catch(PDOException $e) {
                    $response['msg'] = 'ERROR ' . $e->getMessage();
                }
            }
            echo json_encode($response);
        }

        function editData() {
            $response = array('success' => false);
            if(isset($_POST)) {
                $fetch_query = array(
                    'select' => 'username',
                    'where' => array('user_id' => trim($_POST['user_id']))
                );
                $verify = $this->getRawData('user', $fetch_query, $type='row');
                $isChangeEmail = ($verify['username'] !== trim($_POST['username'])) ? true : false;
                if($isChangeEmail) {
                    $to_check = array(
                        'select' => 'username',
                        'where' => array('username' => $_POST['username'])
                    );

                    if($fetch_email = $this->checkExistEmail('user', $to_check, $type='row')) {

                        $response['msg'] = "This email " . '<strong> "' . $fetch_email['username'] . ' " </strong> is already exist';
                    }
                } else {
                    $set = array('username' => trim($_POST['username']));
                    $where = array('user_id' => trim($_POST['user_id']));
                    try {
                        $result = $this->updateRawData('user', $set, $where);

                        if($result) {
                            $set = array(
                                'lastname'          => trim($_POST['lastname']),
                                'firstname'         => trim($_POST['firstname']),
                                'barangay'          => trim($_POST['barangay']),
                                'city'              => trim($_POST['city']),
                                'contact'           => trim($_POST['contact']),
                                'office_name'      => trim($_POST['office_name']),
                                'office_type'      => trim($_POST['office_type']),
                                'day_available'     => trim($_POST['day_available'])
                            );

                            $where = array(
                                'fk_user_id' => trim($_POST['user_id'])
                            );

                            if($this->updateRawData('user_details', $set, $where)) {
                                $response['success'] = true;
                                $response['msg'] = 'user details has been successfuly updated';
                            } else {
                                $response['msg'] = 'failed to update user details table';
                            }
                        } else {
                            $response['msg'] = 'failed to update user table';
                        }
                    } catch(PDOException $e) {
                        $response['msg'] = 'ERROR ' . $e->getMessage();
                    }
                }
                
            }

            echo json_encode($response);
        }

        function deleteUser() {
            $response = array('success' => false);
            if(isset($_POST['userID'])) {
                $where = array('fk_user_id' => trim($_POST['userID']));
                try{
                    $result = $this->deleteRawData('user_details', $where);
                    if($result) {
                        $where = array('user_id' => trim($_POST['userID']));
                        if($this->deleteRawData('user', $where)) {
                            $response['success'] = true;
                            $response['msg'] = 'User data has been successfuly deleted';
                        } else {
                            $response['msg'] = 'Failed to delete datils in the user table';
                        }
                    } else {
                        $response['msg'] = 'Failed to delete datils in the user details table';
                    }
                } catch(PDOException $e) {

                    $response['msg'] = 'ERROR ' . $e->getMessage();
                }
            }
            echo json_encode($response);
        }

        function activateDeactivateUser() {
            $response = array('success' => false);
            $controller = new My_Controller();
            if(isset($_POST['userID'])) {
                $title = ((int)$_POST['account_status'] === 1) ? "Deactivated!" : "Activated!";
                $message = ((int)$_POST['account_status'] === 1) ? "User has been successfuly deactivated" : "User has been successfuly Activated";
                $errorMessage = ((int)$_POST['account_status'] === 1) ? "Failed to deactivated user" : "Failed to activate user";
                $set = ((int)$_POST['account_status'] === 1) ? array('account_status' => 2) : array('account_status' => 1);
                $where = array('user_id' => trim($_POST['userID']));
                try{
                    if($controller->updateRawData('user', $set, $where)) {
                        $response['success'] = true;
                        $response['msg'] = $message;
                        $response['title'] = $title;
                    } else {
                        $response['msg'] = $errorMessage;
                    }
                } catch(PDOException $e) {
                    $response['msg'] = 'ERROR ' . $e->getMessage();
                }
            }
            echo json_encode($response);
        }

    }

    $userController = new ViewController();
    
    
?>