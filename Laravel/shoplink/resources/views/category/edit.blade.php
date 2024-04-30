@extends('layouts.admin')

@section('content')
<h1>Edit Category</h1>

<form name="category" method="POST" action="{{ route('category.update' , $category->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3 col-md-4">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="name" aria-describedby="category" placeholder="{{ $category->name }}" required>
    </div>
    <div class="mb-3 col-md-4">
    <select class="form-select" name="status" aria-label="Status" required>
        <option value="" selected>Select Status</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection