<tbody>
    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <a href="./invoice-view">#1</a>
        </td>
        <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5">
            John Doe
        </td>
        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            info@johndoe.com
        </td>

        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            January 14, 2023
        </td>
        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            October 18, 2023
        </td>
        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            $45.21
        </td>
        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
            <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                <div class="h-2 w-2 rounded-full bg-current"></div>
                <span>In Progress</span>
            </div>
        </td>

        <?php
        include './components/ui/table_action_dropdown.php'
            ?>


    </tr>
</tbody>