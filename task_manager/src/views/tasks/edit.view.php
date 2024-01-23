<?php require partial("head.php") ?>

<?php require partial("nav.php") ?>

<main class="h-[calc(100vh-9rem)] border p-4 flex flex-col gap-4">

    <div class="w-full h-[calc(100vh-4rem)] flex items-center justify-center">
        <form action="/tasks" method="post" class="w-[40rem] h-full flex flex-col gap-6 border rounded-md p-6">
            <div class="w-full">
                <input class="border-none w-full" type="text" name="title" value="<?= $task['title'] ?? $_POST['title']?>">
                <p class="text-xs w-full text-red-800"><?= $errors['title'] ?? '' ?></p>
            </div>
            <div class="w-full flex flex-col grow">
                <textarea class="border-none w-full grow" name="description" id="" cols="30" rows="10"><?= $task['description'] ?? $_POST['description'] ?></textarea>
                <p class="text-xs w-full text-red-800"><?= $errors['description'] ?? '' ?></p>
            </div>
            <div class="flex self-end gap-3">
                <div>
                    <input type="text" hidden name="_method" value="PUT">
                    <input type="text" hidden name="id" value="<?= $task['id'] ?>">
                    <button type="submit" class=" bg-blue-100 py-1 px-3 rounded text-sm font-light text-blue-700">Save</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php require partial("footer.php") ?>