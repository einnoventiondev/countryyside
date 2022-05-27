@extends('layouts.adminmaster')

@section('title', 'Contact Requests')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            @if ($message = Session::get('message'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            @if ($errors->any())
                                {!! implode('', $errors->all('<div style="color: red; font-weight: bold;">:message</div>')) !!}
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title " style="float: right; color:#E4C3AD">قائمة أعضاء الفريق</h3>
                                    <a href="{{ route('team-add') }}" class="btn btn-success" style="float: left">اضافة
                                        مشرف</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>الاسم .. </th>
                                                <th>البريد الإلكتروني</th>
                                                <th>
                                                    عمل خيارات
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($teams as $data)
                                                <tr>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>
                                                        <a href="{{ route('team.edit', $data->id) }}"
                                                            class="btn btn-success">تعديل</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('team.destroy', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">حذف</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </section>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
