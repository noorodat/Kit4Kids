@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<div class="container-fluid">
    <form action="{{ route('categories.update',$categories->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $categories->id }}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $categories->title }}">
        </div>
        <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{ $categories->description }}">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" value="{{ $categories->image }}">
            </div>
            <div class="form-group">
                <label>Type</label>
                {{-- <input type="text" class="form-control" name="type" value="{{ $categories->type }}"> --}}
                <select name="type" id="">
                    {{-- <option value="{{ $categories->type }}">learning</option>
                    <option value="{{ $categories->type }}">school suplies</option>
                    <option value="{{ $categories->type }}">service</option> --}}
                    <option value="learning">learning</option>
                    <option value="school suplies">school suplies</option>
                    <option value="service">service</option>
                </select>
            </div>
        <div class="form-group">
                
            <label>Action</label>
         
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection

@section('scripts')

@endsection