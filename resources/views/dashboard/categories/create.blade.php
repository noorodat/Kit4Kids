@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<div class="card">
        <div class="card-header">Create new category</div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" 
                        placeholder="Title">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description </label>
                    <input type="text" name="description" class="form-control"
                        placeholder="Description">
                        @error('description')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control"
                            placeholder="Image">

                    <br>
                    <input type="submit" value="Add Category" class="btn btn-success"><br>
                </div>
                <div class="form-group">
                    <label for="description">Type </label>
                    {{-- <input type="text" name="type" class="form-control"
                        placeholder="Type">
                        @error('type')
                        <span class="text-danger">{{$message}}</span>
                        @enderror --}}
                        <br>
                        <select name="type" id="">
                            <option value="service">learning</option>
                            <option value="service">school suplies</option>
                            <option value="service">service</option>
                        </select>
                </div>
            </form>
        </div>
    </div>
{{-- end form --}}
@endsection

@section('scripts')

@endsection
