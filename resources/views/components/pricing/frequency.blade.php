  <div class="mt-16 flex justify-center">
    <fieldset aria-label="Payment frequency">
      <div class="grid grid-cols-2 gap-x-1 rounded-full p-1 text-center text-xs font-semibold leading-5 ring-1 ring-inset ring-gray-200">
        <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
        <label class="cursor-pointer rounded-full px-2.5 py-1">
          <input type="radio" name="frequency" value="monthly" class="sr-only">
          <span>Monthly</span>
        </label>
        <!-- Checked: "bg-indigo-600 text-white", Not Checked: "text-gray-500" -->
        <label class="cursor-pointer rounded-full px-2.5 py-1">
          <input type="radio" name="frequency" value="annually" class="sr-only">
          <span>Annually</span>
        </label>
      </div>
    </fieldset>
  </div>