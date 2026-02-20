@extends('_layouts.master')

@section('content')
<!-- Spacer for fixed navbar -->
<div class="h-16"></div>

<!-- Hero Section / Profil -->
<!-- Hero Section -->
<section id="profil" class="relative min-h-[90vh] flex items-center overflow-hidden pt-20">
    <!-- Modern Gradient Background -->
    <div class="absolute inset-0 bg-gray-50 dark:bg-slate-950">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-indigo-500/10 dark:bg-indigo-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-purple-500/10 dark:bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Column: Content -->
            <div class="space-y-8 animate-fade-in-up text-center lg:text-left order-2 lg:order-1">
                <!-- Status Badge -->
                <div class="inline-flex items-center space-x-2 px-4 py-2 bg-white/60 dark:bg-slate-900/60 backdrop-blur-sm rounded-full border border-slate-200 dark:border-slate-800 shadow-sm">
                    <span class="relative flex h-2.5 w-2.5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="text-xs font-bold tracking-wide text-slate-700 dark:text-slate-300 uppercase" 
                          x-text="$store.app.lang === 'fr' ? 'Disponible pour missions & projets' : 'Available for freelance & projects'">
                    </span>
                </div>
                
                <!-- Headline -->
                <div class="space-y-2">
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black tracking-tight text-slate-900 dark:text-white leading-[1.1]">
                        Zimé Pascal
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">TAMOU</span>
                    </h1>
                </div>
                
                <!-- Description -->
                <p class="text-lg md:text-xl text-slate-600 dark:text-slate-400 leading-relaxed max-w-2xl mx-auto lg:mx-0 border-l-4 border-indigo-500/30 pl-6"
                   x-text="$store.app.lang === 'fr' ? 'Développeur Backend Laravel (2 ans) : modélisation de données, optimisation SQL. Formation Data Science & ML. Cofondateur Bimmo Group. Vision : IA appliquée à la construction intelligente.' : 'Laravel Developer & Data Science Specialist. Data modeling | SQL Optimization | Machine Learning. Co-founder of Bimmo Group. My Mission: Driving innovation in Smart Construction through Applied AI.'">
                   Développeur Backend Laravel (2 ans) : modélisation de données, optimisation SQL. Formation Data Science & ML. Cofondateur Bimmo Group. Vision : IA appliquée à la construction intelligente.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="#projet" class="group inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white bg-slate-900 dark:bg-white dark:text-slate-900 rounded-full overflow-hidden shadow-lg hover:shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-1">
                        <span x-text="$store.app.lang === 'fr' ? 'Voir mes projets' : 'View My Projects'">Voir mes projets</span>
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold text-slate-700 dark:text-slate-200 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-full hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-300 hover:-translate-y-1">
                        <span x-text="$store.app.lang === 'fr' ? 'Me contacter' : 'Contact Me'">Me contacter</span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Visual -->
            <div class="relative order-1 lg:order-2 flex justify-center lg:justify-end">
                <!-- Abstract Decorative Circle/Blob Behind -->
                 <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-gradient-to-tr from-indigo-500/20 to-purple-500/20 rounded-full blur-3xl animate-pulse"></div>

                <!-- Glassmorphic Card Container -->
                <div class="relative p-6 bg-white/30 dark:bg-slate-800/30 backdrop-blur-xl rounded-3xl border border-white/20 shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                    <!-- Placeholder for Professional Photo -->
                    <div class="relative w-72 h-72 sm:w-96 sm:h-96 rounded-2xl overflow-hidden bg-slate-200 dark:bg-slate-800">
                        <img src="/assets/images/profile.jpg" alt="Zimé Pascal" class="object-cover w-full h-full">
                        
                        <!-- Floating Badge 1 -->
                        <div class="absolute bottom-6 left-6 bg-white/90 dark:bg-slate-900/90 backdrop-blur p-3 rounded-xl shadow-lg flex items-center gap-3 animate-bounce" style="animation-duration: 3s;">
                            <div class="p-2 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg text-indigo-600 dark:text-indigo-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 dark:text-slate-400 font-semibold">Experience</p>
                                <p class="text-sm font-bold text-slate-900 dark:text-white">2+ Years</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="absolute top-6 right-6 bg-white/90 dark:bg-slate-900/90 backdrop-blur p-3 rounded-xl shadow-lg flex items-center gap-3 animate-bounce" style="animation-duration: 4s; animation-delay: 1s;">
                            <div class="p-2 bg-purple-100 dark:bg-purple-900/50 rounded-lg text-purple-600 dark:text-purple-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 dark:text-slate-400 font-semibold">Projects</p>
                                <p class="text-sm font-bold text-slate-900 dark:text-white">10+ Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Unified Experience & Education Timeline -->
