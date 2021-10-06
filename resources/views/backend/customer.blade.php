<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Quotation</title>

    <!-- Bootstrap 5.1.0 CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/bootstrap-5.1.0/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css')}}">

    <!-- jquery CDNJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    

    <!-- Bootstrap 5.1.0 JS -->
    <script src="{{ asset('public/assets/bootstrap-5.1.0/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Data Table -->
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('public/assets/js/style.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar-top sticky-top">
        <section class="container-fluid">
            <div class="nav-content d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-start align-items-center">
                    <div>
                        <button class="nav-btn closeNav">
                            <svg class="hamburgerIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                fill="none" viewBox="0 0 32 32">
                                <path stroke="#828282" stroke-linecap="round" stroke-width="2.5"
                                    d="M4.25 6.75h22.5M4.25 16.75h13.5M4.25 26.75h22.5" />
                            </svg>

                    </div>
                    <div class="logo">
                        <span>Q.</span>
                        <span>Builder</span>
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center nav-settings">
                    <div>
                        <button class="notif-btn">
                            <svg class="notificationIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                fill="none" viewBox="0 0 32 32">
                                <path stroke="#828282" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M24 10.667a8 8 0 00-16 0c0 9.333-4 12-4 12h24s-4-2.667-4-12zM18.307 28a2.668 2.668 0 01-4.614 0" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <button class="notif-btn settingsAction">
                            <svg class="notificationIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                fill="none" viewBox="0 0 32 32">
                                <path stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 20a4 4 0 100-8 4 4 0 000 8z" />
                                <path stroke="#BDBDBD" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M25.867 20a2.2 2.2 0 00.44 2.427l.08.08a2.666 2.666 0 01-.866 4.352 2.666 2.666 0 01-2.908-.58l-.08-.08a2.2 2.2 0 00-2.426-.44 2.2 2.2 0 00-1.334 2.014V28a2.666 2.666 0 11-5.333 0v-.12A2.2 2.2 0 0012 25.867a2.2 2.2 0 00-2.427.44l-.08.08a2.667 2.667 0 11-3.773-3.774l.08-.08a2.2 2.2 0 00.44-2.426 2.2 2.2 0 00-2.013-1.334H4a2.667 2.667 0 010-5.333h.12A2.2 2.2 0 006.133 12a2.2 2.2 0 00-.44-2.427l-.08-.08A2.667 2.667 0 017.5 4.938a2.667 2.667 0 011.887.782l.08.08a2.2 2.2 0 002.426.44H12a2.2 2.2 0 001.333-2.013V4a2.667 2.667 0 015.334 0v.12A2.2 2.2 0 0020 6.133a2.2 2.2 0 002.427-.44l.08-.08a2.665 2.665 0 013.773 0 2.667 2.667 0 010 3.774l-.08.08a2.2 2.2 0 00-.44 2.426V12a2.2 2.2 0 002.013 1.333H28a2.666 2.666 0 110 5.334h-.12A2.2 2.2 0 0025.867 20v0z" />
                            </svg>

                        </button>
                    </div>
                    <div>
                        <button class="notif-btn logoutBtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#000"
                                    d="M4 12a1 1 0 001 1h7.59l-2.3 2.29a1.002 1.002 0 00.325 1.639 1 1 0 001.095-.219l4-4a1 1 0 00.21-.33 1 1 0 000-.76 1 1 0 00-.21-.33l-4-4a1.003 1.003 0 10-1.42 1.42l2.3 2.29H5a1 1 0 00-1 1zM17 2H7a3 3 0 00-3 3v3a1 1 0 002 0V5a1 1 0 011-1h10a1 1 0 011 1v14a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 10-2 0v3a3 3 0 003 3h10a3 3 0 003-3V5a3 3 0 00-3-3z" />
                            </svg>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="userImage">
                            <a href="profile.html"><img src="{{ asset('public/assets/images/user-img.svg')}}" alt="User Image"></a>
                        </div>
                        <div class="user-name">
                            <h1>Sheehan Rahman</h1>
                            <p>Super Admin</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </nav>

    <!-- SideNavbar -->
    <section class="sidebar">
        <ul class="sidebar-inner">
            <li class="sideLi">
                <button type="button" data-target="expandSidebar1">
                    <svg class="sideMenuIcon sideMenuIconActive" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" fill="none" viewBox="0 0 32 32">
                        <path fill="#828282"
                            d="M26.667 10.667l-8-7.014a4 4 0 00-5.334 0l-8 7.014A4 4 0 004 13.68v11.653a4 4 0 004 4h16a4 4 0 004-4V13.667a4.001 4.001 0 00-1.333-3zm-8 16h-5.334V20a1.333 1.333 0 011.334-1.333h2.666A1.333 1.333 0 0118.667 20v6.667zm6.666-1.334A1.333 1.333 0 0124 26.667h-2.667V20a4 4 0 00-4-4h-2.666a4 4 0 00-4 4v6.667H8a1.333 1.333 0 01-1.333-1.334V13.667a1.334 1.334 0 01.453-1l8-7a1.333 1.333 0 011.76 0l8 7a1.334 1.334 0 01.453 1v11.666z" />
                    </svg>
                </button>

                <!-- Expansion Sidebar -->
                <span class="customTooltip">
                    Dashboard
                </span>
            </li>
            <li class="sideLi">
                <button data-target="expandSidebar2">
                    <svg class="sideMenuIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                        viewBox="0 0 32 32">
                        <path fill="#828282" fill-rule="evenodd"
                            d="M4 14.667c.736 0 1.333.597 1.333 1.333 0 .003 0 .01.005.024a.4.4 0 00.043.09c.056.092.17.23.385.4.436.346 1.151.716 2.156 1.051 1.997.667 4.847 1.102 8.078 1.102 3.231 0 6.081-.435 8.078-1.102 1.005-.335 1.72-.705 2.156-1.051.215-.17.329-.308.385-.4a.396.396 0 00.043-.09.083.083 0 00.005-.024 1.333 1.333 0 112.666 0c0 1.133-.684 2.003-1.442 2.604-.772.611-1.807 1.103-2.969 1.49-2.337.78-5.486 1.24-8.922 1.24-3.436 0-6.585-.46-8.922-1.24-1.162-.387-2.197-.879-2.969-1.49-.758-.601-1.442-1.471-1.442-2.604 0-.736.597-1.333 1.333-1.333zM5.333 6.667c0 .001 0 .007.004.02a.393.393 0 00.043.088c.057.092.172.231.388.401.44.347 1.16.718 2.168 1.054C9.94 8.898 12.79 9.333 16 9.333s6.061-.435 8.064-1.103c1.008-.336 1.727-.707 2.168-1.054.216-.17.331-.309.388-.4a.393.393 0 00.043-.089.07.07 0 00.004-.02c0-.001 0-.007-.004-.02a.393.393 0 00-.043-.089 1.648 1.648 0 00-.388-.401c-.44-.347-1.16-.718-2.168-1.054C22.06 4.436 19.21 4 16 4s-6.061.436-8.064 1.103c-1.008.336-1.727.707-2.168 1.054-.216.17-.331.309-.388.401a.393.393 0 00-.043.088c-.004.014-.004.02-.004.02zm1.76-4.094c2.34-.78 5.49-1.24 8.907-1.24s6.566.46 8.907 1.24c1.163.388 2.201.88 2.975 1.49.76.598 1.451 1.468 1.451 2.604 0 1.136-.691 2.006-1.45 2.604-.775.61-1.813 1.101-2.976 1.489-2.34.78-5.49 1.24-8.907 1.24s-6.566-.46-8.907-1.24c-1.163-.388-2.201-.879-2.975-1.49-.76-.597-1.451-1.467-1.451-2.603 0-1.136.692-2.006 1.45-2.605.775-.61 1.813-1.1 2.976-1.489z"
                            clip-rule="evenodd" />
                        <path fill="#828282" fill-rule="evenodd"
                            d="M4 5.333c.736 0 1.333.597 1.333 1.334v18.666c0 .003 0 .01.005.024a.4.4 0 00.043.09c.056.092.17.23.385.4.436.346 1.151.716 2.156 1.052C9.92 27.565 12.77 28 16 28c3.231 0 6.081-.435 8.078-1.101 1.005-.336 1.72-.706 2.156-1.052.215-.17.329-.308.385-.4a.396.396 0 00.043-.09.083.083 0 00.005-.024V6.667a1.333 1.333 0 112.666 0v18.666c0 1.133-.684 2.003-1.442 2.604-.772.612-1.807 1.103-2.969 1.491-2.337.78-5.486 1.239-8.922 1.239-3.436 0-6.585-.459-8.922-1.239-1.162-.388-2.197-.88-2.969-1.49-.758-.602-1.442-1.472-1.442-2.605V6.667c0-.737.597-1.334 1.333-1.334z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Expansion Sidebar -->
                <span class="customTooltip">
                    Item Management
                </span>

            </li>
            <li class="sideLi">
                <button data-target="expandSidebar3">
                    <svg class="sideMenuIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                        viewBox="0 0 32 32">
                        <path fill="#828282" fill-rule="evenodd"
                            d="M5.172 2.505A4 4 0 018 1.333h10.667c.353 0 .692.14.942.39l8 8c.25.25.391.59.391.944v16a4 4 0 01-4 4H8a4 4 0 01-4-4V5.333a4 4 0 011.172-2.828zM8 4a1.333 1.333 0 00-1.333 1.333v21.334A1.333 1.333 0 008 28h16a1.333 1.333 0 001.333-1.333V11.219L18.114 4H8z"
                            clip-rule="evenodd" />
                        <path fill="#828282" fill-rule="evenodd"
                            d="M9.333 22.667c0-.737.597-1.334 1.334-1.334h10.666a1.333 1.333 0 010 2.667H10.667a1.333 1.333 0 01-1.334-1.333zM9.333 17.333c0-.736.597-1.333 1.334-1.333h10.666a1.333 1.333 0 110 2.667H10.667a1.333 1.333 0 01-1.334-1.334zM9.333 12c0-.736.597-1.333 1.334-1.333h2.666a1.333 1.333 0 110 2.666h-2.666A1.333 1.333 0 019.333 12zM18.667 1.333c.736 0 1.333.597 1.333 1.334v6.666h6.667a1.333 1.333 0 110 2.667h-8a1.333 1.333 0 01-1.334-1.333v-8c0-.737.597-1.334 1.334-1.334z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <!-- Expansion Sidebar -->
                <span class="customTooltip">
                    Quotation Info
                </span>
            </li>
        </ul>
    </section>

    <!-- extension sidebar wrapper -->
    <div class="extension-sidebar-wrapper">
        <ul class="expansion-sidebar" id="expandSidebar1">
            <li>
                <h3>Quotation Management</h3>
            </li>

            <li class="multilevelMenu">
                <a href="#">All Invoices1
                    <svg class="arrowIcon " xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="#828282" d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                    </svg>

                </a>
                <ul class="d-none">
                    <li><a href="#">Menu 1</a></li>
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Pending Invoices1 </a>
            </li>
            <li>
                <a href="#">Redo Requests1 </a>
            </li>
            <li>
                <a href="#">Paid Invoices2 </a>
            </li>
        </ul>
        <ul class="expansion-sidebar" id="expandSidebar2">
            <li>
                <h3>Quotation Management</h3>
            </li>
            <li>
                <a href="#">All Invoices2</a>
            </li>
            <li>
                <a href="#">Pending Invoices2 </a>
            </li>
            <li>
                <a href="#">Redo Requests2 </a>
            </li>
            <li>
                <a href="#">Paid Invoices2 </a>
            </li>
        </ul>
        <ul class="expansion-sidebar" id="expandSidebar3">
            <li>
                <h3>Quotation Management</h3>
            </li>
            <li>
                <a href="#">All Invoices3</a>
            </li>
            <li>
                <a href="#">Pending Invoices3 </a>
            </li>
            <li>
                <a href="#">Redo Requests3 </a>
            </li>
            <li>
                <a href="#">Paid Invoices3 </a>
            </li>
        </ul>
    </div>

    <!-- Theme Change Panel -->
    <section class="themePanel">
        <h1>Choose Your Theme</h1>

        <div class="theme-box" data-theme="0">
            <div class="activeTheme">
                <img src="{{ asset('public/assets/images/theme1.png')}}" alt="">
                <div class="colorCombo color1 d-flex justify-content-center">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>


            <h3>Theme1</h3>
        </div>
        <div class="theme-box" data-theme="1">
            <div>
                <img src="{{ asset('public/assets/images/theme2.png')}}" alt="">
                <div class="colorCombo color2 d-flex justify-content-center">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <h3>Theme2</h3>
        </div>

    </section>
    <div class="overlay-close"></div>

    <!-- Main Content -->
    <section class="main-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h1 class="dashboard-title">All Quotations</h1>
                </div>
                <div class="col-6 dashboard-title text-end">
                    <button data-bs-toggle="modal" data-bs-target="#addInfo" class="btn-outline">+ Add New
                        Quote</button>
                </div>
            </div>
        </div>

        <div class="container-fluid section-padding">
        <div class="row mb-5 g-4">
            <div class="col-12">
                <div class="card summary-card" style="width: 100%">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="allQuotationTable"
                                        class="table table-borderless align-middle text-center dashboardTable customTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Details</th>
                                                <th scope="col" class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($customers))

                                            @foreach($customers as $customer)
                                            <tr class="item{{$customer->id}}">
                                                <td>{{$customer->name}}</td>
                                                <td>{{$customer->details}}</td>
                                                <td class="actionBtn text-center">
                                                    <button data-bs-toggle="modal" onclick='viewCustomer({{ $customer->id }})' data-bs-target="#customerview"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path fill="#BDBDBD"
                                                                d="M21.92 11.6C19.9 6.91 16.1 4 12 4s-7.9 2.91-9.92 7.6a1 1 0 000 .8C4.1 17.09 7.9 20 12 20s7.9-2.91 9.92-7.6a1 1 0 000-.8zM12 18c-3.17 0-6.17-2.29-7.9-6C5.83 8.29 8.83 6 12 6s6.17 2.29 7.9 6c-1.73 3.71-4.73 6-7.9 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                                                        </svg>
                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#editInfo" onclick='editCustomer({{ $customer->id }})'>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path fill="#BDBDBD"
                                                                d="M5 18h4.24a1 1 0 00.71-.29l6.92-6.93L19.71 8a1 1 0 000-1.42l-4.24-4.29a1 1 0 00-1.42 0l-2.82 2.83-6.94 6.93a.999.999 0 00-.29.71V17a1 1 0 001 1zm9.76-13.59l2.83 2.83-1.42 1.42-2.83-2.83 1.42-1.42zM6 13.17l5.93-5.93 2.83 2.83L8.83 16H6v-2.83zM21 20H3a1 1 0 100 2h18a1 1 0 000-2z" />
                                                        </svg>

                                                    </button>
                                                    <button data-bs-toggle="modal" data-bs-target="#deleteInfo" onclick='deleteCustomer({{ $customer->id }})'><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="none" viewBox="0 0 24 24">
                                                            <path fill="#EB5757"
                                                                d="M10 16.8a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1zm10-12h-4v-1a3 3 0 00-3-3h-2a3 3 0 00-3 3v1H4a1 1 0 000 2h1v11a3 3 0 003 3h8a3 3 0 003-3v-11h1a1 1 0 100-2zm-10-1a1 1 0 011-1h2a1 1 0 011 1v1h-4v-1zm7 14a1 1 0 01-1 1H8a1 1 0 01-1-1v-11h10v11zm-3-1a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1z" />
                                                        </svg>

                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </section>


    <!-- Add Modal -->
    <div class="modal custom-modal add-modal fade" id="addInfo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="#BDBDBD"
                                d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="CustomeraddForm">@csrf
                        <div class="row">
                            <div class="col-12 form-input">
                                <label for="name">Customer Name</label>
                                <input class="form-control" type="text" placeholder="Customer Name" id="name"
                                    name="name">
                            </div>
                            <div class="col-12 form-input">
                                <label for="details">Customer Details</label>
                                <input class="form-control" type="text" placeholder="Customer Details" id="details"
                                    name="details">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit">Add Item</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div class="modal custom-modal view-modal no-footer fade" id="customerview" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="#BDBDBD"
                                d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-12">
                            <h6>Customer Name</h6>
                            <h5 id="view_name"></h5>
                        </div>
                        <div class="col-lg-6">
                            <h6>Customer Details</h6>
                            <h5 id="view_details"></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal custom-modal edit-modal fade" id="customerEditInfo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="#BDBDBD"
                                d="M13.41 12l6.3-6.29a1.004 1.004 0 10-1.42-1.42L12 10.59l-6.29-6.3a1.004 1.004 0 00-1.42 1.42l6.3 6.29-6.3 6.29a1 1 0 000 1.42.998.998 0 001.42 0l6.29-6.3 6.29 6.3a.999.999 0 001.42 0 1 1 0 000-1.42L13.41 12z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit">@csrf
                        <div class="row">
                        <div class="col-12 form-input">
                               
                                <input class="form-control" type="hidden" id="hidden_id" name="hidden_id">
                            </div>

                            
                            <div class="col-12 form-input">
                                <label for="email">Customer Name</label>
                                <input class="form-control" type="text" id="edit_name" name="name">
                            </div>
                            <div class="col-12 form-input">
                                <label for="email">Customer Details</label>
                                <input class="form-control" type="text"  id="edit_details" name="details">
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <!-- <div class="modal custom-modal delete-modal no-header fade" id="deleteInfo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body ">
                    <div class="deleteModalBody">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40">
                            <path fill="#828282"
                                d="M20 18.333A1.667 1.667 0 0018.333 20v6.667a1.667 1.667 0 103.334 0V20A1.667 1.667 0 0020 18.333zm.633-6.533a1.667 1.667 0 00-1.266 0c-.205.08-.392.198-.55.35a1.917 1.917 0 00-.35.55 1.4 1.4 0 00-.134.633 1.665 1.665 0 00.484 1.184c.162.147.348.265.55.35a1.667 1.667 0 002.3-1.534 1.75 1.75 0 00-.484-1.183 1.669 1.669 0 00-.55-.35zM20 3.333a16.667 16.667 0 100 33.334 16.667 16.667 0 000-33.334zm0 30a13.333 13.333 0 110-26.666 13.333 13.333 0 010 26.666z" />
                        </svg>

                        <h3>Delete Entry?</h3>
                        <p>Are you sure? You won’t be able to recover the entry.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="deleteBtn" type="button">Delete Entry</button>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        //$('.dropify').dropify();

        // var datatable;
        // $(document).ready(function () {
            
        //     datatable = $('#allQuotationTable').DataTable();
        // });


        $(document).on('keyup', '#search-input', function () {
            var value = $(this).val();
            datatable.search(value).draw();
        });
    
    var toastMixin = Swal.mixin({
            toast: true,
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        var config = {
            routes: {
                add: "{!! route('store-customer') !!}",
                edit: "{!! route('edit-customer') !!}",
                update: "{!! route('update-customer') !!}",
                delete: "{!! route('delete-customer') !!}",
            }
        };
	$(document).ready(function() {
            // data table
            $('#allQuotationTable').DataTable({
                "ordering": false,
            });
            // dropify table
            //$('.dropify').dropify();
        });

    // add form validation
    $(document).ready(function() {
            $("#CustomeraddForm").validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 50,
                    },
                    details: {
                        required: true,
                        maxlength: 2000,
                    },
                },
                messages: {
                    name: {
                        required: 'Please insert  name',
                    },
                    details: {
                        required: 'Please insert details',
                    },
                    
                },
                errorPlacement: function(label, element) {
                    label.addClass('mt-2 text-danger');
                    label.insertAfter(element);
                },
            });

            $("#CustomereditForm").validate({
                rules: {
                    name: {
                        required: true,
                        maxlength: 50,
                    },
                    details: {
                        required: true,
                        maxlength: 2000,
                    },
                },
                messages: {
                    name: {
                        required: 'Please insert  name',
                    },
                    details: {
                        required: 'Please insert details',
                    },
                    
                },
                errorPlacement: function(label, element) {
                    label.addClass('mt-2 text-danger');
                    label.insertAfter(element);
                },
            });
        });

    // add  request
        
    $(document).off('submit', '#CustomeraddForm');
        $(document).on('submit', '#CustomeraddForm', function(event) {
            event.preventDefault();
            // alert('hello')
            $.ajax({
                url: config.routes.add,
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: "json",
                success: function(response) {

                    if (response.success == true) {
                        var allQuotationTable = $('#allQuotationTable').DataTable();
                        var trDOM = allQuotationTable.row.add([
                            "" + response.data.name + "",
                            "" + response.data.details + "...",
                            `
                            <button  onclick='viewCustomer(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="#BDBDBD"
                                        d="M21.92 11.6C19.9 6.91 16.1 4 12 4s-7.9 2.91-9.92 7.6a1 1 0 000 .8C4.1 17.09 7.9 20 12 20s7.9-2.91 9.92-7.6a1 1 0 000-.8zM12 18c-3.17 0-6.17-2.29-7.9-6C5.83 8.29 8.83 6 12 6s6.17 2.29 7.9 6c-1.73 3.71-4.73 6-7.9 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                            <button  onclick='editCustomer(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="#BDBDBD"
                                        d="M5 18h4.24a1 1 0 00.71-.29l6.92-6.93L19.71 8a1 1 0 000-1.42l-4.24-4.29a1 1 0 00-1.42 0l-2.82 2.83-6.94 6.93a.999.999 0 00-.29.71V17a1 1 0 001 1zm9.76-13.59l2.83 2.83-1.42 1.42-2.83-2.83 1.42-1.42zM6 13.17l5.93-5.93 2.83 2.83L8.83 16H6v-2.83zM21 20H3a1 1 0 100 2h18a1 1 0 000-2z" />
                                </svg>

                            </button>
                            <button onclick='deleteCustomer(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="#EB5757"
                                        d="M10 16.8a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1zm10-12h-4v-1a3 3 0 00-3-3h-2a3 3 0 00-3 3v1H4a1 1 0 000 2h1v11a3 3 0 003 3h8a3 3 0 003-3v-11h1a1 1 0 100-2zm-10-1a1 1 0 011-1h2a1 1 0 011 1v1h-4v-1zm7 14a1 1 0 01-1 1H8a1 1 0 01-1-1v-11h10v11zm-3-1a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1z" />
                                </svg>

                            </button>
                            `
                        ]).draw().node();
                        $(trDOM).addClass('item' + response.data.id + '');
                        $('table tr:last td:last').addClass('actionBtn text-center');
                        $('#CustomeraddForm').trigger('reset');
                        if (response.data.message) {
                        	$('#addInfo').modal('hide');
                            toastMixin.fire({
                                icon: 'success',
                                animation: true,
                                title: "" + response.data.message + ""
                            });

                        }


                    } else {
                         Swal.fire({
                          position: 'top-end',
                          icon: 'warning',
                          title: response.data.error,
                          showConfirmButton: false,
                          timer: 1500
                        })
                    }
                }, //success end

                // beforeSend: function() {
                //     $('#add').modal('hide');
                //     $('.preloader').empty();
                //     $('.preloader').addClass('ajax_loader').append(
                //         `<div class='preloader'>
                //             <div id="status">
                //                 <div class="spinner"></div>
                //             </div>
                //         </div>`
                //     );
                // },
                // complete: function() {
                //     $('.preloader').removeClass('ajax_loader').empty();
                // }
            });
        });

