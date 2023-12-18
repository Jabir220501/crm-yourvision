<?php
include './database/config.php';
include './database/common.php';
include './handlers/project/getProject.php';
include './utils/nameInitials.php';
$id = $_GET['id'];
$projects = getAllProjectDataById($pdo, $id);
$teams = getProjectTeam($pdo, $id);

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
  include './components/head/head_title.php';
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
        <div
          class="mt-6 flex flex-col items-center justify-between space-y-2 text-center sm:flex-row sm:space-y-0 sm:text-left">
          <div>
            <h3 class="text-xl font-semibold text-slate-700 dark:text-navy-100" style="text-transform: capitalize;">
              <?php
              foreach ($projects as $project) {
                echo $project['project_name'];
              }
              ?>
            </h3>
            <p class="mt-1 hidden sm:block">
              <?php
              foreach ($projects as $project) {
                echo $project['project_category'];
              }
              ?>
            </p>
          </div>
        </div>
        <div x-data="{activeTab:'tabOverview'}" class="tabs flex flex-col mt-8">
          <div class="is-scrollbar-hidden overflow-x-auto">
            <div class="border-b-2 border-slate-150 dark:border-navy-500">
              <div class="tabs-list flex">
                <button @click="activeTab = 'tabOverview'"
                  :class="activeTab === 'tabOverview' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                  class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                  Overview
                </button>
                <button @click="activeTab = 'tabTasks'"
                  :class="activeTab === 'tabTasks' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                  class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                  Tasks
                </button>
                <button @click="activeTab = 'tabInvoice'"
                  :class="activeTab === 'tabInvoice' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                  class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                  Invoices
                </button>
                <button @click="activeTab = 'tabTeam'"
                  :class="activeTab === 'tabTeam' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                  class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                  Team
                </button>
                <button @click="activeTab = 'tabSettings'"
                  :class="activeTab === 'tabSettings' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                  class="btn shrink-0 rounded-none border-b-2 px-3 py-2 font-medium">
                  Settings
                </button>
              </div>
            </div>
          </div>
          <div class="tab-content pt-4">
            <div x-show="activeTab === 'tabOverview'" x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
              <?php
              include './components/project/view/overview/tabOverview.php'
                ?>
            </div>
            <div x-show="activeTab === 'tabTasks'" x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
              <?php
              include './components/project/view/tasks/tabTasks.php'
                ?>
            </div>
            <div x-show="activeTab === 'tabInvoice'" x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
              <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                <div x-data="{isFilterExpanded:false}">

                 <?php
                 include './components/project/view/invoice/tabInvoice.php'
                 ?>
                </div>
              </div>
            </div>
            <div x-show="activeTab === 'tabTeam'" x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
              <?php
              include './components/project/view/team/tabTeam.php'
                ?>
            </div>
            <div x-show="activeTab === 'tabSettings'" x-transition:enter="transition-all duration-500 easy-in-out"
              x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
              x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]">
              <div>
                <button
                  class="btn bg-error font-medium text-white hover:bg-error-focus hover:shadow-lg hover:shadow-error/50 focus:bg-error-focus focus:shadow-lg focus:shadow-error/50 active:bg-error-focus/90">
                  Delete Project
                </button>


                <p class="pt-3 text-xs text-slate-400 dark:text-navy-300">
                  Last Updated by: Jabir Abubakar
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
  <div id="x-teleport-target"></div>
  <script>
    window.addEventListener("DOMContentLoaded", () => Alpine.start());
  </script>
  <script>
    function enableEditing(element) {
      const currentValue = element.innerText;

      // If already in edit mode, don't proceed
      if (element.querySelector('input')) {
        return;
      }

      const inputField = document.createElement('input');
      inputField.value = currentValue;

      inputField.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
          element.innerText = this.value;
          this.remove();
        }
      });

      inputField.addEventListener('focusout', function () {
        element.innerText = this.value;
        this.remove();
      });

      element.innerText = '';
      element.appendChild(inputField);
      inputField.focus();
    }

  </script>
</body>

</html>