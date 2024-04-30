@extends('layouts.admin')

@section('content')

<h1> Categories </h1>
<a class="btn btn-primary" href="{{ route('category.create') }}">Adicionar</a>

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
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->status }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td style="width: 20%;text-align:right;">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Options
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('category.show', $category->id) }}">View</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('category.edit', $category->id) }}">Edit</a></li>
                            <li>
                                <form class="dropdown-item delete-form" action="{{ route ('category.destroy', $category->id)}}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bt-destroy"
                                        onclick="return confirm('Confirma a eliminacao?')"
                                        type="submit"><i class="far fa-trash-alt"></i> Eliminar </button>
                                </form>
                            
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                
            </tr>
        </tfoot>
    </table>
    <script>
        $(document).ready(function() {
            $('#category').DataTable();
        });
    </script>
@endsection