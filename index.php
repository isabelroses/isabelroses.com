<!DOCTYPE html>
<html lang="en">

<?php include_once 'components/head.php'; ?>

<head>
    <title>Isabel</title>
</head>

<body>
    <?php include_once 'components/header.php'; ?>

    <main class="flex flex-col w-full max-w-[80ch] mx-auto">
        <article class="prose enhanced-prose">
            <h1>Haiii, I'm Isabel</h1>
            <p class="subtitle">I am a first year university student with a passion for computer science</p>

            <h2 class="subtitle">Activity</h2>
            <div id="activity" class="flex-col">
                <?php include_once 'components/activity.php'; ?>
            </div>

            <h2>Projects</h2>
            <div id="projects" class="not-prose flex flex-col">
                <div class="projects-grid">
                    <a class="flex flex-col justify-between p-6 rounded-lg transition-all bg-surface hover:bg-surface-hover shadow-md shadow-surface/20 md:col-span-2" href="https://github.com/isabelroses/dotfiles">
                        <div class="flex flex-col gap-y-2">
                            <h3 class="font-bold font-display text-xl">Dotfiles</h3>
                            <p class="text-fg-dimmed">All of my linux configuatrion files, prodminantly nixos</p>
                        </div>
                        <svg class="block w-4 h-4 mt-4 self-end" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                    <a class="flex flex-col justify-between p-6 rounded-lg transition-all bg-surface hover:bg-surface-hover shadow-md shadow-surface/20 md:col-span-2" href="https://github.com/isabelroses/bellado" target="_blank">
                        <div class="flex flex-col gap-y-2">
                            <h3 class="font-bold font-display text-xl">Bellado</h3>
                            <p class="text-fg-dimmed">A cli todo tool to help you actually do your work</p>
                        </div>
                        <svg class="block w-4 h-4 mt-4 self-end" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                    <a class="flex flex-col justify-between p-6 rounded-lg transition-all bg-surface hover:bg-surface-hover shadow-md shadow-surface/20 md:col-span-2" href="https://github.com/isabelroses/blahaj" target="_blank">
                        <div class="flex flex-col gap-y-2">
                            <h3 class="font-bold font-display text-xl">Blahaj</h3>
                            <p class="text-fg-dimmed">A multipurpose discord bot that shall soon rule the world</p>
                        </div>
                        <svg class="block w-4 h-4 mt-4 self-end" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                    <a class="flex flex-col justify-between p-6 rounded-lg transition-all bg-surface hover:bg-surface-hover shadow-md shadow-surface/20" href="https://github.com/isabelroses/isabelroses.com" target="_blank">
                        <div class="flex flex-col gap-y-2">
                            <h3 class="font-bold font-display text-xl">isabelroses.com</h3>
                            <p class="text-fg-dimmed">The source code for this website</p>
                        </div>
                        <svg class="block w-4 h-4 mt-4 self-end" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                    <a class="flex flex-col justify-between p-6 rounded-lg transition-all bg-surface hover:bg-surface-hover shadow-md shadow-surface/20" href="https://github.com/isabelroses/isabel.contact/" target="_blank">
                        <div class="flex flex-col gap-y-2">
                            <h3 class="font-bold font-display text-xl">isabel.contact</h3>
                            <p class="text-fg-dimmed">The source code to my contacts websites</p>
                        </div>
                        <svg class="block w-4 h-4 mt-4 self-end" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </div>
            </div>

            <h2 class="subtitle">Blog</h2>
            <div id="blog">
                <?php include_once 'components/gallery.php'; ?>
            </div>
        </article>
    </main>

    <?php include_once 'components/footer.php'; ?>
</body>

</html>