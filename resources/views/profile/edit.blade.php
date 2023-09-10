@extends('layouts.master')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                @if ($user->provider == null)
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                @else
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>
                        <p>Welcome, {{ $user->provider }}-User</p>
                        <br>
                        <p><span style="color: black;">Name:</span> {{ $user->name }}</p>
                        <br>
                        <p><span style="color: black;">Email:</span> {{ $user->email }}</p>
                    </div>
                @endif



                {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Your Donations') }}
                        </h2>
                        @if (count($donations) > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donations as $donate)
                                        <tr>
                                            <td>{{ $donate->title }}</td>
                                            <td>{{ $donate->description }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No donations found.</p>
                        @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
