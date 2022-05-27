@extends('layouts.master')

@section('title', 'Customer Profile')

@section('content')
    <div id="app">
        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="#">CodiePie</a>
                </div>

                <ul class="sidebar-menu">
                    <li class="dropdown active">
                        <a href="#" class="nav-link has-dropdown"><span>Dashboard</span></a>
                    </li>
                </ul>
            </aside>
        </div>

        <div class="main-content" >
            <section class="section">
                <div class="section-header bg-light">
                    <h1>Profile</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item">Profile</div>
                    </div>
                </div>

                <div class="section-body">
                    <div class="row">
                        <div class="col-4"><h4>Customer Status</h4></div>
                        <div class="col-6" style="font-size: 20px;">Process</div>
                    </div>
                </div>
            </section>
        </div>

    </div>


@endsection
