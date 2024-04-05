<?php

    include '../../views/includes/dashboard/head.php';
    include '../../views/includes/dashboard/sidebar.php';
    include '../../views/includes/dashboard/header.php';
?>

<div class="container-fluid">
        <div class="row">
            <div class="card w-100">
                <div class="card-body">
                    <table class="table table-striped" id="user_table">
                        <thead>
                            <tr>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact #</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="userList">
                            
                        </tbody>
                    </table>
                    <div id="pagination" class="d-flex justify-content-end"></div>
                </div>
            </div>
        </div>
        <!--  Row 1 -->
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade bd-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-5" id="editModal">
        <div class="modal-content p-5">
            <form id="editDataForm">
                <div id="error-message-alert"></div>
                <input type="hidden" class="form-input form-control form-control-lg" name="user_id">
                <div class="row">
                    <label> Name </label>
                    <div class="col-md-6">
                        <input type="text" class="form-input form-control form-control-lg" name="lastname">
                        <i class="fa fa-user fa-input-icon"></i>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-input form-control form-control-lg" name="firstname">
                        <i class="fa fa-user fa-input-icon"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label> Email </label>
                        <input type="email" class="form-input form-control form-control-lg" name="username">
                        <i class="fa fa-envelope fa-input-icon"></i>
                    </div>
                    <div class="col-md-6">
                        <label> Phone </label>
                        <input type="text" class="form-input form-control form-control-lg" name="contact">
                        <i class="fa fa-phone fa-input-icon"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label> Barangay </label>
                        <input type="text" class="form-input form-control form-control-lg" name="barangay">
                        <i class="fa fa-map-marker fa-input-icon"></i>
                    </div>
                    <div class="col-md-6">
                        <label> City </label>
                        <input type="text" class="form-input form-control form-control-lg" name="city">
                        <i class="fa fa-map-marker fa-input-icon"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label> Office Name </label>
                        <input type="text" class="form-input form-control form-control-lg" name="office_name">
                        <i class="fa fa-flag fa-input-icon"></i>
                    </div>
                    <div class="col-md-6">
                        <label> Office Type </label>
                        <input type="text" class="form-input form-control form-control-lg" name="office_type">
                        <i class="fa fa-flag fa-input-icon"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label> Availability </label>
                        <select class="form-control form-control-lg" name="day_available">
                            <option selected value="">Days Available</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Everyday">Sunday to Saturday</option>
                        </select>
                        <i class="fa fa-calendar fa-input-icon"></i>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary btn-lg ml-2">Save Changes</button>
                        <button type="submit" class="btn btn-danger btn-lg ml-2">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <?php 
        include '../../views/includes/dashboard/script.php';
    ?>

  