<x-layouts::public :title="'Você está Offline - Libelo Canônico'">
    <div class="min-h-[60vh] flex flex-col items-center justify-center text-center px-6">
        <div class="mb-8">
            <x-app-logo-icon class="size-20" />
        </div>

        <h1 class="text-3xl font-bold text-brand-dark font-serif-title mb-4">
            Parece que você perdeu a conexão.
        </h1>
        <p class="text-zinc-500 max-w-md mb-8">
            Não se preocupe, os dados da sua simulação estão salvos localmente. Assim que você recuperar o sinal, poderá
            continuar de onde parou.
        </p>

        <button onclick="window.location.reload()"
            class="px-8 py-4 bg-[#c68e28] text-brand-dark rounded-2xl font-bold hover:shadow-lg transition-all flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
            Tentar Reconectar
        </button>
    </div>
</x-layouts::public>
