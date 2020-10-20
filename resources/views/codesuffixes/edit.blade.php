{{-- \resources\views\articles\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Editer Suffixe Code')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Editer Suffixe Code
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Editer Suffixe Code</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class='col-md-8 col-md-offset-2'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-plus-square'></i> Editer Suffixe Code</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::model($codesuffixe, array('route' => array('codesuffixes.update', $codesuffixe->id) , 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}{{-- Form model binding to automatically populate our fields with user data --}}
                <div class="box-body">

                    <div class="col-xs-6">
                        <div class="form-group">
                          {{ Form::label('title', 'Suffixe Code') }}
                          {{ Form::text('title', null , array('class' => 'form-control')) }}
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
