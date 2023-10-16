
<div class="max-w-[300px] mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg m-0" src="<?php echo $car->getImg(); ?>" alt="<?php echo $car->getName(); ?>" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $car->getName(); ?></h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $car->getEngine(); ?></p>
        <p class="m-0 mb-4 bg-pink-600 text-white px-2 py-1 inline-block">
            <?php echo $car->getYear(); ?>
        </p>
        <div>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                 <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>
