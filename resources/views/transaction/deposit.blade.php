@extends('layouts.app')

@section('content')
    <div
        class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
        <h2 class="intro-y mt-10 text-lg font-medium">List Deposit</h2>
        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                    <form action="{{ request()->url() }}" method="GET">
                    <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                        <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0 flex flex-col sm:flex-row sm:items-end">
                                <div class="mt-3 sm:mr-4">
                                    <label for="date_filter" class="inline-block mb-2">Filter Tanggal</label>
                                    <input type="text" id="date_filter" name="date_filter"
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 datepicker"
                                        placeholder="Pilih Tanggal">
                                </div>

                                <div class="mt-3 sm:mr-4">
                                    <label for="account_status" class="inline-block mb-2">Filter Status</label>
                                    <select name="account_status" id="account_status"
                                        class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                                        <option value="">Pilih Status</option>
                                        <option value="pending">Pending</option>
                                        <option value="completed">Disetujui</option>
                                        <option value="rejected">Ditolak</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" id="filter_button"
                                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-primary border border-transparent rounded-md shadow-sm hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        Terapkan Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="{{ request()->url() }}" method="GET" class="flex mt-3">
                        <div class="relative w-56 text-slate-500">
                            <input data-tw-merge="" type="text" id="searchInput" name="search"
                                value="{{ request()->input('search') }}" placeholder="Search..."
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10"
                                onkeyup="this.form.submit()">
                            <i data-tw-merge="" data-lucide="search"
                                class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                        </div>
                    </form>
                </div>
            </div>


            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
                    <thead data-tw-merge="" class="">
                        <tr data-tw-merge="" class="">
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                TRX NO
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                USERNAME
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                AKUN PEMBAYARAN
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                NOMOR PEMBAYARAN
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                NOMINAL
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                TIPE
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                STATUS
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                ACTIONS
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deposits as $deposit)
                            <tr data-tw-merge="" class="intro-x">
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $deposit->trx_no }}
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $deposit->user->username }}
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $deposit->paymentAccount->account_name }}
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $deposit->paymentAccount->account_number }}
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $deposit->nominal }}
                                    </a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    {{ strtoupper($deposit->type) }}
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    @if ($deposit->status == 'pending')
                                        <div class="text-warning">
                                            Pending
                                        </div>
                                    @elseif($deposit->status == 'completed')
                                        <div class="text-success">
                                            Disetujui
                                        </div>
                                    @else
                                        <div class="text-danger">
                                            Ditolak
                                        </div>
                                    @endif
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <div class="flex items-center justify-center">
                                        <a href="#" class="mr-3 flex items-center approve-button"
                                            data-id="{{ $deposit->id }}" data-tw-toggle="modal"
                                            data-tw-target="#approveModal">
                                            <i data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i> Approve
                                        </a>
                                        <a href="#" class="mr-3 flex items-center reject-button"
                                            data-id="{{ $deposit->id }}" data-tw-toggle="modal"
                                            data-tw-target="#rejectModal">
                                            <i data-lucide="x-square" class="stroke-1.5 mr-1 h-4 w-4"></i> Reject
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                <nav class="w-full sm:mr-auto sm:w-auto">
                    <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                        @for ($i = 1; $i <= $deposits->lastPage(); $i++)
                            <li class="flex-1 sm:flex-initial">
                                @if ($i == $deposits->currentPage())
                                    <a
                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">
                                        {{ $i }}
                                    </a>
                                @else
                                    <a href="{{ $deposits->url($i) }}"
                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">
                                        {{ $i }}
                                    </a>
                                @endif
                            </li>
                        @endfor
                    </ul>
                </nav>

                <select
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 !box mt-3 w-20 sm:mt-0"
                    onchange="this.form.submit()">
                    <option value="10" {{ $deposits->perPage() == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ $deposits->perPage() == 25 ? 'selected' : '' }}>25</option>
                    <option value="35" {{ $deposits->perPage() == 35 ? 'selected' : '' }}>35</option>
                    <option value="50" {{ $deposits->perPage() == 50 ? 'selected' : '' }}>50</option>
                </select>
            </div>

            <form action="{{ request()->url() }}" method="GET" class="hidden">
                <input type="hidden" name="per_page" value="{{ $deposits->perPage() }}">
            </form>

        </div>
    </div>

    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="approveModal"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge=""
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] lg:w-[900px] p-10">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="approveModalLabel">Setujui Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin menyetujui deposit?
                </div>
                <div class="mt-5 text-right">
                    <button type="button" class="bg-primary text-white w-24 py-2 px-3 rounded-md"
                        id="approveButton">Approve</button>
                </div>
            </div>
        </div>
    </div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="rejectModal"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge=""
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] lg:w-[900px] p-10">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModalLabel">Tolak Transaksi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-3">
                        <label for="reject-reason" class="inline-block mb-2">Alasan</label>
                        <textarea id="reject-reason" name="reject_reason" class="w-full text-sm border-slate-200 shadow-sm rounded-md"
                            required></textarea>
                    </div>
                </div>
                <div class="mt-5 text-right">
                    <button type="button" class="bg-primary text-white w-24 py-2 px-3 rounded-md"
                        id="rejectButton">Reject</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let depositId;

            document.querySelectorAll('.approve-button').forEach(button => {
                button.addEventListener('click', function() {
                    depositId = this.getAttribute('data-id');
                    new bootstrap.Modal(document.getElementById('approveModal')).show();
                });
            });

            document.querySelectorAll('.reject-button').forEach(button => {
                button.addEventListener('click', function() {
                    depositId = this.getAttribute('data-id');
                    new bootstrap.Modal(document.getElementById('rejectModal')).show();
                });
            });

            document.getElementById('approveButton').addEventListener('click', function() {
                fetch(`/deposit/approve/${depositId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({})
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Deposit approved successfully.');
                            location.reload();
                        } else {
                            alert('Approval failed: ' + data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });

            document.getElementById('rejectButton').addEventListener('click', function() {
                const reason = document.getElementById('reject-reason').value;

                fetch(`/deposit/reject/${depositId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            reason
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Deposit rejected successfully.');
                            location.reload();
                        } else {
                            alert('Rejection failed: ' + data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
@endsection
