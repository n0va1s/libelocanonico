<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Esqueceu a Senha')" :description="__('Informe seu email para receber um link para alteração de senha')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-6">
            @csrf

            <!-- Email Address -->
            <flux:input name="email" :label="__('Email')" type="email" required autofocus
                placeholder="email@example.com" />

            <flux:button variant="primary" type="submit" class="w-full !text-brand-dark"
                data-test="email-password-reset-link-button">
                {{ __('Enviar link para nova senha') }}
            </flux:button>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
            <span>{{ __('Ou volte e acesse') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Entrar') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
