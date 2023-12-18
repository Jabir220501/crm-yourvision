<?php
session_start();
include './database/config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

        <?php
    include './components/head/head_title.php';
    dynamicTitle($pdo, 'Sign In');
    ?>
    <?php
    include './components/head/head_favicon.php'
        ?>

    <!-- CSS Assets -->
    <?php
    include './components/head/head_link.php'
        ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Javascript Assets -->
    <?php
    include './components/head/head_script.php'
        ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

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
        <main class="grid w-full grow grid-cols-1 place-items-center">
            <div class="w-full max-w-[26rem] p-4 sm:px-5">
                <div class="text-center">
                    <img class="mx-auto h-16 w-16" src="./assets/images/app-logo.png" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Welcome Back
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            Please sign in to continue
                        </p>
                    </div>
                </div>
                <?php
                include './components/login/login_form.php'
                    ?>
                <div class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300">
                    <a href="#">Privacy Notice</a>
                    <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                    <a href="#">Term of service</a>
                </div>
            </div>
        </main>
    </div>
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
    <script src="./handlers/auth/loginUser.js"></script>
</body>

</html>