<?php
$menus = ['/tasks' => 'All tasks', '/tasks/todo' => 'To do', '/tasks/completed' => 'Completed'];
?>

<nav class="h-16 bg-blue-700 text-white w-full px-10 py-2 flex items-center justify-between">
    <ul class=" flex items-center gap-6">
        <?php foreach (array_keys($menus) as $menu) : ?>
            <li class="rounded-md py-1 px-4 <?php echo $menu === parse_url($_SERVER['REQUEST_URI'])['path'] ? "bg-blue-900" : "" ?>  hover:bg-blue-900 cursor-pointer">
                <a class="w-full h-full" href="<?= $menu ?>"><?= $menus[$menu] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
    <!-- <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Connecxion
    </button> -->
    <div class="w-10 cursor-pointer h-10 bg-white rounded-full text-xl text-bold text-blue-700 flex items-center justify-center">
        T
    </div>
</nav>