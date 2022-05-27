@extends('layouts.adminmaster')

@section('title', 'Dashboard')

@section('content')
    <!-- Content Wrapper. Contains page content -->
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
        @if (Auth::user()->role == 'admin')
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row" style="color: #32525F">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-white">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F"> {{ $count }}</h3>
                                    <p style="color: #32525F">إجمالي الطلبات الواردة</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F"> {{ $count_progress_status }}</h3>
                                    <p style="color: #32525F">في تقدم</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-white">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F">{{ $count_teams }}</h3>
                                    <p style="color: #32525F">عدد الفرق</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-white">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F">{{ $count_completed_status }}</h3>

                                    <p style="color: #32525F">مكتمل</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <section class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title " style="float: right; color:#E4C3AD">تفاصيل العميل</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>اسم الزبون</th>
                                                    <th>البريد الإلكتروني للعميل</th>
                                                    <th>حالة العميل</th>
                                                    <th>تفاصيل</th>
                                                    <th>أجراءات</th>
                                                    <th>تعيين الفريق</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($custm_data as $data)
                                                    <tr>
                                                        <td>{{ $data->user->name }}</td>
                                                        <td>{{ $data->user->email }}</td>
                                                        <td>
                                                            <select class="status" id="stat{{ $data->id }}"
                                                                name="status" onchange='getstatus({{ $data->id }})'>
                                                                <option
                                                                    {{ $data->custm_status == 'In-progress' ? 'selected' : '' }}
                                                                    value="In-progress">
                                                                    In-progress</option>
                                                                <option
                                                                    {{ $data->custm_status == 'Completed' ? 'selected' : '' }}
                                                                    value="Completed">
                                                                    Completed
                                                                </option>
                                                                <option
                                                                    {{ $data->custm_status == 'Waiting for Payment' ? 'selected' : '' }}
                                                                    value="Waiting for Payment">
                                                                    Waiting for Payment
                                                                </option>
                                                                <option
                                                                    {{ $data->custm_status == 'Hold' ? 'selected' : '' }}
                                                                    value="Hold">
                                                                    Hold</option>
                                                                <option
                                                                    {{ $data->custm_status == 'Cancelled' ? 'selected' : '' }}
                                                                    value="Cancelled">
                                                                    Cancelled
                                                                </option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('details-get', $data->id) }}"
                                                                class="btn btn-primary">تفاصيل</a>
                                                        </td>
                                                        <td>
                                                            <form method="post" action="{{ route('del-record') }}">
                                                                @csrf
                                                                <input type="hidden" name="custm_id"
                                                                    value="{{ $data->id }}">
                                                                <button type="submit"
                                                                    class="btn btn-danger">حذف</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <select id="user{{ $data->id }}" class="assign"
                                                                onchange='assignuser({{ $data->id }})'>
                                                                <option>حدد عضو الفريق
