<x-authLayout>
    <div class="actionContainer">
        <h2 class="actionContainerTitle">Registreren</h2>

        <a href="{{ url('inloggen') }}">Heb je al een account? Klik hier om in te loggen.</a>

        <form method="POST" action="{{ route('register.store') }}" novalidate>
            @csrf

            <input class='authInputField' value="{{ old('name') }}" name='name' type="text" placeholder="Jouw naam"
                required />

            <input class='authInputField' value="{{ old('email') }}" name='email' type="email" placeholder="E-mail"
                required />

            <input class='authInputField' name='password' type="password" placeholder="Wachtwoord" required />

            <input class='authInputField' name='password_confirm' type="password" placeholder="Wachtwoord herhalen"
                required />

            <div class="authBottom">
                <button type="submit" class="authSubmitButton">Registreren</button>
                <div>
                    @error('name')
                        <p class="authErrorText">{{ $message }}</p>
                    @enderror
                    @error('email')
                        <p class="authErrorText">{{ $message }}</p>
                    @enderror
                    @error('password')
                        <p class="authErrorText">{{ $message }}</p>
                    @enderror
                    @error('password_confirm')
                        <p class="authErrorText">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </form>
    </div>
</x-authLayout>
