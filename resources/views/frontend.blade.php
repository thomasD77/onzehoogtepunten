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

</head>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="header__topbar">
                <img src="{{ asset('images/ntriga_logo.png') }}" alt="Ntriga_logo">
                <p class="plus">+</p>
                <img src="{{ asset('images/maquina_logo.png') }}" alt="Ntriga_logo">
                <p class="tagline">digital driven solutions + creative concept marketing</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 px-0">
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
                            <p class="bold">
                                Ondertussen blijven we doen waar we goed in zijn, nu en in 2022! Jingle all the way
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 px-0">
                <img class="img-fluid" src="{{ asset('images/header_img.png') }}" alt="header_img">
            </div>
        </div>

    </div>



</header>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
