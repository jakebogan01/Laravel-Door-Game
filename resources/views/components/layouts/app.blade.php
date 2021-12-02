<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset("/css/app.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body {{ $attributes }}>

    <div class="max-w-screen-lg text-center">

        <h1 class="font-bold text-3xl text-gray-600 mt-10 mb-16 cursor-default">
            Pick A Door!
        </h1>

        {{ $slot }}

    </div>

    <a href="/" class="restartBtn block mt-16 transform scale-0 origin-center transition-transform duration-300">
        <buton class="font-bold text-2xl text-white cursor-pointer bg-gray-500 px-6 py-3 border-4 border-gray-600 rounded-xl hover:bg-gray-400">
            Restart
        </buton>
    </a>

    <script>
        let container = document.querySelectorAll('.container');
        let message = document.querySelectorAll('.message');
        let restartBtn = document.querySelector('.restartBtn');
        let goodPrize = document.querySelector('.good-prize');

        for(let i = 0; i < container.length; i++){
            container[i].addEventListener('click',()=>{
                message[i].classList.add('scale-100');
                if(message[i].classList.contains('scale-100')){
                    restartBtn.classList.add('scale-100');
                }
            });
        };
    </script>
</body>
</html>
