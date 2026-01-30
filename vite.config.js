import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import { VitePWA } from "vite-plugin-pwa";

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        VitePWA({
            registerType: "autoUpdate",
            workbox: {
                // Cacheia a rota de offline e os assets principais
                globPatterns: ["**/*.{js,css,html,ico,png,svg,woff2}"],
                runtimeCaching: [
                    {
                        urlPattern: ({ request }) =>
                            request.mode === "navigate",
                        handler: "NetworkOnly", // Tenta sempre a rede primeiro
                        options: {
                            plugins: [
                                {
                                    // Se a rede falhar, ele busca a página offline no cache
                                    handlerDidError: async () => {
                                        return await caches.match("/offline");
                                    },
                                },
                            ],
                        },
                    },
                ],
            },
            manifest: {
                name: "Libelo Canônico",
                short_name: "Libelo",
                description: "Orientação Canônica Digital",
                theme_color: "#1b1b1b", // Cor da barra de status
                background_color: "#fcfbf8", // Cor de fundo do splash screen
                display: "standalone",
                icons: [
                    {
                        src: "/icons/icon-192x192.png",
                        sizes: "192x192",
                        type: "image/png",
                    },
                    {
                        src: "/icons/icon-512x512.png",
                        sizes: "512x512",
                        type: "image/png",
                        purpose: "any maskable",
                    },
                ],
            },
        }),
    ],
});
