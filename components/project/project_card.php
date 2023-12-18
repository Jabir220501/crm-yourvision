<?php
$user_id = $_SESSION['user_id'];
$projects = getProjectData($pdo, $user_id);
?>
<?php foreach ($projects as $project): ?>
    <?php
    $remainingTime = calculateRemainingTime($project['end_date']);
    $bgColor = determineBackgroundColor($remainingTime);
    $teams = getProjectTeam($pdo, $project['project_id']);
    ?>
    <div class="card shadow-none">
        <div class="flex flex-1 flex-col justify-between rounded-lg bg-<?php echo $bgColor; ?> p-4 sm:p-5">
            <div>
                <div class="flex justify-between items-center">
                    <a href="./project-view?id=<?php echo $project['project_id']; ?>">
                        <h3 class="mt-3 font-medium text-white line-clamp-2" style="text-transform: capitalize;">
                            <?php echo $project['project_name']; ?>
                        </h3>
                    </a>
                    <p class="text-xs+ text-amber-50">
                        <?php echo $project['end_date']; ?>
                    </p>
                </div>
            </div>
            <div>
                <div class="mt-4">
                    <p class="text-xs+ text-white">Progress</p>
                    <div class="progress my-2 h-1.5 bg-white/30">
                        <span class="w-0/12 rounded-full bg-white"></span>
                    </div>
                    <p class="text-right text-xs+ font-medium text-white">0%</p>
                </div>

                <div class="mt-5 flex flex-wrap -space-x-3">
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

                <div class="mt-4 flex items-center justify-between space-x-2">
                    <div class="badge h-5.5 rounded-full bg-black/20 px-2 text-xs+ text-white">
                        <?php echo $remainingTime; ?>
                    </div>
                    <div>
                        <button
                            class="btn -mr-1.5 h-8 w-8 rounded-full p-0 text-white hover:bg-white/20 focus:bg-white/20 active:bg-white/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>