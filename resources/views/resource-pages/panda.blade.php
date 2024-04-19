<x-app-layout>
    <div class="bg-secondary min-h-screen p-4">
        <div class="container mx-auto pt-12 pb-20">

            <h1 class="text-4xl font-bold text-gray-800 text-center mb-8">
                Discover some facts about PANDAS
            </h1>
            <p class="text-gray-700 text-lg text-center mb-12">
                Learn fascinating insights about these beloved black and white bears native to bamboo forests of China.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Pandas are bears, not raccoons</h2>
                    <p class="text-gray-700">
                        Despite their raccoon-like appearance, pandas are actually members of the bear family. They are the smallest bear species, but they share many characteristics with their larger cousins, such as their love for bamboo.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Pandas have a unique "thumb"</h2>
                    <p class="text-gray-700">
                        Pandas have an enlarged wrist bone that acts like a thumb, helping them grip bamboo stalks more easily. This adaptation is unique among bears and aids in their almost exclusive bamboo diet.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Pandas are solitary animals</h2>
                    <p class="text-gray-700">
                        Pandas are generally solitary, with males and females only coming together briefly during the breeding season. They have a low reproductive rate, which contributes to their vulnerable status in the wild.
                    </p>
                </div>
            </div>

            {{-- Bottom Row --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Pandas have a strict bamboo diet</h2>
                    <p class="text-gray-700">
                        Pandas almost exclusively eat different varieties of bamboo, consuming up to 20 pounds of it per day. Their bodies are specially adapted to digest this fibrous plant material efficiently.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Pandas are excellent tree climbers</h2>
                    <p class="text-gray-700">
                        Despite their bulky appearance, pandas are skilled climbers and often spend time high up in the bamboo forests. Their sharp claws and strong legs allow them to navigate the trees with ease.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Pandas are endangered</h2>
                    <p class="text-gray-700">
                        Due to habitat loss, poaching, and their low reproductive rate, giant pandas are classified as "Vulnerable" on the IUCN Red List of Threatened Species. Conservation efforts are crucial for their survival in the wild.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-10">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="https://files.worldwildlife.org/wwfcmsprod/images/Panda_in_Tree/hero_small/99i33zyc0l_Large_WW170579.jpg" alt="Panda image">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="https://files.worldwildlife.org/wwfcmsprod/images/Giant_Panda/story_full_width/p80g9bsjj_giant_panda_shutterstock_86500690.jpg" alt="Panda image">
                <img class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="https://d1jyxxz9imt9yb.cloudfront.net/medialib/3787/image/s768x1300/panda_1.jpg" alt="Panda image">
            </div>
        </div>
    </div>
</x-app-layout>
