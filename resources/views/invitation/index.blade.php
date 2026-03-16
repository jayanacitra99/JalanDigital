<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan Thea & Alan - 30 Mei 2026</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'w-bg': '#FAF9F6',
                        'w-green': '#2F4F2F',
                        'w-text-dark': '#333333',
                        'w-text-light': '#FAF9F6',
                    },
                    fontFamily: {
                        'script': ['Great Vibes', 'cursive'],
                        'serif': ['Playfair Display', 'serif'],
                        'sans': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Animasi Cover Saat Load */
        @keyframes fadeInLoad {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in-load { animation: fadeInLoad 1s ease-out forwards; opacity: 0; }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }

        /* Animasi Element Saat Di-Scroll */
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

        /* Background Clover */
        .clover-bg {
            background-image: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M50,15 A15,15 0 0,1 50,45 A15,15 0 0,1 50,15 Z M20,50 A15,15 0 0,1 50,50 A15,15 0 0,1 20,50 Z M80,50 A15,15 0 0,1 50,50 A15,15 0 0,1 80,50 Z M50,85 A15,15 0 0,1 50,55 A15,15 0 0,1 50,85 Z" fill="%232F4F2F" opacity="0.05"/></svg>');
            background-repeat: repeat;
        }

        /* Menyembunyikan Scrollbar untuk Efek Swipe yang Bersih */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-w-bg text-w-text-dark font-sans antialiased overflow-hidden clover-bg" id="body">

    <audio id="bg-music" loop>
        <source src="{{ asset('/audio/backsound.mpeg') }}" type="audio/mpeg">
    </audio>

    <section id="cover-page" class="fixed inset-0 z-50 flex flex-col items-center justify-center w-full h-[100dvh] p-6 text-center shadow-lg bg-cover bg-center bg-no-repeat" style="background-image: url('cover.png');">
        
        <div class="absolute inset-0 bg-black/50 pointer-events-none"></div>

        <div class="relative z-10 border-2 border-w-bg/20 p-8 rounded-t-full rounded-b-full h-full max-h-[800px] w-full max-w-md flex flex-col items-center justify-center bg-w-green/80 backdrop-blur-sm">
            <p class="font-sans tracking-widest text-[10px] uppercase mb-4 text-w-text-light opacity-80 fade-in-load">Acara Pernikahan</p>
            <h1 class="font-script text-6xl md:text-7xl mb-6 mt-2 text-w-text-light fade-in-load delay-1">Thea <br> <span class="text-4xl">&</span> <br> Alan</h1>
            <p class="font-sans font-semibold text-xs mb-10 tracking-widest text-w-text-light fade-in-load delay-2">SABTU, 30 MEI 2026</p>

            <div class="mt-4 mb-8 w-full fade-in-load delay-3">
                <p class="text-xs mb-1 text-w-text-light opacity-80">Kepada Yth. Bapak/Ibu/Saudara/i</p>
                <h2 id="guest-name" class="font-serif text-xl font-bold text-w-green bg-w-bg py-2 rounded-lg inline-block w-3/4 min-h-[44px] flex items-center justify-center mx-auto">
                    Tamu Undangan
                </h2>
            </div>

            <button id="btn-open" class="bg-w-bg text-w-green font-sans px-8 py-3 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105 tracking-widest text-xs font-bold fade-in-load delay-4">
                BUKA UNDANGAN
            </button>
        </div>
    </section>

    <main id="main-content" class="hidden h-[100dvh] w-full overflow-y-scroll snap-y snap-mandatory scroll-smooth no-scrollbar relative">
        
        <button id="btn-music" class="fixed bottom-6 right-6 z-40 bg-white p-3 rounded-full shadow-lg border-2 border-w-green hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2F4F2F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
        </button>

        <section class="min-h-[100dvh] w-full snap-start relative bg-cover bg-center flex items-end justify-center pb-12" style="background-image: url('after-cover.png');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent pointer-events-none"></div>
            
            <div class="relative z-10 text-white flex flex-col items-center animate-bounce">
                <span class="font-sans text-[10px] tracking-widest mb-2 opacity-80">SWIPE UP</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-8 text-center bg-w-bg">
            <div class="animate-on-scroll max-w-xl">
                <p class="font-script text-4xl mb-4 text-w-green">Bismillahirrahmanirrahim</p>
                <p class="font-sans text-xs mb-12 opacity-80 text-gray-600">Assalamualaikum Warahmatullahi Wabarakatuh</p>
                
                <p class="font-script text-3xl mb-12 leading-snug text-w-green">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa cinta dan kasih sayang."</p>
                <p class="text-xs font-bold text-w-green mb-12 border-b border-w-green inline-block pb-1">(QS. Ar-Rum: 21)</p>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 text-center bg-w-bg">
            <div class="max-w-4xl w-full">
                <h2 class="font-script text-5xl md:text-6xl mb-10 text-w-green animate-on-scroll">Pasangan Mempelai</h2>
                
                <div class="flex flex-col md:flex-row items-center justify-center gap-8">
                    <div class="flex flex-col items-center w-full max-w-sm animate-on-scroll delay-100">
                        <div class="w-40 h-40 md:w-48 md:h-48 rounded-full border-8 border-white shadow-xl overflow-hidden mb-4 relative">
                            <img src="https://via.placeholder.com/300x300/e0e0e0/505050?text=THEA" alt="Thea" loading="lazy" class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-500">
                            <div class="absolute inset-0 border-4 border-w-green rounded-full pointer-events-none"></div>
                        </div>
                        <h3 class="font-script text-3xl md:text-4xl mb-1 font-bold">Naridha Thea Wardhani</h3>
                        <p class="font-sans text-[10px] text-w-green tracking-wider mb-1">Putri Bungsu dari</p>
                        <p class="text-[10px] text-gray-700 font-serif">Bapak Eko Agus Winardi & Ibu Lestari</p>
                    </div>

                    <div class="font-script text-4xl text-w-green animate-on-scroll delay-200">&</div>

                    <div class="flex flex-col items-center w-full max-w-sm animate-on-scroll delay-300">
                        <div class="w-40 h-40 md:w-48 md:h-48 rounded-full border-8 border-white shadow-xl overflow-hidden mb-4 relative">
                            <img src="https://via.placeholder.com/300x300/e0e0e0/505050?text=ALAN" alt="Alan" loading="lazy" class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-500">
                            <div class="absolute inset-0 border-4 border-w-green rounded-full pointer-events-none"></div>
                        </div>
                        <h3 class="font-script text-3xl md:text-4xl mb-1 font-bold">Arkhab Maulana</h3>
                        <p class="font-sans text-[10px] text-w-green tracking-wider mb-1">Putra Sulung dari</p>
                        <p class="text-[10px] text-gray-700 font-serif">Bapak Tri Tjahyo Prasetiyo & Ibu Ririn Sulintari</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-white text-center">
            <div class="max-w-4xl mx-auto w-full">
                <h2 class="font-script text-5xl md:text-6xl mb-10 text-w-green animate-on-scroll">Save The Date</h2>
                
                <div class="flex justify-center gap-3 mb-10 animate-on-scroll w-full max-w-sm mx-auto">
                    <div class="flex flex-col items-center p-2 rounded-lg border border-w-green flex-1 shadow-sm bg-w-bg">
                        <p id="days" class="font-sans font-bold text-xl text-w-green">00</p>
                        <p class="font-sans text-[9px] text-gray-500 uppercase tracking-widest">Hari</p>
                    </div>
                    <div class="flex flex-col items-center p-2 rounded-lg border border-w-green flex-1 shadow-sm bg-w-bg">
                        <p id="hours" class="font-sans font-bold text-xl text-w-green">00</p>
                        <p class="font-sans text-[9px] text-gray-500 uppercase tracking-widest">Jam</p>
                    </div>
                    <div class="flex flex-col items-center p-2 rounded-lg border border-w-green flex-1 shadow-sm bg-w-bg">
                        <p id="minutes" class="font-sans font-bold text-xl text-w-green">00</p>
                        <p class="font-sans text-[9px] text-gray-500 uppercase tracking-widest">Menit</p>
                    </div>
                    <div class="flex flex-col items-center p-2 rounded-lg border border-w-green flex-1 shadow-sm bg-w-bg">
                        <p id="seconds" class="font-sans font-bold text-xl text-w-green">00</p>
                        <p class="font-sans text-[9px] text-gray-500 uppercase tracking-widest">Detik</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 mb-8 animate-on-scroll max-w-sm mx-auto">
                    <div class="border border-w-green p-6 rounded-2xl bg-w-bg">
                        <h3 class="font-script text-2xl mb-1 font-bold text-w-green">Akad Nikah & Resepsi</h3>
                        <p class="font-sans text-xs mb-1 font-semibold">Sabtu, 30 Mei 2026</p>
                        <p class="font-bold text-xs mb-3 text-gray-600">08.00 WIB - Selesai</p>
                        <p class="font-script font-semibold text-xl text-w-green">Resto Lumbung Dahar</p>
                        <p class="text-[9px] text-gray-600 mt-1 leading-relaxed">Jl. Diponegoro, Karangploso, Girimoyo, Kec. Karang Ploso, Kabupaten Malang</p>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <a href="https://maps.google.com" target="_blank" class="inline-block bg-w-green text-white font-sans font-semibold px-8 py-3 rounded-full text-xs tracking-widest hover:opacity-90 transition shadow-md">
                        Buka Google Maps
                    </a>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-w-bg text-center clover-bg">
            <div class="max-w-md w-full">
                <h2 class="font-script text-5xl md:text-6xl mb-12 text-w-green animate-on-scroll">Our Journey</h2>
                
                <div class="relative border-l-2 border-w-green space-y-8 pb-4 ml-4 animate-on-scroll text-left">
                    <div class="pl-6 relative">
                        <div class="absolute w-3 h-3 bg-w-green rounded-full -left-[7px] top-1"></div>
                        <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px] text-w-green">JANUARI 2014</h3>
                        <p class="text-[11px] text-gray-700 leading-relaxed font-serif">Pertama kali mata kami bertemu, tak pernah terbayang bahwa tatapan itu akan menjadi awal dari segalanya. "Love at First Sight".</p>
                    </div>
                    <div class="pl-6 relative">
                        <div class="absolute w-3 h-3 bg-w-green rounded-full -left-[7px] top-1"></div>
                        <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px] text-w-green">2015 - 2016</h3>
                        <p class="text-[11px] text-gray-700 leading-relaxed font-serif">Tahun-tahun di mana percakapan panjang membawa kami pada pemahaman yang sama. Kami memilih melangkah bersama.</p>
                    </div>
                    <div class="pl-6 relative">
                        <div class="absolute w-3 h-3 bg-w-green rounded-full -left-[7px] top-1"></div>
                        <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px] text-w-green">2022 - 2023</h3>
                        <p class="text-[11px] text-gray-700 leading-relaxed font-serif">Perjalanan penuh tawa dan pelajaran hidup. Keyakinan itu semakin kuat, bahwa perjalanan ini layak untuk diperjuangkan.</p>
                    </div>
                    <div class="pl-6 relative">
                        <div class="absolute w-3 h-3 bg-w-green rounded-full -left-[7px] top-1"></div>
                        <h3 class="font-sans font-bold tracking-widest mb-1 text-[11px] text-w-green">MEI 2026</h3>
                        <p class="text-[11px] text-w-green leading-relaxed font-bold font-serif">Dua hati. Dua perjalanan. Kini berakhir dalam satu tujuan. #satuhaTheasatujAlan ☘️</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-white">
            <div class="max-w-md w-full">
                <h2 class="font-script text-5xl md:text-6xl mb-10 text-w-green text-center animate-on-scroll">Gallery</h2>
                
                <div class="grid grid-cols-2 gap-3 animate-on-scroll">
                    <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden col-span-2 shadow-md">
                        <img src="https://via.placeholder.com/800x400/e0e0e0/505050?text=Prewed+Utama" alt="Photo 1" loading="lazy" class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-500">
                    </div>
                    <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden shadow-md">
                        <img src="https://via.placeholder.com/400x400/e0e0e0/505050?text=Prewed+2" alt="Photo 2" loading="lazy" class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-500">
                    </div>
                    <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden shadow-md relative">
                         <img src="https://via.placeholder.com/400x400/e0e0e0/505050?text=Prewed+3" alt="Photo 3" loading="lazy" class="w-full h-full object-cover grayscale hover:grayscale-0 transition duration-500">
                         <div class="absolute bottom-2 left-2 right-2 bg-white/90 p-1.5 rounded shadow-sm text-center">
                             <p class="font-sans font-semibold text-w-green text-[9px]">A Day to Remember</p>
                         </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-w-bg clover-bg text-center">
            <div class="max-w-md w-full">
                <h2 class="font-script text-5xl md:text-6xl mb-4 text-w-green animate-on-scroll">RSVP</h2>
                <p class="font-sans text-[11px] mb-8 text-gray-700 mx-auto animate-on-scroll leading-relaxed font-serif">Merupakan kehormatan bagi kami apabila Anda berkenan hadir dan memberikan doa restu langsung.</p>
                
                <div class="border border-w-green/20 p-6 rounded-2xl bg-white shadow-sm animate-on-scroll text-left">
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label class="block font-sans text-[10px] font-semibold mb-1 text-w-green">Nama Anda</label>
                            <input type="text" name="nama" placeholder="Tulis nama Anda" required class="w-full p-2.5 rounded-lg border border-w-green/20 font-sans text-xs focus:outline-none focus:border-w-green bg-w-bg">
                        </div>
                        <div>
                            <label class="block font-sans text-[10px] font-semibold mb-1 text-w-green">Konfirmasi Kehadiran</label>
                            <select name="kehadiran" required class="w-full p-2.5 rounded-lg border border-w-green/20 font-sans text-xs focus:outline-none focus:border-w-green bg-w-bg">
                                <option value="hadir">Hadir</option>
                                <option value="tidak_hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-sans text-[10px] font-semibold mb-1 text-w-green">Pesan / Doa Restu</label>
                            <textarea name="pesan" rows="3" placeholder="Tuliskan doa untuk mempelai..." class="w-full p-2.5 rounded-lg border border-w-green/20 font-sans text-xs focus:outline-none focus:border-w-green bg-w-bg"></textarea>
                        </div>
                        <button type="submit" class="inline-block bg-w-green text-white font-sans px-8 py-3 rounded-full text-[10px] font-bold tracking-widest hover:opacity-90 transition shadow-md w-full mt-2">
                            KIRIM KONFIRMASI
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-white text-center">
            <div class="animate-on-scroll max-w-md w-full">
                <h2 class="font-script text-5xl md:text-6xl mb-4 text-w-green">Tanda Kasih</h2>
                <p class="font-sans text-[11px] mb-8 text-gray-700 leading-relaxed font-serif">Doa restu Anda adalah karunia terindah bagi kami. Namun jika memberi adalah wujud kasih sayang Anda, Anda dapat mengirimkannya melalui:</p>
                
                <button id="btn-show-gift" class="bg-w-green text-white font-sans px-8 py-4 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105 tracking-widest text-[10px] font-bold w-full">
                    BUKA TANDA KASIH
                </button>

                <div id="gift-area" class="hidden mt-6 w-full space-y-4 max-h-[40vh] overflow-y-auto px-1 no-scrollbar pb-6">
                    <div class="border border-w-green/20 p-5 rounded-2xl bg-w-bg text-left shadow-sm">
                        <p class="font-sans font-semibold text-[10px] text-w-green tracking-widest mb-2">BANK TRANSFER</p>
                        <div class="flex items-center justify-between mb-1">
                            <p class="font-sans font-bold tracking-wider text-lg" id="rek-bca">4390508994</p>
                            <button onclick="copyRek('4390508994')" class="text-[9px] bg-white border border-w-green/20 px-3 py-1 rounded font-semibold text-w-green shadow-sm hover:bg-gray-50">COPY</button>
                        </div>
                        <p class="font-sans text-[10px] font-semibold text-gray-700">BANK BCA</p>
                        <p class="font-sans text-[9px] text-gray-500">A.N : Arkhab Maulana</p>
                    </div>

                    <div class="border border-w-green/20 p-5 rounded-2xl bg-w-bg text-left shadow-sm">
                        <p class="font-sans font-semibold text-[10px] text-w-green tracking-widest mb-2">ALAMAT KIRIM KADO</p>
                        <p id="alamat-kado" class="font-sans text-[10px] text-gray-700 leading-relaxed mb-3">Jl. Sulfat Agung V/18 RT.6 RW.21, Purwantoro, Kec. Blimbing, Kota Malang 65122</p>
                        <button onclick="copyRek(document.getElementById('alamat-kado').innerText)" class="w-full text-[9px] bg-white border border-w-green/20 px-3 py-2 rounded font-semibold text-w-green shadow-sm hover:bg-gray-50 tracking-widest">COPY ALAMAT</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="min-h-[100dvh] w-full snap-start flex flex-col items-center justify-center p-6 bg-w-green text-w-text-light text-center clover-bg">
            <div class="animate-on-scroll max-w-xl mx-auto">
                <h2 class="font-script text-5xl md:text-6xl mb-6 text-w-bg drop-shadow-md">Terima Kasih</h2>
                <p class="font-sans text-[11px] leading-relaxed opacity-90 mb-16 font-serif px-4">
                    Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kami. <br> <br> Sampai jumpa di hari bahagia kami.
                </p>
                
                <p class="font-sans text-[10px] opacity-70 mb-1 tracking-widest">With Love,</p>
                <h2 class="font-script text-6xl text-w-bg">Thea & Alan</h2>
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
            let wasPlayingBeforeHide = false; // Melacak status musik sebelum ganti tab

            // Logika Nama Tamu dari URL Parameter (?to=Nama+Tamu)
            const urlParams = new URLSearchParams(window.location.search);
            let guestName = urlParams.get('to');
            const guestNameEl = document.getElementById('guest-name');

            if (guestName && guestName.trim() !== '') {
                guestNameEl.textContent = guestName.replace(/\+/g, ' '); 
            } else {
                guestNameEl.textContent = "Tamu Spesial";
            }

            // Aksi Buka Undangan
            btnOpen.addEventListener('click', () => {
                
                // Play audio lokal
                bgMusic.play().then(() => {
                    isPlaying = true;
                    wasPlayingBeforeHide = true;
                    btnMusic.classList.remove('hidden');
                    btnMusic.classList.add('spin-slow');
                }).catch(err => {
                    console.log("Audio diblokir oleh browser:", err);
                    btnMusic.classList.remove('hidden');
                });

                // Transisi Cover Naik
                coverPage.classList.add('slide-up');
                
                // Munculkan Main Content (Slide Snap Container)
                setTimeout(() => {
                    coverPage.classList.add('hidden');
                    mainContent.classList.remove('hidden');
                    body.classList.remove('overflow-hidden');
                    
                    // Trigger animasi Intersection Observer
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

            // Kontrol Play/Pause Musik Melayang
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

            // Auto Mute/Unmute saat ganti Tab Browser (Page Visibility API)
            document.addEventListener('visibilitychange', () => {
                if (mainContent.classList.contains('hidden')) return;

                if (document.hidden) {
                    // Tab ditinggalkan -> pause
                    wasPlayingBeforeHide = isPlaying; 
                    if (isPlaying) {
                        bgMusic.pause();
                        btnMusic.classList.remove('spin-slow');
                        // isPlaying tetap true secara konseptual karena disengaja oleh sistem
                    }
                } else {
                    // Kembali ke tab -> resume JIKA sebelumnya nyala
                    if (wasPlayingBeforeHide) {
                        bgMusic.play().then(() => {
                            btnMusic.classList.add('spin-slow');
                            isPlaying = true;
                        }).catch(err => console.log(err));
                    }
                }
            });

            // Buka/Tutup Tanda Kasih
            const btnShowGift = document.getElementById('btn-show-gift');
            const giftArea = document.getElementById('gift-area');
            btnShowGift.addEventListener('click', () => {
                giftArea.classList.toggle('hidden');
                btnShowGift.textContent = giftArea.classList.contains('hidden') ? 'BUKA TANDA KASIH' : 'TUTUP TANDA KASIH';
            });

            // Countdown Timer (30 Mei 2026 08:00)
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

        // Fungsi Copy ke Clipboard
        function copyRek(text) {
            navigator.clipboard.writeText(text).then(() => alert("Berhasil disalin: " + text));
        }
    </script>
</body>
</html>