<section id="parcours" class="py-24 bg-white dark:bg-slate-900 overflow-hidden relative">
    <!-- Background Decor -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-[20%] right-[-10%] w-[500px] h-[500px] bg-indigo-500/5 dark:bg-indigo-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-[10%] left-[-10%] w-[400px] h-[400px] bg-purple-500/5 dark:bg-purple-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 animate-fade-in-up">
            <h2 class="text-sm font-bold text-indigo-600 dark:text-indigo-400 uppercase tracking-[0.2em] mb-3" x-text="$store.app.lang === 'fr' ? 'Mon Parcours' : 'My Journey'">Mon Parcours</h2>
            <h3 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white tracking-tight">
                <span x-text="$store.app.lang === 'fr' ? 'Expérience' : 'Experience'">Expérience</span> & <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600" x-text="$store.app.lang === 'fr' ? 'Formation' : 'Education'">Formation</span>
            </h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24">
            
            <!-- Left Column: Professional Experience -->
            <div class="relative">
                <h4 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center">
                    <span class="p-2 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg mr-4 text-indigo-600 dark:text-indigo-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </span>
                    <span x-text="$store.app.lang === 'fr' ? 'Expérience Pro' : 'Experience'">Expérience Pro</span>
                </h4>
                
                <!-- Timeline Line -->
                <div class="absolute left-5 top-20 bottom-0 w-0.5 bg-slate-200 dark:bg-slate-800"></div>

                <div class="space-y-12 pl-12">
                    
                    <!-- Bimmo Group -->
                    <div class="relative group">
                        <div class="absolute -left-[3.25rem] mt-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-slate-900 bg-emerald-500 shadow z-10"></div>
                        <div class="group-hover:-translate-y-2 transition-transform duration-300">
                            <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-100 dark:border-slate-700 relative hover:border-emerald-500/30 transition-colors">
                                <span class="px-3 py-1 text-xs font-bold text-emerald-600 bg-emerald-100 dark:bg-emerald-900/30 dark:text-emerald-400 rounded-full mb-3 inline-block" x-text="$store.app.lang === 'fr' ? 'En cours' : 'Ongoing'">En cours</span>
                                <h5 class="text-lg font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Cofondateur & Développeur' : 'Co-founder & Developer'">Cofondateur & Développeur</h5>
                                <h5 class="text-md font-semibold text-slate-700 dark:text-slate-300 mt-1" x-text="$store.app.lang === 'fr' ? 'Responsable Communication & Marketing' : 'Head of Communication & Marketing'">Responsable Communication & Marketing</h5>
                                <p class="text-indigo-600 dark:text-indigo-400 font-medium text-sm mt-1">BIMMO GROUP SARL</p>
                                <p class="text-slate-500 dark:text-slate-400 text-xs mt-1 mb-3" x-text="$store.app.lang === 'fr' ? 'Nov 2024 - Présent • Cotonou' : 'Nov 2024 - Present • Cotonou'">Nov 2024 - Présent • Cotonou</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300" x-text="$store.app.lang === 'fr' ? 'Conception plateforme immobilière, étude de marché, Stack Laravel.' : 'Real estate platform design, market research, Laravel Stack.'"></p>
                            </div>
                        </div>
                    </div>

                    <!-- CENIX -->
                    <div class="relative group">
                         <div class="absolute -left-[3.25rem] mt-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-slate-900 bg-blue-500 shadow z-10"></div>
                         <div class="group-hover:-translate-y-2 transition-transform duration-300">
                            <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-100 dark:border-slate-700 relative hover:border-blue-500/30 transition-colors">
                                <span class="px-3 py-1 text-xs font-bold text-blue-600 bg-blue-100 dark:bg-blue-900/30 dark:text-blue-400 rounded-full mb-3 inline-block" x-text="$store.app.lang === 'fr' ? 'Freelance' : 'Freelance'">Freelance</span>
                                <h5 class="text-lg font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Développeur Full-Stack' : 'Full-Stack Developer'">Développeur Full-Stack</h5>
                                <p class="text-indigo-600 dark:text-indigo-400 font-medium text-sm">CENIX</p>
                                <p class="text-slate-500 dark:text-slate-400 text-xs mt-1 mb-3" x-text="$store.app.lang === 'fr' ? 'Déc 2024 - Présent • Cotonou' : 'Dec 2024 - Present • Cotonou'">Déc 2024 - Présent • Cotonou</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300" x-text="$store.app.lang === 'fr' ? 'Dév. sites web (\'La Ruche\', \'Le Jallouvre\'). Solutions sur mesure.' : 'Website development (\'La Ruche\', \'Le Jallouvre\'). Custom-made solutions.'"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Cabro Group -->
                    <div class="relative group">
                         <div class="absolute -left-[3.25rem] mt-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-slate-900 bg-orange-500 shadow z-10"></div>
                         <div class="group-hover:-translate-y-2 transition-transform duration-300">
                            <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-100 dark:border-slate-700 relative hover:border-orange-500/30 transition-colors">
                                <span class="px-3 py-1 text-xs font-bold text-orange-600 bg-orange-100 dark:bg-orange-900/30 dark:text-orange-400 rounded-full mb-3 inline-block" x-text="$store.app.lang === 'fr' ? 'Stage' : 'Internship'">Stage</span>
                                <h5 class="text-lg font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Stagiaire Développeur' : 'Developer Intern'">Stagiaire Développeur</h5>
                                <p class="text-indigo-600 dark:text-indigo-400 font-medium text-sm">CABRO GROUP</p>
                                <p class="text-slate-500 dark:text-slate-400 text-xs mt-1 mb-3" x-text="$store.app.lang === 'fr' ? 'Avr 2023 - Oct 2023 • Parakou' : 'Apr 2023 - Oct 2023 • Parakou'">Avr 2023 - Oct 2023 • Parakou</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300" x-text="$store.app.lang === 'fr' ? 'Systèmes de gestion (Hôtellerie, Atelier). Analyse fonctionnelle.' : 'Management systems (Hospitality, Workshop). Functional analysis.'"></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Academic Background -->
            <div class="relative">
                <h4 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center">
                    <span class="p-2 bg-purple-100 dark:bg-purple-900/50 rounded-lg mr-4 text-purple-600 dark:text-purple-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/></svg>
                    </span>
                    <span x-text="$store.app.lang === 'fr' ? 'Formation' : 'Education'">Formation</span>
                </h4>

                 <!-- Timeline Line -->
                <div class="absolute left-5 top-20 bottom-0 w-0.5 bg-slate-200 dark:bg-slate-800"></div>

                <div class="space-y-12 pl-12">
                    
                    <!-- DataGong -->
                    <div class="relative group">
                         <div class="absolute -left-[3.25rem] mt-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-slate-900 bg-purple-500 shadow z-10"></div>
                         <div class="group-hover:-translate-y-2 transition-transform duration-300">
                            <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-100 dark:border-slate-700 relative hover:border-purple-500/30 transition-colors">
                                <span class="px-3 py-1 text-xs font-bold text-purple-600 bg-purple-100 dark:bg-purple-900/30 dark:text-purple-400 rounded-full mb-3 inline-block" x-text="$store.app.lang === 'fr' ? 'Spécialisation' : 'Specialization'">Spécialisation</span>
                                <h5 class="text-lg font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Data Science & IA' : 'Data Science & AI'">Data Science & IA</h5>
                                <p class="text-purple-600 dark:text-purple-400 font-medium text-sm">SAS DATAGONG (France)</p>
                                <p class="text-slate-500 dark:text-slate-400 text-xs mt-1 mb-3" x-text="$store.app.lang === 'fr' ? 'Sept 2024 - Jan 2025' : 'Sept 2024 - Jan 2025'">Sept 2024 - Jan 2025</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300" x-text="$store.app.lang === 'fr' ? 'Machine Learning, Deep Learning, Computer Vision.' : 'Machine Learning, Deep Learning, Computer Vision.'"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Licence -->
                    <div class="relative group">
                         <div class="absolute -left-[3.25rem] mt-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-slate-900 bg-indigo-500 shadow z-10"></div>
                         <div class="group-hover:-translate-y-2 transition-transform duration-300">
                            <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-100 dark:border-slate-700 relative hover:border-indigo-500/30 transition-colors">
                                <span class="px-3 py-1 text-xs font-bold text-indigo-600 bg-indigo-100 dark:bg-indigo-900/30 dark:text-indigo-400 rounded-full mb-3 inline-block" x-text="$store.app.lang === 'fr' ? 'Licence' : 'Bachelor\'s'">Licence</span>
                                <h5 class="text-lg font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Génie Logiciel' : 'Software Engineering'">Génie Logiciel</h5>
                                <p class="text-indigo-600 dark:text-indigo-400 font-medium text-sm">HECM (Parakou)</p>
                                <p class="text-slate-500 dark:text-slate-400 text-xs mt-1 mb-3" x-text="$store.app.lang === 'fr' ? 'Sept 2021 - Juin 2024' : 'Sept 2021 - June 2024'">Sept 2021 - Juin 2024</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300" x-text="$store.app.lang === 'fr' ? 'Conception de systèmes, programmation avancée, base de données.' : 'System design, advanced programming, databases.'"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Bac -->
                    <div class="relative group">
                         <div class="absolute -left-[3.25rem] mt-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-slate-900 bg-slate-400 shadow z-10"></div>
                         <div class="group-hover:-translate-y-2 transition-transform duration-300">
                            <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border border-slate-100 dark:border-slate-700 relative hover:border-slate-500/30 transition-colors">
                                <span class="px-3 py-1 text-xs font-bold text-slate-600 bg-slate-100 dark:bg-slate-700 dark:text-slate-400 rounded-full mb-3 inline-block" x-text="$store.app.lang === 'fr' ? 'Baccalauréat' : 'High School Diploma'">Baccalauréat</span>
                                <h5 class="text-lg font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Série D' : 'Série D (Science)'">Série D</h5>
                                <p class="text-indigo-600 dark:text-indigo-400 font-medium text-sm">CEG Bembèrèkè</p>
                                <p class="text-slate-500 dark:text-slate-400 text-xs mt-1 mb-3">2019</p>
                                <p class="text-sm text-slate-600 dark:text-slate-300" x-text="$store.app.lang === 'fr' ? 'Sciences de la Vie et de la Terre, Mathématiques.' : 'Life and Earth Sciences, Mathematics.'"></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Technologie Section -->
