@extends('layouts.app')
@section('content')
    <div class="col-span-12 mt-8">
        <div class="intro-y flex h-10 items-center">
            <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
        </div>
        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                    <div class="box p-5">
                        <div class="mt-6 text-3xl font-medium leading-8">4.710</div>
                        <div class="mt-1 text-base text-slate-500">Total Member</div>
                    </div>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                    <div class="box p-5">
                        <div class="mt-6 text-3xl font-medium leading-8">3.721</div>
                        <div class="mt-1 text-base text-slate-500">Total Deposit</div>
                    </div>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                    <div class="box p-5">
                        <div class="mt-6 text-3xl font-medium leading-8">2.149</div>
                        <div class="mt-1 text-base text-slate-500">
                            Total Withdraw
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                <div
                    class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                    <div class="box p-5">
                        <div class="mt-6 text-3xl font-medium leading-8">152.040</div>
                        <div class="mt-1 text-base text-slate-500">
                            Total Keuntungan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
