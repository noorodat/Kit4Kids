@extends('dashboard.dashboard_layouts.master')

@section('title', '')

@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <!-- Bootstrap Card -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pending Campaigns</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                    title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Campaign image</th>
                            <th>Campaign Title</th>
                            <th>Campaign description</th>
                            <th class="text-center">target_money</th>
                            <th>end_date</th>
                            <th>Approve or decline</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($pendingcampaigns as $pendingcampaign)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td><img src="{{ url('/images/' . $pendingcampaign->image) }}" alt=""
                                    width="70%"></td>
                            <td>{{$pendingcampaign->title}}</td>
                            <td>{{$pendingcampaign->description}}</td>
                            <td>{{$pendingcampaign->target_money}}</td>
                            <td>{{$pendingcampaign->end_date}}</td>
                            <td class="project-actions text-right">
                                
                                {{-- <form action="{{route('pendingcampaign.destroy',$pendingcampaign->id)}}"
                                    method="POST" style="display: inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this Category?')">Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
@endsection

@section('scripts')

@endsection
