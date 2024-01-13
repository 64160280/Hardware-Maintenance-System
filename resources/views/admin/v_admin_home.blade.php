{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello Admin</h1>
    {{ Auth::user()->username }}
    <div>
        <a class="dropdown-item" href="{{ route('Logout') }}"
            onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('Logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">


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
                    <a href="{{ route('approve') }}" class="nav_link">
                        <i class='bx bx-check-square'></i>
                        <span class="nav_name">อนุมัติรายการ</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">สถานะ</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-calendar-alt'></i>
                        <span class="nav_name">ประวัติ</span>
                    </a>
                </div>
            </div> <a href="{{ route('Logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">

        <div class="height-100 bg-light">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


            <!-- Head content -->
            <div class="content">
                {{-- HEAD --}}
                <div class="pt-4 d-flex justify-content-between">
                    <div class="d-flex justify-content-center">
                        <h2>ตารางสถานะงานของช่างเทคนิค</h2>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="card shadow border-0" style="width: 19rem; height:10rem; border-radius:30px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h2 class="card-title ps-2" style="font-size: 65px;"><strong>99</strong></h2>
                                    </div>
                                    <div class="card-title">
                                        <h5 class="pe-2">
                                            <i class='bx bx-wrench icon-lg p-3'
                                                style="background-color: red; border-radius:20px; font-size: 50px; color:white;"></i>
                                        </h5>
                                    </div>
                                </div>
                                <h3 class="ps-2">รายการแจ้งในระบบ</h3>
                            </div>
                        </div>

                        <div class="card shadow mx-4 border-0" style="width: 19rem; height:10rem; border-radius:30px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h2 class="card-title ps-2" style="font-size: 65px;"><strong>99</strong></h2>
                                    </div>
                                    <div class="card-title">
                                        <h5 class="pe-2">
                                            <i class='bx bx-check-square icon-lg p-3'
                                                style="background-color: red; border-radius:20px; font-size: 50px; color:white;"></i>
                                        </h5>
                                    </div>
                                </div>
                                <h3 class="ps-2">จำนวนที่อนุมัติ</h3>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Table --}}
                <div class="mt-5">
                    <table class="table table-striped">
                        <thead style="background-color: red; color:white;">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ชื่อช่างเทคนิค</th>
                                <th scope="col" class="text-center">งานแจ้ง</th>
                                <th scope="col" class="text-center">ดำเนินการ</th>
                                <th scope="col" class="text-center">เสร็จสิ้น</th>
                                <th scope="col" class="text-center">ส่งมอบ</th>
                                <th scope="col" class="text-center">ยกเลิก</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Markded</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                            </tr>
                        </tbody>
                    </table>

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
