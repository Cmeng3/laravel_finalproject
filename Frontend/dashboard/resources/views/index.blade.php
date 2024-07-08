<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
            background-color: #fff;
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
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="logo">
                    <h3>Petcare</h3>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/index">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conversation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Campaign</a>
                    </li>
                </ul>
            </div>
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
</body>
</html>
