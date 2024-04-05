<?php
    session_start();
    echo $_SESSION['userData'];
    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';

    function auth() {
        $controller = new My_Controller();
        $response = array('success' => false);
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $featch_query = array(
                'select' => 'user_id, userType',
                'where' => array('username' => $_POST['username'], 'password' => md5($_POST['password']))
            );
            $data = $controller->getRawData('user', $featch_query, $type='row');
            if($data) {
                $response['success'] = true;
                $response['msg'] = '';
                $response['data'] = $data;
                $_SESSION['userData'] = $data;
            } else {
                $response['msg'] = 'No user exists with this username and password';
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