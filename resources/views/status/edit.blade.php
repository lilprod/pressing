{{-- \resources\views\articles\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Editer Etat')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Editer Etat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Editer Etat</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class='col-md-4 col-md-offset-4'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-plus-square'></i> Editer Etat</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::model($etat, array('route' => array('status.update', $etat->id) , 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}{{-- Form model binding to automatically populate our fields with user data --}}
                <div class="box-body">

                  <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                          {{ Form::label('title', 'Libellé') }}
                          {{ Form::text('title', null , array('class' => 'form-control')) }}
                        </div>

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
