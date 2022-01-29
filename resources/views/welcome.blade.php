<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juragan Motor</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|IBM+Plex+Sans:600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations lights-off">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
								<img class="header-logo-image asset-light" src="dist/images/logo-light.svg" alt="Logo">
								<img class="header-logo-image asset-dark" src="dist/images/logo-dark.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">DEALER MOTOR</h1>
                            <h1 class="hero-tittle mt-0">ASEP RANTE & KAZIEL</h1>
	                        <p class="hero-paragraph">Dengan Motto Kami Yaitu Pembeli Adalah Raja Kami Siap Melayani Pembeli Anda Senang Kami Puas salam 255km.</p>
	                        @if (Route::has('login'))
                            <div class="hero-cta">
                                @auth
								<a class="button button-primary" href="{{ url('/products') }}">Home</a>
                                @else
                                <a class="button button-primary" href="{{ route('login') }}">Login</a>
                                    @if (Route::has('register'))
                                    <a class="button button-primary" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
							</div>
                            @endif
						</div>
						<div class="hero-media">
							<div class="header-illustration">
								<img class="header-illustration-image asset-dark" src="dist/images/header-illustration-dark.svg" alt="Header illustration">
							</div>
							<div class="hero-media-illustration">
								<img class="hero-media-illustration-image asset-dark" src="dist/images/hero-media-illustration-dark.svg" alt="Hero media illustration">
							</div>
							<div class="hero-media-container">
								<img class="hero-media-image asset-dark" src="dist/images/pngegg.png" width="135%" style="margin-right: 100%" alt="Hero media">
							</div>
						</div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
