<section>
    @if (session() ->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismission="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Profile Information</h5>

            @if ($error -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($error ->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form wire:submit.prevent="updateProfileInformation" role="form">
                <div class="form-group">
                    <label for="state.email">Name</label>
                    <input type="text" class="form-control" id="state.name" wire:model="state.name">
                </div>
                <div class="form-group">
                    <label for="state.email">Email Address</label>
                    <input type="email" class="form-control" id="state.email" wire:model="state.email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Info</button>
                </div>
            </form>
        </div>
    </div>
</section>
@extends('layouts.app')
@section('content')
    <div class="container">
        <livewire:profile-form />
        <livewire:password-change-form/>
    </div>
@endsection