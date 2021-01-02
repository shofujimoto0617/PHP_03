<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bookers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">
                <h2>User info</h2>

                <table class="table">
                    <tr>
                        <th>name :</th>
                        <th>{{ $user['name'] }}</th>
                    </tr>
                    <tr>
                        <th>introduction :</th>
                        <th>{{ $user['introduction'] }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

