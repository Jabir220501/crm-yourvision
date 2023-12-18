<div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
    <div
        class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700">
        <?php
        include './components/sidebar/sidebar_profile_popup_head.php'
            ?>
        <div class="flex flex-col pt-2 pb-5">
            <?php
            include './components/sidebar/sidebar_profile_popup_body.php'
                ?>
            <div class="mt-3 px-4">
                <button onclick="window.location.href = './handlers/auth/logoutUser.php'"
                    class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Logout</span>
                </button>
            </div>
        </div>
    </div>
</div>