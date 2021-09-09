<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('thongbao') }}
        </div>
    @endif
    Welcome,  {{ auth()->guard('admin')->user()->name }}<br>
    In the Admin Dashboard.....
    <hr>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <button class="btn btn-primary" type="submit">Logout</button>
    </form>
</body>

</html>
