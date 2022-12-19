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
                                <h2 class="mt-2" style="align-items: center;">Partner List</h2>
                            </div>
                            <button type="button" class="btn btn-primary" style="margin-left: 20rem;" data-toggle="modal" data-target="#addPartner">
                                + Add Partner
                            </button><br><br>
                            <div class="modal fade" id="addPartner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addPartnerLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addPartner">Add Partner Data</h5>
                                            <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/partner-data/create" method="POST">
                                                <div class="form-group mb-3">
                                                    <label for=""
                                                        class="form-label">Company</label>
                                                    <input type="text"
                                                        class="form-control" id=""
                                                        aria-describedby="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for=""
                                                        class="form-label">Responsible
                                                        Person</label>
                                                    <input type="text"
                                                        class="form-control" id=""
                                                        aria-describedby="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for=""
                                                        class="form-label">Role</label>
                                                    <input type="text"
                                                        class="form-control" id=""
                                                        aria-describedby="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for=""
                                                        class="form-label">Contact
                                                    Person</label>
                                                    <input type="text"
                                                        class="form-control" id=""
                                                        aria-describedby="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for=""
                                                        class="form-label">email</label>
                                                    <input type="email"
                                                        class="form-control" id=""
                                                        aria-describedby="">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for=""
                                                        class="form-label">Country</label>
                                                        <textarea input name="address" class="form-control" id="address" cols="20" rows="3" minlength="50"></textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for=""
                                                        class="form-label">Status</label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="aktif">Aktif</option>
                                                        <option value="nonaktif">Non Aktif</option>
                                                    </select>
                                                </div>
                                                <div class="float-end">
                                                    <button type="button"
                                                        class="btn btn-danger"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button"
                                                        class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cahaya Meubel</td>
                                            <td>Tedja Kusuma</td>
                                            <td>Sales Marketing</td>
                                            <td>081219146566</td>
                                            <td>kusuma01@gmail.com</td>
                                            <td>Indonesia</td>
                                            <td>
                                                <span>
                                                    <a class="btn btn-sm" href="/partner" role="button">
                                                        <i class="bi bi-x-octagon-fill"></i>
                                                    </a>
                                                </span>
                                                
                                                <button type="button" class="btn btn-primary" style="margin-left: 20rem;" data-toggle="modal" data-target="#editPartner">
                                                    Edit
                                                </button>
                                                <div class="modal fade" id="editPartner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editPartnerLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editPartner">Edit Partner Data</h5>
                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/partner-data" method="POST">
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Partner</label>
                                                                        <input type="text"
                                                                            class="form-control" id=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Phone
                                                                            Number</label>
                                                                        <input type="text"
                                                                            class="form-control" id=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Birth
                                                                            Date</label>
                                                                        <input type="text"
                                                                            class="form-control" id=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Email</label>
                                                                        <input type="text"
                                                                            class="form-control" id=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Country</label>
                                                                            <textarea input name="address" class="form-control" id="address" cols="20" rows="3" minlength="50"></textarea>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <select name="status" id="status" class="form-control">
                                                                            <option value="aktif">Aktif</option>
                                                                            <option value="nonaktif">Non Aktif</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="float-end">
                                                                        <button type="button"
                                                                            class="btn btn-danger"
                                                                            data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
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