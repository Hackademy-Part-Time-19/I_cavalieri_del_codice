<x-layout>

    <x-navabar />

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Lavora con noi
            </h1>
        </div>

    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p class="text-start">Il suo ruolo sarà di : backup e ripristino dei dati: l'amministratore di sistema
                    deve pianificare e gestire i
                    backup dei dati aziendali, assicurandosi che i dati siano protetti da perdite o danni. In caso di
                    incidenti o guasti, deve essere in grado di ripristinare i dati in modo tempestivo.</p>

                <h2>Lavora come revisore</h2>
                <p class="text-start">È una parte fondamentale della Sicurezza Informatica che consente di misurare e
                    controllare i rischicomputer che possono essere utilizzati da persone o sistemi esterni alla nostra
                    organizzazione o che non dovrebbero avere accesso ai nostri dati.</p>

                <h2>Lavora come redattore</h2>
                <p class="text-start">Redigere i testi descrittivi e le istruzioni per l'uso corretto e la manutenzione
                    di beni di consumo, macchine o attrezzature. curare l'aggiornamento dei manuali e delle guide.
                    analizzare le caratteristiche tecniche dei prodotti.</p>
            </div>

            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('careers.submit') }}" method="POST" class="p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Seleziona il ruolo</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ old('email') ?? Auth::user()->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-info text-white">Invia la tua candidatura</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-layout>
