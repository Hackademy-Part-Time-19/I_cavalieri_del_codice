<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? config('app.name')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>

  .container-fluid{

    background-color: #41C9E2;
  }

  /*MESSAGGIO DI SCORIMENTO*/

#animated-text-strip {
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
  overflow: hidden;
}

#animated-text-strip .marquee {
  white-space: nowrap;
  animation: marquee 15s linear infinite;
  max-width: none;
}

@keyframes marquee {
  0% {
    transform: translate(0, 0);
  }

  100% {
    transform: translate(-100%, 0);
  }
}

/* Styles for the sake of the demonstration */
#animated-text-strip {
  background: #387ADF;
  padding: 1rem 0;
}

.marquee {
  font-family: 'Open Sans', sans-serif;
  font-size: 2rem;
  font-weight: 900;
  text-transform: uppercase;
  color: white;
}

/*PARTE DI SINISTRA*/

.card {
  width: 500px;
  height: 400px;
  perspective: 1000px;
}

.card-inner {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 0.999s;
}

.card:hover .card-inner {
  transform: rotateY(180deg);
}

.card-front,
.card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.card-front {
  background-color: #6A2C70;
  color: #fff;
  display: flex;
  align-items: center;
  border: 10px solid #6A2C70;
  border-radius: 10px;
  justify-content: center;
  font-size: 24px;
  transform: rotateY(0deg);
}

.card-back {
  background-color: #F08A5D;
  color: #fff;
  display: flex;
  align-items: center;
  border: 10px solid #F08A5D;
  border-radius: 10px;
  justify-content: center;
  font-size: 24px;
  transform: rotateY(180deg);
  
  scroll-behavior: auto
}






</style>
    
    
</head>
  <body >

    {{$slot}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>