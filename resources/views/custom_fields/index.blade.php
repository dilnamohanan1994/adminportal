@extends('layouts.admin')

@section('content')
    <h2>Custom Fields</h2>

    <a href="{{ route('custom-fields.create') }}" class="btn btn-primary mb-4">+ Add Field</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Module</th>
                <th>Name</th>
                <th>Type</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fields as $field)
                <tr>
                    <td>{{ $field->module }}</td>
                    <td>{{ $field->name }}</td>
                    <td>{{ $field->type }}</td>
                    <td>
                        @if ($field->type === 'Dropdown')
                            {{ implode(', ', $field->options['values'] ?? []) }}
                        @elseif ($field->type === 'Lookup')
                            Lookup: {{ $field->options['module'] ?? '-' }}
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
