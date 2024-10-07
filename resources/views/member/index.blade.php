@extends('layouts.app')

@section('content')
    <div
        class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
        <h2 class="intro-y mt-10 text-lg font-medium">Data List Layout</h2>
        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                <button data-tw-merge="" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview"
                    class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">Add
                    Tambah Akun
                </button>
                <div class="mx-auto hidden text-slate-500 md:block">
                    Showing 1 to 10 of 150 entries
                </div>
                <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                    <div class="relative w-56 text-slate-500">
                        <input data-tw-merge="" type="text" placeholder="Search..."
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10">
                        <i data-tw-merge="" data-lucide="search"
                            class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                    </div>
                </div>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
                    <thead data-tw-merge="" class="">
                        <tr data-tw-merge="" class="">
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                NAMA
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                BANK
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                NAMA AKUN
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                NOMOR AKUN
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                STOCK
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                STATUS
                            </th>
                            <th data-tw-merge=""
                                class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                ACTIONS
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tw-merge="" class="intro-x">
                            <td data-tw-merge=""
                                class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <a class="whitespace-nowrap font-medium" href="#">
                                    member01
                                </a>
                                <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                    Nama Lengkap
                                </div>
                            </td>
                            <td data-tw-merge=""
                                class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                BCA
                            </td>
                            <td data-tw-merge=""
                                class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                NAMA AKUN BANK
                            </td>
                            <td data-tw-merge=""
                                class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                NOMOR AKUN BANK
                            </td>
                            <td data-tw-merge=""
                                class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                Rp 50.000
                            </td>
                            <td data-tw-merge=""
                                class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                <div class="flex items-center justify-center text-success">
                                    <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                    Active
                                </div>
                            </td>
                            <td data-tw-merge=""
                                class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                <div class="flex items-center justify-center">
                                    <a class="mr-3 flex items-center" href="#">
                                        <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                        Edit
                                    </a>
                                    <a class="flex items-center text-danger" data-tw-toggle="modal"
                                        data-tw-target="#delete-confirmation-modal" href="#">
                                        <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i>
                                        Suspend
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="intro-y col-span-12 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                <nav class="w-full sm:mr-auto sm:w-auto">
                    <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                    data-tw-merge="" data-lucide="chevrons-left" class="stroke-1.5 h-4 w-4"></i></a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                    data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                    data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></a>
                        </li>
                        <li class="flex-1 sm:flex-initial">
                            <a data-tw-merge=""
                                class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                    data-tw-merge="" data-lucide="chevrons-right" class="stroke-1.5 h-4 w-4"></i></a>
                        </li>
                    </ul>
                </nav>
                <select data-tw-merge=""
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 !box mt-3 w-20 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
        </div>

        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="delete-confirmation-modal"
            class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge=""
                class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                <div class="p-5 text-center">
                    <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mx-auto mt-3 h-16 w-16 text-danger"></i>
                    <div class="mt-5 text-3xl">Are you sure?</div>
                    <div class="mt-2 text-slate-500">
                        Do you really want to delete these records? <br>
                        This process cannot be undone.
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button data-tw-merge="" data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24">Cancel</button>
                    <button data-tw-merge="" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24">Delete</button>
                </div>
            </div>
        </div>
    </div>



    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="superlarge-modal-size-preview"
        class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
        <div data-tw-merge=""
            class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[600px] lg:w-[900px] p-10">
            <form action="{{ route('setting.general.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <h4 for="crud-form-1" class="inline-block mb-2">Profile Akun</h4>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Nama Lengkap</label>
                    <input id="crud-form-1" type="text" name="username" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Username</label>
                    <input id="crud-form-1" type="text" name="username" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Email</label>
                    <input id="crud-form-1" type="text" name="username" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Password</label>
                    <input id="crud-form-1" type="text" name="username" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>
                <div class="mt-5">
                    <h4 for="crud-form-1" class="inline-block mb-2">Akun Pembayaran</h4>
                </div>
                <div class="mt-2">
                    <label for="crud-form-1" class="inline-block mb-2">Pembayaran</label>
                    <select name="" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        <option value="">Pilih Bank</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Nama Akun Pembayaran</label>
                    <input id="crud-form-1" type="text" name="username" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="inline-block mb-2">Nomor Akun Pembayaran</label>
                    <input id="crud-form-1" type="number" name="username" class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                </div>
                <div class="mt-5 text-right">
                    <button type="submit" class="bg-primary text-white w-24 py-2 px-3 rounded-md">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
