<?php
    session_start();
    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';

    function auth() {
        $controller = new My_Controller();
        $response = array('success' => false);
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $featch_query = array(
                'select' => 'user_id, userType, account_status',
                'where' => array('username' => $_POST['username'], 'password' => md5($_POST['password']))
            );
            $data = $controller->getRawData('user', $featch_query, $type='row');
            if($data) {
                if((int)$data['account_status'] == 1) {
                    $response['success'] = true;
                    $response['title'] = 'User <br/>' . $data['user_id'] . '<br/> is <br/> Logged In';
                    $response['msg'] = 'Login Successfuly';
                    $response['data'] = $data;
                    $_SESSION['userData'] = $data;
                } else {
                    $response['msg'] = 'This account is deactivated, Please contact the administrator';
                }
            } else {
                $response['msg'] = 'Invalid Username or Password';
            }
        } else {
            $response['msg'] = 'Invalid request parameters';
            $response['data'] = [];
        }
        echo json_encode($response);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        auth();
    }
    
?>