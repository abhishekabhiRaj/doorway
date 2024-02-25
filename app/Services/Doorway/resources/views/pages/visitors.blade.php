<?php
    $page = "Visitors";
?>
@extends('doorway::layouts.layouts')
@section('title')
Visitors
@endsection
@section('content')
{{-- Count Cards --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-md-4">
                        <div class="doorway-card d-flex justify-content-between align-items-center p-1 px-2 form-control">
                            <input  type="text" class="" placeholder="Search..."/>
                            <i class="bi bi-search"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-md-12">
                        <section class="d-flex justify-content-between align-items-center mt-2 p-1">
                            <button class="doorway-btn-primary hvr-bounce-in" style="margin-top: 4px;">Create Gate Pass</button>
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
            <div class="col-md-12">
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
        </div>
    </div>
{{-- Table End --}}
@endsection


<script>
    new DataTable('#example');
</script>
