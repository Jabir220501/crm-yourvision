<label class="block">
    <span>Client</span>
    <select class="mt-1.5 w-full placeholder:text-slate-400/70" name="client"
        x-init="$el._tom = new Tom($el,{create: true,sortField: {field: 'text',direction: 'asc'}})">
        <?php foreach ($clients as $client): ?>
            <option>Choose Client</option>
            <option value="<?php echo $client['client_id']; ?>">
                <?php echo $client['client_name']; ?>
            </option>
        <?php endforeach; ?>
    </select>
</label>
<label class="block">
    <span>Project Name</span>
    <input
        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
        placeholder="Enter Project Name" name="project_name" type="text" required />
</label>
<label class="block">
    <span>Category</span>
    <select
        class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-white px-3 py-2 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
        name="project_category" id="categorySelect" required>
        <option>--Select a Category</option>
        <option value="Brand Design">Brand Design</option>
        <option value="Photography">Photography</option>
        <option value="Videography">Videography</option>
        <option value="Web Development">Web Development</option>
    </select>
</label>
<label class="block" id="addressInput" style="display: none;">
    <span>Project Location</span>
    <input
        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
        placeholder="Enter Project Description" autocomplete="street-address" name="project_location" type="text" />
</label>
<div>
    <span>Start Date</span>
    <label class="relative flex">
        <input x-init="$el._x_flatpickr = flatpickr($el,{altInput: true,altFormat: 'F j, Y',dateFormat: 'Y-m-d'})"
            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            placeholder="Choose date..." name="project_start_date" type="text" />
        <span
            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </span>
    </label>
</div>
<div>
    <span>Deadline</span>
    <label class="relative flex">
        <input x-init="$el._x_flatpickr = flatpickr($el,{altInput: true,altFormat: 'F j, Y',dateFormat: 'Y-m-d'})"
            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            placeholder="Choose date..." name="project_end_date" type="text" />
        <span
            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-colors duration-200" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </span>
    </label>
</div>
<label class="block" id="timePickerLabel" style="display: none;">
    <span>Choose Time</span>
    <label class="relative flex">
        <input
            x-init="$el._x_flatpickr = flatpickr($el,{enableTime: true,noCalendar: true,dateFormat: 'H:i',time_24hr:true})"
            class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            placeholder="Choose time..." name="project_time" type="text" />
        <span
            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
    </label>
</label>
<div>
    <span>Project Price</span>
    <label class="mt-1 flex -space-x-px">
        <div
            class="flex items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
            <span>$</span>
        </div>
        <input
            class="form-input w-full border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
            placeholder="Enter Price" type="text" name="project_price" />
        <div
            class="flex items-center justify-center rounded-r-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
            <span>.00</span>
        </div>
    </label>
</div>

<script>
    const selectElement = document.getElementById('categorySelect');
    const timePickerLabel = document.getElementById('timePickerLabel');
    const addressInput = document.getElementById('addressInput');

    function toggleTimePicker() {
        const selectedCategory = selectElement.value;
        if (selectedCategory === 'Photography' || selectedCategory === 'Videography') {
            timePickerLabel.style.display = 'block';
        } else {
            timePickerLabel.style.display = 'none';
        }
    }

    selectElement.addEventListener('change', toggleTimePicker);
    toggleTimePicker();


    function toggleAddressField() {
        const selectedCategory = selectElement.value;
        if (selectedCategory === 'Photography' || selectedCategory === 'Videography') {
            addressInput.style.display = 'block';
        } else {
            addressInput.style.display = 'none';
        }
    }

    selectElement.addEventListener('change', toggleAddressField);
    toggleAddressField();
</script>