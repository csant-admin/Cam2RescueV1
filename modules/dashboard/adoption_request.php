<?php 

    include '../../views/includes/dashboard/head.php';
    include '../../views/includes/dashboard/sidebar.php';
    include '../../views/includes/dashboard/header.php';

?>

    <div class="container p-5">
        <div class="card mt-5">
            <div class="card-header mt-5 p-4 bg-primary">
                <h3>Adoption Request</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-responsive{-sm|-md|-lg|-xl}">
                    <thead>
                        <tr>
                            <th scope="col">Pet Name</th>
                            <th scope="col">Adoptee</th>
                            <th scope="col">Contact #</th>
                            <th scope="col">Visit_Date</th>
                            <th scope="col">Visit_Time</th>
                            <th scope="col">Date Booked</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="adoptionTbl">
                    
                    </tbody>
                </table>
                <div id="pagination" class="d-flex justify-content-end"></div>
            </div>
        </div>
    </div>


<?php 

    include '../../views/includes/dashboard/script.php';

?>