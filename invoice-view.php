<?php
include './database/config.php';
include './database/common.php';
include './handlers/invoice/getInvoice.php';
$id = $_GET['id'];
$invoices = getAllInvoiceDataById($pdo, $id);
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
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center justify-between py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                    Invoice
                </h2>

                <div class="flex">
                    <button @click="window.print()"
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                        </svg>
                    </button>
                    <button
                        class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="card px-5 py-12 sm:px-18">
                    <div class="flex flex-col justify-between sm:flex-row">
                        <?php
                        include './components/invoice/invoice_view_head.php'
                            ?>
                        <div class="mt-4 text-center sm:m-0 sm:text-right">
                            <h2 class="text-2xl font-semibold uppercase text-primary dark:text-accent-light">
                                invoice
                            </h2>
                            <div class="space-y-1 pt-2">
                                <p>Invoice #: <span class="font-semibold"><?php echo $id ?></span></p>
                                <p>
                                    Created: <span class="font-semibold">June 23, 2021</span>
                                </p>
                                <p>Due: <span class="font-semibold"> July 23, 2021</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="text-center sm:text-left">
                            <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                                Invoiced To:
                            </p>
                            <div class="space-y-1 pt-2">
                                <p class="font-semibold">John Doe</p>
                                <p>johndoe@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                        <table class="is-zebra w-full text-left">
                            <thead>
                                <?php
                                include './components/invoice/invoice_table_head_crud.php'
                                ?>
                            </thead>
                            <tbody>
                                <?php foreach ($invoices as $invoice): ?>
                                <tr>
                                    <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">
                                        <?php echo $invoice['invoice_index_id'] ?>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div>
                                            <p class="font-medium text-slate-600 dark:text-navy-100">
                                            <?php echo $invoice['invoice_name'] ?>
                                            </p>
                                            <p class="text-xs+">
                                            <?php echo $invoice['invoice_description'] ?>
                                            </p>
                                        </div>
                                    </td>
                                    <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    <?php echo $invoice['invoice_price'] ?>
                                    </td>
                                    <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
                                    <?php echo $invoice['invoice_hours'] ?>
                                    </td>
                                    <td
                                        class="w-3/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-right font-semibold sm:px-5">
                                        <?php echo $invoice['invoice_subtotal'] ?>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>

                    <div class="flex flex-col justify-end sm:flex-row">
                        <div class="mt-4 text-center sm:m-0 sm:text-right">
                            <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                                Total:
                            </p>
                            <div class="space-y-1 pt-2">
                                <p>Summary : <span class="font-medium">$7320</span></p>
                                <p>Discount : <span class="font-medium">$20</span></p>
                                <!-- <p>Tax : <span class="font-medium">20%</span></p> -->
                                <p class="text-lg text-primary dark:text-accent-light">
                                    Total: <span class="font-medium">8780</span>
                                </p>
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