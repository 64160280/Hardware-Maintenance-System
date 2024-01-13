<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History IT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table_user.css') }}">

    <!-- <link rel="stylesheet" href="sidebar.css"> -->

</head>

<body id="body-pd">
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
                        <i class='bx bx-table'></i>
                        <span class="nav_name">ตารางงาน</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-calendar-alt'></i>
                        <span class="nav_name">ประวัติ</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-box'></i>
                        <span class="nav_name">คลังอุปกรณ์</span>
                    </a>
                </div>
            </div> <a href="{{ route('Logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>
    <!--Container Main start-->


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

    <!-- Head content -->
    <div class="d-flex align-items-end border-bottom border-dark w-100" style="height: 150px; padding-bottom: 50px;">
        <h1>ดูประวัติการซ่อมอุปกรณ์ / เบิกอุปกรณ์ </h1>
    </div>


    <div class="d-flex bd-highlight mb-3  align-items-center">

        <div class="p-2 bd-highlight">แสดง&nbsp&nbsp<input type="number" name="quantity" min="1" max="5"
                style="width: 40px;height: 20px;">&nbsp&nbspรายการ

        </div>

        <div class="p-2 bd-highlight  ">
            เลือกประเภทงาน
        </div>
        <div class="p-2 bd-highlight  ">
            <select class="form-select text-center" aria-label="Default select example"
                style="width: 200px;
                                    height: 35px;
                                    border-color: black;
                                    border-style:solid;
                                    border-radius: 20px; ">

                <option selected>ทั้งหมด</option>
                <option value="1">ซ่อมอุปกรณ์</option>
                <option value="2">เบิกอุปกรณ์</option>
            </select>
        </div>

        <div class="ms-auto p-2 bd-highlight">
            <div class="d-flex justify-content-end">
                <form class="d-flex align-items-center text-center">
                    <div class="justify-content-end align-items-center text-center" style="width: 140px;">ค้นหา
                        :</div>
                    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search"
                        style="width: 200px; height: 35px; border-color: black; border-style:solid;  border-radius: 20px; ">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class='bx bx-search'></i>
                    </button>
                </form>
            </div>
        </div>
    </div>


    {{-- start Table --}}
    <div>
        <table class="table table-striped w-100">
            <thead style="background-color: red; color: white;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <th scope="col">11/03/2566</th>
                    <th scope="col">ชื่อผู้แจ้ง</th>
                    <th scope="col">ประเภทงาน</th>
                    <th scope="col">อุปกรณ์</th>
                    <th scope="col">ระดับงาน</th>
                    <th scope="col">ส่งงาน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                </tr>

                <tr>
                    <th scope="row">2.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">3.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">4.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    {{-- colspan="2"> --}}
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">5.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    {{-- colspan="2"> --}}
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">6.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    {{-- colspan="2"> --}}
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- End Table --}}

    <!-- Pagination -->
    <div class="list-mf">
        <p>แสดง 1 ถึง 3 จาก 3 รายการ</p>
    </div>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">ก่อนหน้า</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">ถัดไป</a>
                </li>
            </ul>
        </nav>
    </div>
    <!--Container Main end-->
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
