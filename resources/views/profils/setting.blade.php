{{-- \resources\views\profils\setting.blade.php --}}
@extends('layouts.app')

@section('title', '| Changer mot de passe')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-cog'></i> Paramètres
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-cog'></i> Paramètres</li>
      </ol>
    </section>

<!-- Main content -->

<section class="content">
            @include('inc.messages')
            <div class='col-lg-8 col-lg-offset-2'>
                  <div class="box box-info">
		            <div class="box-header with-border">
		              <h3 class="box-title">Changer mot de passe</h3>
		            </div>
		            <!-- /.box-header -->
		            <!-- form start -->
		            <form class="form-horizontal" method="POST" action="{{route('updatepassword')}}">
		            	@csrf
		              <div class="box-body">

		                <div class="form-group is-empty">
		                  <label for="inputPassword3" class="col-sm-4 control-label">Nouveau Mot de passe</label>

		                  <div class="col-sm-8">
		                    <input type="password" class="form-control" id="inputPassword3" placeholder="Nouveau Mot de passe" name="password">
		                  </div>
		                </div>

		                <div class="form-group is-empty">
		                  <label for="inputPassword3" class="col-sm-4 control-label">Confirmation mot de passe</label>

		                  <div class="col-sm-8">
		                    <input type="password" class="form-control" id="inputPassword3" placeholder="Confirmation Mot de passe" name="password_confirmation">
		                  </div>
		                </div>

		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer">
		                <button type="reset" class="btn btn-default">Annuler</button>
		                <button type="submit" class="btn btn-info pull-right">Modifier</button>
		              </div>
		              <!-- /.box-footer -->
		            </form>
		          </div>
                <!-- /.box -->
            </div>
          </section>
@endsection