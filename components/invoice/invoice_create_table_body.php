<tbody id="myTableBody">

</tbody>

<script>
    let number = 0;

    function calculateSubtotal(number) {
        // Retrieve the relevant input values
        const hours = parseFloat(document.getElementById(`${number}_invoice_hours`).value) || 0;
        const price = parseFloat(document.getElementById(`${number}_invoice_price_hour`).value) || 0;

        // Calculate the subtotal
        const subtotal = hours * price;

        // Update the corresponding input field with the calculated subtotal
        document.getElementById(`${number}_invoice_subtotal`).value = subtotal.toFixed(2); // Show subtotal with 2 decimal places

        // Calculate the total and update it
        updateTotal();
    }

    function updateTotal() {
        let endPrice = 0;

        // Loop through all elements with the class 'itemSubtotal'
        document.querySelectorAll('.itemSubtotal').forEach((element) => {
            endPrice += parseFloat(element.value) || 0;
        });

        const summarySpan = document.querySelector('.endprice');
        summarySpan.textContent = endPrice.toFixed(2); // Update the 'endprice' span with the calculated total
    }
    function addRow() {
        number++;
        const tableBody = document.getElementById('myTableBody');
        const newRow = document.createElement('tr');
        newRow.innerHTML = `
        <td class="whitespace-nowrap rounded-l-lg px-4 py-3 sm:px-5">
        <label class="block">
                <input
                    class="form-input w-20 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent itemSubtotal"
                    type="number" 
                    name="invoice_index[]" value="${number}" readonly/>
            </label>
        </td>
        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                <div>
                    <div>
                        <label class="block" style="margin-bottom:5px">
                            <input
                                class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Enter Item Name" type="text" name="invoice_name[]" required/>
                        </label>
                    </div>
                    <div>
                        <label class="block">
                            <input
                                class="form-input w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Enter Item Description" type="text" name="invoice_description[]" required/>
                        </label>
                    </div>
                </div>
            </td>
        <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
            <label class="block">
                <input
                    class="form-input w-20 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Hour Price" type="number" name="invoice_price_hour[]"
                    oninput="calculateSubtotal(${number})" required
                    id="${number}_invoice_price_hour" />
            </label>
        </td>
        <td class="w-3/12 whitespace-nowrap px-4 py-3 text-right sm:px-5">
            <label class="block">
                <input
                    class="form-input w-20 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Hours" type="number" name="invoice_hours[]"
                    oninput="calculateSubtotal(${number})" required
                    id="${number}_invoice_hours" /> 
            </label>
        </td>
        <td class="w-3/12 whitespace-nowrap rounded-r-lg px-4 py-3 text-right font-semibold sm:px-5">
            <label class="block">
                <input
                    class="form-input w-20 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent itemSubtotal"
                    placeholder="Price" type="number" name="invoice_price[]" 
                    id="${number}_invoice_subtotal" value="00" readonly required/>
            </label>
        </td>
    `;
        tableBody.appendChild(newRow);
    }
</script>