<div class="col-span-12 lg:col-span-8">
    <div class="card">
        <div
            class="flex flex-col items-center space-y-4 border-b border-slate-200 p-4 dark:border-navy-500 sm:flex-row sm:justify-between sm:space-y-0 sm:px-5">
            <h2 class="text-lg font-medium tracking-wide text-slate-700 dark:text-navy-100">
                Account Setting
            </h2>
            <div class="flex justify-center space-x-2">
                <button
                    class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                    Cancel
                </button>
                <button
                    class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Save
                </button>
            </div>
        </div>
        <div class="p-4 sm:p-5">
            <div class="flex flex-col">
                <span class="text-base font-medium text-slate-600 dark:text-navy-100">Avatar</span>
                <div class="avatar mt-1.5 h-20 w-20">
                    <img class="mask is-squircle" src="./assets/images/200x200.png" alt="avatar" />
                    <div
                        class="absolute bottom-0 right-0 flex items-center justify-center rounded-full bg-white dark:bg-navy-700">
                        <button
                            class="btn h-6 w-6 rounded-full border border-slate-200 p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:border-navy-500 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <?php
                echo inputField('Name', 'Enter name', 'fa-regular fa-user text-base', 'text', $userData['username']);
                echo inputField('Company', 'Enter using for', 'fa-regular fa-user text-base', 'text', "Your Vision");
                echo inputField('Email Address', 'Enter email address', 'fa-regular fa-envelope text-base', 'email', $userData['email']);
                echo inputField('Phone Number', 'Enter phone number', 'fa fa-phone', 'number', "");
                ?>
            </div>
        </div>
    </div>
</div>