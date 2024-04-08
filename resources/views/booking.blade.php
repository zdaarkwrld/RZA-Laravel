<x-app-layout>
{{--     <div class="max-w-7xl mx-auto mt-10 bg-secondary shadow-2xl rounded-lg overflow-hidden mb-20">
        <div class="text-2xl py-4 px-6 bg-primary text-white text-center font-bold uppercase border-primary">
            Book an Appointment
        </div>
        <form class="py-4 px-6" action="" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">
                    Phone Number
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="phone" type="tel" placeholder="Enter your phone number">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="date">
                    Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="date" type="date" placeholder="Select a date">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="time">
                    Time
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="time" type="time" placeholder="Select a time">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="service">
                    Service
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="service" name="service">
                    <option value="">Select a service</option>
                    <option value="haircut">Haircut</option>
                    <option value="coloring">Coloring</option>
                    <option value="styling">Styling</option>
                    <option value="facial">Facial</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="message">
                    Message
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="message" rows="4" placeholder="Enter any additional information"></textarea>
            </div>
            <div class="flex items-center justify-center mb-4">
                <button
                    class="bg-primary text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                    type="submit">
                    Book Appointment
                </button>
            </div>

        </form>
    </div>
 --}}
 <div class="w-screen">
    <div class="relative mx-auto mt-20 mb-20 max-w-screen-lg overflow-hidden rounded-t-xl bg-primary-100 py-32 text-center shadow-xl shadow-gray-300">
      <h1 class="mt-2 px-8 text-3xl font-bold text-secondary md:text-5xl">Book an appointment</h1>
      <p class="mt-6 text-lg text-secondary">Get an appointment with our experienced accountants</p>
      <img class="absolute top-0 left-0 -z-10 h-full w-full object-cover" src="https://images.unsplash.com/photo-1504672281656-e4981d70414b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
    </div>

    <div class="mx-auto grid max-w-screen-lg px-6 pb-20">
      <div class="">
        <p class="font-serif text-xl font-bold text-blue-900">Select a service</p>
        <div class="mt-4 grid max-w-3xl gap-x-4 gap-y-3 sm:grid-cols-2 md:grid-cols-3">
          <div class="relative">
            <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
            <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-primary"></span>
            <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-primary peer-checked:text-white" for="radio_1">
              <span class="mt-2- font-medium">Financial Planning</span>
              <span class="text-xs uppercase">1 Hour</span>
            </label>
          </div>
          <div class="relative">
            <input class="peer hidden" id="radio_2" type="radio" name="radio" />
            <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-primary"></span>

            <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-primary peer-checked:text-white" for="radio_2">
              <span class="mt-2 font-medium">Retirement Planning</span>
              <span class="text-xs uppercase">1 Hour</span>
            </label>
          </div>
          <div class="relative">
            <input class="peer hidden" id="radio_3" type="radio" name="radio" />
            <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked: border-gray-300"></span>

            <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-primary peer-checked:text-white" for="radio_3">
              <span class="mt-2 font-medium">Investment Advice</span>
              <span class="text-xs uppercase">1 Hour</span>
            </label>
          </div>
        </div>
      </div>

      <div class="">
        <p class="mt-8 font-serif text-xl font-bold text-primary">Select a date</p>
        <div class="relative mt-4 w-56">
          <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <svg aria-hidden="true" class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
          </div>
          <input datepicker="" datepicker-orientation="bottom" autofocus="autofocus" type="text" class="datepicker-input block w-full rounded-lg border border-primary-low bg-primary p-2.5 pl-10 text-primary outline-none ring-opacity-30 placeholder:text-white focus:ring focus:ring-primary-low sm:text-sm" placeholder="Select date" />
        </div>
      </div>

      <div class="">
        <p class="mt-8 font-serif text-xl font-bold text-primary">Select a time</p>
        <div class="mt-4 grid grid-cols-4 gap-2 lg:max-w-xl">
          <button class="rounded-lg bg-tertiary px-4 py-2 font-medium text-primary active:scale-95">12:00</button>
          <button class="rounded-lg bg-tertiary px-4 py-2 font-medium text-primary active:scale-95">14:00</button>
          <button class="rounded-lg bg-primary px-4 py-2 font-medium text-white active:scale-95">09:00</button>
          <button class="rounded-lg bg-tertiary px-4 py-2 font-medium text-primary active:scale-95">12:00</button>
          <button class="rounded-lg bg-tertiary px-4 py-2 font-medium text-primary active:scale-95">15:00</button>
          <button class="rounded-lg bg-tertiary px-4 py-2 font-medium text-primary active:scale-95">12:00</button>
          <button class="rounded-lg bg-tertiary px-4 py-2 font-medium text-primary active:scale-95">14:00</button>
          <button class="rounded-lg bg-tertiary px-4 py-2 font-medium text-primary active:scale-95">12:00</button>
        </div>
      </div>

      <button class="mt-8 w-56 rounded-full border-8 border-primary bg-primary px-10 py-4 text-lg font-bold text-white transition hover:translate-y-1">Book Now</button>
    </div>
  </div>
  <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>

</x-app-layout>
