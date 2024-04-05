$(document).ready(function() {
       
    let user_tbl = new DataTable('#user_tbl', {

        responsive: true,
        ajax: {
            url: base_url + 'index.php/dashboard/get_user', 
            type: 'POST',
            dataSrc: 'data', 
        },
        columns: [
            { data: 'user_id' },
            { data: 'firstname' },
            { data: 'lastname' },
            { data: 'username' },
            { data: 'contact' },
            { data: 'office_name' },
            { data: 'subscription' },

            { data: null, "render": function ( data, type, row, meta ) {

               var str = ''
               str +='<div class="btn-group m-auto">'
               str += '<button class="btn btn-danger btn-sm " data-id="'+ row.user_id +'"><i class="fas fa-lock"></i> Deactivate</button>';
               str += '<button class="btn btn-warning btn-sm " data-id="'+ row.user_id +'"><i class="fas fa-edit"></i> Edit</button>';
               str += '<button class="btn btn-danger btn-sm " data-id="'+ row.user_id +'"><i class="fas fa-trash"></i> Delete</button>';
               str += '</div>'
               return str;
              }
            }
        ],

        "columnDefs": [
            {
                "orderable": false, 
                "targets": [7]

            }
        ],
        "paging": true,
        "pageLength": 20,

        // "rowCallback": function(row, data) {
        //     // Check the conditions and hide rows where user_type is 1 and rent_status is 0
        //     if (user_type == 1 && data.rent_status == 0) {
                
        //         $(row).hide(); // Hide the row
        //     }
        // }
    });

});