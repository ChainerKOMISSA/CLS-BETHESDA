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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Traitements non soldés</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Traitements non soldés</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Traitements non soldés</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            @if (session()->has("successDelete"))
              <div class="alert alert-secondary">
                <p><h3>{{session()->get('successDelete')}}</h3></p>
              </div>
              @endif
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Numéro</th>
                <th>Date</th>
                <th>Patient</th>
                <th>Plaintes</th>
                <th>Analyse demandée</th>
                <th>Résultat</th>
                <th>Diagnostic</th>
                <th>Produit utilisé</th>
                <th>Montant total</th>
                <th>Paiement</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($nonsoldes as $key => $nonsolde)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$nonsolde->date}}</td>
                <td>{{$nonsolde->patient_id}}</td>
                <td>{{$nonsolde->plaintes}}</td>
                <td>{{$nonsolde->analyse_id}}</td>
                <td>{{$nonsolde->resultat}}</td>
                <td>{{$nonsolde->diagnostic}}</td>
                <td>{{$nonsolde->produit_id}}</td>
                <td>{{$nonsolde->montant}}</td>
                <td>{{$nonsolde->paiement}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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

<!-- jQuery -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{URL::asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/js/adminlte.min.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
