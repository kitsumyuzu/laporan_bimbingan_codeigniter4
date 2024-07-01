                </div>

            </div>

        </div>

    </section>

</div>

<!-- Main Footer -->

    <footer class="main-footer">

        <div class="float-right d-none d-sm-block">
        <b>Hosted by</b> <a href="https://github.com/kitsumyuzu" style="color: #869099;">Kitsumyuzu</a>
        </div>

        <strong>Copyright &copy; 2023</a>.</strong>
        All rights reserved.

    </footer>

<!-- jQuery -->

    <script src="<?= base_url('vendor') ?>/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap -->

    <script src="<?= base_url('vendor') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->

    <script src="<?= base_url('vendor') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->

    <script src="<?= base_url('vendor') ?>/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->

<!-- jQuery Mapael -->

    <script src="<?= base_url('vendor') ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/raphael/raphael.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Table -->

    <script src="<?= base_url('vendor') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('vendor') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>

    // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    // .buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $(function() {

            $("#table-responsive").DataTable({

            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
            "buttons": false,

            })

        });

        $(function() {

            $("#tableData").DataTable({

            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print"],

            }).buttons().container().appendTo('#tableData_wrapper .col-md-6:eq(0)');

        });

        // On click event show password

        $(document).ready(function() {

            $("#show-password").on('click', function(event) {

                event.preventDefault();

                if($('#password').attr("type") == "password") {

                    $('#password').attr('type', 'text');
                    $('.fa-eye-slash').addClass('fa-eye');
                    $('.fa-eye').removeClass('fa-eye-slash');

                } else {

                    $('#password').attr('type', 'password');
                    $('.fa-eye').addClass('fa-eye-slash');
                    $('.fa-eye-slash').removeClass('fa-eye');

                };

            });

        });

        // Filter maxlength on input field type of number

        document.querySelectorAll('input[type="number"]').forEach(input => {

            input.oninput = () => {

                if (input.value.length > input.maxLength) input.value = input.value.slice(0, input.maxLength);

            };

        });

    </script>

</body>

<!-- Style -->

    <style>

        /* Hide scrollbar */

        *::-webkit-scrollbar {

            display: none;

        }

        /* Set a spinner button on input field of number to hidden */

        input[type=number]::-webkit-inner-spin-button {

            -webkit-appearance: none;
            margin: 0;
        
        }

        /* Disable pointer for disabled button type */

        button#disabled {

            pointer-events: none;

        }

        /* Style for eye icon */

        .input-group-text i {

            cursor: pointer;

        }

        /* Style when the password is shown */

        .input-group-text.show-password i {

            color: #007bff;

        }

    </style>

</html>