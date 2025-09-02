@if ($errors->any())
    <div style="color: red; background: #ffe6e6; padding: 10px; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div style="color: green; background: #e6ffe6; padding: 10px; margin-bottom: 10px;">
        {{ session('status') }}
    </div>
@endif
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="('Nom Complet')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Adresse -->
        <div class="mt-4">
            <x-input-label for="adresse" :value="('Adresse')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <!-- Téléphone -->
        <div class="mt-4">
            <x-input-label for="numtel" :value="('Téléphone')" />
            <x-text-input id="numtel" class="block mt-1 w-full" type="text" name="numtel" :value="old('numtel')" />
            <x-input-error :messages="$errors->get('numtel')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Mot de passe -->
        <div class="mt-4">
            <x-input-label for="password" :value="('Mot de passe')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmer mot de passe -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="('Confirmer mot de passe')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Déjà inscrit ?') }}
            </a>

            <x-primary-button class="ml-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('accueilh') }}">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>