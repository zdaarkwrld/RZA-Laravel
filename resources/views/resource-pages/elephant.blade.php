<x-app-layout>
    <div class="bg-secondary min-h-screen p-4">
        <div class="container mx-auto pt-12 pb-20">

            <h1 class="text-4xl font-bold text-gray-800 text-center mb-8">
                Discover some facts about ELEPHANTS
            </h1>
            <p class="text-gray-700 text-lg text-center mb-12">
                Learn fascinating insights about these magnificent giants, known for their intelligence and strength.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Elephants have incredible memories</h2>
                    <p class="text-gray-700">
                        Elephants are renowned for their exceptional long-term memory, which helps them remember
                        migration routes, watering holes, and even individual humans they have encountered in the past.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Elephants are highly intelligent</h2>
                    <p class="text-gray-700">
                        Elephants are among the most intelligent animals on Earth, with a brain that weighs around 5 kg
                        (11 lbs). They exhibit complex behavior, use tools, and have strong family bonds.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Elephants are matriarchal</h2>
                    <p class="text-gray-700">
                        Elephant herds are led by a matriarch, usually the oldest and most experienced female. She
                        guides the herd and makes decisions about where to find food and water.
                    </p>
                </div>
            </div>

            {{-- Bottom Row --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Elephants are excellent swimmers</h2>
                    <p class="text-gray-700">
                        Despite their massive size, elephants are skilled swimmers and can cross rivers and even swim in
                        the ocean for extended periods. They use their trunks as snorkels to breathe while swimming.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Elephants have unique communication methods</h2>
                    <p class="text-gray-700">
                        Elephants communicate through a variety of vocalizations, including trumpets, rumbles, and
                        roars. They also use seismic signals that can travel through the ground and be detected by other
                        elephants miles away.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Elephants are endangered</h2>
                    <p class="text-gray-700">
                        Both African and Asian elephants are threatened by habitat loss, poaching for ivory, and
                        human-elephant conflicts. Conservation efforts are crucial to protect these majestic animals
                        from extinction.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-10">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://files.worldwildlife.org/wwfcmsprod/images/African_Elephant_Kenya_112367/hero_small/3v49raxlb8_WW187785.jpg"
                    alt="Elephant image">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://www.wwf.org.uk/sites/default/files/styles/hero_m/public/2018-10/Elephant_WWF_Living_Planet_Report_0.jpg?h=e5aec6c8&itok=kYnJsMWQ"
                    alt="Elephant image">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                    src="https://www.treehugger.com/thmb/tKe5Rn214X_AXAE-kRUbiu7pOuo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/front-view-of-a-bull-elephant-in-the-grasslands-of-amboseli-national-park--1219745751-08f3add138514ad091e82e29a11546cc.jpg"
                    alt="Elephant image">
            </div>
        </div>
    </div>
</x-app-layout>
