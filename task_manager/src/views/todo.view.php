<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<main class="h-[calc(100vh-9rem)] p-10 border overflow-auto flex flex-wrap gap-10">
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="w-96 h-44 p-3 border rounded-md shrink-0 flex flex-col justify-between">
            <h3 class="font-semibold">Task title</h3>
            <p class="w-full">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, incidunt? Explicabo cupiditate ducimus vitae impedit, ut cum.</p>
            <div class="w-full flex justify-between items-center">
                <input class="h-6 w-6 " type="checkbox" name="" id="">
                <div class="flex gap-3">
                    <button class=" bg-blue-100 py-1 px-3 rounded text-sm font-light text-blue-700">Edit</button>
                    <button class=" bg-red-100 py-1 px-3 rounded text-sm font-light text-red-700">Delete</button>
                </div>
            </div>

        </div>
    <?php endfor ?>
</main>

<?php require "partials/footer.php" ?>