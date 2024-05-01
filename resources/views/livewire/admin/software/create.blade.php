<main class="w-full flex-grow p-6">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl text-black">Cadastrar Sistemas no painel</h1>
        <x-ts-button text="Voltar" href="{{ route('softwares.index') }}" color="cyan" outline icon="arrow-uturn-left" />
    </div>

    <div class="flex flex-wrap mt-6">
        <div class="w-full pr-0 lg:pr-2">
            <x-ts-card>
                <form wire:submit='save' class="flex flex-col gap-y-2">
                    <x-ts-input wire:model='form.name' label="Nome do sistema" />
                    <x-ts-input wire:model='form.description' label="Descrição" />
                    <x-ts-input wire:model='form.url' label="Url" />
                    <x-ts-upload label="Imagem" wire:model.live='form.image'
                                tip="Imagem que vai aparecer no site!" />
                    <x-slot:footer>
                        <x-ts-button text="Cancelar" link="{{ route('softwares.index') }}" color="red" />
                        <x-ts-button text="Salvar" color="green" loading wire:click='save' />
                    </x-slot:footer>
                </form>
            </x-ts-card>
        </div>
    </div>

</main>
