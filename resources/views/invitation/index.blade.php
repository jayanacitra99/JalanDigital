<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Undangan {{ $event->title }}: {{ $event->bride_nickname }} & {{ $event->groom_nickname }}">
    <meta property="og:description" content="Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara/i untuk turut hadir dan memberikan doa restu.">
    <meta property="og:image" content="{{ asset('img/after-cover.webp') }}">
    <meta property="og:site_name" content="Undangan Pernikahan">

    <title>Undangan {{ $event->title }} {{ $event->bride_nickname }} & {{ $event->groom_nickname }} - {{ \Carbon\Carbon::parse($event->event_date)->translatedFormat('d F Y') }}</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Caveat:wght@400;600;700&family=Great+Vibes&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap&family=Grey+Qo&display=swap" rel="stylesheet">
    
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
                        'greyqo': ['Grey Qo', 'sans-serif'],
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

        <section id="cover-page" class="absolute inset-0 z-50 flex flex-col items-center justify-center w-full h-[100dvh] p-6 text-center shadow-lg overflow-hidden bg-w-green">
            <div class="absolute -top-32 -left-32 w-96 h-96 bg-w-gold/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-w-gold/20 rounded-full blur-[100px] pointer-events-none z-0"></div>

            <div class="absolute inset-0 bg-black/10 pointer-events-none z-0"></div>

            <svg class="absolute top-1/4 left-[10%] w-10 h-10 text-w-gold opacity-50 z-10 animate-float-1" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>
            <svg class="absolute top-1/2 right-[15%] w-14 h-14 text-w-gold opacity-40 z-10 animate-float-2" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>
            <svg class="absolute bottom-1/4 left-[15%] w-12 h-12 text-w-gold opacity-60 z-10 animate-float-3" viewBox="0 0 100 100" fill="currentColor">
                <path d="M50,50 C35,30 25,5 50,15 C75,5 65,30 50,50 M50,50 C70,35 95,25 85,50 C95,75 70,65 50,50 M50,50 C65,70 75,95 50,85 C25,95 35,70 50,50 M50,50 C30,65 5,75 15,50 C5,25 30,35 50,50"/>
            </svg>

            <div class="relative z-20 p-8 h-full w-full max-w-md flex flex-col items-center justify-center mx-auto">
                <p class="font-serif italic text-xl tracking-wide text-w-gold font-medium mb-10 fade-in-load">{{ $event->title }}</p>
                
                <div class="flex flex-col items-center mb-6 mt-2 fade-in-load delay-1 drop-shadow-md transform -rotate-2">
                    <h1 class="font-greyqo text-[9rem] md:text-[11rem] text-w-gold leading-[0.7]">{{ substr($event->bride_nickname, 0, 1) }}</h1>
                    
                    <span class="text-4xl text-w-text-light font-script leading-[0.7] my-3">&</span>
                    
                    <h1 class="font-greyqo text-[9rem] md:text-[11rem] text-w-gold leading-[0.7]">{{ substr($event->groom_nickname, 0, 1) }}</h1>
                </div>
                
                <p class="font-sans font-semibold text-sm mb-8 tracking-widest text-w-text-light fade-in-load delay-2">{{ strtoupper(\Carbon\Carbon::parse($event->event_date)->translatedFormat('d F Y')) }}</p>

                <div class="stamp-card transform rotate-2 w-[85%] max-w-[260px] fade-in-load delay-3 mb-10">
                    <div class="stamp-inner flex flex-col items-center justify-center min-h-[100px] bg-w-bg shadow-inner">
                        <p class="text-[9px] uppercase tracking-widest opacity-80 mb-2 text-w-text-dark">Kepada Yth.</p>
                        <h2 id="guest-name" class="font-hand text-2xl font-bold text-w-green border-b border-w-green/30 pb-1">
                            Tamu Undangan
                        </h2>
                    </div>
                </div>

                <button id="btn-open" class="bg-w-gold text-w-green font-sans px-8 py-3 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105 tracking-widest text-[10px] font-bold fade-in-load delay-4">
                    BUKA UNDANGAN
                </button>
            </div>
        </section>

        <main id="main-content" class="absolute inset-0 w-full h-[100dvh] overflow-x-hidden overflow-y-scroll snap-y snap-mandatory scroll-smooth no-scrollbar" style="visibility: hidden; opacity: 0; pointer-events: none;">
            
            <section class="min-h-[100dvh] w-full snap-start relative flex items-end justify-center pb-12 overflow-hidden bg-[#EBE7DF]">
                <img src="{{ asset('img/after-cover.webp') }}" alt="Cover" class="absolute inset-0 w-full h-full object-cover z-0" loading="lazy" decoding="async">
                
                <div class="absolute inset-0 bg-gradient-to-t from-w-green/80 to-transparent pointer-events-none z-0"></div>
                
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

                    <div class="animate-on-scroll mb-8 text-center">
                        <h2 class="font-arabic text-2xl mb-6">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h2>
                        <h2 class="font-arabic text-2xl">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</h2>
                    </div>

                    <p class="font-sans text-[9px] uppercase tracking-widest mb-10 opacity-70 animate-on-scroll delay-200 text-center leading-relaxed">
                        Maha Suci Allah SWT yang telah menciptakan <br>makhluk-Nya berpasang-pasangan. <br>Kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam acara {{ $event->title }} putra-putri kami.
                    </p>
                    
                    <div class="flex flex-col items-center w-full px-1 gap-10">
                        <div class="flex flex-col items-center w-full animate-on-scroll delay-200">
                            <div class="relative w-[15rem] h-[20rem] md:w-48 md:h-[18rem]">
                                <div class="absolute top-[16%] bottom-[16%] left-[20%] right-[20%] z-0 rounded-[50%] overflow-hidden bg-[#EBE7DF]">
                                    <img src="{{ $event->slug == 'ngunduh-mantu-alan-thea' ? asset('img/pic-alan.jpg') : asset('img/pic-thea.jpg') }}" alt="Thea" width="600" height="800" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full h-full object-cover">
                                </div>
                                
                                <img src="{{ asset('img/border-white.png') }}" class="absolute inset-0 w-full h-full object-fill z-10 pointer-events-none drop-shadow-xl">
                            </div>

                            <h3 class="font-hand font-bold mb-1 w-full whitespace-nowrap text-[clamp(1.1rem,6vw,1.75rem)]">{{ $event->bride_fullname }}</h3>
                            <p class="font-sans text-xs text-gray-600 mb-4 px-1 leading-relaxed">{!! nl2br(e($event->bride_parents)) !!}</p>
                            @if($event->bride_ig)
                            <a href="https://instagram.com/{{ $event->bride_ig }}" target="_blank"  class="flex items-center gap-1.5 text-[11px] font-bold text-w-gold hover:text-w-green transition bg-white px-4 py-1.5 border border-w-gold/30 rounded-full shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                {{ '@' . $event->bride_ig }}
                            </a>
                            @endif
                        </div>

                        <div class="font-greyqo text-5xl text-w-gold animate-on-scroll delay-300 opacity-70">&</div>

                        <div class="flex flex-col items-center w-full animate-on-scroll delay-400">
                            <div class="relative w-[15rem] h-[20rem] md:w-48 md:h-[18rem]">
                                <div class="absolute top-[16%] bottom-[16%] left-[20%] right-[20%] z-0 rounded-[50%] overflow-hidden bg-[#EBE7DF]">
                                    <img src="{{ $event->slug == 'ngunduh-mantu-alan-thea' ? asset('img/pic-thea.jpg') : asset('img/pic-alan.jpg') }}" alt="Alan" width="600" height="800" loading="lazy" decoding="async" onload="this.classList.add('loaded')" class="lazy-image w-full h-full object-cover">
                                </div>

                                <img src="{{ asset('img/border-white.png') }}" class="absolute inset-0 w-full h-full object-fill z-10 pointer-events-none drop-shadow-xl">
                            </div>

                            <h3 class="font-hand font-bold mb-1 w-full whitespace-nowrap text-[clamp(1.1rem,5.5vw,1.6rem)]">{{ $event->groom_fullname }}</h3>
                            <p class="font-sans text-xs text-gray-600 mb-4 px-1 leading-relaxed">{!! nl2br(e($event->groom_parents)) !!}</p>
                            @if($event->groom_ig)
                            <a href="https://instagram.com/{{ $event->groom_ig }}" target="_blank" class="flex items-center gap-1.5 text-[11px] font-bold text-w-gold hover:text-w-green transition bg-white px-4 py-1.5 border border-w-gold/30 rounded-full shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                                {{ '@' . $event->groom_ig }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-clover-light text-center">
                <div class="max-w-md mx-auto w-full">
                    <h2 class="font-hand text-5xl md:text-6xl mb-10 text-w-green animate-on-scroll">{{ $event->title }}</h2>
                    
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
                            <h3 class="font-sans font-bold text-sm tracking-widest mb-4 border-b border-w-green/30 pb-2 inline-block text-w-green">
                                {{ strtoupper(\Carbon\Carbon::parse($event->event_date)->translatedFormat('l, d F Y')) }}
                            </h3>
                            <div class="mt-4">
                                <p class="font-hand text-2xl font-bold text-w-gold">{{ $event->title }}</p>
                                <p class="font-sans text-[10px] mt-1 text-gray-600 font-bold tracking-wider">{{ $event->event_time_text }}</p>
                            </div>
                            <div class="mt-6 pt-4 border-t border-w-green/10">
                                <p class="font-hand text-xl text-w-green font-bold">{{ $event->location_name }}</p>
                                <p class="font-sans text-[9px] text-gray-500 mt-2 leading-relaxed">📍 {{ $event->location_address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="animate-on-scroll delay-400">
                        <a href="{{ $event->maps_link }}" target="_blank" class="inline-block bg-w-green text-white font-sans px-8 py-3 rounded-full text-[10px] tracking-widest hover:bg-opacity-90 transition shadow-md">
                            VIEW MAPS
                        </a>
                    </div>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col justify-center py-16 text-w-text-light relative overflow-hidden bg-w-green">
                <div class="max-w-md mx-auto w-full relative z-10 mt-4">
                    <h2 class="font-hand text-5xl md:text-6xl mb-12 text-center animate-on-scroll">Our Journey</h2>
                    
                    <div class="w-full px-8 animate-on-scroll delay-100">
                        <div class="mx-2">
                            <div class="relative border-t border-l border-b border-w-text-light rounded-l-[2rem] pt-6 pb-6 pl-6 pr-2">
                                <span class="absolute -top-[7px] right-0 text-[12px] leading-none text-w-text-light bg-w-green px-1">♥</span>
                                <span class="absolute -top-[7px] left-8 text-[12px] leading-none text-w-text-light bg-w-green px-1">♥</span>
                                
                                <h3 class="font-sans text-base tracking-widest mb-2 font-semibold">2022</h3>
                                <p class="font-sans text-[9px] leading-relaxed opacity-90">Bermula dari ketidaksengajaan.<br>Satu tatapan menumbuhkan rasa penasaran. Tanpa<br>rencana, tanpa aba-aba.<br>"Love at First Sight"—begitulah cerita kami dimulai</p>
                            </div>
                            
                            <div class="relative border-r border-b border-w-text-light rounded-r-[2rem] pt-6 pb-6 pr-6 pl-2 -mt-[1px]">
                                <span class="absolute -top-[7px] right-8 text-[12px] leading-none text-w-text-light bg-w-green px-1">♥</span>
                                
                                <h3 class="font-sans text-base tracking-widest mb-2 font-semibold text-right">2023</h3>
                                <p class="font-sans text-[9px] leading-relaxed opacity-90 text-right">Percakapan panjang membawa kami<br>pada rasa yang sama—nyaman dan searah.<br>Memilih melangkah bersama,<br>bukan hanya sekadar singgah.</p>
                            </div>

                            <div class="relative border-l border-b border-w-text-light rounded-l-[2rem] pt-6 pb-6 pl-6 pr-2 -mt-[1px]">
                                <span class="absolute -top-[7px] left-8 text-[12px] leading-none text-w-text-light bg-w-green px-1">♥</span>
                                
                                <h3 class="font-sans text-base tracking-widest mb-2 font-semibold">2024 — 2025</h3>
                                <p class="font-sans text-[9px] leading-relaxed opacity-90">Banyak cerita, tawa, dan pelajaran hidup di dalamnya.<br>Keyakinan itu semakin tumbuh—bahwa perjalanan kami<br>layak diperjuangkan bersama.</p>
                            </div>

                            <div class="relative border-r border-b border-w-text-light rounded-r-[2rem] pt-6 pb-6 pr-6 pl-2 -mt-[1px]">
                                <span class="absolute -top-[7px] right-8 text-[12px] leading-none text-w-text-light bg-w-green px-1">♥</span>
                                <span class="absolute -bottom-[7px] right-8 text-[12px] leading-none text-w-text-light bg-w-green px-1">♥</span>
                                <span class="absolute -bottom-[7px] left-0 text-[12px] leading-none text-w-text-light bg-w-green px-1">♥</span>
                                
                                <h3 class="font-sans text-base tracking-widest mb-2 font-semibold text-right">2026</h3>
                                <p class="font-sans text-[9px] leading-relaxed opacity-90 text-right">Hari ini, di mana perjalanan baru itu dimulai.<br>Dua hati. Dua perjalanan. Kini berakhir dalam satu<br>tujuan #satuhaTheasatujAlan🍀</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col justify-center py-16 px-6 bg-w-bg text-w-green relative">
                <div class="max-w-md mx-auto w-full relative z-10 animate-on-scroll">
                    <h2 class="font-hand text-5xl md:text-6xl mb-12 text-center text-w-green">Our Gallery</h2>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex flex-col gap-4">
                            <div class="gallery-item cursor-pointer overflow-hidden rounded-sm shadow-sm" data-index="0">
                                <img src="{{ asset('img/jawa-1.jpg') }}" class="w-full h-52 object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                            </div>
                            <div class="gallery-item cursor-pointer overflow-hidden rounded-sm shadow-sm" data-index="2">
                                <img src="{{ asset('img/jawa-5.jpg') }}" class="w-full h-72 object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                            </div>
                            <div class="gallery-item cursor-pointer overflow-hidden rounded-sm shadow-sm" data-index="4">
                                <img src="{{ asset('img/jawa-3.jpg') }}" class="w-full h-44 object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-4 mt-10">
                            <div class="gallery-item cursor-pointer overflow-hidden rounded-sm shadow-sm" data-index="1">
                                <img src="{{ asset('img/jawa-2.jpg') }}" class="w-full h-44 object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                            </div>
                            <div class="gallery-item cursor-pointer overflow-hidden rounded-sm shadow-sm" data-index="3">
                                <img src="{{ asset('img/jawa-4.jpg') }}" class="w-full h-72 object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                            </div>
                            <div class="gallery-item cursor-pointer overflow-hidden rounded-sm shadow-sm" data-index="5">
                                <img src="{{ asset('img/jawa-6.jpg') }}" class="w-full h-52 object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center bg-w-green text-w-text-light relative overflow-hidden">
                <div class="w-full h-[45vh] relative animate-on-scroll">
                    <img src="{{ asset('img/luminan-3.jpg') }}" class="w-full h-full object-cover gallery-item cursor-pointer" data-index="6" loading="lazy">
                    <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-w-green to-transparent"></div>
                </div>

                <div class="max-w-md mx-auto w-full flex flex-col items-center px-6 -mt-12 z-10 animate-on-scroll delay-100">
                    <div class="bg-[#F4F1EA] p-2.5 pb-3 rounded-sm shadow-2xl transform rotate-[-2deg] w-[90%]">
                        <div class="grid grid-cols-2 gap-2">
                            <img src="{{ asset('img/luminan-5.jpg') }}" class="w-full aspect-[3/4] object-cover gallery-item cursor-pointer" data-index="7" loading="lazy">
                            <img src="{{ asset('img/luminan-1.jpg') }}" class="w-full aspect-[3/4] object-cover gallery-item cursor-pointer" data-index="8" loading="lazy">
                        </div>
                    </div>

                    <div class="mt-12 px-4 text-center animate-on-scroll delay-200">
                        <p class="font-hand text-xl md:text-2xl leading-relaxed opacity-90 tracking-wide">
                            There were countless paths we faced, yet gently led us back. Through every season of our story, it has <b>always been us</b>— again and again. From now to a lifetime, and beyond.
                        </p>
                    </div>
                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center py-16 p-6 bg-w-green relative">
                <div class="max-w-md mx-auto w-full flex flex-col gap-8 animate-on-scroll">
                    
                    <div class="bg-[#F4F1EA] p-3 pb-8 shadow-xl transform rotate-[1deg] w-full transition hover:rotate-0 duration-300">
                        <img src="{{ asset('img/luminan-2.jpg') }}" class="w-full h-auto gallery-item cursor-pointer" data-index="9" loading="lazy">
                    </div>
                    
                    <div class="bg-[#F4F1EA] p-3 pb-8 shadow-xl transform rotate-[-2deg] w-full transition hover:rotate-0 duration-300">
                        <img src="{{ asset('img/luminan-4.jpg') }}" class="w-full h-auto gallery-item cursor-pointer" data-index="10" loading="lazy">
                    </div>

                    <div class="bg-[#F4F1EA] p-3 pb-8 shadow-xl transform rotate-[2deg] w-full transition hover:rotate-0 duration-300">
                        <img src="{{ asset('img/luminan-6.jpg') }}" class="w-full h-auto gallery-item cursor-pointer" data-index="11" loading="lazy">
                    </div>

                </div>
            </section>

            <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center py-16 p-6 text-center relative overflow-hidden bg-clover-light text-w-green">
                <div class="max-w-md mx-auto w-full relative z-10">
                    <h2 class="font-hand text-5xl md:text-6xl mb-2 animate-on-scroll">Ucapan & Kehadiran</h2>
                    <p class="font-sans text-[10px] mb-8 text-gray-600 mx-auto animate-on-scroll delay-100 leading-relaxed">Mohon konfirmasi kehadiran dan tuliskan doa serta restu untuk kami.</p>
                    
                    <div class="bg-[#EBE7DF] p-6 rounded-3xl shadow-sm animate-on-scroll delay-200 text-left relative overflow-hidden">
                        <form id="rsvp-form" action="{{ route('invitation.rsvp', $event->slug) }}" method="POST" class="space-y-4 relative z-10">
                            @csrf
                            <div id="rsvp-alert" class="hidden bg-green-100 text-green-700 p-3 rounded-xl text-[10px] mb-3"></div>
                            
                            <div>
                                <label class="block font-sans text-[10px] font-bold mb-1.5 ml-2">Nama</label>
                                <input type="text" id="rsvp-name-input" name="nama" placeholder="Nama Anda" required class="w-full px-4 py-3 rounded-full border border-w-green/30 font-sans text-[11px] focus:outline-none focus:border-w-green bg-white text-w-text-dark">
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
                                <button type="submit" id="btn-submit-rsvp" class="border border-w-green bg-transparent font-sans px-6 py-2 rounded-full text-[10px] font-bold tracking-widest hover:bg-w-green hover:text-white transition flex items-center gap-2">
                                    <span>Kirim</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div id="rsvp-list-container" class="mt-8 bg-white/60 p-4 rounded-2xl max-h-[50vh] overflow-y-auto no-scrollbar space-y-3 animate-on-scroll delay-300 shadow-sm border border-w-green/10">
                        @forelse($event->rsvps as $rsvp)
                        <div class="bg-white p-3 rounded-xl shadow-sm text-left border border-w-green/10 rsvp-item">
                            <div class="flex justify-between items-center mb-1.5">
                                <p class="font-sans font-bold text-[11px] text-w-text-dark">{{ $rsvp->name }}</p>
                                @if($rsvp->attendance == 'hadir')
                                    <span class="bg-green-100 text-green-700 text-[8px] font-bold px-2 py-0.5 rounded-full">Hadir</span>
                                @else
                                    <span class="bg-red-100 text-red-700 text-[8px] font-bold px-2 py-0.5 rounded-full">Tidak Hadir</span>
                                @endif
                            </div>
                            <p class="font-sans text-[10px] text-gray-600 leading-relaxed">{{ $rsvp->message }}</p>
                        </div>
                        @empty
                        <p id="empty-rsvp-msg" class="text-center font-sans text-[10px] text-gray-500">Belum ada ucapan.</p>
                        @endforelse
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
                            <p class="font-sans font-bold text-[11px] text-w-green tracking-widest mb-3">{{ $event->bank_name }}</p>
                            <div class="bg-[#F4F1EA] rounded-xl py-3 px-4 mb-3 flex items-center justify-between">
                                <p class="font-sans font-bold tracking-wider text-sm text-w-text-dark" id="rek-bca">{{ $event->bank_account }}</p>
                                <button onclick="copyRek('{{ $event->bank_account }}')" class="text-[9px] text-w-green">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                                </button>
                            </div>
                            <p class="font-sans text-[10px] font-semibold text-w-green">A.N : {{ $event->bank_account_name }}</p>
                        </div>

                        <div class="border border-w-green/20 p-5 rounded-[2rem] bg-white text-center shadow-sm">
                            <p class="font-sans font-bold text-[11px] text-w-green tracking-widest mb-3">KIRIM HADIAH</p>
                            <p id="alamat-kado" class="font-sans text-[10px] text-gray-600 leading-relaxed mb-4 px-2">{{ $event->gift_address }}</p>
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
                        
                        <div class="relative w-56 h-[20rem] md:w-64 md:h-[24rem] mb-6 transform rotate-2">
                            <div class="absolute top-[10%] bottom-[25%] left-[12%] right-[12%] z-0 overflow-hidden">
                                 <img src="{{ asset('img/pic-end.jpg') }}" alt="Thea & Alan" loading="lazy" class="w-full h-full object-cover">
                            </div>
                            
                            <img src="{{ asset('img/border-square.png') }}" class="absolute inset-0 w-full h-full object-fill z-10 pointer-events-none drop-shadow-2xl">
                        </div>

                        <div class="bg-[#F4F1EA] text-w-green px-8 py-5 transform -rotate-3 shadow-lg border border-w-green/10 -mt-6 relative z-20">
                            <h2 class="font-hand text-5xl md:text-6xl leading-none">Terima Kasih</h2>
                        </div>
                    </div>
                    
                    <p class="font-sans text-[10px] leading-relaxed opacity-90 mb-12 px-4 text-center animate-on-scroll delay-200 max-w-sm">
                        Terima kasih telah mendukung dan menjadi bagian dari hidup kami. <br><br>
                        Kami sangat bersyukur karena keluarga dan teman-teman membantu merayakan dan menjadi bagian dari hari pernikahan kami. <br><br>
                        Sampai jumpa :)
                    </p>
                    
                    <p class="font-sans text-[10px] opacity-70 mb-1 tracking-widest animate-on-scroll delay-300">With love,</p>
                    <h2 class="font-hand text-5xl text-w-bg animate-on-scroll delay-400">
                        {{ $event->slug == 'ngunduh-mantu-alan-thea' ? 'Alan & Thea' : 'Thea & Alan' }}
                    </h2>
                </div>
            </section>

        </main>
        
        <div id="lightbox" class="absolute inset-0 z-[100] hidden bg-black/95 flex-col items-center justify-center opacity-0 transition-opacity duration-300">
            <button id="lightbox-close" class="absolute top-6 right-6 text-white text-4xl leading-none hover:text-gray-300 z-50">×</button>
            <button id="lightbox-prev" class="absolute left-4 text-white text-5xl hover:text-gray-300 z-50">‹</button>
            <img id="lightbox-img" src="" class="max-w-[90%] max-h-[80vh] object-contain transition-transform duration-300 select-none">
            <button id="lightbox-next" class="absolute right-4 text-white text-5xl hover:text-gray-300 z-50">›</button>
            <div class="absolute bottom-6 text-white font-sans text-[10px] tracking-widest opacity-70">
                <span id="lightbox-counter">1</span> / 12
            </div>
        </div>

    </div>

    <script>
        const galleryImages = [
            "{{ asset('img/jawa-1.jpg') }}",
            "{{ asset('img/jawa-2.jpg') }}",
            "{{ asset('img/jawa-5.jpg') }}",
            "{{ asset('img/jawa-4.jpg') }}",
            "{{ asset('img/jawa-3.jpg') }}",
            "{{ asset('img/jawa-6.jpg') }}",
            "{{ asset('img/luminan-3.jpg') }}",
            "{{ asset('img/luminan-5.jpg') }}",
            "{{ asset('img/luminan-1.jpg') }}",
            "{{ asset('img/luminan-2.jpg') }}",
            "{{ asset('img/luminan-4.jpg') }}",
            "{{ asset('img/luminan-6.jpg') }}",
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

            // Ambil URL parameter untuk nama tamu
            const urlParams = new URLSearchParams(window.location.search);
            let guestName = urlParams.get('to');
            const guestNameEl = document.getElementById('guest-name');
            const rsvpNameInput = document.getElementById('rsvp-name-input'); // Ambil input nama

            if (guestName && guestName.trim() !== '') {
                let formattedName = guestName.replace(/\+/g, ' ');
                guestNameEl.textContent = formattedName;
                
                // Set otomatis ke dalam form RSVP
                if(rsvpNameInput) {
                    rsvpNameInput.value = formattedName;
                }
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

            const eventDateRaw = "{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y H:i:s') }}";
            const countDownDate = new Date(eventDateRaw).getTime();
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

            // LOGIKA AJAX UNTUK RSVP
            const rsvpForm = document.getElementById('rsvp-form');
            if (rsvpForm) {
                rsvpForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // Mencegah reload halaman
                    
                    const submitBtn = document.getElementById('btn-submit-rsvp');
                    const btnText = submitBtn.querySelector('span');
                    const originalText = btnText.innerText;
                    
                    btnText.innerText = 'Mengirim...';
                    submitBtn.disabled = true;

                    const formData = new FormData(rsvpForm);
                    
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    fetch(rsvpForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken // Gunakan token dari meta
                        }
                    })
                    .then(response => {
                        // Cek apakah response dari server sukses (status 200-299)
                        if (!response.ok) {
                            throw new Error('Network response was not ok: ' + response.status);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            // Tampilkan alert success sementara
                            const alertBox = document.getElementById('rsvp-alert');
                            alertBox.innerText = data.message;
                            alertBox.classList.remove('hidden');
                            setTimeout(() => alertBox.classList.add('hidden'), 5000);

                            // Reset form kecuali nama
                            rsvpForm.reset();
                            const urlParams = new URLSearchParams(window.location.search);
                            let guestName = urlParams.get('to');
                            if(guestName && guestName.trim() !== '') {
                                document.getElementById('rsvp-name-input').value = guestName.replace(/\+/g, ' ');
                            }

                            // Buat elemen ucapan baru
                            const isHadir = data.data.attendance === 'hadir';
                            const badgeHadir = isHadir 
                                ? '<span class="bg-green-100 text-green-700 text-[8px] font-bold px-2 py-0.5 rounded-full">Hadir</span>'
                                : '<span class="bg-red-100 text-red-700 text-[8px] font-bold px-2 py-0.5 rounded-full">Tidak Hadir</span>';
                            
                            const escapeHtml = (text) => (text || '').replace(/[&<>"']/g, m => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[m]);

                            const newRsvpHTML = `
                                <div class="bg-white p-3 rounded-xl shadow-sm text-left border border-w-green/10 rsvp-item fade-in-load">
                                    <div class="flex justify-between items-center mb-1.5">
                                        <p class="font-sans font-bold text-[11px] text-w-text-dark">${escapeHtml(data.data.name)}</p>
                                        ${badgeHadir}
                                    </div>
                                    <p class="font-sans text-[10px] text-gray-600 leading-relaxed">${escapeHtml(data.data.message)}</p>
                                </div>
                            `;

                            const listContainer = document.getElementById('rsvp-list-container');
                            const emptyMsg = document.getElementById('empty-rsvp-msg');
                            if(emptyMsg) emptyMsg.remove(); 
                            
                            listContainer.insertAdjacentHTML('afterbegin', newRsvpHTML);
                        }
                    })
                    .catch(error => {
                        console.error('Error pengiriman RSVP:', error);
                        alert('Maaf, sesi Anda mungkin telah habis. Silakan refresh halaman dan coba lagi.');
                    })
                    .finally(() => {
                        btnText.innerText = originalText;
                        submitBtn.disabled = false;
                    });
                });
            }
        });

        // Fungsi Copy Clipboard dengan Fallback
        window.copyRek = function(text) {
            // Jika browser mendukung clipboard API dan berada dalam konteks aman (HTTPS / Localhost)
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(text).then(() => {
                    alert("Berhasil disalin: " + text);
                }).catch(err => {
                    fallbackCopyTextToClipboard(text);
                });
            } else {
                // Gunakan fallback jika tidak didukung (contoh: local IP HTTP)
                fallbackCopyTextToClipboard(text);
            }
        }

        function fallbackCopyTextToClipboard(text) {
            var textArea = document.createElement("textarea");
            textArea.value = text;
            
            // Sembunyikan textarea dari view
            textArea.style.top = "0";
            textArea.style.left = "0";
            textArea.style.position = "fixed";
            textArea.style.opacity = "0";

            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();

            try {
                var successful = document.execCommand('copy');
                if(successful) {
                    alert("Berhasil disalin: " + text);
                } else {
                    alert("Gagal menyalin text. Browser tidak mendukung.");
                }
            } catch (err) {
                console.error('Fallback: Oops, unable to copy', err);
            }

            document.body.removeChild(textArea);
        }
    </script>
</body>
</html>