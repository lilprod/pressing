{{-- \resources\views\deliveryhours\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Editer Heure de retrait')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Editer Heure de retrait
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Editer eure de retrait</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class='col-md-8 col-md-offset-2'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-plus-square'></i> Editer eure de retrait</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::model($deliveryhour, array('route' => array('deliveryhours.update', $deliveryhour->id) , 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}{{-- Form model binding to automatically populate our fields with user data --}}
                <div class="box-body">

                      <div class="col-xs-4">
                        <div class="form-group">
                            {{ Form::label('lavage_hour', 'Heure de Lavage simple') }}
                            {{ Form::text('lavage_hour', null, array('class' => 'form-control')) }}
                          </div>
                      </div>

                        <div class="col-xs-4">
                          <div class="form-group">
                            {{ Form::label('repassage_hour', 'Heure de repassage') }}
                            {{ Form::text('repassage_hour', null, array('class' => 'form-control')) }}
                          </div>
                        </div>

                        <div class="col-xs-4">
                          <div class="form-group">
                            {{ Form::label('express_hour', 'Heure Express') }}
                            {{ Form::text('express_hour', null, array('class' => 'form-control')) }}
                          </div>
                        </div>
                  </div>
                <!-- /.box-body -->

              <div class="box-footer">
                {{ Form::submit('Editer', array('class' => 'btn bg-olive')) }}
              </div>
            {{ Form::close() }}
          </div>
          <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->

@endsection
