<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">

            <form action="{{ route('users.store') }}" method="POST" class="space-y-8 divide-y divide-gray-200">
                @csrf

                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Informazioni Personali
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Esempio di Gestione dei Dati Input dell'Utente
                            </p>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Nome
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" autocomplete="given-name"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500
                               focus:border-indigo-500 sm:max-w-xs sm:text-sm @error('first_name') border-red-500 @enderror rounded-md">
                                @error('first_name') <small class="text-red-500">{{ $message }}</small>@enderror

                            </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Email
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="family-name"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500
                               focus:border-indigo-500 sm:max-w-xs sm:text-sm @error('email') border-red-500 @enderror rounded-md">
                               @error('email') <small class="text-red-500">{{ $message }}</small>@enderror
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5 pb-5">
                    <div class="flex justify-end">
                        <button type="reset"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm
                                font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2
                                focus:ring-offset-2 focus:ring-indigo-500">
                            Reset
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm
                                text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700
                                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Invia
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
