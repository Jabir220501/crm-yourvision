<?php
function generateMenuItem($svgPath, $text, $link)
{
    $currentPage = basename($_SERVER['REQUEST_URI']);
    $cleanLink = str_replace('.php', '', $link);
    $isActive = ($cleanLink === $currentPage) ? 'bg-primary text-white' : 'hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100';

    return '
    <li>
        <a class="group flex space-x-2 rounded-lg px-4 py-2.5 tracking-wide outline-none transition-all ' . $isActive . '"
            href="' . $cleanLink . '">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="' . $svgPath . '" />
            </svg>
            <span>' . $text . '</span>
        </a>
    </li>';
}
?>


<div class="col-span-12 lg:col-span-4">
    <div class="card p-4 sm:p-5">
        <div class="flex items-center space-x-4">
            <div class="avatar h-14 w-14">
                <img class="rounded-full" src="./assets/images/200x200.png" alt="avatar" />
            </div>
            <div>
                <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                    <?php
                    echo $userData['username'];
                    ?>
                </h3>
                <p class="text-xs+">
                    <?php
                    echo $userData['email'];
                    ?>
                </p>
            </div>
        </div>
        <ul class="mt-6 space-y-1.5 font-inter font-medium">
            <?php
            echo generateMenuItem(
                'M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                'Account',
                'account.php'
            );

            echo generateMenuItem(
                'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                'Notification',
                'notification.php'
            );

            echo generateMenuItem(
                'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'Security',
                'security.php'
            );

            echo generateMenuItem(
                'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                'Apps',
                'apps.php'
            );

            echo generateMenuItem(
                'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                'Privacy & data',
                'privacy-data.php'
            );
            ?>
        </ul>
    </div>
</div>