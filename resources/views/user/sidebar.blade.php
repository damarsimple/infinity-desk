<section class="py-16 px-4">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">
                <div class="row">
                    <div class="col-lg-3 col-md-4 d-md-block">
                        <div class="card bg-common card-left">
                            <div class="card-body">
                                <nav class="nav flex-column d-block">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a data-toggle="collapse" href="#inbox" class="nav-link">
                                                <i class="fas fa-comment-edit"></i>
                                                <span class="menu-title">Inbox</span>
                                                <i class="bi bi-plus-circle-fill menu-arrow"></i>
                                            </a>
                                            <div class="collapse" id="inbox">
                                                <ul class="nav flex-column sub-menu">
                                                    <li class="nav-item">
                                                        <a href="{{ route('reviews.index') }}" class="nav-link">Reviews</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Complaints</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('update.index') }}" class="nav-link">Updates</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="collapse" href="#purchase" class="nav-link">
                                                <i class="fas fa-comment-edit"></i>
                                                <span class="menu-title">Purchase</span>
                                                <i class="bi bi-plus-circle-fill menu-arrow"></i>
                                            </a>
                                            <div class="collapse" id="purchase">
                                                <ul class="nav flex-column sub-menu">
                                                    <li class="nav-item">
                                                        <a href="{{ route('carts.index') }}" class="nav-link">Carts</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Promos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Progress</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a data-toggle="collapse" href="#user" class="nav-link">
                                                <i class="bi bi-person-circle menu-icon"></i>
                                                <span class="menu-title">User</span>
                                                <i class="bi bi-plus-circle-fill menu-arrow"></i>
                                            </a>
                                            <div class="collapse" id="user">
                                                <ul class="nav flex-column sub-menu">
                                                    <li class="nav-item">
                                                        <a href="{{ route('wishlist.index') }}" class="nav-link">WishList</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('outletFavorite.index') }}" class="nav-link">Favorite Outlet</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('index') }}" class="nav-link active" aria-current="page">Setting</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>