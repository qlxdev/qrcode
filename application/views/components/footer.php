
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © <?= date('Y') ?></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>assets/vendor/global/global.min.js"></script>
    <script src="<?= base_url() ?>assets/js/quixnav-init.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.min.js"></script>
    
    <script defer src="<?= base_url() ?>assets/fontawesome/js/all.js"></script>
    <!-- Datatable -->
    <script src="<?= base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins-init/datatables.init.js"></script>

    <?php if ($this->uri->segment(1)=='dashboard'): ?>
        <!-- Vectormap -->
        <script src="<?= base_url() ?>assets/vendor/raphael/raphael.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/morris/morris.min.js"></script>


        <script src="<?= base_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/chart.js/Chart.bundle.min.js"></script>

        <script src="<?= base_url() ?>assets/vendor/gaugeJS/dist/gauge.min.js"></script>

        <!--  flot-chart js -->
        <script src="<?= base_url() ?>assets/vendor/flot/jquery.flot.js"></script>
        <script src="<?= base_url() ?>assets/vendor/flot/jquery.flot.resize.js"></script>

        <!-- Owl Carousel -->
        <script src="<?= base_url() ?>assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

        <!-- Counter Up -->
        <script src="<?= base_url() ?>assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
        <script src="<?= base_url() ?>assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="<?= base_url() ?>assets/js/dashboard/dashboard-1.js"></script>
    <?php endif ?>


</body>

</html>