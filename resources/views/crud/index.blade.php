@extends('website.layout.master')
@section('title','CRUD Operation Practice')
@section('content')

<div class="container-fluid p-5 bg-info">
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing.</h1>
</div>
<div class="container my-1 p-5 bg-info">
    <h1>adsafasfasfasfasdfafas, consectetur adipisicing.</h1>
</div>
<div class="container mt-5 pe-0 bg-info">
    <h1>Lorem sima  asilfa ialafm ipsum dolord consectetur adipisicing.</h1>
</div>




<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Create Products</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('create') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}"
                                placeholder="Enter name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                placeholder="Enter email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input 
                                type="text" 
                                name="phone" 
                                class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone') }}"
                                placeholder="Enter phone number">

                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea 
                                name="description" 
                                class="form-control @error('description') is-invalid @enderror"
                                rows="3"
                                placeholder="Optional description">{{ old('description') }}</textarea>

                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection