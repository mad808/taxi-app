@extends('admin.layouts.main')

@section('container')
    @include('partials.navbar')
    <section>
        @if (session()->has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: '{{ __('messages.swal_success_title') }}',
                    html: '{!! session('success') !!}'
                })
            </script>
        @endif

        @if (session()->has('unassignedError'))
            <script>
                Swal.fire(
                    '{{ __('messages.swal_error_title') }}',
                    '{{ session('unassignedError') }}',
                    'error'
                )
            </script>
        @endif

        <!-- Start: Ludens - 1 Index Table with Search & Sort Filters  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <h3 class="text-dark mb-4">{{ __('messages.welcome', ['name' => auth()->user()->username]) }}</h3>
                </div>
                <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;">
                    <a href="all" class="btn btn-primary mx-1 mb-2 showAll" role="button" name="showAllBtn">
                        <i class="fa fa-plus"></i>&nbsp;{{ __('messages.show_all_btn') }}</a>
                    <a href="recent" class="btn btn-primary mx-1 mb-2 showRecent" role="button" name="showRecentBtn">
                        <i class="fa fa-plus"></i>&nbsp;{{ __('messages.show_recent_btn') }}</a>
                    <a href="avail" class="btn btn-primary mx-1 mb-2 showAvailPassengers" role="button"
                        name="showAvailPassengersBtn">
                        <i class="fa fa-plus"></i>&nbsp;{{ __('messages.show_available_btn') }}</a>

                    <form action="/logout" method="POST" class="d-inline">
                        @csrf

                        <button type="submit" class="btn btn-primary mb-2">{{ __('messages.logout_btn') }} <span data-feather="log-out"></span></button>
                    </form>

                </div>
            </div>
            <!-- Start: TableSorter -->
            <div class="card" id="TableSorterCard">
                <div class="card-header py-3">
                    <div class="row table-topper align-items-center justify-content-between">
                        <div class="col-lg-5 text-start">
                            <p class="text-primary m-0 fw-bold">{{ __('messages.table_title') }}</p>
                        </div>
                        <div class="py-2 text-end">

                            @if ($errors->any())
                                <div class="alert alert-danger text-center" style="margin-top:0%">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif

                            <form action="assign-button" method="POST" class="form-inline">
                                @csrf
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <input class="form-control mb-2" type="text" name="bookingInput" id="booking"
                                            placeholder="{{ __('messages.assign_placeholder') }}">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="assignBtn" value="assignBtn"
                                            class="btn btn-primary flex-fill py-2 mb-2 assignBtn">
                                            <i class="far fa-paper-plane"></i> {{ __('messages.assign_btn') }}</button>
                                    </div>
                                </div>
                            </form>

                            <form action="search-button" method="POST" class="form-inline">
                                @csrf
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <input class="form-control mb-2" type="text" name="bookingInput" id="booking"
                                            placeholder="{{ __('messages.search_placeholder') }}">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="searchBtn" value="searchBtn"
                                            class="btn btn-primary flex-fill py-2 mb-2 assignBtn">
                                            <i class="far fa-paper-plane"></i> {{ __('messages.search_btn') }}</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <div id="tableID">

                                @if ($agent->isMobile())
                                    <table class="table table-striped table tablesorter" id="ipi-table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">{{ __('messages.th_booking_ref') }}</th>
                                                <th class="text-center">{{ __('messages.th_suburb') }}</th>
                                                <th class="text-center">{{ __('messages.th_destination') }}</th>
                                                <th class="text-center">{{ __('messages.th_pickup_date') }}</th>
                                                <th class="text-center">{{ __('messages.th_pickup_time') }}</th>
                                                <th class="text-center">{{ __('messages.th_status') }}</th>
                                                <th class="text-center">{{ __('messages.th_car') }}</th>
                                                <th class="text-center">{{ __('messages.th_actions') }}</th>
                                            </tr>
                                        </thead>

                                        @foreach ($passengers as $passenger)
                                            <tbody class="text-center">
                                                <tr id="{{ $passenger->bookingRefNo }}">
                                                    <td name="bookingRefNo">{{ $passenger->bookingRefNo }}</td>
                                                    <td>{{ $passenger->suburb }}</td>
                                                    <td>{{ $passenger->destinationSuburb }}</td>
                                                    <td>{{ $passenger->pickUpDate }}</td>
                                                    <td>{{ $passenger->pickUpTime }}</td>
                                                    <td>{{ $passenger->status }}</td>
                                                    <td><img src="/assets\img\cars\{{ $passenger->carsNeed }}.png"
                                                            alt="{{ $passenger->carsNeed }}"><br>{{ $passenger->carsNeed }}
                                                    </td>
                                                    @if ($passenger->status == 'Assigned')
                                                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                                                            <a class="btn btn-primary disabled" role="button" aria-disabled="true">
                                                                {{ __('messages.more_info_btn') }}
                                                            </a>
                                                        </td>
                                                    @else
                                                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                                data-bs-target="#moreInfoModal-{{ $passenger->bookingRefNo }}">
                                                                {{ __('messages.more_info_btn') }}
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="moreInfoModal-{{ $passenger->bookingRefNo }}" tabindex="-1" aria-labelledby="moreInfoModalLabel-{{ $passenger->bookingRefNo }}" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="moreInfoModalLabel-{{ $passenger->bookingRefNo }}">{{ __('messages.modal_title', ['name' => $passenger->customerName]) }}</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('messages.modal_close_btn') }}"></button>
                                                                        </div>
                                                                        <div class="modal-body text-start">
                                                                            {{ __('messages.modal_booking_ref') }}: {{ $passenger->bookingRefNo }} <br>
                                                                            {{ __('messages.modal_customer_name') }}: {{ $passenger->customerName }} <br>
                                                                            {{ __('messages.modal_phone') }}: {{ $passenger->phoneNumber }} <br>
                                                                            {{ __('messages.modal_unit') }}: {{ $passenger->unitNumber }} <br>
                                                                            {{ __('messages.modal_street_num') }}: {{ $passenger->streetNumber }} <br>
                                                                            {{ __('messages.modal_street_name') }}: {{ $passenger->streetName }} <br>
                                                                            {{ __('messages.modal_suburb') }}: {{ $passenger->suburb }} <br>
                                                                            {{ __('messages.modal_destination') }}: {{ $passenger->destinationSuburb }} <br>
                                                                            {{ __('messages.modal_pickup_date') }}: {{ $passenger->pickUpDate }} <br>
                                                                            {{ __('messages.modal_pickup_time') }}: {{ $passenger->pickUpTime }} <br>
                                                                            {{ __('messages.modal_status') }}: {{ $passenger->status }} <br>
                                                                            {{ __('messages.modal_car') }}: <img src="/assets\img\cars\{{ $passenger->carsNeed }}.png" alt="{{ $passenger->carsNeed }}"> <br>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.modal_close_btn') }}</button>
                                                                            <form action="assign" method="post" class="d-inline">
                                                                                @csrf
                                                                                <button type="submit" name="bookingRefNo" value="{{ $passenger->bookingRefNo }}" class="btn btn-primary">
                                                                                    <i class="far fa-paper-plane"></i>&nbsp;{{ __('messages.modal_assign_btn') }}
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                @else
                                    <table class="table table-striped table tablesorter" id="ipi-table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">{{ __('messages.th_booking_ref') }}</th>
                                                <th class="text-center">{{ __('messages.th_customer_name') }}</th>
                                                <th class="text-center">{{ __('messages.th_phone') }}</th>
                                                <th class="text-center">{{ __('messages.th_unit') }}</th>
                                                <th class="text-center">{{ __('messages.th_street_num') }}</th>
                                                <th class="text-center">{{ __('messages.th_street_name') }}</th>
                                                <th class="text-center">{{ __('messages.th_suburb') }}</th>
                                                <th class="text-center">{{ __('messages.th_destination') }}</th>
                                                <th class="text-center">{{ __('messages.th_pickup_date') }}</th>
                                                <th class="text-center">{{ __('messages.th_pickup_time') }}</th>
                                                <th class="text-center">{{ __('messages.th_status') }}</th>
                                                <th class="text-center">{{ __('messages.th_car') }}</th>
                                                <th class="text-center">{{ __('messages.th_assigned_by') }}</th>
                                                <th class="text-center">{{ __('messages.th_actions') }}</th>
                                            </tr>
                                        </thead>

                                        @foreach ($passengers as $passenger)
                                            <tbody class="text-center">
                                                <tr id="{{ $passenger->bookingRefNo }}">
                                                    <td name="bookingRefNo">{{ $passenger->bookingRefNo }}</td>
                                                    <td>{{ $passenger->customerName }}</td>
                                                    <td>{{ $passenger->phoneNumber }}</td>
                                                    <td>{{ $passenger->unitNumber }}</td>
                                                    <td>{{ $passenger->streetNumber }}</td>
                                                    <td>{{ $passenger->streetName }}</td>
                                                    <td>{{ $passenger->suburb }}</td>
                                                    <td>{{ $passenger->destinationSuburb }}</td>
                                                    <td>{{ $passenger->pickUpDate }}</td>
                                                    <td>{{ $passenger->pickUpTime }}</td>
                                                    <td>{{ $passenger->status }}</td>
                                                    <td><img src="/assets\img\cars\{{ $passenger->carsNeed }}.png"
                                                            alt="{{ $passenger->carsNeed }}"><br>{{ $passenger->carsNeed }}
                                                    </td>
                                                    <td>{{ $passenger->assignedBy }}</td>
                                                    @if ($passenger->status == 'Assigned')
                                                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                                                            <a class="btn btn-primary disabled" role="button" aria-disabled="true">
                                                                <i class="far fa-paper-plane"></i>&nbsp;{{ __('messages.assign_btn') }}
                                                            </a>
                                                        </td>
                                                    @else
                                                        <td class="text-center align-middle" style="max-height: 60px;height: 60px;">
                                                            <form action="assign" method="post" class="d-inline">
                                                                @csrf
                                                                <button type="submit" name="bookingRefNo" value="{{ $passenger->bookingRefNo }}" class="btn btn-primary">
                                                                    <i class="far fa-paper-plane"></i>&nbsp;{{ __('messages.assign_btn') }}
                                                                </button>
                                                            </form>
                                                        </td>
                                                    @endif
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                @endif
                                <div class="d-flex justify-content-end">
                                    {{ $passengers->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: TableSorter -->
        </div>
        <!-- End: Ludens - 1 Index Table with Search & Sort Filters  -->
    </section>
@endsection