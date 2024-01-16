<?php
$menus = ['/' => 'All tasks', '/todo' => 'To do', '/completed' => 'Completed'];
?>

<nav class="h-16 bg-blue-700 text-white w-full px-10 py-2 flex items-center justify-between">
    <ul class=" flex items-center gap-6">
        <?php foreach (array_keys($menus) as $menu) : ?>
            <li class="rounded-md py-1 px-4 <?php echo $menu === parse_url($_SERVER['REQUEST_URI'])['path'] ? "bg-blue-900" : "" ?>  hover:bg-blue-900 cursor-pointer">
                <a class="w-full h-full" href="<?= $menu ?>"><?= $menus[$menu] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
    <!-- <button class="bg-white border border-transparent transition-all hover:bg-blue-700 hover:text-white hover:border-white cursor-pointer text-blue-700 px-5 py-1 rounded-md grid items-center">
        Connecxion
    </button> -->
    <div class="w-10 h-10 bg-white rounded-full text-xl text-bold text-blue-700 flex items-center justify-center">
        T
    </div>
</nav>