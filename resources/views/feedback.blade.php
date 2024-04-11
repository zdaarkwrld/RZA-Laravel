<x-app-layout>
    <div class="sm:w-[38rem] mx-auto my-10 overflow-hidden rounded-2xl bg-white shadow-lg sm:max-w-lg p-6">
        <div class="bg-primary px-10 py-10 text-center text-white rounded-xl">
            <p class="font-serif text-2xl font-semibold tracking-wider">Submit your request</p>
            <p class="text-center text-blue-100">Please keep it short and succinct</p>
        </div>

        <div class="space-y-4 pt-6">
            <label class="block" for="name">
                <p class="text-gray-600">Name</p>
                <input class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-primary focus:ring-1"
                    type="text" placeholder="Enter your name" />
            </label>
            <label class="block" for="name">
                <p class="text-gray-600">Email Address</p>
                <input class="w-full rounded-md border bg-white px-2 py-2 outline-none ring-primary focus:ring-1"
                    type="email" placeholder="Enter your email" />
            </label>
            <label class="block" for="name">
                <p class="text-gray-600">Request</p>
                <textarea class="h-32 w-full rounded-md border bg-white px-2 py-2 outline-none ring-primary focus:ring-1" type="text"
                    placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit."></textarea>
            </label>
            <button class="mt-4 rounded-full bg-primary px-10 py-2 font-semibold text-white">Submit</button>
        </div>
    </div>

</x-app-layout>
