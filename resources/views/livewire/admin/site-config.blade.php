<main class="w-full flex-grow p-6">
    <x-ts-dialog /> 
    <h1 class="text-3xl text-black pb-6">Editar Informações do Site</h1>

    <div class="flex flex-wrap mt-6">
        <div class="w-full pr-0 lg:pr-2">
            <form wire:submit="save">
                <x-ts-tab selected="Informações">
                    <x-ts-card>
                            <x-ts-tab.items tab="Informações" >
                                <div class="flex flex-col gap-2">
                                    <x-ts-input label="Nome de Contato" wire:model='contact_name' />
                                    <x-ts-input label="Email de Contato" wire:model='contact_email' />
                                    <x-ts-input label="Telefone" wire:model='phone' />
                                    <x-ts-input label="Endereço" wire:model='address' />
                                    <x-ts-textarea  label="Descrição" wire:model='description' />
                                </div>
                            </x-ts-tab.items>
                            <x-ts-tab.items tab="Redes Sociais">
                                <x-ts-input label="Facebook" wire:model='facebook' />
                                <x-ts-input label="Instagram" wire:model='instagram' />
                                <x-ts-input label="Twitter" wire:model='twitter' />
                                <x-ts-input label="Linkedin" wire:model='linkedin' />
                            </x-ts-tab.items>
                            <x-ts-tab.items tab="SEO">
                                <x-ts-input label="OG Ttle" wire:model='og_title' />
                                <x-ts-input label="OG Descrição" wire:model='og_description' />
                                <x-ts-input label="OG Link da Imagem" wire:model='og_image' />
                                <x-ts-input label="OG URL" wire:model='og_url' />
                                <x-ts-input label="OG Tipo" wire:model='og_type' />
                            </x-ts-tab.items>
                            <x-slot:footer>
                                <x-ts-button href="{{route('site.config')}}">Cancelar</x-ts-button>
                                <x-ts-button wire:click='save' color='green'>Salvar</x-ts-button>
                            </x-slot:footer>
                        </x-ts-card>
                        </x-ts-tab>
                    
            </form>
        </div>
    </div>

</main>
