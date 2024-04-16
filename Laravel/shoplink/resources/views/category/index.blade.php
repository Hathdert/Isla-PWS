@extends('layouts.admin')

@section('content')
<h1>Category</h1>

<a type="button"  class="btn btn-primary" href="" > Adicionar </a>

<table id="category" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->Status}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </tfoot>
    </table>
    <script>
        $(document).ready(function(){
            $('#category').DataTable();
        });
    </script>
@endsection