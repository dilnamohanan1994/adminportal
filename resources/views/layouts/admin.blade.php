<!DOCTYPE html>
<html>
<head><title>Admin Portal</title></head>
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<body>
    <div style="display: flex;">
        <nav style="width: 200px; background: #eee; padding: 10px;">
            <ul>
                <li><a href="{{ url('admin/modules/customer') }}">Customer</a></li>
                <li><a href="{{ url('admin/modules/invoice') }}">Invoice</a></li>
                <li><a href="{{ route('custom-fields.index') }}">Custom Fields</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <main style="flex-grow: 1; padding: 10px;">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
