<?php
    require base_path('views/partials/head.php');
    require base_path('views/partials/nav.php');

?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold">
            You have no authorization to view this post
        </h1>
        <p class="mt-4">
            <a href="./notes" class="text-blue-500 underline">Go to my notes</a>
        </p>
    </div>
</main>

<?php
    require base_path('views/partials/foot.php');
?>