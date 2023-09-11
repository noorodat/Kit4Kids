@extends('layouts.master')

@section('content')
    {{-- <x-app-layout> --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            @if ($user->provider == null)
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            @endif



            {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
            <br>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-6 space-y-6 tp-donations-details" style="width: 80%; margin: 0 auto; text-align: center;">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Your Donations') }}
                    </h2>
                    @if (count($payments) > 0)
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->donater_kit }}</td>
                                        <td>{{ $payment->donater_message }}</td>
                                        <td>${{ $payment->Amount }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No Payment found.</p>
                    @endif
                    </table>
                </div>
            </div>




            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-6 space-y-6 tp-donations-details" style="width: 80%; margin: 0 auto; text-align: center;">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Your donated supplies') }}
                    </h2>
                    @if (count($donations) > 0)
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donations as $donate)
                                    <tr>
                                        <td>{{ $donate->title }}</td>
                                        <td>{{ $donate->description }}</td>
                                        <td>{{ $donate->type }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No supplies found.</p>
                    @endif
                    </table>
                </div>
            </div>


        </div>
    </div>
    {{-- </x-app-layout> --}}
@endsection
