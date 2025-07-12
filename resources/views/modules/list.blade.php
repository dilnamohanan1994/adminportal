@extends('layouts.admin')

@section('content')
    <h2>{{ ucfirst($module) }} List</h2>
    <a href="{{ url("admin/modules/$module/create") }}">Add New</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                @foreach($fields as $field) <th>{{ $field->name }}</th> @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                @foreach($fields as $field)
                    <td>{{ $row->data[$field->name] ?? '' }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
