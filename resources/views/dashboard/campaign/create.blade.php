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
        <div class="card-header">Create new Campaign</div>
        <div class="card-body">
            <form action="{{ route('campaigns.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="UserName">Campaign Title</label>
                    <input type="text" name="title" class="form-control" 
                        placeholder="Campaign Title">
                </div>
                <div class="form-group">
                    <label for="image">Campaign Image</label>
                    <input type="file" name="image" class="form-control" 
                        placeholder="Campaign Image">
                </div>
                <div class="form-group">
                    <label for="UserEmail">Campaign Description</label>
                    <input type="text" name="description" class="form-control"
                        placeholder="Campaign Description">
                </div>
                <div class="form-group">
                        <label for="UserPassword">Target Money</label>
                        <input type="number" name="target_money" class="form-control"
                            placeholder="Target Money">
                    </div>
                        <div class="form-group">
                                <label for="Status">End Date</label>
                                <input type="date" name="end_date" class="form-control"
                                    placeholder="End Date">
                        </div>
                        <div class="form-group">
                                <label for="Status">Active</label>
                                <br>
                                <select name="active" id="">
                                    <option value="Ended">Ended</option>
                                    <option value="continous">continous</option>
                                </select>
                        </div>
                    <br>
                    <input type="submit" value="Add Campaign" class="btn btn-success"><br>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection