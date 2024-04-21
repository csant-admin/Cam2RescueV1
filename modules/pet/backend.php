<?php 

session_start();
    require '../../classes/database/DBConnection.php';
    require '../../classes/model/My_Model.php';
    require '../../classes/controller/My_Controller.php';
    require '../../index.php';

    function displayPet() {
        $controller = new MY_Controller();
        $response = array('success' => false);
        $fetch_query = array(
            'select'    => '*',
        );

        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $perPage = 5;

        $offset = ($page - 1) * $perPage;

        $controller = new My_Controller();
        $result = $controller->getRawData('post_adoption', $fetch_query, $type='array'); 
        $paginatedResult = array_slice($result, $offset, $perPage);
        $totalPets = count($result);
        $html = '';
        foreach ($paginatedResult as $pet) {
            $decoded_url = json_decode($pet['image_url']);
            $path = @$decoded_url->image;
            $html .= '<div class="col-md-3 ms-2 mt-3">';
            $html .= '<div class="card">';
            $html .= '<img class="card-img-top" src="'. BASE_URL .'uploads/adoption/'. $path .'" alt="Card image cap">';
            $html .= '<div class="card-body">';
            $html .= '<h5 class="card-title">'.$pet['pet_name'].'</h5>';
            $html .= '<p>'.$pet['pet_gender'].'</p>';
            $html .= '<p>'.$pet['pet_description'].'</p>';
            $html .= '<button class="btn btn-danger adopt-btn adopt ml-2" data-id="'.$pet['pet_id'].'" pet-name="'.$pet['pet_name'].'">Adopt Now</button>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }
        $totalPages = ceil($totalPets / $perPage);
        $pagination = '';
        for ($i = 1; $i <= $totalPages; $i++) {
            $pagination .= '<li class="page-item ' . (($page == $i) ? 'active' : '') . '">';
            $pagination .= '<a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a>';
            $pagination .= '</li>';
        }

        echo json_encode(array(
            'pets' => $html,
            'pagination' => $pagination
        ));
    }

    function getInfo() {
        $controller = new My_Controller();
        $response = array('success' => false);
        if(isset($_POST)) {
            // echo '<pre>';
            // print_r($_POST['petName']);
            // echo '</pre>';
            // exit;

            $fetch_query = array(
                'select' =>  'username, lastname, firstname, barangay, city, contact',
                'where' => array('user_id' => $_SESSION['userData']['user_id']),
                'join' => array('user_details as detail' => 'user.user_id = detail.fk_user_id')
            );

            try {
                if($result = $controller->getRawData('user', $fetch_query, $type='row')) {
                    $new_array = array(
                        'Adoption_Username' => $result['username'],
                        'Adoption_Lastname' => $result['lastname'],
                        'Adoption_Firstname' => $result['firstname'],
                        'Adoption_Barangay' => $result['barangay'],
                        'Adoption_City' => $result['city'],
                        'Adoption_Contact' => $result['contact'],
                        'Adoption_PetId' => $_POST['petID'],
                        'Adoption_PetName' => $_POST['petName'],
                    );
                    $response['success'] = true;
                    $response['msg'] = '';
                    $response['data'] = $new_array;
                    
                } else {
                    $response['msg'] = 'No Data is Found!';
                    $response['data'] = [];
                }
            }catch(PDOExeption $e) {

                $response['msg'] = 'ERROR ' . $e-getMessage();
            }

        }

        echo json_encode($response);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        displayPet();
    } elseif($_SERVER['REQUEST_METHOD']==='POST') {
        getInfo();
    } 


?>