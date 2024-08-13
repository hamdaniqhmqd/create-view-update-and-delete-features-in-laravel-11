<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('asset/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/top.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>{{ $title }}</title>
</head>

<body>
    <x-sidebar></x-sidebar>

    <section class="dashboard">
        <div class="top">
            <i class='bx bx-menu sidebar-toggle'></i>

            <div class="search-box">
                <i class='bx bx-search-alt'></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="{{ asset('asset/img/profile.jpg') }}" alt="">
        </div>
        {{ $slot }}
    </section>
    <script src="{{ asset('asset/js/sidebar.js') }}"></script>
</body>

</html>
