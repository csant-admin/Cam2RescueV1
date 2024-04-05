        <script src="<?php echo BASE_URL . 'assets/js/jquery/library/jquery.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/jquery/library/my_jquery.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="<?php echo BASE_URL . 'assets/js/datatables/js/dataTables.bootstrap5.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/datatables/js/dataTables.bootstrap5.min.js'; ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script>
            var base_url = '<?php echo BASE_URL ?>'
        </script>
        <script src="<?php echo BASE_URL . 'assets/js/modules/register.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/modules/login.js'; ?>"></script>
        <script src="<?php echo BASE_URL . 'assets/js/modules/login.js'; ?>"></script>
        <script>
            $(document).ready(function(){
                document.addEventListener("DOMContentLoaded", function(){
                    if (window.innerWidth > 992) {
                        document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
                        everyitem.addEventListener('mouseover', function(e){
                            let el_link = this.querySelector('a[data-bs-toggle]');
                            if(el_link != null){
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add('show');
                            nextEl.classList.add('show');
                            }
                        });
                        everyitem.addEventListener('mouseleave', function(e){
                            let el_link = this.querySelector('a[data-bs-toggle]');
                            if(el_link != null){
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove('show');
                            nextEl.classList.remove('show');
                            }
                        })
                        });
                    }
                });
            })
        </script>
    </body>
</html>