<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component {
    //
}; ?>

<div>
    {{-- Header de Acolhimento --}}
    <section class="pt-12 pb-12 bg-brand border-b border-zinc-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-brand-dark font-serif-title mb-4">Grupos de Apoio e
                    Acolhida</h1>
                <p class="text-zinc-500 leading-relaxed max-w-2xl text-lg">
                    A Igreja é uma mãe de braços abertos. Conheça os principais movimentos voltados ao fortalecimento e
                    integração de casais em nova união.
                </p>
            </div>
        </div>
    </section>

    {{-- Principais Movimentos --}}
    <section class="py-16 bg-brand-bg">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-brand-dark font-serif-title mb-10 text-center">Movimentos de Referência
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Grupo Bom Pastor --}}
                <x-grupo-card title="Grupo Bom Pastor (GBP)" icon="heart">
                    Acolhe e orienta casais em segunda união, promovendo reuniões semanais ou quinzenais com adoração,
                    oração do terço e temas de interesse.
                </x-grupo-card>

                {{-- Renascer --}}
                <x-grupo-card title="Encontro Renascer" icon="sun">
                    Eventos de imersão que visam aprofundar a fé e fortalecer o matrimônio e a família em situações de
                    nova união.
                </x-grupo-card>

                {{-- Amoris Laetitia --}}
                <x-grupo-card title="Grupo Amoris Laetitia" icon="chat-bubble-left-right">
                    Grupos de oração e convivência inspirados na exortação apostólica, voltados especificamente para
                    casais recasados.
                </x-grupo-card>

                {{-- Itinerário Pastoral --}}
                <x-grupo-card title="Itinerário Nova União" icon="map">
                    Proposta da Pastoral Familiar Nacional focada no acolhimento, discernimento e plena integração na
                    vida comunitária.
                </x-grupo-card>

                {{-- ECC --}}
                <x-grupo-card title="ECC (Casais com Cristo)" icon="user-group">
                    Movimento focado na evangelização de casais, atuante no fortalecimento do relacionamento e da base
                    familiar.
                </x-grupo-card>

                {{-- Pastoral Familiar --}}
                <x-grupo-card title="Pastoral Familiar" icon="home">
                    O braço da Igreja que atua diretamente nas paróquias oferecendo suporte a todas as realidades
                    familiares.
                </x-grupo-card>
            </div>
        </div>
    </section>

    {{-- Busca por Estado --}}
    <section class="py-16 bg-white border-t border-zinc-100" x-data="{ search: '' }">
        {{-- Substitua o bloco de busca por este código --}}
        <div class="max-w-md mx-auto mb-16">
            <flux:field>
                <flux:label>Selecione seu estado</flux:label>

                <flux:select x-model="search" placeholder="Escolha um estado...">
                    <flux:select.option value="AC">Acre</flux:select.option>
                    <flux:select.option value="AL">Alagoas</flux:select.option>
                    <flux:select.option value="AP">Amapá</flux:select.option>
                    <flux:select.option value="AM">Amazonas</flux:select.option>
                    <flux:select.option value="BA">Bahia</flux:select.option>
                    <flux:select.option value="CE">Ceará</flux:select.option>
                    <flux:select.option value="DF">Distrito Federal</flux:select.option>
                    <flux:select.option value="ES">Espírito Santo</flux:select.option>
                    <flux:select.option value="GO">Goiás</flux:select.option>
                    <flux:select.option value="MA">Maranhão</flux:select.option>
                    <flux:select.option value="MT">Mato Grosso</flux:select.option>
                    <flux:select.option value="MS">Mato Grosso do Sul</flux:select.option>
                    <flux:select.option value="MG">Minas Gerais</flux:select.option>
                    <flux:select.option value="PA">Pará</flux:select.option>
                    <flux:select.option value="PB">Paraíba</flux:select.option>
                    <flux:select.option value="PR">Paraná</flux:select.option>
                    <flux:select.option value="PE">Pernambuco</flux:select.option>
                    <flux:select.option value="PI">Piauí</flux:select.option>
                    <flux:select.option value="RJ">Rio de Janeiro</flux:select.option>
                    <flux:select.option value="RN">Rio Grande do Norte</flux:select.option>
                    <flux:select.option value="RS">Rio Grande do Sul</flux:select.option>
                    <flux:select.option value="RO">Rondônia</flux:select.option>
                    <flux:select.option value="RR">Roraima</flux:select.option>
                    <flux:select.option value="SC">Santa Catarina</flux:select.option>
                    <flux:select.option value="SP">São Paulo</flux:select.option>
                    <flux:select.option value="SE">Sergipe</flux:select.option>
                    <flux:select.option value="TO">Tocantins</flux:select.option>
                </flux:select>
            </flux:field>
        </div>
    </section>

    {{-- Nota de Rodapé --}}
    <section class="py-12 bg-zinc-900 text-center">
        <div class="container mx-auto px-6">
            <p class="text-zinc-400 text-sm italic">
                "Ninguém pode ser condenado para sempre, porque esta não é a lógica do Evangelho!" <br>
                <strong>— Papa Francisco (Amoris Laetitia, 297)</strong>
            </p>
        </div>
    </section>
</div>
