<main class="w-full flex-grow p-6">
    <div class="flex justify-between items-center">
        <h1 class="text-3xl text-black">Sistemas</h1>
        <x-ts-button text="Adicionar" href="{{ route('softwares.create') }}" color="cyan" outline icon="plus" />
    </div>

    @if (session('success'))
        <br>
        <x-ts-alert icon="check" color="green">
            {{ session('success') }}
        </x-ts-alert>
    @endif

    <div class="flex flex-wrap mt-6">
        <div class="w-full pr-0 lg:pr-2">
            <x-ts-table :$headers :rows="$this->rows" />
        </div>
    </div>

</main>
