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

        .profile-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .profile-card .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-card h2 {
            margin-top: 10px;
            font-size: 24px;
        }

        .profile-card p {
            color: #888;
            font-size: 14px;
        }

        .profile-card .form-group {
            margin-bottom: 15px;
        }

        .profile-card .form-group label {
            font-weight: bold;
        }

        .profile-card .form-group .form-control {
            background-color: #f8f9fa;
        }

        .nav-tabs .nav-link.active {
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

      </style>

            <div class="col-md-10 main-content">
                <div class="header d-flex justify-content-between align-items-center">
                    <h1>Company</h1>
                </div>
                <div class="content mt-4">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Company</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="profile-card mt-4">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset("assets/brand/company.svg")}}"  alt="Profile Image" class="profile-image">
                                    <div class="ms-4">
                                        <h2>Petcare</h2>
                                        <p>9765432180</p>
                                    </div>
                                </div>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" value="petcare@email.com" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Business Tagline">Business Tagline</label>
                                        <input type="text" id="Business Tagline" class="form-control" value="Petcare" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Website URL">Website URL</label>
                                        <input type="email" id="Website URL" class="form-control" value="https://petcare.com" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input type="text" id="Address" class="form-control" value="Phnom penh city, cambodia in TK" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Business Descriptio">Business Description</label>
                                        <input type="text" id="Business Descriptio" class="form-control" value="This is petcare is about want adoption dog to become family and also buy medicine for dog to get health or vacccine too" disabled>
                                    </div>
                                    <button type="button" class="btn btn-danger mt-3">Edit</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-campaign" role="tabpanel" aria-labelledby="nav-campaign-tab">
                            <!-- Campaign profile content here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

