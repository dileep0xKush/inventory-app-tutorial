<div>
    <x-slot:header>Clients</x-slot:header>

    <div class="card">
        <div class="card-header bg-inv-secondary text-inv-primary border-0">
            <h5>Clients' list</h5>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover  ">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Basic Details</th>
                        <th>Address</th>
                        <th>Business Details</th>
                        <th>Account Details</th>
                        <th>Purchases Made</th>
                        <th>Total Purchase Value</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td scope="row">{{ $client->id }}</td>
                            <td>
                                <h6>{{ $client->name }}</h6>
                                <small>{{ $client->email }}</small><br>
                                <small>{{ $client->phone_number }}</small>
                            </td>
                            <td>{{ $client->address }}</td>
                            <td>
                                <small><strong>Tax ID:</strong> {{ $client->tax_id }}</small><br>
                                <small><strong>Reg No:</strong> {{ $client->registration_number ?? 'N/A' }}</small>
                            </td>
                            <td>
                                <small><strong>Bank:</strong> {{ $client->bank->name }}</small><br>
                                <small><strong>A/c No:</strong> {{ $client->account_number }}</small>
                            </td>
                            <td>
                                {{ $client->sales->count() }}
                            </td>
                            <td>
                                <small>KES </small>{{ number_format($client->sales->sum(function ($sale) {
                                    return $sale->total_amount;
                                })) }}
                            </td>
                            <td class="text-center">
                                <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-secondary">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <button
                                    onclick="confirm('Are you sure you wish to DELETE this client?')||event.stopImmediatePropagation()"
                                    class="btn btn-danger" wire:click='delete({{ $client->id }})'>
                                    <i class="bi bi-trash-fill"></i>
                                </button>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        {{ $clients->links() }}
                    </tr>
                </tfoot>
            </table>
            {{ $clients->links() }}
        </div>
    </div>
</div>
