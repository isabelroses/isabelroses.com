<header class="flex flex-col md:flex-row md:justify-between md:items-center md:px-3 py-16 md:mb-12 gap-y-10 md:gap-y-0">
    <a href="/" class="flex gap-x-3 items-center md:px-3 py-2 my-1 transition rounded-sm"><img src="/assets/avatar3.webp" class="rounded-full" width="32" height="32" alt="Profile picture of Isabel" style="background-image: none;">
        <span class="font-display tracking-tight text-3xl font-black">Isabel</span></a>
    <div class="flex flex-col gap-y-2 md:flex-row md:items-center md:gap-x-4 md:gap-y-0">
        <?php if ($_SERVER['REQUEST_URI'] == "/projects") { ?>
            <a href="gallery" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg fill="currentColor" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 78.67 78.67" xml:space="preserve" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000;">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path d="M9.49,73.833c-1.493,0-2.943-0.24-4.309-0.713l-3.113-1.077l2.392-2.265c3.165-2.997,3.964-6.455,4.016-9.046 C3.004,54.666,0,47.097,0,39.334c0-19.023,17.645-34.5,39.333-34.5s39.334,15.477,39.334,34.5 c0,19.022-17.646,34.498-39.334,34.498c-6.458,0-12.827-1.399-18.505-4.057C18.689,71.289,14.366,73.833,9.49,73.833z M20.361,65.078l1.148,0.581c5.397,2.729,11.561,4.173,17.824,4.173c19.483,0,35.334-13.682,35.334-30.498 c0-16.818-15.851-30.5-35.334-30.5S4,22.516,4,39.334c0,6.99,2.814,13.823,7.925,19.238l0.52,0.552l0.024,0.757 c0.087,2.72-0.401,6.407-2.818,9.951c4.63-0.074,8.89-3.298,9.705-3.95L20.361,65.078z"></path>
                        </g>
                    </g>
                </svg> <span>Blog</span> </a>
            </a>
            <a href="projects" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="block h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg> <span>Projects</span> </a>
            </a><a href="https://isabel.contact" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                    <circle cx="12" cy="10" r="3" />
                    <circle cx="12" cy="12" r="10" />
                </svg> <span>Contact Me</span> </a>
        <?php } else if ($_SERVER['REQUEST_URI'] == "/blog") { ?>
            <a href="gallery" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link text-accent">
                <svg fill="currentColor" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 78.67 78.67" xml:space="preserve" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000;">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path d="M9.49,73.833c-1.493,0-2.943-0.24-4.309-0.713l-3.113-1.077l2.392-2.265c3.165-2.997,3.964-6.455,4.016-9.046 C3.004,54.666,0,47.097,0,39.334c0-19.023,17.645-34.5,39.333-34.5s39.334,15.477,39.334,34.5 c0,19.022-17.646,34.498-39.334,34.498c-6.458,0-12.827-1.399-18.505-4.057C18.689,71.289,14.366,73.833,9.49,73.833z M20.361,65.078l1.148,0.581c5.397,2.729,11.561,4.173,17.824,4.173c19.483,0,35.334-13.682,35.334-30.498 c0-16.818-15.851-30.5-35.334-30.5S4,22.516,4,39.334c0,6.99,2.814,13.823,7.925,19.238l0.52,0.552l0.024,0.757 c0.087,2.72-0.401,6.407-2.818,9.951c4.63-0.074,8.89-3.298,9.705-3.95L20.361,65.078z"></path>
                        </g>
                    </g>
                </svg> <span>Blog</span> </a>
            </a>
            <a href="projects" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="block h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg> <span>Projects</span> </a>
            </a><a href="https://isabel.contact" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                    <circle cx="12" cy="10" r="3" />
                    <circle cx="12" cy="12" r="10" />
                </svg> <span>Contact Me</span> </a>
        <?php } else { ?>
            <a href="gallery" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg fill="currentColor" height="18px" width="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 78.67 78.67" xml:space="preserve" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #000000;">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path d="M9.49,73.833c-1.493,0-2.943-0.24-4.309-0.713l-3.113-1.077l2.392-2.265c3.165-2.997,3.964-6.455,4.016-9.046 C3.004,54.666,0,47.097,0,39.334c0-19.023,17.645-34.5,39.333-34.5s39.334,15.477,39.334,34.5 c0,19.022-17.646,34.498-39.334,34.498c-6.458,0-12.827-1.399-18.505-4.057C18.689,71.289,14.366,73.833,9.49,73.833z M20.361,65.078l1.148,0.581c5.397,2.729,11.561,4.173,17.824,4.173c19.483,0,35.334-13.682,35.334-30.498 c0-16.818-15.851-30.5-35.334-30.5S4,22.516,4,39.334c0,6.99,2.814,13.823,7.925,19.238l0.52,0.552l0.024,0.757 c0.087,2.72-0.401,6.407-2.818,9.951c4.63-0.074,8.89-3.298,9.705-3.95L20.361,65.078z"></path>
                        </g>
                    </g>
                </svg><span>Blog</span> </a>
            </a>
            <a href="projects" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="block h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg> <span>Projects</span> </a>
            </a><a href="https://isabel.contact" class="flex flex-row gap-x-3 items-center text-lg font-display md:px-3 py-1 rounded-sm font-semibold transition link">
                <svg class="block w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3" />
                    <circle cx="12" cy="10" r="3" />
                    <circle cx="12" cy="12" r="10" />
                </svg> <span>Contact Me</span> </a>
        <?php } ?>
        <button type="button" id="theme-toggle" aria-label="Change theme" class="fixed bottom-0 right-0 m-2 z-[9999] rounded px-3 py-2 text-fg-brighter bg-surface/70 hover:bg-surface-hover/70 backdrop-blur-lg"><svg class="block h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="13.5" cy="6.5" r=".5"></circle>
                <circle cx="17.5" cy="10.5" r=".5"></circle>
                <circle cx="8.5" cy="7.5" r=".5"></circle>
                <circle cx="6.5" cy="12.5" r=".5"></circle>
                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z">
                </path>
            </svg> <span id="theme-toggle-words">Theme Swap</span></button>
</header>