@extends('layouts.master')

@section('title', 'Teams')

@section('content')

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!-- Start app top navbar -->
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{asset('assets/img/login.png')}}" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>

            <!-- Start main left sidebar menu -->
            <div class="main-sidebar sidebar-style-3">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href=#">CodiePie</a>
                    </div>

                    <ul class="sidebar-menu">
                        <li class="dropdown active">
                            <a href="#" class="nav-link has-dropdown"><span>Dashboard</span></a>
                        </li>
{{--                        <li class="dropdown">--}}
{{--                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Admin</span></a>--}}
{{--                        </li>--}}
                    </ul>
                </aside>
            </div>

            <div class="main-content" >
                <section class="section">

                    <table id="data-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Contact</th>
                            <th>Customer Status</th>
                            <th>Details</th>
                            <th>Upload PDF File</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($custm_data as $data)
                            <tr>
                                <td>{{$data->user_id}}</td>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->user->email}}</td>
                                <td>{{$data->custm_contact}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-outline-white text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{$data->custm_status}}
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                            <form id="user-status1" method="post" action="{{route('status-update')}}">
                                                @csrf
                                                <input type="hidden" name="user_status" value="In Progress">
                                                <input type="hidden" name="user_id" value="{{$data->id}}">
                                                <button type="submit" class="dropdown-item text-dark customer-status-button" >In-progress
                                                </button>
                                            </form>
                                            <form id="user-status2" method="post" action="{{route('status-update')}}">
                                                @csrf

                                                <input type="hidden" name="user_status" value="Completed">
                                                <input type="hidden" name="user_id" value="{{$data->id}}">
                                                <button type="submit" class="dropdown-item text-dark customer-status-button" > Completed </button>
                                            </form>
                                            <form id="user-status3" method="post" action="{{route('status-update')}}">
                                                @csrf
                                                <input type="hidden" name="user_status" value="Waiting for Payment">
                                                <input type="hidden" name="user_id" value="{{$data->id}}">
                                                <button type="submit" class="dropdown-item text-dark customer-status-button" > Waiting for Payment </button>
                                            </form>
                                            <form id="user-status4" method="post" action="{{route('status-update')}}">
                                                @csrf
                                                <input type="hidden" name="user_status" value="Hold">
                                                <input type="hidden" name="user_id" value="{{$data->id}}">
                                                <button type="submit" class="dropdown-item text-dark customer-status-button" > Hold </button>
                                            </form>
                                            <form id="user-status5" method="post" action="{{route('status-update')}}">
                                                @csrf
                                                <input type="hidden" name="user_status" value="Cancelled">
                                                <input type="hidden" name="user_id" value="{{$data->id}}">
                                                <button type="submit" class="dropdown-item text-dark customer-status-button" > Cancelled </button>
                                            </form>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form method="post" action="{{route('details-get')}}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$data->id}}">
                                        <button type="submit" class="btn btn-outline-white text-dark">Details</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control">
                                        <button type="submit" class="btn btn-primary">Upload</button>
{{--                                            @if(session()->has('message'))--}}
{{--                                                <div class="alert alert-success">--}}
{{--                                                    {{ session()->get('message') }}--}}
{{--                                                </div>--}}
{{--                                            @endif--}}

{{--                                            @if (count($errors) > 0)--}}
{{--                                                <div class="alert alert-danger">--}}
{{--                                                    <ul>--}}
{{--                                                        @foreach ($errors->all() as $error)--}}
{{--                                                            <li>{{ $error }}</li>--}}
{{--                                                        @endforeach--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>

@endsection
