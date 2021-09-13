@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Files
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>File</th>
                    <th>
                        <a href="{{ route('admin.files.create') }}" class="btn btn-primary">
                            <i class="lni lni-add-files"></i> Add File
                        </a>
                    </th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                    @foreach (\App\Models\File::all() as $file)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $file->name }}</div>
                            </td>

                            <td>
                                <form action="{{ url('admin/files/'.$file->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <i class="lni lni-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
