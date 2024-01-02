@extends('app.backend.backend_master')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row invoice-preview">
                <!-- Invoice -->
                <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
                    <div class="card invoice-preview-card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column p-sm-3 p-0"
                            >
                                <div class="mb-xl-0 mb-4">
                                    <div class="d-flex svg-illustration mb-3 gap-2">
                                        <svg
                                            width="26px"
                                            height="26px"
                                            viewBox="0 0 26 26"
                                            version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                        >
                                            <title>icon</title>
                                            <defs>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                                                    <stop stop-color="#5A8DEE" offset="0%"></stop>
                                                    <stop stop-color="#699AF9" offset="100%"></stop>
                                                </linearGradient>
                                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="linearGradient-2">
                                                    <stop stop-color="#FDAC41" offset="0%"></stop>
                                                    <stop stop-color="#E38100" offset="100%"></stop>
                                                </linearGradient>
                                            </defs>
                                            <g id="Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                                    <g id="Login" transform="translate(519.000000, 244.000000)">
                                                        <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                            <g id="icon" transform="translate(0.000000, 4.000000)">
                                                                <path
                                                                    d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                                    id="Combined-Shape"
                                                                    fill="#4880EA"
                                                                ></path>
                                                                <path
                                                                    d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                                    id="Combined-Shape2"
                                                                    fill="url(#linearGradient-1)"
                                                                ></path>
                                                                <rect
                                                                    id="Rectangle"
                                                                    fill="url(#linearGradient-2)"
                                                                    x="0"
                                                                    y="0"
                                                                    width="7.68181818"
                                                                    height="7.68181818"
                                                                ></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>

                                        <span class="app-brand-text h3 mb-0 fw-bold">Easy Fashion Ltd.</span>
                                    </div>
                                    <p class="mb-1">34/B, Malibagh Chowdhrypara, Dhaka.</p>
                                    <p class="mb-1">25 Rowshan Manjil, Chamelibagh, Shantinagar, Dhaka.</p>
                                    <p class="mb-0">+880 1713-429330</p>
                                </div>
                                <div>
                                    <h4>Invoice #3492</h4>
                                    <div class="mb-2">
                                        <span class="me-1">Date Issues:</span>
                                        <span class="fw-semibold">{{ $product->created_at->todatestring() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="row p-sm-3 p-0">
                                <div class="col-xl-6 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                                    <h6 class="pb-2">Invoice To:</h6>
                                    <p class="mb-1">{{ $product->name }}</p>
                                    <p class="mb-1">{{ $product->address }}</p>
                                    <p class="mb-1">{{ $product->mobile }}</p>
                                    <p class="mb-0">{{ $product->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table border-top m-0">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Image</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-nowrap">{{ $product['products']['name'] }}</td>
                                    <td><div class="avatar avatar-md me-2"><img src="{{  (!empty($product['products']['image']))? url('upload/backend/product_images/'.$product['products']['image']):url('upload/no_image.jpg') }}" alt="Avatar" class="rounded-circle"></div></td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>৳ {{ $product->price }}</td>
                                    <td>@if($product->status == 0)<span class="badge bg-warning">Pending</span>@elseif($product->status == 1)<span class="badge bg-success">Approved</span>@elseif($product->status == 2)<span class="badge bg-danger">Rejected</span> @endif</td>
                                </tr>

                                <tr>
                                    <td colspan="3" class="align-top px-4 py-5">
                                        <p class="mb-2">
                                            <span class="me-1 fw-semibold">Salesperson:</span>
                                            <span>Alfie Solomons</span>
                                        </p>
                                        <span>Thanks for your business</span>
                                    </td>
                                    <td class="text-end px-4 py-5">
                                        <p class="mb-2">Subtotal:</p>
                                        <p class="mb-2">Discount:</p>
                                        <p class="mb-2">Tax:</p>
                                        <p class="mb-0">Total:</p>
                                    </td>
                                    <td class="px-4 py-5">
                                        <p class="fw-semibold mb-2">{{ $product->price }}</p>
                                        <p class="fw-semibold mb-2">৳ 00.00</p>
                                        <p class="fw-semibold mb-2">৳ 00.00</p>
                                        <p class="fw-semibold mb-0">৳ {{ $product->price }}</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <span class="fw-semibold">Note:</span>
                                    <span
                                    >It was a pleasure working with you and your team. We hope you will keep us in mind for
                            future freelance projects. Thank You!</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice -->

                <!-- Invoice Actions -->
                <div class="col-xl-3 col-md-4 col-12 invoice-actions">
                    <div class="card">
                        <div class="card-body">
                            @if($product->status != 1 && $product->status != 2) <a href="{{ route('store.approve',['id'=>$product->id,'product_id'=>$product->product_id]) }}" class="btn btn-label-success d-grid w-100 mb-3">Approve</a> @endif
                            @if($product->status != 2 && $product->status != 1) <a href="{{ route('store.reject',$product->id) }}" class="btn btn-label-danger d-grid w-100 mb-3">Reject</a> @endif
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->
            </div>

            <!-- Offcanvas -->
            <!-- Send Invoice Sidebar -->
            <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header border-bottom">
                    <h6 class="offcanvas-title">Send Invoice</h6>
                    <button
                        type="button"
                        class="btn-close text-reset"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                    <form>
                        <div class="mb-3">
                            <label for="invoice-from" class="form-label">From</label>
                            <input
                                type="text"
                                class="form-control"
                                id="invoice-from"
                                value="shelbyComapny@email.com"
                                placeholder="company@email.com"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="invoice-to" class="form-label">To</label>
                            <input
                                type="text"
                                class="form-control"
                                id="invoice-to"
                                value="qConsolidated@email.com"
                                placeholder="company@email.com"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="invoice-subject" class="form-label">Subject</label>
                            <input
                                type="text"
                                class="form-control"
                                id="invoice-subject"
                                value="Invoice of purchased Admin Templates"
                                placeholder="Invoice regarding goods"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="invoice-message" class="form-label">Message</label>
                            <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">
Dear Queen Consolidated,
          Thank you for your business, always a pleasure to work with you!
          We have generated a new invoice in the amount of $95.59
          We would appreciate payment of this invoice by 05/11/2021</textarea
                            >
                        </div>
                        <div class="mb-4">
                      <span class="badge bg-label-primary">
                        <i class="bx bx-link bx-xs"></i>
                        <span class="align-middle">Invoice Attached</span>
                      </span>
                        </div>
                        <div class="mb-3 d-flex flex-wrap">
                            <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Send Invoice Sidebar -->
            <!-- Add Payment Sidebar -->
            <div class="offcanvas offcanvas-end" id="addPaymentOffcanvas" aria-hidden="true">
                <div class="offcanvas-header border-bottom">
                    <h6 class="offcanvas-title">Add Payment</h6>
                    <button
                        type="button"
                        class="btn-close text-reset"
                        data-bs-dismiss="offcanvas"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                    <div class="d-flex justify-content-between bg-lighter p-2 mb-3">
                        <p class="mb-0">Invoice Balance:</p>
                        <p class="fw-bold mb-0">$5000.00</p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="invoiceAmount">Payment Amount</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input
                                    type="text"
                                    id="invoiceAmount"
                                    name="invoiceAmount"
                                    class="form-control invoice-amount"
                                    placeholder="100"
                                />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="payment-date">Payment Date</label>
                            <input id="payment-date" class="form-control invoice-date" type="text" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="payment-method">Payment Method</label>
                            <select class="form-select" id="payment-method">
                                <option value="" selected disabled>Select payment method</option>
                                <option value="Cash">Cash</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Paypal">Paypal</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="payment-note">Internal Payment Note</label>
                            <textarea class="form-control" id="payment-note" rows="2"></textarea>
                        </div>
                        <div class="mb-3 d-flex flex-wrap">
                            <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Add Payment Sidebar -->
            <!-- /Offcanvas -->
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper --

@endsection
#
