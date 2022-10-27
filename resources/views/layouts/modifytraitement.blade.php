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
        <link rel="stylesheet" href="assets/css/newcss.css">

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
            <h1>Traitement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route("home")}}">Accueil</a></li>
              <li class="breadcrumb-item active">Modifier un traitement</li>
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
                <h3 class="card-title">Modifier un traitement</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('ajouttraitement')}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Date du traitement</label>
                            <input type="date" name="date" class="form-control" value="{{$traitement->date}}" required >
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Nom du patient</label>
                            <select name="patient_id" class="form-control">
                                <option value="">Sélectionnez un patient</option>
                                @foreach ($patients as $patient)
                                    @if($patient->id == $traitement->patient_id)
                                    <option value="{{$patient->id}}" selected>{{$patient->nom}} {{$patient->prenom}}</option>
                                    @else
                                    <option value="{{$patient->id}}">{{$patient->nom}} {{$patient->prenom}}</option>
                                    @endif
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Plaintes</label>
                            <input type="text" name="plaintes" id="" class="form-control" value="{{$traitement->plaintes}}"/>
                          </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Analyse demandée</label>
                        <select name="analyse_id" class="form-control">
                            <option value="">Sélectionnez l'analyse</option>
                            @foreach ($analyses as $analyse)
                                @if ($analyse->id == $traitement->analyse_id)
                                <option value="{{$analyse->id}}" selected>{{$analyse->nom}}</option>
                                @else
                                <option value="{{$analyse->id}}">{{$analyse->nom}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Résultat de l'analyse</label>
                        <input type="text" name="resultat" class="form-control" value="{{$traitement->resultat}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Diagnostic final</label>
                        <input type="text" name="diagnostic" id="" class="form-control" value="{{$traitement->diagnostic}}"/>
                    </div>
                </div>
                <div class="row">
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Produits utilisés</label>
                        <select name="produit_id" id="testSelect1" class="form-control">
                            @foreach ($dispos as $dispo)
                                @if ($dispo->id == $traitement->produit_id)
                                <option value="{{$dispo->id}}" selected>{{$dispo->nomproduit}}</option>
                                @else
                                <option value="{{$dispo->id}}">{{$dispo->nomproduit}}</option>
                                @endif
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Montant total</label>
                        <input type="number" name="montant" class="form-control" value="{{$traitement->montant}}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Paiement</label>
                        <select name="paiement" id="" class="form-control">
                            <option value="oui">Effectué</option>
                            <option value="non">Non effectué</option>
                        </select>
                      </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{route('listetraitement')}}" class="btn btn-secondary">Annuler</a>
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

<script src="{{URL::asset('assets/js/newjs.js')}}"></script>

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
