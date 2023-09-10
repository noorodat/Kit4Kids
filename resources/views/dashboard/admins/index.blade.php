@extends('dashboard.dashboard_layouts.master')

@section('title','')


@section('css')
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection

@section('content')
 <!-- Main content -->
 <section class="content">
    <a class="btn btn-primary  mb-3" href="{{route('admins.create') }}">Add Admin </a>
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Admins</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 10%">
                        Admin Name
                    </th>
                    <th style="width: 20%">
                        Admin Image
                    </th>
                    <th style="width: 20%">
                        Admin Email
                    </th>
                    <th style="width: 20%">
                        Admin Password

                    </th>
                   
                    <th style="width: 15%">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                @foreach ($admins as $admin )
                   <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$admin->name}}</td>
                    <td><img src="{{ url('/images/' . $admin->image) }}" alt="" width="20%"></td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->password}}</td>
                    <td class="project-actions text-right">
                       
                        <a class="btn btn-info btn-sm" href="{{ route('admins.edit', $admin->id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                      
                        <form action="{{route('admins.destroy',$admin->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>            
                          </form>
                    </td>
                </tr>
                @endforeach
                @php
                    $i++;
                @endphp
            </tbody>

        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection

@section('scripts')

@endsection