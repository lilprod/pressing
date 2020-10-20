@extends('layouts.app')

@section('title', '| Ajouter Role')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-key'></i> Ajouter Role
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-key'></i> Ajouter Role</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class='col-lg-4 col-lg-offset-4'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-key'></i> Ajouter Role</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::open(array('url' => 'roles')) }}
                  <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Nom') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <h5><b>Assign Permissions</b></h5>

                    <div class='form-group'>
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

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

@endsection
