@extends('layouts.user')
@section('content')
<div class="right-side col-lg-8 col-md-9 mb-lg-3">
    <div class="card">
        <div class="card-header border-bottom mb-3">
            <ul class="nav nav-tabs card-header-tabs nav-fill">
                <li class="nav-item active">
                    <a data-bs-toggle="tab" data-bs-target="#transaction" class="nav-link active mr-1" aria-controls="address" aria-selected="false" role="tab" >Transaction</a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="tab" data-bs-target="#update" class="nav-link mr-1" aria-controls="address" aria-selected="false" role="tab">Update</a>
                </li>
            </ul>
        </div>
        <div class="card-body tab-content border-0">
            <!-- actual profile data -->
            <div class="tab tab-pane" id="transaction">
                <div class="card">
                    <div class="card-header">
                        <i class="bi bi-cash"></i>
                        <span>Payment</span>
                        <i class="bi bi-dot"></i>
                        <span>28 Feb</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            You Got 50% Cashback
                            <span>
                                <img src="img/figma-icon/confetti_major.svg" alt="..." width="15">
                            </span>
                        </h5>
                        <p class="card-text"> Cashback senilai 50.000 telah masuk dalam saldo kamu.</p>
                    </div>
                </div>
            </div>
            <div class="tab tab-pane" id="update">
                <div class="card">
                    <div class="card-header">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Info</span>
                        <i class="bi bi-dot"></i>
                        <span>07 Mar</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Payment has been verified</h5>
                        <p class="card-text">We have received your payment, please wait for futher information</p>
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