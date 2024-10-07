<nav class="side-nav z-50 -mt-4 hidden w-[100px] overflow-x-hidden px-5 pb-16 pt-32 md:block xl:w-[260px]">
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>
        <li class="side-nav__divider my-6"></li>
        <li>
            <a href="{{ route('member.list') }}" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="users" class="lucide lucide-users stroke-1.5 w-5 h-5 mx-auto block"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="side-menu__title">
                    Member
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="shopping-cart" class="lucide lucide-shopping-cart stroke-1.5 w-5 h-5 mx-auto block"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg>
                </div>
                <div class="side-menu__title">
                    Transaksi
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('deposit.list') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Deposit
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('withdraw.list') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Withdraw
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-crud-form-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Bonus
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="book-open" class="lucide lucide-book-open stroke-1.5 w-5 h-5 mx-auto block"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                </div>
                <div class="side-menu__title">
                    Promosi
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('bannerpromotion.list') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Banner Promosi
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('promotion.list') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Promosi
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="side-nav__divider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="bar-chart2" class="lucide lucide-bar-chart2 stroke-1.5 w-5 h-5 mx-auto block"><line x1="18" x2="18" y1="20" y2="10"></line><line x1="12" x2="12" y1="20" y2="4"></line><line x1="6" x2="6" y1="20" y2="14"></line></svg>
                </div>
                <div class="side-menu__title">
                    Pembayaran
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('paymentaccount.list') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Akun Pembayaran
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('payment.list') }}" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Pembayaran
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <i data-tw-merge="" data-lucide="edit" class="stroke-1.5 w-5 h-5"></i>
                </div>
                <div class="side-menu__title">
                    BO
                    <div class="side-menu__sub-icon ">
                        <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="enigma-side-menu-crud-data-list-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Provider
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-crud-form-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Game
                        </div>
                    </a>
                </li>
                <li>
                    <a href="enigma-side-menu-crud-form-page.html" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                        </div>
                        <div class="side-menu__title">
                            Tipe Game
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="enigma-side-menu-inbox-page.html" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="key" class="lucide lucide-key stroke-1.5 w-5 h-5 mx-auto block"><circle cx="7.5" cy="15.5" r="5.5"></circle><path d="m21 2-9.6 9.6"></path><path d="m15.5 7.5 3 3L22 7l-3-3"></path></svg>
                </div>
                <div class="side-menu__title">
                    API
                </div>
            </a>
        </li>

        <li>
            <a href="{{ route('setting.general') }}" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layers" class="lucide lucide-layers stroke-1.5 w-5 h-5 mx-auto block"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path></svg>
                </div>
                <div class="side-menu__title">
                    Pengaturan
                </div>
            </a>
        </li>
    </ul>
</nav>
