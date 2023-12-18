<div x-data="{isFilterExpanded:false}">
    <?php
    echo tableHeader("Invoice List", "Create Invoice");
    include './components/invoice/invoice_table_filter.php';
    ?>
    <div class="card mt-3">
        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
            <table class="is-hoverable w-full text-left">
                <?php
                include './components/invoice/invoice_table_head.php';
                include './components/invoice/invoice_table_body.php'
                    ?>

            </table>
        </div>

        <?php
        echo generatePagination(1, 3);
        ?>
    </div>
</div>