@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')

<style>
    span{
        color: red;
    }
</style>

<div class="container-fluid">
    <form action="{{ route('campaigns.update',$campaigns->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$campaigns->id }}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $campaigns->title }}">
            <span>@error('title'){{$message}} @enderror</span>

        </div>
        <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{ $campaigns->description }}">
                <span>@error('description'){{$message}} @enderror</span>

            </div>
            
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" value="{{ $campaigns->image }}">
                <span>@error('image'){{$message}} @enderror</span>

            </div>
            <div class="form-group">
                <label>Target Money</label>
                <input type="number" class="form-control" name="target_money" value="{{ $campaigns->target_money }}">
                <span>@error('target_money'){{$message}} @enderror</span>

            </div>
            {{-- <div class="form-group">
                <label>Raised Money</label>
                <input type="number" class="form-control" name="raised_money" value="{{ $campaigns->raised_money }}">
            </div> --}}
            {{-- <div class="form-group">
                <label>Start Date </label>
                <input type="date" class="form-control" name="start_date" value="{{ $campaigns->start_date }}">
            </div> --}}
            <div class="form-group">
                <label>Ended Date</label>
                <input type="date" class="form-control" name="end_date" value="{{ $campaigns->end_date }}">
                <span>@error('end_date'){{$message}} @enderror</span>

            </div>
            <div class="form-group">
                <label>Status</label>
                {{-- <input type="text" class="form-control" name="type" value="{{ $campaigns->type }}"> --}}
                <select name="Status" id="">
                    
                    <option value="1">1</option>
                    <option value="0">0</option>
                </select>
            </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection

@section('scripts')

@endsection