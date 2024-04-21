<?php 

    session_start();

    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';


    function bookedAdoption() {
        $controller = new My_Controller();
        $response = array('success' => false);
        if(isset($_POST)) {
            $id = $controller->generateUniqueID();
            $data = array (
                'trans_id'          =>  $id,
                'pet_id'            =>  trim($_POST['Adoption_PetId']),
                'pet_name'          =>  trim($_POST['Adoption_PetName']),
                'lastname'          =>  trim($_POST['Adoption_Lastname']),
                'firstname'         =>  trim($_POST['Adoption_Firstname']),
                'contact_no'        =>  trim($_POST['Adoption_Contact']),
                'user_id'           =>  trim($_SESSION['userData']['user_id']),
                'adoption_status'   =>  0,
                'other_info'        =>  json_encode($_POST)
            );
            try {
                if($controller->insertRawData('adopt_pet', $data)) {
                    $response['success'] = true;
                    $response['msg'] = 'Adoption request form has been successfully submitted';
                } else {
                    $response['msg'] = 'Failed to submit adoption request form';
                }
            } catch(PDOException $e) {

                $response['msg'] = 'ERROR ' . $e->getMessage();
            }
        }
        echo json_encode($response);
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        bookedAdoption();
    }
?>