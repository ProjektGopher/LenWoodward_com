<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-4xl text-center">
        <h2 class="sr-only">Pricing</h2>
        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Simple, straight forward pricing.</p>
      </div>
      <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Quit obsessing over hours, and let’s just focus on delivering <u>value</u>.</p>
      {{-- <x-pricing.frequency /> --}}
      <div class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <div class="rounded-3xl p-8 ring-1 ring-gray-200 xl:p-10">
          <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-part-time" class="text-lg font-semibold leading-8 text-gray-900">Part-Time</h3>
          </div>
          <p class="mt-4 text-sm leading-6 text-gray-600">Your project will get half of my paid development time.</p>
          <p class="mt-6 flex items-baseline gap-x-1">
            <!-- Price, update based on frequency toggle state -->
            <span class="text-4xl font-bold tracking-tight text-gray-900">$6,000</span>
            <!-- Payment frequency, update based on frequency toggle state -->
            <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
          </p>
          <a
            aria-describedby="tier-part-time" 
            href="mailto:Len@ProjektGopher.com?subject=Part time work&body=Hi Len! I found your pricing page and I'm interested in your part-time services. Could we schedule a call to discuss further?" 
            class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 text-sky-600 ring-1 ring-inset ring-sky-200 hover:ring-sky-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600"
          >Get Started</a>
          <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Present in Slack
            </li>
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Regular Pull Requests
            </li>
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Weekly Check-in
            </li>
          </ul>
        </div>
        <div class="rounded-3xl p-8 ring-2 ring-sky-600 xl:p-10">
          <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-full-time" class="text-lg font-semibold leading-8 text-sky-600">Full-Time</h3>
            <p class="rounded-full bg-sky-600/10 px-2.5 py-1 text-xs font-semibold leading-5 text-sky-600">Available</p>
          </div>
          <p class="mt-4 text-sm leading-6 text-gray-600">Your project will get all of my paid development time. You will be my only client.</p>
          <p class="mt-6 flex items-baseline gap-x-1">
            <!-- Price, update based on frequency toggle state -->
            <span class="text-4xl font-bold tracking-tight text-gray-900">$12,000</span>
            <!-- Payment frequency, update based on frequency toggle state -->
            <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
          </p>
          <a
            aria-describedby="tier-full-time"
            href="mailto:Len@ProjektGopher.com?subject=Full time work&body=Hi Len! I found your pricing page and I'm interested in your full-time services. Could we schedule a call to discuss further?"
            class="mt-6 block rounded-md bg-sky-600 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600"
          >Get Started</a>
          <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Everything in Part-Time
            </li>
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Code Reviews
            </li>
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Feature Planning
            </li>
          </ul>
        </div>
        <div class="rounded-3xl p-8 ring-1 ring-gray-200 xl:p-10">
          <div class="flex items-center justify-between gap-x-4">
            <h3 id="tier-exclusive" class="text-lg font-semibold leading-8 text-gray-900">Exclusive</h3>
          </div>
          <p class="mt-4 text-sm leading-6 text-gray-600">Your project will take priority over my regular open source work and personal projects.</p>
          <p class="mt-6 flex items-baseline gap-x-1">
            <!-- Price, update based on frequency toggle state -->
            <span class="text-4xl font-bold tracking-tight text-gray-900">$16,000</span>
            <!-- Payment frequency, update based on frequency toggle state -->
            <span class="text-sm font-semibold leading-6 text-gray-600">/month</span>
          </p>
          <a
            aria-describedby="tier-exclusive"
            href="mailto:Len@ProjektGopher.com?subject=Exclusive work&body=Hi Len! I found your pricing page and I'm interested in your exclusive services. Could we schedule a call to discuss further?"
            class="mt-6 block rounded-md px-3 py-2 text-center text-sm font-semibold leading-6 text-sky-600 ring-1 ring-inset ring-sky-200 hover:ring-sky-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600"
          >Get Started</a>
          <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-gray-600 xl:mt-10">
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Everything in Full-Time
            </li>
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Developer Assessments
            </li>
            <li class="flex gap-x-3">
              <x-pricing.checkmark />
              Developer Mentorship
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  