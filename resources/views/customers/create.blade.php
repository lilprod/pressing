{{-- \resources\views\customers\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Ajouter Client')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-user-plus'></i> Ajouter Client
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-user-plus'></i> Ajouter Client</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      @include('inc.messages')
      <div class='col-md-8 col-md-offset-2'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-user-plus'></i> Ajouter Client</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::open(array('url' => 'customers', 'enctype' => 'multipart/form-data')) }}
                <div class="box-body">

                    <div class="col-md-6">

                        <div class="form-group">
                          {{ Form::label('name', 'Nom') }}
                          {{ Form::text('name', '', array('class' => 'form-control', 'id' => 'name', 'onkeyup' => 'changeToUpperCase(this)')) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::email('email', '', array('class' => 'form-control')) }}
                        </div>

                        <!--<div class="form-group">
                            {{ Form::label('password', 'Mot de Passe') }}<br>
                            {{ Form::password('password', array('class' => 'form-control')) }}
                        </div>-->

                        <div class="form-group">
                            {{ Form::label('address', 'Adresse') }}
                            {{ Form::text('address', '', array('class' => 'form-control' , 'id' => 'address')) }}
                        </div>

                    </div>

                      <div class="col-md-6">

                            <div class="form-group">
                                {{ Form::label('firstname', 'Prénoms') }}
                                {{ Form::text('firstname', '', array('class' => 'form-control', 'id' => 'firstname')) }}
                            </div>

                              <div class="form-group">
                                {{ Form::label('phone_number', 'Numéro de Téléphone') }}
                                {{ Form::text('phone_number', '', array('class' => 'form-control')) }}
                            </div>

                            <!--<div class="form-group">
                              {{ Form::label('password', 'Confirmation de Mot de Passe') }}<br>
                              {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                            </div>-->
                              
                            <div class="form-group">
                                {{ Form::label('profile_picture', 'Image de Profil') }}
                                {{ Form::file('profile_picture') }}
                            </div>
                      
                      </div>
                

                </div>
                <!-- /.box-body -->

              <div class="box-footer">
                {{ Form::submit('Ajouter Client', array('class' => 'btn btn-block bg-olive')) }}
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
