<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="{{ route('index') }}">
                <img src="{{ url('frontend/images/figma-icon/Infinity Desk (1) 1.svg') }}" alt="logo"/>
                Infinity Desk
            </a>
          <!-- <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/logo-mini.svg" alt="logo"/>
          </a> -->
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span>
                <i class="bi bi-list"></i>
            </span>
          </button>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ url('frontend/images/Ellipse 7.png') }}" alt="profile"/>
              <span class="nav-profile-name">Gawin Caskey</span>
            </a>
          </li>
          <li class="nav-item nav-user-status dropdown">
              <p class="mb-0">Last login was 23 hours ago.</p>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-date dropdown">
                <a href="#" class="nav-link d-flex justify-content-center align-items-center">
                    <h6 class="date mb-0">Today : Feb 07</h6>
                    <i class="bi bi-calendar"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3" href="#">
                    <div class="nav-item text-nowrap">
                            <img src="{{ url('frontend/images/figma-icon/icon_14.svg') }}" alt="..." width="24" height="24" 
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"
                            aria-hidden="true">
                            <span>Logout</span>
                    </div>
                </a>
            </li>
        </ul> 
    </nav>
</div>
<!-- partial -->
<nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
    <div class="navbar-links-wrapper d-flex align-items-stretch">
      <div class="nav-link">
        <a href="javascript:;">
            <i class="bi bi-calendar-event"></i>
        </a>
      </div>
      <div class="nav-link">
        <a href="javascript:;">
            <i class="bi bi-envelope"></i>
        </a>
      </div>
      <div class="nav-link">
        <a href="javascript:;">
            <i class="bi bi-folder"></i>
        </a>
      </div>
      <div class="nav-link">
        <a href="javascript:;">
            <i class="bi bi-file-earmark-text"></i>
        </a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item ml-0">
          <h4 class="mb-0">Dashboard</h4>
        </li>
        <li class="nav-item">
          <div class="d-flex align-items-baseline">
            <p class="mb-0">Home</p>
            <i class="bi bi-chevron-right"></i>
            <p class="mb-0">Main Dahboard</p>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right justify-content-end">
        <li class="nav-item nav-search d-none d-md-block mr-0">
          <div class="search-bar input-group">
              <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                <i class="bi bi-search mx-0"></i>
              </button>
            </div>
        </li>
        <li class="nav-item dropdown pr-2 d-flex align-items-center mr-0">
            <a href="#" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell mx-0"></i>
                <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="bi bi-exclamation-triangle"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">Application Error</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">
                        Just now
                      </p>
                    </div>
                </a>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="bi bi-gear"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">Errors</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">
                        Bug has been fixed
                      </p>
                    </div>
                </a>
                <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="bi bi-person-fill"></i> 
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">New user registration</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">
                        2 days ago
                      </p>
                    </div>
                </a>
            </div>
        </li>
      </ul>
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!-- <img src="" alt=""> -->
            </button>
          </div>
        </div>
      </div>
</div>