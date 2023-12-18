<?php
include './database/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

        <?php
    include './components/head/head_title.php';
    dynamicTitle($pdo, 'CRM Analytics Dashboard');
    ?>
    <?php
    include './components/head/head_favicon.php'
        ?>

    <!-- CSS Assets -->
    <?php
    include './components/head/head_link.php'
        ?>

    <!-- Javascript Assets -->
    <?php
    include './components/head/head_script.php'
        ?>

    <!-- Fonts -->
    <!-- Javascript Assets -->
    <?php
    include './components/head/head_fonts.php'
        ?>

</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <!-- Sidebar -->
        <?php
        include "./components/sidebar/sidebar.php"
            ?>

        <!-- App Header Wrapper-->
        <?php
        include "./components/header/header.php"
            ?>

        <!-- Mobile Searchbar -->
        <?php
        include "./components/header/mobile_searchbar.php"
            ?>

        <!-- Right Sidebar -->
        <?php
        include "./components/header/right_sidebar.php"
            ?>

        <!-- Main Content Wrapper -->
        <main class="main-content w-full pb-8">
            <div class="mt-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
                <div
                    class="mt-6 flex flex-col items-center justify-between space-y-2 text-center sm:flex-row sm:space-y-0 sm:text-left">
                    <div>
                        <h3 class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                            Your Meetings
                        </h3>
                        <p class="mt-1 hidden sm:block">Recent meetings in your team</p>
                    </div>
                    <button
                        class="btn space-x-2 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:shadow-accent/50 dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-50" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        <span> New Meeting </span>
                    </button>
                </div>
                <div class="mt-4">
                    <h3 class="text-base font-medium text-slate-600 dark:text-navy-100">
                        Today
                    </h3>
                    <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
                        <div class="card justify-between bg-primary p-4 dark:bg-accent sm:p-5">
                            <div class="flex items-center space-x-3 text-white">
                                <img class="h-10 w-10 shrink-0 rounded-lg object-cover"
                                    src="./assets/images/200x200.png" alt="image" />
                                <div>
                                    <h3 class="text-base font-medium">Product Roadmap Q4</h3>
                                    <p class="text-xs text-indigo-100">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-xs+ text-indigo-100">Today</p>
                                <p class="text-xl font-medium text-white">11:30 - 13:00</p>
                                <div class="badge mt-2 rounded-full bg-white/20 text-white">
                                    13 Members
                                </div>
                                <div class="mt-5 flex items-center justify-between space-x-2">
                                    <div class="flex -space-x-3">
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <img class="rounded-full ring-1 ring-primary dark:ring-accent"
                                                src="./assets/images/200x200.png" alt="avatar" />
                                        </div>
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <div
                                                class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring-1 ring-primary dark:ring-accent">
                                                qa
                                            </div>
                                        </div>
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <img class="rounded-full ring-1 ring-primary dark:ring-accent"
                                                src="./assets/images/200x200.png" alt="avatar" />
                                        </div>
                                    </div>
                                    <button
                                        class="btn h-8 w-8 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 sm:mt-5 lg:mt-6">
                    <h3 class="text-base font-medium text-slate-600 dark:text-navy-100">
                        This week
                    </h3>
                    <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
                        <div class="card justify-between p-4 sm:p-5">
                            <div class="flex items-center space-x-4">
                                <img class="h-10 w-10 shrink-0 rounded-lg object-cover"
                                    src="./assets/images/600x400.png" alt="image" />
                                <div>
                                    <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                        Sales Presentation
                                    </h3>
                                    <p class="text-xs">Iure odio placeat temporibus.</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-xs+">Tomorrow</p>
                                <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                                    11:30 - 12:00
                                </p>
                                <div
                                    class="badge mt-2 bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                    7 Members
                                </div>
                                <div class="mt-5 flex items-center justify-between space-x-2">
                                    <div class="flex -space-x-3">
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                src="./assets/images/200x200.png" alt="avatar" />
                                        </div>
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <div
                                                class="is-initial rounded-full bg-error text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                                yt
                                            </div>
                                        </div>
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                src="./assets/images/200x200.png" alt="avatar" />
                                        </div>
                                    </div>
                                    <button
                                        class="btn h-8 w-8 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 sm:mt-5 lg:mt-6">
                    <h3 class="text-base font-medium text-slate-600 dark:text-navy-100">
                        This month
                    </h3>
                    <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6">
                        <div class="card justify-between p-4 sm:p-5">
                            <div class="flex items-center space-x-4">
                                <img class="h-10 w-10 shrink-0 rounded-lg object-cover"
                                    src="./assets/images/illustrations/dashboard-meet-dark.svg" alt="image" />
                                <div>
                                    <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                        New App Analysis
                                    </h3>
                                    <p class="text-xs">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <p class="text-xs+">Mon, June 18, 2022</p>
                                <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                                    08:00 - 09:00
                                </p>
                                <div
                                    class="badge mt-2 bg-primary/10 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                    10 Members
                                </div>
                                <div class="mt-5 flex items-center justify-between space-x-2">
                                    <div class="flex -space-x-3">
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                src="./assets/images/200x200.png" alt="avatar" />
                                        </div>
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <div
                                                class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                                cv
                                            </div>
                                        </div>
                                        <div class="avatar h-8 w-8 hover:z-10">
                                            <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                src="./assets/images/200x200.png" alt="avatar" />
                                        </div>
                                    </div>
                                    <button
                                        class="btn h-8 w-8 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-45" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

</html>