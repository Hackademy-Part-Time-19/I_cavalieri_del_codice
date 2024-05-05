<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? config('app.name')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @vite('resources/css/app.css')
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
  <body class="corpo" >

  

    {{$slot}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

    <script>

let isRandom = false;

document.getElementById('toggleButton').addEventListener('click', function() {
    const corpo = document.querySelector('.corpo');

    if (isRandom) {
        corpo.style.backgroundColor = '#e9e9e9';
    } else {
        const randomColor = '#' + Math.floor(Math.random()*16777215).toString(16);
        corpo.style.backgroundColor = randomColor;
    }

    isRandom = !isRandom;
});


    </script>
  </body>
</html>