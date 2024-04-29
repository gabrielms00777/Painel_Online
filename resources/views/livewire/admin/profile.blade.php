<main class="w-full flex-grow p-6">
    <x-ts-dialog />
    <h1 class="text-3xl text-black pb-6">Editar Informações de perfil</h1>

    <div class="flex flex-wrap mt-6">
        <div class="w-full pr-0 lg:pr-2">
            <form wire:submit="save">
                <x-ts-card>
                    <div class="flex flex-col gap-2">
                        <x-ts-input label="Nome" wire:model='name' />
                        <x-ts-input label="Email" wire:model='email' />
                        <x-ts-input label="Senha" wire:model='password' />
                        <x-ts-input label="Confirmação de senha" wire:model='password_confirmation' />
                    </div>
                    <x-slot:footer>
                        <x-ts-button href="{{ route('dashboard') }}">Cancelar</x-ts-button>
                        <x-ts-button wire:click='save' color='green'>Salvar</x-ts-button>
                    </x-slot:footer>
                </x-ts-card>

            </form>
        </div>
    </div>

</main>
