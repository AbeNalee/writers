@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin :: Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row m-10 p-10">
                        <a href="{{ route('admin.files.index') }}" class="btn btn-info">Site Files</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
