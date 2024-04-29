<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black">Mensagens recebidas</h1>


    <div class="flex flex-wrap mt-6">
        <div class="w-full pr-0 lg:pr-2">
            <x-ts-table :$headers :rows="$this->rows" striped filter loading paginate />
        </div>
    </div>

</main>
