@props(['role'])

<x-layout-template>
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-100 border-b border-gray-300 w-screen">
            <nav class="mx-auto flex max-w-7xl items-center justify-between py-6 px-8" aria-label="Global">
                <div class="flex gap-x-12">
                    <a href="{{ route('home') }}" class="text-sm font-semibold leading-6 text-gray-900">Главная</a>
                    @switch(request()->user()->role->label())
                    @case('Admin')
                    <a href="{{ route('admin.orders.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Заказы</a>
                    @break

                    @endswitch
                </div>
                <div class="flex flex-1 justify-end">
                    <form method="POST" action="/logout">
                        @csrf

                        @method('delete')

                        <button type="submit" class="text-sm font-semibold leading-6 text-gray-900">Выйти</button>
                    </form>
                </div>
            </nav>
        </header>

        <main class="bg-gray-200 flex-1">
            <div class="py-8">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout-template>