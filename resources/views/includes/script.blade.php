<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  
  <script src="frontend/libraries/xzoom/xzoom.min.js"></script>

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