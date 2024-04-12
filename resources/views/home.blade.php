<x-app-layout>
   <div //style="border-bottom-right-radius: /50% /100px; //border-bottom-left-radius: /50% /100px;"
        class="bg-[url(/public/images/giraffe.jpg)] bg-center bg-cover overflow-hidden h-[600px]">
    </div>

     {{-- <h1 class="font-therif text-center font-bold mt-12 text-7xl text-[#652b53] ">OUR EVENTS</h1>
    <div class="flex flex-col md:flex-row gap-10 mx-auto md:px-10 w-96 md:w-full py-10 justify-center">
        <div class="bg-white  rounded-2xl overflow-hidden max-w-96">
            <div class="overflow-hidden h-96"><img
                    class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150"
                    src="https://dogcopenhagen.com/1857-large_default/go-explore-treat-bag.jpg" alt=""></div>
            <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repudiandae quaerat fuga
                tempore.
                Voluptates debitis, eligendi alias rem ex et dolores ad, similique ratione ipsum, quidem cupiditate quo
                harum molestiae.</p>
        </div>
        <div class="bg-white rounded-2xl overflow-hidden max-w-96">
            <div class="overflow-hidden h-96"><img
                    class="object-cover h-full hover:scale-110 transition-transform ease-in-out duration-150"
                    src="https://www.housesitmatch.com/wp-content/uploads/2018/06/Dog-sitter-walker-in-park-with-two-dogs-SLIDER.jpg"
                    alt=""></div>
            <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa pariatur quis voluptate aut?
                Laudantium ut
                expedita tempora cum quibusdam neque alias a libero numquam, quas perspiciatis saepe excepturi velit
                assumenda!</p>
        </div>
        <div class="bg-white rounded-2xl overflow-hidden max-w-96">
            <div class="overflow-hidden h-96"><img
                    class="object-cover object-left h-full hover:scale-110 transition-transform ease-in-out duration-150"
                    src="{{ asset('images/loyalty-program-img-3.jpeg') }}" alt="">
            </div>
            <p class="p-4 text-primary font-extrabold text-xl">Discover Our New Discount Offer For Our Loyal Customers</p>
        </div>
    </div>
    </div> --}}

    <div class="h-screen bg-secondary  text-gray-800 ">
        <div class="container mx-auto px-4 py-8">
            <h1 class="font-therif text-center font-bold text-7xl pb-6 text-[#652b53] ">UPDATED EVENTS</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white  shadow-lg rounded-lg overflow-hidden  justify-center ">
                    <img src="https://www.wmsp.co.uk/fileadmin/_processed_/5/7/csm_photo-minibus2-600px_3f8bd75a8f.jpg"
                        alt="Headless UI" class="w-full h-64 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-indigo-500 dark:text-indigo-300 mb-2">Book A Guided Tour</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines">
                            Completely unstyled, fully accessible UI
                            components,
                            designed to integrate beautifully with Tailwind CSS.
                        </p>
                        <a href="#"
                            class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-full">Learn
                            More</a>
                    </div>
                </div>

                <div class="bg-white  shadow-lg rounded-lg overflow-hidden">
                    <img src="https://www.wmsp.co.uk/fileadmin/user_upload/west_midland_safari_park/attractions/elephant-04.jpg"
                        alt="Heroicons" class="w-full h-64 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-purple-500 dark:text-purple-300 mb-2">Get Ready To Visit Our Animal Friends</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines">A set of 450+ free MIT-licensed SVG icons.
                            Available
                            as basic SVG icons and via first-party React and Vue libraries.</p>
                        <a href="#"
                            class="inline-block bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-full">Learn
                            More</a>
                    </div>
                </div>

                <div class="bg-white  shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/loyalty-program-img-3.jpeg') }}"
                        alt="Hero Patterns" class="w-full h-64 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl font-semibold text-cyan-500 dark:text-cyan-300 mb-2">Discover Our Loyalty Offer</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines">A collection of over 100 free MIT-licensed
                            high-quality
                            SVG patterns for you to use in your web projects.</p>
                        <a href="#"
                            class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded-full">Learn
                            More</a>
                    </div>
                </div>

                <!-- Add more items as needed, following the same structure -->

            </div>
        </div>
    </div>
</x-app-layout>
