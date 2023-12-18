<?php
include './database/config.php';
include './components/head/head_title.php';
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

        <!-- Main Content Wrapper -->
        <main class="main-content w-full pb-8">
            <div class="mt-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            </div>
        </main>
    </div>
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

</html>