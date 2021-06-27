

<footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2021 <div class="bullet"></div>Development By <a href="https://nauval.in/">IOT Rafy & Ilyas</a>
  </div>
  <div class="footer-right">
    2.3.0
  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{url('/assets_admin/js/stisla.js')}}"></script>



<!-- DATA TABLES -->
<script src="assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Template JS File -->
<script src="{{url('/assets_admin/js/scripts.js')}}"></script>
<script src="{{url('/assets_admin/js/custom.js')}}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<!-- Page Specific JS File -->
</body>
</html>
