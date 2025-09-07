@props(['client', 'sale'])


<li wire:click='selectClient({{ $client->id }})'
    class="list-group-item {{ $client->id == $sale->client_id ? 'active' : '' }} d-flex justify-content-between">
    <div class="me-auto">
        <h5>{{ $client->name }}</h5>
        <small class="text-muted">{{ $client->email }} <br> {{ $client->phone_number }}</small>
    </div>
    <div class="mx-auto my-auto">
        <h6>Account Details:</h6>
        <small class="text-muted">{{ $client->bank->name }} <br> {{ $client->account_number }}</small>
    </div>
    <div class="ms-auto my-auto {{ $client->total_balance > 0 ? 'text-cash-green' : 'text-cash-red' }}">
        <h6>KES {{ number_format($client->total_balance, 2) }}</h6>
    </div>
</li>
