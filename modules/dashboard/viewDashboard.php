<?php
    session_start();

    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';

    // class Dashboard extends My_Controller {



        // public function __construct() {


        //     if($_SERVER['REQUEST_METHOD'] === 'GET') {

        //         $this->getAdoptionRequest();

        //     } else {

        //         $this->postPetForAdoption();
        //     }
        // }

        function getAdoptionRequest() {
            $controller = new My_Controller();
            $fetch_query = array ('select' => '*');
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $perPage = 5;
            $offset = ($page -1 ) * $perPage;
            $result = $controller->getRawData('adopt_pet', $fetch_query, 'array');
            $paginationResult = array_slice($result, $offset, $perPage);
            $totalRequest = count($result);
            $html = '';
            foreach($result as $res) {
                $decoded_info = json_decode($res['other_info']);
                unset($res['other_info']);
                $html .= '<tr>';
                $html .= '<td>' . $res['pet_name'] . '</td>';
                $html .= '<td>' . $res['firstname'] . ' ' . $res['lastname'] .'</td>';
                $html .= '<td>' . $res['contact_no'] . '</td>';
                $html .= '<td>' . date('F j, Y', strtotime($decoded_info->Visit_Date)) . '</td>';
                $html .= '<td>' . $decoded_info->Visit_Time . '</td>';
                $html .= '<td>' . date('F j, Y', strtotime($res['date_place'])) . '</td>';
                $html .= '<td>';
                $html .= '<button class="btn btn-primary" data-id="'.$res['trans_id'].'"><i class="fa fa-thumbs-up"></i></button>';
                $html .= '<button class="btn btn-danger" data-id="'.$res['trans_id'].'"><i class="fa fa-trash"></i></button>';
                $html .= '</td>';
                $html .= '</tr>';
            }

            $totalPages = ceil($totalRequest / $perPage);
            $pagination = '';

            for($i = 1; $i <= $totalPages; $i++) {
                $pagination .= '<li class="page-item ' . (($page == $i) ? 'active' : '') . '">';
                $pagination .= '<a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a>';
                $pagination .= '</li>';
            }
    
            echo json_encode(array(
                'adoption' => $html,
                'pagination' => $pagination
            ));
            
        }

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

        if($_SERVER['REQUEST_METHOD'] === 'GET') {

            getAdoptionRequest();

        } else {

            postPetForAdoption();

        }

    
?>