<?php
    require base_path('views/partials/head.php');
    require base_path('views/partials/nav.php');
    require base_path('views/partials/banner.php'); 
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="./note?id=<?= $note['id'] ?>" class="text-blue-500 underline">
                <?= $note['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <p class="mt-6">
            <a href="./notes/create" class="text-blue-500 hover:underline">
                Create Note
            </a>
        </p>
    </div>

</main>

<?php
    require base_path('views/partials/foot.php');
?>