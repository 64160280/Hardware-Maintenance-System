<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/pickup.css') }}">

</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_icon"> <i class='bx bxs-user-circle'></i> <span class="mx-2"
                style="color: white; display: flex; align-items: center; margin-left: 10px;">{{ Auth::user()->username }}</span>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="" class="nav_logo">
                    <img src="https://blog.clicknext.com/wp-content/themes/clicknext_blog2/assets/images/clicknext-logo.png"
                        style="width: 34%;">
                    <span class="nav_logo-name">Clicknext</span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('home') }}" class="nav_link ">
                        <i class='bx bx-home-alt'></i>
                        <span class="nav_name">หน้าหลัก</span>
                    </a>
                    <a href="{{ route('repair') }}" class="nav_link">
                        <i class='bx bx-wrench'></i>
                        <span class="nav_name">แจ้งซ่อม</span>
                    </a>
                    <a href="#" class="nav_link active">
                        <i class='bx bx-briefcase-alt-2'></i>
                        <span class="nav_name">แจ้งเบิก</span>
                    </a>
                    <a href="{{ route('history') }}" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">ประวัติ</span>
                    </a>
                </div>
            </div> <a href="{{ route('Logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <h2 class="pt-2"><i class='bx bx-folder-open bx-flip-horizontal'></i><span class="ms-2">แจ้งเบิกอุปกรณ์</span>
    </h2>
    <hr>
    <h3>รายการอุปกรณ์</h3>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12">
                <div class="input-group">
                    <span class="input-group-text border-0 bg-light">ค้นหา :</span>
                    <div class="input-box">
                        <input type="text" class="form-control rounded-3" id="search-input">
                        <i class='bx bx-search' id="search-icon"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-7 col-xs-7 col-sm-7 py-2">
                <div class="input-group">
                    <span class="input-group-text border-0 bg-light">หมวดหมู่ :</span>
                    <div class="btn-group">
                        <button class="btn btn-sm dropdown-toggle rounded-5 border border-black" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ทั้งหมด
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ตะกร้ารวมของ -->
            <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 d-flex justify-content-end py-2">
                <a href="#" type="button" class="btn btn-outline-dark position-relative rounded-3">
                    <i class='bx bxs-basket'></i>
                    ตะกร้า
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                        id="cartItem">
                        0
                        <span class="visually-hidden">items in cart</span>
                    </span>
                </a>
            </div>
        </div>

        <div>
            <div class="container mt-2">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($equipmentsArray as $equipment)
                        <div class="col card_detailItem">
                            <div class="card h-100">
                                <div class="img-box">
                                    <center>
                                        <img src="{{ URL::asset('/picture/keyboard.jpg') }}" class="img-size"></img>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="detail_card">

                                        <p class="detai_textCard">ชื่ออุปกรณ์: {{ $equipment['name'] }} </p>
                                        {{-- <p class="detai_textCard"> ยี่ห้อ/รุ่น: {{$nameband}} </p>
                                            <p class="detai_textCard"> รายละเอียด: {{$detailitem}} </p> --}}
                                        <p class="detai_textCard">ยี่ห้อ/รุ่น {{ $equipment['brand']['name'] }}
                                            {{ $equipment['brand']['model'] }} </p>
                                        <p class="detai_textCard">รายละเอียด</p>
                                        <ul>
                                            {{-- <li>{{ $gg = $data['details'] }}</li>
                                                    @foreach (explode(' ', $gg) as $part)
                                                        <li>{{ $part }}</li>
                                                    @endforeach --}}
                                            @php
                                                $gg = $equipment['detail'];
                                            @endphp

                                            @foreach (explode(',', $gg) as $part)
                                                <li>{{ $part }}</li>
                                            @endforeach


                                            <div class="card-footer d-flex justify-content-end">
                                                <button type="button"
                                                    class="btn btn-outline-dark rounded-5 add-to-cart"
                                                    style=" width: 70px;" name="{{ $equipment['id'] }}"
                                                    id="{{ $equipment['id'] }}">
                                                    <i class='bx bxs-basket'></i>
                                                </button>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!--Container Main end-->

    <!-- Javascript -->

    <!-- sidebar script -->
    <Script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </Script>


    <script>
        // add item to cart
        const buttons = document.querySelectorAll('.add-to-cart');
        const cartItem = document.querySelector('#cartItem');
        let count = 0;

        buttons.forEach(button => {
            button.addEventListener('click', () => {

                if (button.classList.contains('btn-outline-dark')) {
                    count++;
                    button.classList.remove('btn-outline-dark');
                    button.classList.add('btn-success');
                } else {
                    count--;
                    button.classList.remove('btn-success');
                    button.classList.add('btn-outline-dark');
                }
                cartItem.innerHTML = `${count} <span class="visually-hidden">items in cart</span>`;
                // console.log(`Clicked! Count is now ${count}`);
            });
        });
    </script>


</body>

</html>
