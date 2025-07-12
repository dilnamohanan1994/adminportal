@extends('layouts.admin')

@section('content')
    <h2>Create {{ ucfirst($module) }}</h2>
    <form method="POST" action="{{ url("api/modules/$module/create") }}">
        @csrf
        @foreach($fields as $field)
            <label>{{ $field->name }}</label>
            @switch($field->type)
                @case('text')
                    <input name="{{ $field->name }}">
                    @break
                @case('date')
                    <input type="date" name="{{ $field->name }}">
                    @break
                @case('decimal')
                    <input type="number" step="0.01" name="{{ $field->name }}">
                    @break
                @case('dropdown')
                    <select name="{{ $field->name }}">
                        @foreach($field->options as $opt)
                            <option value="{{ $opt }}">{{ $opt }}</option>
                        @endforeach
                    </select>
                    @break
                @case('lookup')
                    <select name="{{ $field->name }}">
                        @php
                            $lookupModule = $field->options['module'];
                            $lookupData = \App\Models\ModuleData::where('module', $lookupModule)->get();
                        @endphp
                        @foreach($lookupData as $item)
                            <option value="{{ $item->id }}">{{ $item->data['name'] ?? 'N/A' }}</option>
                        @endforeach
                    </select>
                    @break
            @endswitch
        @endforeach
        <button type="submit">Submit</button>
    </form>
@endsection