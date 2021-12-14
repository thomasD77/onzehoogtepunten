<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Onze hoogtepunten</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="d-md-flex align-items-center">
                <div class="d-flex align-items-center">
                    <a href="https://www.ntriga.be/nl" target="_blank">
                        <img src="{{ asset('images/ntriga_logo.png') }}" alt="Ntriga_logo">
                    </a>

                    <p class="plus">+</p>

                    <a href="https://www.maquina.be/" target="_blank">
                        <img src="{{ asset('images/maquina_logo.png') }}" alt="Ntriga_logo">
                    </a>
                </div>
                <p class="tagline">digital driven solutions + creative concept marketing</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 px-0" style="background-color: rgb(244,244,244)">
                <div class="header__title__section">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h1  hidden>Dit is enkel van nut voor de validator</h1>
                            <h2>Het was een vreemd jaar.</h2>
                            <p style="text-align: left">Het beestje corona hield ons allen in de greep, verplicht thuiswerk, beperkte contacten,... maar
                                ondanks dit alles wisten we mooie projecten te realiseren! Ook op persoonlijk vlak mocht
                                iedereen bij ons toch zijn/haar hoogtepunt beleven. Speciaal voor jullie hebben we een spotify
                                playlist gemaakt waarbij we nummer voor nummer ons persoonlijk hoogtepunt brengen!
                            </p>
                            <h2>Lees en luister je mee? </h2>
                            <span>
                                Ondertussen blijven we doen waar we goed in zijn, nu en in 2022! <br> Jingle all the way
                            </span>
                        </div>
                        <div>
                            <img class="img-fluid mt-3 smiley" src="{{ asset('images/smiley.png') }}" alt="smiley">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 mt-0">
                <img class="img-fluid" src="{{ asset('images/header_img.png') }}" alt="header_img">
            </div>
        </div>
    </div>

