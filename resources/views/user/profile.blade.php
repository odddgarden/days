<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
    <title>Days</title>
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
        body {
            background-color: #080907;
            font-family: 'Inter', sans-serif;
            color: #E4E9E2;
            margin: 0 auto;

            max-width: 2000px;

            overflow: hidden;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 16px 140px;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            font-style: italic;
            color: #84A975;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;

            height: 28px;
            width: 80px;
            border-radius: 7px;

            font-size: 12px;
            font-weight: 600;

            border: none;
            cursor: pointer;
            transition: width 0.3s ease-out;

            

        }

        .button:hover {
            height: 28px;
            width: 100px;
            background-color: #F1F4ED;
            color: #080907;
            transition: width 0.3s ease-out;
        }


        .logout {
            background-color: #485E40;
            color: #F1F4ED;
        }

        .profile {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        

        .username {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .details {
            font-weight: 100;
            font-size: 0.8rem;
            letter-spacing: 0.024rem;
        }

        .linebreak {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .calendar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin: 60px;

        }


        .week {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;

        }

        .day {
            display: flex;
            justify-content: center;
            align-items: center;

            height: 100px;
            width: 100px;
            border-radius: 7px;
            border: none;
            background-color: #171D15;

            color: #080907;
            font-size: 1rem;
            font-weight: 600;

        }

        .aa {
            background-color: #F7F8F6;
            cursor: pointer;


            color: #080907;
        }


        .aa:hover {
            background-color: #485E40;
            color: #F1F4ED;
        }

        
        .upimg {
            position: absolute; 
            height: 100px;
            width: 100px;
            border-radius: 7px;
            transform: scale(0);
            z-index: 0;
        }

        .month {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            position: absolute;

            height: 100px;
            width: 748px;

            color: #F1F4ED;

            font-family: 'Gotu', sans-serif;
            font-size: 8rem;

            margin-left: 52px;
            top: 116px;

            z-index: -2;
        }

        .hidden {
            height: 100px;
            width: 100px;
        }

        .hide {
            display: none;
        }

        .popup {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #080907;
            color: #F1F4ED;            
            flex-direction: column;
            height: auto;
            width: 400px;
            border: 1px solid #485E40;
;
            border-radius: 7px;
            position: absolute;
            left: 570px;
            top: 340px;
            transform: scale(0);
            transition: transform 0.3s ease-out;
            z-index: 1000;
        }

        .choose, .submits, .asa {
            display: flex;
            margin: 20px;
        }

        .asa {
            font-size: 2rem;
            font-weight: 600;
        }



        
    </style>
</head>
<body>
    <header>
        <div class="logo">DAYS</div>
        <div class="profile">
            <div class="username">Good day, {{ $user->username }}</div>
            <div class="details">You're sharing for {{ $diff }} days</div>
        </div>
        <form action="/logout" method="POST">
            @csrf
            <button class="button logout">Logout</button>
        </form>
        
    </header>
    
    </div>
    <main>
        <div id="uploadForm" class="popup">
            <div class="asa">Upload Image</div>
            <form action="/upload" method="POST" id="imageUploadForm" enctype="multipart/form-data">
                @csrf
                <input class="choose" type="file" name="image" id="image">
                <button class="submits" type="submit">Upload</button>
            </form>
        </div>
        <div class="calendar">
            <div class="week">
                <div class="month">{{ $month }}</div>
            </div>
            <div class="week">
                <div class="hidden"></div>
                <div class="hidden"></div>
                <div class="hidden"></div>
                <button class="day aa" id="day-1">
                    1
                    <img class="upimg" src="uploads/images/bfly.jpeg">
                </button>
                <button class="day" id="day-2">2</button>
                <button class="day" id="day-3">3</button>
                <button class="day" id="day-4">4</button>
            </div>
            <div class="week">
                <div class="day">5</div>
                <div class="day">6</div>
                <div class="day">7</div>
                <div class="day">8</div>
                <div class="day">9</div>
                <div class="day">10</div>
                <div class="day">11</div>
            </div>
            <div class="week">
                <div class="day">12</div>
                <div class="day">13</div>
                <div class="day">14</div>
                <div class="day">15</div>
                <div class="day">16</div>
                <div class="day">17</div>
                <div class="day">18</div>
            </div>
            <div class="week">
                <div class="day">19</div>
                <div class="day">20</div>
                <div class="day">21</div>
                <div class="day">22</div>
                <div class="day">23</div>
                <div class="day">24</div>
                <div class="day">25</div>
            </div>
            <div class="week">
                <div class="day">26</div>
                <div class="day">27</div>
                <div class="day">28</div>
                <div class="day">29</div>
                <div class="day">30</div>
                <div class="day">31</div>
                <div class="hidden"></div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const day1Button = document.getElementById("day-1");
            var numberClass = document.querySelector('.number');
            var upimgClass = document.querySelector('.upimg');
            const imageUploadForm = document.querySelector(".popup");
            const submits = document.querySelector(".submits");


            var isImgVisible = false;

            function toggleSections() {
                if (!isImgVisible) {
                    imageUploadForm.style.transform = 'scale(100%)'
                    
                }
                isLoginVisible = !isLoginVisible;
            }

            day1Button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default link behavior
                toggleSections();
            });

            function uploadForm() {
                imageUploadForm.style.transform = 'scale(0)'
                upimgClass.style.transform = 'scale(100%)'
                numberclass.style.display = 'none'
                upimgClass.style.zIndex = '99'
                numberclass.style.zIndex = '-1'
            }

            submits.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default link behavior
                uploadForm();
            });


        });
    </script>

</body>
</html>