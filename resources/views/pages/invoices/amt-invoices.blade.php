<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<x-app-layout>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Coach Booking Dashboard</h2>
            <a href="{{ route('invoices.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg"></i> Create New Invoice
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Inv #</th>
                            <th>Client</th>
                            <th>Travel Date</th>
                            <th>Total Due</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoices as $inv)
                            <tr>
                                <td class="fw-bold">{{ $inv->invoice_ref }}</td>
                                <td>{{ $inv->client_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($inv->travel_date)->format('d/m/Y') }}</td>
                                <td>£{{ number_format($inv->total_amount, 2) }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('invoices.show', $inv->id) }}"
                                            class="btn btn-sm btn-outline-secondary" target="_blank">View PDF</a>
                                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#sendInvoiceModal"
                                            data-action="{{ route('invoices.sendEmail', $inv->id) }}"
                                            data-ref="{{ $inv->invoice_ref }}"
                                            data-show-url="{{ route('invoices.show', $inv->id) }}">
                                            Send Mail
                                        </button>
                                        <a href="{{ route('invoices.edit', $inv->id) }}"
                                            class="btn btn-sm btn-outline-success">Edit</a>
                                        <form action="{{ route('invoices.destroy', $inv->id) }}" method="POST"
                                            class="d-inline mb-0" onsubmit="return confirm('Delete this invoice?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Send Invoice Modal -->
    <div class="modal fade" id="sendInvoiceModal" tabindex="-1" aria-labelledby="sendInvoiceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form id="sendInvoiceForm" method="POST" action="">
                @csrf
                <div class="modal-content text-dark">
                    <div class="modal-header">
                        <h5 class="modal-title id-invoice-ref-header" id="sendInvoiceModalLabel">Send Email Invoice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 text-start">
                            <label for="mail_to" class="form-label fw-bold">To <span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="mail_to" name="to" required
                                placeholder="client@example.com">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="mail_cc" class="form-label fw-bold">CC (Optional)</label>
                            <input type="email" class="form-control" id="mail_cc" name="cc"
                                placeholder="cc@example.com">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="mail_subject" class="form-label fw-bold">Subject (Optional)</label>
                            <input type="text" class="form-control" id="mail_subject" name="subject"
                                placeholder="Default Subject">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="mail_message" class="form-label fw-bold">Message (Optional)</label>
                            <textarea class="form-control" id="mail_message" name="message" rows="4"
                                placeholder="Default payment request message..."></textarea>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label d-block fw-bold text-secondary">Attachment</label>
                            <div class="d-flex align-items-center p-2 bg-light border rounded">
                                <span class="bi bi-file-earmark-pdf fs-3 text-danger me-2"></span>
                                <div>
                                    <a id="invoiceAttachmentLink" href="#" target="_blank"
                                        class="fw-semibold text-decoration-none text-primary">Invoice_PDF.pdf</a>
                                    <div class="text-muted small">Downloadable attachment</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Send Email</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sendInvoiceModal = document.getElementById('sendInvoiceModal');
            if (sendInvoiceModal) {
                sendInvoiceModal.addEventListener('show.bs.modal', function (event) {
                    // Button that triggered the modal
                    const button = event.relatedTarget;

                    // Extract info from data-* attributes
                    const actionUrl = button.getAttribute('data-action');
                    const invoiceRef = button.getAttribute('data-ref');
                    const showUrl = button.getAttribute('data-show-url');

                    // Update modal components
                    const form = sendInvoiceModal.querySelector('#sendInvoiceForm');
                    const attachmentLink = sendInvoiceModal.querySelector('#invoiceAttachmentLink');
                    const headerRef = sendInvoiceModal.querySelector('.id-invoice-ref-header');

                    form.action = actionUrl;
                    attachmentLink.href = showUrl;
                    attachmentLink.textContent = `Invoice_${invoiceRef}.pdf`;
                    headerRef.textContent = `Send Email Invoice [Ref: ${invoiceRef}]`;

                    // Reset fields
                    form.querySelector('#mail_to').value = '';
                    form.querySelector('#mail_cc').value = '';
                    form.querySelector('#mail_message').value = '';
                    form.querySelector('#mail_subject').value = '';
                    form.querySelector('#mail_subject').placeholder = `Default: Invoice ${invoiceRef} from AMT Coaches`;
                });
            }
        });
    </script>
</x-app-layout>