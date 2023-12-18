<div class="h-7 w-7">
    <button
        class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
        :class="$store.global.isSidebarExpanded && 'active'"
        @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
        <span></span>
        <span></span>
        <span></span>
    </button>
</div>