</header>
<body>
    <main class="container-fluid">
        <div class="row">
            <div class="col page__title">
                <div class="title__layout">
                    <a class="link__style" target="_blank" href="https://open.spotify.com/playlist/7tImFRvio4LZF1lNKtAJtm?si=716764d6d7574def">
                        <div class="d-flex align-items-center">
                            <p class="bold mb-0 me-2">De volledige Spotify lijst vind je hier</p>
                            <i class="fa fa-spotify"
                               style="font-size:35px;
                       color: rgb(29,214,96);">
                            </i>
                        </div>
                    </a>
                </div>
                <p class="my-2">Maar 'het waarom' van de songs vind je hieronder:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">

                <article class="row">
                    <div class="col-md-5 my-3 my-md-0">
                        <img src="{{ asset('images/thomas.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="col-md-7">
                        <h2 class="title__name">Thomas</h2>
                        <p><span class="bold">
                            Mijn persoonlijk hoogtepunt van 2021 was het ontdekken van Toscane wanneer we een roadtrip deden
                            door Italië met de camper. </span> Daar mijn keuze een elektronisch nummer is heeft het een stevige
                            boodschap en past het perfect bij de periode die we nu meemaken. Op roadtrip door Italië hebben we
                            deze song meermaals afgespeeld en beseft wat we eigenlijk belangrijk vinden in het leven. Het
                            landschap van Toscane is letterlijk adembenemend. Doelen stellen en genieten van de kleine dingen is
                            waarvoor ik leef.
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Mare (We’ve Lost Dancing) </span> - Fred again... The Blessed Madonna</p>
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-7">
                        <h2 class="title__name">Jolien</h2>
                        <p><span class="bold">
                            Het is altijd een ‘droom’ geweest om toch iets in fashion te doen, een kledinglijn lanceren
                            leek een onmogelijke opdracht maar kijk: Fils&Maman wordt toch stilaan werkelijkheid.</span> Van
                            design tot kiezen van stoffen, tot kiezen van een producent,… Ik heb het allemaal zelf
                            gedaan, waar een lockdown allemaal niet goed voor is ;-). Of het nu een succes zal worden of
                            niet, 1 iets die toch bovenaan mijn bucketlist stond heb ik wel waargemaakt: een kledinglijn
                            lanceren, en dan nog ééntje met een uniek gegeven: Matching Outfits, enkel voor mama’s en
                            hun zoontjes - maar op een heel subtiele manier!
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">In de schuur</span> - Snelle & Ronny Flex</p>
                        </div>
                    </div>
                    <div class="col-md-5 my-3 my-md-0">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('images/jolien.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-5 my-3 my-md-0">
                        <img src="{{ asset('images/matthias.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="col-md-7">
                        <h2 class="title__name">Matthias</h2>
                        <p><span class="bold">
                            Baby wordt mijn hoogtepunt :-p </span> Tenzij je er twee mag hebben; dan kies ik dat ik eindelijk
                            mijn eigen bier leerde maken. Maar op de eerste plaats dus: de geboorte van mijn eerste
                            kindje.
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Baby</span> - Justin Bieber</p>
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-7">
                        <h2 class="title__name">Stephan</h2>
                        <p><span class="bold">
                            Voor mij persoonlijk: eindelijk die culinaire fietstocht met vrienden door Zuid Frankrijk.</span>
                            De Via Rhôna fietsen van Lyon naar Sète. Samen met een paar goeie vrienden genieten van het
                            fietsen, het eten, de wijnen, Zuid Frankrijk. Het eindpunt lag aan de Middellandse Zee,
                            vandaar onderstaand nummer.
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">De Zji</span> - Ertebrekers</p>
                        </div>
                    </div>
                    <div class="col-md-5 my-3 my-md-0">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('images/stephan.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-5 my-3 my-md-0">
                        <img src="{{ asset('images/peter.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="col-md-7">
                        <h2 class="title__name">Peter</h2>
                        <p><span class="bold">
                            Het gaat niet altijd om grote hoogtepunten maar veelal om de kleine gelukjes.</span><br>
                            Ik heb dit in corona-tijden toch wel opnieuw moeten ‘leren’ appreciëren. Bijvoorbeeld een dagje uitwaaien
                            op strand met het gezin en de hond. Je kleine meid zien lopen aan het water, appelbeignets
                            eten… :-)
                            Gewoon even weg van de rush van het leven… door een korte uitstap, een citytrip, een avondje
                            gezelligheid… met de mensen waarvan je houdt.
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Perfect day-</span> - Lou Reed</p>
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-7">
                        <h2 class="title__name">Robin</h2>
                        <p><span class="bold">
                            Mijn verhuis.</span> In 2021 verhuisde ik naar Kortrijk. Op de foto zie je mijn thuiswerk plek in
                            de living. Mijn song? Een nogal speciale Kortrijkse metalband die ik al een paar keer live
                            zag en best goed vind!
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Boden</span> - Amenra</p>
                        </div>
                    </div>
                    <div class="col-md-5 my-3 my-md-0">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('images/robin.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-5 my-3 my-md-0">
                        <img src="{{ asset('images/joyce.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="col-md-7">
                        <h2 class="title__name">Joyce</h2>
                        <p><span class="bold">
                            Niemand minder dan JUSTIN BIEBER komt in 2023 terug naar België.</span><br>
                            Na 7 jaar zal hij ein-de-lijk nog eens voet aan Belgische bodem zetten. Afgelopen week was
                            de ticketverkoop en ik heb tickets bemachtigd voor zijn concert in België, maar ook in
                            Nederland. <br>
                            Voor mij kan het niet snel genoeg 2023 zijn, maar eerst nog heel hard genieten de laatste
                            weken van 2021 en het hele jaar 2022. Leuke toevoeging dit jaar keek ik nog uit naar het
                            concert van Niels Destadsbader. Bij het liedje dat ik heb gekozen kan je niet stil zitten en
                            dat is exact wat ik zal hebben bij het concert van Niels & Justin Bieber ;-).
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Can't stop the feeling</span> - Justin Timberlake</p>
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-7">
                        <h2 class="title__name">Robby</h2>
                        <p><span class="bold">
                            Samenwonen met mijn vriendin :-)</span> is 100% zeker mijn hoogtepunt in 2021.
                            Na 3 jaar renoveren is het eindelijk zover, dus vind ik dit nummer wel toepasselijk:
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Finally</span> - CeCe Peniston</p>
                        </div>
                    </div>
                    <div class="col-md-5 my-3 my-md-0">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('images/robby.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-5 my-3 my-md-0">
                        <img src="{{ asset('images/pieter.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="col-md-7">
                        <h2 class="title__name">Pieter</h2>
                        <p><span class="bold">
                            De jaarlijkse mannenavond met zoon en schoonzoon.</span><br>
                            Toen deze song uitkwam ging er geen moment in de auto voorbij dat m’n dochter Pauline niet vroeg om het op te leggen.
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Beggin</span> - Mäneskin</p>
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-7">
                        <h2 class="title__name">Hanne</h2>
                        <p><span class="bold">
                            Ik kan met zekerheid zeggen dat dit mijn groene camionette is !!</span><br>
                            Waarom ik dit nummer gekozen heb? Ik heb zoveel verschillende redenen waarom. <br>
                            1) De lyrics, ik citeer hier even kort enkele zinnen. <br>
                            “Only one head you’ve got, take good care of it! <br>
                            Don’t make no bad inspiration influence you. <br>
                            Only good meditation should flow through your head.” <br>
                            2) Heb dit lied leren kennen toen ik op rondreis was in Kroatië met een omgebouwde
                            camionette van een vriend. Na die reis werd het (nog meer) duidelijk dat het mijn grootste
                            droom was om een eigen ‘van’ te bouwen. Heel veel mensen zeiden dat dit ‘dom’ was en grote
                            investering is.- bad inspiration <br>
                            Verbouwen van deze camionette - good meditation <br>
                            3) Dit nummer, zon, natuur & rijden maar
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">One head</span> - Twinkle Brothers</p>
                        </div>
                    </div>
                    <div class="col-md-5 my-3 my-md-0">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('images/hanne.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </article>


                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-5 my-3 my-md-0">
                        <img src="{{ asset('images/lisanne.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-right" data-aos-duration="1000">
                    </div>
                    <div class="col-md-7">
                        <h2 class="title__name">Lisanne</h2>
                        <p><span class="bold">
                            Een nieuwbouwhuis kopen is een hele ervaring.</span><br>
                            Er komt zoveel bij kijken! Toch ben ik blij dat we nu alles naar onze eigen smaak kunnen
                            kiezen en dat we binnenkort van onze mooie woning kunnen genieten.
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Coming Home</span> - Sheppard</p>
                        </div>
                    </div>
                </article>

                <hr class="horizontal_line">

                <article class="row">
                    <div class="col-md-7">
                        <h2 class="title__name">Vincent</h2>
                        <p><span class="bold">
                            Mijn hoogtepunt is dat ik dit jaar 3500 km zal gefietst hebben,</span> wat voor mij een nieuw record is.
                        </p>
                        <div class="spotify__section">
                            <i class="fa fa-spotify" style="font-size:35px;color: rgb(29,214,96);"></i>
                            <p class="mb-0 ms-3"><span class="bold">Ploegsteert</span> - Zesde Metaal</p>
                        </div>
                    </div>
                    <div class="col-md-5 my-3 my-md-0">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('images/vincent.png') }}" class="img-fluid pt-0 pt-md-4" alt="Ntriga_employee" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </main>
    <div class="banner">
            <p class="mb-0 bold pt-3"> Zorgen wij volgend jaar samen voor jullie professionele hoogtepunten ? </p>
            <p class="bold pb-3"> Contacteer Ntriga of Maquina hieronder</p>
    </div>
    <footer class="container-fluid">
        <div class="row">
            <div class="d-md-flex align-items-center justify-content-between ps-0">
                <div class="d-flex align-items-center col-12 col-md-6">
                    <div>
                        <img src="{{ asset('images/stripes.png') }}" class="me-4 img-fluid" alt="stripes">
                    </div>
                    <a href="https://www.ntriga.be/nl" target="_blank">
                        <img src="{{ asset('images/ntriga_logo.png') }}" alt="Ntriga_logo">
                    </a>

                    <p class="plus">+</p>

                    <a href="https://www.maquina.be/" target="_blank">
                        <img src="{{ asset('images/maquina_logo.png') }}" alt="Ntriga_logo">
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <p class="ps-2 text-center">
                        <a href="https://www.ntriga.be/nl" class="link__style" target="_blank">www.ntriga.be</a>
                        -
                        <a href="https://www.maquina.be/" class="link__style" target="_blank">www.maquina.be</a>
                        |
                        <a href="mailto:info@ntriga.be" class="link__style">info@ntriga.be</a>
                        -
                        <a href="mailto:hello@maquina.be" class="link__style">hello@maquina.be</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
