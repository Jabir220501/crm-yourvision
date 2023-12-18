<tbody>
    <?php foreach ($projects as $project): ?>
        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
            <td class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                ondblclick="enableEditing(this)">
                <?php
                echo $project['project_name'];
                ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5" ondblclick="enableEditing(this)">
            <?php
                echo $project['client_name'];
                ?>
            </td>

            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div x-tooltip.primary="'0% Completed'" class="progress h-2 bg-slate-150 dark:bg-navy-500">
                    <div class="w-0/12 rounded-full bg-primary dark:bg-accent">
                    </div>
                </div>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                    <div class="h-2 w-2 rounded-full bg-current"></div>
                    <div x-data="usePopper({placement:'bottom-end',offset:4})"
                        @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">
                        <span x-ref="popperRef" @click="isShowPopper = !isShowPopper">
                            In Progress
                        </span>
                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li style="cursor:pointer">
                                        <span class="flex  items-center px-3 h-8 pr-12 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Done</span>
                                    </li>
                                    <li style="cursor:pointer">
                                        <span class="flex  items-center px-3 h-8 pr-12 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">In Progress</span>
                                    </li>
                                    <li style="cursor:pointer">
                                        <span class="flex  items-center px-3 h-8 pr-12 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Pending</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="badge space-x-2.5 px-0 text-primary dark:text-accent-light">
                    <div class="h-2 w-2 rounded-full bg-current"></div>
                    <div x-data="usePopper({placement:'bottom-end',offset:4})"
                        @click.outside="isShowPopper && (isShowPopper = false)" class="inline-flex">
                        <span x-ref="popperRef" @click="isShowPopper = !isShowPopper">
                            In Progress
                        </span>
                        <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                            <div
                                class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                <ul>
                                    <li style="cursor:pointer">
                                        <span class="flex  items-center px-3 h-8 pr-12 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Done</span>
                                    </li>
                                    <li style="cursor:pointer">
                                        <span class="flex  items-center px-3 h-8 pr-12 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">In Progress</span>
                                    </li>
                                    <li style="cursor:pointer">
                                        <span class="flex  items-center px-3 h-8 pr-12 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Pending</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div class="flex flex-wrap -space-x-3">
                <?php foreach ($teams as $team): ?>
                    <div class="avatar h-8 w-8 hover:z-10">
                        <div
                            class="is-initial rounded-full border-2 border-<?php echo $bgColor ?> bg-info text-xs+ uppercase text-white">
                            <?php
                            $name = $team['username'];
                            echo nameInitials($name);
                            ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5"ondblclick="enableEditing(this)">
                <?php echo $project['project_address']; ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5"ondblclick="enableEditing(this)">
                <?php echo $project['time']; ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?php echo $project['start_date']; ?>
            </td>
            <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <?php echo $project['end_date']; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</tbody>