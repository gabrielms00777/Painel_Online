<main class="w-full flex-grow p-6">
    <h1 class="text-3xl text-black pb-6">Dashboard</h1>

    <div class="flex flex-wrap mt-6">
        <div class="w-full pr-0 lg:pr-2">
            <div class="flex gap-4">
                <x-ts-stats :number="$this->onlineUser" header="Usuários Online" footer="Veja quantos usuarios estão online nesse momento!">
                    <x-slot:right>
                        <x-ts-icon name="wifi" class="w-6 h-6 text-pink-500" />
                    </x-slot:right>
                </x-ts-stats>
                <x-ts-stats :number="$this->visitorsMonth" header="Visitantes Mês" footer="Veja quantos usuários entraram esse mês!">
                    <x-slot:right>
                        <x-ts-icon name="wrench-screwdriver" class="w-6 h-6 text-pink-500" />
                    </x-slot:right>
                </x-ts-stats>
                <x-ts-stats :number="$this->allVisitorCount" header="Todos os visitantes" footer="Veja quantas pessoas entraram no site!">
                    <x-slot:right>
                        <x-ts-icon name="wrench-screwdriver" class="w-6 h-6 text-pink-500" />
                    </x-slot:right>
                </x-ts-stats>
            </div>
        </div>
        {{-- <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-plus mr-3"></i> Monthly Reports
            </p>
            <div class="p-6 bg-white">
                <canvas id="chartOne" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-check mr-3"></i> Resolved Reports
            </p>
            <div class="p-6 bg-white">
                <canvas id="chartTwo" width="400" height="200"></canvas>
            </div>
        </div> --}}
    </div>

    <div class="grid grid-cols-2 mt-10 gap-x-4">
        <div class="">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Paginas mais visitadas
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Pagina</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Quantidade</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($this->allVisitor as $path)
                        <tr>
                            <td class="w-1/3 py-3 px-4">{{$path->path}}</td>
                            <td class="w-1/3 py-3 px-4">{{$path->count}}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="">
            <p class="text-xl pb-3 flex items-center">
                <x-ts-icon name="users" class="h-5 w-5 mr-2"/> Usuários do Painel
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($this->users as $user)
                        <tr>
                            <td class="w-1/3 py-3 px-4">{{$user->name}}</td>
                            <td class="w-1/3 py-3 px-4">{{$user->email}}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script> --}}

    {{-- <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script> --}}
</main>
