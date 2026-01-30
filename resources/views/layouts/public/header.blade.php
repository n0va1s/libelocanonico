<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    <title>{{ $title ?? config('app.name') }}</title>
</head>

<body class="min-h-screen bg-white dark:bg-zinc-900 antialiased">
    <div id="global-loader" class="fixed top-0 left-0 w-full h-1 z-[9999] bg-[#c68e28] animate-pulse"
        style="display: none;"></div>

    <flux:header container
        class="border-b border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-900 sticky top-0 z-50">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <a href="{{ route('home') }}" class="ms-2 me-8 flex items-center space-x-2 lg:ms-0" wire:navigate>
            <x-app-logo class="h-8 w-auto" />
        </a>

        {{-- Desktop Menu --}}
        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="users" :href="route('grupos')" :current="request()->routeIs('grupos')"
                wire:navigate>
                {{ __('Grupos de Casais') }}
            </flux:navbar.item>

            <flux:navbar.item icon="question-mark-circle" :href="route('faq')" :current="request()->routeIs('faq')"
                wire:navigate>
                {{ __('FAQ') }}
            </flux:navbar.item>

            <flux:navbar.item icon="book-open" :href="route('glossario')" :current="request()->routeIs('glossario')"
                wire:navigate>
                {{ __('Glossário') }}
            </flux:navbar.item>

            <flux:spacer />

            {{-- Área Restrita com classe customizada para evitar conflito de cor ativa --}}
            <flux:navbar.item class="btn-area-restrita px-4" icon="layout-grid" :href="route('dashboard')"
                :current="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Área Restrita') }}
            </flux:navbar.item>
        </flux:navbar>
    </flux:header>

    {{-- Mobile Menu --}}
    <flux:sidebar stashable sticky
        class="lg:hidden border-e border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-900">
        <div class="flex items-center justify-between p-4">
            <a href="{{ route('home') }}" wire:navigate>
                <x-app-logo class="h-8 w-auto" />
            </a>
            <flux:sidebar.toggle icon="x-mark" />
        </div>

        <flux:navlist variant="outline" class="px-2">
            <flux:navlist.group :heading="__('Explorar')">
                <flux:navlist.item icon="users" :href="route('grupos')" :current="request()->routeIs('grupos')"
                    wire:navigate>
                    {{ __('Grupos para Casais') }}
                </flux:navlist.item>

                <flux:navlist.item icon="question-mark-circle" :href="route('faq')"
                    :current="request()->routeIs('faq')" wire:navigate>
                    {{ __('FAQ') }}
                </flux:navlist.item>

                <flux:navlist.item icon="book-open" :href="route('glossario')"
                    :current="request()->routeIs('glossario')" wire:navigate>
                    {{ __('Glossário') }}
                </flux:navlist.item>
            </flux:navlist.group>

            <flux:navlist.group :heading="__('Conta')" class="mt-4">
                <flux:navlist.item icon="layout-grid" :href="route('dashboard')"
                    :current="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Área Restrita') }}
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>
    </flux:sidebar>

    <main>
        {{ $slot }}
    </main>

    @fluxScripts
</body>

</html>
