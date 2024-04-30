@extends('layouts.admin')

@section('content')

<h1> View Category </h1>

<table id="category" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->status }}</td>
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at }}</td>
            <td style="width: 20%;text-align:right;"></td>
        </tr>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#category').DataTable();
        });
    </script>

    <h1>
        ------------------------------------------------------------------------------------
    </h1>

    <form name="category" method="" action="{{ route('category.index') }}">
        @csrf
        <div class="mb-3 col-md-4">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="name" aria-describedby="category" placeholder="{{ $category->name }}" disabled>
        </div>
        <div class="mb-3 col-md-4">
        <select class="form-select" name="status" aria-label="Status" disabled>
            <option>Select Status</option>
            <option value="active" {{ $category->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        </div>
        <a class="btn btn-primary" href="{{ route('category.index') }}">Voltar</a>
    </form>

   
    
@endsection