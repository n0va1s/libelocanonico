import { registerSW } from "virtual:pwa-register";

if ("serviceWorker" in navigator) {
    registerSW({ immediate: true });
}

window.addEventListener("offline", () => {
    Flux.toast({
        variant: "danger",
        heading: "Sem conexão",
        text: "Você está navegando em modo offline.",
    });
});

window.addEventListener("online", () => {
    Flux.toast({
        variant: "success",
        heading: "Conexão restabelecida",
        text: "Você está online novamente.",
    });
});

// Listener para o Livewire mostrar loading na troca de paginas ou carregamentos mais longos
document.addEventListener('livewire:navigating', () => {
    // Exibe uma barra de progresso ou um loader discreto
    document.getElementById('global-loader').style.display = 'block';
});

document.addEventListener('livewire:navigated', () => {
    document.getElementById('global-loader').style.display = 'none';
});
