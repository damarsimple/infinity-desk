@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="col-8">
                          <div class="numbers">
                              <p class="text-sm mb-0 text-uppercase font-weight-bold">Transaction</p>
                              <h5 class="font-weight-bolder">
                                53,000
                              </h5>
                              <p class="mb-0">
                                <span class="text-success text-sm font-weight-bolder">+55%</span>
                                since yesterday
                              </p>
                          </div>
                        </div>
                        <div class="col-4 text-end">
                          <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                            <!-- <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i> -->
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-body p-3">
                          <div class="row">
                              <div class="col-8">
                                  <div class="numbers">
                                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                  <h5 class="font-weight-bolder">
                                      2,300
                                  </h5>
                                  <p class="mb-0">
                                      <span class="text-success text-sm font-weight-bolder">+3%</span>
                                      since last week
                                  </p>
                                  </div>
                              </div>
                              <div class="col-4 text-end">
                                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                  <!-- <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i> -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                  <div class="card">
                      <div class="card-body p-3">
                          <div class="row">
                              <div class="col-8">
                                <div class="numbers">
                                  <p class="text-sm mb-0 text-uppercase font-weight-bold">New Partners</p>
                                  <h5 class="font-weight-bolder">
                                    +3,462
                                  </h5>
                                  <p class="mb-0">
                                    <span class="text-danger text-sm font-weight-bolder"> -2%</span>
                                    since last quarter
                                  </p>
                                </div>
                              </div>
                              <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                  <!-- <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i> -->
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                  <div class="card">
                      <div class="card-body p-3">
                          <div class="row">
                              <div class="col-8">
                                <div class="numbers">
                                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Revenue</p>
                                  <h5 class="font-weight-bolder">
                                    $103,430
                                  </h5>
                                  <p class="mb-0">
                                    <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                  </p>
                                </div>
                              </div>
                              <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                  <!-- <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i> -->
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>      
              </div>
        </div>
        <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 mt-3">
                  <div class="card card-statistic-2">
                      <div class="card-stats">
                          <div class="card-stats-title">
                              "Order Statistics - "
                              <div class="dropdown d-inline">
                                  <a href="#" class="font-weight-600 dropdown-toggle" data-toggle="dropdown" id="orders-month">
                                      August
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-sm">
                                      <li class="dropdown-title">Select Month</li>
                                      <li>
                                          <a href="#" class="dropdown-item">January</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">February</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">March</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">April</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">May</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">June</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">July</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item active">August</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">September</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">October</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">November</a>
                                      </li>
                                      <li>
                                          <a href="#" class="dropdown-item">December</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-stats-items">
                              <div class="card-stats-item">
                                <div class="card-stats-item-count">24</div>
                                <div class="card-stats-item-label">Pending</div>
                              </div>
                              <div class="card-stats-item">
                                <div class="card-stats-item-count">12</div>
                                <div class="card-stats-item-label">Shipping</div>
                              </div>
                              <div class="card-stats-item">
                                <div class="card-stats-item-count">23</div>
                                <div class="card-stats-item-label">Completed</div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="card-wrap">
                          <div class="card-header">
                            <h4>Total Orders</h4>
                          </div>
                          <div class="card-body">
                            59
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6 mb-xl-0 mb-4 mt-3">
                  <div class="card gradient-bottom">
                      <div class="card-header">
                          <h4 class="mb-0 pr-5" style="font-size: 16px; line-height: 28px;">Top 5 Products</h4>
                          <div class="card-header-action dropdown">
                              <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
                                  "Month"
                              </a>
                              <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                  <li class="dropdown-title">Select Period</li>
                                  <li>
                                      <a href="#" class="dropdown-item">Today</a>
                                  </li>
                                  <li>
                                      <a href="#" class="dropdown-item">Week</a>
                                  </li>
                                  <li>
                                      <a href="#" class="dropdown-item active">Month</a>
                                  </li>
                                  <li>
                                      <a href="#" class="dropdown-item">This Year</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="card-body" id="top-5-scroll" tabindex="2" style="height: 315px; overflow: auto; outline: none;">
                          <ul class="list-unstyled list-unstyled-border">
                              <li class="media">
                                  <img src="..." alt="product" width="55" class="mr-3 rounded">
                                  <div class="media-body">
                                      <div class="float-right">
                                          <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                          <div class="media-title">oPhone S9 Limited</div>
                                          <div class="mt-1">
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                                                  <div class="budget-price-label">$68,714</div>
                                              </div>
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                                                  <div class="budget-price-label">$38,700</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="media">
                                  <img src="..." alt="product" width="55" class="mr-3 rounded">
                                  <div class="media-body">
                                      <div class="float-right">
                                          <div class="font-weight-600 text-muted text-small">67 Sales</div>
                                          <div class="media-title">iBook Pro 2018</div>
                                          <div class="mt-1">
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                                                  <div class="budget-price-label">$68,714</div>
                                              </div>
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                                                  <div class="budget-price-label">$38,700</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="media">
                                  <img src="..." alt="product" width="55" class="mr-3 rounded">
                                  <div class="media-body">
                                      <div class="float-right">
                                          <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                          <div class="media-title">oPhone S9 Limited</div>
                                          <div class="mt-1">
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                                                  <div class="budget-price-label">$68,714</div>
                                              </div>
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                                                  <div class="budget-price-label">$38,700</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="media">
                                  <img src="..." alt="product" width="55" class="mr-3 rounded">
                                  <div class="media-body">
                                      <div class="float-right">
                                          <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                          <div class="media-title">oPhone S9 Limited</div>
                                          <div class="mt-1">
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                                                  <div class="budget-price-label">$68,714</div>
                                              </div>
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                                                  <div class="budget-price-label">$38,700</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="media">
                                  <img src="..." alt="product" width="55" class="mr-3 rounded">
                                  <div class="media-body">
                                      <div class="float-right">
                                          <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                          <div class="media-title">oPhone S9 Limited</div>
                                          <div class="mt-1">
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-primary" data-width="64%" style="width: 64%;"></div>
                                                  <div class="budget-price-label">$68,714</div>
                                              </div>
                                              <div class="budget-price">
                                                  <div class="budget-price-square bg-danger" data-width="43%" style="width: 43%;"></div>
                                                  <div class="budget-price-label">$38,700</div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="card-footer pt-3 d-flex justify-content-center">
                          <div class="budget-price justify-content-center">
                               <div class="budget-price-square bg-primary" data-width="20" style="width: 20px;"></div>
                               <div class="budget-price-label">Selling Price</div>
                          </div>
                          <div class="budget-price justify-content-center">
                               <div class="budget-price-square bg-danger" data-width="20" style="width: 20px;"></div>
                               <div class="budget-price-label">Budget Price</div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="row">
              <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="card" style="height: 554px;">
                      <div class="card-header pb-0 p-3">
                          <div class="d-flex justify-content-between">
                              <h6 class="mb-2">Sales by Country</h6>
                          </div>
                      </div>
                      <div class="table-responsive">
                          <table class="table align-items-center">
                              <tbody>
                                  <tr style="height: 96px;">
                                      <td class="w-30">
                                          <div class="d-flex px-2 py-1 align-items-center">
                                              <div>
                                                  <img src="..." alt="Country Flag">
                                              </div>
                                              <div class="ml-4">
                                                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                  <h6 class="text-sm mb-0">
                                                      United States
                                                  </h6>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                              <h6 class="text-sm mb-0">2500</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Values:</p>
                                              <h6 class="text-sm mb-0">$230,900</h6>
                                          </div>
                                      </td>
                                      <td class="align-middle text-sm">
                                          <div class="col text-center">
                                              <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                              <h6 class="text-sm mb-0">29.9%</h6>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr style="height: 96px;">
                                      <td class="w-30">
                                          <div class="d-flex px-2 py-1 align-items-center">
                                              <div>
                                                  <img src="..." alt="Country Flag">
                                              </div>
                                              <div class="ml-4">
                                                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                  <h6 class="text-sm mb-0">
                                                      United States
                                                  </h6>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                              <h6 class="text-sm mb-0">2500</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Values:</p>
                                              <h6 class="text-sm mb-0">$230,900</h6>
                                          </div>
                                      </td>
                                      <td class="align-middle text-sm">
                                          <div class="col text-center">
                                              <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                              <h6 class="text-sm mb-0">29.9%</h6>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr style="height: 96px;">
                                      <td class="w-30">
                                          <div class="d-flex px-2 py-1 align-items-center">
                                              <div>
                                                  <img src="..." alt="Country Flag">
                                              </div>
                                              <div class="ml-4">
                                                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                  <h6 class="text-sm mb-0">
                                                      United States
                                                  </h6>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                              <h6 class="text-sm mb-0">2500</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Values:</p>
                                              <h6 class="text-sm mb-0">$230,900</h6>
                                          </div>
                                      </td>
                                      <td class="align-middle text-sm">
                                          <div class="col text-center">
                                              <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                              <h6 class="text-sm mb-0">29.9%</h6>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr style="height: 96px;">
                                      <td class="w-30">
                                          <div class="d-flex px-2 py-1 align-items-center">
                                              <div>
                                                  <img src="..." alt="Country Flag">
                                              </div>
                                              <div class="ml-4">
                                                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                  <h6 class="text-sm mb-0">
                                                      United States
                                                  </h6>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                              <h6 class="text-sm mb-0">2500</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Values:</p>
                                              <h6 class="text-sm mb-0">$230,900</h6>
                                          </div>
                                      </td>
                                      <td class="align-middle text-sm">
                                          <div class="col text-center">
                                              <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                              <h6 class="text-sm mb-0">29.9%</h6>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr style="height: 96px;">
                                      <td class="w-30">
                                          <div class="d-flex px-2 py-1 align-items-center">
                                              <div>
                                                  <img src="..." alt="Country Flag">
                                              </div>
                                              <div class="ml-4">
                                                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                                                  <h6 class="text-sm mb-0">
                                                      United States
                                                  </h6>
                                              </div>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                              <h6 class="text-sm mb-0">2500</h6>
                                          </div>
                                      </td>
                                      <td>
                                          <div class="text-center">
                                              <p class="text-xs font-weight-bold mb-0">Values:</p>
                                              <h6 class="text-sm mb-0">$230,900</h6>
                                          </div>
                                      </td>
                                      <td class="align-middle text-sm">
                                          <div class="col text-center">
                                              <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                              <h6 class="text-sm mb-0">29.9%</h6>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="card">
                      <div class="card-header">
                          <h4>Invoices</h4>
                          <div class="card-header-action">
                              <a href="#" class="btn btn-danger">
                                  View More
                                  <i class="fas fa-chevron-right"></i>
                              </a>
                          </div>
                      </div>
                      <div class="card-body p-0">
                          <div class="table-responsive table-invoice">
                              <table class="table table-striped">
                                  <tbody>
                                      <tr>
                                          <th>Invoice ID</th>
                                          <th>Customer</th>
                                          <th>Status</th>
                                          <th>Due Date</th>
                                          <th>Action</th>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a href="#">INV-87239</a>
                                          </td>
                                          <td class="font-weigh-600">Kusnaidi</td>
                                          <td>
                                              <div class="badge badge-warning">Unpaid</div>
                                          </td>
                                          <td>Feb 19, 2022</td>
                                          <td>
                                              <a href="#" class="btn btn-primary">Detail</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a href="#">INV-87239</a>
                                          </td>
                                          <td class="font-weigh-600">Kusnaidi</td>
                                          <td>
                                              <div class="badge badge-success">Paid</div>
                                          </td>
                                          <td>Feb 19, 2022</td>
                                          <td>
                                              <a href="#" class="btn btn-primary">Detail</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a href="#">INV-87239</a>
                                          </td>
                                          <td class="font-weigh-600">Kusnaidi</td>
                                          <td>
                                              <div class="badge badge-warning">Unpaid</div>
                                          </td>
                                          <td>Feb 19, 2022</td>
                                          <td>
                                              <a href="#" class="btn btn-primary">Detail</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a href="#">INV-87239</a>
                                          </td>
                                          <td class="font-weigh-600">Kusnaidi</td>
                                          <td>
                                              <div class="badge badge-warning">Unpaid</div>
                                          </td>
                                          <td>Feb 19, 2022</td>
                                          <td>
                                              <a href="#" class="btn btn-primary">Detail</a>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <a href="#">INV-87239</a>
                                          </td>
                                          <td class="font-weigh-600">Kusnaidi</td>
                                          <td>
                                              <div class="badge badge-success">Paid</div>
                                          </td>
                                          <td>Feb 19, 2022</td>
                                          <td>
                                              <a href="#" class="btn btn-primary">Detail</a>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="row">
              <div class="perform-chart col-12">
                  <div class="card card-chart">
                      <div class="card card-header">
                          <div class="row">
                              <div class="col-sm-6 text-left">
                                  <h5 class="card-category">Total Shipment</h5>
                                  <h2 class="card-title">Performance</h2>
                              </div>
                              <div class="col-sm-6">
                                  <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                      <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                          <input type="radio" name="options" checked>
                                          <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                          <span class="d-block d-sm-none">
                                              <i class="tim-icons icon-single-02"></i>
                                          </span>
                                      </label>
                                      <label id="1" class="btn btn-sm btn-primary btn-simple">
                                          <input type="radio" class="d-none d-sm-none" name="options">
                                          <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchase</span>
                                          <span class="d-block d-sm-none">
                                              <i class="tim-icons icon-gift-02"></i>
                                          </span>
                                      </label>
                                      <label id="2" class="btn btn-sm btn-primary btn-simple">
                                          <input type="radio" class="d-none" name="options">
                                          <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                          <span class="d-block d-sm-none">
                                              <i class="tim-icons icon-tap-02"></i>
                                          </span>
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="chart-area">
                              <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                  <div class="chartjs-size-monitor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                      <div style="position: absolute; width: 1000000px; height: 1000000px; left: 0; top: 0;"></div>
                                  </div>
                                  <div class="chartjs-size-monitor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                      <div style="position: absolute; width: 200%; height: 200%; left: 0; top: 0;"></div>
                                  </div>
                              </div>
                              <canvas id="chartBig1" width="741" height="220" style="display: block; width: 741px; height: 220px;" class="chartjs-render-monitor"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="row">
              <div class="col-lg-4 col-md-12">
                  <div class="card card-tasks">
                      <div class="card-header">
                          <a href="#">
                              <h6 class="title d-inline">Tasks</h6>
                          </a>
                          <p class="card-category d-inline">Today</p>
                          <div class="dropdown">
                              <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                                  <i class="tim-icons icon-settings-gear-63"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="#pablo">Action</a>
                                  <a class="dropdown-item" href="#pablo">Another action</a>
                                  <a class="dropdown-item" href="#pablo">Something else</a>
                              </div>
                          </div>
                          <div class="card-body ">
                              <div class="table-full-width table-responsive">
                                <table class="table">
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-sign">
                                              <span class="check"></span>
                                            </span>
                                          </label>
                                        </div>
                                      </td>
                                      <td>
                                        <p class="title">Update the Documentation</p>
                                        <p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
                                      </td>
                                      <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                          <i class="tim-icons icon-pencil"></i>
                                        </button>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                            <span class="form-check-sign">
                                              <span class="check"></span>
                                            </span>
                                          </label>
                                        </div>
                                      </td>
                                      <td>
                                        <p class="title">GDPR Compliance</p>
                                        <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                                      </td>
                                      <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                          <i class="tim-icons icon-pencil"></i>
                                        </button>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-sign">
                                              <span class="check"></span>
                                            </span>
                                          </label>
                                        </div>
                                      </td>
                                      <td>
                                        <p class="title">Solve the issues</p>
                                        <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                                      </td>
                                      <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                                          <i class="tim-icons icon-pencil"></i>
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
              <div class="col-lg-8 mb-lg-0 mb-4">
                  <div class="card">
                      <div class="teble-responsive pt-3">
                          <table class="table table-striped project-orders-table">
                              <thead>
                                <tr>
                                  <th class="ml-5">ID</th>
                                  <th>Project name</th>
                                  <th>Customer</th>
                                  <th>Deadline</th>
                                  <th>Payouts	</th>
                                  <th>Traffic</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>#D1</td>
                                  <td>Consectetur adipisicing elit </td>
                                  <td>Beulah Cummings</td>
                                  <td>03 Jan 2019</td>
                                  <td>$ 5235</td>
                                  <td>1.3K</td>
                                </tr>
                                <tr>
                                  <td>#D2</td>
                                  <td>Correlation natural resources silo</td>
                                  <td>Mitchel Dunford</td>
                                  <td>09 Oct 2019</td>
                                  <td>$ 3233</td>
                                  <td>5.4K</td>
                                </tr>
                                <tr>
                                  <td>#D3</td>
                                  <td>social capital compassion social</td>
                                  <td>Pei Canaday</td>
                                  <td>18 Jun 2019</td>
                                  <td>$ 4311</td>
                                  <td>2.1K</td>
                                </tr>
                                <tr>
                                  <td>#D4</td>
                                  <td>empower communities thought</td>
                                  <td>Gaynell Sharpton</td>
                                  <td>23 Mar 2019</td>
                                  <td>$ 7743</td>
                                  <td>2.7K</td>
                                </tr>
                                <tr>
                                  <td>#D5</td>
                                  <td> Targeted effective; mobilize </td>
                                  <td>Audrie Midyett</td>
                                  <td>22 Aug 2019</td>
                                  <td>$ 2455</td>
                                  <td>1.2K</td>
                                </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
        </div>
    </div>
@endsection