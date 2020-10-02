    <!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <p> Desarrollador: Jorguer1@gmail.com</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>KimApp</span></strong>.
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<!-- Vendor JS Files -->
<script src='{{ asset("estilos/vendor/jquery/jquery.min.js") }}'></script>
<script src='{{ asset("estilos/vendor/bootstrap/js/bootstrap.bundle.min.js") }}'></script>
<script src='{{ asset("estilos/vendor/jquery.easing/jquery.easing.min.js") }}'></script>
<script src='{{ asset("estilos/vendor/php-email-form/validate.js") }}'></script>
<script src='{{ asset("estilos/vendor/owl.carousel/owl.carousel.min.js") }}'></script>
<script src='{{ asset("estilos/vendor/venobox/venobox.min.js") }}'></script>
<script src='{{ asset("estilos/vendor/isotope-layout/isotope.pkgd.min.js") }}'></script>
<!-- Template Main JS File -->
<script src='{{ asset ("estilos/js/main.js") }}'></script>
<!-- dataTable-->
<script type="text/javascript" charset="utf8" src='{{ asset("DataTables/datatables.js") }}'></script>

<script type="text/javascript" charset="utf8" src="{{ asset('DataTables/datatables.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#tablaPais').DataTable();
    });
</script>
</body>
</html>