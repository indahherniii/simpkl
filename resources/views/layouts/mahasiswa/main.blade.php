<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>SIMPKL POLITAP</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="{{ url('template/assets/img/icon.ico') }}" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="{{ url('template/assets/js/plugin/webfont/webfont.min.js') }}"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
          "simple-line-icons"
        ],
        urls: ['{{ url('template/assets/css/fonts.min.css') }}']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ url('template/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('template/assets/css/atlantis.min.css') }}">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{ url('template/assets/css/demo.css') }}">
</head>

<body>
  <div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue">

        <a href="../index.html" class="logo">
          <img src="{{ url('template/assets/img/logo.svg') }}" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
          data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      @include('layouts.mahasiswa.partials.header')
      <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
    @include('layouts.mahasiswa.partials.sidebar')
    {{-- End Sidebar --}}

    <div class="main-panel">
      <div class="content">
        @yield('container')
      </div>
      {{-- Footer --}}
      @include('layouts.mahasiswa.partials.footer')
      {{-- End Footer --}}
    </div>
  </div>

  <!-- Custom template | don't include it in your project! -->
  <div class="custom-template">
    <div class="title">Settings</div>
    <div class="custom-content">
      <div class="switcher">
        <div class="switch-block">
          <h4>Logo Header</h4>
          <div class="btnSwitch">
            <p>Indah Putri Herni</p>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-toggle">
      <i class="flaticon-settings"></i>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('template/assets/js/core/jquery.3.2.1.min.js') }}"></script>
  <script src="{{ url('template/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('template/assets/js/core/bootstrap.min.js') }}"></script>
  <!-- jQuery UI -->
  <script src="{{ url('template/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
  <script src="{{ url('template/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

  <!-- jQuery Scrollbar -->
  <script src="{{ url('template/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
  <!-- Datatables -->
  <script src="{{ url('template/assets/js/plugin/datatables/datatables.min.js') }}"></script>
  <!-- Atlantis JS -->
  <script src="{{ url('template/assets/js/atlantis.min.js') }}"></script>
  <!-- Atlantis DEMO methods, don't include it in your project! -->
  <script src="{{ url('template/assets/js/setting-demo2.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#basic-datatables').DataTable({});

      $('#multi-filter-select').DataTable({
        "pageLength": 5,
        initComplete: function() {
          this.api().columns().every(function() {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
              .appendTo($(column.footer()).empty())
              .on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex(
                  $(this).val()
                );

                column
                  .search(val ? '^' + val + '$' : '', true, false)
                  .draw();
              });

            column.data().unique().sort().each(function(d, j) {
              select.append('<option value="' + d + '">' + d + '</option>')
            });
          });
        }
      });

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 5,
      });

      var action =
        '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action
        ]);
        $('#addRowModal').modal('hide');

      });
    });
  </script>
</body>

</html>
