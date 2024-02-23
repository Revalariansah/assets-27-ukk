<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    <link rel="shortcut icon" href="./assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('dist/assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/assets/compiled/css') }}/app-dark.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/assets/compiled/css') }}/iconly.css">
</head>

<body style=" background-color: #8f7fb6dd">
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <h5>MYPERPUS</h5>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Admin</li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Data</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item  ">
                                    <a href="component-accordion.html" class="submenu-link">Peminjam</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="/login/dashboard/user" class="submenu-link">User</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="/login/dashboard/kategori_buku" class="submenu-link">Kategori Buku</a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        <div class="container-fluid d-flex ms-5" style="margin-left: 25rem; margin-top: 3rem;">
        <h1 class="font-monospace" style="width: 15rem; margin-left: 25rem;">Rekomendasi Buku Untukmu</h1>
        </div>
        <!-- content 1 -->
        <div class="content">
            <div class="row">
                <div class="container-fluid d-flex ms-5" style="margin-left: 25rem; margin-top: 3rem;">
                    <div class="card" style="width: 15rem; margin-left: 25rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('buku_naruto.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Naruto
                                    </h4>
                                    <p class="card-text">
                                        Masashi Kishimoto
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#naruto">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('juki.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Si Juki : Seri Keroyokan
                                    </h4>
                                    <p class="card-text">
                                        Faza Meonk
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#juki">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('jujutsu.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Jujutsu
                                    </h4>
                                    <p class="card-text">
                                        Gege Akutami
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jujutsu">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('tokyo.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Tokyo Revengers
                                    </h4>
                                    <p class="card-text">
                                        Ken Wakui
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tokyo">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('hero.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Boku No Hero
                                    </h4>
                                    <p class="card-text">
                                        Kohei Horikoshi
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hero">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content 2 -->
        <div class="content">
            <div class="row">
                <div class="container-fluid d-flex ms-5" style="margin-left: 25rem; margin-top: 3rem;">
                    <div class="card" style="width: 15rem; margin-left: 25rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('haikyu.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Haikyu
                                    </h4>
                                    <p class="card-text">
                                        Haruichi Furudate
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#haikyu">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('conan.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Detektif Conan
                                    </h4>
                                    <p class="card-text">
                                        Gosho Aoyama
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#conan">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 16rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('boruto.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Boruto
                                    </h4>
                                    <p class="card-text">
                                        Masashi Kishimoto
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#boruto">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('aot.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Attack On Titan
                                    </h4>
                                    <p class="card-text">
                                        Hajime Isaya
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#aot">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem; margin-left: 2rem;">
                        <div class="card-content">
                            <img class="card-img-bottom img-fluid" style="width: 18rem;" src="{{asset('blue.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>
                                        Blue Lock
                                    </h4>
                                    <p class="card-text">
                                        Muneyuki Kaneshiro
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blue">
                                    Read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="naruto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Naruto Shippuden</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('buku_naruto.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
             Naruto adalah sebuah serial manga karya Masashi Kishimoto yang diadaptasi menjadi serial anime.
             Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya. 
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="juki" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Si Juki : Seri Keroyokan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('juki.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Si Juki seri Keroyokan adalah kompilasi komik dari Pionicon.
            Mereka yang menyambut undangan Juki untuk bergabung meliputi Congky, Juleha, Qdjy, Vusya, Hebring, Si Bedil, Raisah, Pavlichenko, Manka dan Zombie Ngehe. Kehadiran para karakter komik dalam seri Keroyokan ini diharap bisa melejitkan popularitas mereka bersama si Juki.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="jujutsu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Jujutsu Kaisen VOL 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('jujutsu.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Komik Jujutsu Kaisen 2 karya Gege Akutami menjadi salah satu komik yang wajib untuk diikuti. Sebuah kutukan yang menyerupai janin tiba-tiba muncul di lapas anak pria.
            Itadori dan murid tahun pertama lainnya diutus untuk menyelamatkan orang-orang yang masih berada di lapas tersebut.
            Yuk, mulai ikuti dan simak serial komik ini dengan konsep pertarungan unik dan epik.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tokyo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tokyo Revengers Vol 2</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('tokyo.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Takemichi, pria tidak berguna mantan berandalan, melintasi waktu ke masa SMP dua belas tahun lalu demi menyelamatkan mantan pacarnya yang amat disayanginya, Hinata. 
            Hinata tewas dibunuh Geng Tokyo Manji yang keji! Takemichi yang menarik perhatian ketuanya, Mikey, lantas bergabung dengan Toman.
            Saat kembali ke masa kini, sahabat lamanya yaitu Akkun, ternyata telah menjadi petinggi Toman.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="hero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Boku No Hero</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('hero.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Cerita My Hero Academia berkisah tentang Izuku Midoriya, siswa yang memiliki mimpi untuk menjadi pahlawan namun ia tidak memiliki kekuatan seperti yang lain. 
            Ia kemudian bertemu dengan pahlawan terkenal, All Might, yang akhirnya membuat dia mewarisi kekuatan super All Might.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
          <!-- Modal -->
          <div class="modal fade" id="haikyu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Haikyu</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('haikyu.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Seorang siswa SMA bernama Shōyō Hinata, menjadi terobsesi dengan bola voli setelah menyaksikan SMA Karasuno memenangkan pertandingan mereka untuk lolos ke Kejuaraan Nasional di TV.
             Meskipun memiliki tubuh yang pendek, Hinata terinspirasi oleh seorang pemain yang dijuluki "Raksasa Kecil", 
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
          <!-- Modal -->
          <div class="modal fade" id="conan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detektif Conan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('conan.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Ada guru bahasa Inggris dari luar negeri datang ke SMA Teitan, Bu Jody Santemillion.
             Sepintas dia adalah guru yang lembut, tetapi ada sesuatu di balik topengnya! Berdasarkan surat yang ditujukan pada Heiji, Conan dkk berangkat menuju pulau tempat tinggal putri duyung.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
          <!-- Modal -->
          <div class="modal fade" id="boruto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Boruto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('boruto.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Boruto: Naruto Next Generations adalah sebuah seri manga Jepang yang ditulis oleh Ukyō Kodachi dan Masashi Kishimoto dan diilustrasikan oleh Mikio Ikemoto. 
            Seri manga ini mulai diserialisasikan dalam majalah manga shōnen Shueisha, Weekly Shōnen Jump, pada Mei 2016 dan dipindahkan ke majalah bulanan Shueisha, V Jump, pada Juli 2019. 
            
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
          <!-- Modal -->
          <div class="modal fade" id="aot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Attack On Titan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('aot.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Segerombolan Titan mendadak muncul di dekat Wall Rose. Pasukan penyelidik termasuk semua Prajurit ke-104 bergegas ke tempat kemunculan Titan dan bermalam di Kastil Utgard. 
            Tapi, Titan yang seharusnya tidak bisa bergerak saat malam hari, tiba-tiba mengepung kastil tersebut! Apa para prajurit bisa bertahan dari serangan para Titan!?
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
          <!-- Modal -->
          <div class="modal fade" id="blue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Blue Lock</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex">
            <img class="card-img-bottom img-fluid" style="width: 15rem;" src="{{asset('blue.jpg')}}" alt="Card image cap" style="height: 20rem; object-fit:cover;">
            <p class="card-text p-2 g-col-6">
            Komik “Blue Lock 6” merupakan komik dalam seri Blue Lock.
             Di mana cerita dalam komik ini bermula dari tersingkirnya Jepang dari Piala Dunia FIFA 2018, yang mendorong Persatuan Sepak Bola Jepang untuk memulai sebuah program mencari pemain sekolah menengah yang akan memulai pelatihan untuk persiapan Piala 2022.
             Isagi Yoichi, seorang penyerang, menerima undangan ke program ini.
            </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script src="{{ asset('dist/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


    <script src="{{ asset('dist/assets/compiled/js/app.js') }}"></script>



    <!-- Need: Apexcharts -->
    <script src="{{ asset('dist/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/assets/static/js/pages/dashboard.js') }}"></script>

</body>

</html>
