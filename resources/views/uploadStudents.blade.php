<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

    <style>

        @keyframes policeLights {
            0% {
                background-color: red;
                box-shadow: 0 0 10px red, 0 0 15px red, 0 0 20px red;
            }
            25% {
                background-color: blue;
                box-shadow: 0 0 10px blue, 0 0 15px blue, 0 0 20px blue;
            }
            50% {
                background-color: white;
                box-shadow: 0 0 10px white, 0 0 15px white, 0 0 20px white;
            }
            75% {
                background-color: blue;
                box-shadow: 0 0 10px blue, 0 0 15px blue, 0 0 20px blue;
            }
            100% {
                background-color: red;
                box-shadow: 0 0 10px red, 0 0 15px red, 0 0 20px red;
            }
        }


        @keyframes flashText {
            0% {
                text-shadow: 0 0 10px rgb(173, 166, 166), 0 0 20px red, 0 0 30px red;
                color: rgb(171, 167, 167);
            }
            50% {
                text-shadow: 0 0 10px blue, 0 0 20px blue, 0 0 30px blue;
                color: blue;
            }
            100% {
                text-shadow: 0 0 10px rgb(97, 96, 96), 0 0 20px red, 0 0 30px red;
                color: rgb(158, 152, 152);
            }
        }



        .animate-policeLights {
            animation: policeLights 3.5s infinite;
        }


        .animate-flashText {
            animation: flashText 6.5s infinite alternate;
        }


        .flashing-text {
            font-size: 4rem;
            font-weight: bold;
            color: transparent;
            background-image: linear-gradient(42deg, #e2dede, #0000ff);
            background-clip: text;
            animation: flashText 1.5s infinite alternate;
        }
    </style>
</head>
<body class="bg-black overflow-hidden">


    <div class="absolute top-0 left-0 w-20 h-20 bg-red-500 animate-policeLights rounded-tl-xl blur-sm"></div>
    <div class="absolute top-0 right-0 w-20 h-20 bg-red-500 animate-policeLights rounded-tr-xl blur-sm"></div>
    <div class="absolute bottom-0 left-0 w-20 h-20 bg-red-500 animate-policeLights rounded-bl-xl blur-sm"></div>
    <div class="absolute bottom-0 right-0 w-20 h-20 bg-red-500 animate-policeLights rounded-br-xl blur-sm"></div>

    <h1 class="flashing-text absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
        Yeh Bna Rha Hu abhi baki Set kro
    </h1>

</body>
</html>
