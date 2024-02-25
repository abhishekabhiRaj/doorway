<?php
    $page = "Dashboard";
?>
@extends('doorway::layouts.layouts')
@section('title')
Dashboard
@endsection
@section('content')
@include('doorway::pages.partials.dashboard.create-visit-modal')
{{-- Count Cards --}}

    {{--  --}}

    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11111">
        <div id="liveToast" class="toast hide toast-success" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header ">
            {{-- <img src="..." class="rounded me-2" alt="..."> --}}
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            <p id="toast-text" class="m-0"></p>
          </div>
        </div>
      </div>

    {{--  --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-4">
                        <div class="doorway-card d-flex justify-content-between align-items-center">
                            <div class="doorway-card--left d-flex justify-content-between align-items-center">
                                <i class="bi bi-people-fill"></i>
                                <section class="ms-1">
                                    <p class="m-0">Total Users</p>
                                    {{-- <h5 class="m-0 fs-5">Today</h5> --}}
                                </section>
                            </div>
                            <div class="doorway-card--right">
                                <div class="doorway-card-number doorway-font-regular fw-bold">122</div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-md-12">
                        <section class="d-flex justify-content-between align-items-center mt-3 p-3">
                            <button type="button" class="doorway-btn-primary" data-bs-toggle="modal" data-bs-target="#create-gate-pass-modal">
                                Create Gate Pass
                              </button>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Count Cards End --}}
{{-- Table --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="doorway-card">
                    <section class="d-flex justify-content-between align-items-center ">
                        <h6 class="doorway-font-regular m-0"><i class="bi bi-door-closed-fill"></i> Visitors List</h6>
                        <div class="dropdown pt-0 mt-0">
                            <p class="dropdown-toggle m-0 fs-6" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By
                            </p>
                            <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Sort By Name</a></li>
                                <li><a class="dropdown-item" href="#">Sort By Date</a></li>
                            </ul>
                        </div>
                    </section>
                    {{-- table  --}}
                    <div class="overflow-x-scroll mt-3">
                        <section class="border-2 overflow-hidden  rounded-2 ">
                            <table id="example" class="display table table-light table-hover m-0 doorway-dashboard-table-height" style="width:100%; font-size:14px;">
                                <thead>
                                    <tr>
                                        <th class="doorway-font-bold">Name</th>
                                        <th class="doorway-font-bold">Position</th>
                                        <th class="doorway-font-bold">Office</th>
                                        <th class="doorway-font-bold">Age</th>
                                        <th class="doorway-font-bold">Start date</th>
                                        <th class="doorway-font-bold">Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 0; $i < 20; $i++)
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011-04-25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </section>
                    </div>
                    {{-- table --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="doorway-card">
                    <section class="d-flex justify-content-between align-items-center ">
                        <h6 class="position-relative doorway-font-regular m-0" style="width:max-content">
                            <i class="bi bi-bell-fill"></i> Pending Approval
                            <span class="position-absolute top-0 start-130 translate-middle badge doorway-badge">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </h6>
                    </section>
                    {{-- pending request card --}}
                    <div class="doorway-pr-cards" id="doorway-pr-cards">

                    </div>
                    {{-- pending request card end --}}
                </div>
            </div>
        </div>
    </div>
{{-- Table End --}}

@endsection



