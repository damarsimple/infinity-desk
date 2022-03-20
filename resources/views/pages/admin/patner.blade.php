@extends('layouts.admin')
@section('content')
<!-- main content area start -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="main-content-inner">
            <!-- market value area start -->
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="card-title d-sm-flex justify-content-between align-items-center">
                                <h2 class="mt-2" style="align-items: center;">Customer List</h2>
                            </div>
                            <div class="table-responsive m-t-40 with-360 div_transition">
                                <table class="table table-striped table-borderless">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Company</th>
                                            <th>Responsible Person</th>
                                            <th>Role</th>
                                            <th>Contact Person</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Edit</th>
                                            <th>Del</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <div class="sytCleaarFix dnnClear"></div>
                            </div>
                            {{-- <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="display" style="width:100%">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Customer</th>
                                                <th>No. Telepon</th>
                                                <th>Birth Date</th>
                                                <th>Email</th>
                                                <th>Country</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- row area start-->
        </div> 
    </div>
@endsection