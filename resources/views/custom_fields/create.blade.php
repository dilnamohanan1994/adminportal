@extends('layouts.admin')

@section('content')
   <h2>Custom Fields</h2>
   @if ($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
    @endif
    <form method="POST" action="{{ route('custom-fields.store') }}">
        @csrf

        <div>
            <label>Module</label>
            <select name="module" required>
                <option value="">-- Select Module --</option>
                <option value="Customer">Customer</option>
                <option value="Invoice">Invoice</option>
            </select>
        </div>

        <div>
            <label>Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Type</label>
            <select name="type" id="field-type" required onchange="toggleOptions(this.value)">
                <option value="">-- Select Type --</option>
                <option value="text">Text</option>
                <option value="date">Date</option>
                <option value="decimal">Decimal</option>
                <option value="dropdown">Dropdown</option>
                <option value="lookup">Lookup</option>
            </select>
        </div>

        <div id="dropdown-options" style="display:none;">
            <label>Dropdown Options (comma-separated)</label>
            <input type="text" name="dropdown_options[]">
            <button type="button" onclick="addOption()">+ Add More</button>
            <div id="more-options"></div>
        </div>

        <div id="lookup-module" style="display:none;">
            <label>Lookup Module</label>
            <select name="lookup_module">
                <option value="">-- Select Module --</option>
                <option value="Customer">Customer</option>
                <option value="Invoice">Invoice</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>

    <script>
        function toggleOptions(type) {
            document.getElementById('dropdown-options').style.display = (type === 'Dropdown') ? 'block' : 'none';
            document.getElementById('lookup-module').style.display = (type === 'Lookup') ? 'block' : 'none';
        }

        function addOption() {
            const container = document.getElementById('more-options');
            const input = document.createElement('input');
            input.setAttribute('name', 'dropdown_options[]');
            container.appendChild(input);
        }
    </script>
@endsection