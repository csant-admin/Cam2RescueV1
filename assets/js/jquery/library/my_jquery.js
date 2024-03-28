$(document).ready(function(){

    home(); 

    function home() {

        $('#assets-css').attr('href', base_url + 'assets/css/home.css');
    }

    $(document).on('click', '.nav-link', function(e) {
        e.preventDefault();
        var page = $(this).attr('page-name');
        var csspath = base_url + 'assets/css/' + page + '.css';
        var jspath = base_url + 'assets/js/' + page + '.js';
        var pageUrl = base_url + 'modules/' + page + '/' + page + '.php';
        $('#assets-css').attr('href', csspath);
        $('#assets-js').attr('src', jspath);
        $(this).attr('href', pageUrl)
    });
    
});
