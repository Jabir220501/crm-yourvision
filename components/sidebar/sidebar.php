<div class="sidebar print:hidden">
    <!-- Main Sidebar -->
    <div class="main-sidebar">
        <div
            class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">
            <!-- Application Logo -->
            <?php
            include 'logo.php'
                ?>

            <!-- Main Sections Links -->
            <?php
            include 'links.php'
                ?>

            <!-- Bottom Links -->
            <div class="flex flex-col items-center space-y-3 py-3">

                <!-- Profile -->
                <div x-data="usePopper({placement:'right-end',offset:12})"
                    @click.outside="isShowPopper && (isShowPopper = false)" class="flex">
                    <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar h-12 w-12">
                        <img class="rounded-full" src="./assets/images/200x200.png" alt="avatar" />
                        <span
                            class="absolute right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
                    </button>

                    <?php
                    include './components/sidebar/sidebar_profile_popup.php'
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Panel -->
    <?php
    include 'sidebar_panel.php'
        ?>
</div>