</option>
                                                                @foreach ($user_data as $users)
                                                                    <option
                                                                        {{ $users->id == $data->team_assign_id ? 'selected' : '' }}
                                                                        value="{{ $users->id }}">
                                                                        {{ $users->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
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
        @elseif(Auth::user()->role == 'team')
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-white">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F"> {{ $count }}</h3>
                                    <p style="color: #32525F">إجمالي الطلبات الواردة</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-white">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F"> {{ $count_progress_status }}</h3>
                                    <p style="color: #32525F">في تقدم</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-white">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F">{{ $count_teams }}</h3>
                                    <p style="color: #32525F">عدد الفرق</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-white">
                                <div class="inner" style="margin-right: 113px">
                                    <h3 style="color: #32525F">{{ $count_completed_status }}</h3>
                                    <p style="color: #32525F">مكتمل</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <section class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title" style="float: right;  color:#E4C3AD">تفاصيل العميل</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>اسم الزبون</th>
                                                    <th>البريد الإلكتروني للعميل</th>
                                                    <th>جهة اتصال العميل</th>
                                                    <th>حالة العميل</th>
                                                    <th>تفاصيل</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($custm_data_team_assigned as $data)
                                                    <tr>
                                                        <td>{{ $data->user->name }}</td>
                                                        <td>{{ $data->user->email }}</td>
                                                        <td>{{ $data->custm_contact }}</td>
                                                        <td>
                                                            <select class="status" id="stat{{ $data->id }}"
                                                                name="status" onchange='getstatus({{ $data->id }})'>
                                                                <option
                                                                    {{ $data->custm_status == 'In-progress' ? 'selected' : '' }}
                                                                    value="In-progress">
                                                                    In-progress</option>
                                                                <option
                                                                    {{ $data->custm_status == 'Completed' ? 'selected' : '' }}
                                                                    value="Completed">Completed
                                                                </option>
                                                                <option
                                                                    {{ $data->custm_status == 'Waiting for Payment' ? 'selected' : '' }}
                                                                    value="Waiting for Payment">
                                                                    Waiting for Payment
                                                                </option>
                                                                <option
                                                                    {{ $data->custm_status == 'Hold' ? 'selected' : '' }}
                                                                    value="Hold">Hold</option>
                                                                <option
                                                                    {{ $data->custm_status == 'Cancelled' ? 'selected' : '' }}
                                                                    value="Cancelled">Cancelled
                                                                </option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('details-get', $data->id) }}"
                                                                class="btn btn-primary">تفاصيل</a>
                                                        </td>
                                                        {{-- <td>
                                                            <form method="post" action="{{ route('del-record') }}">
                                                                @csrf
                                                                <input type="hidden" name="custm_id"
                                                                    value="{{ $data->id }}">
                                                                <button type="submit"
                                                                    class="btn btn-danger">حذف</button>
                                                            </form>
                                                        </td> --}}
                                                        {{-- <td>
                                                            <select id="user{{ $data->id }}" class="assign"
                                                                onchange='assignuser({{ $data->id }})'>
                                                                      <option>حدد عضو الفريق
</option>
                                                                @foreach ($user_data as $users)
                                                                    <option
                                                                        {{ $data->team_assign_id == $users->id ? 'selected' : '' }}
                                                                        value="{{ $users->id }}">
                                                                        {{ $users->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </td> --}}
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
        @elseif(Auth::user()->role == 'customer')
            <section class="content">
                <!-- Content Header (Page header) -->
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3" style="color:#E4C3AD"">
                                         تفاصيل العميل

                                    </h3>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                                        <tr>
                                            <th>هوية شخصية</th>
                                            <td>{{ $custm_profile_data->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>حالة العميل</th>
                                            <td>{{ $custm_profile_data->custm_status }}</td>
                                        </tr>
                                        <tr>
                                            <th>اسم الزبون</th>
                                            <td>{{ $custm_profile_data->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>البريد الإلكتروني للعميل</th>
                                            <td>{{ $custm_profile_data->user->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>جهة اتصال العميل</th>
                                            <td>{{ $custm_profile_data->custm_contact }}</td>
                                        </tr>
                                        <tr>
                                            <th>عمر العميل</th>
                                            <td>{{ $custm_profile_data->age }}</td>
                                        </tr>

                                        <tr>
                                            <th>وجهة</th>
                                            <td>{{ $custm_profile_data->destination }}</td>
                                        </tr>
                                        @if ($custm_profile_data->previous_travel_asia != null)
                                            <tr>
                                                <th>السابق سفر آسيا</th>
                                                <td>{{ $custm_profile_data->previous_travel_asia }}</td>
                                            </tr>
                                        @endif

                                        @if ($custm_profile_data->previous_travel_arabia != null)
                                            <tr>
                                                <th>السابق ترافيل أرابيا</th>
                                                <td>{{ $custm_profile_data->previous_travel_arabia }}</td>
                                            </tr>
                                        @endif

                                        @if ($custm_profile_data->previous_travel_europe != null)
                                            <tr>
                                                <th>السابق سفر أوروبا</th>
                                                <td>{{ $custm_profile_data->previous_travel_europe }}</td>
                                            </tr>
                                        @endif

                                        @if ($custm_profile_data->previous_travel != null)
                                            <tr>
                                                <th>قم بزيارة المرة الأولى</th>
                                                <td>{{ $custm_profile_data->previous_travel }}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <th>مرفق الإقامة</th>
                                            <td>{{ $custm_profile_data->accomodation_facility }}</td>
                                        </tr>
                                        <tr>
                                            <th>فئة الرحلة</th>
                                            <td>{{ $custm_profile_data->flight_class }}</td>
                                        </tr>
                                        <tr>
                                            <th>نوع السيارة</th>
                                            <td>{{ $custm_profile_data->car_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>جهة اتصال العميل</th>
                                            <td>{{ $guest_data->guest_contact }}</td>
                                        </tr>
                                        <tr>
                                            <th>ملف</th>
                                            <td>
                                                <a href="{{ route('download-file', $custm_profile_data->user_id) }}"
                                                    class="btn"
                                                    style="border-color: transparent !important;background-color: #f9fafb; border: 1px solid #d9b39a !important;">Download
                                                    file</a>
                                                @if (session()->has('message'))
                                                    <div class="alert alert-danger">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
                                            </td>
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
                                    <h3 class="card-title">
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

                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">مربع المناقشة</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        @foreach ($get_custm_comments as $comments)
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
                                            <input type="hidden" name="user_id"
                                                value="{{ $custm_profile_data->user_id }}">
                                            <input type="text" name="comment" placeholder="اكتب رسالة ..."
                                                class="form-control" required>
                                            <span class="input-group-append">
                                                <button type="submit" class="btn btn-primary" >يرسل</button>
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
            </section>
        @endif
    </div>
    <!-- /.content-wrapper -->
    <script>
        function getstatus(id) {
            var status = $('#stat' + id).val();
            var id = id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'post',
                url: 'update-status/{id}',
                data: {
                    "status": status,
                    'id': id,
                },
                success: function(data) {
                    console.log(data);
                   alertify.set('notifier', 'position', 'top-right');
                    alertify.success('تم تحديث الحالة بنجاح')
                }
            });
        }

        function assignuser(id) {
            var user = $('#user' + id).val();
            var id = id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'post',
                url: 'assign-customer-team/{id}',
                data: {
                    "user": user,
                    'id': id,
                },
                success: function(data) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success('تم تعيين الفريق بنجاح ')
                }
            });

        }
    </script>
@endsection
