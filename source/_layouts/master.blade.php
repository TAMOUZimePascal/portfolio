<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description ?? 'Zimé Pascal TAMOU - Développeur Full-Stack formé en Data Science | Cofondateur Bimmo Group' }}">
        <title>{{ $page->title ?? 'Zimé Pascal TAMOU - Portfolio' }}</title>
        
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Devicon for Tech Stack Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
        
        <!-- Inline Script for Immediate Theme/Lang Application (Prevents FOUC) -->
        <script>
            // Initialize Theme
            const theme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

            // Initialize Language
            const lang = localStorage.getItem('lang') || 'fr';
            document.documentElement.setAttribute('lang', lang);
        </script>

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://identity.netlify.com/v1/netlify-identity-widget.js"></script>
    </head>
    <body class="bg-gray-50 dark:bg-slate-950 text-slate-800 dark:text-slate-200 font-sans antialiased selection:bg-indigo-500 selection:text-white">
        <div id="app" class="flex flex-col min-h-screen">
            @include('_components.navbar')

            <main class="flex-1">
                @yield('content')
            </main>

            @include('_components.footer')
        </div>

        <script>
            if (window.netlifyIdentity) {
                window.netlifyIdentity.on("init", user => {
                if (!user) {
                    window.netlifyIdentity.on("login", () => {
                    document.location.href = "/admin/";
                    });
                }
                });
            }
        </script>
    </body>
</html>
