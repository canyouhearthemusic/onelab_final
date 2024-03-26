<x-guest.layout>
    <div class="flex min-h-full w-96 flex-col justify-center px-6 py-8 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Log In
            </h2>
        </div>

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-5" method="POST">
                @csrf

                <x-form.label for="email"> Email </x-form.label>
                <x-form.input name="email" type="email"/>

                <x-form.label for="password"> Password </x-form.label>
                <x-form.input name="password" type="password"/>

                <x-form.submit> Register </x-form.submit>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Still don't have an account? Then
                <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register</a>
            </p>
        </div>
    </div>
</x-guest.layout>