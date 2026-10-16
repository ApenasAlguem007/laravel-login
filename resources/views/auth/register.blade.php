
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name">Nome: </label>
            <input id="name" type="text" name="name"  required>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email">Email: </label>
            <input id="email" type="email" name="email" required>
        </div>

        <!-- Password -->
        <div>
            <label for="password">Senha:</label>
            <input id="password" type="password" name="password" required>
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation">Confirme a Senha:</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit">
                Entrar
            </button>
        </div>
    </form>

