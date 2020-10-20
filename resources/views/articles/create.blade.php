{{-- \resources\views\articles\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Ajouter Article')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Ajouter Article
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Ajouter Article</li>
      </ol>
    </section>

<!-- Main content -->
          <section class="content">
            @include('inc.messages')
            <div class='col-lg-8 col-lg-offset-2'>
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class='fa fa-plus-square'></i> Ajouter Article</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      {{ Form::open(array('url' => 'articles', 'enctype' => 'multipart/form-data')) }}
                      <div class="box-body">
                        
                            <div class="col-xs-6">
                              <div class="form-group">
                                {{ Form::label('title', 'Libellé') }}
                                {{ Form::text('title', '', array('class' => 'form-control')) }}
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="col-xs-4">
                                <div class="form-group">
                                  {{ Form::label('nettoyage_price', 'Prix Netoyage à sec') }}
                                  {{ Form::text('nettoyage_price', '', array('class' => 'form-control')) }}
                                </div>
                              </div>

                            <div class="col-xs-4">
                              <div class="form-group">
                                {{ Form::label('repassage_price', 'Prix Repassage') }}
                                {{ Form::text('repassage_price', '', array('class' => 'form-control')) }}
                              </div>
                            </div>

                              <div class="col-xs-4">
                                <div class="form-group">
                                  {{ Form::label('lavage_price', 'Prix Nettoyage Express') }}
                                  {{ Form::text('lavage_price', '', array('class' => 'form-control')) }}
                                </div>
                              </div>
                          </div>
                          <div class="col-xs-6">
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
