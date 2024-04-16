<x-app-layout>
    <div class="max-w-7xl mx-auto mt-10 bg-secondary shadow-2xl rounded-lg overflow-hidden mb-20">
        <div class="text-2xl py-4 px-6 bg-primary text-white text-center font-bold uppercase border-primary">
            Book an Appointment
        </div>
        <form class="py-4 px-6" action="{{ route('booking.add') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Name
                </label>
                <input name="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input name="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">
                    Phone Number
                </label>
                <input name="phone"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="phone" type="tel" placeholder="Enter your phone number">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="date">
                    Date
                </label>
                <input name="date"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="date" type="date" placeholder="Select a date">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="time">
                    Time
                </label>
                <input name="time"
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
                <textarea name="message"
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
    <script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
</x-app-layout>
