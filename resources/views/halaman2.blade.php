<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UTS SIG</title>

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
  <link rel="stylesheet" href="/css/leaflet-search.css" />
  <link rel="stylesheet" href="/css/style.css" />

  <style>
    .search-input {
      font-family:Courier
    }
    .search-input, .leaflet-control-search {
      max-width:400px;
    }
  </style>

</head>

<body>
  <div class="wrap">

    <!-- ======= main ======= -->
    <main id="main">

      <div class="main-top">

            <div id="map"></div>
            <span style="margin-left: 15px;"><i>*Cari alamatnya terlebih dahulu</i></span>
          
      </div>

      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>Ringgo Galih Sadewo</span></strong>
        </div>
      </div>
    </main><!-- End main -->

  </div>

  <script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
  <script src="/js/leaflet-search.js"></script>

  <script type="text/javascript">
    
    var map = new L.Map('map', {
      zoom: 9, 
      center: new L.latLng([  -5.450000,105.266670]) 
    });

    L.marker([  -5.450000, 105.266670]).addTo(map)

    map.addLayer(new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));  //base layer
    
    L.control.search({
      url: 'https://nominatim.openstreetmap.org/search?format=json&q={s}',
      propertyName: 'display_name',
      jsonpParam: 'json_callback',    
      propertyLoc: ['lat','lon'],
      autoCollapse: true,
      autoType: false,
      minLength: 2,
      moveToLocation: function(latlng, title, map) {
        //https://wiki.openstreetmap.org/wiki/Shortlink

        var url = L.Util.template('https://www.google.com/maps/search/{lat},{lon}/@{lat},{lon}', {
          lat: latlng.lat,
          lon: latlng.lng,
          zoom: map.getZoom()
        });

        location.href = url;
      }
    })
    .addTo(map);

  </script>

  <!-- Vendor JS Files -->
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html>