<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Abbiamo ricevuto </h1>
    <h4 style="text-transform: uppercase;">Una richiesta per il ruolo di {{ strtoupper($info['role']) }}</h4>
    <p>Ricevuta da {{ $info['email'] }}</p>


    <h4>Messaggio:</h4>
    <p>{{ $info['message'] }}</p>

    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="text-transform: uppercase;">BENVENUTO {{ strtoupper(auth()->user()->name) }}</h5>
                    
                </div>
                <div class="modal-body">
                    <p>ORA FAI PARTE DEI CAVALIERI DEL CODICE NEL RUOLO DI {{ strtoupper($info['role']) }} </p>
                    <img src="https://store-images.s-microsoft.com/image/apps.20542.65812291288120258.78db0a4c-6279-4de9-b89c-0e62cd3d55c7.2a337b75-f025-4693-84e3-8b7a9c12321b?q=90&w=480&h=270" width="200px" alt="cavalieri del codice">
                </div>

            </div>
        </div>
    </div>
</body>

</html>
