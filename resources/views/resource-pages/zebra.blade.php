<x-app-layout>
    <div class="bg-secondary min-h-screen p-4">
        <div class="container mx-auto pt-12 pb-20">

            <h1 class="text-4xl font-bold text-gray-800 text-center mb-8">
                Discover some facts about ZEBRAS
            </h1>
            <p class="text-gray-700 text-lg text-center mb-12">
                Learn fascinating insights about these unique African equines with striking black and white stripes.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Zebra stripes are unique to each individual</h2>
                    <p class="text-gray-700">
                        Just like human fingerprints, no two zebras have the same pattern of stripes. This unique stripe pattern helps zebras recognize one another and is thought to play a role in camouflage.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Zebras are members of the horse family</h2>
                    <p class="text-gray-700">
                        Despite their distinct black and white stripes, zebras are closely related to horses and donkeys. They are members of the Equidae family and can interbreed with other equine species.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Stripes help zebras stay cool</h2>
                    <p class="text-gray-700">
                        Zebras' black and white stripes create an optical illusion that helps to dissipate heat from their bodies, keeping them cooler in the hot African savanna.
                    </p>
                </div>
            </div>

            {{-- Bottom Row --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Zebras are highly social animals</h2>
                    <p class="text-gray-700">
                        Zebras live in close-knit family groups called harems, consisting of a stallion, several mares, and their offsprings. These groups help protect zebras from predators and facilitate communication and bonding.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Zebras are excellent runners</h2>
                    <p class="text-gray-700">
                        With their long legs and incredible endurance, zebras can run at speeds of up to 35 mph (56 km/h) for short bursts. This ability helps them escape from predators in the open savannas.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Zebras have excellent eyesight and hearing</h2>
                    <p class="text-gray-700">
                        To stay safe from predators, zebras rely on their keen senses of sight and hearing. Their excellent vision helps them detect potential threats from a distance, while their large ears allow them to pick up even the faintest sounds.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-10">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="https://www.treehugger.com/thmb/qFhPReYPPaVgTtHBOthYeMJVeZ0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1043597638-49acd69677d7442588c1d8930d298a59.jpg" alt="Zebra image">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="https://animals.sandiegozoo.org/sites/default/files/2016-08/hero_zebra_animals.jpg" alt="Zebra image">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="https://nationalzoo.si.edu/sites/default/files/styles/max_2600x2600/public/newsroom/20220421-tarabuk-zebra-yipes-014.jpg?itok=EiXouHqR" alt="Zebra image">
            </div>
        </div>
    </div>
</x-app-layout>
