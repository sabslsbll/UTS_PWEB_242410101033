

<?php $__env->startSection('content'); ?>
<div class="fixed inset-0 overflow-hidden pointer-events-none">
    <img src="<?php echo e(asset('img/tycake.png')); ?>" class="floating-object" style="left: 10%; animation-delay: 0s; width: 40px;">
    <img src="<?php echo e(asset('img/tycake.png')); ?>" class="floating-object" style="left: 30%; animation-delay: 2s; width: 60px;">
    <img src="<?php echo e(asset('img/tycake.png')); ?>" class="floating-object" style="left: 50%; animation-delay: 4s; width: 30px;">
    <img src="<?php echo e(asset('img/tycake.png')); ?>" class="floating-object" style="left: 70%; animation-delay: 1s; width: 50px;">
    <img src="<?php echo e(asset('img/tycake.png')); ?>" class="floating-object" style="left: 90%; animation-delay: 6s; width: 45px;">
</div>
<div class="bg-white p-8 rounded-lg shadow-md relative z-10"> 
    <h1 class= "text-3xl font-bold text-blue-600 text-center uppercase">Hello, <?php echo e(request('user') ?? 'Admin'); ?>!</h1>
    <h1 class="text-3xl font-bold text-blue-600 text-center">WELCOME TO TYCAKE RESTAURANT</h1>
    <p class="mt-4 text-gray-700 text-center">TyCake adalah snack sehat yang mengangkat mengenai mental illness. Dimana snack ini mengandung bahan-bahan yang dapat membantu mengurangi anxiety.</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md mt-6">
    <h1 class="text-3xl font-bold text-center text-blue-500">OUR PRODUCTS</h1>

    <div class="flex flex-wrap justify-center gap-8">
        <div class="w-fit bg-grey border-2 border-blue-500 justify-center rounded-2xl p-2 shadow-lg">
            <img src="<?php echo e(asset('img/basah.jpeg')); ?>" alt="Produk Basah" class="w-32 h-32 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            <h3 class="font-bold text-center text-gray-800 mb-2">Pancake Basah</h3>
            
            <details class="group">
                <summary class="flex items-center justify-between bg-blue-100 text-blue-700 px-3 py-2 rounded-lg cursor-pointer list-none text-sm font-semibold hover:bg-blue-200 transition">
                    <span>Pilih Varian Rasa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <ul class="mt-2 space-y-1">
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span> Original
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-red-700 rounded-full mr-2"></span> Chocolate
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span> Coffee
                    </li>
                </ul>
            </details>
        </div>
        <div class="w-fit bg-grey border-2 border-blue-500 justify-center rounded-2xl p-2 shadow-lg">
            <img src="<?php echo e(asset('img/kering.jpeg')); ?>" alt="Produk Kering" class="w-32 h-32 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            <h3 class="font-bold text-center text-gray-800 mb-2">Pancake Kering</h3>
            
            <details class="group">
                <summary class="flex items-center justify-between bg-blue-100 text-blue-700 px-3 py-2 rounded-lg cursor-pointer list-none text-sm font-semibold hover:bg-blue-200 transition">
                    <span>Pilih Varian Rasa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <ul class="mt-2 space-y-1">
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span> Original
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-red-700 rounded-full mr-2"></span> Chocolate
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span> Coffee
                    </li>
                </ul>
            </details>
        </div>
        <div class="w-fit bg-grey border-2 border-blue-500 justify-center rounded-2xl p-2 shadow-lg">
            <img src="<?php echo e(asset('img/donuts.png')); ?>" alt="Donut" class="w-32 h-32 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            <h3 class="font-bold text-center text-gray-800 mb-2">Donuts</h3>
            
            <details class="group">
                <summary class="flex items-center justify-between bg-blue-100 text-blue-700 px-3 py-2 rounded-lg cursor-pointer list-none text-sm font-semibold hover:bg-blue-200 transition">
                    <span>Pilih Varian Rasa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <ul class="mt-2 space-y-1">
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span> Matcha
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-black rounded-full mr-2"></span> Chocolate
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-red-400 rounded-full mr-2"></span> Strawberry
                    </li>
                </ul>
            </details>
        </div>
        <div class="w-fit bg-grey border-2 border-blue-500 justify-center rounded-2xl p-2 shadow-lg">
            <img src="<?php echo e(asset('img/macaron.png')); ?>" alt="Macaron" class="w-32 h-32 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            <h3 class="font-bold text-center text-gray-800 mb-2">Macaron</h3>
            
            <details class="group">
                <summary class="flex items-center justify-between bg-blue-100 text-blue-700 px-3 py-2 rounded-lg cursor-pointer list-none text-sm font-semibold hover:bg-blue-200 transition">
                    <span>Pilih Varian Rasa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <ul class="mt-2 space-y-1">
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span> Matcha
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-black rounded-full mr-2"></span> Chocolate
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-red-400 rounded-full mr-2"></span> Strawberry
                    </li>
                </ul>
            </details>
        </div>
        <div class="w-fit bg-grey border-2 border-blue-500 justify-center rounded-2xl p-2 shadow-lg">
            <img src="<?php echo e(asset('img/cookies.png')); ?>" alt="Cookies" class="w-32 h-32 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            <h3 class="font-bold text-center text-gray-800 mb-2">Cookies</h3>
            
            <details class="group">
                <summary class="flex items-center justify-between bg-blue-100 text-blue-700 px-3 py-2 rounded-lg cursor-pointer list-none text-sm font-semibold hover:bg-blue-200 transition">
                    <span>Pilih Varian Rasa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <ul class="mt-2 space-y-1">
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span> Original
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-red-700 rounded-full mr-2"></span> Chocolate
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span> Red Velvet
                    </li>
                </ul>
            </details>
        </div>
        <div class="w-fit bg-grey border-2 border-blue-500 justify-center rounded-2xl p-2 shadow-lg">
            <img src="<?php echo e(asset('img/cheesecake.png')); ?>" alt="Cheesecake" class="w-32 h-32 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            <h3 class="font-bold text-center text-gray-800 mb-2">Cheesecake</h3>

            <details class="group">
                <summary class="flex items-center justify-between bg-blue-100 text-blue-700 px-3 py-2 rounded-lg cursor-pointer list-none text-sm font-semibold hover:bg-blue-200 transition">
                    <span>Pilih Varian Rasa</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <ul class="mt-2 space-y-1">
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-white rounded-full mr-2"></span> Original
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-yellow-700 rounded-full mr-2"></span> Lotus
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2"></span> Matcha
                    </li>
                </ul>
            </details>
        </div>
        <div class="w-fit bg-grey border-2 border-blue-500 justify-center rounded-2xl p-2 shadow-lg">
            <img src="<?php echo e(asset('img/dubay-ceuwy.png')); ?>" alt="Dubai Chewy Cookie" class="w-32 h-32 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            <h3 class="font-bold text-center text-gray-800 mb-2">Dubai Chewy Cookie</h3>
            
            <details class="group">
                <summary class="flex items-center justify-between bg-blue-100 text-blue-700 px-3 py-2 rounded-lg cursor-pointer list-none text-sm font-semibold hover:bg-blue-200 transition">
                    <span>Add Topping</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-open:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </summary>

                <ul class="mt-2 space-y-1">
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></span> Original
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-red-700 rounded-full mr-2"></span> Chocolate
                    </li>
                    <li class="flex items-center text-xs text-gray-600 p-1 hover:bg-gray-50 rounded">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-2"></span> Coffee
                    </li>
                </ul>
            </details>
        </div>
    </div>
