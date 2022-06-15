<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.head')
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">

            <a class="navbar-brand m-0" href="/dashboard" target="_blank">

                <span class="ms-1 font-weight-bold" style="font-size:24px"> CARI PEMAIN</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  " href="redirects">
                        <div class="">
                            <i class="fa fa-font-awesome icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"></i>
                        </div>

                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('tables') }}">
                        <div class="">
                            <i class="fa fa-futbol icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Team</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('event') }}">
                        <div class="">
                            <i class="fa fa-calendar icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Event</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('lineup') }}">
                        <div class="">
                            <i class="icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"><img src="assets/img/football-01.svg" alt="" style="width:18px;fill:#67748E"></i>

                        </div>
                        <span class="nav-link-text ms-1">Line Up</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('grade') }}">
                        <div class="">
                            <i class="fa fa-a icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"></i>

                        </div>
                        <span class="nav-link-text ms-1">Grade</span>
                    </a>
                </li>

                {{-- Ini Buat Uji coba view user --}}
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="redirects">
                        <div class="">
                            <i class="fa fa-person-chalkboard icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"></i>
                        </div>

                        <span class="nav-link-text ms-1">Pelatih</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="redirects">
                        <div class="">
                            <i class="fa fa-chalkboard-user icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"></i>
                        </div>

                        <span class="nav-link-text ms-1">Asisten Pelatih</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="redirects">
                        <div class="">
                            <i class="fa fa-graduation-cap icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center"
                                aria-hidden="true"></i>
                        </div>

                        <span class="nav-link-text ms-1">Pemain</span>
                    </a>
                </li>
            </ul>
        </div>
        {{-- <div class="sidenav-footer mx-3 ">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                <div class="full-background"
                    style="background-image: url('admin_assets/img/curved-images/white-curved.jpg')"></div>
                <div class="card-body text-start p-3 w-100">
                    <div
                        class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                        <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true"
                            id="sidenavCardIcon"></i>
                    </div>
                    <div class="docs-info">
                        <h6 class="text-white up mb-0">Need help?</h6>
                        <p class="text-xs font-weight-bold">Please check our docs</p>
                        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard"
                            target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                    </div>
                </div>
            </div>
            <a class="btn bg-gradient-primary mt-3 w-100"
                href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree">Upgrade to pro</a>
        </div> --}}
    </aside>
    @yield('admin_assets')
    <!--   Core JS Files   -->

    <script src="admin_assets/corejs.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../admin_assets/js/spiderchart.js"></script>
    <script src="../admin_assets/js/teamline.js"></script>
    <script src="../admin_assets/js/core/popper.min.js"></script>
    <script src="../admin_assets/js/core/bootstrap.min.js"></script>
    <script src="../admin_assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../admin_assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../admin_assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Sales",
                    tension: 0.4,
                    borderWidth: 0,
                    borderRadius: 4,
                    borderSkipped: false,
                    backgroundColor: "#fff",
                    data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 500,
                            beginAtZero: true,
                            padding: 15,
                            font: {
                                size: 14,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#fff"
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: false
                        },
                    },
                },
            },
        });


        var ctx2 = new chart(document.getElementById("chart-line").getContext("2d")).Line(data);

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
        gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        label: "Mobile apps",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6

                    },
                    {
                        label: "Websites",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#b2b9bf',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#b2b9bf',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../admin_assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->

</body>

</html>
