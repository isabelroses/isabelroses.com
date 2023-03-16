<?php if ($_SERVER['REQUEST_URI'] == "/projects") { ?>
    <header class="flex flex-col md:flex-row md:justify-between md:items-center md:px-6 py-16 md:mb-12 gap-y-10 md:gap-y-0">
        <a href="/" class="flex gap-x-3 items-center md:px-3 py-2 my-1 transition rounded-sm"><img src="/assets/avatar3.webp" class="rounded-full" width="32" height="32" alt="Profile picture of Isabel" style="background-image: none;">
            <span class="font-display tracking-tight text-3xl font-black">Isabel</span></a>
        <div class="flex flex-col gap-y-2 md:flex-row md:items-center md:gap-x-4 md:gap-y-0">
            <a href="projects" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="block h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg> <span>Projects</span> </a>
            <a href="/uses" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                </svg> <span>Uses</span> </a>
            </a><a href="https://isabel.contact" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                    <circle cx="12" cy="10" r="3" />
                    <circle cx="12" cy="12" r="10" />
                </svg> <span>Contact Me</span> </a>

            <button type="button" id="theme-toggle" aria-label="Change theme" class="fixed bottom-0 right-0 m-2 z-[9999] rounded px-3 py-2 text-fg-brighter bg-surface/70 hover:bg-surface-hover/70 backdrop-blur-lg"><svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="13.5" cy="6.5" r=".5"></circle>
                    <circle cx="17.5" cy="10.5" r=".5"></circle>
                    <circle cx="8.5" cy="7.5" r=".5"></circle>
                    <circle cx="6.5" cy="12.5" r=".5"></circle>
                    <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z">
                    </path>
                </svg> <span id="theme-toggle-words">Theme Swap</span></button>
    </header>
<?php } elseif ($_SERVER['REQUEST_URI'] == "/uses") { ?>
    <header class="flex flex-col md:flex-row md:justify-between md:items-center md:px-6 py-16 md:mb-12 gap-y-10 md:gap-y-0">
        <a href="/" class="flex gap-x-3 items-center md:px-3 py-2 my-1 transition rounded-sm"><img src="/assets/avatar3.webp" class="rounded-full" width="32" height="32" alt="Profile picture of Isabel" style="background-image: none;">
            <span class="font-display tracking-tight text-3xl font-black">Isabel</span></a>
        <div class="flex flex-col gap-y-2 md:flex-row md:items-center md:gap-x-4 md:gap-y-0">
            <a href="projects" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="block h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg> <span>Projects</span> </a>
            <a href="/uses" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link text-accent">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                </svg> <span>Uses</span> </a>
            </a><a href="https://isabel.contact" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                    <circle cx="12" cy="10" r="3" />
                    <circle cx="12" cy="12" r="10" />
                </svg> <span>Contact Me</span> </a>

            <button type="button" id="theme-toggle" aria-label="Change theme" class="fixed bottom-0 right-0 m-2 z-[9999] rounded px-3 py-2 text-fg-brighter bg-surface/70 hover:bg-surface-hover/70 backdrop-blur-lg"><svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="13.5" cy="6.5" r=".5"></circle>
                    <circle cx="17.5" cy="10.5" r=".5"></circle>
                    <circle cx="8.5" cy="7.5" r=".5"></circle>
                    <circle cx="6.5" cy="12.5" r=".5"></circle>
                    <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z">
                    </path>
                </svg> <span id="theme-toggle-words">Theme Swap</span></button>
    </header>
<?php } else { ?>
    <header class="flex flex-col md:flex-row md:justify-between md:items-center md:px-6 py-16 md:mb-12 gap-y-10 md:gap-y-0">
        <a href="/" class="flex gap-x-3 items-center md:px-3 py-2 my-1 transition rounded-sm"><img src="/assets/avatar3.webp" class="rounded-full" width="32" height="32" alt="Profile picture of Isabel" style="background-image: none;">
            <span class="font-display tracking-tight text-3xl font-black">Isabel</span></a>
        <div class="flex flex-col gap-y-2 md:flex-row md:items-center md:gap-x-4 md:gap-y-0">
            <a href="projects" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="block h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg> <span>Projects</span> </a>
            <a href="/uses" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                </svg> <span>Uses</span> </a>
            </a><a href="https://isabel.contact" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                    <circle cx="12" cy="10" r="3" />
                    <circle cx="12" cy="12" r="10" />
                </svg> <span>Contact Me</span> </a>

            <button type="button" id="theme-toggle" aria-label="Change theme" class="fixed bottom-0 right-0 m-2 z-[9999] rounded px-3 py-2 text-fg-brighter bg-surface/70 hover:bg-surface-hover/70 backdrop-blur-lg"><svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="13.5" cy="6.5" r=".5"></circle>
                    <circle cx="17.5" cy="10.5" r=".5"></circle>
                    <circle cx="8.5" cy="7.5" r=".5"></circle>
                    <circle cx="6.5" cy="12.5" r=".5"></circle>
                    <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z">
                    </path>
                </svg> <span id="theme-toggle-words">Theme Swap</span></button>
    </header>
<?php } ?>