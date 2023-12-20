<div class="flex flex-col justify-end sm:flex-row">
    <div class="mt-4 text-center sm:m-0 sm:text-right">
        <p class="text-lg font-medium text-slate-600 dark:text-navy-100">
            Total:
        </p>
        <div class="space-y-1 pt-2">
            <p>Summary : <span class="font-medium endprice"></span></p>
            <p>Discount: <span class="font-medium">
                    %<label class="block">
                        <input id="discountInput"
                            class="form-input w-20 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                            placeholder="Discount" type="number" name="invoice_discount" />
                    </label>
                </span></p>
            <p class="text-lg text-primary dark:text-accent-light">
                <label class="block">
                    Total:
                    <input
                        class="form-input w-20 rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        type="number" name="invoice_total"id="totalInput" readonly style="width: 150px;"/>
                </label>
            </p>
        </div>
    </div>
</div>

<script>
    function calculateTotal() {
        const subtotal = parseFloat(document.querySelector('.endprice').textContent) || 0;
        const discountPercentage = parseFloat(document.getElementById('discountInput').value) || 0;

        // Calculate the discount amount
        const discountAmount = (subtotal * discountPercentage) / 100;

        // Calculate the total
        const total = subtotal - discountAmount;

        // Update the total field with the calculated total
        document.getElementById('totalInput').value = total.toFixed(2);
    }

    // Listen for changes in both subtotal and discount input fields and recalculate the total
    document.querySelector('.endprice').addEventListener('input', calculateTotal);
    document.getElementById('discountInput').addEventListener('input', calculateTotal);

    // Call the function initially to set the initial total
    calculateTotal();
</script>