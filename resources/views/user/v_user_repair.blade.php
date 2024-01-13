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
    <link rel="stylesheet" href="{{ asset('css/side_bar.css') }}">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_icon"> <i class='bx bxs-user-circle'></i> <span class="mx-2"
                style="color: white; display: flex; align-items: center; margin-left: 10px;">{{ Auth::user()->username }}
            </span>
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
                    <a href="{{ route('home') }}" class="nav_link">
                        <i class='bx bx-home-alt'></i>
                        <div><span class="nav_name">หน้าหลัก</span></div>

                    </a>
                    <a href="#" class="nav_link active">
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
    <div id="content">

        <!-- ข้อความบอกถึงสถานะตอนนี้-->
        <div class="pt-3">
            <h2><i class="fa-regular fa-folder-open fa-flip-horizontal"></i>แจ้งปัญหา/งานซ่อม</h2>

        </div>
        <hr>
        <div class="card mx-md-5 mx-xs-2 mt-3">
            <div class="card-header" style="background: red;">
                <span style="color: white;"><strong> แจ้งปัญหา/งานซ่อม</strong></span>
            </div>
            <div class="card-body">

                <!-- form -->
                <form method="POST" action="{{ route('save_data') }}">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">


                                <div class="mt-3">
                                    <label for="" class="form-label">ประเภทอุปกรณ์</label>
                                    <select class="form-select" name="equipment_type">
                                        <option selected disabled>ประเภทอุปกรณ์</option>
                                        <option value="7735600">คอมพิวเตอร์และอุปกรณ์ต่อพ่วง</option>
                                        <option value="7735601">อุปกรณ์เครือข่าย</option>
                                        <option value="7735602">เครื่องพิมพ์และสแกนเนอร์</option>
                                        <option value="7735603">อุปกรณ์จัดเก็บข้อมูล</option>
                                        <option value="7735604">อุปกรณ์เสียงและวิดีโอ</option>
                                        <option value="7735605">อื่น ๆ</option>
                                    </select>
                                </div>

                                <div class="mt-3">
                                    <label for="" class="form-label">ชื่ออุปกรณ์</label>
                                    <select class="form-select" name="equipment_name">
                                        <option selected disabled>ชื่ออุปกรณ์</option>

                                        @foreach ($equipments as $Da_equipment)
                                            <option value="{{ $Da_equipment->id }}">{{ $Da_equipment->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-3">
                                    <label for="" class="form-label">ปัญหา/งานซ่อม</label>
                                    <textarea name="issue" id="issue" cols="30" rows="7" class="form-control" required></textarea>
                                    @error('issue')
                                        <div class="alert alert-danger">{{ $success }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">อัปโหลดภาพอุปกรณ์</span>
                                    </div>
                                    <input type="file" class="form-control" accept=".jpg,.jpeg,.png" id="imgInput"
                                        name="picture" multiple>
                                    <div class="container-fluid border" style="height: 200px;">
                                        <div class="image-preview"></div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="" class="form-label">หมายเหตุ</label>
                                    <textarea name="details" id="details" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Button trigger modal -->
                        <div class=" row d-flex justify-content-center align-content-center mt-3">
                            <button type="submit" class="btn btn-success col-4 col-md-2 col-lg-1"
                                data-bs-toggle="modal" data-bs-target="#succesModal">
                                ยืนยัน
                            </button>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="succesModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container d-flex align-items-center justify-content-center">
                                            <div>
                                                <i class='bx bxs-check-circle'
                                                    style='color:#48c963; font-size:150px'></i>
                                                <br>
                                                <span
                                                    class="d-flex align-items-center justify-content-center mt-3">แจ้งเรื่องเรียบร้อย</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex align-items-center justify-content-center">
                                        <button type="reset" class="btn btn-secondary"
                                            data-bs-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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

        let imgInput = document.querySelector("#imgInput");
        let previewContainer = document.querySelector(".image-preview");
        const MAX_FILES = 4;

        imgInput.onchange = evt => {
            const files = imgInput.files;
            if (files.length > MAX_FILES) {
                alert(`You can upload a maximum of ${MAX_FILES} files.`);
                return;
            }
            if (files) {
                previewContainer.innerHTML = ''; // Clear previous preview images
                Array.from(files).forEach(file => {
                    const reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = () => {
                        const img = document.createElement("img");
                        img.src = reader.result;
                        img.classList.add("preview-image");
                        previewContainer.appendChild(img);
                    }
                });
            }
        }
    </Script>
</body>

</html>
