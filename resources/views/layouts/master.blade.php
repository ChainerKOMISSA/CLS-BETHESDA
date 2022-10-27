<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('layouts.head')
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/img/logobethesda.jpg')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('layouts.main-header')

  <!-- Main Sidebar Container -->
  @include('layouts.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tableau de bord</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Tableau de bord</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

              <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$countpatient}}</h3>
                    <p>Patients</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-bed"></i>
                  </div>
                  <a href="{{route('listepatient')}}" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                  <div class="inner">
                    <h3>{{$countprod}}</h3>
                    <p>Produits</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-capsules"></i>
                  </div>
                  <a href="{{route('listeproduits')}}" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                  <div class="inner">
                    <h3>0</h3>
                    <p>Accouchements</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-baby"></i>
                  </div>
                  <a href="#" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$countinf}}</h3>
                    <p>Infirmiers</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-user-md"></i>
                  </div>
                  <a href="{{route('listeinfirmier')}}" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>

        </div>
        <!-- /.row -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
              <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$counttraitement}}</h3>
                    <p>Liste des soins</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-procedures"></i>
                  </div>
                  <a href="{{route('listetraitement')}}" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                  <div class="inner">
                    <h3>{{$countrupture}}</h3>
                    <p>Alerte stock</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <a href="{{route('listerupture')}}" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                  <div class="inner">
                    <h3>{{$nonsoldes}}</h3>
                    <p>Traitements non soldés</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                  </div>
                  <a href="{{route('nonsoldes')}}" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>


              <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>Analyses</h3>
                    <p>Cliquez pour voir les détails</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-flask"></i>
                  </div>
                  <a href="{{route('listeanalyses')}}" class="small-box-footer">
                    En savoir plus <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div>
              <!-- /.col -->
        </div>
        <!-- Main row -->

        <!--TABLEAU-->
           <!-- <img src="{{asset('assets/img/logobethesda.jpg')}}" alt="Logo Bethesda" height="300" width="300" class="rounded mx-auto d-block" style="margin-top: 170px;">-->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.footer-scripts')

<!-- DataTables  & Plugins -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["Copy", "csv", "excel", "pdf", "Print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
    </script>


<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
</body>
</html>
