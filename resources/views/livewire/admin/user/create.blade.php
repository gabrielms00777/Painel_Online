<main class="w-full flex-grow p-6">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl text-black">Cadastrar Usuários</h1>
        <x-ts-button text="Voltar" href="{{ route('users.index') }}" color="cyan" outline icon="arrow-uturn-left" />
    </div>

    <div class="flex flex-wrap mt-6">
        <div class="w-full pr-0 lg:pr-2">
            <x-ts-card>
                <form wire:submit='save' class="flex flex-col gap-y-2">
                    <x-ts-input wire:model='form.name' label="Nome *" />
                    <x-ts-input wire:model='form.email' label="Email *" />
                    <x-ts-password wire:model='form.password' label="Senha *" />
                    <x-ts-password wire:model='form.password_confirmation ' label="Confirmação da Senha *" />
                    <x-slot:footer>
                        <x-ts-button text="Cancelar" link="{{ route('users.index') }}" color="red" />
                        <x-ts-button text="Salvar" color="green" loading wire:click='save' />
                    </x-slot:footer>
                </form>
            </x-ts-card>
        </div>
    </div>

</main>
