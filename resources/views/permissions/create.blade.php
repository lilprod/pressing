@extends('layouts.app')

@section('title', '| Create Permission')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-key'></i> Ajouter Permission
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-key'></i> Ajouter Permission</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class='col-lg-4 col-lg-offset-4'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-key'></i> Ajouter Permission</h3>
                </div>
            <!-- /.box-header -->
            <!-- form start -->
                {{ Form::open(array('url' => 'permissions')) }}
                    <div class="box-body">
                        <div class="form-group">
                        {{ Form::label('name', 'Nom') }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                            </div><br>
                            @if(!$roles->isEmpty()) //If no roles exist yet
                                <h4>Assigner Permission aux Roles</h4>

                                @foreach ($roles as $role) 
                                    {{ Form::checkbox('roles[]',  $role->id ) }}
                                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                @endforeach
                            @endif
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
