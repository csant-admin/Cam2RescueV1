<?php 

    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';


    function createUser() {

        $controller = new My_Controller();

        $response = array('success' => false);
        $userID = date('Y') . uniqid();
        if(isset($_POST)) {
            // echo '<pre>';
            // print_r($userID);
            // echo '</pre>';
            // exit;
            $to_check = array(
                'select' => 'username',
                'where' => array('username' => $_POST['email'])
            );
            if($fetch_email = $controller->checkExistEmail('user', $to_check, $type='row')) {

                $response['msg'] = "This email" . $fetch_email['username'] . ' is already exist';

            } else {

                if($_POST['password'] !== $_POST['confirm_password']) {

                    $response['msg'] = "Password Dont Match";

                } else {
                    $user_access = array(
                        'user_id'               => trim($userID),
                        'username'              => trim($_POST['email']),
                        'password'              => md5(trim($_POST['password'])),
                        'userType'              => 2,
                        'account_status'        => 1,
                        'reg_status'            => 1,
                    );

                    try {
                        if($result = $controller->insertRawData('user', $user_access)) {
                            $user_details = array(
                                'fk_user_id'           =>  trim($userID),
                                'lastname'          =>  trim($_POST['lastname']),
                                'firstname'         =>  trim($_POST['firstname']),
                                'birth_date'        =>  trim($_POST['dob']),
                                'gender'            =>  trim($_POST['gender']),
                                'barangay'          =>  trim($_POST['barangay']),
                                'city'              =>  trim($_POST['city']),
                                'contact'           =>  trim($_POST['contact_no']),
                                'office_name'       =>  trim($_POST['office_name']),
                                'office_type'       =>  trim($_POST['office_type']),
                                'day_available'     =>  trim($_POST['days'])
                            );

                            if($controller->insertRawData('user_details', $user_details)) {
                                $response['success'] = true;
                                $response['msg'] = 'Registered Successfully';
                            } else {
                                $response['msg'] = "Failed to insert data to the child table";
                            }

                        } else {
                            $response['msg'] = "Failed to insert data to the parent table";
                        }

                    } catch(PDOException $e) {
                        $response['msg'] = "ERROR " . $e->getMessage();
                    }

                }
            }
        
        }

        echo json_encode($response);

    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        createUser();
    }

?>