<?php
    session_start();

    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';

    function postPetForAdoption() {
        $controller = new My_Controller();
        $response = array('success' => false);
        $id = $controller->generateUniqueID();

        if(isset($_POST)) {

            if(isset($_FILES['file'])) {
                $moduleDirectory = "adoption";
                $filePath = $controller->fileUploader($_FILES["file"], $moduleDirectory);
            }

            $data = array(
                'pet_id' => $id,
                'image_url' => json_encode($filePath),
                'pet_name' => trim($_POST['Pet_Name']),
                'pet_gender' => trim($_POST['Pet_Gender']),
                'pet_condition' => trim($_POST['Pet_Condition']),
                'pet_description' => trim($_POST['Pet_Description']),
                'user_id' => $_SESSION['userData']['user_id']
            );

            try {
                if($controller->insertRawData('post_adoption', $data)) {
                    $response['success'] = true;
                    $response['msg'] = "Posted Successfuly";
                } else {
                    $response['msg'] = "Failed To Post Pet";
                }
            }catch(PDOException $e) {

                $response['msg'] = "ERROR " . $e->getMessage();
            }
        }

        echo json_encode($response);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        postPetForAdoption();
    } 
?>