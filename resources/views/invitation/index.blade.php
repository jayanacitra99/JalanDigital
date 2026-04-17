<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Unduh Mantu Thea & Alan - 30 Mei 2026</title>
    
    <link rel="preload" as="image" href="{{ asset('img/after-cover.webp') }}">
    <link rel="preload" as="image" href="{{ asset('img/logo-green.webp') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Caveat:wght@400;600;700&family=Great+Vibes&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'w-bg': '#F4F1EA', 
                        'w-green': '#1A3626', 
                        'w-gold': '#C5A059',
                        'w-text-dark': '#333333',
                        'w-text-light': '#FAF9F6',
                    },
                    fontFamily: {
                        'script': ['Great Vibes', 'cursive'],
                        'edwardian': ['"Edwardian Script ITC"', '"ITC Edwardian Script"', 'Great Vibes', 'cursive'],
                        'hand': ['Caveat', 'cursive'], 
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Montserrat', 'sans-serif'],
                        'arabic': ['Amiri', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes fadeInLoad {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-load { animation: fadeInLoad 1.5s ease-out forwards; opacity: 0; }
        .delay-1 { animation-delay: 0.3s; }
        .delay-2 { animation-delay: 0.6s; }
        .delay-3 { animation-delay: 0.9s; }
        .delay-4 { animation-delay: 1.2s; }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1.2s ease-out, transform 1.2s ease-out;
            will-change: opacity, transform;
        }
        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .delay-100 { transition-delay: 0.1s; }
        .delay-200 { transition-delay: 0.2s; }
        .delay-300 { transition-delay: 0.3s; }
        .delay-400 { transition-delay: 0.4s; }
        .delay-500 { transition-delay: 0.5s; }
        
        #cover-page {
            transition: transform 1s ease-in-out;
            will-change: transform;
        }
        .slide-up { transform: translateY(-100vh); }

        @keyframes spin { 100% { transform: rotate(360deg); } }
        .spin-slow { animation: spin 4s linear infinite; }

        @keyframes floatClover {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.4; }
            50% { transform: translateY(-25px) rotate(15deg); opacity: 0.6; }
        }
        .animate-float-1 { animation: floatClover 10s ease-in-out infinite; will-change: transform, opacity; }
        .animate-float-2 { animation: floatClover 12s ease-in-out infinite; animation-delay: 2s; will-change: transform, opacity; }
        .animate-float-3 { animation: floatClover 15s ease-in-out infinite; animation-delay: 4s; will-change: transform, opacity; }

        .bg-nude-desktop {
            background-color: #EBE5D9;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.08'/%3E%3C/svg%3E");
        }

        .bg-clover-light {
            background-color: #F4F1EA;
            background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50' fill='%231A3626' fill-opacity='0.035'/%3E%3C/svg%3E");
        }
        .bg-clover-dark {
            background-color: #1A3626;
            background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50' fill='%23F4F1EA' fill-opacity='0.035'/%3E%3C/svg%3E");
        }

        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        .stamp-card {
            background-color: #FAF9F6;
            padding: 8px;
            border: 3px dashed #1A3626;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .stamp-inner {
            border: 1px solid #1A3626;
            padding: 16px;
            height: 100%;
        }

        .mirror-frame {
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            border: 4px solid #C5A059;
            box-shadow: 0 10px 25px -5px rgba(197, 160, 89, 0.4), inset 0 0 15px rgba(0,0,0,0.2);
            background-color: white;
            padding: 4px;
        }
        .mirror-frame img {
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            width: 100%; height: 100%; object-fit: cover;
        }

        .img-placeholder { background-color: #EBE7DF; position: relative; overflow: hidden; }
    </style>
</head>
<body class="bg-black text-w-text-dark font-sans antialiased overflow-hidden flex justify-center items-center h-[100dvh] w-full relative" id="body">

    <div class="hidden md:block absolute inset-0 z-0 bg-nude-desktop">
        <svg class="absolute top-[15%] left-[20%] w-24 h-24 text-w-green opacity-20 animate-float-1" viewBox="0 0 100 100" fill="currentColor">
            <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
        </svg>
        <svg class="absolute bottom-[20%] right-[18%] w-32 h-32 text-w-green opacity-15 animate-float-2" viewBox="0 0 100 100" fill="currentColor">
            <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
        </svg>
        <svg class="absolute top-[60%] left-[12%] w-20 h-20 text-w-gold opacity-25 animate-float-3" viewBox="0 0 100 100" fill="currentColor">
            <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
        </svg>
        <svg class="absolute top-[10%] right-[25%] w-16 h-16 text-w-gold opacity-20 animate-float-1" viewBox="0 0 100 100" fill="currentColor" style="animation-delay: 1s;">
            <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
        </svg>
    </div>

    <div id="mobile-wrapper" class="relative z-10 w-full md:max-w-[414px] h-[100dvh] bg-w-bg shadow-[0_0_30px_rgba(0,0,0,0.6)] overflow-hidden bg-clover-light">

        <audio id="bg-music" loop preload="metadata">
            <source src="{{ asset('/audio/backsound.mpeg') }}" type="audio/mpeg">
        </audio>

        <div id="sticky-ornaments" class="absolute inset-0 pointer-events-none z-10 opacity-0 transition-opacity duration-1000 hidden">
            <svg class="absolute top-1/4 left-[10%] w-10 h-10 text-w-gold opacity-50 animate-float-1" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>
            <svg class="absolute top-1/2 right-[15%] w-14 h-14 text-w-gold opacity-40 animate-float-2" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>
            <svg class="absolute bottom-1/4 left-[15%] w-12 h-12 text-w-gold opacity-60 animate-float-3" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>
        </div>

        <button id="btn-music" class="absolute bottom-6 right-6 z-40 bg-w-bg text-w-green p-3 rounded-full shadow-lg border border-w-green hidden animate-on-scroll is-visible transition-colors duration-300">
            <svg id="icon-music-off" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="2" y1="2" x2="22" y2="22"></line>
                <path d="M9 18V5l12-2v13"></path>
                <circle cx="6" cy="18" r="3"></circle>
                <circle cx="18" cy="16" r="3"></circle>
            </svg>
            <svg id="icon-music-on" class="hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 18V5l12-2v13"></path>
                <circle cx="6" cy="18" r="3"></circle>
                <circle cx="18" cy="16" r="3"></circle>
            </svg>
        </button>

        <section id="cover-page" class="absolute inset-0 z-50 flex flex-col items-center justify-center w-full h-[100dvh] p-6 text-center shadow-lg bg-cover bg-center bg-no-repeat overflow-hidden img-placeholder" style="background-image: url('{{ asset('img/after-cover.webp') }}');">
            <div class="absolute inset-0 bg-black/50 backdrop-blur-xl pointer-events-none z-0"></div>

            <svg class="absolute top-1/4 left-[10%] w-10 h-10 text-w-gold opacity-50 z-10 animate-float-1" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>
            <svg class="absolute top-1/2 right-[15%] w-14 h-14 text-w-gold opacity-40 z-10 animate-float-2" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>
            <svg class="absolute bottom-1/4 left-[15%] w-12 h-12 text-w-gold opacity-60 z-10 animate-float-3" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>

            <div class="relative z-20 p-8 h-full w-full max-w-md flex flex-col items-center justify-center mx-auto text-w-text-light">
                <p class="font-serif italic text-xl tracking-wide text-w-gold font-medium mb-10 fade-in-load">Unduh Mantu</p>
                <div class="flex flex-col items-center mb-6 mt-2 fade-in-load delay-1 drop-shadow-md transform -rotate-2">
                    <h1 class="font-script text-8xl md:text-9xl text-w-gold leading-[0.7]">T</h1>
                    <span class="text-4xl text-white font-script leading-[0.7] my-3">&</span>
                    <h1 class="font-script text-8xl md:text-9xl text-w-gold leading-[0.7] ml-4">A</h1>
                </div>
                <p class="font-sans font-semibold text-sm mb-8 tracking-widest fade-in-load delay-2">30 MEI 2026</p>

                <div class="stamp-card transform rotate-2 w-[85%] max-w-[260px] fade-in-load delay-3 mb-10 text-w-text-dark">
                    <div class="stamp-inner flex flex-col items-center justify-center min-h-[100px] bg-white">
                        <p class="text-[9px] uppercase tracking-widest opacity-70 mb-2 text-w-green">Kepada Yth.</p>
                        <h2 id="guest-name" class="font-hand text-2xl font-bold text-w-green border-b border-w-green/20 pb-1">
                            Tamu Undangan
                        </h2>
                    </div>
                </div>

                <button id="btn-open" class="bg-w-green text-white font-sans px-8 py-3 rounded-full shadow-xl transition duration-300 ease-in-out transform hover:scale-105 tracking-widest text-[10px] font-bold fade-in-load delay-4 border border-w-bg/50">
                    BUKA UNDANGAN
                </button>
            </div>
        </section>

        <main id="main-content" class="absolute inset-0 w-full h-[100dvh] overflow-x-hidden overflow-y-scroll snap-y snap-mandatory scroll-smooth no-scrollbar" style="visibility: hidden; opacity: 0; pointer-events: none;">
            
            <section class="min-h-[100dvh] w-full snap-start relative bg-cover bg-center flex items-end justify-center pb-12 img-placeholder" style="background-image: url('{{ asset('img/after-cover.webp') }}');">
                <div class="absolute inset-0 bg-gradient-to-t from-w-green/80 to-transparent pointer-events-none"></div>
                <div class="relative z-10 text-white flex flex-col items-center animate-bounce animate-on-scroll is-visible">
                    <span class="font-sans text-[9px] tracking-[0.2em] mb-2 opacity-80">GESER KE ATAS</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                    </svg>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-8 text-center relative overflow-hidden bg-clover-light text-w-green">
                <svg class="absolute top-6 left-6 w-16 h-16 opacity-30 transform -rotate-12 animate-on-scroll delay-300" viewBox="0 0 100 100" fill="currentColor">
                    <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
                </svg>
                
                <div class="max-w-md mx-auto relative z-10 flex flex-col items-center">
                    <div class="w-36 h-36 mb-6 flex items-center justify-center animate-on-scroll">
                        <img src="{{ asset('img/logo-green.webp') }}" alt="Logo" width="144" height="144" fetchpriority="high" decoding="async" class="w-full h-full object-contain">
                    </div>

                    <p class="font-hand text-2xl md:text-3xl mb-8 leading-relaxed animate-on-scroll delay-100">
                        "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa cinta dan kasih sayang..."
                    </p>
                    <p class="font-hand text-xl font-bold border-b-2 border-w-gold inline-block pb-1 animate-on-scroll delay-200">QS. Ar-Rum : 21</p>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center py-12 px-6 text-center relative overflow-hidden bg-clover-light text-w-green">
                <div class="max-w-md mx-auto w-full relative z-10 flex flex-col items-center">
                    
                    <div class="animate-on-scroll mb-8">
                        <h2 class="font-arabic text-4xl">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h2>
                    </div>
                    
                    <p class="font-sans text-[9px] uppercase tracking-widest mb-10 opacity-70 animate-on-scroll delay-100">Tanpa mengurangi rasa hormat,<br>kami bermaksud mengundang Anda.</p>
                    
                    <div class="flex flex-col items-center w-full px-1 gap-10">
                        <div class="flex flex-col items-center w-full animate-on-scroll delay-200">
                            <div class="w-36 h-48 mirror-frame mb-5 img-placeholder shadow-lg">
                                <img src="{{ asset('img/pic-thea.webp') }}" alt="Thea" width="600" height="800" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full h-full object-cover">
                            </div>
                            <h3 class="font-hand font-bold mb-1 w-full whitespace-nowrap text-[clamp(1.1rem,6vw,1.75rem)]">Naridha Thea Wardhani, S.Tr.Li</h3>
                            <p class="font-sans text-xs text-gray-600 mb-4 px-1 leading-relaxed">Putri Bungsu dari <br> Bapak Eko Agus Winardi, M.Pd & Ibu Lestari, A.Md</p>
                            <a href="https://instagram.com/naridhathea" target="_blank" class="flex items-center gap-1.5 text-[11px] font-bold text-w-gold hover:text-w-green transition bg-white px-4 py-1.5 border border-w-gold/30 rounded-full shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                @naridhathea
                            </a>
                        </div>

                        <div class="font-script text-5xl text-w-gold animate-on-scroll delay-300 opacity-70">&</div>

                        <div class="flex flex-col items-center w-full animate-on-scroll delay-400">
                            <div class="w-36 h-48 mirror-frame mb-5 img-placeholder shadow-lg">
                                 <img src="{{ asset('img/pic-alan.webp') }}" alt="Alan" width="600" height="800" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full h-full object-cover">
                            </div>
                            <h3 class="font-hand font-bold mb-1 w-full whitespace-nowrap text-[clamp(1.1rem,5.5vw,1.6rem)]">Arkhab Maulana U., S.Kom</h3>
                            <p class="font-sans text-xs text-gray-600 mb-4 px-1 leading-relaxed">Putra Sulung dari <br> Bapak Tri Tjahyo Prasetiyo, S.T & Ibu Ririn Sulintari, A.Md.Farm, S.T</p>
                            <a href="https://instagram.com/arkhabmaulana" target="_blank" class="flex items-center gap-1.5 text-[11px] font-bold text-w-gold hover:text-w-green transition bg-white px-4 py-1.5 border border-w-gold/30 rounded-full shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                @arkhabmaulana
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-clover-light text-center">
                <div class="max-w-md mx-auto w-full">
                    <h2 class="font-hand text-5xl md:text-6xl mb-10 text-w-green animate-on-scroll">Unduh Mantu</h2>
                    
                    <div class="flex justify-center gap-3 mb-10">
                        <div class="flex flex-col items-center p-3 w-16 border border-w-green/30 bg-white rounded-lg animate-on-scroll delay-100 shadow-sm">
                            <p id="days" class="font-hand font-bold text-2xl text-w-gold">00</p>
                            <p class="font-sans text-[8px] text-gray-500 uppercase">Hari</p>
                        </div>
                        <div class="flex flex-col items-center p-3 w-16 border border-w-green/30 bg-white rounded-lg animate-on-scroll delay-200 shadow-sm">
                            <p id="hours" class="font-hand font-bold text-2xl text-w-gold">00</p>
                            <p class="font-sans text-[8px] text-gray-500 uppercase">Jam</p>
                        </div>
                        <div class="flex flex-col items-center p-3 w-16 border border-w-green/30 bg-white rounded-lg animate-on-scroll delay-300 shadow-sm">
                            <p id="minutes" class="font-hand font-bold text-2xl text-w-gold">00</p>
                            <p class="font-sans text-[8px] text-gray-500 uppercase">Menit</p>
                        </div>
                        <div class="flex flex-col items-center p-3 w-16 border border-w-green/30 bg-white rounded-lg animate-on-scroll delay-400 shadow-sm">
                            <p id="seconds" class="font-hand font-bold text-2xl text-w-gold">00</p>
                            <p class="font-sans text-[8px] text-gray-500 uppercase">Detik</p>
                        </div>
                    </div>

                    <div class="mb-8 animate-on-scroll delay-100 w-full px-2">
                        <div class="bg-white p-6 border border-w-green shadow-sm relative">
                            <h3 class="font-sans font-bold text-sm tracking-widest mb-4 border-b border-w-green/30 pb-2 inline-block text-w-green">SABTU, 30 MEI 2026</h3>
                            <div class="mt-4">
                                <p class="font-hand text-2xl font-bold text-w-gold">Resepsi</p>
                                <p class="font-sans text-[10px] mt-1 text-gray-600 font-bold tracking-wider">14.00 - 17.00 WIB</p>
                            </div>
                            <div class="mt-6 pt-4 border-t border-w-green/10">
                                <p class="font-hand text-xl text-w-green font-bold">Resto Lumbung Dahar</p>
                                <p class="font-sans text-[9px] text-gray-500 mt-2 leading-relaxed">📍 Jl. Diponegoro, Karangploso, Girimoyo, Kec. Karang Ploso, Kabupaten Malang</p>
                            </div>
                        </div>
                    </div>

                    <div class="animate-on-scroll delay-400">
                        <a href="https://maps.google.com" target="_blank" class="inline-block bg-w-green text-white font-sans px-8 py-3 rounded-full text-[10px] tracking-widest hover:bg-opacity-90 transition shadow-md">
                            VIEW MAPS
                        </a>
                    </div>
                </div>
            </section>

            <section class="h-auto min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center py-16 px-4 bg-clover-light">
                <div class="max-w-md mx-auto w-full text-center">
                    <h2 class="font-hand text-5xl md:text-6xl mb-10 text-w-green animate-on-scroll">Our Gallery</h2>
                    
                    <div class="grid grid-cols-3 gap-3 mb-10 px-2 animate-on-scroll delay-100">
                        
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[-2deg] img-placeholder gallery-item cursor-pointer" data-index="0">
                            <img src="{{ asset('img/pic-1.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[1deg] img-placeholder mt-2 gallery-item cursor-pointer" data-index="1">
                            <img src="{{ asset('img/pic-alan.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[-1deg] img-placeholder gallery-item cursor-pointer" data-index="2">
                            <img src="{{ asset('img/pic-thea.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[2deg] img-placeholder gallery-item cursor-pointer" data-index="3">
                            <img src="{{ asset('img/pic-1.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[-1deg] img-placeholder mt-1 gallery-item cursor-pointer" data-index="4">
                            <img src="{{ asset('img/pic-alan.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[3deg] img-placeholder gallery-item cursor-pointer" data-index="5">
                            <img src="{{ asset('img/pic-thea.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[-3deg] img-placeholder gallery-item cursor-pointer" data-index="6">
                            <img src="{{ asset('img/pic-1.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[1deg] img-placeholder mt-2 gallery-item cursor-pointer" data-index="7">
                            <img src="{{ asset('img/pic-alan.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[-2deg] img-placeholder gallery-item cursor-pointer" data-index="8">
                            <img src="{{ asset('img/pic-thea.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>

                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[-3deg] img-placeholder gallery-item cursor-pointer" data-index="6">
                            <img src="{{ asset('img/pic-1.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[1deg] img-placeholder mt-2 gallery-item cursor-pointer" data-index="7">
                            <img src="{{ asset('img/pic-alan.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                        <div class="bg-white p-1.5 pb-6 shadow-md border border-gray-100 transform rotate-[-2deg] img-placeholder gallery-item cursor-pointer" data-index="8">
                            <img src="{{ asset('img/pic-thea.webp') }}" width="500" height="500" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500 pointer-events-none">
                        </div>
                    </div>

                    <p class="font-hand text-2xl text-w-green px-4 animate-on-scroll delay-300">
                        "From the beginning until forever, it's always been us."
                    </p>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center py-16 p-6 text-center relative overflow-hidden bg-clover-light text-w-green">
                <div class="max-w-md mx-auto w-full relative z-10">
                    <h2 class="font-hand text-5xl md:text-6xl mb-2 animate-on-scroll">Ucapan & Kehadiran</h2>
                    <p class="font-sans text-[10px] mb-8 text-gray-600 mx-auto animate-on-scroll delay-100 leading-relaxed">Mohon konfirmasi kehadiran dan tuliskan doa serta restu untuk kami.</p>
                    
                    <div class="bg-[#EBE7DF] p-6 rounded-3xl shadow-sm animate-on-scroll delay-200 text-left relative overflow-hidden">
                        <form action="#" method="POST" class="space-y-4 relative z-10">
                            <div>
                                <label class="block font-sans text-[10px] font-bold mb-1.5 ml-2">Nama</label>
                                <input type="text" name="nama" placeholder="Nama Anda" required class="w-full px-4 py-3 rounded-full border border-w-green/30 font-sans text-[11px] focus:outline-none focus:border-w-green bg-white text-w-text-dark">
                            </div>
                            <div>
                                <label class="block font-sans text-[10px] font-bold mb-1.5 ml-2">Konfirmasi Kehadiran</label>
                                <select name="kehadiran" required class="w-full px-4 py-3 rounded-full border border-w-green/30 font-sans text-[11px] focus:outline-none focus:border-w-green bg-white text-w-text-dark appearance-none">
                                    <option value="hadir">Saya berencana hadir</option>
                                    <option value="tidak_hadir">Maaf, saya tidak bisa hadir</option>
                                </select>
                            </div>
                            <div>
                                <label class="block font-sans text-[10px] font-bold mb-1.5 ml-2">Pesan & Doa</label>
                                <textarea name="pesan" rows="3" placeholder="Tuliskan pesan..." class="w-full px-4 py-3 rounded-2xl border border-w-green/30 font-sans text-[11px] focus:outline-none focus:border-w-green bg-white text-w-text-dark"></textarea>
                            </div>
                            
                            <div class="flex justify-end pt-2">
                                <button type="submit" class="border border-w-green bg-transparent font-sans px-6 py-2 rounded-full text-[10px] font-bold tracking-widest hover:bg-w-green hover:text-white transition flex items-center gap-2">
                                    Kirim 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="mt-8 bg-white/60 p-4 rounded-2xl max-h-64 overflow-y-auto no-scrollbar space-y-3 animate-on-scroll delay-300 shadow-sm border border-w-green/10">
                        <div class="bg-white p-3 rounded-xl shadow-sm text-left border border-w-green/10">
                            <div class="flex justify-between items-center mb-1.5">
                                <p class="font-sans font-bold text-[11px] text-w-text-dark">Bapak/Ibu Budi Santoso</p>
                                <span class="bg-green-100 text-green-700 text-[8px] font-bold px-2 py-0.5 rounded-full">Hadir</span>
                            </div>
                            <p class="font-sans text-[10px] text-gray-600 leading-relaxed">Selamat menempuh hidup baru Thea & Alan! Semoga menjadi keluarga sakinah mawaddah warahmah.</p>
                        </div>
                        <div class="bg-white p-3 rounded-xl shadow-sm text-left border border-w-green/10">
                            <div class="flex justify-between items-center mb-1.5">
                                <p class="font-sans font-bold text-[11px] text-w-text-dark">Siti Aminah & Keluarga</p>
                                <span class="bg-red-100 text-red-700 text-[8px] font-bold px-2 py-0.5 rounded-full">Tidak Hadir</span>
                            </div>
                            <p class="font-sans text-[10px] text-gray-600 leading-relaxed">Maaf belum bisa hadir ya, doa terbaik untuk kalian berdua. Bahagia selalu!</p>
                        </div>
                         <div class="bg-white p-3 rounded-xl shadow-sm text-left border border-w-green/10">
                            <div class="flex justify-between items-center mb-1.5">
                                <p class="font-sans font-bold text-[11px] text-w-text-dark">Rina Lestari</p>
                                <span class="bg-green-100 text-green-700 text-[8px] font-bold px-2 py-0.5 rounded-full">Hadir</span>
                            </div>
                            <p class="font-sans text-[10px] text-gray-600 leading-relaxed">Akhirnya yang ditunggu-tunggu tiba juga, congratsss!! Lancar sampai hari H cantikk ✨</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-clover-light text-center">
                <div class="max-w-md mx-auto w-full">
                    <h2 class="font-hand text-5xl md:text-6xl mb-4 text-w-green animate-on-scroll">Tanda Kasih</h2>
                    <p class="font-sans text-[10px] mb-8 text-gray-600 leading-relaxed px-4 animate-on-scroll delay-100">Doa restu Anda adalah karunia terindah bagi kami. Namun jika memberi adalah wujud kasih sayang Anda, Anda dapat memberikan tanda kasih melalui:</p>
                    
                    <button id="btn-show-gift" class="border-2 border-w-green text-w-green bg-transparent font-sans px-8 py-3 rounded-full transition duration-300 ease-in-out hover:bg-w-green hover:text-white tracking-widest text-[10px] font-bold animate-on-scroll delay-200">
                        BUKA TANDA KASIH
                    </button>

                    <div id="gift-area" class="hidden mt-8 w-full space-y-4 max-h-[50vh] overflow-y-auto px-1 no-scrollbar pb-6">
                        <div class="border border-w-green/20 p-5 rounded-[2rem] bg-white text-center shadow-sm relative overflow-hidden">
                            <p class="font-sans font-bold text-[11px] text-w-green tracking-widest mb-3">BCA</p>
                            <div class="bg-[#F4F1EA] rounded-xl py-3 px-4 mb-3 flex items-center justify-between">
                                <p class="font-sans font-bold tracking-wider text-sm text-w-text-dark" id="rek-bca">4390508994</p>
                                <button onclick="copyRek('4390508994')" class="text-[9px] text-w-green">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                                </button>
                            </div>
                            <p class="font-sans text-[10px] font-semibold text-w-green">A.N : Arkhab Maulana Uzlahbillah</p>
                        </div>

                        <div class="border border-w-green/20 p-5 rounded-[2rem] bg-white text-center shadow-sm">
                            <p class="font-sans font-bold text-[11px] text-w-green tracking-widest mb-3">KIRIM HADIAH</p>
                            <p id="alamat-kado" class="font-sans text-[10px] text-gray-600 leading-relaxed mb-4 px-2">Jl. Sulfat Agung V/18 RT.6 RW.21, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122</p>
                            <button onclick="copyRek(document.getElementById('alamat-kado').innerText)" class="text-[9px] border border-w-green text-w-green px-4 py-2 rounded-full font-bold hover:bg-w-green hover:text-white transition">COPY ALAMAT</button>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 text-w-text-light text-center relative overflow-hidden bg-clover-dark">
                <svg class="absolute top-6 left-6 w-16 h-16 opacity-20 transform -rotate-12 animate-on-scroll delay-300" viewBox="0 0 100 100" fill="currentColor">
                    <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
                </svg>
                <div class="max-w-xl mx-auto relative z-10 flex flex-col items-center">
                    <p class="font-sans text-[9px] uppercase tracking-widest mb-8 opacity-70 animate-on-scroll">Teruntuk keluarga dan teman</p>
                    
                    <div class="flex flex-col items-center animate-on-scroll delay-100 z-10 relative mb-12">
                        <div class="w-48 h-64 mirror-frame img-placeholder mb-6 shadow-xl transform rotate-2">
                             <img src="{{ asset('img/pic-1.webp') }}" alt="Thea & Alan" width="600" height="800" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="bg-[#F4F1EA] text-w-green px-8 py-5 transform -rotate-3 shadow-lg border border-w-green/10">
                            <h2 class="font-hand text-5xl md:text-6xl leading-none">Terima Kasih</h2>
                        </div>
                    </div>
                    
                    <p class="font-sans text-[10px] leading-relaxed opacity-90 mb-12 px-4 text-center animate-on-scroll delay-200 max-w-sm">
                        Terima kasih telah mendukung dan menjadi bagian dari hidup kami. <br><br>
                        Kami sangat bersyukur karena keluarga dan teman-teman membantu merayakan dan menjadi bagian dari hari pernikahan kami. <br><br>
                        Sampai jumpa :)
                    </p>
                    
                    <p class="font-sans text-[10px] opacity-70 mb-1 tracking-widest animate-on-scroll delay-300">With love,</p>
                    <h2 class="font-hand text-5xl text-w-bg animate-on-scroll delay-400">Thea & Alan</h2>
                </div>
            </section>

        </main>
        
        <div id="lightbox" class="absolute inset-0 z-[100] hidden bg-black/95 flex-col items-center justify-center opacity-0 transition-opacity duration-300">
            <button id="lightbox-close" class="absolute top-6 right-6 text-white text-4xl leading-none hover:text-gray-300 z-50">×</button>
            <button id="lightbox-prev" class="absolute left-4 text-white text-5xl hover:text-gray-300 z-50">‹</button>
            <img id="lightbox-img" src="" class="max-w-[90%] max-h-[80vh] object-contain transition-transform duration-300 select-none">
            <button id="lightbox-next" class="absolute right-4 text-white text-5xl hover:text-gray-300 z-50">›</button>
            <div class="absolute bottom-6 text-white font-sans text-[10px] tracking-widest opacity-70">
                <span id="lightbox-counter">1</span> / 9
            </div>
        </div>

    </div>

    <script>
        const galleryImages = [
            "{{ asset('img/pic-1.webp') }}",
            "{{ asset('img/pic-alan.webp') }}",
            "{{ asset('img/pic-thea.webp') }}",
            "{{ asset('img/pic-1.webp') }}",
            "{{ asset('img/pic-alan.webp') }}",
            "{{ asset('img/pic-thea.webp') }}",
            "{{ asset('img/pic-1.webp') }}",
            "{{ asset('img/pic-alan.webp') }}",
            "{{ asset('img/pic-thea.webp') }}",
            "{{ asset('img/pic-1.webp') }}",
            "{{ asset('img/pic-alan.webp') }}",
            "{{ asset('img/pic-thea.webp') }}",
        ];

        // OPTIMASI: Hanya preload file yang penting untuk loading awal
        window.addEventListener('load', () => {
            const imagesToPreload = [
                "{{ asset('img/after-cover.webp') }}"
            ];
            imagesToPreload.forEach(url => {
                const img = new Image();
                img.src = url;
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const btnOpen = document.getElementById('btn-open');
            const coverPage = document.getElementById('cover-page');
            const mainContent = document.getElementById('main-content');
            const stickyOrnaments = document.getElementById('sticky-ornaments');
            const btnMusic = document.getElementById('btn-music');
            const iconMusicOn = document.getElementById('icon-music-on');
            const iconMusicOff = document.getElementById('icon-music-off');
            const bgMusic = document.getElementById('bg-music');
            let isPlaying = false;
            let wasPlayingBeforeHide = false; 

            const urlParams = new URLSearchParams(window.location.search);
            let guestName = urlParams.get('to');
            const guestNameEl = document.getElementById('guest-name');

            if (guestName && guestName.trim() !== '') {
                guestNameEl.textContent = guestName.replace(/\+/g, ' '); 
            } else {
                guestNameEl.textContent = "Tamu Spesial";
            }

            function prepareMainContent() {
                mainContent.style.visibility = 'hidden';
                mainContent.style.opacity = '0';
                mainContent.style.pointerEvents = 'none';
                mainContent.classList.remove('hidden'); 
            }
            prepareMainContent();

            function setMusicUI(playing) {
                if (playing) {
                    btnMusic.classList.remove('bg-w-bg', 'text-w-green');
                    btnMusic.classList.add('bg-w-green', 'text-white');
                    iconMusicOn.classList.remove('hidden');
                    iconMusicOff.classList.add('hidden');
                } else {
                    btnMusic.classList.add('bg-w-bg', 'text-w-green');
                    btnMusic.classList.remove('bg-w-green', 'text-white');
                    iconMusicOn.classList.add('hidden');
                    iconMusicOff.classList.remove('hidden');
                }
            }

            btnOpen.addEventListener('click', () => {
                bgMusic.play().then(() => {
                    isPlaying = true;
                    wasPlayingBeforeHide = true;
                    setMusicUI(true);
                    btnMusic.classList.remove('hidden');
                }).catch(err => {
                    setMusicUI(false);
                    btnMusic.classList.remove('hidden');
                });

                coverPage.classList.add('slide-up');
                
                stickyOrnaments.classList.remove('hidden');
                requestAnimationFrame(() => {
                    stickyOrnaments.classList.remove('opacity-0');
                    stickyOrnaments.classList.add('opacity-100');
                });

                mainContent.style.visibility = 'visible';
                mainContent.style.opacity = '1';
                mainContent.style.pointerEvents = 'auto';
                
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            obs.unobserve(entry.target); 
                        }
                    });
                }, { 
                    root: mainContent,
                    threshold: 0.1,
                    rootMargin: "0px 0px -50px 0px" 
                }); 

                document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

                setTimeout(() => {
                    coverPage.classList.add('hidden');
                }, 1000); 
            });

            btnMusic.addEventListener('click', () => {
                if (isPlaying) {
                    bgMusic.pause();
                    isPlaying = false;
                    wasPlayingBeforeHide = false; 
                    setMusicUI(false);
                } else {
                    bgMusic.play().then(() => {
                        isPlaying = true;
                        wasPlayingBeforeHide = true;
                        setMusicUI(true);
                    }).catch(err => console.log(err));
                }
            });

            document.addEventListener('visibilitychange', () => {
                if (mainContent.style.visibility === 'hidden') return;
                if (document.hidden) {
                    wasPlayingBeforeHide = isPlaying; 
                    if (isPlaying) {
                        bgMusic.pause();
                        setMusicUI(false);
                    }
                } else {
                    if (wasPlayingBeforeHide) {
                        bgMusic.play().then(() => {
                            isPlaying = true;
                            setMusicUI(true);
                        }).catch(err => console.log(err));
                    }
                }
            });

            const btnShowGift = document.getElementById('btn-show-gift');
            const giftArea = document.getElementById('gift-area');
            btnShowGift.addEventListener('click', () => {
                giftArea.classList.toggle('hidden');
                btnShowGift.textContent = giftArea.classList.contains('hidden') ? 'BUKA TANDA KASIH' : 'TUTUP TANDA KASIH';
            });

            const countDownDate = new Date("May 30, 2026 14:00:00").getTime();
            const timerEl = {
                days: document.getElementById("days"),
                hours: document.getElementById("hours"),
                minutes: document.getElementById("minutes"),
                seconds: document.getElementById("seconds")
            };

            const x = setInterval(function() {
                const distance = countDownDate - new Date().getTime();

                if (distance > 0) {
                    timerEl.days.innerText = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
                    timerEl.hours.innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
                    timerEl.minutes.innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
                    timerEl.seconds.innerText = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, '0');
                } else {
                    clearInterval(x);
                    ['days','hours','minutes','seconds'].forEach(id => timerEl[id].innerText = "00");
                }
            }, 1000);

            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const btnClose = document.getElementById('lightbox-close');
            const btnPrev = document.getElementById('lightbox-prev');
            const btnNext = document.getElementById('lightbox-next');
            const counter = document.getElementById('lightbox-counter');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            let currentIndex = 0;

            function updateLightbox() {
                lightboxImg.src = galleryImages[currentIndex];
                counter.textContent = currentIndex + 1;
            }

            function openLightbox(index) {
                currentIndex = index;
                updateLightbox();
                lightbox.classList.remove('hidden');
                lightbox.classList.add('flex');
                
                requestAnimationFrame(() => {
                    lightbox.classList.remove('opacity-0');
                });
            }

            function closeLightbox() {
                lightbox.classList.add('opacity-0');
                setTimeout(() => {
                    lightbox.classList.add('hidden');
                    lightbox.classList.remove('flex');
                }, 300);
            }

            function nextImage() {
                currentIndex = (currentIndex + 1) % galleryImages.length;
                updateLightbox();
            }

            function prevImage() {
                currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
                updateLightbox();
            }

            galleryItems.forEach(item => {
                item.addEventListener('click', () => {
                    const idx = parseInt(item.getAttribute('data-index'));
                    openLightbox(idx);
                });
            });

            btnClose.addEventListener('click', closeLightbox);
            btnNext.addEventListener('click', nextImage);
            btnPrev.addEventListener('click', prevImage);

            lightbox.addEventListener('click', (e) => {
                if(e.target === lightbox) closeLightbox();
            });

            let touchstartX = 0;
            let touchendX = 0;
            
            lightbox.addEventListener('touchstart', e => {
                touchstartX = e.changedTouches[0].screenX;
            }, {passive: true});

            lightbox.addEventListener('touchend', e => {
                touchendX = e.changedTouches[0].screenX;
                if (touchendX < touchstartX - 50) nextImage(); // Swipe Kiri
                if (touchendX > touchstartX + 50) prevImage(); // Swipe Kanan
            }, {passive: true});
        });

        function copyRek(text) {
            navigator.clipboard.writeText(text).then(() => alert("Berhasil disalin!"));
        }
    </script>
</body>
</html>