@extends('layout.master')
@section('content')
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #e9ecef;
            padding: 20px;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .nav-link {
            color: #333;
            font-weight: bold;
        }

        .main-content {
            padding: 20px;
        }

        .header {
            background-color: pink;
            padding: 15px 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .header .user-info {
            gap: 10px;
        }

        .overview-item {
            text-align: center;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .list-operators {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .top-conversations {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            vertical-align: middle;
        }

    </style>
      <div class="col-md-10 main-content">
        <div class="header d-flex justify-content-between align-items-center">
            <h1>Dashboard Home</h1>
            <div class="user-info d-flex align-items-center">
                <span>Name</span>
                <span>+85515401111</span>
                <img src="{{asset('assets/brand/user-avatar.svg')}}" alt="User Avatar" class="rounded-circle">
            </div>
        </div>
        <div class="overview d-flex justify-content-around mt-4">
            <div class="overview-item">
                <h3>User</h3>
                <p>3333</p>
            </div>
            <div class="overview-item">
                <h3>Successful Campaign</h3>
                <p>30</p>
            </div>
            <div class="overview-item">
                <h3>Pending</h3>
                <p>9</p>
            </div>
            <div class="overview-item">
                <h3>Failed</h3>
                <p>10</p>
            </div>
        </div>
        <div class="content mt-4">
            <div class="row">
                <div class="col-md-6">
                    <canvas id="conversationsChart"></canvas>
                </div>
                <div class="col-md-6">
                    <div class="list-operators">
                        <h4>List of Operators</h4>
                        <button class="btn btn-primary mb-3">Add new Operator</button>
                        <ul class="list-group">
                            <li class="list-group-item">vattanak (Admin)</li>
                            <li class="list-group-item">bora (User)</li>
                            <li class="list-group-item">vattana (User)</li>
                            <li class="list-group-item">alexander (User)</li>
                            <li class="list-group-item">jannet (User)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="top-conversations mt-4">
                <h4>Top Conversations</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Template Title</th>
                            <th>Sent Day</th>
                            <th>Category</th>
                            <th>Recipients</th>
                            <th>No of Clicks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Title 02-03-2023</td>
                            <td>02/03/2023</td>
                            <td>50% Offer</td>
                            <td>12 Recipients</td>
                            <td>8</td>
                            <td>
                                <a href="#">Visit Store</a>
                                <a href="#" class="ms-2">Edit</a>
                                <a href="#" class="ms-2">Share</a>
                            </td>
                        </tr>
                        <!-- Repeat rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('conversationsChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Sent messages', 'Delivered', 'Read', 'Replies'],
            datasets: [{
                label: 'Total Conversations',
                data: [80, 60, 50, 20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>
    </main>
    </div>
  </div>

@endsection
