@extends('layouts.adminmaster')

@section('title', 'Customer Details')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-6">
                        <!-- Custom tabs (Charts with tabs)-->
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 @if ($message = Session::get('message'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3" style="float:right;color:#E4C3AD">
                                    تفاصيل العميل
                                </h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                                    <tr>
                                        <th>تحميل الملف</th>
                                        <td>
                                            <form action="{{ route('upload-file') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                                                <input type="file" name="file" class="form-control">
                                                <button type="submit" class="btn btn-primary">تحميل</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>عمر العميل</th>
                                        <td>{{ $data->age }}</td>
                                    </tr>
                                    <tr>
                                        <th>وجهة</th>
                                        <td>{{ $data->destination }}</td>
                                    </tr>
                                    @if ($data->previous_travel_asia != null)
                                        <tr>
                                            <th>السابق سفر آسيا</th>
                                            <td>{{ $data->previous_travel_asia }}</td>
                                        </tr>
                                    @endif

                                    @if ($data->previous_travel_arabia != null)
                                        <tr>
                                            <th>السابق ترافيل أرابيا</th>
                                            <td>{{ $data->previous_travel_arabia }}</td>
                                        </tr>
                                    @endif

                                    @if ($data->previous_travel_europe != null)
                                        <tr>
                                            <th>السابق سفر أوروبا</th>
                                            <td>{{ $data->previous_travel_europe }}</td>
                                        </tr>
                                    @endif

                                    @if ($data->previous_travel != null)
                                        <tr>
                                            <th>قم بزيارة المرة الأولى</th>
                                            <td>{{ $data->previous_travel }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th>مرفق الإقامة</th>
                                        <td>{{ $data->accomodation_facility }}</td>
                                    </tr>
                                    <tr>
                                        <th>فئة الرحلة</th>
                                        <td>{{ $data->flight_class }}</td>
                                    </tr>
                                    <tr>
                                        <th>نوع السيارة</th>
                                        <td>{{ $data->car_type }}</td>
                                    </tr>
                                    <tr>
                                        <th>جهة اتصال العميل</th>
                                        <td>{{ $guest_data->guest_contact }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-6">

                        <!-- Map card -->
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title" style="float:right;color:#E4C3AD">
                                    تفاصيل الضيف
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table id="data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>اسم الضيف</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (json_decode($guest_data->guest_name) as $key => $guest_name)
                                                    @if ($key > 0)
                                                        <tr>
                                                            <td>{{ $guest_name }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table id="data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>عمر الضيف</th>
                                                    {{-- <th>Guest Age</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach (json_decode($guest_data->guest_age) as $key => $guest_age)
                                                    @if ($key > 0)
                                                        <tr>
                                                            <td>{{ $guest_age }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->
                        <div class="card direct-chat direct-chat-primary">
                            <div class="card-header">
                                <h3 class="card-title" style="float:right;color:#E4C3AD">مربع المناقشة</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- Conversations are loaded here -->
                                <div class="direct-chat-messages">
                                    <!-- Message. Default to the left -->
                                    @foreach ($get_comments as $comments)
                                        @if ($comments->role == 'admin' || $comments->role == 'team')
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-infos clearfix">
                                                    <span
                                                        class="direct-chat-name float-left">{{ $comments->role }}</span>
                                                    <span
                                                        class="direct-chat-timestamp float-right">{{ date('d-m-Y', strtotime($comments->created_at)) }}</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->

                                                <div class="direct-chat-text">
                                                    {{ $comments->comments }}
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                        @else
                                            <div class="direct-chat-msg">
                                                <div class="direct-chat-infos clearfix">
                                                    <span
                                                        class="direct-chat-name float-left">{{ $comments->user->name }}</span>
                                                    <span
                                                        class="direct-chat-timestamp float-right">{{ date('d-m-Y', strtotime($comments->created_at)) }}</span>
                                                </div>
                                                <!-- /.direct-chat-infos -->

                                                <div class="direct-chat-text">
                                                    {{ $comments->comments }}
                                                </div>
                                                <!-- /.direct-chat-text -->
                                            </div>
                                        @endif

                                    @endforeach

                                </div>
                                <!--/.direct-chat-messages-->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <form action="{{ route('comments-discussion') }}" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                                        <input type="text" name="comment" placeholder="اكتب رسالة ..."
                                            class="form-control" required>
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-primary">يرسل</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                    </section>
                    <!-- right col -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
