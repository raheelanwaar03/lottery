@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background-color: #070b1a;
            color: #f1f1f1;
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        .sidebar {
            width: 30%;
            background-color: #0c1227;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-pic {
            width: 80px;
            height: 80px;
            background-color: #f1c40f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #070b1a;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .username {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .nav-link {
            color: #f1f1f1;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px 0;
            text-align: left;
            width: 100%;
        }

        .nav-link.active,
        .nav-link:hover {
            background-color: #1a1f3b;
            color: #f1c40f;
        }

        .content {
            padding: 30px;
            overflow-y: auto;
            width: 100%;
        }

        .content h2 {
            border-bottom: 2px solid #1a1f3b;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .user-info {
            background-color: #0c1227;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .info-item {
            margin-bottom: 20px;
        }

        .info-item strong {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .info-item span {
            display: block;
            background-color: #1a1f3b;
            padding: 5px 10px;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                padding: 10px;
                flex-direction: row;
                align-items: center;
                justify-content: space-around;
                order: 1;
                margin-top: 30px;
            }

            .profile-pic {
                width: 60px;
                height: 60px;
                font-size: 1.5em;
            }

            .username {
                display: none;
            }

            .nav-link {
                padding: 5px;
                text-align: center;
                font-size: 0.9em;
            }

            .content {
                padding: 20px;
                order: 2;
            }
        }

        @media (max-width: 480px) {
            .sidebar {
                flex-direction: column;
                align-items: center;
                margin-top: 30px;
            }

            .profile-pic {
                margin-bottom: 10px;
            }

            .content {
                padding: 15px;
            }

            .content h2 {
                font-size: 1.2em;
            }

            .user-info {
                padding: 15px;
            }

            .info-item strong {
                font-size: 0.9em;
            }

            .info-item span {
                font-size: 0.85em;
            }
        }
    </style>

    {{-- body --}}


    <div class="d-flex flex-column flex-md-row">
        <div class="sidebar d-flex flex-column align-items-center flex-md-column">
            <div class="profile-pic">
                <i class="fas fa-user"></i>
            </div>
            <div class="username">Raheel Anwaar</div>
            <nav class="nav flex-column w-100">
                <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Profile</a>
                <a class="nav-link" href="#"><i class="fa-solid fa-user-plus"></i> Link</a>
                <a class="nav-link" href="#"><i class="fas fa-wallet"></i> Payout</a>
                <a class="nav-link" href="#"><i class="fas fa-lock"></i> Security</a>
            </nav>
        </div>
        <div class="content">
            <h2>Your Referral Link</h2>
            <div class="user-info">
                <div class="card" style="background-color:#1a1f3b;color:white">
                    {{-- make a attractive design of copying referral link in card --}}
                    <div class="card-body d-flex justify-content-around align-items-center">
                        <h4 class="link">{{ route('register', ['referral' => Auth::user()->user_id]) }}</h4>
                        <span class="direction">
                            <i class="fas fa-clipboard" style="font-size: 20px;cursor: pointer;" onclick="copyLink()"></i>
                        </span>
                    </div>
                </div>
                <script>
                    function copyLink() {
                        var link = document.querySelector('.link').textContent;
                        navigator.clipboard.writeText(link);
                        alert('Link copied to clipboard');
                    }
                </script>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
