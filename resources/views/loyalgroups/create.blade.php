{{-- \resources\views\loyalgroups\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Ajouter Groupe de Fidélisation')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Groupe de Fidélisation
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Groupe de Fidélisation</li>
      </ol>
    </section>

<!-- Main content -->
          <section class="content">
            @include('inc.messages')
            <div class='col-lg-6 col-lg-offset-3'>
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class='fa fa-plus-square'></i> Ajouter Groupe de Fidélisation</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      {{ Form::open(array('url' => 'loyalgroups', 'enctype' => 'multipart/form-data')) }}
                      <div class="box-body">
                        
                            <div class="col-md-12">
                              <div class="form-group">
                                {{ Form::label('title', 'Nom du Groupe') }}
                                {{ Form::text('title', '', array('class' => 'form-control')) }}
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                  {{ Form::label('rate', 'Taux de Remise (%)') }}
                                  {{ Form::number('rate', 0, array('class' => 'form-control')) }}
                              </div>
                          </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                  {{ Form::label('description', 'Description') }}
                                  {{ Form::textarea('description', '', array('class' => 'form-control')) }}
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
