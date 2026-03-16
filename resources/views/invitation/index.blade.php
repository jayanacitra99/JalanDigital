<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan Thea & Alan - 30 Mei 2026</title>
    
    <link rel="preload" as="image" href="{{ asset('img/cover.webp') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;600;700&family=Great+Vibes&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'w-bg': '#F4F1EA', /* Disesuaikan sedikit ke krem hangat referensi */
                        'w-green': '#1A3626', /* Hijau gelap referensi */
                        'w-text-dark': '#333333',
                        'w-text-light': '#FAF9F6',
                    },
                    fontFamily: {
                        'script': ['Great Vibes', 'cursive'],
                        'hand': ['Caveat', 'cursive'], /* Font tulisan tangan */
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes fadeInLoad {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-load { animation: fadeInLoad 1s ease-out forwards; opacity: 0; }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
            will-change: opacity, transform;
        }
        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        #cover-page {
            transition: transform 0.8s ease-in-out;
            will-change: transform;
        }
        .slide-up { transform: translateY(-100vh); }

        @keyframes spin { 100% { transform: rotate(360deg); } }
        .spin-slow { animation: spin 4s linear infinite; }

        /* Background Clover Texture */
        .clover-bg {
            background-image: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M50,15 A15,15 0 0,1 50,45 A15,15 0 0,1 50,15 Z M20,50 A15,15 0 0,1 50,50 A15,15 0 0,1 20,50 Z M80,50 A15,15 0 0,1 50,50 A15,15 0 0,1 80,50 Z M50,85 A15,15 0 0,1 50,55 A15,15 0 0,1 50,85 Z" fill="%231A3626" opacity="0.04"/></svg>');
            background-repeat: repeat;
        }

        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* Custom Box ala coretan tangan */
        .hand-drawn-box {
            border-radius: 255px 15px 225px 15px/15px 225px 15px 255px;
            border: 1px solid #1A3626;
        }
        
        /* Efek Selotip untuk Polaroid */
        .masking-tape {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%) rotate(-3deg);
            width: 80px;
            height: 25px;
            background-color: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(4px);
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            z-index: 10;
        }
    </style>
