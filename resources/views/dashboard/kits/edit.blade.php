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
    <form action="{{ route('kits.update',$kits->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $kits->id }}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $kits->title }}">
        </div>
        <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{ $kits->description }}">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" value="{{ $kits->image }}">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price" value="{{ $kits->price }}">
            </div>
            <div class="form-group">
                <label for="category">Choose category:</label>

                <select name="category_id" id="category" class="form-control">
                    @foreach ($kits as $kit)
                        <option value="{{ $kits->categories?->name }}"></option>
                    @endforeach
                </select>
                <input type="hidden" value="{{ $kits->categories?->id }}"name="category_id">
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>



@endsection

@section('scripts')

@endsection