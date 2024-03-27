<x-auth.layout>
    <div class="py-7 px-4 sm:px-6 lg:px-10 min-h-[100px]">
        <h1 class="text-2xl">Welcome back, <span class="font-semibold"> {{ request()->user()->name }}</span>!</h1>
    </div>
</x-auth.layout>