<section id="technologie" class="py-24 bg-white dark:bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400 uppercase tracking-wide" x-text="$store.app.lang === 'fr' ? 'Compétences' : 'Skills'">Compétences</h2>
            <p class="mt-2 text-4xl font-extrabold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Compétences Techniques' : 'Technical Skills'">
                Compétences Techniques
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Développement d’applications -->
            <div class="group relative bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-glow transition-all duration-300 border border-slate-200 dark:border-slate-700">
                <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-indigo-600 rounded-xl flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Développement d’applications' : 'Application Development'">Développement d’applications</h3>
                    </div>
                    <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Analyse des besoins clients (UML)' : 'Client Needs Analysis (UML)'">Analyse des besoins clients (UML)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Développement back-end avec Laravel' : 'Backend Development with Laravel'">Développement back-end avec Laravel</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Bases de données relationnelles (MySQL, PostgreSQL)' : 'Relational Databases (MySQL, PostgreSQL)'">Bases de données relationnelles (MySQL, PostgreSQL)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Conception et intégration d’API REST' : 'REST API Design & Integration'">API REST</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Systèmes de gestion de stock et d’information' : 'Stock & Information Management Systems'">Systèmes de gestion de stock et d’information</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Déploiement & bonnes pratiques (MVC, DRY, SOLID)' : 'Deployment & BEST Practices (MVC, DRY, SOLID)'">Déploiement d’applications & bonnes pratiques logicielles (MVC, DRY, SOLID)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Data Science & Machine Learning -->
            <div class="group relative bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-glow transition-all duration-300 border border-slate-200 dark:border-slate-700">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Data Science & Machine Learning' : 'Data Science & Machine Learning'">Data Science & Machine Learning</h3>
                    </div>
                    <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Analyse et prétraitement des données' : 'Data Analysis & Preprocessing'">Analyse et prétraitement des données</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Ingénierie des caractéristiques (Feature engineering)' : 'Feature Engineering'">Feature engineering</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Modélisation Machine Learning' : 'Machine Learning Modeling'">Modélisation Machine Learning</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Évaluation (Accuracy, Precision, Recall, ROC-AUC)' : 'Evaluation (Accuracy, Precision, Recall, ROC-AUC)'">Évaluation des modèles</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-purple-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span x-text="$store.app.lang === 'fr' ? 'Déploiement et intégration de modèles ML' : 'ML Model Deployment & Integration'">Déploiement et intégration de modèles ML</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Logiciels & Outils Techniques -->
            <div class="group relative bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-glow transition-all duration-300 border border-slate-200 dark:border-slate-700">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-500/5 to-gray-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-slate-700 rounded-xl flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Logiciels & Outils' : 'Software & Tools'">Logiciels & Outils Techniques</h3>
                    </div>
                    <ul class="space-y-3 text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Github</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Clickup</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Colab & Anaconda</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-500 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>VS Code, Cursor & OpenCV</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Technologies -->
            <div class="group relative bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg hover:shadow-glow transition-all duration-300 border border-slate-200 dark:border-slate-700">
                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-teal-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-emerald-600 rounded-xl flex items-center justify-center text-white">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Technologies' : 'Technologies'">Technologies</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs font-bold text-indigo-500 uppercase tracking-widest mb-2">Python</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Numpy, Pandas, Scikit-learn, Matplotlib, Seaborn</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-red-500 uppercase tracking-widest mb-2">Laravel & PHP</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Laravel, php, UML, SQL</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-blue-500 uppercase tracking-widest mb-2">Front-end</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">CSS, Bootstrap, Tailwind</p>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-green-500 uppercase tracking-widest mb-2" x-text="$store.app.lang === 'fr' ? 'Autre' : 'Other'">Autre</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400">C++</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl p-8 border border-indigo-100 dark:border-slate-600">
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 text-center" x-text="$store.app.lang === 'fr' ? 'Compétences Transversales' : 'Soft Skills'">Compétences Transversales</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-indigo-600 rounded-full mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Autonome & Collaboratif' : 'Autonomous & Collaborative'">Autonome & Collaboratif</p>
                </div>
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-purple-600 rounded-full mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Rigoureux & Organisé' : 'Rigorous & Organized'">Rigoureux & Organisé</p>
                </div>
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-12 h-12 bg-pink-600 rounded-full mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="font-semibold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Communication & Vulgarisation' : 'Communication & Outreach'">Communication & Vulgarisation</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projet Section -->
<section id="projet" class="py-24 bg-slate-50 dark:bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400 uppercase tracking-wide" x-text="$store.app.lang === 'fr' ? 'Portfolio' : 'Portfolio'">Portfolio</h2>
            <p class="mt-2 text-4xl font-extrabold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Dernières Réalisations' : 'Recent Work'">
                Dernières Réalisations
            </p>
        </div>

        <!-- Project Grid with Modal Support -->
        <div x-data="{ 
            selectedProject: null,
            currentImageIndex: 0,
            showAllProjects: false,
            showLightbox: false,
            get images() {
                let imgs = [];
                if (this.selectedProject?.cover_image) {
                    imgs.push(this.selectedProject.cover_image);
                }
                if (this.selectedProject?.gallery) {
                    this.selectedProject.gallery.forEach(item => {
                        if (typeof item === 'string') {
                            imgs.push(item);
                        } else if (item && item.image) {
                            imgs.push(item.image);
                        }
                    });
                }
                return imgs;
            },
            openModal(project) {
                this.selectedProject = project;
                this.currentImageIndex = 0;
                document.body.classList.add('overflow-hidden');
            },
            closeModal() {
                this.selectedProject = null;
                document.body.classList.remove('overflow-hidden');
            },
            nextImage() {
                if (this.images.length > 1) {
                    this.currentImageIndex = (this.currentImageIndex + 1) % this.images.length;
                }
            },
            prevImage() {
                if (this.images.length > 1) {
                     this.currentImageIndex = (this.currentImageIndex - 1 + this.images.length) % this.images.length;
                }
            }
        }">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    @php
                        // Prepare project data including rendered HTML content and English versions
                        $projectData = $project->toArray();
                        $projectData['content'] = $project->getContent();
                        $projectData['stack'] = $project->stack ?? [];
                        $projectData['gallery'] = $project->gallery ?? [];
                        
                        // Explicitly pass bilingual fields for Alpine.js modal
                        $projectData['title_en'] = $project->title_en;
                        $projectData['category_en'] = $project->category_en;
                        $projectData['excerpt_en'] = $project->excerpt_en;
                        $projectData['body_en'] = $project->body_en;
                    @endphp
                    <div x-show="showAllProjects || {{ $loop->index }} < 6" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         @click='openModal(@json($projectData))' 
                         class="group relative bg-white dark:bg-slate-900 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-slate-200 dark:border-slate-700 cursor-pointer">
                        <div class="aspect-video bg-gradient-to-br from-indigo-100 to-purple-100 dark:from-indigo-900 dark:to-purple-900 relative overflow-hidden">
                            @if($project->cover_image)
                                <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="object-cover w-full h-full transform group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-indigo-500 to-purple-500">
                                    <span class="text-4xl font-bold text-white opacity-50">{{ substr($project->title, 0, 1) }}</span>
                                </div>
                            @endif
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                                <span class="opacity-0 group-hover:opacity-100 bg-white/90 dark:bg-slate-900/90 backdrop-blur text-slate-900 dark:text-white px-4 py-2 rounded-full text-sm font-semibold transform translate-y-4 group-hover:translate-y-0 transition-all duration-300"
                                      x-text="$store.app.lang === 'fr' ? 'Voir détails' : 'View Details'">
                                    Voir détails
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="inline-block px-3 py-1 text-xs font-semibold text-indigo-600 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-900/30 rounded-full mb-3 border border-indigo-100 dark:border-indigo-800">
                                {{ $project->category }}
                            </span>
                            <h3 class="text-xl font-extrabold text-slate-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                {{ $project->title }}
                            </h3>
                            <p class="text-sm font-bold text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">
                                {{ $project->excerpt }}
                            </p>
                            <div class="flex flex-wrap gap-2">
                                @foreach (array_slice($project->stack ?? [], 0, 3) as $tech)
                                    <span class="text-xs px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded border border-slate-200 dark:border-slate-700">{{ $tech }}</span>
                                @endforeach
                                @if(count($project->stack ?? []) > 3)
                                    <span class="text-xs px-2 py-1 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 rounded border border-slate-200 dark:border-slate-700">+{{ count($project->stack) - 3 }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Voir plus / Voir moins button -->
            @if(count($projects) > 6)
                <div class="mt-12 text-center">
                    <button @click="showAllProjects = !showAllProjects" 
                            class="inline-flex items-center gap-2 px-8 py-3 bg-white dark:bg-slate-900 text-indigo-600 dark:text-indigo-400 font-bold rounded-full border-2 border-indigo-600 dark:border-indigo-400 hover:bg-indigo-600 dark:hover:bg-indigo-400 hover:text-white dark:hover:text-slate-900 transition-all duration-300 shadow-lg shadow-indigo-500/10">
                        <span x-text="showAllProjects ? 'Voir moins' : 'Voir tous les projets'"></span>
                        <svg class="w-5 h-5 transition-transform duration-300" :class="{ 'rotate-180': showAllProjects }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>
            @endif

            <!-- Project Modal -->
            <div x-show="selectedProject" 
                 class="fixed inset-0 z-[60] overflow-y-auto" 
                 role="dialog" aria-modal="true" x-cloak>
                <!-- Backdrop -->
                <div x-show="selectedProject" 
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm transition-opacity" 
                     @click="closeModal()"></div>

                <!-- Modal Panel -->
                <div x-show="selectedProject" 
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave="ease-in duration-200"
                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                     x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                     class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    
                    <div class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-slate-900 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl border border-slate-200 dark:border-slate-700">
                        <!-- Close Button -->
                        <button @click="closeModal()" class="absolute top-4 right-4 z-10 p-2 rounded-full bg-white/50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 text-slate-500 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white transition-all backdrop-blur-sm">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="flex flex-col md:flex-row">
                            <!-- Image Section (Left/Top) with Carousel -->
                            <div class="md:w-1/2 bg-slate-100 dark:bg-slate-800 relative group border-r border-slate-200 dark:border-slate-700">
                                <!-- Main Carousel Container with Fixed Aspect Ratio -->
                                <div class="aspect-video relative overflow-hidden bg-slate-200 dark:bg-slate-950">
                                    <template x-if="images.length > 0">
                                        <img :src="images[currentImageIndex]" 
                                             class="absolute inset-0 w-full h-full object-cover transition-all duration-500 ease-in-out transform scale-100 cursor-zoom-in" 
                                             @click="showLightbox = true"
                                             :key="currentImageIndex">
                                    </template>
                                    
                                    <template x-if="images.length === 0">
                                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-indigo-500 to-purple-500">
                                            <span class="text-6xl font-bold text-white opacity-50" x-text="selectedProject?.title.charAt(0)"></span>
                                        </div>
                                    </template>
                                    
                                    <!-- Carousel Controls -->
                                    <template x-if="images.length > 1">
                                        <div class="absolute inset-0 flex items-center justify-between px-4 opacity-0 group-hover:opacity-100 transition-opacity z-20">
                                            <button @click.stop="prevImage()" class="p-3 rounded-full bg-black/40 text-white hover:bg-black/60 shadow-lg backdrop-blur-sm transition-all focus:outline-none">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                                            </button>
                                            <button @click.stop="nextImage()" class="p-3 rounded-full bg-black/40 text-white hover:bg-black/60 shadow-lg backdrop-blur-sm transition-all focus:outline-none">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            </button>
                                        </div>
                                    </template>
                                </div>

                                <!-- Thumbnails Navigation -->
                                <template x-if="images.length > 1">
                                    <div class="p-4 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-700">
                                        <div class="flex gap-2 overflow-x-auto pb-2 custom-scrollbar">
                                            <template x-for="(img, index) in images">
                                                <button @click.stop="currentImageIndex = index" 
                                                        class="relative flex-none w-20 aspect-video rounded-lg overflow-hidden border-2 transition-all"
                                                        :class="index === currentImageIndex ? 'border-indigo-500 scale-105 shadow-md' : 'border-transparent opacity-60 hover:opacity-100'">
                                                    <img :src="img" class="w-full h-full object-cover">
                                                </button>
                                            </template>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            <!-- Content Section (Right/Bottom) -->
                            <div class="md:w-1/2 p-8 md:p-10 max-h-[85vh] overflow-y-auto custom-scrollbar flex flex-col">
                                <div class="mb-6">
                                    <span class="inline-block px-3 py-1 text-xs font-semibold text-indigo-600 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-900/30 rounded-full mb-3 border border-indigo-100 dark:border-indigo-800" 
                                          x-text="$store.app.lang === 'fr' ? selectedProject?.category : (selectedProject?.category_en || selectedProject?.category)"></span>
                                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-2" 
                                        x-text="$store.app.lang === 'fr' ? selectedProject?.title : (selectedProject?.title_en || selectedProject?.title)"></h2>
                                    <p class="text-sm text-slate-500 dark:text-slate-400 font-medium" x-text="selectedProject?.date ? new Date(selectedProject.date * 1000).toLocaleDateString($store.app.lang === 'fr' ? 'fr-FR' : 'en-US', { year: 'numeric', month: 'long' }) : ''"></p>
                                </div>

                                <div class="prose dark:prose-invert prose-indigo max-w-none text-slate-600 dark:text-slate-300 mb-8 border-b border-slate-100 dark:border-slate-800 pb-8 content-area 
                                     prose-headings:text-slate-900 dark:prose-headings:text-white prose-a:text-indigo-600 dark:prose-a:text-indigo-400
                                     prose-li:list-disc prose-ul:my-4 prose-p:leading-relaxed" 
                                     x-html="$store.app.lang === 'fr' ? selectedProject?.content : (selectedProject?.body_en || selectedProject?.content)">
                                </div>

                                <div class="mb-8">
                                    <h4 class="text-sm font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-3" x-text="$store.app.lang === 'fr' ? 'Technologies' : 'Technologies'">Technologies</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <template x-for="tech in selectedProject?.stack">
                                            <span class="text-xs px-3 py-1.5 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 rounded-md font-medium border border-slate-200 dark:border-slate-700" x-text="tech"></span>
                                        </template>
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-4 pt-6 border-t border-slate-200 dark:border-slate-700">
                                    <template x-if="selectedProject?.site_url">
                                        <a :href="selectedProject.site_url" target="_blank" class="flex-1 inline-flex justify-center items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold transition-colors shadow-lg shadow-indigo-500/20">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                            <span x-text="$store.app.lang === 'fr' ? 'Voir le site' : 'Visit Website'"></span>
                                        </a>
                                    </template>
                                    
                                    <template x-if="selectedProject?.source_url">
                                        <a :href="selectedProject.source_url" target="_blank" class="flex-1 inline-flex justify-center items-center px-6 py-3 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 rounded-xl font-semibold transition-colors">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                                            <span x-text="$store.app.lang === 'fr' ? 'Code Source' : 'Source Code'"></span>
                                        </a>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lightbox Overlay -->
            <div x-show="showLightbox" 
                 class="fixed inset-0 z-[80] overflow-hidden flex items-center justify-center bg-black/95 backdrop-blur-sm"
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @keydown.escape.window="showLightbox = false"
                 x-cloak>
                
                <!-- Close Button -->
                <button @click="showLightbox = false" class="absolute top-4 right-4 z-[90] p-2 rounded-full bg-white/10 hover:bg-white/20 text-white transition-all">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Navigation Buttons -->
                <template x-if="images.length > 1">
                    <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 flex justify-between px-4 sm:px-8 z-[90] pointer-events-none">
                        <button @click.stop="prevImage()" class="pointer-events-auto p-4 rounded-full bg-black/50 text-white hover:bg-black/70 transition-all focus:outline-none transform hover:scale-110">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button @click.stop="nextImage()" class="pointer-events-auto p-4 rounded-full bg-black/50 text-white hover:bg-black/70 transition-all focus:outline-none transform hover:scale-110">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </template>

                <!-- Main Image -->
                <div class="relative w-full h-full flex items-center justify-center p-4 sm:p-8" @click.self="showLightbox = false">
                    <img :src="images[currentImageIndex]" 
                         class="max-h-[90vh] max-w-[90vw] object-contain shadow-2xl rounded-lg select-none"
                         :alt="selectedProject?.title"
                         draggable="false">
                    
                    <!-- Image Counter -->
                    <template x-if="images.length > 1">
                        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 bg-black/50 text-white px-4 py-2 rounded-full text-sm font-medium backdrop-blur-sm">
                            <span x-text="currentImageIndex + 1"></span> / <span x-text="images.length"></span>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24 bg-white dark:bg-slate-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400 uppercase tracking-wide" x-text="$store.app.lang === 'fr' ? 'Contact' : 'Contact'">Contact</h2>
            <p class="mt-2 text-4xl font-extrabold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Travaillons Ensemble' : 'Let\'s Work Together'">
                Travaillons Ensemble
            </p>
            <p class="mt-4 text-lg text-slate-600 dark:text-slate-400" x-text="$store.app.lang === 'fr' ? 'Avez-vous un projet en tête ? Discutons-en !' : 'Have a project in mind? Let\'s discuss it!'">
                Avez-vous un projet en tête ? Discutons-en !
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="text-center p-6 bg-slate-50 dark:bg-slate-800 rounded-xl">
                <svg class="w-8 h-8 mx-auto mb-3 text-indigo-600 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                <p class="text-sm font-semibold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Email' : 'Email'">Email</p>
                <a href="mailto:zimepascalt@gmail.com" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">zimepascalt@gmail.com</a>
            </div>
            <div class="text-center p-6 bg-slate-50 dark:bg-slate-800 rounded-xl">
                <svg class="w-8 h-8 mx-auto mb-3 text-indigo-600 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
                <p class="text-sm font-semibold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Téléphone' : 'Phone'">Téléphone</p>
                <a href="tel:+2290198049044" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">+229 01 98 04 90 44</a>
            </div>
            <div class="text-center p-6 bg-slate-50 dark:bg-slate-800 rounded-xl">
                <svg class="w-8 h-8 mx-auto mb-3 text-indigo-600 dark:text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <p class="text-sm font-semibold text-slate-900 dark:text-white" x-text="$store.app.lang === 'fr' ? 'Localisation' : 'Location'">Localisation</p>
                <p class="text-sm text-slate-600 dark:text-slate-400" x-text="$store.app.lang === 'fr' ? 'Cotonou, Bénin' : 'Cotonou, Benin'">Cotonou, Bénin</p>
            </div>
        </div>

        <form name="contact" method="POST" data-netlify="true" class="bg-slate-50 dark:bg-slate-800 p-8 rounded-2xl shadow-xl border border-slate-200 dark:border-slate-700">
            <div class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" x-text="$store.app.lang === 'fr' ? 'Nom' : 'Name'"></label>
                    <input type="text" name="name" id="name" required class="w-full px-4 py-3 rounded-lg bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" x-text="$store.app.lang === 'fr' ? 'Email' : 'Email'"></label>
                    <input type="email" name="email" id="email" required class="w-full px-4 py-3 rounded-lg bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all">
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2" x-text="$store.app.lang === 'fr' ? 'Message' : 'Message'"></label>
                    <textarea name="message" id="message" rows="5" required class="w-full px-4 py-3 rounded-lg bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all"></textarea>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold py-4 px-8 rounded-lg shadow-lg hover:shadow-glow transition-all duration-300 transform hover:-translate-y-1" x-text="$store.app.lang === 'fr' ? 'Envoyer le message' : 'Send Message'">
                    Envoyer le message
                </button>
            </div>
        </form>
    </div>
</section>

<style>
@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0px, 0px) scale(1); }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}
</style>
@endsection
