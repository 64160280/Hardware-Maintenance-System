<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/request_table.css') }}">

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
    <div class="pt-3">
        <h2><i class='bx bx-folder-open bx-flip-horizontal'></i><span class="ms-2">แจ้งเบิกอุปกรณ์</span>
        </h2>
        <hr>
        <h3>รายการอุปกรณ์</h3>

    </div>

    <div class="container mx-4">
        <div class="table-container">

            <table class="table table-striped">
                <colgroup>
                    <col style="width: 5%;">
                    <col style="width: 50%;">
                    <col style="width: 10%;">
                    <col style="width: 20%;">
                    <col style="width: 5%;">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="center-column">ชื่ออุปกรณ์</th>
                        <th scope="col" class="center-column">จำนวน</th>
                        <th scope="col" class="center-column">รูป</th>
                        <th scope="col">แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="center-column">Mark</td>
                        <td class="center-column"><input type="number" class="form-control" name=""
                                id="" value="1" min="1"></td>
                        <td class="center-column"><img src="https://mini-game.org/wp-content/uploads/2021/11/1-1.jpg"
                                alt=""></td>
                        <td><button type="button" class="btn border-0"><i
                                    class='bx bxs-trash custom-trash-icon'></i></button></td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td class="center-column">Mark</td>
                        <td class="center-column"><input type="number" class="form-control" name=""
                                value="1" min="1"></td>
                        <td class="center-column"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8mEIWZjRFdiO4YIkq790lTaNzTtCH6DcwrQ&usqp=CAU"
                                alt=""></td>
                        <td><button type="button" class="btn border-0"><i
                                    class='bx bxs-trash custom-trash-icon'></i></button></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="button-container">
            <a href="#" class="btn btn-secondary mx-2 btn-rounded border-0"
                style="background-color: #AFAFAF; border-radius: 8px;">ย้อนกลับ</a>
            <button class="btn btn-success btn-rounded border-0" data-bs-toggle="modal" data-bs-target="#succesModal"
                style="background-color: #27A743; border-radius: 8px;">ยืนยัน</button>
        </div>

        <!-- MODEL -->
        <div class="modal fade" id="succesModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container d-flex align-items-center justify-content-center">
                            <div>
                                <i class="bx bxs-check-circle check-circle"></i>
                                <br>
                                <span
                                    class="d-flex align-items-center justify-content-center mt-1">แจ้งเรื่องเรียบร้อย</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-secondary">ปิด</a>
                    </div>
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
</body>

</html>
