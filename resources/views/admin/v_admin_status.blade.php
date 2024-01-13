<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Status</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/table_user.css') }}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


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
                    <a href="#" class="nav_link ">
                        <i class='bx bx-home-alt'></i>
                        <span class="nav_name">หน้าหลัก</span>
                    </a>
                    <a href="{{ route('approve') }}" class="nav_link">
                        <i class='bx bx-check-square'></i>
                        <span class="nav_name">อนุมัติรายการ</span>
                    </a>
                    <a href="#" class="nav_link active">
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

    <div class="d-flex align-items-center border-bottom border-dark w-100" style="height: 150px; padding-bottom: 50px;">
        <h2>สถานะงานแจ้งซ่อมอุปกรณ์ / แจ้งเบิกอุปกรณ์</h2>
        <div class="d-flex flex-row-reverse bd-highlight">
            <div class="border text-center center mt-4 pt-2 ms-4 p-2 bd-highlight "
                style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
                <h6>ดำเนินการ</h6>
                <h6>1</h6>
                <h6 style="width: 60px; height: 10px; background-color: rgb(25, 109, 198); margin: auto;"></h6>

            </div>
            <div class="border text-center center mt-4 pt-2 ms-4 p-2 bd-highlight"
                style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
                <h6>เสร็จสิ้น</h6>
                <h6>2</h6>
                <h6 style="width: 60px; height: 10px; background-color: rgb(12, 180, 43); margin: auto;"></h6>

            </div>
            <div class="border text-center center mt-4 pt-2 ms-4 p-2 bd-highlight"
                style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
                <h6>ส่งมอบ</h6>
                <h6>0</h6>
                <h6 style="width: 60px; height: 10px; background-color: rgb(222, 225, 27); margin: auto;"></h6>

            </div>
            <div class="border text-center center mt-4 pt-2 ms-4 p-2 bd-highlight"
                style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
                <h6>ยกเลิก</h6>
                <h6>0</h6>
                <h6 style="width: 60px; height: 10px; background-color: rgb(227, 41, 34); margin: auto;"></h6>

            </div>
        </div>
    </div>
    <!-- END Head content -->

    {{-- box status --}}

    {{-- <div class="d-flex flex-row-reverse bd-highlight">
        <div class="border text-center center mt-4 pt-2 p-2 bd-highlight"
            style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
            <h6>ดำเนินการ</h6>
            <h6>1</h6>
            <h6 style="width: 60px; height: 10px; background-color: rgb(25, 109, 198); margin: auto;"></h6>

        </div>
        <div class="border text-center center mt-4 pt-2 ms-4 p-2 bd-highlight"
            style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
            <h6>เสร็จสิ้น</h6>
            <h6>2</h6>
            <h6 style="width: 60px; height: 10px; background-color: rgb(12, 180, 43); margin: auto;"></h6>

        </div>
        <div class="border text-center center mt-4 pt-2 ms-4 p-2 bd-highlight"
            style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
            <h6>ส่งมอบ</h6>
            <h6>0</h6>
            <h6 style="width: 60px; height: 10px; background-color: rgb(222, 225, 27); margin: auto;"></h6>

        </div>
        <div class="border text-center center mt-4 pt-2 ms-4 p-2 bd-highlight"
            style="width: 230px; height: 90px; border-radius: 20px; border border-color: black;">
            <h6>ยกเลิก</h6>
            <h6>0</h6>
            <h6 style="width: 60px; height: 10px; background-color: rgb(227, 41, 34); margin: auto;"></h6>

        </div>
    </div> --}}

    {{-- End box status --}}


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
                    <th scope="col"style="width: 50px">สถานะ</th>
                    <th scope="col">#</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <th scope="col">วันที่แจ้ง</th>
                    <th scope="col">ชื่อผู้แจ้ง</th>
                    <th scope="col">ประเภทงาน</th>
                    <th scope="col">ชื่ออุปกรณ์</th>
                    <th scope="col">ชื่อผู้รับผิดชอบ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" class="h_t" style="width: 50px;">
                        <div class="circle-status"
                            style="background-color: #0066FF;
                            width: 30px; height: 30px; border-radius: 100%">
                        </div>
                    </th>
                    <th scope="col">1.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>10/02/2566</td>
                    <td>Chinnawat Leekpai</td>
                    <th>ซ่อมอุปกรณ์</th>
                    <td>เครื่องพิมพ์ Epson L3210 </td>
                    <td>Sutthapat Boontan</td>
                </tr>

                <tr>
                    <th scope="col" class="h_t" style="width: 50px;">
                        <div class="circle-status"
                            style="background-color: #1BC036;
                            width: 30px; height: 30px; border-radius: 100%">
                        </div>
                    </th>
                    <th scope="col">2.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>10/02/2566</td>
                    <td>Chinnawat Leekpai</td>
                    <th>เบิกอุปกรณ์</th>
                    <td>Harddisk PC ขนาด 1TB</td>
                    <td>Nareson Jiwbang</td>
                </tr>

                <tr>
                    <th scope="col" class="h_t" style="width: 50px;">
                        <div class="circle-status"
                            style="background-color: #1BC036;
                            width: 30px; height: 30px; border-radius: 100%">
                        </div>
                    </th>
                    <th scope="col">3.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>10/02/2566</td>
                    <td>Chinnawat Leekpai</td>
                    <th>ซ่อมอุปกรณ์</th>
                    <td>เครื่องพิมพ์ Epson L3210 </td>
                    <td>Phachara Aunkitti</td>
                </tr>

                <tr>
                    <th scope="col" class="h_t" style="width: 50px;">
                        <div class="circle-status"
                            style="background-color: #D9D9D9;
                            width: 30px; height: 30px; border-radius: 100%">
                        </div>
                    </th>
                    <th scope="col">4.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>-</td>
                    <td>-</td>
                    <th>-</th>
                    <td>-</td>
                    <td>-</td>

                </tr>

                <tr>
                    <th scope="col" class="h_t" style="width: 50px;">
                        <div class="circle-status"
                            style="background-color: #D9D9D9;
                            width: 30px; height: 30px; border-radius: 100%">
                        </div>
                    </th>
                    <th scope="col">5.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>-</td>
                    <td>-</td>
                    <th>-</th>
                    <td>-</td>
                    <td>-</td>

                </tr>

                <tr>
                    <th scope="col" class="h_t" style="width: 50px;">
                        <div class="circle-status"
                            style="background-color: #D9D9D9;
                            width: 30px; height: 30px; border-radius: 100%">
                        </div>
                    </th>
                    <th scope="col">6.</th>
                    <th scope="col"><i class='bx bx-dots-vertical-rounded'></i></th>
                    <td>-</td>
                    <td>-</td>
                    <th>-</th>
                    <td>-</td>
                    <td>-</td>

                </tr>
            </tbody>
        </table>
    </div>

    {{-- End Table --}}


    <!-- Pagination -->
    <div style="padding-top: 15px">
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
    </div>

    <!--Container Main end-->

    <!-- Button รายละเอียดแจ้งซ่อม modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        รายละเอียด
    </button>

    <!-- Modal -->
    <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="margin-left: auto">รายละเอียด
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div
                        style="border-style: solid;
                                border-width: 1px;border-color: black; border-radius: 10px;">

                        <div class="text_c1" style="padding-top: 15px; display: flex; ">
                            <p style=" width: 95px; font-size: 15px; margin-left: 160px;">
                                รอรับเรื่อง</p>
                            <p style="width: 100px; font-size: 15px; margin-left: 130px;">
                                กำลังดำเนินการ</p>
                            <p style="width: 95px; font-size: 15px; margin-left: 165px;">
                                ส่งมอบ</p>
                            <p style="width: 95px; font-size: 15px; margin-left: 145px;">
                                เสร็จสิ้น</p>

                        </div>
                        <div style="display: flex; margin-bottom: 10px; padding-top: 15px; padding-bottom: 15px; ">
                            <div class="circle1"
                                style="border-radius: 100%;
                                background-color: rgb(31, 185, 52);
                                z-index: 99;
                                width: 36px;
                                height: 36px;
                                border-style: solid;
                                border-width: 1px;
                                border-color: black;
                                margin-left: 170px;">
                            </div>
                            <div class="circle1"
                                style="border-radius: 100%;
                                background-color: rgb(31, 185, 52);
                                z-index: 99;
                                width: 36px;
                                height: 36px;
                                border-style: solid;
                                border-width: 1px;
                                border-color: black;
                                margin-left: 206px;">
                            </div>
                            <div class="circle1"
                                style="border-radius: 100%;
                                background-color: rgb(31, 185, 52);
                                z-index: 99;
                                width: 36px;
                                height: 36px;
                                border-style: solid;
                                border-width: 1px;
                                border-color: black;
                                margin-left: 206px;">
                            </div>
                            <div class="circle1"
                                style="border-radius: 100%;
                                background-color: rgb(31, 185, 52);;
                                z-index: 99;
                                width: 36px;
                                height: 36px;
                                border-style: solid;
                                border-width: 1px;
                                border-color: black;
                                margin-left: 206px;">
                            </div>
                        </div>
                    </div>
                    <!-- Modal Two -->
                    <div style="display: flex;">
                        <div class="modal_2">

                            <div class="modal_row_2">
                                <div class="modal_text_2">
                                    ชื่อผู้แจ้ง :
                                </div>
                                <div class="modal_input_2">
                                    ประสบ อุบัติเหตุ
                                </div>
                            </div>

                            <div class="modal_row_2">
                                <div class="modal_text_2">
                                    วันที่ผู้แจ้ง :
                                </div>
                                <div class="modal_input_2">
                                    15/03/2546
                                </div>
                            </div>

                            <div class="modal_row_2">
                                <div class="modal_text_2">
                                    ชื่อผู้รับผิดชอบ :
                                </div>
                                <div class="modal_input_2">
                                    ไขควง ประแจ
                                </div>
                            </div>

                            <div class="modal_row_2">
                                <div class="modal_text_2">
                                    เบอร์ติดต่อ :
                                </div>
                                <div class="modal_input_2">
                                    095-98xxx-xxx
                                </div>
                            </div>

                            <div class="modal_row_2">
                                <div class="modal_text_2">
                                    ประเภทงาน :
                                </div>
                                <div class="modal_input_2">
                                    ซ่อมอุปกรณ์
                                </div>
                            </div>

                            <div class="modal_row_2">
                                <div class="modal_text_2">
                                    สาเหตุ/ปัญหา :
                                </div>
                                <div class="modal_inputArea_2">
                                    จอดับ ไม่เห็นเหี้ยไรเลย
                                </div>
                            </div>

                            <div class="modal_row_2">
                                <div class="modal_text_2">
                                    หมายเหตุ :
                                </div>
                                <div class="modal_inputArea_2">
                                    ขอใน 2 วันนะ
                                </div>
                            </div>

                        </div>

                        <!-- Modal Three -->

                        <div class="card border-white text-center"
                            style="width: 20rem; height: 32rem; margin-top: 40px; margin-left: 100px;">
                            <p class="mx-auto card-text rounded-0 rounded-pill"
                                style="border-style: solid; border-width: 2px; width: 80px;">รูป</p>
                            <img src="{{ URL::asset('/picture/printer.png') }}">
                            <div class=" mt-auto">
                                <p class="align-bottom mx-auto rounded-0 rounded-pill"
                                    style="border-style: solid; border-width: 2px; width: 250px;">เครื่องพิมพ์
                                    Epson
                                    L3210</p>
                            </div>
                        </div>


                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            style="border-radius: 20px;">ย้อนกลับ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END รายละเอียดแจ้งซ่อม modal -->

    <!-- Button รายละเอียดแจ้งเบิก modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBack">
        รายละเอียด
    </button>

    <!-- Modal -->
    <div class="modal fade " id="staticBack" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="margin-left: auto">รายละเอียด
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div style="display: flex;">
                        <p style="margin-right: 70px;">วันที่แจ้ง : 10/02/2566</p>
                        <p style="margin-right: 70px;">ประเภทงาน : เบิกอุปกรณ์</p>
                        <p style="margin-right: 70px;">ชื่อผู้แจ้ง : Phutthipong Phumcharoen</p>
                        <p style="margin-right: 70px;">เบอร์ติดต่อ : 095-xxxx-xxx</p>



                    </div>
                    <!-- Modal Two -->
                    <div>
                        <div class="container">
                            <div class="row ">
                                <div class="col-sm-12 col-md-3 col-lg-3">
                                    <div class="card h-100 border-dark">

                                        <img src="{{ URL::asset('/picture/printer.png') }}" class="card-img-top"
                                            style="width:auto; height: 140px;" alt="...">
                                        <div class="card-body border border-dark border-1 rounded mb-3"
                                            style="width: 95%; margin-left: 6px;">
                                            <p class="card-text"><small>ชื่ออุปกรณ์ : KEYBOARD</small></p>
                                            <p class="card-text"><small>ยี่ห้อ/รุ่น : DELL MULTIMEDIA
                                                    KB216</small>
                                            </p>
                                            <p class="card-text"><small>รายละเอียด</small></p>
                                            <ul>
                                                <li><small>ลักษณะปุ่ม : Chiclet</small></li>
                                                <li><small>แบบอักษรปุ่มกด : English/Thai</small></li>
                                                <li><small>รูปแบบการเชื่อมต่อ : USB</small></li>
                                            </ul>
                                            <p class="align-bottom text-right"><small>จำนวนเบิก : 2</small></p>
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
                                            <p class="card-text"><small>ยี่ห้อ/รุ่น : FUJITSU CH
                                                    4ZR1J04218</small>
                                            </p>
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
                                            <p class="card-text"><small>ยี่ห้อ/รุ่น : FUJITSU CH
                                                    4ZR1J04218</small>
                                            </p>
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
                                            <p class="text-right"><small>จำนวนเบิก : 2</small></p>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="border-radius: 20px;">ย้อนกลับ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END รายละเอียดแจ้งเบิก modal -->

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
