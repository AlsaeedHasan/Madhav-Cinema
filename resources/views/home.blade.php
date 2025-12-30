<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Madhav Cinema - Premium Investment Platform</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'playfair': ['Playfair Display', 'serif'],
                    },
                    colors: {
                        'dark': {
                            900: '#0a0a0f',
                            800: '#12121a',
                            700: '#1a1a25',
                            600: '#252532',
                        },
                        'gold': {
                            400: '#fcd34d',
                            500: '#f59e0b',
                            600: '#d97706',
                        },
                        'neon': {
                            purple: '#a855f7',
                            blue: '#3b82f6',
                            cyan: '#06b6d4',
                            pink: '#ec4899',
                        }
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                        'marquee-slow': 'marquee 40s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: '1', boxShadow: '0 0 20px rgba(168, 85, 247, 0.4)' },
                            '50%': { opacity: '0.8', boxShadow: '0 0 40px rgba(168, 85, 247, 0.6)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        * {
            -webkit-tap-highlight-color: transparent;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0f;
            overflow-x: hidden;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #12121a;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #a855f7, #3b82f6);
            border-radius: 3px;
        }
        
        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-strong {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        /* Gold Gradient Text */
        .text-gold-gradient {
            background: linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Purple Gradient Text */
        .text-purple-gradient {
            background: linear-gradient(135deg, #a855f7 0%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Shimmer Effect */
        .shimmer {
            background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.1) 50%, transparent 100%);
            background-size: 200% 100%;
            animation: shimmer 2s linear infinite;
        }
        
        /* Glow Effects */
        .glow-purple {
            box-shadow: 0 0 30px rgba(168, 85, 247, 0.3), 0 0 60px rgba(168, 85, 247, 0.1);
        }
        
        .glow-gold {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.3), 0 0 60px rgba(245, 158, 11, 0.1);
        }
        
        .glow-blue {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.3), 0 0 60px rgba(59, 130, 246, 0.1);
        }
        
        /* Hero Background */
        .hero-bg {
            background: 
                radial-gradient(ellipse at 20% 20%, rgba(168, 85, 247, 0.15) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 80%, rgba(59, 130, 246, 0.15) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 50%, rgba(236, 72, 153, 0.1) 0%, transparent 50%),
                linear-gradient(180deg, #0a0a0f 0%, #12121a 100%);
        }
        
        /* Animated Background Orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.5;
            animation: float 8s ease-in-out infinite;
        }
        
        /* Card Hover Effects */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .card-hover:hover {
            transform: translateY(-5px) scale(1.02);
        }
        
        /* Icon Button Gradient Backgrounds */
        .icon-gradient-1 { background: linear-gradient(135deg, #ec4899 0%, #a855f7 100%); }
        .icon-gradient-2 { background: linear-gradient(135deg, #06b6d4 0%, #3b82f6 100%); }
        .icon-gradient-3 { background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%); }
        .icon-gradient-4 { background: linear-gradient(135deg, #f59e0b 0%, #ef4444 100%); }
        .icon-gradient-5 { background: linear-gradient(135deg, #8b5cf6 0%, #ec4899 100%); }
        .icon-gradient-6 { background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%); }
        
        /* Bottom Nav Active Glow */
        .nav-active {
            color: #a855f7;
            text-shadow: 0 0 20px rgba(168, 85, 247, 0.8);
        }
        .nav-active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 3px;
            background: linear-gradient(90deg, #a855f7, #ec4899);
            border-radius: 2px;
            box-shadow: 0 0 10px rgba(168, 85, 247, 0.8);
        }
        
        /* Movie Poster Cards */
        .movie-card {
            position: relative;
            overflow: hidden;
        }
        .movie-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 40%, rgba(0,0,0,0.9) 100%);
            z-index: 1;
        }
        
        /* VIP Badge */
        .vip-badge {
            background: linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #d97706 100%);
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
        }
        
        /* Marquee Container */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
        }
        
        /* Swiper Custom */
        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.3) !important;
        }
        .swiper-pagination-bullet-active {
            background: linear-gradient(90deg, #a855f7, #ec4899) !important;
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-24" x-data="{ activeTab: 'home', currentSlide: 0 }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-purple-600/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-blue-600/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-pink-600/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10">
        
        <!-- Header -->
        <header class="relative">
            <!-- Top Bar -->
            <div class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold-400 via-gold-500 to-gold-600 flex items-center justify-center glow-gold">
                        <i class="fas fa-film text-dark-900 text-lg"></i>
                    </div>
                    <h1 class="text-2xl font-playfair font-bold text-gold-gradient tracking-wider">MADHAV CINEMA</h1>
                </div>
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <button class="p-2 text-gray-400 hover:text-white transition-colors">
                        <i class="fas fa-headset text-xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Hero Section -->
            <div class="relative hero-bg pt-6 pb-8 px-5">
                <!-- Decorative Elements -->
                <div class="absolute top-10 right-10 w-20 h-20 opacity-20">
                    <i class="fas fa-star text-gold-400 text-5xl animate-pulse"></i>
                </div>
                
                <!-- Welcome Card -->
                <div class="glass rounded-3xl p-6 mb-6 relative overflow-hidden">
                    <div class="absolute inset-0 shimmer"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-gray-400 text-sm mb-1">Welcome Back</p>
                                <h2 class="text-2xl font-bold">Investor</h2>
                            </div>
                            <div class="vip-badge px-4 py-1.5 rounded-full text-dark-900 font-bold text-sm">
                                VIP 3
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-gray-400 text-xs mb-1">Total Balance</p>
                                <p class="text-3xl font-bold text-gold-gradient">$12,458.50</p>
                            </div>
                            <div class="text-right">
                                <p class="text-gray-400 text-xs mb-1">Today's Profit</p>
                                <p class="text-xl font-semibold text-green-400">+$245.80</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Marquee Ticker -->
                <div class="glass rounded-2xl py-3 px-4 overflow-hidden" x-data="{ }">
                    <div class="marquee-container flex items-center gap-2">
                        <i class="fas fa-bullhorn text-gold-400 flex-shrink-0"></i>
                        <div class="animate-marquee flex gap-16 whitespace-nowrap">
                            <span class="text-gray-300">🎬 Welcome back to Wealthreel - Your Premium Investment Partner</span>
                            <span class="text-gold-400">⭐ Exclusive VIP rewards unlocked! Claim your bonus now</span>
                            <span class="text-gray-300">🚀 New movie investments available with up to 15% daily returns</span>
                            <span class="text-purple-400">💎 Diamond members get 2x rewards this week</span>
                            <span class="text-gray-300">🎬 Welcome back to Wealthreel - Your Premium Investment Partner</span>
                            <span class="text-gold-400">⭐ Exclusive VIP rewards unlocked! Claim your bonus now</span>
                            <span class="text-gray-300">🚀 New movie investments available with up to 15% daily returns</span>
                            <span class="text-purple-400">💎 Diamond members get 2x rewards this week</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Action Grid -->
        <section class="px-5 py-6">
            <div class="grid grid-cols-4 gap-4">
                <!-- Invite Friends -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl icon-gradient-1 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-user-plus text-white text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">Invite</span>
                    </div>
                </a>
                
                <!-- Recharge/Deposit -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl icon-gradient-2 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-wallet text-white text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">Deposit</span>
                    </div>
                </a>
                
                <!-- Withdraw -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl icon-gradient-3 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-money-bill-wave text-white text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">Withdraw</span>
                    </div>
                </a>
                
                <!-- Wealth Box -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl icon-gradient-4 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-treasure-chest text-white text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">Wealth Box</span>
                    </div>
                </a>
                
                <!-- Lucky Draw -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl icon-gradient-5 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-dharmachakra text-white text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">Lucky Draw</span>
                    </div>
                </a>
                
                <!-- News Center -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl icon-gradient-6 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-newspaper text-white text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">News</span>
                    </div>
                </a>
                
                <!-- VIP Center -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 glow-gold">
                            <i class="fas fa-crown text-dark-900 text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">VIP</span>
                    </div>
                </a>
                
                <!-- Records -->
                <a href="#" class="card-hover group">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-slate-600 to-slate-700 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-clock-rotate-left text-white text-xl"></i>
                        </div>
                        <span class="text-xs text-gray-300 text-center font-medium">Records</span>
                    </div>
                </a>
            </div>
        </section>
        
        <!-- News/About Slider -->
        <section class="px-5 py-4" x-data="{ currentSlide: 0, totalSlides: 3 }">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold flex items-center gap-2">
                    <i class="fas fa-sparkles text-purple-400"></i>
                    <span class="text-purple-gradient">About Us</span>
                </h3>
                <a href="#" class="text-sm text-purple-400 hover:text-purple-300 transition-colors flex items-center gap-1">
                    More <i class="fas fa-chevron-right text-xs"></i>
                </a>
            </div>
            
            <div class="relative overflow-hidden rounded-3xl">
                <!-- Slides Container -->
                <div class="flex transition-transform duration-500 ease-out" 
                     :style="'transform: translateX(-' + (currentSlide * 100) + '%)'">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0">
                        <div class="glass-strong rounded-3xl p-6 relative overflow-hidden min-h-[180px]">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/20 to-transparent rounded-full blur-2xl"></div>
                            <div class="relative z-10">
                                <h4 class="text-xl font-bold mb-2 text-gold-gradient">Welcome to Wealthreel</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">
                                    The world's leading movie investment platform. Invest in blockbuster films and earn daily returns. Join millions of investors worldwide.
                                </p>
                                <div class="flex items-center gap-4 mt-4">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-users text-purple-400"></i>
                                        <span class="text-sm text-gray-300">2M+ Users</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-film text-gold-400"></i>
                                        <span class="text-sm text-gray-300">500+ Movies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0">
                        <div class="glass-strong rounded-3xl p-6 relative overflow-hidden min-h-[180px]">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/20 to-transparent rounded-full blur-2xl"></div>
                            <div class="relative z-10">
                                <h4 class="text-xl font-bold mb-2 text-purple-gradient">Why Choose Us?</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">
                                    Licensed and regulated platform with 24/7 customer support. Instant withdrawals and transparent profit tracking.
                                </p>
                                <div class="flex items-center gap-4 mt-4">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-shield-halved text-green-400"></i>
                                        <span class="text-sm text-gray-300">Secured</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-bolt text-yellow-400"></i>
                                        <span class="text-sm text-gray-300">Fast Payouts</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="w-full flex-shrink-0">
                        <div class="glass-strong rounded-3xl p-6 relative overflow-hidden min-h-[180px]">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-500/20 to-transparent rounded-full blur-2xl"></div>
                            <div class="relative z-10">
                                <h4 class="text-xl font-bold mb-2 text-gold-gradient">VIP Benefits</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">
                                    Unlock exclusive rewards, higher daily returns, and priority support. Level up your investment journey with VIP membership.
                                </p>
                                <div class="flex items-center gap-4 mt-4">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-crown text-gold-400"></i>
                                        <span class="text-sm text-gray-300">VIP Perks</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-gift text-pink-400"></i>
                                        <span class="text-sm text-gray-300">Bonuses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Dots Indicator -->
                <div class="flex justify-center gap-2 mt-4">
                    <template x-for="i in totalSlides">
                        <button @click="currentSlide = i - 1" 
                                :class="currentSlide === i - 1 ? 'w-6 bg-gradient-to-r from-purple-500 to-pink-500' : 'w-2 bg-gray-600'"
                                class="h-2 rounded-full transition-all duration-300"></button>
                    </template>
                </div>
            </div>
            
            <!-- Auto-slide -->
            <div x-init="setInterval(() => { currentSlide = (currentSlide + 1) % totalSlides }, 4000)"></div>
        </section>
        
        <!-- Task Hall -->
        <section class="px-5 py-4">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold flex items-center gap-2">
                    <i class="fas fa-clapperboard text-gold-400"></i>
                    <span>Task Hall</span>
                </h3>
                <a href="#" class="text-sm text-gold-400 hover:text-gold-300 transition-colors flex items-center gap-1 font-medium">
                    Show More <i class="fas fa-chevron-right text-xs"></i>
                </a>
            </div>
            
            <!-- Movie Cards Horizontal Scroll -->
            <div class="flex gap-4 overflow-x-auto pb-4 scrollbar-hide" style="-webkit-overflow-scrolling: touch;">
                <!-- Movie Card 1 -->
                <div class="flex-shrink-0 w-36">
                    <div class="movie-card rounded-2xl overflow-hidden relative aspect-[2/3] card-hover">
                        <img src="https://images.unsplash.com/photo-1536440136628-849c177e76a1?w=300&h=450&fit=crop" 
                             alt="Movie 1" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 p-3 z-10">
                            <p class="text-xs font-semibold mb-1 truncate">Galactic Empire</p>
                            <div class="flex items-center justify-between">
                                <span class="text-gold-400 text-xs font-bold">+12.5%</span>
                                <span class="text-[10px] text-gray-400">$500</span>
                            </div>
                        </div>
                        <div class="absolute top-2 right-2 z-10">
                            <span class="bg-red-500 text-[10px] px-2 py-0.5 rounded-full font-bold">HOT</span>
                        </div>
                    </div>
                </div>
                
                <!-- Movie Card 2 -->
                <div class="flex-shrink-0 w-36">
                    <div class="movie-card rounded-2xl overflow-hidden relative aspect-[2/3] card-hover">
                        <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?w=300&h=450&fit=crop" 
                             alt="Movie 2" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 p-3 z-10">
                            <p class="text-xs font-semibold mb-1 truncate">Night Runner</p>
                            <div class="flex items-center justify-between">
                                <span class="text-gold-400 text-xs font-bold">+10.8%</span>
                                <span class="text-[10px] text-gray-400">$300</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Movie Card 3 -->
                <div class="flex-shrink-0 w-36">
                    <div class="movie-card rounded-2xl overflow-hidden relative aspect-[2/3] card-hover">
                        <img src="https://images.unsplash.com/photo-1594909122845-11baa439b7bf?w=300&h=450&fit=crop" 
                             alt="Movie 3" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 p-3 z-10">
                            <p class="text-xs font-semibold mb-1 truncate">Ocean's Deep</p>
                            <div class="flex items-center justify-between">
                                <span class="text-gold-400 text-xs font-bold">+15.2%</span>
                                <span class="text-[10px] text-gray-400">$800</span>
                            </div>
                        </div>
                        <div class="absolute top-2 right-2 z-10">
                            <span class="bg-purple-500 text-[10px] px-2 py-0.5 rounded-full font-bold">NEW</span>
                        </div>
                    </div>
                </div>
                
                <!-- Movie Card 4 -->
                <div class="flex-shrink-0 w-36">
                    <div class="movie-card rounded-2xl overflow-hidden relative aspect-[2/3] card-hover">
                        <img src="https://images.unsplash.com/photo-1478720568477-152d9b164e26?w=300&h=450&fit=crop" 
                             alt="Movie 4" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 p-3 z-10">
                            <p class="text-xs font-semibold mb-1 truncate">City Lights</p>
                            <div class="flex items-center justify-between">
                                <span class="text-gold-400 text-xs font-bold">+8.5%</span>
                                <span class="text-[10px] text-gray-400">$200</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Movie Card 5 -->
                <div class="flex-shrink-0 w-36">
                    <div class="movie-card rounded-2xl overflow-hidden relative aspect-[2/3] card-hover">
                        <img src="https://images.unsplash.com/photo-1518676590629-3dcbd9c5a5c9?w=300&h=450&fit=crop" 
                             alt="Movie 5" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 p-3 z-10">
                            <p class="text-xs font-semibold mb-1 truncate">Thunder Force</p>
                            <div class="flex items-center justify-between">
                                <span class="text-gold-400 text-xs font-bold">+11.0%</span>
                                <span class="text-[10px] text-gray-400">$450</span>
                            </div>
                        </div>
                        <div class="absolute top-2 right-2 z-10">
                            <span class="bg-gold-500 text-dark-900 text-[10px] px-2 py-0.5 rounded-full font-bold">VIP</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Hot Investments / VIP Plans -->
        <section class="px-5 py-4 mb-8">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold flex items-center gap-2">
                    <i class="fas fa-fire text-orange-500"></i>
                    <span>Hot Investments</span>
                    <span class="bg-red-500/20 text-red-400 text-xs px-2 py-0.5 rounded-full animate-pulse">LIVE</span>
                </h3>
            </div>
            
            <div class="space-y-4">
                <!-- VIP Plan 1 -->
                <div class="glass-strong rounded-2xl p-4 card-hover relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-center gap-4 relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center flex-shrink-0 glow-purple">
                            <i class="fas fa-gem text-2xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-white">Starter Pack</h4>
                                <span class="bg-green-500/20 text-green-400 text-[10px] px-2 py-0.5 rounded-full">EASY</span>
                            </div>
                            <p class="text-gray-400 text-xs mb-2">Min. Investment: $100 • Duration: 7 Days</p>
                            <div class="flex items-center gap-4">
                                <div>
                                    <span class="text-green-400 font-bold">+5.5%</span>
                                    <span class="text-gray-500 text-xs">/day</span>
                                </div>
                                <div class="h-4 w-px bg-gray-700"></div>
                                <div class="flex items-center gap-1">
                                    <i class="fas fa-users text-gray-500 text-xs"></i>
                                    <span class="text-gray-400 text-xs">2.3K invested</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <button class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white text-sm font-semibold px-4 py-2 rounded-xl transition-all duration-300 shadow-lg shadow-purple-500/25">
                                Invest
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- VIP Plan 2 -->
                <div class="glass-strong rounded-2xl p-4 card-hover relative overflow-hidden group border border-gold-500/30">
                    <div class="absolute inset-0 bg-gradient-to-r from-gold-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute top-0 right-0">
                        <div class="vip-badge text-dark-900 text-[10px] font-bold px-3 py-1 rounded-bl-xl rounded-tr-2xl">
                            POPULAR
                        </div>
                    </div>
                    <div class="flex items-center gap-4 relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center flex-shrink-0 glow-gold">
                            <i class="fas fa-crown text-2xl text-dark-900"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-gold-gradient">Gold VIP</h4>
                                <span class="bg-gold-500/20 text-gold-400 text-[10px] px-2 py-0.5 rounded-full">BEST</span>
                            </div>
                            <p class="text-gray-400 text-xs mb-2">Min. Investment: $500 • Duration: 15 Days</p>
                            <div class="flex items-center gap-4">
                                <div>
                                    <span class="text-gold-400 font-bold">+12.5%</span>
                                    <span class="text-gray-500 text-xs">/day</span>
                                </div>
                                <div class="h-4 w-px bg-gray-700"></div>
                                <div class="flex items-center gap-1">
                                    <i class="fas fa-users text-gray-500 text-xs"></i>
                                    <span class="text-gray-400 text-xs">5.8K invested</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <button class="bg-gradient-to-r from-gold-400 to-gold-600 hover:from-gold-500 hover:to-gold-700 text-dark-900 text-sm font-bold px-4 py-2 rounded-xl transition-all duration-300 shadow-lg shadow-gold-500/25">
                                Invest
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- VIP Plan 3 -->
                <div class="glass-strong rounded-2xl p-4 card-hover relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="flex items-center gap-4 relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center flex-shrink-0 glow-blue">
                            <i class="fas fa-rocket text-2xl text-white"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-bold text-white">Diamond Elite</h4>
                                <span class="bg-blue-500/20 text-blue-400 text-[10px] px-2 py-0.5 rounded-full">PRO</span>
                            </div>
                            <p class="text-gray-400 text-xs mb-2">Min. Investment: $1000 • Duration: 30 Days</p>
                            <div class="flex items-center gap-4">
                                <div>
                                    <span class="text-blue-400 font-bold">+18.0%</span>
                                    <span class="text-gray-500 text-xs">/day</span>
                                </div>
                                <div class="h-4 w-px bg-gray-700"></div>
                                <div class="flex items-center gap-1">
                                    <i class="fas fa-users text-gray-500 text-xs"></i>
                                    <span class="text-gray-400 text-xs">1.2K invested</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex-shrink-0">
                            <button class="bg-gradient-to-r from-blue-500 to-cyan-500 hover:from-blue-600 hover:to-cyan-600 text-white text-sm font-semibold px-4 py-2 rounded-xl transition-all duration-300 shadow-lg shadow-blue-500/25">
                                Invest
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Quick Stats Section -->
        <section class="px-5 py-4 mb-24">
            <div class="glass rounded-2xl p-5">
                <h3 class="text-sm font-semibold text-gray-400 mb-4 uppercase tracking-wider">Platform Statistics</h3>
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center">
                        <p class="text-2xl font-bold text-gold-gradient">$2.5B</p>
                        <p class="text-xs text-gray-500 mt-1">Total Invested</p>
                    </div>
                    <div class="text-center border-x border-gray-800">
                        <p class="text-2xl font-bold text-purple-gradient">2.1M</p>
                        <p class="text-xs text-gray-500 mt-1">Active Users</p>
                    </div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-green-400">$890M</p>
                        <p class="text-xs text-gray-500 mt-1">Total Paid Out</p>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
    
    <!-- Bottom Navigation -->
    <nav class="fixed bottom-0 left-0 right-0 z-50 px-4 pb-4">
        <div class="glass-strong rounded-3xl py-3 px-2 max-w-lg mx-auto">
            <div class="flex items-center justify-around">
                <!-- Home -->
                <a href="{{ url('/') }}" 
                   class="nav-active relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-home text-xl"></i>
                    <span class="text-[10px] font-medium">Home</span>
                </a>
                
                <!-- Tasks -->
                <a href="{{ url('/tasks') }}" 
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-list-check text-xl"></i>
                    <span class="text-[10px] font-medium">Tasks</span>
                </a>
                
                <!-- Level (Center - Larger) -->
                <a href="{{ url('/level') }}" 
                   class="relative flex flex-col items-center gap-1 px-4 py-2 -mt-8">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 via-pink-500 to-gold-500 flex items-center justify-center shadow-lg animate-pulse-glow">
                        <i class="fas fa-layer-group text-2xl text-white"></i>
                    </div>
                    <span class="text-[10px] font-medium text-gray-500">Level</span>
                </a>
                
                <!-- Earnings -->
                <a href="{{ url('/earnings') }}" 
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-chart-line text-xl"></i>
                    <span class="text-[10px] font-medium">Earnings</span>
                </a>
                
                <!-- Me -->
                <a href="{{ url('/me') }}" 
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-user text-xl"></i>
                    <span class="text-[10px] font-medium">Me</span>
                </a>
            </div>
        </div>
    </nav>
    
    <!-- Hide scrollbar utility -->
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    
</body>
</html>
