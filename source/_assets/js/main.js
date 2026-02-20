document.addEventListener('alpine:init', () => {
    Alpine.store('app', {
        theme: localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'),
        lang: 'fr', // Forced to French

        toggleTheme() {
            this.theme = this.theme === 'dark' ? 'light' : 'dark';
            localStorage.setItem('theme', this.theme);
            
            if (this.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        },

        toggleLang() {
            this.lang = this.lang === 'fr' ? 'en' : 'fr';
            localStorage.setItem('lang', this.lang);
            document.documentElement.setAttribute('lang', this.lang);
        }
    });
});
