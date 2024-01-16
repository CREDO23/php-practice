<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<div class="h-[calc(100vh-9rem)] p-10 border overflow-auto flex items-center justify-center">
    <div class="text-center">
        <h1 class="mb-4 text-6xl font-semibold text-red-500">404</h1>
        <p class="mb-4 text-lg text-gray-600">Oops! Looks like you're lost.</p>
        <div class="animate-bounce">
            <svg class="mx-auto h-16 w-16 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
            </svg>
        </div>
        <p class="mt-4 text-gray-600">Let's get you back <a href="/" class="text-blue-500">home</a>.</p>
    </div>
</div>
</div>

<?php require "partials/footer.php" ?>