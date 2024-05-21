<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days</title>
    <style>
        body {
            background-color: #EEF4ED; 
            font-family: 'Londrina Shadow';
            color: #063619;
            overflow: hidden;
        }

        nav ul {
            padding: 0;
            margin: 0;
            text-align: right;
            font-weight: 400;

            li {
                display: inline-block;
                margin-right: 10px; 

                a {
                    display: block;
                    text-decoration: none;
                    color: #fff; 
                    padding: 10px; 
                }
            }
        }

        img {
            height: 100px;
            width: 100px;
        }

       


    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
            @auth
            <ul>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button>Logout</button>
                    </form>
                </li>
            </ul>
            @endauth
            </ul>
        </nav>
    </header>

    <main>
        <img src="/uploads/images/{{ $user->profile_picture }}">
        <h1>Hello, {{ $user->username }}!</h1>
        <p>Bio: {{ $user->bio }}</p>

        <div class="add-bio">
            <form action="/updatebio" method="POST">
                @csrf
                @method('PUT')
                <textarea name="bio" id="bio" rows=10 cols=50></textarea><br>
                <button>Add BIO</button>
            </form>
        </div>

        <div class="add-profile-picture">
            <form action="/updateprofilepicture" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="file" id="profile_picture" name="profile_picture"><br>           
                <button>Add profile picture</button>
            </form>
        </div>

        <div class="prompts">
           
        </div>
    </main>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days</title>
    <style>
        body {
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column; 
            align-items: center; 
            height: auto; 
        }

        .profile, .calendar {
            display: flex;
            flex-direction: column; 
            align-items: center;
            justify-content: space-around;
            width: 100%; 

        }


        .user {
            position: absolute;
            height: auto;
            width: auto;
            padding: 1em;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;

        }

        .usera {
            height: 100px;
            width: 100px;
            padding: 1em;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            margin: 10px;
        }

        h1 {
            font-size: 15rem;
        }
        


    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <div class="blur">
                <svg width="2000" height="1500" viewBox="0 0 1440 1041" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_2048_4)">
                    <ellipse cx="649" cy="341" rx="1000" ry="400" fill="#8CB999"/>
                    </g>
                    <defs>
                    <filter id="filter0_f_2048_4" x="-651" y="-359" width="2600" height="1400" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_2048_4"/>
                    </filter>
                    </defs>
                </svg>
            </div>
            <div class="user">
                <div class="usera">
                    USERa
                </div>
                <div class="usera">
                    USERa
                </div>
            </div>
        </div>

        <div class="calendar">
            <h1>DAY 1</h1>
        </div>
        
    </div>
</body>
</html>




