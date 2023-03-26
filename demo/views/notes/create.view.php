<?php
    require base_path('views/partials/head.php');
    require base_path('views/partials/nav.php');
    require base_path('views/partials/banner.php'); 
?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="../notes" class="text-blue-500 underline">Cancel</a>
        </p>

        <div>
            <div class="md:grid md:grid-cols-0 md:gap-6">
                
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form method="POST" action="/notes/store">
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                        <input
                                        type="text"
                                        name="title"
                                        id="title"
                                        autocomplete="given-name"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        required
                                        min="1"
                                        max="50"
                                        >
                                        <p class="mt-2 text-sm text-gray-500">Note title field is required and no more than 50 characters</p>
                                    </div>
                                    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                    <div class="mt-2">
                                        <textarea
                                        id="description"
                                        name="description"
                                        rows="3"
                                        class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                                        placeholder="Here is an ideia of note..."
                                        required
                                        min="1"
                                        max="200"
                                        ></textarea>
                                        <p class="mt-2 text-sm text-gray-500">Note description field is required and no more than 200 characters</p>
                                    </div>
                                    <?php if(isset($errors)): ?>
                                        <p>
                                            <ul>
                                                <?php foreach($errors as $error): ?>

                                                    <li class="mt-2 text-sm text-red-500"><?= $error ?></li>

                                                <?php endforeach; ?>
                                            </ul>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require base_path('views/partials/foot.php');
?>