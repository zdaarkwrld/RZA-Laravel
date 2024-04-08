<x-app-layout>
    <div //style="border-bottom-right-radius: /50% /100px; //border-bottom-left-radius: /50% /100px;"
        class="bg-[url(/public/images/giraffe.jpg)] bg-center bg-cover overflow-hidden h-[600px]">
    </div>

    <h1 class="font-therif text-center font-bold mt-12 text-7xl text-[#652b53] ">OUR EVENTS</h1>
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
            <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa pariatur quis voluptate aut?
                Laudantium ut
                expedita tempora cum quibusdam neque alias a libero numquam, quas perspiciatis saepe excepturi velit
                assumenda!</p>
        </div>
    </div>
    </div>
</x-app-layout>
