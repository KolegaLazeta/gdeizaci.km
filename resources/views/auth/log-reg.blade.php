<html>
    <head>
        <link rel="stylesheet" href="/css/mycss.css">
    </head>

        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <!-- Registracija -->

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h1>Kreiajte nalog</h1>
                    
                    <input id="name" type="text"  @error('name') is-invalid @enderror" 
                    name="name" value="{{ old('name') }}" placeholder="Ime" required autocomplete="name" autofocus>
                        

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="E-mail">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="Lozinka" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

				    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password" placeholder="Potvrdite lozinku">

                    
                    <button type="submit" value="Register">{{ __('Register') }}</button>
                </form>
                
            </div>
            <div class="form-container sign-in-container">
                <!-- Prijava -->
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1 class="pb-5">Prijavite se</h1>
                    
                    <input  placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <input type="password" placeholder="Lozinka" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <a href="#">Zaboravili ste lozinku?</a>
                    <button type="submit" value="Login">{{ __('Login') }}</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Dobrodošli nazad!</h1>
                        <p>Da bi ste bili povezani sa nama, prijavite se</p>
                        <button class="ghost" id="signIn">Prijavite se</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Pozdrav prijatelju!</h1>
                        <p>Registrujte se i krenite sa nama u avanture</p>
                        <button class="ghost" id="signUp">Registrujte se</button>
                    </div>
                </div>
            </div>
        </div>


<script src="/js/myjs.js"></script>
</html>