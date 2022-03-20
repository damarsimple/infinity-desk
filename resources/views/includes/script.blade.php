<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  
  <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>

  <script>
    $(document).ready(function () {
      $(".xzoom, .xzoom-gallery").xzoom({
        zoomWidth: 500,
        tittle: false,
        tint: "#333",
        Xoffset: 15,
      });
    });
  </script>

<script src="{{ url('frontend/admin/script/customer/modernizr-2.8.3.min.js') }}"></script>

<script>
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });
	});
</script>

<script src="{{ url('frontend/admin/script/customer/owl.carousel.min.js') }}"></script>
<script src="{{ url('frontend/admin/script/customer/metisMenu.min.js') }}"></script>
<script src="{{ url('frontend/admin/script/customer/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('frontend/admin/script/customer/jquery.slicknav.min.js') }}"></script>

<!-- Start datatable js -->
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>

<!-- all line chart activation -->
<script src="{{ url('frontend/admin/script/customer/line-chart.js') }}"></script>
<!-- all pie chart -->
<script src="{{ url('frontend/admin/script/customer/pie-chart.js') }}"></script>
<!-- others plugins -->
<script src="{{ url('frontend/admin/script/customer/plugins.js') }}"></script>
<script src="{{ url('frontend/admin/script/customer/scripts.js') }}"></script>

<script type="application/javascript" async="" src="https://certify-js.alexametrics.com/atrk.js" data-ctrld="yes"></script>