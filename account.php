<?php
include './database/config.php';
include './database/common.php';
include './handlers/user/getUser.php';
include './components/ui/inputField.php';
include './components/head/head_title.php';

$user_id = $_SESSION['user_id'];
$userData = getUserDataById($pdo, $user_id);
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

        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Profile
                </h2>
                <div class="hidden h-full py-1 sm:flex">
                    <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <?php
                include './components/profile/profile_small_bar.php'
                    ?>
                <?php
                include './components/profile/profile_account_form.php'
                    ?>
        </main>
    </div>
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

</html>