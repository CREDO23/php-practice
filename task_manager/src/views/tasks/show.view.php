<?php require partial("head.php") ?>

<?php require partial("nav.php") ?>

<main class="h-[calc(100vh-9rem)] border p-4 flex flex-col gap-4">

    <div class="w-full h-[calc(100vh-4rem)] flex items-center justify-center">
        <div class="w-[40rem] h-full flex flex-col border rounded-md p-6">
            <h3 class="font-bold"><?=$task['title']?></h3>
            <div class="h-[1px] w-full bg-blue-700 my-6"></div>
            <p class="grow"><?=$task['description']?></p>
            <div class="flex self-end gap-3">
                <form action="/tasks/edit" method="get">
                    <input type="text" hidden name="id" value="<?= $task['id'] ?>">
                    <button type="submit" class=" bg-blue-100 py-1 px-3 rounded text-sm font-light text-blue-700">Edit</button>
                </form>
                <form action="/tasks" method="post">
                    <input type="text" hidden name="_method" value="DELETE">
                    <input type="text" hidden name="id" value="<?= $task['id'] ?>">
                    <button type="submit" class=" bg-red-100 py-1 px-3 rounded text-sm font-light text-red-700">Delete</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require partial("footer.php") ?>