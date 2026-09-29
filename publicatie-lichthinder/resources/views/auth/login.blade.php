<x-authLayout>
    <div class="actionContainer">
        <h2 class="actionContainerTitle">Inloggen</h2>

        <a href="{{ url('registreren') }}">Geen account? Klik hier om een account aan te maken.</a>

        <form method="POST" action="{{ route('login.store') }}" novalidate>
            @csrf

            <input class='authInputField' value="{{ old('email') }}" name='email' type="email" placeholder="E-mail"
                required />

            <input class='authInputField' name='password' type="password" placeholder="Wachtwoord" required />

            <div class="authBottom">
                <button type="submit" class="authSubmitButton">Inloggen</button>

                <div>
                    @error('password')
                        <p class="authErrorText">{{ $message }}</p>
                    @enderror
                    @error('email')
                        <p class="authErrorText">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </form>
    </div>
</x-authLayout>
