@extends('layouts.app')

@section('content')
    <table class="table table-dark table-striped table-bordered" style="width: 100%">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Date Received</th>
            <th>Action</th>
        </thead>
        @foreach ($messages as $message)
            <tr>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->phone_number }}</td>
                <td>{{ \Carbon\Carbon::parse($message->created_at)->format('d-m-Y') }}</td>
                <td></td>
            </tr>
        @endforeach
    </table>
@endsection