//View Request
        function viewCustomer(id){

            $.ajax({
            url:config.routes.edit,
            method:"POST",
            data:{
                id:id,
                _token:  "{{ csrf_token() }}"
            },
            dataType:"json",
            success:function(response){
            if (response.success==true) {

                $('#view_name').text(response.data.name);
                $('#view_details').text(response.data.details);
                // $('#hidden_id').val(response.data.id);
                
                $('#customerview').modal('show');

                }

            }//success end
            });//ajax end

        }



    // delete Requesr
    function deleteCustomer(id) {
        // alert(id)
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: config.routes.delete,
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'JSON',
                    success: function(response) {

                         if (response.success === true) {
                            Swal.fire(
                                'Deleted!',
                                "" + response.data.message + "",
                                'success'
                            );
                            // swal("Done!", response.data.message, "success");
                            $('#allQuotationTable').DataTable().row('.item' + response.data.id).remove()
                                .draw();
                        } else {
                            Swal.fire("Error!", "Can't delete item", "error");
                        }
                    }
                });

            }
        })


    }
    //end

// edit category methods
    function editCustomer(id){

        $.ajax({
        url:config.routes.edit,
        method:"POST",
        data:{
            id:id,
            _token:  "{{ csrf_token() }}"
        },
        dataType:"json",
        success:function(response){
        if (response.success==true) {

            $('#edit_name').val(response.data.name);
            $('#edit_details').val(response.data.details);
            $('#hidden_id').val(response.data.id);
            
            $('#customerEditInfo').modal('show');

            }

        }//success end
    });//ajax end

    $(document).off('submit', '#edit');
                $(document).on('submit', '#edit', function(event){
            
                event.preventDefault();
                $.ajax({
                           //alert('h');
                    url:config.routes.update,
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    success:function(response)
                    {

                    if(response.success==true){
                    
                        
                        $('.item'+response.data.id).replaceWith(`<tr class='item${response.data.id}'><td>${response.data.name}</td><td>${response.data.details}...</td><td class="actionBtn text-center"> <button  onclick='viewCustomer(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path fill="#BDBDBD"
                                                            d="M21.92 11.6C19.9 6.91 16.1 4 12 4s-7.9 2.91-9.92 7.6a1 1 0 000 .8C4.1 17.09 7.9 20 12 20s7.9-2.91 9.92-7.6a1 1 0 000-.8zM12 18c-3.17 0-6.17-2.29-7.9-6C5.83 8.29 8.83 6 12 6s6.17 2.29 7.9 6c-1.73 3.71-4.73 6-7.9 6zm0-10a4 4 0 100 8 4 4 0 000-8zm0 6a2 2 0 110-4 2 2 0 010 4z" />
                                </svg>
                            </button>
                            <button  onclick='editCustomer(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="#BDBDBD"
                                        d="M5 18h4.24a1 1 0 00.71-.29l6.92-6.93L19.71 8a1 1 0 000-1.42l-4.24-4.29a1 1 0 00-1.42 0l-2.82 2.83-6.94 6.93a.999.999 0 00-.29.71V17a1 1 0 001 1zm9.76-13.59l2.83 2.83-1.42 1.42-2.83-2.83 1.42-1.42zM6 13.17l5.93-5.93 2.83 2.83L8.83 16H6v-2.83zM21 20H3a1 1 0 100 2h18a1 1 0 000-2z" />
                                </svg>

                            </button>
                            <button onclick='deleteCustomer(${response.data.id})'><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="#EB5757"
                                        d="M10 16.8a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1zm10-12h-4v-1a3 3 0 00-3-3h-2a3 3 0 00-3 3v1H4a1 1 0 000 2h1v11a3 3 0 003 3h8a3 3 0 003-3v-11h1a1 1 0 100-2zm-10-1a1 1 0 011-1h2a1 1 0 011 1v1h-4v-1zm7 14a1 1 0 01-1 1H8a1 1 0 01-1-1v-11h10v11zm-3-1a1 1 0 001-1v-6a1 1 0 00-2 0v6a1 1 0 001 1z" />
                                </svg>

                            </button></td></tr>`)
                        if(response.data.message)
                        {
                            $('#customerEditInfo').modal('hide');
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: response.data.message,
                            showConfirmButton: false,
                            timer: 1500
                            })
                            $('#customerEditInfo').trigger('reset');
                        
                        }
                        
                    }
                    else{
                        Swal.fire({
                                position: 'top-end',
                                icon: 'warning',
                                title: response.data.error,
                                showConfirmButton: false,
                                timer: 1500
                                })

                    }

                    },//success end
                });
                });
    }

</script>


</body>

</html>