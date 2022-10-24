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
            <h1>Pharmacie</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route("home")}}">Accueil</a></li>
              <li class="breadcrumb-item active">Enregistrer un produit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            @if (session()->has("success"))
              <div class="alert alert-secondary">
                <p><h3>{{session()->get('success')}}</h3></p>
              </div>
              @endif
              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                  </ul>
              </div>
              @endif
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Enregistrer un produit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('ajoutproduit')}}">
                @csrf
                <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nom du produit</label>
                        <input type="text" class="form-control" name="nomproduit" placeholder="Entrer le nom" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Prix du produit</label>
                        <input type="number" class="form-control" name="prixproduit" placeholder="Entrer le prix" required>
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Type</label>
                        <select name="type_id" id="type_id" class="form-control">
                            <option> </option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->libelle}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Quantité</label>
                        <input type="number" class="form-control" name="qte" placeholder="Entrer la quantité" required>
                      </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{route('listecomprimes')}}" class="btn btn-secondary">Annuler</a>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
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
