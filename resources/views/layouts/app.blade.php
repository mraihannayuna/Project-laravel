<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>

    {{-- Bootstrap CSS --}}
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- JAVASCRIPT CDN BOOTSTRAP --}}
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    {{-- cdn font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .Data {
            opacity: 1;
            color: rgb(255, 255, 255);
            animation: dt 3s infinite ease-in-out;
        }

        @keyframes dt {
            25% {
                color: rgb(255, 255, 255)
            }
            50% {
                color: aqua;
            }
            75% {
                color: aqua
            }
            100% {
                color: rgb(255, 255, 255)
            }
        }

.spectrum {
  background: linear-gradient(to right, red, orange, yellow, rgb(114, 255, 114), rgb(91, 91, 255), rgb(171, 54, 255), violet);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.typing-text {
  /* Existing styles */
  overflow: hidden;
  white-space: nowrap;
  margin: 0;
}

.typing-text.animate {
  animation: typing 1s steps(10, end) step-end infinite;
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}


    </style>

</head>

<body>




    @include('layouts.app.header')

    <div class="container mt-5">
    @yield('content')

    @yield('scripts')

    @include('layouts.app.footer')



            <script>
  if (document.querySelector('.js-alert')) {
    document.querySelectorAll('.js-alert').forEach(function($el) {
      setTimeout(() => {
        $el.classList.remove('show');
      }, 2000);
    });
  }
    </script>

    <script>
        const words = ["CloudData", "クラウドデータ"];
let i = 0;
let timer;

function typingEffect() {
  let word = words[i];
  let j = 0;
  clearInterval(timer);
  timer = setInterval(() => {
    let typingText = document.querySelector(".typing-text");
    typingText.textContent += word[j];
    j++;
    if (j >= word.length) {
      clearInterval(timer);
      setTimeout(() => {
        deleteEffect();
      }, 3000);
    }
  }, 100);
}

function deleteEffect() {
  let word = words[i];
  let j = word.length - 1;
  clearInterval(timer);
  timer = setInterval(() => {
    let typingText = document.querySelector(".typing-text");
    typingText.textContent = word.substring(0, j);
    j--;
    if (j < 0) {
      clearInterval(timer);
      i++;
      if (i >= words.length) {
        i = 0;
      }
      typingEffect();
    }
  }, 50);
}

typingEffect();
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>

</body>
</html>
