<?php
include './database/config.php';
include './database/common.php';
include './components/ui/inputField.php';
include './handlers/client/getClient.php';
include './handlers/project/getProject.php';
include './handlers/invoice/getInvoice.php';
$clients = getAllClientData($pdo);
$projects = getAllProjectData($pdo);
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
                    Create Invoice
                </h2>
            </div>
            <form action="./handlers/invoice/createInvoice.php" method="post">
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
                                    <p>Invoice: #<span class="font-semibold"><?php
                                    $lastInvoiceId = getLastInvoiceId($pdo);

                                    if (!empty($lastInvoiceId)) {
                                        $lastID;
                                        echo  $lastID;
                                    } else {
                                        echo "1";
                                    }
                                    ?></span></p>
                                    <p>Due: <span class="font-semibold"> <label class="relative flex">
                                                <input x-init="$el._x_flatpickr = flatpickr($el)"
                                                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                                    placeholder="Choose date..." type="text" name="invoice_date"
                                                    required />
                                                <span
                                                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-5 w-5 transition-colors duration-200" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </span>
                                            </label></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>
                        <div class="flex flex-col justify-between sm:flex-row">
                            <div class="text-center sm:text-left" style="width: 250px;">
                                <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
                                    Invoiced To:
                                </p>
                                <div class="space-y-1 pt-2">
                                    <span>Client</span>
                                    <select class="mt-1.5 w-full placeholder:text-slate-400/70" name="invoice_client"
                                        x-init="$el._tom = new Tom($el,{create: true,sortField: {field: 'text',direction: 'asc'}})"
                                        required>
                                        <?php foreach ($clients as $client): ?>
                                            <option>Choose Client</option>
                                            <option value="<?php echo $client['client_id']; ?>">
                                                <?php echo $client['client_name']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="space-y-1 pt-2 mt-4">
                                    <span>Project</span>
                                    <select class="mt-1.5 w-full placeholder:text-slate-400/70" name="invoice_project"
                                        x-init="$el._tom = new Tom($el,{create: true,sortField: {field: 'text',direction: 'asc'}})"
                                        required>
                                        <?php foreach ($projects as $project): ?>
                                            <option>Choose Project</option>
                                            <option value="<?php echo $project['project_id']; ?>">
                                                <?php echo $project['project_name']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>

                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                            <table class="is-zebra w-full text-left">
                                <thead>
                                    <tr>
                                        <th
                                            class="whitespace-nowrap rounded-l-lg bg-slate-200 px-3 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            #
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            DESCRIPTION
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            PRICE
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            HRS
                                        </th>
                                        <th
                                            class="whitespace-nowrap rounded-r-lg bg-slate-200 px-3 py-3 text-right font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            SUBTOTAL
                                        </th>
                                    </tr>
                                </thead>

                                <?php
                                include './components/invoice/invoice_create_table_body.php'
                                    ?>
                            </table>

                            <div class="flex flex-row justify-between">
                                <div class="pt-2">
                                    <div onclick="addRow()"
                                        class="btn bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                                        Add Item
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <button type="submit"
                                        class="btn bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                                        Create Invoice
                                    </button>
                                    </d>
                                </div>
                            </div>

                            <div class="my-7 h-px bg-slate-200 dark:bg-navy-500"></div>

                            <?php
                            include 'components/invoice/invoice_create_table_footer.php'
                                ?>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    updateTotal();
                                });
                            </script>
                        </div>
                    </div>
            </form>
        </main>
    </div>
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

</html>