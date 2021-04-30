<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />


        <div>
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" value="{{ $user->name }}"
                required autofocus autocomplete="name" disabled />
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" value="{{ $user->email }}"
                required disabled />
        </div>

        <div class="mt-4">
            <x-jet-label for="role" value="{{ __('Role') }}" />
            <select id="role" name="role_id"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                disabled>
                @foreach ($roles as $role)
                    <option name="role_id" value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <x-jet-label for="department" value="{{ __('Department') }}" />
            <select id="department" name="department_id"
                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                disabled>
                @foreach ($departments as $department)
                    <option name="department_id" value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>

        </div>
    </x-jet-authentication-card>
</x-guest-layout>
