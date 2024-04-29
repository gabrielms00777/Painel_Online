<x-mail::message>
    <h1>Contato do site</h1>

    <p><strong>Nome:</strong> {{ $contactMessage->name }}</p>
    <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
    <p><strong>Telefone:</strong> {{ $contactMessage->phone }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $contactMessage->message }}</p>


</x-mail::message>
