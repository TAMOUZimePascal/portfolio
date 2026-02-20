<nav x-data="{ mobileMenuOpen: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{ 'bg-white/90 dark:bg-slate-950/90 backdrop-blur-md shadow-sm': scrolled, 'bg-transparent': !scrolled }"
     class="fixed w-full top-0 z-50 transition-all duration-300 border-b border-white/5 dark:border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="group flex items-center space-x-2">
                    <span class="text-2xl font-extrabold tracking-tighter bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-clip-text text-transparent group-hover:scale-105 transition-transform duration-300">
                        ZPT
                    </span>
                    <span class="hidden sm:block text-slate-800 dark:text-slate-200 font-medium text-sm tracking-wide opacity-0 group-hover:opacity-100 transition-opacity duration-300 -translate-x-2 group-hover:translate-x-0">
                        .dev
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <template x-for="item in [
                    { fr: 'Profil', en: 'Profile', href: '#profil' },
                    { fr: 'Parcours', en: 'Pathway', href: '#parcours' },
                    { fr: 'Compétences', en: 'Skills', href: '#technologie' },
                    { fr: 'Projets', en: 'Projects', href: '#projet' },
                    { fr: 'Contact', en: 'Contact', href: '#contact' }
                ]">
                    <a :href="item.href" 
                       class="px-4 py-2 rounded-full text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-slate-100/50 dark:hover:bg-slate-800/50 transition-all duration-200"
                       x-text="$store.app.lang === 'fr' ? item.fr : item.en">
                    </a>
                </template>
            </div>

            <!-- Controls -->
            <div class="flex items-center space-x-3 ml-4">
                <div class="h-6 w-px bg-slate-200 dark:bg-slate-800 hidden md:block"></div>
                
                <!-- Language Toggle (Hidden as per user request)
                <button @click="$store.app.toggleLang()" class="relative group p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <span class="text-xs font-bold tracking-wider" x-text="$store.app.lang.toUpperCase()"></span>
                    <span class="absolute -bottom-1 left-1/2 w-0 h-0.5 bg-indigo-500 group-hover:w-1/2 transition-all duration-300 -translate-x-1/2"></span>
                </button>
                -->

                <!-- Theme Toggle -->
                <button @click="$store.app.toggleTheme()" class="p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:text-amber-500 dark:hover:text-yellow-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <svg x-show="$store.app.theme === 'light'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    <svg x-show="$store.app.theme === 'dark'" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </button>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden absolute top-full left-0 w-full bg-white dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800 shadow-xl"
         style="display: none;">
        <div class="px-4 py-6 space-y-4">
            <template x-for="item in [
                { fr: 'Profil', en: 'Profile', href: '#profil' },
                { fr: 'Parcours', en: 'Pathway', href: '#parcours' },
                { fr: 'Compétences', en: 'Skills', href: '#technologie' },
                { fr: 'Projets', en: 'Projects', href: '#projet' },
                { fr: 'Contact', en: 'Contact', href: '#contact' }
            ]">
                <a :href="item.href" 
                   @click="mobileMenuOpen = false"
                   class="block text-lg font-medium text-slate-600 dark:text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400"
                   x-text="$store.app.lang === 'fr' ? item.fr : item.en">
                </a>
            </template>
        </div>
    </div>
</nav>
