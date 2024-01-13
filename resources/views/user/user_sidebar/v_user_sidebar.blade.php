@extends('uses.v_user_repair');
@section('sidebar')
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
                    style="color: white; display: flex; align-items: center; margin-left: 10px;">User 1</span>
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
                            <i class='bx bx-bookmark nav_icon'></i>
                            <span class="nav_name">ประวัติ</span>
                        </a>
                    </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                        class="nav_name">ออกจากระบบ</span> </a>
            </nav>

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
@stop
