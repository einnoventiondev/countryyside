@extends('layouts.adminmaster')

@section('title', 'Reset Password')

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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" style="float:right;color:#E4C3AD">
                                إعادة تعيين كلمة المرور
                            </div>
                            <div class="card-body">
                                <form action="{{ route('pass-reset') }}" method="post">
                                    @csrf

                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                    @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="">كلمة المرور الحالي</label>
                                        <input type="password" placeholder="كلمة المرور الحالي" name="current_password"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">كلمة مرور جديدة</label>
                                        <input type="password" placeholder="كلمة مرور جديدة" name="new_password"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">تأكيد كلمة المرور</label>
                                        <input type="password" placeholder="تأكيد كلمة المرور" name="confirm_password"
                                            class="form-control">
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <button type="submit" class="btn btn-success">يقدم</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
