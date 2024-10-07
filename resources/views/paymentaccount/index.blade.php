@extends('layouts.app')

@section('content')
    <div
        class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
        <h2 class="intro-y mt-10 text-lg font-medium">List Akun Pembayaran</h2>
        <div class="mt-5 grid grid-cols-12 gap-6">


            <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                <button data-tw-merge="" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview"
                    class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">
                    Tambah Akun Pembayaran
                </button>
                <div class="mx-auto hidden text-slate-500 md:block">
                    Showing 1 to 10 of 150 entries
                </div>
                <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                    <div class="relative w-56 text-slate-500">
                        <input data-tw-merge="" type="text" id="searchInput" placeholder="Search..."
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10"
                            onkeyup="searchTable()">
                        <i data-tw-merge="" data-lucide="search"
                            class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                    </div>
                </div>
            </div>

            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]"
                    id="accountTable">
                    <thead data-tw-merge="">
                        <tr data-tw-merge="">
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">NAMA
                                AKUN</th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">NOMOR
                                AKUN</th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">BANK
                                CODE</th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">BANK
                                NAME</th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">STATUS
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accounts as $account)
                            <tr data-tw-merge="" class="intro-x">
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">{{ $account->account_name }}</a>
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    {{ $account->account_number }}
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    {{ $account->payment->payment_code }}
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    {{ $account->payment->payment_name }}
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    @if ($account->account_status == 1)
                                        <div class="text-success">Aktif</div>
                                    @else
                                        <div class="text-danger">Tidak Aktif</div>
                                    @endif
                                </td>
                                <td data-tw-merge=""
                                    class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="flex items-center justify-center">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center edit-button" href="#"
                                                data-account-name="{{ $account->account_name }}"
                                                data-account-number="{{ $account->account_number }}"
                                                data-account-status="{{ $account->account_status }}"
                                                data-payment-id="{{ $account->payment_id }}"
                                                data-action="{{ route('paymentaccount.update', $account->id) }}"
                                                data-tw-toggle="modal" data-tw-target="#edit-modal">
                                                <i data-tw-merge="" data-lucide="check-square"
                                                    class="stroke-1.5 mr-1 h-4 w-4"></i>
                                                Edit
                                            </a>
                                            @if ($account->account_status == 1)
                                                <a class="flex items-center text-danger"
                                                    href="{{ route('paymentaccount.toggle', $account->id) }}">
                                                    <i data-lucide="trash" class="mr-1 h-4 w-4"></i>
                                                    Non Aktif
                                                </a>
                                            @else
                                                <a class="flex items-center text-success"
                                                    href="{{ route('paymentaccount.toggle', $account->id) }}">
                                                    <i data-lucide="check-square" class="mr-1 h-4 w-4"></i>
                                                    Aktif
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="edit-modal"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge=""
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] lg:w-[900px] p-10">
            <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-2">
                    <label for="payment" class="inline-block mb-2">Pembayaran</label>
                    <select name="payment_id" id="payment" class="w-full text-sm border-slate-200 shadow-sm rounded-md"
                        required>
                        <option value="">Pilih Pembayaran</option>
                        @foreach ($payments->groupBy('payment_type') as $type => $groupedPayments)
                            <optgroup label="{{ ucfirst($type) }}">
                                @foreach ($groupedPayments as $payment)
                                    <option value="{{ $payment->id }}">{{ $payment->payment_name }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <label for="account_name" class="inline-block mb-2">Nama Akun Pembayaran</label>
                    <input id="account_name" type="text" name="account_name"
                        class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>

                <div class="mt-3">
                    <label for="account_number" class="inline-block mb-2">Nomor Akun Pembayaran</label>
                    <input id="account_number" type="number" name="account_number"
                        class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>

                <div class="mt-3">
                    <label for="account_status" class="inline-block mb-2">Status</label>
                    <select name="account_status" id="account_status"
                        class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>

                <div class="mt-5 text-right">
                    <button type="submit" class="bg-primary text-white w-24 py-2 px-3 rounded-md">Save</button>
                    <button type="button" id="close-modal"
                        class="ml-2 bg-red-500 text-white w-24 py-2 px-3 rounded-md">Close</button>
                </div>
            </form>
        </div>
    </div>


    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="superlarge-modal-size-preview"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge=""
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] lg:w-[900px] p-10">
            <form action="{{ route('paymentaccount.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-2">
                    <label for="payment" class="inline-block mb-2">Pembayaran</label>
                    <select name="payment_id" id="payment" class="w-full text-sm border-slate-200 shadow-sm rounded-md"
                        required>
                        <option value="">Pilih Pembayaran</option>
                        @foreach ($payments->groupBy('payment_type') as $type => $groupedPayments)
                            <optgroup label="{{ ucfirst($type) }}">
                                @foreach ($groupedPayments as $payment)
                                    <option value="{{ $payment->id }}">
                                        {{ $payment->payment_name }}
                                    </option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Nama Akun Pembayaran</label>
                    <input id="crud-form-1" type="text" name="account_name"
                        class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Nomor Akun Pembayaran</label>
                    <input id="crud-form-1" type="number" name="account_number"
                        class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>

                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Status</label>
                    <select name="account_status" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        <option value="">Pilih Status</option>
                        <option value="1">Aktif</option>
                        <option value="2">Tidak Aktif</option>
                    </select>
                </div>

                <div class="mt-5 text-right">
                    <button type="submit" class="bg-primary text-white w-24 py-2 px-3 rounded-md">Save</button>
                </div>
            </form>
        </div>
    </div>


    <script>
        const modal = document.getElementById('edit-modal');
        const closeModalButton = document.getElementById('close-modal');
        const editForm = document.getElementById('edit-form'); // Get the form element

        const showModal = (event) => {
            event.preventDefault();
            const button = event.currentTarget;
            const accountName = button.getAttribute('data-account-name');
            const accountNumber = button.getAttribute('data-account-number');
            const accountStatus = button.getAttribute('data-account-status');
            const paymentId = button.getAttribute('data-payment-id');
            const actionUrl = button.getAttribute('data-action'); // Get action URL

            // Populate the modal form fields
            document.getElementById('account_name').value = accountName;
            document.getElementById('account_number').value = accountNumber;
            document.getElementById('account_status').value = accountStatus;
            document.getElementById('payment').value = paymentId;

            // Set the form action URL
            editForm.action = actionUrl;

            // Show the modal
            modal.classList.remove('invisible', 'opacity-0');
            modal.classList.add('visible', 'opacity-100');
        };

        const closeModal = () => {
            modal.classList.add('invisible', 'opacity-0');
            modal.classList.remove('visible', 'opacity-100');
        };

        const editButtons = document.querySelectorAll('.edit-button');
        editButtons.forEach(button => {
            button.addEventListener('click', showModal);
        });

        closeModalButton.addEventListener('click', closeModal);

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    </script>

    <script>
        function searchTable() {
            // Get the search input and convert to lowercase
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const table = document.getElementById('accountTable');
            const rows = table.getElementsByTagName('tr');

            // Loop through the table rows, hiding those that don't match the search query
            for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header
                const cells = rows[i].getElementsByTagName('td');
                let rowContainsSearchTerm = false;

                for (let j = 0; j < cells.length; j++) {
                    const cell = cells[j];
                    if (cell) {
                        const cellText = cell.textContent || cell.innerText;
                        if (cellText.toLowerCase().indexOf(filter) > -1) {
                            rowContainsSearchTerm = true;
                            break; // Stop searching if we found a match
                        }
                    }
                }

                rows[i].style.display = rowContainsSearchTerm ? "" : "none"; // Show or hide row
            }
        }
    </script>
@endsection
