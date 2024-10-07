@extends('layouts.app')

@section('content')
    <div
        class="max-w-full md:max-w-none rounded-[30px] md:rounded-none px-4 md:px-[22px] min-w-0 min-h-screen bg-slate-100 flex-1 md:pt-20 pb-10 mt-5 md:mt-1 relative dark:bg-darkmode-700 before:content-[''] before:w-full before:h-px before:block">
        <div class="intro-y mt-8 flex flex-col items-center sm:flex-row">
            <h2 class="mr-auto text-lg font-medium">Add New Post</h2>
        </div>
        <form action="{{ route('promotion.store') }}" method="POST" enctype="multipart/form-data">
            <div class="intro-y mt-5 grid grid-cols-12 gap-5">
                @csrf
                <div class="intro-y col-span-12 lg:col-span-8">
                    <input data-tw-merge="" name="title" type="text" placeholder="Title"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 intro-y !box px-4 py-3 pr-10">
                    <div class="intro-y box mt-5 overflow-hidden">
                        <ul data-tw-merge="" role="tablist"
                            class="border-b w-full flex flex-col border-transparent bg-slate-200 dark:border-transparent dark:bg-darkmode-800 sm:flex-row">
                            <li id="content-tab" data-tw-merge="" role="presentation"
                                class="focus-visible:outline-none -mb-px">
                                <button data-tw-merge="" data-tw-target="#content" role="tab"
                                    class="cursor-pointer appearance-none border border-transparent dark:text-slate-400 [&.active]:dark:text-white rounded-t-md dark:border-transparent [&.active]:bg-white [&.active]:font-medium [&.active]:dark:border-b-darkmode-600 [&:not(.active)]:dark:hover:border-transparent active flex items-center justify-center w-full px-0 py-0 sm:w-40 text-slate-500 [&:not(.active)]:hover:border-transparent [&:not(.active)]:hover:bg-transparent [&:not(.active)]:hover:text-slate-600 [&:not(.active)]:hover:dark:bg-transparent [&:not(.active)]:hover:dark:text-slate-300 [&.active]:text-primary [&.active]:border-transparent [&.active]:dark:bg-darkmode-600 [&.active]:dark:border-x-transparent [&.active]:dark:border-t-transparent"><span
                                        data-placement="top" title="Fill in the article content" aria-controls="content"
                                        aria-selected="true"
                                        class="tooltip cursor-pointer flex w-full items-center justify-center py-4"><i
                                            data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Content</span></button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div data-transition="" data-selector=".active"
                                data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                data-enter-to="visible opacity-100"
                                data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                data-leave-from="visible opacity-100"
                                data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="content" role="tabpanel"
                                aria-labelledby="content-tab" class="tab-pane active p-5">
                                <div class="rounded-md border border-slate-200/60 p-5 dark:border-darkmode-400">
                                    <div
                                        class="flex items-center border-b border-slate-200/60 pb-5 font-medium dark:border-darkmode-400">
                                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                        Text
                                        Content
                                    </div>
                                    <div class="mt-5">
                                        <textarea class="editor" name="editor">

                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-4">
                    <div class="intro-y box p-5">
                        <div data-tw-merge="" class="flex mt-3 flex-col items-start">
                            <label for="" class="inline-block mb-2">Persentasi Bonus</label>
                            <input type="text" name="bonus_percentage"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        </div>
                        <div data-tw-merge="" class="flex mt-3 flex-col items-start">
                            <label for="" class="inline-block mb-2">Minimal Deposit</label>
                            <input type="text" name="min_deposit"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        </div>
                        <div data-tw-merge="" class="flex mt-3 flex-col items-start">
                            <label for="" class="inline-block mb-2">Max Deposit</label>
                            <input type="text" name="max_deposit"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        </div>
                        <div data-tw-merge="" class="flex mt-3 flex-col items-start">
                            <label for="" class="inline-block mb-2">Turn Over</label>
                            <input type="text" name="turn_over"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        </div>
                        <div data-tw-merge="" class="flex mt-3 flex-col items-start">
                            <label for="" class="inline-block mb-2">Thumbnail</label>
                            <input type="file" name="thumbnail"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" required>
                        </div>
                        <div data-tw-merge="" class="flex mt-3 flex-col items-start"><label data-tw-merge=""
                                for="post-form-5" class="cursor-pointer mb-2 ml-0">Status</label>
                            <input data-tw-merge="" name="status" type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 w-[38px] h-[24px] p-px rounded-full relative before:w-[20px] before:h-[20px] before:shadow-[1px_1px_3px_rgba(0,0,0,0.25)] before:transition-[margin-left] before:duration-200 before:ease-in-out before:absolute before:inset-y-0 before:my-auto before:rounded-full before:dark:bg-darkmode-600 checked:bg-primary checked:border-primary checked:bg-none before:checked:ml-[14px] before:checked:bg-white"
                                id="post-form-5">
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="bg-primary text-white w-24 py-2 px-3 rounded-md">Save</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        (() => {
            (function() {
                "use strict";
                $(".editor").each(function() {
                    let editorElement = this;
                    ClassicEditor
                        .create(editorElement, {
                            ckfinder: {
                                uploadUrl: '{{ route('posts.uploadImage') }}?_token={{ csrf_token() }}'
                            }
                        })
                        .catch((error) => {
                            console.error(error);
                        });
                });
            })();
        })();
    </script>
@endsection
