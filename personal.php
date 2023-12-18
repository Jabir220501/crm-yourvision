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
          class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6"
        >
          <div
            class="col-span-12 space-y-4 sm:space-y-5 lg:col-span-8 lg:space-y-6"
          >
            <div
              class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5 lg:gap-6"
            >
              <div
                class="card bg-gradient-to-r from-blue-500 to-indigo-600 px-5 pb-5"
              >
                <div>
                  <div class="ax-transparent-gridline mt-5 w-1/2">
                    <div
                      x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.earningWhite); $el._x_chart.render() });"
                    ></div>
                  </div>
                  <p
                    class="mt-3 text-base font-medium tracking-wide text-indigo-100"
                  >
                    Earnings
                  </p>
                  <p class="mt-4 font-inter text-2xl font-semibold">
                    <span class="text-indigo-100">$</span>
                    <span class="text-white">31.313</span>
                  </p>
                  <div
                    class="badge mt-2 rounded-full bg-black/20 text-indigo-50"
                  >
                    13 Members
                  </div>
                </div>
                <div
                  class="absolute bottom-0 right-0 overflow-hidden rounded-lg"
                >
                  <img
                    class="w-24 translate-x-1/4 translate-y-1/4 opacity-50"
                    src="./assets/images/illustrations/the-dollar.svg"
                    alt="image"
                  />
                </div>
              </div>
              <div
                class="grid grid-cols-1 gap-4 sm:col-span-2 sm:grid-cols-2 sm:gap-5 lg:gap-6"
              >
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        56
                      </p>
                      <p class="text-xs+ line-clamp-1">Projects</p>
                    </div>
                    <div
                      class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-success"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <div
                      class="badge mt-2 space-x-1 bg-success/10 py-1 px-1.5 text-success dark:bg-success/15"
                    >
                      <span>10%</span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-3.5 w-3.5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        324
                      </p>
                      <p class="text-xs+ line-clamp-1">Total hours</p>
                    </div>
                    <div
                      class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-info"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <div
                      class="badge mt-2 space-x-1 bg-success/10 py-1 px-1.5 text-success dark:bg-success/15"
                    >
                      <span>6%</span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-3.5 w-3.5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        7
                      </p>
                      <p class="text-xs+ line-clamp-1">Support Ticket</p>
                    </div>
                    <div
                      class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-secondary"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"
                        />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <div
                      class="badge mt-2 space-x-1 bg-success/10 py-1 px-1.5 text-success dark:bg-success/15"
                    >
                      <span>9%</span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-3.5 w-3.5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="card justify-center p-4.5">
                  <div class="flex items-center justify-between">
                    <div>
                      <p
                        class="text-base font-semibold text-slate-700 dark:text-navy-100"
                      >
                        56
                      </p>
                      <p class="text-xs+ line-clamp-1">Active Task</p>
                    </div>
                    <div
                      class="mask is-star flex h-10 w-10 shrink-0 items-center justify-center bg-warning"
                    >
                      <svg
                        class="h-5 w-5 text-white"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M12.5293 18L20.9999 8.40002"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M3 13.2L7.23529 18L17.8235 6"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <div
                      class="badge mt-2 space-x-1 bg-error/10 py-1 px-1.5 text-error dark:bg-error/15"
                    >
                      <span>6%</span>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-3.5 w-3.5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="flex items-center justify-between">
                <h2
                  class="text-sm+ font-medium tracking-wide text-slate-700 dark:text-navy-100"
                >
                  Ongoing Projects
                </h2>
                <div
                  x-data="usePopper({placement:'bottom-end',offset:4})"
                  @click.outside="isShowPopper && (isShowPopper = false)"
                  class="inline-flex"
                >
                  <button
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                      />
                    </svg>
                  </button>

                  <div
                    x-ref="popperRoot"
                    class="popper-root"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-navy-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-3 space-y-3.5">
                <div class="card p-3">
                  <div class="flex items-center space-x-3">
                    <img
                      class="h-10 w-10 rounded-lg object-cover object-center"
                      src="./assets/images/illustrations/lms-ui.svg"
                      alt="image"
                    />
                    <div class="flex-1">
                      <div class="flex justify-between">
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          LMS App Design
                        </p>
                      </div>
                      <div
                        class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300"
                      >
                        <p>Updated at 7 Sep</p>
                        <div
                          class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"
                        ></div>

                        <p class="hidden sm:flex">Deadline: 25.08.2020</p>
                      </div>
                    </div>
                  </div>
                  <p
                    class="-mt-3 text-right text-xs font-medium text-primary dark:text-accent-light"
                  >
                    24%
                  </p>
                  <div
                    class="progress mt-2 h-1.5 bg-slate-150 dark:bg-navy-500"
                  >
                    <div
                      class="is-active relative w-4/12 overflow-hidden rounded-full bg-primary dark:bg-accent"
                    ></div>
                  </div>
                </div>
                <div class="card p-3">
                  <div class="flex items-center space-x-3">
                    <img
                      class="h-10 w-10 rounded-lg object-cover object-center"
                      src="./assets/images/illustrations/store-ui.svg"
                      alt="image"
                    />
                    <div class="flex-1">
                      <div class="flex justify-between">
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Store Dashboard
                        </p>
                      </div>
                      <div
                        class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300"
                      >
                        <p>Updated a hour ago</p>
                        <div
                          class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"
                        ></div>

                        <p class="hidden sm:flex">Deadline: 21.08.2020</p>
                      </div>
                    </div>
                  </div>
                  <p
                    class="-mt-3 text-right text-xs font-medium text-secondary dark:text-secondary-light"
                  >
                    56%
                  </p>

                  <div
                    class="progress mt-2 h-1.5 bg-secondary/15 dark:bg-secondary-light/25"
                  >
                    <div class="w-6/12 rounded-full bg-secondary"></div>
                  </div>
                </div>
                <div class="card p-3">
                  <div class="flex items-center space-x-3">
                    <img
                      class="h-10 w-10 rounded-lg object-cover object-center"
                      src="./assets/images/illustrations/chat-ui.svg"
                      alt="image"
                    />
                    <div class="flex-1">
                      <div class="flex justify-between">
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Chat Mobile App
                        </p>
                      </div>
                      <div
                        class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300"
                      >
                        <p>Updated 3 days ago</p>
                        <div
                          class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"
                        ></div>

                        <p class="hidden sm:flex">Deadline: 16.09.2020</p>
                      </div>
                    </div>
                  </div>
                  <p class="-mt-3 text-right text-xs font-medium text-warning">
                    64%
                  </p>

                  <div
                    class="progress mt-2 h-1.5 bg-warning/15 dark:bg-warning/25"
                  >
                    <div class="w-7/12 rounded-full bg-warning"></div>
                  </div>
                </div>
                <div class="card p-3">
                  <div class="flex items-center space-x-3">
                    <img
                      class="h-10 w-10 rounded-lg object-cover object-center"
                      src="./assets/images/illustrations/nft.svg"
                      alt="image"
                    />
                    <div class="flex-1">
                      <div class="flex justify-between">
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          NFT Marketplace App
                        </p>
                      </div>
                      <div
                        class="mt-0.5 flex text-xs text-slate-400 dark:text-navy-300"
                      >
                        <p>Updated a week ago</p>
                        <div
                          class="mx-2 my-1 hidden w-px bg-slate-200 dark:bg-navy-500 sm:flex"
                        ></div>

                        <p class="hidden sm:flex">Deadline: 26.11.2020</p>
                      </div>
                    </div>
                  </div>
                  <p class="-mt-3 text-right text-xs font-medium text-info">
                    14%
                  </p>

                  <div class="progress mt-2 h-1.5 bg-info/15 dark:bg-info/25">
                    <div class="w-2/12 rounded-full bg-info"></div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class=" grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6"
            >
              <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                  <h2
                    class="font-medium tracking-wide text-slate-700 dark:text-navy-100"
                  >
                    Recent Payments
                  </h2>
                  <a
                    href="#"
                    class="border-b border-dotted border-current pb-0.5 text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70"
                    >View All</a
                  >
                </div>
                <div class="space-y-3.5">
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="./assets/images/200x200.png"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Konnor Guzman
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 21, 2021 - 08:05
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $660.22
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="./assets/images/200x200.png"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Henry Curtis
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 19, 2021 - 11:55
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $33.63
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="./assets/images/200x200.png"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Derrick Simmons
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 16, 2021 - 14:45
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $674.63
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="./assets/images/200x200.png"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Kartina West
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 13, 2021 - 11:30
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $547.63
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="./assets/images/200x200.png"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Samantha Shelton
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 10, 2021 - 09:41
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $736.24
                    </p>
                  </div>
                  <div class="flex cursor-pointer items-center justify-between">
                    <div class="flex items-center space-x-3.5">
                      <div class="avatar">
                        <img
                          class="rounded-full"
                          src="./assets/images/200x200.png"
                          alt="avatar"
                        />
                      </div>
                      <div>
                        <p
                          class="font-medium text-slate-700 dark:text-navy-100"
                        >
                          Joe Perkins
                        </p>
                        <p
                          class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300"
                        >
                          Dec 06, 2021 - 11:41
                        </p>
                      </div>
                    </div>
                    <p class="font-medium text-slate-600 dark:text-navy-100">
                      $736.24
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-4">
            <div
              class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-1 lg:gap-6"
            >
              <div class="card">
                <div
                  class="mt-3 flex h-8 items-center justify-between px-4 sm:px-5"
                >
                  <h2
                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
                  >
                    Income
                  </h2>

                  <div
                    x-data="usePopper({placement:'bottom-end',offset:4})"
                    @click.outside="isShowPopper && (isShowPopper = false)"
                    class="inline-flex"
                  >
                    <button
                      x-ref="popperRef"
                      @click="isShowPopper = !isShowPopper"
                      class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                        />
                      </svg>
                    </button>

                    <div
                      x-ref="popperRoot"
                      class="popper-root"
                      :class="isShowPopper && 'show'"
                    >
                      <div
                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                      >
                        <ul>
                          <li>
                            <a
                              href="#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Action</a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Another Action</a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Something else</a
                            >
                          </li>
                        </ul>
                        <div
                          class="my-1 h-px bg-slate-150 dark:bg-navy-500"
                        ></div>
                        <ul>
                          <li>
                            <a
                              href="#"
                              class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                              >Separated Link</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ax-transparent-gridline pr-2">
                  <div
                    x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.incomePersonal); $el._x_chart.render() });"
                  ></div>
                </div>
              </div>
              <div class="card p-4">
                <div class="space-y-1 text-center font-inter text-xs+">
                  <div class="flex items-center justify-between px-2 pb-4">
                    <p class="font-medium text-slate-700 dark:text-navy-100">
                      January 2022
                    </p>
                    <div class="-mr-1.5 flex space-x-2">
                      <button
                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M15 19l-7-7 7-7"
                          />
                        </svg>
                      </button>
                      <button
                        class="btn h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-5 w-5"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M9 5l7 7-7 7"
                          />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="grid grid-cols-7 pb-2">
                    <div
                      class="text-tiny+ font-semibold text-primary dark:text-accent-light"
                    >
                      SUN
                    </div>
                    <div
                      class="text-tiny+ font-semibold text-primary dark:text-accent-light"
                    >
                      MON
                    </div>
                    <div
                      class="text-tiny+ font-semibold text-primary dark:text-accent-light"
                    >
                      TUE
                    </div>
                    <div
                      class="text-tiny+ font-semibold text-primary dark:text-accent-light"
                    >
                      WED
                    </div>
                    <div
                      class="text-tiny+ font-semibold text-primary dark:text-accent-light"
                    >
                      THU
                    </div>
                    <div
                      class="text-tiny+ font-semibold text-primary dark:text-accent-light"
                    >
                      FRY
                    </div>
                    <div
                      class="text-tiny+ font-semibold text-primary dark:text-accent-light"
                    >
                      SAT
                    </div>
                  </div>
                  <div class="grid grid-cols-7 place-items-center">
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      29
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      30
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      31
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      1
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      2
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      3
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      4
                    </button>
                  </div>
                  <div class="grid grid-cols-7 place-items-center">
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      5
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      6
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      7
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      8
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      9
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      10
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      11
                    </button>
                  </div>
                  <div class="grid grid-cols-7 place-items-center">
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      12
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      13
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl font-medium text-primary hover:bg-primary/10 hover:text-primary dark:text-accent-light dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      14
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      15
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      16
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      17
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      18
                    </button>
                  </div>
                  <div class="grid grid-cols-7 place-items-center">
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      19
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      20
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      21
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      22
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      23
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      24
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      25
                    </button>
                  </div>
                  <div class="grid grid-cols-7 place-items-center">
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      26
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      27
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      28
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      29
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-900 hover:bg-primary/10 hover:text-primary dark:text-navy-100 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      30
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      1
                    </button>
                    <button
                      class="flex h-7 w-9 items-center justify-center rounded-xl text-slate-400 hover:bg-primary/10 hover:text-primary dark:text-navy-300 dark:hover:bg-accent-light/10 dark:hover:text-accent-light"
                    >
                      2
                    </button>
                  </div>
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