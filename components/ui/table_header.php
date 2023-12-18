<?php
function tableHeader($headerTitle, $createButtonName)
{
    ob_start(); // Start output buffering
    include "./components/ui/table_search.php"; // Include PHP file and buffer the output
    $tableSearch = ob_get_clean(); // Get the buffered content and clean the buffer

    return '
    <div class="flex items-center justify-between">
        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            ' . $headerTitle . '
        </h2>
        <div class="flex">
            ' . $tableSearch . '
            <button @click="isFilterExpanded = !isFilterExpanded"
                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18 11.5H6M21 4H3m6 15h6"></path>
                </svg>
            </button>
            <button class="btn bg-primary font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                <a href="./invoice-create">' . $createButtonName . '</a>
            </button>
        </div>
    </div>';
}

?>