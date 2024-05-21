<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Days</title>
    <style>
        body {
            background-color: #080907; 
            font-family: 'Inter';
            overflow: hidden;
        }

        .footer {
            height: 9vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo, .authenticationSection {
            position: relative;
            height: 50vh;
            width: 50vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .authenticationSection {
            margin-left: -80px;
            margin-right: -52px;
        }

        .title, .bgimg {
            position: absolute;
        }

        .credits, .bgimg2 {
            position: absolute;
        }

        .credits {
            color: #E4E9E2;
            font-weight: 200;
            font-size: 0.8rem;
        }

        .bgimg2 {
            top: 80vh;
        }

        .bgimg {
            top: 15vh;
            right: 15vw;
        }

        .title {
            font-size: 8rem;
            z-index: 1;
            line-height: 100%;
            font-weight: bold;
            color: #E4E9E2;
            margin-left: 80px;

        }

        .bgimg {
            margin-top: 3em;
            margin-left: 1.5em;
            z-index: 0; 
        }

        .register, .log-in {
            position: absolute;
            height: 380px;
            width: 320px;
            background-color: #F7F8F6;
            border: 1.5px solid #3F5139;
            border-radius: 7px;
            transition: transform 0.5s ease-out;
        }

        .log-in {
            z-index: 1;
        }

        .register {
            z-index: 0;
            transform: rotate(7deg);
        }

        .bgblurtop {
            margin-right: 100px;
            margin-bottom: 100px;
            z-index: -11;
            opacity: 0.7;
        }

        .bgblur {
            z-index: -11;
            opacity: 0.7;
        }

        .fields, .buttons, .switches, .question {
            position: relative;
            height: auto;
            width: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            margin-top: 1em;
        }

        .field {
            height: 45px;
            width: 250px;
            background-color: #080907;
            border-radius: 7px;
            margin-top: 1.2em;
            border: none;
            outline: none;
            color: white;
            font-weight: 400;
            text-align: center;
        }

        .fieldblank {
            height: 45px;
            width: 250px;
            border-radius: 7px;
            margin-top: 1.2em;
        }

        ::placeholder {
            text-align: center;
            color: white;
            opacity: 0.31;
        }

        .button {
            margin-top: 1em;
            height: 28px;
            width: 81px;
            display: flex; 
            justify-content: center;
            align-items: center;
            align-content: center;
            background-color: #080907;
            color: white;
            font-weight: 600;
            border-radius: 10px; 
            padding: 15px 25px; 
            border: none; 
            cursor: pointer; 
            transition: width 0.3s ease-out;
        }

        .button:hover {
            height: 30px;
            width: 103px;
            color: #84A975;
            transition: width 0.3s ease-in;
        }

        .switch {
            margin-top: 5px;

            img {
                transform: rotate(-180deg);
                height: 32px;
                width: 32px;
                filter: saturate(50%);
                transition: transform 0.3s;
                
            }

            img:hover {
                transform: rotate(180deg);
                height: 34px;
                width: 34px;
                transition: transform 0.3s;
            }
        }

        .question {
            margin-top: 1px;
            font-size: 0.8rem;
            font-weight: 600;
            color: 080907;
        }

        .error {
            margin-top: 7px;
            margin-bottom: -21px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .bot {
            display: flex;
            gap: 36px;

        }

        .left {
            color: #84A975;
            font-style: italic;
        }
        
    </style>
</head>
<body>
    <div class="container">  
        <div class="logo">
            <div class="bgimg">
                <svg width="523" height="152" viewBox="0 0 885 705" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_2077_3)">
                    <ellipse cx="323.5" cy="376" rx="261.5" ry="76" fill="#485E40" fill-opacity="0.21"/>
                    </g>
                    <defs>
                    <filter id="filter0_f_2077_3" x="-238" y="0" width="1123" height="752" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                    <feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_2077_3"/>
                    </filter>
                    </defs>
                </svg>
            </div>
            <div class="title">
                <div class="top">Share your</div>
                <div class="bot">
                    <div class="left">DAYS</div>
                    <div class="right">here</div>
                </div>
            </div>
        </div>
        <div class="authenticationSection">
            <div class="bgblur">
            </div>
            <div class="log-in">
                <form  method="POST" action="/login">
                    <div class="fields">
                        @csrf
                        <input class="field" type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
                        <input class="field" type="password" name="password" placeholder="Password" id="password" required>
                        <div class="error">
                            @error('error'){{ $message }}@enderror
                        </div>
                    </div>
                    <div class="buttons">
                        <button class="button">Login</button>         
                    </div>
                    <div class="fieldblank"></div>

                    <div class="switches">
                        <a class="switch" href="" id="switch">
                        <img src="/uploads/images/a.png">
                        </a>
                    </div>

                    <div class="questions">
                        <p class="question">
                            Create an account
                        </p>
                    </div>

                </form>
            </div>
            <div class="register">
                <form  method="POST" action="/register">
                    <div class="fields">
                        @csrf
                        <input class="field" type="text" name="username" id="username" placeholder="Username" required>
                        <input class="field" type="password" name="password" id="password" placeholder="Password" required>
                        <input class="field" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                    </div>

                    <div class="buttons">
                        <button class="button">Register</button>         
                    </div>

                    <div class="switches">
                        <a class="switch" href="" id="switch">
                        <img src="uploads/images/a.png">
                        </a>
                    </div>

                    <div class="questions">
                        <p class="question">
                            Already have an account?
                        </p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="bgimg2">
        <svg width="2215" height="385" viewBox="0 0 2115 1185" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_f_2042_2)">
            <path d="M1815 592.5C1815 754.043 1475.86 885 1057.5 885C639.144 885 300 754.043 300 592.5C300 430.957 639.144 300 1057.5 300C1475.86 300 1815 430.957 1815 592.5Z" fill="#485E40" fill-opacity="0.21"/>
            </g>
            <defs>
            <filter id="filter0_f_2042_2" x="0" y="0" width="2115" height="1185" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feGaussianBlur stdDeviation="150" result="effect1_foregroundBlur_2042_2"/>
            </filter>
            </defs>
        </svg>

        </div>
        <div class="credits">
            © 2024 Odd Garden
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var switchButtons = document.querySelectorAll('.switch');
            var loginSection = document.querySelector('.log-in');
            var registerSection = document.querySelector('.register');

            var isLoginVisible = true;

            function toggleSections() {
                if (isLoginVisible) {
                    loginSection.style.transform = 'translateX(100%) rotate(7deg)';
                    registerSection.style.transform = 'translateX(-100%) rotate(0deg)';

                    
                    setTimeout(function() {
                        registerSection.style.zIndex = '1';
                        loginSection.style.zIndex = '-1';
                    }, 250);

                    setTimeout(function() {
                        loginSection.style.transform = 'translateX(0%) rotate(7deg)';
                        registerSection.style.transform = 'translateX(0%) rotate(0deg)';
                    }, 400);

                } else {
                    loginSection.style.transform = 'translateX(-100%) rotate(0deg)';
                    registerSection.style.transform = 'translateX(100%) rotate(7deg)';
                    setTimeout(function() {
                        loginSection.style.zIndex = '1';
                        registerSection.style.zIndex = '-1';
                    }, 150); 

                    setTimeout(function() {
                        loginSection.style.transform = 'translateX(0%) rotate(0deg)';
                        registerSection.style.transform = 'translateX(0%) rotate(7deg)';
                    }, 400);

                }
                isLoginVisible = !isLoginVisible;
            }

            switchButtons.forEach(function(switchButton) {
                switchButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior
                    toggleSections();
                });
            });
        });


    </script>


</body>
</html>