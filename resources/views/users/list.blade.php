@extends('adminlte::page')

@section('title', 'Users' . ' - ' . config('adminlte.title', 'AdminLTE 3'))

@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('content_header')
    <h1 class="m-0 text-dark">Users</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="lead">
                    Manage your users here.
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{-- Setup data for datatables --}}
                @php
                $heads = [
                    '#',
                    'Name',
                    'Email',
                    'Username',
                    'Roles',
                    ['label' => 'Actions', 'no-export' => false, 'width' => 5, 'class' => 'text-center'],
                ];

                $config = [
                    'order' => [[1, 'asc']],
                    'columns' => [null, null, null, null, null, ['orderable' => false]],
                ];
                @endphp

                {{-- Minimal example / fill data using the component slot --}}
                <x-adminlte-datatable id="table1" head-theme="dark" striped hoverable bordered with-buttons {{-- compressed --}}
                    :heads="$heads"
                    :config="$config"
                    >
                    @php ($i = 1)
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td><nobr>{!! action_buttons('users', encodeId($user->id) ) !!}</nobr></td>
                    </tr>
                    @php ($i++)
                    @endforeach
                </x-adminlte-datatable>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col-12 -->
</div><!-- /.row -->
@stop
