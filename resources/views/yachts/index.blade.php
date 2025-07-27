<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YachtLux - Premium Yacht Booking</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-inter overflow-x-hidden transition-all duration-300 min-h-screen" id="body">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full px-8 py-4 backdrop-blur-xl border-b z-50 transition-all duration-300" id="navbar">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <a href="{{ route('yachts.index') }}" class="font-playfair text-3xl font-bold bg-gradient-to-r from-teal-400 to-amber-400 bg-clip-text text-transparent">
                YachtLux
            </a>
            <div class="flex items-center gap-8">
                <ul class="hidden lg:flex gap-10">
                    <li><a href="#home" class="font-medium hover:text-teal-400 transition-colors relative after:absolute after:w-0 after:h-0.5 after:bottom-[-5px] after:left-0 after:bg-gradient-to-r after:from-teal-400 after:to-amber-400 after:transition-all after:duration-300 hover:after:w-full">Početna</a></li>
                    <li><a href="#yachts" class="font-medium hover:text-teal-400 transition-colors relative after:absolute after:w-0 after:h-0.5 after:bottom-[-5px] after:left-0 after:bg-gradient-to-r after:from-teal-400 after:to-amber-400 after:transition-all after:duration-300 hover:after:w-full">Jahte</a></li>
                    <li><a href="#destinations" class="font-medium hover:text-teal-400 transition-colors relative after:absolute after:w-0 after:h-0.5 after:bottom-[-5px] after:left-0 after:bg-gradient-to-r after:from-teal-400 after:to-amber-400 after:transition-all after:duration-300 hover:after:w-full">Destinacije</a></li>
                    <li><a href="#about" class="font-medium hover:text-teal-400 transition-colors relative after:absolute after:w-0 after:h-0.5 after:bottom-[-5px] after:left-0 after:bg-gradient-to-r after:from-teal-400 after:to-amber-400 after:transition-all after:duration-300 hover:after:w-full">O nama</a></li>
                    <li><a href="#contact" class="font-medium hover:text-teal-400 transition-colors relative after:absolute after:w-0 after:h-0.5 after:bottom-[-5px] after:left-0 after:bg-gradient-to-r after:from-teal-400 after:to-amber-400 after:transition-all after:duration-300 hover:after:w-full">Kontakt</a></li>
                </ul>
                
                <!-- Dark/Light Mode Toggle -->
                <button id="themeToggle" class="p-2 rounded-lg border transition-all duration-300 hover:scale-110">
                    <svg id="sunIcon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg id="moonIcon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center text-center relative overflow-hidden" id="home">
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-[-50%] left-[-50%] w-[200%] h-[200%] bg-gradient-radial from-teal-400/10 via-transparent to-transparent animate-spin-slow"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-8">
            <h1 class="font-playfair text-5xl lg:text-7xl font-bold mb-6 leading-tight" id="heroTitle">
                Otkrijte luksuz na moru
            </h1>
            <p class="text-xl lg:text-2xl mb-12 opacity-90 font-light">
                Rezervirajte svoju savršenu jahtu i doživite nezaboravno putovanje kroz najljepše destinacije Mediterana
            </p>
            <a href="#yachts" class="inline-block px-10 py-4 bg-gradient-to-r from-teal-400 to-amber-400 text-white rounded-full font-bold text-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-teal-400/30">
                Istražite jahte
            </a>
        </div>
    </section>

    <!-- Main Content -->
    <section class="flex max-w-7xl mx-auto px-8 py-8 gap-8 min-h-screen" id="yachts">
        <!-- Filters Sidebar -->
        <div class="w-80 backdrop-blur-xl rounded-3xl p-8 h-fit sticky top-32 border shadow-2xl" id="filtersSidebar">
            <h3 class="font-playfair text-2xl mb-8 text-center">Filteri</h3>
            
            <form method="GET" action="{{ route('yachts.index') }}" class="space-y-8">
                <div>
                    <label for="destination" class="block text-sm font-semibold mb-3">Destinacija</label>
                    <input type="text" id="destination" name="destination" value="{{ request('destination') }}" 
                           class="w-full px-5 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-400/20 transition-all theme-input"
                           placeholder="Split, Dubrovnik, Hvar...">
                </div>

                <div>
                    <label for="checkin" class="block text-sm font-semibold mb-3">Datum početka</label>
                    <input type="date" id="checkin" name="checkin" value="{{ request('checkin') }}"
                           class="w-full px-5 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-400/20 transition-all theme-input">
                </div>

                <div>
                    <label for="checkout" class="block text-sm font-semibold mb-3">Datum kraja</label>
                    <input type="date" id="checkout" name="checkout" value="{{ request('checkout') }}"
                           class="w-full px-5 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-400/20 transition-all theme-input">
                </div>

                <div>
                    <label for="guests" class="block text-sm font-semibold mb-3">Broj gostiju</label>
                    <select id="guests" name="guests" class="w-full px-5 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-400/20 transition-all theme-input">
                        <option value="">Odaberite broj</option>
                        <option value="2" {{ request('guests') == '2' ? 'selected' : '' }}>2 gosta</option>
                        <option value="4" {{ request('guests') == '4' ? 'selected' : '' }}>4 gosta</option>
                        <option value="6" {{ request('guests') == '6' ? 'selected' : '' }}>6 gostiju</option>
                        <option value="8" {{ request('guests') == '8' ? 'selected' : '' }}>8 gostiju</option>
                        <option value="12" {{ request('guests') == '12' ? 'selected' : '' }}>12+ gostiju</option>
                    </select>
                </div>

                <!-- Price Range Slider -->
                <div>
                    <label class="block text-sm font-semibold mb-3">Cijena po danu</label>
                    <div class="space-y-4">
                        <div class="relative">
                            <input type="range" id="priceRange" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer slider" 
                                   min="500" max="2000" step="50" value="1250">
                            <div class="flex justify-between text-xs opacity-60 mt-1">
                                <span>€500</span>
                                <span>€2000</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <span class="text-lg font-bold text-teal-400" id="priceDisplay">Do €1,250</span>
                        </div>
                        <input type="hidden" name="price_max" id="priceMaxInput" value="">
                    </div>
                </div>

                <div>
                    <label for="length" class="block text-sm font-semibold mb-3">Duljina jahte</label>
                    <select id="length" name="length" class="w-full px-5 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-teal-400/20 transition-all theme-input">
                        <option value="">Sve duljine</option>
                        <option value="small" {{ request('length') == 'small' ? 'selected' : '' }}>Do 15m</option>
                        <option value="medium" {{ request('length') == 'medium' ? 'selected' : '' }}>15-20m</option>
                        <option value="large" {{ request('length') == 'large' ? 'selected' : '' }}>20m+</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-3">Dodatne opcije</label>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <input type="checkbox" id="skipper" name="skipper" value="1" {{ request('skipper') ? 'checked' : '' }}
                                   class="w-4 h-4 text-teal-400 rounded focus:ring-teal-400 focus:ring-2 theme-checkbox">
                            <label for="skipper" class="text-sm cursor-pointer">Sa skipperom</label>
                        </div>
                        <div class="flex items-center gap-3">
                            <input type="checkbox" id="crew" name="crew" value="1" {{ request('crew') ? 'checked' : '' }}
                                   class="w-4 h-4 text-teal-400 rounded focus:ring-teal-400 focus:ring-2 theme-checkbox">
                            <label for="crew" class="text-sm cursor-pointer">Sa posadom</label>
                        </div>
                        <div class="flex items-center gap-3">
                            <input type="checkbox" id="catering" name="catering" value="1" {{ request('catering') ? 'checked' : '' }}
                                   class="w-4 h-4 text-teal-400 rounded focus:ring-teal-400 focus:ring-2 theme-checkbox">
                            <label for="catering" class="text-sm cursor-pointer">Catering usluga</label>
                        </div>
                        <div class="flex items-center gap-3">
                            <input type="checkbox" id="watersports" name="watersports" value="1" {{ request('watersports') ? 'checked' : '' }}
                                   class="w-4 h-4 text-teal-400 rounded focus:ring-teal-400 focus:ring-2 theme-checkbox">
                            <label for="watersports" class="text-sm cursor-pointer">Vodeni sportovi</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full px-4 py-4 bg-gradient-to-r from-teal-400 to-amber-400 text-white rounded-xl font-bold transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-teal-400/30">
                    Primijeni filtere
                </button>
            </form>
        </div>

        <!-- Yachts Container -->
        <div class="flex-1 pl-4">
            <div class="flex justify-between items-center mb-8 px-8 py-6 backdrop-blur-sm rounded-2xl border" id="yachtsHeader">
                <span class="text-lg">Pronađeno {{ count($yachts) }} jahti</span>
                <form method="GET" action="{{ route('yachts.index') }}" class="inline-block">
                    @foreach(request()->except('sort') as $key => $value)
                        @if(is_array($value))
                            @foreach($value as $item)
                                <input type="hidden" name="{{ $key }}[]" value="{{ $item }}">
                            @endforeach
                        @else
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endif
                    @endforeach
                    <select name="sort" onchange="this.form.submit()" class="px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-teal-400 theme-input">
                        <option value="price-low" {{ request('sort') == 'price-low' ? 'selected' : '' }}>Cijena: najniža</option>
                        <option value="price-high" {{ request('sort') == 'price-high' ? 'selected' : '' }}>Cijena: najviša</option>
                        <option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Ocjena</option>
                        <option value="size" {{ request('sort') == 'size' ? 'selected' : '' }}>Veličina</option>
                    </select>
                </form>
            </div>

            <div class="space-y-6">
                @forelse($yachts as $yacht)
                    <div class="backdrop-blur-xl rounded-3xl overflow-hidden border transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl cursor-pointer flex h-48 yacht-card">
                        <div class="w-72 bg-gradient-to-br from-teal-400 to-slate-700 relative overflow-hidden">
                            @if($yacht->image_url)
                                <img src="{{ $yacht->image_url }}" alt="{{ $yacht->name }}" class="w-full h-full object-cover">
                            @else
                                <div class="flex items-center justify-center h-full text-6xl opacity-40">🛥️</div>
                            @endif
                        </div>
                        
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="font-playfair text-2xl mb-1">{{ $yacht->name }}</h3>
                                    <p class="text-teal-400 font-medium text-sm">📍 {{ $yacht->location }}</p>
                                </div>
                                <div class="flex items-center gap-1 text-amber-400 text-sm">
                                    ⭐ {{ $yacht->rating }} ({{ $yacht->reviews_count }})
                                </div>
                            </div>
                            
                            <div class="flex gap-4 mb-4 flex-wrap">
                                <span class="bg-teal-400/10 border border-teal-400/30 px-3 py-1 rounded-full text-xs text-teal-400 font-medium">{{ $yacht->length }}m</span>
                                <span class="bg-teal-400/10 border border-teal-400/30 px-3 py-1 rounded-full text-xs text-teal-400 font-medium">{{ $yacht->max_guests }} gostiju</span>
                                <span class="bg-teal-400/10 border border-teal-400/30 px-3 py-1 rounded-full text-xs text-teal-400 font-medium">{{ $yacht->cabins }} kabina</span>
                                @foreach($yacht->features as $feature)
                                    <span class="bg-teal-400/10 border border-teal-400/30 px-3 py-1 rounded-full text-xs text-teal-400 font-medium">{{ $feature }}</span>
                                @endforeach
                            </div>
                            
                            <div class="flex justify-between items-center">
                                <div class="flex flex-col">
                                    <span class="text-2xl font-bold yacht-price">{{ $yacht->formatted_price }}</span>
                                    <span class="text-xs opacity-60">po danu</span>
                                </div>
                                <form method="POST" action="{{ route('yachts.book', $yacht) }}" class="inline-block">
                                    @csrf
                                    <button type="submit" class="px-7 py-3 bg-gradient-to-r from-teal-400 to-amber-400 text-white rounded-full font-bold transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-teal-400/40 text-sm">
                                        Rezerviraj
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-16">
                        <div class="text-6xl mb-4 opacity-40">🛥️</div>
                        <h3 class="text-xl mb-2">Nema rezultata</h3>
                        <p class="opacity-60">Pokušajte s drugačijim filterima</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <script>
        // Theme Toggle Functionality
        const themeToggle = document.getElementById('themeToggle');
        const body = document.getElementById('body');
        const sunIcon = document.getElementById('sunIcon');
        const moonIcon = document.getElementById('moonIcon');
        const heroTitle = document.getElementById('heroTitle');

        // Check for saved theme preference or default to 'dark'
        const currentTheme = localStorage.getItem('theme') || 'dark';
        
        // Apply initial theme
        function applyTheme(theme) {
            if (theme === 'dark') {
                // Dark mode styles
                body.className = 'font-inter overflow-x-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen text-slate-100 transition-all duration-300';
                heroTitle.className = 'font-playfair text-5xl lg:text-7xl font-bold mb-6 leading-tight bg-gradient-to-r from-slate-100 to-teal-400 bg-clip-text text-transparent';
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
                updateDarkModeStyles();
            } else {
                // Light mode styles
                body.className = 'font-inter overflow-x-hidden bg-gradient-to-br from-gray-50 via-white to-gray-50 min-h-screen text-gray-900 transition-all duration-300';
                heroTitle.className = 'font-playfair text-5xl lg:text-7xl font-bold mb-6 leading-tight bg-gradient-to-r from-gray-800 to-teal-500 bg-clip-text text-transparent';
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
                updateLightModeStyles();
            }
        }

        function updateDarkModeStyles() {
            const navbar = document.getElementById('navbar');
            const filtersSidebar = document.getElementById('filtersSidebar');
            const yachtsHeader = document.getElementById('yachtsHeader');
            const themeInputs = document.querySelectorAll('.theme-input');
            const themeCheckboxes = document.querySelectorAll('.theme-checkbox');
            const yachtCards = document.querySelectorAll('.yacht-card');
            const yachtPrices = document.querySelectorAll('.yacht-price');

            // Navbar
            navbar.className = 'fixed top-0 w-full px-8 py-4 bg-slate-900/95 backdrop-blur-xl border-b border-teal-400/20 z-50 transition-all duration-300 text-slate-300';
            
            // Filters sidebar
            filtersSidebar.className = 'w-80 bg-slate-800/80 backdrop-blur-xl rounded-3xl p-8 h-fit sticky top-32 border border-teal-400/20 shadow-2xl shadow-black/30';
            
            // Yachts header
            yachtsHeader.className = 'flex justify-between items-center mb-8 px-8 py-6 bg-slate-800/60 backdrop-blur-sm rounded-2xl border border-teal-400/20 text-slate-300';
            
            // Form inputs
            themeInputs.forEach(input => {
                input.className = input.className.replace(/bg-\S+|border-\S+|text-\S+|placeholder-\S+/g, '') + ' bg-slate-900/80 border-teal-400/30 text-slate-100 placeholder-slate-500';
            });

            // Checkboxes
            themeCheckboxes.forEach(checkbox => {
                checkbox.className = checkbox.className.replace(/bg-\S+|border-\S+/g, '') + ' bg-slate-900 border-teal-400/30';
            });

            // Yacht cards
            yachtCards.forEach(card => {
                card.className = card.className.replace(/bg-\S+|border-\S+|shadow-\S+/g, '') + ' bg-slate-800/80 border-teal-400/20 hover:border-teal-400/40 hover:shadow-black/40';
            });

            // Yacht prices
            yachtPrices.forEach(price => {
                price.className = price.className.replace(/text-\S+/g, '') + ' text-slate-100';
            });
        }

        function updateLightModeStyles() {
            const navbar = document.getElementById('navbar');
            const filtersSidebar = document.getElementById('filtersSidebar');
            const yachtsHeader = document.getElementById('yachtsHeader');
            const themeInputs = document.querySelectorAll('.theme-input');
            const themeCheckboxes = document.querySelectorAll('.theme-checkbox');
            const yachtCards = document.querySelectorAll('.yacht-card');
            const yachtPrices = document.querySelectorAll('.yacht-price');

            // Navbar
            navbar.className = 'fixed top-0 w-full px-8 py-4 bg-white/95 backdrop-blur-xl border-b border-gray-200 z-50 transition-all duration-300 text-gray-700';
            
            // Filters sidebar
            filtersSidebar.className = 'w-80 bg-white/80 backdrop-blur-xl rounded-3xl p-8 h-fit sticky top-32 border border-gray-200 shadow-2xl';
            
            // Yachts header
            yachtsHeader.className = 'flex justify-between items-center mb-8 px-8 py-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-gray-200';
            
            // Form inputs
            themeInputs.forEach(input => {
                input.className = input.className.replace(/bg-\S+|border-\S+|text-\S+|placeholder-\S+/g, '') + ' bg-white border-gray-300 text-gray-900 placeholder-gray-500';
            });

            // Checkboxes
            themeCheckboxes.forEach(checkbox => {
                checkbox.className = checkbox.className.replace(/bg-\S+|border-\S+/g, '') + ' bg-white border-gray-300';
            });

            // Yacht cards
            yachtCards.forEach(card => {
                card.className = card.className.replace(/bg-\S+|border-\S+|shadow-\S+/g, '') + ' bg-white/80 border-gray-200 hover:border-gray-300 hover:shadow-gray-200';
            });

            // Yacht prices
            yachtPrices.forEach(price => {
                price.className = price.className.replace(/text-\S+/g, '') + ' text-gray-900';
            });
        }

        // Apply initial theme
        applyTheme(currentTheme);

        // Theme toggle event
        themeToggle.addEventListener('click', () => {
            const newTheme = body.classList.contains('text-slate-100') ? 'light' : 'dark';
            localStorage.setItem('theme', newTheme);
            applyTheme(newTheme);
        });

        // Price Range Slider
        const priceRange = document.getElementById('priceRange');
        const priceDisplay = document.getElementById('priceDisplay');
        const priceMaxInput = document.getElementById('priceMaxInput');

        function updatePriceDisplay() {
            const value = parseInt(priceRange.value);
            priceDisplay.textContent = `Do €${value.toLocaleString()}`;
            priceMaxInput.value = value;
        }

        priceRange.addEventListener('input', updatePriceDisplay);
        updatePriceDisplay();

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('py-2');
                navbar.classList.remove('py-4');
            } else {
                navbar.classList.remove('py-2');
                navbar.classList.add('py-4');
            }
        });

        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('checkin').min = today;
        document.getElementById('checkout').min = today;

        // Update checkout min date when checkin changes
        document.getElementById('checkin').addEventListener('change', (e) => {
            document.getElementById('checkout').min = e.target.value;
        });

        // Smooth scrolling for CTA button
        document.querySelector('a[href="#yachts"]').addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('yachts').scrollIntoView({
                behavior: 'smooth'
            });
        });

        @if(session('success'))
            alert('{{ session('success') }}');
        @endif
    </script>

    <style>
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        
        .font-inter {
            font-family: 'Inter', sans-serif;
        }
        
        .animate-spin-slow {
            animation: spin 20s linear infinite;
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .bg-gradient-radial {
            background: radial-gradient(circle, rgba(45, 212, 191, 0.1) 0%, transparent 50%);
        }

        /* Custom Range Slider Styles */
        .slider {
            -webkit-appearance: none;
            appearance: none;
            background: transparent;
            cursor: pointer;
        }

        .slider::-webkit-slider-track {
            background: #e2e8f0;
            height: 8px;
            border-radius: 4px;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            background: linear-gradient(135deg, #14b8a6, #f59e0b);
            height: 20px;
            width: 20px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .slider::-moz-range-track {
            background: #e2e8f0;
            height: 8px;
            border-radius: 4px;
            border: none;
        }

        .slider::-moz-range-thumb {
            background: linear-gradient(135deg, #14b8a6, #f59e0b);
            height: 20px;
            width: 20px;
            border-radius: 50%;
            cursor: pointer;
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        /* Dark mode slider styles */
        body.text-slate-100 .slider::-webkit-slider-track {
            background: #475569;
        }

        body.text-slate-100 .slider::-moz-range-track {
            background: #475569;
        }
    </style>
</body>
</html>