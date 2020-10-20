{{-- \resources\views\deliveryhours\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Ajouter Heure de retrait')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Ajouter Heure de retrait
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Ajouter Heure de retrait</li>
      </ol>
    </section>

<!-- Main content -->
          <section class="content">
            @include('inc.messages')
            <div class='col-lg-8 col-lg-offset-2'>
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class='fa fa-plus-square'></i> Ajouter Heure de retrait</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      {{ Form::open(array('url' => 'deliveryhours', 'enctype' => 'multipart/form-data')) }}
                      <div class="box-body">
                        

                            <div class="col-md-12">
                              <div class="col-xs-4">
                                <div class="form-group">
                                  {{ Form::label('lavage_hour', 'Heure de Lavage simple') }}
                                  {{ Form::text('lavage_hour', '', array('class' => 'form-control')) }}
                                </div>
                              </div>

                            <div class="col-xs-4">
                              <div class="form-group">
                                {{ Form::label('repassage_hour', 'Heure de repassage') }}
                                {{ Form::text('repassage_hour', '', array('class' => 'form-control')) }}
                              </div>
                            </div>

                              <div class="col-xs-4">
                                <div class="form-group">
                                  {{ Form::label('express_hour', 'Heure Express') }}
                                  {{ Form::text('express_hour', '', array('class' => 'form-control')) }}
                                </div>
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
