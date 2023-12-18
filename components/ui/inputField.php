<?php
function inputField($label, $placeholder, $iconClass, $type, $value)
{
    return '
    <label class="block">
        <span>' . $label . '</span>
        <span class="relative mt-1.5 flex">
            <input class="form-input peer w-full rounded-full border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="' . $placeholder . '" type="' . $type . '" value="' . $value . '" />
            <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <i class="' . $iconClass . '"></i>
            </span>
        </span>
    </label>';
}
?>