</head>
<body class="bg-w-bg text-w-text-dark font-sans antialiased overflow-hidden clover-bg" id="body">

    <audio id="bg-music" loop>
        <source src="{{ asset('/audio/backsound.mpeg') }}" type="audio/mpeg">
    </audio>

    <section id="cover-page" class="fixed inset-0 z-50 flex flex-col items-center justify-center w-full h-[100dvh] p-6 text-center shadow-lg bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('img/cover.webp') }}');">
        
        <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>

        <div class="relative z-10 p-8 h-full max-h-[800px] w-full max-w-md flex flex-col items-center justify-center">
            <p class="font-sans tracking-widest text-[10px] uppercase mb-4 text-w-text-light opacity-90 fade-in-load">Acara Pernikahan</p>
            <h1 class="font-script text-7xl md:text-8xl mb-4 mt-2 text-[#E6C665] fade-in-load delay-1 drop-shadow-lg transform -rotate-2">Thea & Alan</h1>
            <p class="font-sans font-semibold text-xs mb-12 tracking-widest text-w-text-light fade-in-load delay-2">30 MEI 2026</p>

            <div class="mt-4 mb-10 w-full fade-in-load delay-3 bg-w-bg text-w-green p-5 hand-drawn-box max-w-xs shadow-xl">
                <p class="text-[10px] mb-2 opacity-70">Kepada Yth. Bapak/Ibu/Saudara/i</p>
                <h2 id="guest-name" class="font-hand text-2xl font-bold border-b border-w-green pb-1 inline-block min-h-[30px]">
                    Tamu Undangan
                </h2>
            </div>

            <button id="btn-open" class="bg-w-green text-w-bg font-sans px-8 py-3 rounded-full shadow-xl transition duration-300 ease-in-out transform hover:scale-105 tracking-widest text-[10px] font-bold fade-in-load delay-4 border border-w-bg/50">
                BUKA UNDANGAN
            </button>
        </div>
    </section>

    <main id="main-content" class="hidden h-[100dvh] w-full overflow-y-scroll snap-y snap-mandatory scroll-smooth no-scrollbar relative">
        
        <button id="btn-music" class="fixed bottom-6 right-6 z-40 bg-w-bg p-3 rounded-full shadow-xl border border-w-green hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1A3626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
        </button>

        <section class="min-h-[100dvh] w-full snap-start relative bg-cover bg-center flex items-end justify-center pb-12" style="background-image: url('{{ asset('img/cover.webp') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-w-green/80 to-transparent pointer-events-none"></div>
            
            <div class="relative z-10 text-white flex flex-col items-center animate-bounce">
                <span class="font-sans text-[9px] tracking-[0.2em] mb-2 opacity-80">GESER KE ATAS</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-8 text-center bg-w-bg relative overflow-hidden">
            <div class="animate-on-scroll max-w-md relative z-10">
                <p class="font-hand text-2xl md:text-3xl mb-8 leading-relaxed text-w-green">
                    "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa cinta dan kasih sayang..."
                </p>
                <p class="font-hand text-xl font-bold text-w-green border-b-2 border-w-green inline-block pb-1">QS. Ar-Rum : 21</p>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 text-center bg-w-bg">
            <div class="max-w-4xl w-full">
                <p class="font-sans text-[9px] uppercase tracking-widest mb-10 opacity-70 animate-on-scroll">Tanpa mengurangi rasa hormat,<br>kami bermaksud mengundang Anda.</p>
                
                <div class="flex flex-col items-center justify-center gap-6">
                    <div class="animate-on-scroll delay-100">
                        <h3 class="font-hand text-4xl mb-1 text-w-green font-bold">Naridha Thea Wardhani, S.Tr.Li</h3>
                        <p class="font-sans text-[9px] text-gray-600 mt-2">Anak Bungsu dari Bapak Eko Agus Winardi & Ibu Lestari</p>
                    </div>

                    <div class="font-hand text-4xl text-w-green animate-on-scroll delay-200 py-4">&</div>

                    <div class="animate-on-scroll delay-300">
                        <h3 class="font-hand text-4xl mb-1 text-w-green font-bold">Arkhab Maulana U., S.Kom</h3>
                        <p class="font-sans text-[9px] text-gray-600 mt-2">Anak Sulung dari Bapak Tri Tjahyo Prasetiyo & Ibu Ririn Sulintari</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-w-bg text-center">
            <div class="max-w-md mx-auto w-full">
                <h2 class="font-hand text-5xl md:text-6xl mb-10 text-w-green animate-on-scroll">Lokasi Acara</h2>
                
                <div class="flex justify-center gap-3 mb-12 animate-on-scroll">
                    <div class="flex flex-col items-center p-3 w-16 hand-drawn-box bg-white">
                        <p id="days" class="font-hand font-bold text-2xl text-w-green">00</p>
                        <p class="font-sans text-[8px] text-gray-500 uppercase">Hari</p>
                    </div>
                    <div class="flex flex-col items-center p-3 w-16 hand-drawn-box bg-white">
                        <p id="hours" class="font-hand font-bold text-2xl text-w-green">00</p>
                        <p class="font-sans text-[8px] text-gray-500 uppercase">Jam</p>
                    </div>
                    <div class="flex flex-col items-center p-3 w-16 hand-drawn-box bg-white">
                        <p id="minutes" class="font-hand font-bold text-2xl text-w-green">00</p>
                        <p class="font-sans text-[8px] text-gray-500 uppercase">Menit</p>
                    </div>
                    <div class="flex flex-col items-center p-3 w-16 hand-drawn-box bg-white">
                        <p id="seconds" class="font-hand font-bold text-2xl text-w-green">00</p>
                        <p class="font-sans text-[8px] text-gray-500 uppercase">Detik</p>
                    </div>
                </div>

                <div class="animate-on-scroll mb-8">
                    <div class="bg-white p-8 hand-drawn-box relative">
                        <h3 class="font-sans font-bold text-sm tracking-widest mb-4 border-b border-w-green pb-2 inline-block">SABTU, 30 MEI 2026</h3>
                        
                        <div class="flex justify-between text-left mt-4">
                            <div class="w-1/2 pr-2 border-r border-dashed border-w-green/30">
                                <p class="font-hand text-xl font-bold text-w-green">Akad Nikah</p>
                                <p class="font-sans text-[9px] mt-1 text-gray-600">08.00 WIB - Selesai</p>
                            </div>
                            <div class="w-1/2 pl-4">
                                <p class="font-hand text-xl font-bold text-w-green">Resepsi</p>
                                <p class="font-sans text-[9px] mt-1 text-gray-600">14.00 - 17.00 WIB</p>
                            </div>
                        </div>

                        <div class="mt-8 pt-4 border-t border-w-green/10">
                            <p class="font-hand text-2xl text-w-green font-bold">Resto Lumbung Dahar</p>
                            <p class="font-sans text-[9px] text-gray-500 mt-2 leading-relaxed">📍 Jl. Diponegoro, Karangploso, Girimoyo, Kec. Karang Ploso, Kabupaten Malang</p>
                        </div>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <a href="https://maps.google.com" target="_blank" class="inline-block bg-w-green text-w-bg font-sans px-8 py-3 rounded-full text-[10px] tracking-widest hover:bg-opacity-90 transition">
                        VIEW MAPS
                    </a>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center py-16 px-6 bg-w-green text-w-bg text-center">
            <div class="max-w-md w-full">
                <h2 class="font-hand text-5xl md:text-6xl mb-16 text-w-bg animate-on-scroll">Our Journey</h2>
                
                <div class="relative animate-on-scroll">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-0.5 h-full border-l-2 border-dashed border-w-bg/30 z-0"></div>

                    <div class="space-y-12 relative z-10">
                        <div class="flex justify-end w-1/2 pr-6 relative">
                            <div class="absolute right-[-6px] top-1 w-3 h-3 bg-w-bg rounded-full"></div>
                            <div class="text-right">
                                <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px]">2022</h3>
                                <p class="text-[10px] opacity-80 leading-relaxed">Bermula dari ketidaksengajaan. Satu tatapan menumbuhkan rasa penasaran. "Love at First Sight".</p>
                            </div>
                        </div>

                        <div class="flex justify-start w-1/2 pl-6 ml-auto relative">
                            <div class="absolute left-[-6px] top-1 w-3 h-3 bg-w-bg rounded-full"></div>
                            <div class="text-left">
                                <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px]">2023</h3>
                                <p class="text-[10px] opacity-80 leading-relaxed">Percakapan panjang membawa kami pada pemahaman yang sama. Memilih melangkah bersama.</p>
                            </div>
                        </div>

                        <div class="flex justify-end w-1/2 pr-6 relative">
                            <div class="absolute right-[-6px] top-1 w-3 h-3 bg-w-bg rounded-full"></div>
                            <div class="text-right">
                                <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px]">2024 - 2025</h3>
                                <p class="text-[10px] opacity-80 leading-relaxed">Perjalanan penuh tawa dan pelajaran hidup. Keyakinan semakin kuat untuk diperjuangkan bersama.</p>
                            </div>
                        </div>

                        <div class="flex justify-start w-1/2 pl-6 ml-auto relative">
                            <div class="absolute left-[-6px] top-1 w-3 h-3 bg-w-bg rounded-full"></div>
                            <div class="text-left">
                                <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px]">2026</h3>
                                <p class="text-[10px] leading-relaxed font-bold">Dua hati. Dua perjalanan. Kini berakhir dalam satu tujuan. <br> <span class="text-green-300">#satuhaTheasatujAlan ☘️</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-auto min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center py-24 px-6 bg-w-bg clover-bg">
            <div class="max-w-md w-full">
                <h2 class="font-hand text-5xl md:text-6xl mb-12 text-w-green text-center animate-on-scroll">Gallery</h2>
                
                <div class="flex flex-col gap-12 items-center">
                    
                    <div class="bg-white p-3 pb-12 shadow-lg transform -rotate-2 w-4/5 border border-gray-200 relative animate-on-scroll">
                        <div class="masking-tape"></div>
                        <img src="{{ asset('img/cover.webp') }}" loading="lazy" class="w-full h-auto object-cover grayscale hover:grayscale-0 transition duration-500">
                        <p class="font-hand text-xl text-w-green text-center absolute bottom-3 w-full left-0">A day to remember...</p>
                    </div>

                    <div class="bg-white p-3 pb-12 shadow-lg transform rotate-3 w-4/5 ml-8 border border-gray-200 relative animate-on-scroll">
                        <div class="masking-tape" style="transform: translateX(-50%) rotate(2deg);"></div>
                        <img src="{{ asset('img/cover.webp') }}" loading="lazy" class="w-full h-auto object-cover grayscale hover:grayscale-0 transition duration-500">
                        <p class="font-hand text-xl text-w-green text-center absolute bottom-3 w-full left-0">Always been us</p>
                    </div>

                    <div class="bg-white p-3 shadow-lg transform -rotate-1 w-[90%] mr-4 border border-gray-200 relative animate-on-scroll">
                        <div class="masking-tape"></div>
                        <div class="grid grid-cols-2 gap-2">
                            <img src="{{ asset('img/cover.webp') }}" loading="lazy" class="w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500">
                            <img src="{{ asset('img/cover.webp') }}" loading="lazy" class="w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-w-bg text-center">
            <div class="max-w-md w-full">
                <h2 class="font-hand text-5xl md:text-6xl mb-2 text-w-green animate-on-scroll">Ucapan & Kehadiran</h2>
                <p class="font-sans text-[10px] mb-8 text-gray-600 mx-auto animate-on-scroll leading-relaxed">Mohon konfirmasi kehadiran dan tuliskan doa serta restu untuk kami.</p>
                
                <div class="bg-[#EBE7DF] p-6 rounded-3xl shadow-sm animate-on-scroll text-left relative overflow-hidden">
                    <form action="#" method="POST" class="space-y-4 relative z-10">
                        <div>
                            <label class="block font-sans text-[10px] font-bold mb-1.5 text-w-green ml-2">Nama</label>
                            <input type="text" name="nama" placeholder="Nama" required class="w-full px-4 py-3 rounded-full border border-w-green/30 font-sans text-[11px] focus:outline-none focus:border-w-green bg-white">
                        </div>
                        <div>
                            <label class="block font-sans text-[10px] font-bold mb-1.5 text-w-green ml-2">Konfirmasi Kehadiran</label>
                            <select name="kehadiran" required class="w-full px-4 py-3 rounded-full border border-w-green/30 font-sans text-[11px] focus:outline-none focus:border-w-green bg-white appearance-none">
                                <option value="hadir">Saya berencana hadir</option>
                                <option value="tidak_hadir">Maaf, saya tidak bisa hadir</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-sans text-[10px] font-bold mb-1.5 text-w-green ml-2">Pesan</label>
                            <textarea name="pesan" rows="3" placeholder="Pesan" class="w-full px-4 py-3 rounded-2xl border border-w-green/30 font-sans text-[11px] focus:outline-none focus:border-w-green bg-white"></textarea>
                        </div>
                        
                        <div class="flex justify-end pt-2">
                            <button type="submit" class="border border-w-green bg-transparent text-w-green font-sans px-6 py-2 rounded-full text-[10px] font-bold tracking-widest hover:bg-w-green hover:text-white transition flex items-center gap-2">
                                Kirim 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-w-bg text-center clover-bg">
            <div class="animate-on-scroll max-w-md w-full">
                <h2 class="font-hand text-5xl md:text-6xl mb-4 text-w-green">Tanda Kasih</h2>
                <p class="font-sans text-[10px] mb-8 text-gray-600 leading-relaxed px-4">Doa restu Anda adalah karunia terindah bagi kami. Namun jika memberi adalah wujud kasih sayang Anda, Anda dapat memberikan tanda kasih melalui:</p>
                
                <button id="btn-show-gift" class="border-2 border-w-green text-w-green bg-transparent font-sans px-8 py-3 rounded-full transition duration-300 ease-in-out hover:bg-w-green hover:text-white tracking-widest text-[10px] font-bold">
                    BUKA TANDA KASIH
                </button>

                <div id="gift-area" class="hidden mt-8 w-full space-y-4 max-h-[50vh] overflow-y-auto px-1 no-scrollbar pb-6">
                    
                    <div class="border border-w-green/20 p-5 rounded-[2rem] bg-white text-center shadow-sm relative overflow-hidden">
                        <p class="font-sans font-bold text-[11px] text-w-green tracking-widest mb-3">BCA</p>
                        <div class="bg-[#F4F1EA] rounded-xl py-3 px-4 mb-3 flex items-center justify-between">
                            <p class="font-sans font-bold tracking-wider text-sm" id="rek-bca">4390508994</p>
                            <button onclick="copyRek('4390508994')" class="text-[9px] text-w-green">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                            </button>
                        </div>
                        <p class="font-sans text-[10px] font-semibold text-w-green">A.N : Arkhab Maulana</p>
                    </div>

                    <div class="border border-w-green/20 p-5 rounded-[2rem] bg-white text-center shadow-sm">
                        <p class="font-sans font-bold text-[11px] text-w-green tracking-widest mb-3">MANDIRI</p>
                        <div class="bg-[#F4F1EA] rounded-xl py-3 px-4 mb-3 flex items-center justify-between">
                            <p class="font-sans font-bold tracking-wider text-sm" id="rek-mandiri">1440024815133</p>
                            <button onclick="copyRek('1440024815133')" class="text-[9px] text-w-green">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                            </button>
                        </div>
                        <p class="font-sans text-[10px] font-semibold text-w-green">A.N : Naridha Thea</p>
                    </div>

                    <div class="border border-w-green/20 p-5 rounded-[2rem] bg-white text-center shadow-sm">
                        <p class="font-sans font-bold text-[11px] text-w-green tracking-widest mb-3">KIRIM HADIAH</p>
                        <p id="alamat-kado" class="font-sans text-[10px] text-gray-600 leading-relaxed mb-4 px-2">Jl. Sulfat Agung V/18 RT.6 RW.21, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122</p>
                        <button onclick="copyRek(document.getElementById('alamat-kado').innerText)" class="text-[9px] border border-w-green text-w-green px-4 py-2 rounded-full font-bold hover:bg-w-green hover:text-white transition">COPY ALAMAT</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-w-green text-w-text-light text-center">
            <div class="animate-on-scroll max-w-xl mx-auto">
                <p class="font-sans text-[9px] uppercase tracking-widest mb-4 opacity-70">Teruntuk keluarga dan teman</p>
                <div class="bg-[#F4F1EA] text-w-green p-8 transform rotate-3 shadow-xl max-w-xs mx-auto mb-16 relative">
                    <div class="masking-tape" style="top: -10px;"></div>
                    <h2 class="font-hand text-5xl md:text-6xl leading-none">Terima<br>Kasih</h2>
                </div>
                
                <p class="font-sans text-[10px] leading-relaxed opacity-90 mb-12 px-4 text-left">
                    Terima kasih telah mendukung dan menjadi bagian dari hidup kami. <br><br>
                    Kami sangat bersyukur karena keluarga dan teman-teman membantu merayakan dan menjadi bagian dari hari pernikahan kami. <br><br>
                    Sampai jumpa
                </p>
                
                <p class="font-sans text-[10px] opacity-70 mb-1 tracking-widest">With love,</p>
                <h2 class="font-hand text-5xl text-w-bg">Thea & Alan</h2>
            </div>
        </section>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btnOpen = document.getElementById('btn-open');
            const coverPage = document.getElementById('cover-page');
            const mainContent = document.getElementById('main-content');
            const body = document.getElementById('body');
            const btnMusic = document.getElementById('btn-music');
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

            btnOpen.addEventListener('click', () => {
                bgMusic.play().then(() => {
                    isPlaying = true;
                    wasPlayingBeforeHide = true;
                    btnMusic.classList.remove('hidden');
                    btnMusic.classList.add('spin-slow');
                }).catch(err => {
                    console.log("Audio diblokir oleh browser:", err);
                    btnMusic.classList.remove('hidden');
                });

                coverPage.classList.add('slide-up');
                
                setTimeout(() => {
                    coverPage.classList.add('hidden');
                    mainContent.classList.remove('hidden');
                    body.classList.remove('overflow-hidden');
                    
                    const observer = new IntersectionObserver((entries, obs) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('is-visible');
                                obs.unobserve(entry.target); 
                            }
                        });
                    }, { threshold: 0.1 }); 

                    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

                }, 800); 
            });

            btnMusic.addEventListener('click', () => {
                if (isPlaying) {
                    bgMusic.pause();
                    btnMusic.classList.remove('spin-slow');
                    isPlaying = false;
                    wasPlayingBeforeHide = false; 
                } else {
                    bgMusic.play().then(() => {
                        btnMusic.classList.add('spin-slow');
                        isPlaying = true;
                        wasPlayingBeforeHide = true;
                    }).catch(err => console.log(err));
                }
            });

            document.addEventListener('visibilitychange', () => {
                if (mainContent.classList.contains('hidden')) return;

                if (document.hidden) {
                    wasPlayingBeforeHide = isPlaying; 
                    if (isPlaying) {
                        bgMusic.pause();
                        btnMusic.classList.remove('spin-slow');
                    }
                } else {
                    if (wasPlayingBeforeHide) {
                        bgMusic.play().then(() => {
                            btnMusic.classList.add('spin-slow');
                            isPlaying = true;
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

            const countDownDate = new Date("May 30, 2026 08:00:00").getTime();
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
        });

        function copyRek(text) {
            navigator.clipboard.writeText(text).then(() => alert("Berhasil disalin!"));
        }
    </script>
</body>
</html>