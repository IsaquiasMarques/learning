<?php
    require base_path('views/partials/head.php');
    require base_path('views/partials/nav.php');
    require base_path('views/partials/banner.php'); 
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="./notes" class="text-blue-500 underline">Go back</a>
        </p>

        <p>
            <?= $note['body'] ?>
        </p>

        <p class="mt-6">
            <a
            href="/note/edit?id=<?= $note['id'] ?>"
            class="inline-flex justify-center rounded-md bg-gray-500 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
            
            >Edit Note</a>
        </p>

    </div>

</main>

<?php
    require base_path('views/partials/foot.php');
?>