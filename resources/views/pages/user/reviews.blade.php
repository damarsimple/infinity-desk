@extends('layouts.user')
@section('content')
<div class="right-side col-lg-8 col-md-9 mb-lg-3">
    <div class="card">
        <div class="card-header border-bottom mb-3">
            <ul class="nav nav-tabs card-header-tabs nav-fill">
                <li class="nav-item">
                    <a data-toggle="tab" href="#user" class="nav-link active mr-1">Profile</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#address" class="nav-link mr-1">Address</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#payment" class="nav-link mr-1">Payment</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#card" class="nav-link mr-1">Card</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href="#notif" class="nav-link mr-1">Notifications</a>
                </li>
                <li class="nav-item">
                    <a data-toggle="tab" href=#security" class="nav-link mr-1">Security</a>
                </li>
            </ul>
        </div>
        <div class="card-body tab-content border-0">
            <div class="row">
                <div class="col-lg-5">
                    <div class="container mx-auto">
                        <div class="flex flex-start mb-4">
                            Filter :
                            <div class="gradient-shadow">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">Date Time
                                        <span class="caret">
                                            <i class="fas fa-caret-circle-down"></i>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">All Time</a></li>
                                        <li><a class="dropdown-item" href="#">Last Week</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">Last 3 Month</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ms-md-auto ps-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body">
                                <i class="bi bi-search" aria-hidden="true"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Type Address or Receiver..." onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection