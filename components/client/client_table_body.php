<?php
$clients = getAllClientData($pdo);
?>

<tbody>
    <?php foreach ($clients as $client): ?>
        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <a href="./invoice-view">
                    <?= $client['client_id']; ?>
                </a>
            </td>
            <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                <?= $client['client_name']; ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?= $client['client_location']; ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?= $client['client_email']; ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?= $client['client_phone']; ?>
            </td>

            <?php include './components/ui/table_action_dropdown.php'; ?>

        </tr>
    <?php endforeach; ?>
</tbody>