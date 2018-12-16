@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Share
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('projects.update', $share->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Project Title:</label>
                    <input type="text" class="form-control" name="title" value={{ $project->title }} />
                </div>
                <div class="form-group">
                    <label for="price">Project Description :</label>
                    <input type="text" class="form-control" name="description" value={{ $project->description }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection