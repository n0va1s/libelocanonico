<flux:dropdown position="bottom" align="start">
    <flux:sidebar.profile {{ $attributes->only('name') }} :initials="auth()->user()?->initials() ?? 'LC'"
        icon:trailing="chevrons-up-down" data-test="sidebar-menu-button" />

    <flux:menu>
        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
            <flux:avatar :name="auth()->user()?->name ?? 'Visitante'" :initials="auth()->user()?->initials() ?? 'LC'" />
            <div class="grid flex-1 text-start text-sm leading-tight">
                <flux:heading class="truncate">{{ auth()->user()?->name ?? 'Convidado' }}</flux:heading>
                <flux:text class="truncate">{{ auth()->user()?->email ?? 'Acesse sua conta' }}</flux:text>
            </div>
        </div>
        <flux:menu.separator />

        @auth
            <flux:menu.radio.group>
                <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                    {{ __('Configurações') }}
                </flux:menu.item>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                        class="w-full cursor-pointer" data-test="logout-button">
                        {{ __('Sair') }}
                    </flux:menu.item>
                </form>
            </flux:menu.radio.group>
        @else
            <flux:menu.item :href="route('login')" icon="arrow-right-end-on-rectangle" wire:navigate>
                {{ __('Entrar') }}
            </flux:menu.item>
            <flux:menu.item :href="route('register')" icon="user-plus" wire:navigate>
                {{ __('Criar Conta') }}
            </flux:menu.item>
        @endauth
    </flux:menu>
</flux:dropdown>
