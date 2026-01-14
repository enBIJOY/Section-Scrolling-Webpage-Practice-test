@extends('website.layout.master')  <!-- Your layout -->
@section('title','Show All Products')
@section('content')
<div class="container mt-5">
    <h3>All Contacts</h3>

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->phone }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <!-- Show / Edit / Delete Buttons -->
                    
                    <a href="{{ route('edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('product.Delete', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No product found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
