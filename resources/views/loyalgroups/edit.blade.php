{{-- \resources\views\articles\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Editer Groupe de Fidélisation')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Groupes de Fidélisation
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Groupes de Fidélisation</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class='col-md-6 col-md-offset-3'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-plus-square'></i> Editer Groupe de Fidélisation</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::model($loyalgroup, array('route' => array('loyalgroups.update', $loyalgroup->id) , 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}{{-- Form model binding to automatically populate our fields with user data --}}
                <div class="box-body">

                    <div class="col-md-12">
                        <div class="form-group">
                          {{ Form::label('title', 'Nom du Groupe') }}
                          {{ Form::text('title', null , array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          {{ Form::label('rate', 'Taux de Remise (%)') }}
                          {{ Form::number('rate', null, array('class' => 'form-control')) }}
                      </div>
                  </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          {{ Form::label('description', 'Description') }}
                          {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                      </div>
                  </div>

                  </div>
                <!-- /.box-body -->

              <div class="box-footer">
                {{ Form::submit('Editer', array('class' => 'btn bg-olive btn-block')) }}
              </div>
            {{ Form::close() }}
          </div>
          <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->

@endsection
