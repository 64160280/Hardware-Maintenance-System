<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/request_home.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
</head>

<body id="body-pd">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_icon"> <i class='bx bxs-user-circle'></i> <span class="mx-2"
                style="color: white; display: flex; align-items: center; margin-left: 10px;">IT</span>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <img src="https://blog.clicknext.com/wp-content/themes/clicknext_blog2/assets/images/clicknext-logo.png"
                        style="width: 34%;">
                    <span class="nav_logo-name">Clicknext</span>
                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-home-alt'></i>
                        <span class="nav_name">หน้าหลัก</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-wrench'></i>
                        <span class="nav_name">แจ้งซ่อม</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-briefcase-alt-2'></i>
                        <span class="nav_name">แจ้งเบิก</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-calendar-alt'></i>
                        <span class="nav_name">ประวัติ</span>
                    </a>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>




    <div class="mt-3" style="display: flex">
        <!--Container Main start-->

        <div class="col">
            <h1 class="pt-2"><span class="ms-2">คลังอุปกรณ์</span>
        </div>

        <!-- Button trigger modal -->
        <div class="col addItem">
            <button type="button" class="button_add_item" data-toggle="modal" data-target="#exampleModal">
                + เพิ่มของ
            </button>
        </div>
        <!-- Button trigger modal -->





        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">กรอกรายละเอียดอุปกรณ์</h4>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> --}}
                    </div>
                    <div class="modal-body">
                        <form name="from_add_item" action="{{ route('add') }}">

                            <div class="form-group">
                                {{-- <label for="textInput">Serial number: </label> --}}
                                <div class="row modal_1">
                                    <div class="col-md-4">Serial number: </div>
                                    <div class="col"><input type="text" class="Modal_input" id="textInput"
                                            name="serial_number"></div>
                                </div>
                                <div class="row modal_1">
                                    <div class="col-md-4">ประเภทอุปกรณ์</div>
                                    <div class="col">
                                        <select class="Modal_input" aria-label="Default select example"
                                            name="type_item">
                                            <option selected>ประเภทอุปกรณ์</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row modal_1">
                                    <div class="col-md-4">ชื่ออุปกรณ์</div>
                                    <div class="col"><input type="text" class="Modal_input" id="textInput"
                                            name="name_item"></div>
                                </div>
                                <div class="row modal_1">
                                    <div class="col-md-4">ชื่อยี่ห้อ</div>
                                    <div class="col"><input type="text" class="Modal_input" id="textInput"
                                            name="name_band"></div>
                                </div>
                                <div class="row modal_1">
                                    <div class="col-md-4">ชื่อรุ่น</div>
                                    <div class="col"><input type="text" class="Modal_input" id="textInput"
                                            name="name_model"></div>
                                </div>
                                <div class="row modal_1">
                                    <div class="col-md-4">รายละเอียดอุปกรณ์</div>
                                    <div class="col">
                                        <textarea class="detail_item" id="exampleFormControlTextarea1" name="detail_item" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row modal_1">
                                    <label for="formFile" class="form-label">อัพโหลดภาพอุปกรณ์</label>
                                    <input class="form-control" name="image_item" type="file" id="formFile">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" name="count" class="btn btn-primary"></input>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        </h1>

    </div>
    <hr>
    <h3>รายการอุปกรณ์</h3>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-xs-12 col-sm-12 ">
                <div class="input-group">
                    <span class="input-group-text border-0 bg-light">ค้นหา :</span>
                    <div class="input-box">
                        <input type="text" class="form-control rounded-3" id="search-input">
                        <i class='bx bx-search' id="search-icon"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-7 col-xs-7 col-sm-7 py-2">
                <div class="input-group ">
                    <span class="input-group-text border-0 bg-light">หมวดหมู่ :</span>
                    <div class="btn-group">
                        <select class="btn btn-sm dropdown-toggle rounded-3 border border-black" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="width: 100px">
                            ทั้งหมด
                        </select>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>



        </div>


        <div>
            <div class="container mt-2">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($databases_peoples as $data)
                        <div class="col card_detailItem">
                            <div class="card h-100">
                                <div class="img-box">
                                    <center>
                                        <img src="{{ URL::asset('/picture/keyboard.jpg') }}" class="img-size"></img>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="detail_card">

                                        <p class="detai_textCard">ชื่ออุปกรณ์: {{ $data['name'] }} </p>
                                        {{-- <p class="detai_textCard"> ยี่ห้อ/รุ่น: {{$nameband}} </p>
                            <p class="detai_textCard"> รายละเอียด: {{$detailitem}} </p> --}}
                                        <p class="detai_textCard">ยี่ห้อ/รุ่น {{ $data['nameband'] }}
                                            {{ $data['namemodel'] }} </p>
                                        <p class="detai_textCard">รายละเอียด</p>
                                        <ul>
                                            {{-- <li>{{ $gg = $data['details'] }}</li>
                                    @foreach (explode(' ', $gg) as $part)
                                        <li>{{ $part }}</li>
                                    @endforeach --}}
                                            @php
                                                $gg = $data['details'];
                                            @endphp

                                            @foreach (explode(',', $gg) as $part)
                                                <li>{{ $part }}</li>
                                            @endforeach



                                            <div class="footer-card">
                                                <p class="text" >จำนวน:  </p>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card_detailItem">
                            <div class="card h-100">
                                <div class="img-box">
                                    <center>
                                        <img src="{{ URL::asset('/picture/โลโก้มกุล 2.jpg') }}"
                                            class="img-size"></img>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="detail_card">

                                        <p class="detai_textCard">ชื่ออุปกรณ์: {{ $data['name'] }} </p>
                                        {{-- <p class="detai_textCard"> ยี่ห้อ/รุ่น: {{$nameband}} </p>
                            <p class="detai_textCard"> รายละเอียด: {{$detailitem}} </p> --}}
                                        <p class="detai_textCard">ยี่ห้อ/รุ่น {{ $data['nameband'] }}
                                            {{ $data['namemodel'] }} </p>
                                        <p class="detai_textCard">รายละเอียด</p>
                                        <ul>
                                            {{-- <li>{{ $gg = $data['details'] }}</li>
                                    @foreach (explode(' ', $gg) as $part)
                                        <li>{{ $part }}</li>
                                    @endforeach --}}
                                            @php
                                                $gg = $data['details'];
                                            @endphp

                                            @foreach (explode(',', $gg) as $part)
                                                <li>{{ $part }}</li>
                                            @endforeach

                                            <div class="footer-card">
                                                <p class="text" >จำนวน:  </p>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card_detailItem">
                            <div class="card h-100">
                                <div class="img-box">
                                    <center>
                                        <img src="{{ URL::asset('/picture/โลโก้มกุล 2.jpg') }}"
                                            class="img-size"></img>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="detail_card">

                                        <p class="detai_textCard">ชื่ออุปกรณ์: {{ $data['name'] }} </p>
                                        {{-- <p class="detai_textCard"> ยี่ห้อ/รุ่น: {{$nameband}} </p>
                            <p class="detai_textCard"> รายละเอียด: {{$detailitem}} </p> --}}
                                        <p class="detai_textCard">ยี่ห้อ/รุ่น {{ $data['nameband'] }}
                                            {{ $data['namemodel'] }} </p>
                                        <p class="detai_textCard">รายละเอียด</p>
                                        <ul>
                                            {{-- <li>{{ $gg = $data['details'] }}</li>
                                    @foreach (explode(' ', $gg) as $part)
                                        <li>{{ $part }}</li>
                                    @endforeach --}}
                                            @php
                                                $gg = $data['details'];
                                            @endphp

                                            @foreach (explode(',', $gg) as $part)
                                                <li>{{ $part }}</li>
                                            @endforeach



                                            <div class="footer-card">
                                                <p class="text" >จำนวน:  </p>
                                            </div>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col card_detailItem">
                            <div class="card h-100">
                                <div class="img-box">
                                    <center>
                                        <img src="{{ URL::asset('/picture/โลโก้มกุล 2.jpg') }}"
                                            class="img-size"></img>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="detail_card">

                                        <p class="detai_textCard">ชื่ออุปกรณ์: {{ $data['name'] }} </p>
                                        {{-- <p class="detai_textCard"> ยี่ห้อ/รุ่น: {{$nameband}} </p>
                            <p class="detai_textCard"> รายละเอียด: {{$detailitem}} </p> --}}
                                        <p class="detai_textCard">ยี่ห้อ/รุ่น {{ $data['nameband'] }}
                                            {{ $data['namemodel'] }} </p>
                                        <p class="detai_textCard">รายละเอียด</p>
                                        <ul>
                                            {{-- <li>{{ $gg = $data['details'] }}</li>
                                    @foreach (explode(' ', $gg) as $part)
                                        <li>{{ $part }}</li>
                                    @endforeach --}}
                                            @php
                                                $gg = $data['details'];
                                            @endphp

                                            @foreach (explode(',', $gg) as $part)
                                                <li>{{ $part }}</li>
                                            @endforeach


                                            <div class="footer-card">
                                                <p class="text" >จำนวน:  </p>
                                            </div>



                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col card_detailItem">
                            <div class="card h-100">
                                <div class="img-box">
                                    <center>
                                        <img src="{{ URL::asset('/picture/test.jpg') }}" class="img-size"></img>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="detail_card">

                                        <p class="detai_textCard">ชื่ออุปกรณ์: {{ $data['name'] }} </p>
                                        {{-- <p class="detai_textCard"> ยี่ห้อ/รุ่น: {{$nameband}} </p>
                            <p class="detai_textCard"> รายละเอียด: {{$detailitem}} </p> --}}
                                        <p class="detai_textCard">ยี่ห้อ/รุ่น {{ $data['nameband'] }}
                                            {{ $data['namemodel'] }} </p>
                                        <p class="detai_textCard">รายละเอียด</p>
                                        <ul>
                                            {{-- <li>{{ $gg = $data['details'] }}</li>
                                    @foreach (explode(' ', $gg) as $part)
                                        <li>{{ $part }}</li>
                                    @endforeach --}}
                                            @php
                                                $gg = $data['details'];
                                            @endphp

                                            @foreach (explode(',', $gg) as $part)
                                                <li>{{ $part }}</li>
                                            @endforeach


                                            <div class="footer-card">
                                                <p class="text" >จำนวน:  </p>
                                            </div>

                                        

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    {{-- <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card h-100 border-dark">

                            <img src="{{ URL::asset('/picture/printer.png') }}" class="card-img-top"
                                style="width:auto; height: 140px;" alt="...">
                            <div class="card-body border border-dark border-1 rounded mb-3"
                                style="width: 95%; margin-left: 6px;">
                                <p class="card-text"><small>ชื่ออุปกรณ์ : KEYBOARD</small></p>
                                <p class="card-text"><small>ยี่ห้อ/รุ่น : DELL MULTIMEDIA KB216</small></p>
                                <p class="card-text"><small>รายละเอียด</small></p>
                                <ul>
                                    <li><small>ลักษณะปุ่ม : Chiclet</small></li>
                                    <li><small>แบบอักษรปุ่มกด : English/Thai</small></li>
                                    <li><small>รูปแบบการเชื่อมต่อ : USB</small></li>
                                </ul>
                                <div class>
                                    <p class="align-bottom text-right"><small>จำนวนเบิก : 2</small></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card h-100 border-dark">
                            <img src="{{ URL::asset('/picture/keybrod.png') }}" class="card-img-top"
                                style="width:auto; height: 140px;" alt="...">
                            <div class="card-body border border-dark border-1 rounded mb-3"
                                style="width: 95%; margin-left: 6px;">
                                <p class="card-text"><small>ชื่ออุปกรณ์ : NOTEBOOK</small></p>
                                <p class="card-text"><small>ยี่ห้อ/รุ่น : FUJITSU CH 4ZR1J04218</small></p>
                                <p class="card-text"><small>รายละเอียด</small></p>
                                <ul>
                                    <li><small>16GB LPDDR4</small></li>
                                    <li><small>512GB SSD SATA</small></li>
                                    <li><small>Windows 11 Home</small></li>
                                    <li><small>Office Home and Student 2021</small></li>
                                </ul>
                                <p class="text-right"><small>จำนวนเบิก : 2</small></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card h-100 border-dark">
                            <img src="{{ URL::asset('/picture/flash drive.png') }}" class="card-img-top"
                                style="width:auto; height: 140px;" alt="...">
                            <div class="card-body border border-dark border-1 rounded mb-3"
                                style="width: 95%; margin-left: 6px;">
                                <p class="card-text"><small>ชื่ออุปกรณ์ : FLASH DRIVE</small></p>
                                <p class="card-text"><small>ยี่ห้อ/รุ่น : FUJITSU CH 4ZR1J04218</small></p>
                                <p class="card-text"><small>รายละเอียด</small></p>
                                <ul>
                                    <li><small>64 GB </small></li>
                                    <li></li><small></li>Up to 150 MB/s Read Speed</small></li>
                                    <li><small>USB 3.0</small></li>
                                </ul>
                                <p class="text-right"><small>จำนวนเบิก : 2</small></p>

                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="card h-100 border-dark">
                            <img src="{{ URL::asset('/picture/mouse.png') }}" class="card-img-top"
                                style="width:auto; height: 140px;" alt="...">
                            <div class="card-body border border-dark border-1 rounded mb-3"
                                style="width: 95%; margin-left: 6px;">
                                <p class="card-text"><small>ชื่ออุปกรณ์ : MOUSE</small></p>
                                <p class="card-text"><small>ยี่ห้อ/รุ่น : DELL OPTICAL </small></p>
                                <p class="card-text"><small>รายละเอียด</small></p>
                                <ul>
                                    <li><small>1000 dpi</small></li>
                                    <li><small>USB-A</small></li>
                                </ul>
                                <div>
                                    <p class="text-right"><small>จำนวนเบิก : 2</small></p>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                </div>
            </div>

        </div>


        <!-- {{-- @endforeach --}} -->
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
