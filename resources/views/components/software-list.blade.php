<div>
    {{-- @dd($softwares) --}}
    <div class="owl-carousel">
        @foreach ($softwares as $software)
        <div>
            {{-- {{asset('storage/'.$software->image)}} --}}
           <img src="{{asset('storage/'.$software->image)}}" class="image_6" alt="Software de automação">
           <h4 class="ipsum_text">{{$software->name}}</h4>
        </div>
            
        @endforeach
        {{-- <div>
           <img src="images/img-7.png" class="image_6" alt="Software de gerenciamento de dados">
           <h4 class="ipsum_text">Gerenciamento de Dados</h4>
        </div>
        <div>
           <img src="images/img-8.png" class="image_6" alt="Aplicações web">
           <h4 class="ipsum_text">Aplicações Web</h4>
        </div>
        <div>
           <img src="images/img-8.png" class="image_6" alt="Aplicações web">
           <h4 class="ipsum_text">Aplicações Web</h4>
        </div>
        <div>
           <img src="images/img-8.png" class="image_6" alt="Aplicações web">
           <h4 class="ipsum_text">Aplicações Web</h4>
        </div>
        <div>
           <img src="images/img-8.png" class="image_6" alt="Aplicações web">
           <h4 class="ipsum_text">Aplicações Web</h4>
        </div>
        <div>
           <img src="images/img-8.png" class="image_6" alt="Aplicações web">
           <h4 class="ipsum_text">Aplicações Web</h4>
        </div> --}}
     </div>
</div>