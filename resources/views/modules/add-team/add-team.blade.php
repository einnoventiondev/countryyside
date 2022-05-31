@extends('layouts.adminmaster')

@section('title', 'Add Cities')

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
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" style="float:right;color:#E4C3AD">إضافة عضو الفريق</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="{{ route('added-team') }}" method="post">
                                        @csrf
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            {!! implode('', $errors->all('<div style="color: red; font-weight: bold;">:message</div>')) !!}
                                        @endif
                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="member-name">أدخل اسم العضو</label>
                                                    <input type="text" class="form-control" placeholder="أدخل اسم العضو"
                                                        name="member_name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="member_email">أدخل البريد الإلكتروني للعضو</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="أدخل البريد الإلكتروني للعضو" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="age">العمر</label>
                                                    <input type="number" class="form-control"
                                                        placeholder="أدخل البريد الإلكتروني للعضو" name="age" required>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="age">رقم الجوال</label>
                                                    <input type="number" class="form-control"
                                                        placeholder="أدخل البريد الإلكتروني للعضو" name="age" required>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-6">
                                                <div class="form-group" style="position: relative;">
                                                    <label for="mobNumber">رقم الجوال</label><i
                                                        class="fas fa-star"></i>
                                                        <div class="country-code h-32">966+</div>
                                                    <input style="direction: ltr;text-align: end;"
                                                        type="number" pattern="/^-?\d+\.?\d*$/"
                                                        onKeyPress="if(this.value.length==12) return false;"
                                                        class="form-control" id="mobNumber"
                                                        placeholder="+9665xxxxxxxx" name="contact"
                                                        required>
                                                </div>
                                            </div>


                                        </div>
                                        <button class="btn btn-outline-white" type="submit"
                                            style="background: #E4C3AD; color: white;">إضافة عضو</button>

                                    </form>
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
