@extends('website.layout.master')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-4">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Edit Product
                </div>

                <div class="card-body">

                    
                    <form action="{{ route('update', $products->id) }}" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="{{ $products->name }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ $products->email }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text"
                                   name="phone"
                                   class="form-control"
                                   value="{{ $products->phone }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"
                                      class="form-control"
                                      rows="3">{{ $products->description }}</textarea>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>

                            <a href="{{ route('show') }}" class="btn btn-secondary">
                                Back
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
