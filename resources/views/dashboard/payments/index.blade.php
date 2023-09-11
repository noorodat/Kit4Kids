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
    {{-- <a class="btn btn-primary  mb-3" href="{{route('payments.create') }}">Add Payment </a> --}}
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Payments</h3>

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
                    <th style="width: 15%">
                        Donater Name
                     </th>
                    <th style="width: 15%">
                       Donater Phone
                    </th>
                    <th style="width: 15%">
                       Donater Address
                    </th>
                    <th style="width: 15%">
                        Donater Kit
                     </th>
                    <th style="width: 20%">
                       Donater message
                    </th>
                    <th style="width: 5%">
                        Amount
                    </th>
                    <th style="width: 5%">
                        Currency
                    </th>
                    <th style="width: 10%">
                        Created at
                    </th>
                    <th style="width: 20%">
                        Updated at
                    </th>
                    
                   
                  
                </tr>
            </thead>
            <tbody>
                @php
                     $i=1;
                @endphp
                @foreach ($payments as $payment )
                   <tr>
                    <th scope="row">{{$i}}</th>
                    <td>
                      @php
                          $user = $users->where('id', $payment->donater_id)->first();
                      @endphp
              
                      {{ $user ? $user->name : 'User not found' }}
                  </td>
                    <td>{{$payment->donater_phone}}</td>
                    <td>{{$payment->donater_address}}</td>
                    <td>{{$payment->donater_kit}}</td>
                    <td>{{$payment->donater_message}}</td>
                    <td>{{$payment->Amount}}</td>
                    <td>{{$payment->Currency}}</td>
                    <td>{{$payment->created_at}}</td>
                    <td>{{$payment->updated_at}}</td>

                    <td class="project-actions text-right">
                       
{{--                        
                      
                        <form action="{{route('partners.destroy',$payment->id)}}"  method="POST"  style="display: inline;">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>            
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
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection

@section('scripts')

@endsection