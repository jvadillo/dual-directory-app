<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <x-label for="accountType" :value="__('¿Eres estudiante o empresa?')" />
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="user" checked>
                        <span class="ml-2 font-medium text-sm text-gray-700">Estudiante</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="accountType" value="company_owner">
                        <span class="ml-2 font-medium text-sm text-gray-700">Empresa</span>
                    </label>
                </div>
            </div>

            <!-- Company name -->
            <div id="company-container" class="hidden mt-4">
                <x-label for="companyName" :value="__('Nombre de la empresa')" />

                <x-input id="companyName" class="block mt-1 w-full" type="text" name="companyName" :value="old('name')" />
            </div>

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Nombre y Apellidos')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <!-- pattern for email (not applied): pattern="^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(opendeusto\.es|deusto\.es|egibide\.org)$" -->
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Darme de alta') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
    @section('body-scripts')
    
    <script>
    

    var accountTypeRadios = document.querySelectorAll('input[type=radio][name="accountType"]');

    function changeHandler(event) {
        const companyContainer = document.getElementById('company-container');

        if ( this.value === 'user' ) {
            companyContainer.classList.add('hidden');
        } else if ( this.value === 'company_owner' ) {
            companyContainer.classList.remove('hidden');
        }  
    }

    Array.prototype.forEach.call(accountTypeRadios, function(radio) {
        radio.addEventListener('change', changeHandler);
    });

    </script>
    @endsection
</x-guest-layout>
