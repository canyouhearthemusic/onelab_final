@props(['order', 'cities', 'warehouses', 'cards', 'statuses'])

<x-auth.layout>
    <div class="py-7 px-4 sm:px-6 lg:px-14">
        <div class="grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-3">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-900">
                    Изменить Данные Заказа
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-700">
                    Заполните нужные поля для изменения заказа.
                </p>

                <p class="font-semibold text-2xl mt-10">ID: {{ $order->id }} </p>
            </div>

            <form method="post" action="{{ route('admin.orders.update', $order->id) }}" class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                @csrf

                @method('put')
                
                <div class="sm:col-span-3">
                    <x-form.label for="warehouse">Склад</x-form.label>

                    <x-form.select name="warehouse" id="warehouse">
                        @foreach ($warehouses as $warehouse)
                        <option @if ($order->warehouse_id == $warehouse->id)
                            selected
                            @endif
                            value="{{ $warehouse->id }}"
                            >
                            {{ $warehouse->name }}
                        </option>
                        @endforeach
                    </x-form.select>
                </div>

                <div class="sm:col-span-3">
                    <x-form.label for="city">Город</x-form.label>

                    <x-form.select name="city" id="city">
                        @foreach ($cities as $city)
                        <option @if ($order->city_id == $city->id)
                            selected
                            @endif
                            value="{{ $city->id }}"
                            >
                            {{ $city->name }}
                        </option>
                        @endforeach
                    </x-form.select>
                </div>

                <div class="sm:col-span-2">
                    <x-form.label for="card">Карта</x-form.label>

                    <x-form.select name="card" id="card">
                        @foreach ($cards as $card)
                        <option @if ($order->card_id == $card->id)
                            selected
                            @endif
                            value="{{ $card->id }}"
                            >
                            {{ $card->name }}
                        </option>
                        @endforeach
                    </x-form.select>
                </div>

                <div class="sm:col-span-2">
                    <x-form.label for="status">Статус заказа</x-form.label>

                    <x-form.select name="status" id="status" value="{{ $order->card_id }}">
                        @foreach ($statuses as $status)
                        <option @if ($order->status_id == $status->id)
                            selected
                            @endif
                            value="{{ $status->id }}"
                            >
                            {{ $status->name }}
                        </option>
                        @endforeach
                    </x-form.select>
                </div>

                <div class="sm:col-span-2">
                    <x-form.label for="pieces">Кол-во единиц</x-form.label>

                    <x-form.input name="pieces" id="pieces" value="{{ $order->pieces }}" />
                </div>

                <a
                    class="sm:col-span-3 block rounded-md bg-green-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2">
                    Экспортировать в Excel
                </a>

                <button
                    type="submit"
                    class="sm:col-span-3 block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2">
                    Обновить
                </button>
            </form>
        </div>
    </div>
</x-auth.layout>