</div>
<div class="bg-white p-6 rounded-lg shadow-md mt-6">
    <h1 class="text-3xl font-bold text-center text-blue-500">DRINK</h1>
    
    <div class="flex flex-wrap justify-center gap-8">
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/strawberry-milk-coffe.png')); ?>" alt="Strawberry Milk Coffee" class="w-40 h-40 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Strawberry Milk Coffee</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/starwberry-coffe.png')); ?>" alt="Strawberry Coffee" class="w-40 h-40 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Strawberry Coffee</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/matcha-strawberry.png')); ?>" alt="Matcha Strawberry" class="w-40 h-40 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Matcha Strawberry</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/gula-aren.png')); ?>" alt="Gula Aren" class="w-40 h-40 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Gula Aren</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/capucibo-lotus.png')); ?>" alt="Cappucino Lotus" class="w-40 h-40 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Cappucino Lotus</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/butterschoct.png')); ?>" alt="Butterscotch" class="w-40 h-40 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Butterscotch</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/matcha.png')); ?>" alt="Matcha" class="w-40 h-40 rounded-2xl  mt-6 object-cover shadow-lg object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Matcha</h3>
        </div>
    </div>
</div>
<div class="bg-white p-6 rounded-lg shadow-md mt-6">
    <h1 class="text-3xl font-bold text-center text-blue-500">OUR PACK</h1>
    
    <div class="flex flex-wrap justify-center gap-8">
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/zip-lock.png')); ?>" alt="Zip Lock" class="w-full" style="max-width: 200px;" class="rounded-2xl  mt-6 object-cover object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Zip Lock</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/snack-pouch.png')); ?>" alt="Snack Pouch" class="w-full" style="max-width: 200px;" class="rounded-2xl  mt-6 object-cover object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Snack Pouch</h3>
        </div>
        <div class="w-64 border-2 border-blue-400 rounded-2xl p-4 shadow-lg flex flex-col justify-between items-center">
            <div class="flex-1 flex items-center justify-center w-full h-48">
                <img src="<?php echo e(asset('img/box-(2).png')); ?>" alt="Box" class="w-full" style="max-width: 200px;" class="rounded-2xl  mt-6 object-cover object-center mx-auto">
            </div>
            <h3 class="font-bold text-center text-gray-800 mb-2">Box</h3>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\UTS-PWEB\resources\views/dashboard.blade.php ENDPATH**/ ?>