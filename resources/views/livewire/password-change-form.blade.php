<section class="my-5">
    @if ()
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismission="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Password</h5>

            @if ($error->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($error->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form wire:submit.prevent="updateProfileInformation" role="form">
                <div class="form-group">
                    <label for="state.current_password">Current Password</label>
                    <input type="password" class="form-control" id="state.current_password" wire:model="state.current_password">
                </div>
                <div class="form-group">
                    <label for="state.password">New Password</label>
                    <input type="password" class="form-control" id="state.password" wire:model="state.password">
                </div>
                <div class="form-group">
                    <label for="state.password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control" id="state.password_confirmation" wire:model="state.password_confirmation">
                </div>
                <div class="form-group">
                    <button  type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</section>