@extends('layouts.adminmaster')

@section('title', 'Contact Requests')

@section('content')
    <style>
        .progress-bar {
            background-color: #325260;
        }

    </style>
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
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">{{ $chart1->options['chart_title'] }} </div>

                                <div class="card-body">


                                    {!! $chart1->renderHtml() !!}

                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">تقرير سجل الطلبات </div>

                                <div class="card-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>اسم</th>
                                                <th>عدد العملاء</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($teams as $team)
                                                <tr>
                                                    <td>{{ $team->name }}</td>
                                                    <td>@php
                                                        $count = DB::table('customer_forms')
                                                            ->where('team_assign_id', $team->id)
                                                            ->count();
                                                    @endphp

                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped"
                                                                role="progressbar" style="width: 1{{ $count }}%"
                                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                {{ $count }}</div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title " style="float: right; color:#E4C3AD">سجل الطلبات</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>اسم</th>
                                                <th>بريد الالكتروني</th>
                                                <th>رقم الهاتف المحمول</th>
                                                <th>عنوان الرسالة</th>
                                                <th>رسالة</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contact_request as $data)
                                                <tr>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>{{ $data->mobile_number }}</td>
                                                    <td>{{ $data->message_title }}</td>
                                                    <td>{{ $data->message }}</td>
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
    {!! $chart1->renderChartJsLibrary() !!}
    {!! $chart1->renderJs() !!}
    <script>
        const
            range = document.getElementById('range'),
            tooltip = document.getElementById('tooltip'),
            setValue = () => {
                const
                    newValue = Number((range.value - range.min) * 100 / (range.max - range.min)),
                    newPosition = 16 - (newValue * 0.32);
                tooltip.innerHTML = `<span>${range.value}</span>`;
                tooltip.style.left = `calc(${newValue}% + (${newPosition}px))`;
                document.documentElement.style.setProperty("--range-progress", `calc(${newValue}% + (${newPosition}px))`);
            };
        document.addEventListener("DOMContentLoaded", setValue);
        range.addEventListener('input', setValue);
    </script>
@endsection
