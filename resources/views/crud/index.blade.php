@extends('website.layout.master')
@section('title','CRUD Operation Practice')
@section('content')

<!-- <div class="container-fluid p-5 bg-info">
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing.</h1>
</div>
<div class="container my-1 p-5 bg-info">
    <h1>adsafasfasfasfasdfafas, consectetur adipisicing.</h1>
</div>
<div class="container mt-5 pe-0 bg-info">
    <h1>Lorem sima  asilfa ialafm ipsum dolord consectetur adipisicing.</h1>
</div> -->

<div class="container text-center bg-primary mt-5">
    <div class="row">
        <div class="col">
            grid1
        </div>
        <div class="col">
            grid2
        </div>
    </div>
</div>

<div class="container-fluid text-center bg-info mt-2">
    <div class="row">
        <div class="col-sm-3 bg-danger">
            grid1
        </div>
        <div class="col-sm-6">
            grid2
        </div>
        <div class="col-lg-3 bg-danger">
            grid3
        </div>
    </div>
</div>

<div class="container bg-warning mt-4">
    <div class="row">
        <div class="col-9">
            333
        </div>
        <div class="col-3 bg-info text-center">
            333
        </div>
    </div>
</div>

<!-- grid good practice -->

<div class="container bg-warning mt-4">
    <div class="row">
        <div class="col-12 col-lg-9">
            333
        </div>
        <div class="col-12 col-lg-3 bg-danger text-center">
            333
        </div>
    </div>
</div>

<!-- nested grid -->
<div class="container-fluid text-center mt-4 bg-primary">
    <div class="row">
        <div class="col-12 col-lg-3">
            sidebar
            <p>sidebar</p>
            sidebar
            <p>sidebar</p>
            sidebar
            sidebar
            <p>sidebar</p>
            sidebar
            <p>sidebar</p>
            sidebar
        </div>
        <div class="col-12 col-lg-9 bg-info">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est error, saepe quod sunt minima ullam esse modi asperiores soluta suscipit. Similique architecto quo sequi nesciunt alias praesentium. At vel laboriosam deleniti molestias autem culpa, doloremque voluptatibus officia fuga quo reprehenderit nihil? Facere, libero maxime. Eveniet fuga ipsam quo quia nam!</p>
            content
            <div class="row">
                <div class="col-12 col-lg-9">
                content
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sint ea rerum quaerat neque reiciendis magnam officiis itaque possimus facere. Doloremque laborum architecto illo enim, aliquid ea nisi voluptatem iure, harum optio molestiae sequi dolorum suscipit beatae itaque commodi iste. Cum dolores corrupti, officia ex provident sequi minima nihil facere!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae itaque eaque dolorem aspernatur omnis consequuntur quisquam autem ipsum! Fugit, eum!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum asperiores, perspiciatis adipisci aliquam ullam placeat obcaecati temporibus modi repellendus odit repellat! Aliquid voluptatum necessitatibus quos nulla alias cum voluptatem illum soluta hic accusamus exercitationem iure earum praesentium, eaque temporibus modi sunt nisi, nobis pariatur maiores, ipsum sequi incidunt libero neque.</p>
                </div>
                <div class="col-12 col-lg-3 bg-danger">
                    sidebar2
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis aliquid cumque ut quae incidunt ducimus dicta reiciendis, ab sapiente illo?</p>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, explicabo facilis, mollitia perspiciatis qui, iste modi maxime soluta molestiae aperiam nobis alias? Nesciunt eius iure omnis, esse ea deserunt perferendis nisi delectus harum id. Aliquid odit placeat quod. Atque commodi saepe corporis sint amet laboriosam ut soluta nemo odit iusto!</p>
        </div>
    </div>
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