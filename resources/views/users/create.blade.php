{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Ajouter utilisateur')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-user-plus'></i> Ajouter utilisateur
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-user-plus'></i> Ajouter utilisateur</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      @include('inc.messages')
      <div class='col-md-8 col-md-offset-2'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-user-plus'></i> Ajouter utilisateur</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::open(array('url' => 'users', 'enctype' => 'multipart/form-data')) }}
                <div class="box-body">

                  <div class="row">
                    <div class="col-md-6">

                      <div class="form-group">
                        {{ Form::label('name', 'Nom') }}
                        {{ Form::text('name', '', array('class' => 'form-control', 'id' => 'name', 'onkeyup' => 'changeToUpperCase(this)')) }}
                      </div>

                      <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', '', array('class' => 'form-control')) }}
                      </div>

                      <div class="form-group">
                            {{ Form::label('password', 'Mot de passe') }}<br>
                            {{ Form::password('password', array('class' => 'form-control')) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('city', 'Ville de résidence') }}
                        {{ Form::text('city', '' , array('class' => 'form-control', 'id' => 'address')) }}
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="form-group">
                        {{ Form::label('firstname', 'Prénoms') }}
                        {{ Form::text('firstname', '', array('class' => 'form-control', 'id' => 'firstname')) }}
                      </div>

                      <div class="form-group">
                        {{ Form::label('phone_number', 'Numero de téléphone') }}
                        {{ Form::text('phone_number', '', array('class' => 'form-control')) }}
                      </div>


                        <div class="form-group">
                              {{ Form::label('password', 'Confirmation du mot de passe') }}<br>
                              {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

                        </div>

                        <div class="form-group">
                            {{ Form::label('profile_picture', 'Image de profil') }}
                            {{ Form::file('profile_picture') }}
                        </div>
                    
                    </div>
                  </div>
                 
                  <h5><b>Assigner Rôle</b></h5>
                    <div class='form-group'>
                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                        @endforeach
                    </div>

                </div>
                <!-- /.box-body -->

              <div class="box-footer">
                {{ Form::submit('Ajouter', array('class' => 'btn bg-olive')) }}
              </div>
            {{ Form::close() }}
          </div>
          <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->
<script>
    function changeToUpperCase(t){
      var eleVal = document.getElementById(t.name);
      eleVal.value= eleVal.value.toUpperCase();
      
    }
  </script>
  <script>
    $('#firstname').on('keypress', function() { 
        var $this = $(this), value = $this.val(); 
        if (value.length === 1) { 
          $this.val( value.charAt(0).toUpperCase() );
        }  
    });

    $('#address').on('keypress', function() { 
        var $this = $(this), value = $this.val(); 
        if (value.length === 1) { 
          $this.val( value.charAt(0).toUpperCase() );
        }  
    });
</script>
@endsection
