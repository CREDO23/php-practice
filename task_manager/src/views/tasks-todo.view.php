<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<main class="h-[calc(100vh-9rem)] border p-4 flex flex-col gap-4">

    <div class="w-full flex items-center justify-end h-16">
        <a href="/task/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">New task</a>
    </div>

    <div class="w-full h-[calc(100vh-4rem)]   overflow-auto flex flex-wrap gap-10">
        <?php foreach ($tasks as $task) : ?>
            <div class="w-80 h-44 p-4 bg-white rounded-md shrink-0 flex flex-col justify-between">
                <h3 class="font-semibold"><?= $task['title'] ?></h3>
                <p class="w-full text-sm grow "><?= $task['description'] ?></p>
                <div class="w-full flex justify-between items-center">
                    <input class="h-6 w-6 " type="checkbox" name="" id="">
                    <div class="flex gap-3">
                        <button class=" bg-blue-100 py-1 px-3 rounded text-sm font-light text-blue-700">Edit</button>
                        <button class=" bg-red-100 py-1 px-3 rounded text-sm font-light text-red-700">Delete</button>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
    </div>
</main>

<?php require "partials/footer.php" ?>