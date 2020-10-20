{{-- \resources\views\deposits\show.blade.php --}}
@extends('layouts.app')

@section('title', '| Mon profil')

@section('content')

<section class="content-header">
      <h1>
        Mon profil
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Paramètres</a></li>
        <li class="active">Mon profil</li>
      </ol>
    </section>



    <!-- Main content -->
<section class="content">
	@include('inc.messages')
	<div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{url('/storage/profile_images/'.auth()->user()->profile_picture)}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{auth()->user()->name}} {{auth()->user()->firstname}}</h3>

              <p class="text-muted text-center">Software Engineer</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">A propos de moi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

              <p class="text-muted">
                {{auth()->user()->email}}
              </p>

              <hr>
              <strong><i class="fa fa-phone margin-r-5"></i> Téléphone</strong>

              <p class="text-muted">
                {{auth()->user()->phone_number}}
              </p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Adresse</strong>

              <p class="text-muted">{{auth()->user()->city}}</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-9">
        	<div class="box box-info">
		            <div class="box-header with-border">
		              <h3 class="box-title">Changer mes informations de profil</h3>
		            </div>
		            <!-- /.box-header -->
		            <!-- form start -->
		            <form class="form-horizontal" method="POST" action="{{ route('profils.store') }}">
		            	@csrf
		              <div class="box-body">

		                <div class="form-group is-empty">
		                  <label for="inputName" class="col-sm-4 control-label">Nom</label>

		                  <div class="col-sm-8">
		                    <input type="text" class="form-control" id="inputName" placeholder="Votre nom" name="name" value="{{auth()->user()->name}}">
		                  </div>
		                </div>

		                <div class="form-group is-empty">
		                  <label for="inputFirstname" class="col-sm-4 control-label">Prénom(s)</label>

		                  <div class="col-sm-8">
		                    <input type="text" class="form-control" id="inputFirstname" placeholder="Prénom(s)" name="firstname" value="{{auth()->user()->firstname}}">
		                  </div>
		                </div>

		                <div class="form-group is-empty">
		                  <label for="inputEmail" class="col-sm-4 control-label">Email</label>

		                  <div class="col-sm-8">
		                    <input type="email" class="form-control" id="inputEmail" placeholder="Votre adresse email" name="email" value="{{auth()->user()->email}}">
		                  </div>
		                </div>

		                <div class="form-group is-empty">
		                  <label for="inputTel" class="col-sm-4 control-label">Téléphone</label>

		                  <div class="col-sm-8">
		                    <input type="text" class="form-control" id="inputTel" placeholder="Numéro de Téléphone" name="phone_number" value="{{auth()->user()->phone_number}}">
		                  </div>
		                </div>

		                <div class="form-group is-empty">
		                  <label for="inputCity" class="col-sm-4 control-label">Adresse</label>

		                  <div class="col-sm-8">
		                    <textarea class="form-control" id="inputCity" placeholder="Adresse - Ville de résidence" name="city">{{auth()->user()->city}}</textarea> 
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

    </div>
</section>
 @endsection