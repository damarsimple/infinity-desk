@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- table kategori -->
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Kategori Produk</h4>
            <div class="card-tools">
              <button type="button" class="btn btn-primary" style="margin-left: 20rem;" data-toggle="modal" data-target="#addCategory">
                + Add New Category
            </button><br><br>
            <div class="modal fade" id="addCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="addCategory">Add Partner Data</h5>
                          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form action="/category-list/create" method="POST">
                              <div class="form-group mb-3">
                                  <label for=""
                                      class="form-label">Code</label>
                                  <input type="text"
                                      class="form-control" id=""
                                      aria-describedby="">
                              </div>
                              <div class="form-group mb-3">
                                  <label for=""
                                      class="form-label">Name</label>
                                  <input type="text"
                                      class="form-control" id=""
                                      aria-describedby="">
                              </div>
                              <div class="form-group mb-3">
                                  <label for=""
                                      class="form-label">Total Produk</label>
                                  <input type="text"
                                      class="form-control" id=""
                                      aria-describedby="">
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
            </div>
          </div>
          <div class="card-body">
            <form action="#">
              <div class="row">
                <div class="col">
                  <input type="text" name="keyword" id="keyword" class="form-control" placeholder="ketik keyword disini">
                </div>
                <div class="col-auto">
                  <button class="btn btn-primary">
                    Search
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th width="50px">No</th>
                    <th>Images</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Total Product</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <img src="{{ asset('images/slide1.jpg') }}" alt="kategori 1" width='150px'>
                      <div class="row mt-2">
                        <div class="col">
                          <input type="file" name="gambar" id="gambar">
                        </div>
                        <div class="col-auto">
                          <button class="btn btn-sm btn-primary">Upload</button>
                        </div>
                      </div>
                    </td>
                    <td>KATE-1</td>
                    <td>Baju Anak</td>
                    <td>12 Produk</td>
                    <td>
                      <button type="button" class="btn btn-primary" style="margin-left: 20rem;" data-toggle="modal" data-target="#editCategory">
                        Edit
                      </button>
                      <div class="modal fade" id="editCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCategory">Edit Category Data</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/category-list" method="POST">
                                        <div class="form-group mb-3">
                                            <label for=""
                                                class="form-label">Category</label>
                                            <input type="text"
                                                class="form-control" id=""
                                                aria-describedby="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for=""
                                                class="form-label">Code</label>
                                            <input type="text"
                                                class="form-control" id=""
                                                aria-describedby="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for=""
                                                class="form-label">Name</label>
                                            <input type="text"
                                                class="form-control" id=""
                                                aria-describedby="">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for=""
                                                class="form-label">Total Produk</label>
                                            <input type="text"
                                                class="form-control" id=""
                                                aria-describedby="">
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
                      <button class="btn btn-sm btn-danger mb-2">
                        Hapus
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection