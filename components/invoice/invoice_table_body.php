<?php
$invoices = getAllInvoiceData($pdo)
    ?>
<tbody>
    <?php foreach ($invoices as $invoice): ?>
        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <a href="./invoice-view?id=<?php echo $invoice['invoice_id'] ?>">#
                    <?php echo $invoice['invoice_id'] ?>
                </a>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                <?php echo $invoice['client_name'] ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?php echo $invoice['client_email'] ?>
            </td>

            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?php echo $invoice['created_at'] ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?php echo $invoice['due_date'] ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            €<?php echo $invoice['invoice_amount'] ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                    <div class="h-2 w-2 rounded-full bg-current"></div>
                    <span>In Progress</span>
                </div>
            </td>
        <?php endforeach; ?>
        <?php
        include './components/ui/table_action_dropdown.php'
            ?>


    </tr>
</tbody>