@extends('layouts.layout')
@section('content')
    <h1>Day la trang view home</h1>
    @foreach ($students as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->mssv }}</td>
        </tr>
        <br>
    @endforeach
@endsection
