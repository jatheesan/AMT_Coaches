@extends('layouts.template')
@section('content')
    <div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">{{ isset($invoice) ? 'Edit Booking Invoice' : 'New Booking Invoice' }}</h5>
        </div>
        <div class="card-body">
            {{-- Determine route and method based on whether we are editing --}}
            <form action="{{ isset($invoice) ? route('invoices.update', $invoice->id) : route('invoices.store') }}" method="POST">
                @csrf
                @if(isset($invoice))
                    @method('PATCH')
                @endif
                
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Invoice Ref</label>
                        <input type="text" name="invoice_ref" class="form-control" placeholder="e.g. 5999" required 
                               value="{{ old('invoice_ref', $invoice->invoice_ref ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">Travel Date</label>
                        <input type="date" name="travel_date" class="form-control" required 
                               value="{{ old('travel_date', $invoice->travel_date ?? '') }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold">No. of Passengers</label>
                        <input type="number" name="passengers" class="form-control" placeholder="48" 
                               value="{{ old('passengers', $invoice->passengers ?? '') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Pickup Time</label>
                        <input type="time" name="pickup_times" class="form-control" 
                               value="{{ old('pickup_times', $invoice->pickup_times ?? '') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Return Time</label>
                        <input type="time" name="return_times" class="form-control" 
                               value="{{ old('return_times', $invoice->return_times ?? '') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Issued Date</label>
                        <input type="date" name="issued_date" class="form-control" required 
                               value="{{ old('issued_date', $invoice->issued_date ?? '') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-bold">Due Date</label>
                        <input type="date" name="due_date" class="form-control" required 
                               value="{{ old('due_date', $invoice->due_date ?? '') }}">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Client Name</label>
                        <input type="text" name="client_name" class="form-control" required 
                               value="{{ old('client_name', $invoice->client_name ?? '') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Client Address</label>
                        <textarea name="client_address" class="form-control" rows="2">{{ old('client_address', $invoice->client_address ?? '') }}</textarea>
                    </div>
                </div>

                <hr>

                <h6 class="fw-bold mb-3">Services & Add-ons</h6>
                <table class="table table-bordered" id="items-table">
                    <thead class="table-light">
                        <tr>
                            <th>Description</th>
                            <th style="width: 100px;">Qty</th>
                            <th style="width: 150px;">Rate (£)</th>
                            <th style="width: 50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Loop through existing items if editing, otherwise show one empty row --}}
                        @php $items = old('items', isset($invoice) ? $invoice->items : [[]]); @endphp
                        
                        @foreach($items as $index => $item)
                        <tr>
                            <td><input type="text" name="items[{{ $index }}][description]" class="form-control" 
                                       value="{{ $item['description'] ?? '' }}" required></td>
                            <td><input type="number" name="items[{{ $index }}][qty]" class="form-control" 
                                       value="{{ $item['qty'] ?? 1 }}" min="1"></td>
                            <td><input type="number" step="0.01" name="items[{{ $index }}][rate]" class="form-control" 
                                       value="{{ $item['rate'] ?? '0.00' }}" required></td>
                            <td class="text-center">
                                @if($index > 0)
                                    <button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <button type="button" class="btn btn-outline-primary btn-sm mb-4" onclick="addRow()">
                    <i class="bi bi-plus-circle"></i> Add Additional Service (Food/Drinks)
                </button>

                <div class="text-end">
                    <button type="submit" class="btn btn-success btn-lg px-5">
                        {{ isset($invoice) ? 'Update Invoice' : 'Generate & Download PDF' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    {{-- Initialize rowIdx based on current count of items --}}
    let rowIdx = {{ count($items) }};

    function addRow() {
        const tableBody = document.querySelector('#items-table tbody');
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><input type="text" name="items[${rowIdx}][description]" class="form-control" placeholder="e.g. Lunch Boxes" required></td>
            <td><input type="number" name="items[${rowIdx}][qty]" class="form-control" value="1" min="1"></td>
            <td><input type="number" step="0.01" name="items[${rowIdx}][rate]" class="form-control" placeholder="0.00" required></td>
            <td class="text-center">
                <button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">
                    <i class="bi bi-trash"></i>
                </button>
            </td>
        `;
        tableBody.appendChild(row);
        rowIdx++;
    }

    function removeRow(btn) {
        btn.closest('tr').remove();
    }
</script>
@endsection