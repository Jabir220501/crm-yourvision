<div x-data="{isFilterExpanded:false}">
<div class="flex items-center justify-between">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Client List
        </h2>
        <div class="flex">
            <button @click="isFilterExpanded = !isFilterExpanded"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18 11.5H6M21 4H3m6 15h6"></path>
                </svg>
            </button>
            <div x-data="{showModal:false}">
        <button @click="showModal = true"
            class="btn space-x-2 bg-primary font-medium text-white shadow-lg shadow-primary/50 hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:shadow-accent/50 dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-50" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <span> Add New Client </span>
        </button>
        <?php
        include './components/client/create_client_modal.php'
            ?>
    </div>
        </div>
    </div>
    <?php
    include './components/invoice/invoice_table_filter.php';
        ?>
    <div class="card mt-3">
        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
            <table class="is-hoverable w-full text-left">
                <?php
                include './components/client/client_table_head.php';
                include './components/client/client_table_body.php'
                    ?>

            </table>
        </div>

        <?php
        echo generatePagination(1, 3);
        ?>
    </div>
</div>