<tbody>
        <?php foreach ($users as $user): ?>
            <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <?php echo $user['id']; ?>
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <?php echo htmlspecialchars($user['name']); ?>
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <?php echo htmlspecialchars($user['email']); ?>
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    <?php
                    $roles = getUserRoles($user['id']);
                    if (!empty($roles)) {
                        $roleText = '';
                        $superAdmin = false;

                        foreach ($roles as $role) {
                            if ($role === 'Super Admin') {
                                $superAdmin = true;
                            } else {
                                $roleText .= htmlspecialchars($role) . '<br>';
                            }
                        }

                        if ($superAdmin) {
                            echo "Admin";
                        } elseif ($superAdmin && $roleText !== '') {
                            echo "Default";
                        } else {
                            echo $roleText;
                        }
                    } else {
                        echo "No roles assigned"; // Handle if no roles found
                    }
                    ?>
                </td>

                <?php
                include './components/ui/table_action_dropdown.php';
                ?>

            </tr>
        <?php endforeach; ?>
    </tbody>