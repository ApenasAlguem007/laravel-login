

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email"> email </label>
            <input id="email" type="email" name="email" required>
        </div>

        <!-- Password -->
        <div>
            <label for="password">Senha: </label>
            <input id="password"  type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>

