<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_IT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table_user.css') }}">


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
                        <span class="nav_name">ดูประวัติ</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-box'></i>
                        <span class="nav_name">คลัง</span>
                    </a>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>
    <!--Container Main start-->

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
    <div class="content w-100">

        <div class="pt-4 d-flex justify-content-between">
            <div class="d-flex justify-content-center align-items-center">
                <h1>งานแจ้งในระบบ</h1>
            </div>

            <div class="d-flex justify-content-end">
                <div class="card shadow-sm border-1" style="width: 19rem; height:9rem; border-radius:30px;">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h2 class="card-title ps-2" style="font-size: 65px;"><strong>99</strong></h2>
                        </div>
                        <div class="card-title">
                          <h5 class="pe-2">
                            <i class='bx bx-wrench icon-lg p-3' style="background-color: red; border-radius:20px; font-size: 30px; color:white;"></i>
                          </h5>
                        </div>
                      </div>
                      <h4 class="ps-2">แจ้งซ่อมอุปกรณ์</h4>
                    </div>
                </div>

                <div class="card shadow-sm mx-4 border-1" style="width: 19rem; height:9rem; border-radius:30px;">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h2 class="card-title ps-2" style="font-size: 65px;"><strong>99</strong></h2>
                        </div>
                        <div class="card-title">
                          <h5 class="pe-2">
                            <i class='bx bx-check-square icon-lg p-3' style="background-color: red; border-radius:20px; font-size: 30px; color:white;"></i>
                          </h5>
                        </div>
                      </div>
                      <h4 class="ps-2">แจ้งเบิกอุปกรณ์</h4>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <!-- END Head content -->



    <!-- form select -->
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
    <!-- End form select -->

    {{-- start Table --}}
    <div>
        <table class="table table-striped w-100">
            <thead style="background-color: red; color: white;">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <th scope="col">วันที่แจ้ง</th>
                    <th scope="col">ประเภทงาน</th>
                    <th scope="col">อุปกรณ์</th>
                    <th scope="col">ระดับงาน</th>
                    <th scope="col">เลือกงาน</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ( as ) --}}
                <tr>
                    <th scope="row">1.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>11/02/2566</td>
                    <td>ซ่อมอุปกรณ์</td>
                    <td>เครื่องปริ้น</td>
                    <td>
                        <div class=" d-flex justify-content-center text-center m-auto">
                            <select class="form-select rounded-pill border-dark" aria-label="Default select example" style="width: 38%">
                                <option value="1" selected>low</option>
                                <option value="2">medium</option>
                                <option value="3">hight</option>
                            </select>

                        </div>
                    </td>
                    <td>
                        <button class="btn rounded-pill py-1 accept-btn" style="width: 100px">
                            <span style="color: white">รับงาน</span>
                        </button>
                    </td>
                </tr>

                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>

    {{-- End Table --}}

    <!-- Pagination -->
    {{-- <div style="padding-top: 15px">
        <p>แสดง 1 ถึง 3 จาก 3 รายการ</p>
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
    </div> --}}
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
