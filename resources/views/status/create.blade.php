{{-- \resources\views\articles\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Ajouter Etat')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Ajouter Etat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Ajouter Etat</li>
      </ol>
    </section>

<!-- Main content -->
          <section class="content">
            <div class='col-lg-4 col-lg-offset-4'>
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class='fa fa-plus-square'></i> Ajouter Etat</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      {{ Form::open(array('url' => 'status', 'enctype' => 'multipart/form-data')) }}
                      <div class="box-body">
                        
                          <div class="col-md-12">

                              <div class="form-group">
                                {{ Form::label('title', 'Libellé') }}
                                {{ Form::text('title', '', array('class' => 'form-control')) }}
                              </div>

                          </div>
                      </div>
                      <!-- /.box-body -->

                    <div class="box-footer">
                      {{ Form::submit('Ajouter', array('class' => 'btn bg-olive btn-block')) }}
                    </div>
                  {{ Form::close() }}
                </div>
                <!-- /.box -->
            </div>
          </section>
          <!-- /.content -->

@endsection
