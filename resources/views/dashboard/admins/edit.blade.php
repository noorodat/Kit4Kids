@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<h2>Edit Cat</h2>
        
<form action="{{ route('admins.update', $cat->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
            value="{{ old('name', $cat->name) }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" required
            value="{{ old('age', $cat->age) }}">
        @error('age')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection

@section('scripts')

@endsection