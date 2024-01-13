<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/pickup.css') }}">


</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_icon"> <i class='bx bxs-user-circle'></i>
            <span class="mx-2"
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
                    <a href="" class="nav_link active">
                        <i class='bx bx-home-alt'></i>
                        <span class="nav_name">หน้าหลัก</span>
                    </a>
                    <a href="{{ route('repair') }}" class="nav_link">
                        <i class='bx bx-wrench'></i>
                        <span class="nav_name">แจ้งซ่อม</span>
                    </a>
                    <a href="{{ route('request') }}" class="nav_link">
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


    <br><br><br><br>

    {{-- <div class="w-100" style="height: 200px">
        <div class="d-flex justify-content-around" style="margin: 1cm; margin-left: -8.2cm">
            <div class="text-center">
                <div style="width: 100px; height: 100px;">
                    <button type="button" class="btn"
                        style="width: 420px; height: 160px; border-radius: 15px; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-left: 2cm; box-shadow: 3px 4px  #a4a2a2;  border-color:gainsboro;">
                        <i class="bx bx-wrench fas text-danger" style="font-size: 80px; margin-top: -6px;"></i>
                        <h3 style="font-size: 18px;" class="text-center text-dark">แจ้งซ่อม</h3>
                        <h5 style="font-size: 15px;" class="text-center text-muted">การแจ้งส่งซ่อมอุปกรณ์</h5>
                    </button>
                </div>
            </div>

            <div class="text-center">
                <div style="width: 100px; height: 100px;">
                    <button type="button" class="btn"
                        style="width: 420px; height: 160px; border-radius: 15px; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-left: -2px; box-shadow: 3px 4px  #a4a2a2;  border-color:gainsboro;">
                        <i class="bx bx-briefcase-alt-2 text-danger" style="font-size: 80px; margin-top: -6px;"></i>
                        <h3 style="font-size: 18px;" class="text-center text-dark">แจ้งเบิก</h3>
                        <h5 style="font-size: 15px;" class="text-center text-muted">การเเจ้งเบิกอุปกรณ์</h5>
                    </button>
                </div>
            </div>


            <div class="text-center">
                <div style="width: 100px; height: 100px;">
                    <button type="button" class="btn"
                        style="width: 420px; height: 160px; border-radius: 15px; display: flex; flex-direction: column; justify-content: center; align-items: center;  margin-left: -78px; box-shadow: 3px 4px  #a4a2a2;  border-color:gainsboro;">
                        <i class="bx bx-select-multiple text-danger" style="font-size: 80px; margin-top: 25px;"></i>
                        <h3 style="font-size: 18px;" class="text-center text-dark">เช็คสถานะ</h3>
                        <h5 style="font-size: 15px;" class="text-center text-muted">การส่งซ่อม/เบิกอุปกรณ์</h5>
                        <hr>
                    </button>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-sm-12 col-sm-4 col-md-4 col-lg-4 d-flex align-items-center justify-content-center">
            <button type="button" class="btn"
                style="width: 400px; height: 210px; box-shadow: 3px 4px  #a4a2a2; border-radius: 15px; border-color:gainsboro;">
                <i class="bx bx-wrench fas text-danger" style="font-size: 80px; margin-top: -6px;"></i>
                <h3 style="font-size: 18px;" class="text-center text-dark">แจ้งซ่อม</h3>
                <h5 style="font-size: 15px;" class="text-center text-muted">การแจ้งส่งซ่อมอุปกรณ์</h5>
            </button>
        </div>
        <div class="col-sm-12 col-sm-4 col-md-4 col-lg-4 d-flex align-items-center justify-content-center">
            <a href="{{ route('request') }}" class="btn"
                style="width: 400px; height: 210px; box-shadow: 3px 4px  #a4a2a2; border-radius: 15px; border-color:gainsboro;">
                <i class="bx bx-briefcase-alt-2 text-danger" style="font-size: 80px; margin-top: -6px;"></i>
                <h3 style="font-size: 18px;" class="text-center text-dark">แจ้งเบิก</h3>
                <h5 style="font-size: 15px;" class="text-center text-muted">การเเจ้งเบิกอุปกรณ์</h5>
            </a>
        </div>
        <div class="col-sm-12 col-sm-4 col-md-4 col-lg-4 d-flex align-items-center justify-content-center">
            <button type="button" class="btn"
                style="width: 400px; height: 210px; box-shadow: 3px 4px  #a4a2a2; border-radius: 15px; border-color:gainsboro;">
                <i class="bx bx-select-multiple text-danger" style="font-size: 80px; margin-top: -6px;"></i>
                <h3 style="font-size: 18px;" class="text-center text-dark">เช็คสถานะ</h3>
                <h5 style="font-size: 15px;" class="text-center text-muted">การส่งซ่อม/เบิกอุปกรณ์</h5>
            </button>
        </div>
    </div>

    <br><br><br><br><br>


    <div class="row" style="margin-left: 10px">
        <div class="col-sm-12 col-sm-6 col-md-6 col-lg-6 mr-1 pt-4"
            style="width: 625px; height: 180px; box-shadow: 3px 4px  #a4a2a2; border-radius: 15px; border-color:gainsboro; bg-color:white; border-style: solid;">
            <div style="padding-left: 40px; margin-bottom: 10px;">
                <h5>วิธีการส่งซ่อม</h5>
            </div>
            {{-- box 2 --}}
            <div class="d-flex align-items-center center justify-content-center" style="display: flex; ">
                <div style="width: 100px; height: 60x; font-size: 40px; ">
                    <i class="h bx bx-wrench text-danger d-flex justify-content-center"></i>
                </div>
                <div style="width: 80px; height: 1px; background-color: red"></div>
                <div style="width: 100px; height: 60px; font-size: 40px;">
                    <i class="h bx bx-file text-danger d-flex justify-content-center"> </i>
                </div>
                <div style="width: 80px; height: 1px; background-color: red"></div>
                <div style="width: 100px; height: 60px; font-size: 40px;">
                    <i class="h bx bx-time-five text-danger d-flex justify-content-center"> </i>
                </div>
                <div style="width: 80px; height: 1px; background-color: red"></div>
                <div style="width: 100px; height: 60px; font-size: 40px;">
                    <i class="h bx bx-check-circle text-danger d-flex justify-content-center "> </i>
                </div>
            </div>
            {{-- box 3 --}}
            <div class="d-flex align-items-center center justify-content-center;"
                style="display: flex; font-size: 14px; padding-left: 25px;padding-top: 20px">
                <div style="width: 100px; height: 50x; ">
                    <p>กดเมนูแจ้งซ่อม</p>

                </div>
                <div style="width: 70px; height: 1px; background-color: rgb(255, 255, 255)"></div>
                <div style="width: 110px; height: 50x;">
                    <p>กรอกรายละเอียด</p>

                </div>
                <div style="width: 70px; height: 1px; background-color: rgb(255, 255, 255)"></div>
                <div style="width: 100px; height: 50x;">
                    <p>รอดำเนินการ</p>

                </div>
                <div style="width: 70px; height: 1px; background-color: rgb(255, 255, 255)"></div>
                <div style="width: 100px; height: 50x;">
                    <p>ส่งมอบเสร็จสิ้น</p>

                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 660px; margin-top: -180px;">

            <div class="col-sm-12 col-sm-6 col-md-6 col-lg-6 ml-1 pt-4"
                style="width: 625px; height: 180px; border-radius: 15px; box-shadow: 3px 4px  #a4a2a2; border-radius: 15px; border-color:gainsboro; bg-color:white; border-style: solid;">
                <div style="padding-left: 40px; margin-bottom: 10px;">
                    <h5>วิธีการเบิก</h5>
                </div>
                {{-- box 2 --}}
                <div class="d-flex align-items-center center justify-content-center" style="display: flex; ">
                    <div style="width: 100px; height: 60x; font-size: 40px; ">
                        <i class="h bx bx-briefcase-alt-2 text-danger d-flex justify-content-center"></i>
                    </div>
                    <div style="width: 80px; height: 1px; background-color: red"></div>
                    <div style="width: 100px; height: 60px; font-size: 40px;">
                        <i class="h bx bx-list-check text-danger d-flex justify-content-center"> </i>
                    </div>
                    <div style="width: 80px; height: 1px; background-color: red"></div>
                    <div style="width: 100px; height: 60px; font-size: 40px;">
                        <i class="h bx bx-time-five text-danger d-flex justify-content-center"> </i>
                    </div>
                    <div style="width: 80px; height: 1px; background-color: red"></div>
                    <div style="width: 100px; height: 60px; font-size: 40px;">
                        <i class="h bx bx-check-circle text-danger d-flex justify-content-center "> </i>
                    </div>
                </div>
                {{-- box 3 --}}
                <div class="d-flex align-items-center center justify-content-center;"
                    style="display: flex; font-size: 14px; padding-left: 25px;padding-top: 20px">
                    <div style="width: 100px; height: 50x; ">
                        <p>กดเมนูแจ้งเบิก</p>

                    </div>
                    <div style="width: 70px; height: 1px; background-color: rgb(255, 255, 255)"></div>
                    <div style="width: 110px; height: 50x;">
                        <p>เลือกรายการ</p>

                    </div>
                    <div style="width: 70px; height: 1px; background-color: rgb(255, 255, 255)"></div>
                    <div style="width: 100px; height: 50x;">
                        <p>รอดำเนินการ</p>

                    </div>
                    <div style="width: 70px; height: 1px; background-color: rgb(255, 255, 255)"></div>
                    <div style="width: 100px; height: 50x;">
                        <p>ส่งมอบเสร็จสิ้น</p>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Container Main end-->

    <!-- Javascript -->
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
</body>

</html>
