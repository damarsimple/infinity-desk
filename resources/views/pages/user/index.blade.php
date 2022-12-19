@extends('layouts.user')
@section('content')
<div class="right-side col-lg-8 col-md-9 mb-lg-3">
                            <div class="card" style="width: 888px; height:960px;">
                                <div class="card-header border-bottom mb-3">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab active" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Profile</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="address-tab" data-bs-toggle="tab"
                                                data-bs-target="#address" type="button" role="tab"
                                                aria-controls="address" aria-selected="false">Address</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="payment-tab" data-bs-toggle="tab"
                                                data-bs-target="#payment" type="button" role="tab"
                                                aria-controls="payment" aria-selected="false">Payment</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="card-tab" data-bs-toggle="tab"
                                                data-bs-target="#card" type="button" role="tab" aria-controls="card"
                                                aria-selected="false">Card</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="notification-tab" data-bs-toggle="tab"
                                                data-bs-target="#notif" type="button" role="tab"
                                                aria-controls="notification"
                                                aria-selected="false">Notifications</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="security-tab" data-bs-toggle="tab"
                                                data-bs-target="#security" type="button" role="tab"
                                                aria-controls="security" aria-selected="false">Security</button>
                                        </li>
                                    </ul>


                                    <!-- PROFILE -->
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="row mt-3">
                                                <div class="col-lg-5 d-block p-16">
                                                    <section data-unify="Card" class="profil-img-setting">
                                                        <picture class="picture-input">
                                                            <img src="{{ url('frontend/images/Ellipse 7.png') }}" alt="profile-pic"
                                                                data-unify="Image" class="picture-item">
                                                        </picture>
                                                        <input type="file" id="profilePictureInput"
                                                            class="insert-img mb-3 mt-3" name="profilePicture"
                                                            accept="image/jpeg, .jpeg, .jpg, image/png, .png"
                                                            data-testid="input-change-picture">
                                                        <p class="picture-pra" style="font-size: 10px;">
                                                            "Besar file: maksimum 10.000.000 bytes (10
                                                            Megabytes). Ekstensi file yang diperbolehkan: .JPG
                                                            .JPEG .PNG"
                                                        </p>
                                                    </section>
                                                    <button data-unify="Button" data-testid="button-change-password"
                                                        class="pass-change-btn">
                                                        <span>Change Password</span>
                                                    </button>
                                                    <button data-unify="Button" data-testid="button-pin"
                                                        class="pin-btn">
                                                        <i class="fas fa-lock"></i>
                                                        <span>Change PIN</span>
                                                    </button>
                                                </div>
                                                <div class="col-lg-7 mt-2 mb-lg-0 mb-4 d-block p-16">
                                                    <form>
                                                        <p data-unify="Typography">Edit Profile</p>
                                                        <hr style="width: 100%;">
                                                        <div class="content-sec mb-3 row">
                                                            <label for="name"
                                                                class="name-data col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="username"
                                                                    value="" placeholder="{{ $curr_user[0]->name }}">
                                                                    <a href="#" data-unify="Link"
                                                                    data-testid="change-data-btn" font-size="12"
                                                                    class="link-cont" data-bs-toggle="modal" data-bs-target="#editUsername">
                                                                    Edit
                                                                </a>
                                                                <div class="modal fade" id="editUsername" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfile" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editUsername">Change Phone Number</h5>
                                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="/setting/edit_name" method="POST">
                                                                                    <div class="form-group mb-3">
                                                                                        <label for=""
                                                                                            class="form-label">Username
                                                                                        </label>
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
                                                        <div class="content-sec mb-3 row">
                                                            <label for="date"
                                                                class="name-data col-sm-2 col-form-label">Birth
                                                                Date</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="birthdate"
                                                                    value="" placeholder="08 august 1997">
                                                            </div>
                                                        </div>
                                                        <div class="content-sec mb-3 row">
                                                            <label for="sex"
                                                                class="name-data col-sm-2 col-form-label">Sex</label>
                                                            <div class="col-sm-6">
                                                              <input type="text" readonly
                                                                    class="form-control-plaintext" id="sex" value=""
                                                                    placeholder="Male">
                                                                <a href="#" data-unify="Link"
                                                                    data-testid="change-data-btn" font-size="12"
                                                                    class="link-cont" data-bs-toggle="modal" data-bs-target="#editSex">
                                                                    Edit
                                                                </a>
                                                                <div class="modal fade" id="editSex" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfile" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editSex">Change Sex</h5>
                                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="/setting/edit_sex" method="POST">
                                                                                    <div class="form-group mb-3">
                                                                                        <label for=""
                                                                                            class="form-label">Sex
                                                                                        </label>
                                                                                        <select class="form-select" aria-label="Default select example">
                                                                                            <option selected disabled>Select in the option below</option>
                                                                                            <option value="male">Male</option>
                                                                                            <option value="female">Female</option>
                                                                                            <option value="other">Other</option>
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
                                                            </div>
                                                        </div>
                                                        <hr style="width: 100%;">
                                                        <p class="change-contact mt-2" data-unify="Typography">
                                                            Edit Contact
                                                        </p>
                                                        <hr style="width: 100%;">
                                                        <div class="content-sec mb-3 row">
                                                            <label for="exampleFormControlInput1"
                                                                class="name-data col-sm-2 col-form-label d-flex">Email
                                                                Address</label>
                                                            <div class="col-sm-6">
                                                                <input type="email" readonly
                                                                    class="form-control-plaintext"
                                                                    id="exampleFormControlInput" value=""
                                                                    placeholder="{{ $curr_user[0]->email }}">
                                                            </div>
                                                        </div>
                                                        <div class="content-sec mb-3 row">
                                                            <label for="phone"
                                                                class="name-data col-sm-2 col-form-label d-flex">Phone
                                                                Number</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="phonenumber"
                                                                    value="" placeholder="0826699079">
                                                                <a href="#" data-unify="Link"
                                                                    data-testid="change-data-btn" font-size="12"
                                                                    class="link-cont" data-bs-toggle="modal" data-bs-target="#editContact">
                                                                    Edit
                                                                </a>
                                                                <div class="modal fade" id="editContact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfile" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editContact">Change Phone Number</h5>
                                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="/setting/edit_phone" method="POST">
                                                                                    <div class="form-group mb-3">
                                                                                        <label for=""
                                                                                            class="form-label">Phone Number
                                                                                        </label>
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
                                                        <hr style="width: 100%;">
                                                        <p class="localization mt-2" data-unify="Typography">
                                                            Localization
                                                        </p>
                                                        <hr style="width: 100%;">
                                                        <div class="content-sec mb-3 row">
                                                            <label for="country"
                                                                class="name-data col-sm-2 col-form-label d-flex">Country</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="country" value=""
                                                                    placeholder="Thailand">
                                                                <a href="#" data-unify="Link"
                                                                    data-testid="change-data-btn" font-size="12"
                                                                    class="link-cont" data-bs-toggle="modal" data-bs-target="#editCountry">
                                                                    Edit
                                                                </a>
                                                                <div class="modal fade" id="editCountry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfile" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editCountry">Change Country</h5>
                                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="/setting/edit_country" method="POST">
                                                                                    <div class="form-group mb-3">
                                                                                        <label for=""
                                                                                            class="form-label">Country
                                                                                        </label>
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
                                                        <div class="content-sec mb-3 row">
                                                            <label for="language"
                                                                class="name-data col-sm-2 col-form-label d-flex">Language</label>
                                                            <div class="col-sm-6">
                                                                <input type="text" readonly
                                                                    class="form-control-plaintext" id="language"
                                                                    value="" placeholder="English">
                                                                <a href="#" data-unify="Link"
                                                                    data-testid="change-data-btn" font-size="12"
                                                                    class="link-cont" data-bs-toggle="modal" data-bs-target="#editLanguage">
                                                                    Edit
                                                                </a>
                                                                <div class="modal fade" id="editLanguage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfile" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editLanguage">Change Language</h5>
                                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="/setting/edit_language" method="POST">
                                                                                    <div class="form-group mb-3">
                                                                                        <label for=""
                                                                                            class="form-label">Language
                                                                                        </label>
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
                                                        <div class="content-sec mb-3 row">
                                                            <label for="currency"
                                                                class="name-data col-sm-2 col-form-label d-flex">Currency</label>
                                                            <div class="col-sm-6">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-secondary dropdown-toggle disabled"
                                                                        type="button" id="dropdownMenuButton1"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bi bi-currency-dollar"></i>
                                                                    </button>
                                                                </div>
                                                                {{-- <a href="#" data-unify="Link"
                                                                    data-testid="change-data-btn" font-size="12"
                                                                    class="link-cont" data-bs-toggle="modal" data-bs-target="#editCurrency">
                                                                    Edit
                                                                </a>
                                                                <div class="modal fade" id="editCurrency" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProfile" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editCurrency">Change Currency</h5>
                                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="/setting" method="POST">
                                                                                    <div class="form-group mb-3">
                                                                                        <label for=""
                                                                                            class="form-label">Currency
                                                                                            </label>
                                                                                        <select class="form-select" aria-label="Default select example">
                                                                                            <option selected disabled>Currency</option>
                                                                                            <option value="1">
                                                                                                <i class="bi bi-currency-dollar"></i>
                                                                                            </option>
                                                                                            <option value="2">
                                                                                                <i class="fas fa-yen-sign"></i>
                                                                                            </option>
                                                                                            <option value="3">
                                                                                                <i class="fas fa-won-sign"></i>
                                                                                            </option>
                                                                                            <option value="4">
                                                                                                <i class="fas fa-rupee-sign"></i>
                                                                                            </option>
                                                                                            <option value="5">
                                                                                                <i class="fas fa-ruble-sign"></i>
                                                                                            </option>
                                                                                            <option value="6">
                                                                                                <i class="fas fa-pound-sign"></i>
                                                                                            </option>
                                                                                            <option value="7">
                                                                                                <i class="fas fa-lira-sign"></i>
                                                                                            </option>
                                                                                            <option value="8">
                                                                                                <i class="fas fa-euro-sign"></i>
                                                                                            </option>
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
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ADDDRESS -->
                                        <div class="tab-pane fade" id="address" role="tabpanel"
                                            aria-labelledby="address-tab">
                                            <div class="ms-md-auto ps-md-3 d-flex align-items-center">
                                                <div class="input-group ms-3 mt-4" style="width: 340px;">
                                                    <span class="input-group-text text-body">
                                                        <i class="bi bi-search" aria-hidden="true"></i>
                                                    </span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Type Address or Receiver..."
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                                <button class="btn btn-primary mt-4" style="margin-left: 15rem;" data-bs-toggle="modal" data-bs-target="#addAddress">Add New Address</button>
                                                <div class="modal fade" id="addAddress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAddress" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addAddress">Add New Address</h5>
                                                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/setting/add_address" method="POST">
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Receiver
                                                                            Name</label>
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
                                                                            class="form-label">Address
                                                                            Label</label>
                                                                        <input type="text"
                                                                            class="form-control" id=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">City &
                                                                            District</label>
                                                                        <input type="text"
                                                                            class="form-control" id=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Full
                                                                            Address</label>
                                                                            <textarea input name="address" class="form-control" id="address" cols="20" rows="3" minlength="50"></textarea>
                                                                    </div>
                                                                    <div class="form-group mb-3">
                                                                        <label for=""
                                                                            class="form-label">Note for
                                                                            Courier (optional) </label>
                                                                        <input type="text"
                                                                            class="form-control" id=""
                                                                            aria-describedby="">
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                          Make it become the main address
                                                                        </label>
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
                                            <ul class="mt-4">
                                                <li>
                                                    <div class="card mb-3 pt-1" style="line-height: .5; height:180px; width:765px;">
                                                        <div class="card-body">
                                                            <h6>
                                                                <strong>Rumah</strong>
                                                                <span class="badge bg-light text-dark">Primary</span>
                                                            </h6>
                                                            {{-- <p><strong>Gawin Caskey</strong></p> --}}
                                                            <p><strong>{{ $curr_user[0]->name }}</strong></p>
                                                            <p>0826699079</p>
                                                            <p>Villa Balaraja blok C9 No.5</p>

                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdrop1">
                                                                Change Address
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="staticBackdrop1"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="staticBackdropLabel">Change Address
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="/setting/edit_address" method="POST">
                                                                                <div class="form-group mb-3">
                                                                                    <label for=""
                                                                                        class="form-label">Label
                                                                                        Alamat</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">Receiver</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">Phone
                                                                                            Number</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">City</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">ZIP
                                                                                            Code</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <label for=""
                                                                                        class="form-label">Address</label>
                                                                                    <textarea input name="address" class="form-control" id="address" cols="20" rows="3" minlength="50"></textarea>
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
                                                </li>
                                                <li>
                                                    <div class="card mb-4 pt-1" style="line-height: .5; height:180px; width:765px;">
                                                        <div class="card-body">
                                                            <h6><strong>Rumah</strong></h6>
                                                            <p><strong>Gawin Caskey</strong></p>
                                                            <p>0826699079</p>
                                                            <p>Villa Balaraja blok C9 No.5</p>

                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#staticBackdrop1">
                                                                Change Address
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="staticBackdrop1"
                                                                data-bs-backdrop="static" data-bs-keyboard="false"
                                                                tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="staticBackdropLabel">Change Address
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="/setting" method="POST">
                                                                                <div class="form-group mb-3">
                                                                                    <label for=""
                                                                                        class="form-label">Label
                                                                                        Alamat</label>
                                                                                    <input type="text"
                                                                                        class="form-control" id=""
                                                                                        aria-describedby="">
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">Receiver</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">Phone
                                                                                            Number</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">City</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                    <div
                                                                                        class="form-group mb-3 col-lg-6">
                                                                                        <label for=""
                                                                                            class="form-label">ZIP
                                                                                            Code</label>
                                                                                        <input type="text"
                                                                                            class="form-control" id=""
                                                                                            aria-describedby="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-3">
                                                                                    <label for=""
                                                                                        class="form-label">Address</label>
                                                                                        <textarea input name="address" class="form-control" id="address" cols="20" rows="3" minlength="50"></textarea>
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
                                                </li>
                                            </ul>
                                        </div>


                                        <!-- PAYMENT -->
                                        <div class="tab-pane fade" id="payment" role="tabpanel"
                                            aria-labelledby="payment-tab">...</div>


                                        <!-- CARD -->
                                        <div class="tab-pane fade" id="card" role="tabpanel" aria-labelledby="card-tab">
                                            <div class="card">
                                                <div class="card-header border-bottom mb-3" style="height: 72px;">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h3 class="text-2l capitalize font-semibold " style="margin-bottom: -0.5rem;">
                                                                Bank Account List
                                                            </h3>
                                                            <p class="bank-account mt-2" data-unify="Typography"
                                                                style="font-size: 10.5px;">
                                                                <i class="bi bi-dot"></i>
                                                                Akun Rekening Bank yang aktif maksimal berjumlah 3 (tiga) buah.
                                                            </p>
                                                        </div>
                                                        <div class="col">
                                                            <button type="button" class="btn btn-success mt-2" style="width: 185px; margin-left: 13rem;" data-bs-toggle="modal" data-bs-target="#myModal">Add Bank Account</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal" id="myModal">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text-center" id="modalLabel">Add
                                                                    Bank
                                                                    Account</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="/setting/add_bank" method="POST">
                                                                    <div class="flexbox">
                                                                        <div class="inputBox">
                                                                            <span>Bank Name</span>
                                                                            <select name="" id="" class=" form-control bank-input">
                                                                                <option value="bank-name" selected
                                                                                    disabled>
                                                                                    Bank Name</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                                <option value="1">01</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="inputBox">
                                                                        <span>Account Number</span>
                                                                        <input type="text" maxlength="16"
                                                                            class="card-number-input form-control">
                                                                    </div>
                                                                    <div class="inputBox">
                                                                        <span>Card Holder</span>
                                                                        <input type="text" class="card-holder-input form-control">
                                                                    </div>
                                                                    <div class="float-end mt-3">
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
                                                <div class="card-body border-0">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-7 d-md-block">
                                                            <div class="card-wrapper">
                                                                <div class="card">
                                                                    <div class="card-front">
                                                                        <div class="row" style="width: 730px;">
                                                                            <div class="col-lg-3 col-xlg-2 col-md-4">
                                                                                <div class="left ms-2 pt-2">
                                                                                    <img src="{{ url('frontend/images/bca_img.jpg') }}"
                                                                                        alt="BCA..." width="140">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-5 col-xlg-6 col-md-4">
                                                                                <div class="right mt-4" style="line-height: .85">
                                                                                    <p style="font-size: 11px">PT.BCA (BANK CENTRAL ASIA) TBK
                                                                                    </p>
                                                                                    <h4>0353120848</h4>
                                                                                    <p>a.n<span><strong>GAWIN
                                                                                                CASKEY</strong></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-back" hidden>
                                                                        <img src="{{ url('frontend/images/bca_img.jpg') }}" alt="BCA...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="removebtn col">
                                                            <button class="btn btn-dark">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="payment" role="tabpanel"
                                            aria-labelledby="payment-tab">

                                        </div>

                                        <!-- NOTIF -->
                                        <div class="tab-pane fade" id="notif" role="tabpanel"
                                            aria-labelledby="notif-tab">
                                            <div class="notif">
                                                <div class="card">
                                                    <div class="card-header" style="height: 53px;">
                                                        <h3 style="margin-bottom: -0.35rem;">Notification</h3>
                                                        <p style="font-size: 10.5px;">Set notification that you want
                                                            here
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-2">
                                                            <h5 class="card-title text-2xl capitalize font-semibold ">
                                                                <i class="bi bi-cart-fill"></i>
                                                                <span>Purchase Transaction</span>
                                                            </h5>
                                                        </div>
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                Menunggu Pembayaran
                                                                <input class="form-check-input me-1" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </li>
                                                            <li class="list-group-item">
                                                                Menunggu Konfirmasi
                                                                <input class="form-check-input me-1" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </li>
                                                            <li class="list-group-item">
                                                                Pesanan Diproses
                                                                <input class="form-check-input me-1" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </li>
                                                            <li class="list-group-item">
                                                                Pesanan Dikirim
                                                                <input class="form-check-input me-1" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </li>
                                                            <li class="list-group-item">
                                                                Pesanan Tiba
                                                                <input class="form-check-input me-1" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </li>
                                                            <li class="list-group-item">
                                                                Pengingat
                                                                <input class="form-check-input me-1" type="checkbox"
                                                                    value="" aria-label="...">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- SECURITY -->
                                        <div class="tab-pane tab-content fade border-0" id="security" role="tabpanel"
                                            aria-labelledby="security-tab">
                                            <div class="card">
                                                <div class="bgimg">
                                                    <div class="middle">
                                                        <h1>COMING SOON</h1>
                                                        <hr>
                                                        <p id="demo" style="font-size:30px"></p>
                                                    </div>
                                                    <div class="bike">
                                                        <div class="part frame">
                                                            <div class="bar left-top"></div>
                                                            <div class="bar left-bottom"></div>
                                                            <div class="bar left"></div>
                                                            <div class="bar top"></div>
                                                            <div class="bar bottom"></div>
                                                            <div class="bar right"></div>
                                                        </div>
                                                        <div class="part sadle">
                                                            <div class="sit-here"></div>
                                                            <div class="sadlepen"></div>
                                                        </div>
                                                        <div class="part handlebar">
                                                            <div class="stem"></div>
                                                            <div class="connector"></div>
                                                            <div class="prehandle"></div>
                                                            <div class="handle"></div>
                                                        </div>
                                                        <div class="part pedals">
                                                            <div class="inside"></div>
                                                            <div class="outside"></div>
                                                            <div class="pedalstem front">
                                                                <div class="pedalbase front"></div>
                                                            </div>
                                                            <div class="pedalstem back">
                                                                <div class="pedalbase back"></div>
                                                            </div>
                                                        </div>
                                                        <div class="part wheel left">
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                        </div>
                                                        <div class="part wheel right">
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                            <div class="spoke"></div>
                                                        </div>
                                                        <div class="part axis left"></div>
                                                        <div class="part axis right"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="card-body tab-content border-0">
                                    <div class="tab-pane" id="security">
                                        <div class="card">
                                            <div class="bgimg">
                                                <div class="middle">
                                                    <h1>COMING SOON</h1>
                                                    <hr>
                                                    <p id="demo" style="font-size:30px"></p>
                                                </div>
                                                <div class="bike">
                                                    <div class="part frame">
                                                        <div class="bar left-top"></div>
                                                        <div class="bar left-bottom"></div>
                                                        <div class="bar left"></div>
                                                        <div class="bar top"></div>
                                                        <div class="bar bottom"></div>
                                                        <div class="bar right"></div>
                                                    </div>
                                                    <div class="part sadle">
                                                        <div class="sit-here"></div>
                                                        <div class="sadlepen"></div>
                                                    </div>
                                                    <div class="part handlebar">
                                                        <div class="stem"></div>
                                                        <div class="connector"></div>
                                                        <div class="prehandle"></div>
                                                        <div class="handle"></div>
                                                    </div>
                                                    <div class="part pedals">
                                                        <div class="inside"></div>
                                                        <div class="outside"></div>
                                                        <div class="pedalstem front">
                                                            <div class="pedalbase front"></div>
                                                        </div>
                                                        <div class="pedalstem back">
                                                            <div class="pedalbase back"></div>
                                                        </div>
                                                    </div>
                                                    <div class="part wheel left">
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                    </div>
                                                    <div class="part wheel right">
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                    </div>
                                                    <div class="part axis left"></div>
                                                    <div class="part axis right"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            // Set the date we're counting down to
                                            var countDownDate = new Date("Mar 20, 2024 23:59:22").getTime();

                                            // Update the count down every 1 second
                                            var countdownfunction = setInterval(function () {

                                                // Get todays date and time
                                                var now = new Date().getTime();

                                                // Find the distance between now an the count down date
                                                var distance = countDownDate - now;

                                                // Time calculations for days, hours, minutes and seconds
                                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (
                                                    1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 *
                                                    60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                // Output the result in an element with id="demo"
                                                document.getElementById("demo").innerHTML = days + "d " +
                                                    hours + "h " +
                                                    minutes + "m " + seconds + "s ";

                                                // If the count down is over, write some text 
                                                if (distance < 0) {
                                                    clearInterval(countdownfunction);
                                                    document.getElementById("demo").innerHTML = "EXPIRED";
                                                }
                                            }, 1000);
                                        </script>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection