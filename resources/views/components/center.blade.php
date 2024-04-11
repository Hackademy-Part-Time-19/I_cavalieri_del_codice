@auth

    <div id="animated-text-strip">
        <span class="marquee">LE ULTIME RECESSIONI DI <span style="color: red">{{ auth()->user()->name }}</span> &nbsp;</span>
        <span class="marquee">&nbsp LE ULTIME RECESSIONI DI <span style="color: red">{{ auth()->user()->name }}</span></span>
        <span class="marquee">&nbsp LE ULTIME RECESSIONI DI <span style="color: red">{{ auth()->user()->name }}</span></span>
        <span class="marquee">&nbsp LE ULTIME RECESSIONI DI <span style="color: red">{{ auth()->user()->name }}</span></span>
    </div>

    {{ $slot }}


@endauth

<!--MESSAGGIO SCOREVOLE-->

<div id="animated-text-strip">
    <span class="marquee">PROSSIMAMENTE IN COMMERCIO&nbsp;</span>
    <span class="marquee">PROSSIMAMENTE IN COMMERCIO&nbsp;</span>
    <span class="marquee">PROSSIMAMENTE IN COMMERCIO&nbsp;</span>
    <span class="marquee">PROSSIMAMENTE IN COMMERCIO&nbsp;</span>
</div>

<!--CARD-->

<div class="row">

    <div class="alessio" style="flex: 1;">


        <!-- Card 3 -->
        <div class="card-container">

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole"
                            src="https://m.media-amazon.com/images/I/815eN0AS-CL._AC_UF894,1000_QL80_.jpg"
                            alt="IPHONE 15 PRO MAX ">
                        <h3>IPHONE 15 PRO MAX</h3>
                        <button class="btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back" style="overflow: scroll">

                        <p class="title">DESCRIZIONE</p>
                        <p class="title">SMARTPHONE</p>
                        <p style="overflow: scroll;max-height: 100%">Dispone di un ottimo display da 6.7 pollici con una
                            risoluzione di 1290 x 2796 pixel con
                            tecnologia LTPO Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (typ), 2000
                            nits (HBM). Sul versante hardware, iPhone 15 Pro Max dispone di un SOC Apple A17 Pro (3 nm)
                            e ha GB di ram.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="omar" style="flex: 1;">


        <!-- Card 4 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole"
                            src="https://static.comet.it/b2c/public/e-cat/SAM07579S/SAM07579S-40d405a3d1-0.jpg"
                            alt="SAMSUNG GALAXY S24 ">
                        <h3>SAMSUNG GALAXY S24</h3>
                        <button class="btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">SMARTPHONE</p>
                        <p style="overflow: scroll;max-height: 100%">Galaxy S24 è uno smartphone con sistema operativo
                            Android 14, One UI 6.1, che non ha molto da
                            invidiare ai dispositivi più avanzati.
                            La certificazione IP68 lo rende impermeabile e per questo è adatto a tutte le situazioni.
                            Il design convince e lo spessore di 7.6 regala a questo Galaxy S24 un ottimo touch and feel.

                            Dispone di un ottimo display da 6.2 pollici con una risoluzione di 1080 x 2340 con
                            tecnologia Dynamic LTPO AMOLED 2X, 120Hz, HDR10+, 2600 nits (peak). Sul versante hardware,
                            Galaxy S24 dispone di un SOC Exynos 2400 - International e ha 8GB di ram. Per quanto
                            riguarda la batteria, è una 4000 mAH che non da però sufficienti prestazioni in termini di
                            autonomia.

                            Questo Galaxy S24 è un prodotto che soddisfa anche per ciò che riguarda la multimedialità
                            anche grazie alla fotocamera da 50 megapixel con apertura f/1.8 che garantisce ottimi
                            scatti, mentre la fotocamera frontale è da 12mpx.

                            Lato connettività Galaxy S24 è fornito di Bluetooth 5.3, A2DP, LE, si collega alle reti
                            HSPA, LTE-A (up to 7CA), 5G per una navigazione in internet veloce e necessita di una sim di
                            tipo Nano SIM, eSIM.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="william" style="flex: 1;">


        <!-- Card 5 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole"
                            src="https://media-assets.wired.it/photos/64c21d2d217ef4dae858cdfc/16:9/w_1776,h_999,c_limit/nuovi%20pieghevoli%20samsung.png"
                            alt="IPHONE 15 PRO MAX ">
                        <h3>SAMSUNG Z FOLD 5</h3>
                        <button class="btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">SMARTPHONE</p>
                        <p style="overflow: scroll;max-height: 100%">Samsung Galaxy Z Fold 5 è uno tablet Android con
                            caratteristiche all'avanguardia che lo rendono una scelta eccellente per ogni tipo di
                            utilizzo, rappresentando uno dei migliori dispositivi mobili mai realizzati. Dispone di un
                            grande display da 7.6 pollici e di una risoluzione da 2176x1812 pixel, fra le più elevate
                            attualmente in circolazione. Le funzionalità offerte da questo Samsung Galaxy Z Fold 5 sono
                            innumerevoli e tutte al top di gamma. A cominciare dal modulo 5G che permette un
                            trasferimento dati e una navigazione in internet eccellente, passando per la connettività
                            Wi-fi e il GPS.
                            L'eccellenza di questo Samsung Galaxy Z Fold 5 è completata da una fotocamera con un sensore
                            da ben 50 megapixel che permette di scattare foto di alta qualità con una risoluzione di
                            8165x6124 pixel e di registrare video in 8K alla risoluzione di 7680x4320 pixel. Lo spessore
                            di appena 6.1mm rende questo Samsung Galaxy Z Fold 5 un prodotto completo e tra i più
                            sottili sul mercato. </p>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <div class="daniele" style="flex: 1;">


        <!-- Card 6 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole"
                            src="https://d2e6ccujb3mkqf.cloudfront.net/ee5e32b9-12d4-4fc2-8794-46cb380333b1-1_71f0fdb9-e342-46be-89af-cabd3511a2be.jpg"
                            alt="APPLE WATCH SERIE 5 ">
                        <h3>APPLE WATCH SERIE 5</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">SMARTPHONE</p>
                        <p style="overflow: scroll;max-height: 100%">
                            CARBON NEUTRAL – Se vuoi un modello a impatto ambientale neutro, abbina Apple Watch SE
                            (seconda generazione) al nuovo Sport Loop.
                            PERCHÉ APPLE WATCH SE – Tutto l'essenziale per motivarti a stare in forma, restare in
                            contatto, monitorare la tua salute e chiamare aiuto in caso di emergenza. Con la Raccolta
                            smart e le app ridisegnate di watchOS 10 hai più informazioni a colpo d’occhio. E con
                            funzioni come “Rilevamento incidenti” e parametri evoluti per i tuoi workout, Apple Watch SE
                            ti dà tutto quello che ti serve, a un prezzo che ti piacerà.
                            FUNZIONI PER LA SALUTE E LA SICUREZZA – Chiama aiuto quando serve con “Rilevamento cadute”,
                            “Rilevamento incidenti” e SOS emergenze. Scopri dati utili sulla tua salute, e ricevi una
                            notifica se il battito cardiaco è irregolare, o se la frequenza è troppo alta o troppo
                            bassa.
                            SEMPLICEMENTE COMPATIBILE – Tutto funziona in perfetta sintonia con i tuoi dispositivi e
                            servizi Apple. Usa l’Apple Watch per sbloccare automaticamente il tuo Mac. Trova in un
                            attimo i tuoi dispositivi. Paga con Apple Pay. Apple Watch SE richiede iPhone Xs o
                            successivo con iOS 17 o successivo.
                            SWIMPROOF E STILOSO – Resistenza all’acqua fino a 50 metri. Cassa in tre colori. E retro
                            della cassa in tinta, creato con un processo che ne riduce l’impatto ambientale.
                            FACILE DA PERSONALIZZARE – Cinturini in tanti stili, materiali e colori tra cui scegliere, e
                            quadranti completamente personalizzabili: puoi cambiare l’aspetto del tuo orologio a seconda
                            del momento o dell’umore.
                            UN GRANDIOSO COMPAGNO DI FITNESS – L’app Allenamento ti segue in tantissimi sport, con
                            parametri evoluti che ti danno più informazioni sulle tue performance. E con il tuo Apple
                            Watch hai 3 mesi gratis di Apple Fitness+.

                            SEMPRE IN CONTATTO – Manda messaggi, rispondi a una telefonata, ascolta musica e podcast,
                            usa Siri. E chiama aiuto con SOS emergenze. Insieme al tuo iPhone o sotto rete Wi-Fi, Apple
                            Watch SE (GPS) ti tiene in contatto col mondo.
                            FUNZIONI EVOLUTE PER LA SALUTE – Ricevi notifiche in caso di ritmo cardiaco irregolare.
                            Guarda quanto durano le tue fasi di sonno leggero, REM e profondo con la funzione “Fasi del
                            sonno”. E tieni nota del tuo stato d’animo per sviluppare più consapevolezza emotiva e
                            resilienza.
                            FUNZIONI INNOVATIVE PER LA SICUREZZA – “Rilevamento incidenti” e “Rilevamento cadute” sono
                            in grado di chiamare i soccorsi in caso di grave incidente d’auto o se fai una brutta
                            caduta. E con SOS emergenze ti basta premere un pulsante per far partire una chiamata
                            d’emergenza.

                        </p>
                    </div>
                </div>
            </div>

        </div>



    </div>

</div>

<!--LINEA 2-->

<div class="row">

    <div class="alessio" style="flex: 1;">


        <!-- Card 3 -->
        <div class="card-container">

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole" src="https://m.media-amazon.com/images/I/71BD2Go1JkL._AC_SL1500_.jpg"
                            alt="IPHONE 15 PRO MAX ">
                        <h3>IMAC M3 2023</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">COMPUTER</p>
                        <p style="overflow: scroll;max-height: 100%">

                            CON I SUPERPOTERI DI M3 – Il chip Apple di nuova generazione ti permette di fare ancora più
                            cose, in meno tempo. Rende fulmineo tutto quello che fai, dalle presentazioni piene di
                            effetti ai giochi più immersivi.
                            SI ADATTA PERFETTAMENTE AL TUO SPAZIO – Design all-in-one ultrasottile, in quattro splendidi
                            colori: un tocco di stile per ogni stanza.
                            DISPLAY SPETTACOLARE - Il display Retina 4,5K da 24" ha 500 nit di luminosità e supporta 1
                            miliardo di colori. Dai film alle foto, tutto quello che guardi è nitido e definito, e i
                            colori sono più brillanti che mai. (La misura effettiva della diagonale dello schermo è
                            23,5".)
                            VIDEOCAMERA E AUDIO EVOLUTI – Videocamera FaceTime HD a 1080p, tre microfoni di qualità
                            professionale in array, sistema a sei altoparlanti con audio spaziale: una gioia per gli
                            occhi e per le orecchie.
                            COMPATIBILE CON LE TUE APP PREFERITE – Le app che usi ogni giorno vanno veloci come il
                            vento: anche Microsoft 365, Adobe Creative Cloud e Zoom. E puoi usare direttamente sull’iMac
                            molte delle tue app per iPhone e iPad. (Le app sono disponibili sull’App Store.)
                            FUNZIONA CON TUTTI I TUOI DISPOSITIVI APPLE – Puoi fare cose straordinarie, quando usi i
                            tuoi dispositivi Apple insieme. Copia e incolla qualcosa da iPhone al Mac. Rispondi alle
                            chiamate FaceTime e invia messaggi di testo direttamente dal tuo iMac. E molto molto altro.
                            Scopri tutte le possibilità.
                            ACCESSORI MAGIC INCLUSI – iMac ha di serie una Magic Keyboard con Touch ID e un Magic Mouse
                            in tinta. Il Touch ID è il modo più semplice, veloce e sicuro per sbloccare il tuo Mac e
                            accedere a siti web e app.

                            SI CONNETTE A TUTTO – iMac ha due porte Thunderbolt / USB 4, due porte USB 3, Gigabit
                            Ethernet e un jack per le cuffie. E tutta la velocità del Wi-Fi 6E e del Bluetooth 5.3 per
                            le tue connessioni. (Il Wi‑Fi 6E è disponibile solo nei Paesi e territori in cui la
                            tecnologia è supportata.)
                            C’È POSTO PER TUTTI I TUOI FILE – L’archiviazione SSD è velocissima e ti dà spazio a volontà
                            per foto, video, documenti e app. (1GB = 1 miliardo di byte; 1TB = mille miliardi di byte.
                            La capacità effettiva del supporto formattato è inferiore.)
                            FACILE DA USARE – Con il Mac è tutto semplice, anche imparare a usarlo. Così puoi metterti
                            subito all’opera.



                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="omar" style="flex: 1;">


        <!-- Card 4 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole" src="https://m.media-amazon.com/images/I/71M5kbv5-0L._AC_SL1500_.jpg"
                            alt="MSI Vector 16 HX A13VHG-283IT ">
                        <h3>MSI Vector 16 HX A13VHG-283IT</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">COMPUTER</p>
                        <p style="overflow: scroll;max-height: 100%">


                            Vector 16A: Il nuovo Vector 16 HX A14V, offre agli utenti gli strumenti per innovare
                            liberamente come desiderano. Il Vector 16 HX A14V rappresenta la scelta definitiva per gli
                            appassionati STEM, su misura per ottimizzare i loro sforzi.
                            PROCESSORE FINO A INTEL CORE i9-13980HX Con il più recente processore Intel Core i9-13980HX
                            dotato di 8 core Performance e 16 core Efficient, Vector 16HX 13V fornisce una spinta senza
                            precedenti nei tuoi progetti multitasking e nei giochi esigenti in termini di prestazioni.
                            LAPTOP GEFORCE RTX SERIE 40 OLTRE LA VELOCITÀ La GPU NVIDIA GeForce RTX 4080 Laptop GPU è
                            estremamente veloci. E' alimentata dall'architettura ultra efficiente NVIDIA Ada Lovelace
                            che offre un salto di qualità sia in termini di prestazioni che di grafica basata
                            sull'intelligenza artificiale.
                            SOLUZIONE INNOVATIVA DI RAFFREDDAMENTO: Realizzato per la perfezione, il nostro ultimo
                            design Cooler Boost 5 offre soluzioni termiche su misura sia per la CPU che per la GPU. Con
                            ventole più grandi e heatpipe più ampie garantisce prestazioni ottimali anche durante le
                            sessioni di gioco più intense.
                            I portatili MSI dispongono di 2 anni di garanzia anche se acquistati attraverso Partita IVA!
                            SOLUZIONE DI RAFFREDDAMENTO INNOVATIVA Realizzato per la perfezione, il nostro ultimo design
                            Cooler Boost 5 offre soluzioni termiche su misura sia per la CPU che per la GPU. Con ventole
                            più grandi e heat pipe più larghe, garantisce prestazioni ottimali anche durante le sessioni
                            di gioco più intense.
                            TASTIERA DA GIOCO RGB PER TASTO DI STEELSERIES Personalizza ogni tasto a tuo piacimento e
                            attraverso l'illuminazione della tastiera.

                            COMBO AD ALTA VELOCITÀ La serie Vector è dotata di SSD e RAM ad alta velocità, grazie al suo
                            bandwith elevato potrai ottenere un'esperienza senza rivali.
                            PIENO SUPPORTO PER TUTTE LE POSSIBILITA' Il Vector 16 HX è dotato di una dotazione porte
                            completa per supportare tutti i tipi di trasmissione dati o video. Offrendo ai giocatori la
                            massima flessibilità nell'utilizzo del laptop.
                            OTTIENI TUTTI I BUFF L'esclusivo MSI Center ti aiuta a controllare e personalizzare il tuo
                            laptop MSI nel modo desiderato.

                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="william" style="flex: 1;">


        <!-- Card 5 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole" src="https://m.media-amazon.com/images/I/51DY+JdGTiL._AC_.jpg"
                            alt="Alien Lab Predator PC GAMING RGB Desktop">
                        <h3>Alien Lab Predator RGB</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">COMPUTER</p>
                        <p style="overflow: scroll;max-height: 100%">


                            PC Gaming Fisso Desktop di Fascia Alta, costruito e assemblato con alti standard qualitativi
                            e componenti di alta fascia, a differenza della concorrenza;
                            Possibilità di giocare senza alcun compromesso ai giochi più blasonati come Warzone,
                            Fortnite, Baldur's Gate, Valorant, Elden Ring, Hogwarts Legacy, FC 24, GTA 5, GTA 6 (in
                            uscita), etc.
                            Intel Core i9 11900KF ed RTX 4060 per avere il massimo dalla tua esperienza in game;
                            Design accattivante Mecha customizzato con alto coefficiente di airflow;
                            Ideale per editing video o produttività con grandi carichi di lavoro su programmi come Adobe
                            Photoshop, Adobe Premiere Pro, DaVinci Resolve Studio, Autocad, etc.
                        </p>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <div class="daniele" style="flex: 1;">


        <!-- Card 6 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole" src="https://m.media-amazon.com/images/I/61La8PAa42L._AC_SL1500_.jpg"
                            alt="IMAC MINI M2 2023 ">
                        <h3>IMAC MINI M2 2023</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">COMPUTER</p>
                        <p style="overflow: scroll;max-height: 100%">



                            CON I SUPERPOTERI DI M2 – Con la nuova generazione di chip, puoi fare ancora più cose, in
                            meno tempo. Dalle presentazioni più sofisticate ai giochi più immersivi, il chip M2 gestisce
                            tutto in scioltezza con una CPU 8‑core, una GPU 10‑core e fino a 24GB di memoria unificata.
                            CONNETTI TUTTO QUELLO CHE VUOI – Mac mini con chip M2 ha due porte Thunderbolt 4, due porte
                            USB-A, una porta HDMI, Wi-Fi 6E, Bluetooth 5.3, Gigabit Ethernet e un jack per cuffie. E
                            puoi scegliere anche l’opzione 10Gb Ethernet per connessioni di rete fino a 10 volte più
                            veloci.
                            COMPATIBILE. SEMPLICEMENTE – Le app che usi ogni giorno vanno veloci come il vento, anche
                            Microsoft 365, Adobe Creative Cloud, Zoom. E in più ci sono oltre 15.000 app e plug‑in già
                            ottimizzati per il chip M2.
                            MEMORIA EFFICIENTE – La memoria unificata dei Mac è molto più evoluta della RAM
                            tradizionale. Un singolo pool di memoria a banda larga e bassa latenza permette al chip
                            Apple di trasferire i dati più velocemente, così tutto quello che fai è fluido. Con il chip
                            M2 puoi scegliere fino a 24GB di memoria: più ne hai, più sarà facile lavorare in
                            multitasking e con file di grandi dimensioni.
                            ARCHIVIAZIONE SSD VELOCE – Mac mini ha un’archiviazione 100% flash e ti dà spazio in
                            abbondanza per foto, video, documenti e app. E con il chip M2 puoi avere un’unità SSD fino a
                            2TB.
                            È TUTTO AL SICURO – Il chip M2 e macOS Ventura portano su Mac mini funzioni per la privacy e
                            la sicurezza all’avanguardia che includono protezioni integrate contro malware e virus. E
                            con il Secure Enclave di nuova generazione, il tuo sistema e i tuoi dati sono sempre al
                            sicuro.
                            MAC MINI SA FARLO – Creare presentazioni, ritoccare foto, giocare: Mac mini con chip M2 sa
                            davvero fare di tutto.

                            FACILE DA USARE – È facile da configurare. E con un ID Apple, passare al Mac è
                            semplicissimo: basta accendere il computer e in pochi istanti hai già tutto pronto.
                            AGGIUNGI MONITOR E ACCESSORI – Abbina Mac mini a un Apple Studio Display e collega accessori
                            Apple come la Magic Keyboard con Touch ID o tutti quelli compatibili che usi più spesso.
                            NOTE LEGALI – Questo è un riepilogo delle caratteristiche principali del prodotto. Consulta
                            le note legali di seguito.


                        </p>
                    </div>
                </div>
            </div>

        </div>



    </div>

</div>

<!--LINEA 3-->

<div class="row">

    <div class="alessio" style="flex: 1;">


        <!-- Card 3 -->
        <div class="card-container">

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole" src="https://m.media-amazon.com/images/I/714UATMmT+L._AC_SL1500_.jpg"
                            alt="PLAYSTATION 5 LIMITED ">
                        <h3>PLAYSTATION 5 LIMITED</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">

                        <p class="title">DESCRIZIONE</p>
                        <p class="title">CONSOLE</p>
                        <p style="overflow: scroll;max-height: 100%">


                            La PlayStation 5 utilizza un processore Zen 2 di AMD con 8 core a una frequenza variabile
                            limitata a 3,5 GHz. La GPU è un sistema su chip (SoC) personalizzato, basato su RDNA 2 di
                            AMD, con 36 unità di calcolo funzionanti a frequenza variabile, limitato a 2,23 GHz e capace
                            di 10,28 TFLOPS


                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="omar" style="flex: 1;">


        <!-- Card 4 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole"
                            src="https://www.hidrobrico.it/16744-home_default/console-microsoft-xbox-series-x-1tb-it-forza-horizon-5-rrt-00059-console.jpg"
                            alt="XBOX SERIE X ">
                        <h3>XBOX SERIE X</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">

                        <p class="title">DESCRIZIONE</p>
                        <p class="title">CONSOLE</p>
                        <p style="overflow: scroll;max-height: 100%">


                            Xbox Series X dispone di un hardware di fascia più alta e supporta una risoluzione video
                            fino a 8K, insieme a un frame rate più elevato fino a 120 fps, ray tracing, Dolby Vision e
                            tempi di caricamento ridotti grazie ad un'unità a stato solido ad alta velocità.


                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="william" style="flex: 1;">


        <!-- Card 5 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole"
                            src="https://onlysolutionsshop.com/cdn/shop/products/Nintendoswitcoledonlybluerossasolutionsshop_768x768.png?v=1671047654%20768w,//onlysolutionsshop.com/cdn/shop/products/Nintendoswitcoledonlybluerossasolutionsshop_1024x1024.png?v=1671047654%201024w,//onlysolutionsshop.com/cdn/shop/products/Nintendoswitcoledonlybluerossasolutionsshop_1440x1440.png?v=1671047654%201440w"
                            alt="NINTENDO SWITCH OLED ">
                        <h3>NINTENDO SWITCH OLED</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">CONSOLE</p>
                        <p style="overflow: scroll;max-height: 100%">


                            Schermo: touchscreen OLED capacitivo da 7 pollici, risoluzione di 1.280 x 720 pixel.
                            Processore: NVIDIA Tegra Custom. Memoria interna: 64GB, espandibili con microSD fino a 2 TB.
                            Connettività: WI-Fi (802.11 a/b/g/n/ac), Bluetooth 4.1, , connessione via cavo Ethernet in
                            modalità TV


                        </p>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <div class="daniele" style="flex: 1;">


        <!-- Card 6 -->
        <div class="card-container">

            <!--<div class="cards-wrapper"> QUESTE CLASSI FANNO PROBLEMI CON LO SCROLL-->
            <!--<div class="card-container">-->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img class="imgGirevole"
                            src="https://www.ceotech.it/wp-content/uploads/2023/09/Lenovo-Legion-Go-debutta-a-IFA-2023-pronta-a-sfidare-Rog-Ally-3.jpg"
                            alt="LENOVO LEGION GO ">
                        <h3>DANIELE</h3>
                        <button class="btn btn btn-info">Descrizione</button>
                    </div>
                    <div class="flip-card-back">
                        <p class="title">DESCRIZIONE</p>
                        <p class="title">CONSOLE</p>
                        <p style="overflow: scroll;max-height: 100%">

                            Il cuore del Legion Go di Lenovo è rappresentato dal System on Chip Ryzen Z1 Extreme, una
                            delle più recenti aggiunte nell'enorme libreria hardware di AMD, specificatamente disegnato
                            per potenziare device di dimensioni ridotte e con specifiche esigenze di consumo, come nel
                            caso specifico dei PC tascabili. A titolo informativo, si tratta dello stesso SoC che è alla
                            base anche di ROG Ally di ASUS. Per quanto riguarda la parte dedita alle operazioni di
                            calcolo, il processore si basa su architettura Zen 4 ed è composto da otto core fisici
                            capaci di lavorare con sedici thread logici con una frequenza massima di 5.1 GHz. Lo Z1 basa
                            gran parte della sua ragione di esistere proprio in questa sua unica capacità di offrire
                            prestazioni in gioco particolarmente elevate, mantenendo però le richieste energetiche il
                            più basse possibili visto che un dispositivo portatile dovrà costantemente fare i conti con
                            l'autonomia offerta dalla sua batteria. Per questo motivo il suo range di esercizio spazia
                            da un minimo di 9 watt ad un massimo di 30 watt per quello che concerne il TDP a cui poi
                            vanno aggiunti i consumi delle altre componenti. Tra l'altro le soluzioni di raffreddamento
                            utilizzate da Lenovo consentono di sfruttare proprio l'intero arco di lavoro dello Z1
                            Extreme a differenza dei 25 watt massimi a cui può accedere ROG Ally.

                            Sul fronte video invece, il SoC è basato sull'architettura RDNA 3 con 12 compute unit
                            sbloccate e direttamente utilizzabili dalle applicazioni con un limite teorico di 8,6
                            TeraFLOPS di potenza bruta nel rendering. Il supporto all'FSR è quindi garantito e
                            perfettamente implementato e, a livello teorico sarebbe possibile anche spingersi fino alla
                            versione 3, beta permettendo, e tenendo conto di frame rate talvolta troppo bassi per
                            consentire l'adeguata applicazione di questa soluzione di upscaling.


                        </p>
                    </div>
                </div>
            </div>

        </div>


    </div>

</div>
