<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Task Hall - Madhav Cinema</title>
    
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
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                        'spin-slow': 'spin 3s linear infinite',
                        'glow-pulse': 'glow-pulse 1.5s ease-in-out infinite',
                        'scale-in': 'scale-in 0.3s ease-out',
                        'slide-up': 'slide-up 0.4s ease-out',
                    },
                    keyframes: {
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
                        },
                        'glow-pulse': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(245, 158, 11, 0.6), 0 0 40px rgba(245, 158, 11, 0.4), 0 0 60px rgba(245, 158, 11, 0.2)' },
                            '50%': { boxShadow: '0 0 30px rgba(245, 158, 11, 0.8), 0 0 60px rgba(245, 158, 11, 0.5), 0 0 90px rgba(245, 158, 11, 0.3)' },
                        },
                        'scale-in': {
                            '0%': { transform: 'scale(0.9)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        'slide-up': {
                            '0%': { transform: 'translateY(100%)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
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
        
        .glass-dark {
            background: rgba(10, 10, 15, 0.95);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
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
        
        .glow-gold-intense {
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.6), 0 0 40px rgba(245, 158, 11, 0.4), 0 0 60px rgba(245, 158, 11, 0.2);
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
        
        /* Movie Poster Cards */
        .movie-card {
            position: relative;
            overflow: hidden;
        }
        .movie-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 30%, rgba(0,0,0,0.95) 100%);
            z-index: 1;
        }
        
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
        
        /* Circular Timer */
        .timer-ring {
            transform: rotate(-90deg);
        }
        
        .timer-ring-bg {
            stroke: rgba(255, 255, 255, 0.1);
        }
        
        .timer-ring-progress {
            stroke: url(#goldGradient);
            stroke-linecap: round;
            transition: stroke-dashoffset 1s linear;
        }
        
        /* Video Container */
        .video-container {
            background: linear-gradient(180deg, #0a0a0f 0%, #12121a 50%, #0a0a0f 100%);
        }
        
        /* Commission Badge */
        .commission-badge {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(6, 182, 212, 0.2) 100%);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }
        
        /* Task Status Badges */
        .status-available {
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.2) 0%, rgba(236, 72, 153, 0.2) 100%);
            border: 1px solid rgba(168, 85, 247, 0.3);
        }
        
        .status-completed {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(6, 182, 212, 0.2) 100%);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }
        
        /* Claim Button States */
        .btn-disabled {
            background: linear-gradient(135deg, #374151 0%, #1f2937 100%);
            cursor: not-allowed;
            opacity: 0.6;
        }
        
        .btn-claim-ready {
            background: linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #d97706 100%);
            animation: glow-pulse 1.5s ease-in-out infinite;
        }
        
        /* Video Fake Poster Animation */
        @keyframes poster-shine {
            0% { background-position: -100% 0; }
            100% { background-position: 200% 0; }
        }
        
        .poster-shine::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.1) 50%, transparent 100%);
            background-size: 200% 100%;
            animation: poster-shine 3s ease-in-out infinite;
        }
        
        /* Hide scrollbar for task grid */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-24" 
      x-data="{ 
          view: 'list', 
          activeTask: null, 
          timer: 0,
          maxTimer: 30,
          timerInterval: null,
          tasks: [
              { id: 1, title: 'Oppenheimer', poster: 'https://image.tmdb.org/t/p/w500/8Gxv8gSFCU0XGDykEGv7zR1n2ua.jpg', commission: 0.24, duration: 30, genre: 'Drama', rating: 8.4, completed: false },
              { id: 2, title: 'Dune: Part Two', poster: 'https://image.tmdb.org/t/p/w500/1pdfLvkbY9ohJlCjQH2CZjjYVvJ.jpg', commission: 0.35, duration: 25, genre: 'Sci-Fi', rating: 8.8, completed: false },
              { id: 3, title: 'The Batman', poster: 'https://image.tmdb.org/t/p/w500/74xTEgt7R36Fvber9wCR929l5g9.jpg', commission: 0.28, duration: 20, genre: 'Action', rating: 7.8, completed: true },
              { id: 4, title: 'Avatar: The Way', poster: 'https://image.tmdb.org/t/p/w500/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg', commission: 0.42, duration: 35, genre: 'Adventure', rating: 7.6, completed: false },
              { id: 5, title: 'Top Gun: Maverick', poster: 'https://image.tmdb.org/t/p/w500/62HCnUTziyWQpSaeso0P0S6VhN1.jpg', commission: 0.32, duration: 28, genre: 'Action', rating: 8.3, completed: false },
              { id: 6, title: 'Interstellar', poster: 'https://image.tmdb.org/t/p/w500/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg', commission: 0.38, duration: 30, genre: 'Sci-Fi', rating: 8.7, completed: true },
              { id: 7, title: 'The Dark Knight', poster: 'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg', commission: 0.45, duration: 32, genre: 'Action', rating: 9.0, completed: false },
              { id: 8, title: 'Inception', poster: 'https://image.tmdb.org/t/p/w500/edv5CZvWj09upOsy2Y6IwDhK8bt.jpg', commission: 0.36, duration: 26, genre: 'Thriller', rating: 8.8, completed: false },
              { id: 9, title: 'Joker', poster: 'https://image.tmdb.org/t/p/w500/udDclJoHjfjb8Ekgsd4FDteOkCU.jpg', commission: 0.29, duration: 22, genre: 'Drama', rating: 8.4, completed: false },
              { id: 10, title: 'Spider-Man: NWH', poster: 'https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg', commission: 0.33, duration: 24, genre: 'Action', rating: 8.2, completed: false },
              { id: 11, title: 'Black Panther', poster: 'https://image.tmdb.org/t/p/w500/uxzzxijgPIY7slzFvMotPv8wjKA.jpg', commission: 0.27, duration: 20, genre: 'Action', rating: 7.3, completed: false },
              { id: 12, title: 'Avengers: Endgame', poster: 'https://image.tmdb.org/t/p/w500/or06FN3Dka5tukK1e9sl16pB3iy.jpg', commission: 0.50, duration: 40, genre: 'Action', rating: 8.4, completed: false }
          ],
          openTask(task) {
              if (task.completed) return;
              this.activeTask = task;
              this.timer = task.duration;
              this.maxTimer = task.duration;
              this.view = 'player';
              this.startTimer();
          },
          startTimer() {
              this.timerInterval = setInterval(() => {
                  if (this.timer > 0) {
                      this.timer--;
                  } else {
                      clearInterval(this.timerInterval);
                  }
              }, 1000);
          },
          closePlayer() {
              clearInterval(this.timerInterval);
              this.view = 'list';
              this.activeTask = null;
              this.timer = 0;
          },
          claimReward() {
              if (this.timer === 0 && this.activeTask) {
                  const taskIndex = this.tasks.findIndex(t => t.id === this.activeTask.id);
                  if (taskIndex !== -1) {
                      this.tasks[taskIndex].completed = true;
                  }
                  this.closePlayer();
              }
          },
          getProgress() {
              if (this.maxTimer === 0) return 0;
              return ((this.maxTimer - this.timer) / this.maxTimer) * 100;
          },
          getCircumference() {
              return 2 * Math.PI * 54;
          },
          getStrokeDashoffset() {
              const circumference = this.getCircumference();
              return circumference - (this.getProgress() / 100) * circumference;
          }
      }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-purple-600/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-blue-600/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-pink-600/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- ==================== VIEW A: TASK LIST ==================== -->
    <div x-show="view === 'list'" x-transition:enter="animate-scale-in" class="relative z-10">
        
        <!-- Header -->
        <header class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-3">
                <a href="/" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Task Hall</h1>
            </div>
            <div class="flex items-center gap-3">
                <div class="glass px-4 py-2 rounded-full flex items-center gap-2">
                    <i class="fas fa-coins text-gold-400"></i>
                    <span class="text-sm font-semibold text-gold-400">$124.50</span>
                </div>
            </div>
        </header>
        
        <!-- Stats Bar -->
        <div class="px-5 py-4">
            <div class="glass rounded-2xl p-4 relative overflow-hidden">
                <div class="absolute inset-0 shimmer"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div class="text-center">
                        <p class="text-2xl font-bold text-gold-gradient" x-text="tasks.filter(t => t.completed).length"></p>
                        <p class="text-xs text-gray-400">Completed</p>
                    </div>
                    <div class="w-px h-10 bg-white/10"></div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-purple-gradient" x-text="tasks.filter(t => !t.completed).length"></p>
                        <p class="text-xs text-gray-400">Available</p>
                    </div>
                    <div class="w-px h-10 bg-white/10"></div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-green-400">$<span x-text="tasks.filter(t => t.completed).reduce((sum, t) => sum + t.commission, 0).toFixed(2)"></span></p>
                        <p class="text-xs text-gray-400">Earned Today</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section Title -->
        <div class="px-5 mb-4 flex items-center justify-between">
            <h2 class="text-lg font-semibold flex items-center gap-2">
                <i class="fas fa-film text-neon-purple"></i>
                <span>Movie Tasks</span>
            </h2>
            <div class="flex items-center gap-2 text-sm text-gray-400">
                <i class="fas fa-fire text-orange-400"></i>
                <span>Hot Releases</span>
            </div>
        </div>
        
        <!-- Task Grid -->
        <div class="px-5 pb-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                <template x-for="task in tasks" :key="task.id">
                    <div 
                        @click="openTask(task)"
                        class="movie-card card-hover rounded-2xl overflow-hidden cursor-pointer relative group"
                        :class="{ 'opacity-60': task.completed }"
                    >
                        <!-- Poster Image -->
                        <div class="aspect-[2/3] relative">
                            <img 
                                :src="task.poster" 
                                :alt="task.title"
                                class="w-full h-full object-cover"
                                onerror="this.src='https://placehold.co/300x450/1a1a25/a855f7?text=Movie'"
                            >
                            
                            <!-- Completed Overlay -->
                            <div x-show="task.completed" class="absolute inset-0 bg-black/60 flex items-center justify-center z-10">
                                <div class="w-16 h-16 rounded-full bg-green-500/20 border-2 border-green-400 flex items-center justify-center">
                                    <i class="fas fa-check text-green-400 text-2xl"></i>
                                </div>
                            </div>
                            
                            <!-- Rating Badge -->
                            <div class="absolute top-3 left-3 z-10 glass px-2 py-1 rounded-lg flex items-center gap-1">
                                <i class="fas fa-star text-gold-400 text-xs"></i>
                                <span class="text-xs font-semibold" x-text="task.rating"></span>
                            </div>
                            
                            <!-- Duration Badge -->
                            <div x-show="!task.completed" class="absolute top-3 right-3 z-10 glass px-2 py-1 rounded-lg flex items-center gap-1">
                                <i class="fas fa-clock text-neon-purple text-xs"></i>
                                <span class="text-xs" x-text="task.duration + 's'"></span>
                            </div>
                            
                            <!-- Content Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-4 z-10">
                                <h3 class="font-semibold text-sm mb-1 line-clamp-1" x-text="task.title"></h3>
                                <p class="text-xs text-gray-400 mb-2" x-text="task.genre"></p>
                                
                                <!-- Commission Badge -->
                                <div class="commission-badge inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full">
                                    <i class="fas fa-dollar-sign text-green-400 text-xs"></i>
                                    <span class="text-sm font-bold text-green-400" x-text="task.commission.toFixed(2)"></span>
                                </div>
                            </div>
                            
                            <!-- Play Icon on Hover -->
                            <div x-show="!task.completed" class="absolute inset-0 flex items-center justify-center z-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="w-16 h-16 rounded-full bg-neon-purple/30 backdrop-blur-sm flex items-center justify-center border border-neon-purple/50">
                                    <i class="fas fa-play text-white text-xl ml-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        
    </div>
    
    <!-- ==================== VIEW B: VIDEO PLAYER ==================== -->
    <div 
        x-show="view === 'player'" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 video-container"
    >
        <!-- SVG Gradient Definition -->
        <svg class="absolute w-0 h-0">
            <defs>
                <linearGradient id="goldGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#fcd34d" />
                    <stop offset="50%" style="stop-color:#f59e0b" />
                    <stop offset="100%" style="stop-color:#d97706" />
                </linearGradient>
                <linearGradient id="purpleGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#a855f7" />
                    <stop offset="100%" style="stop-color:#ec4899" />
                </linearGradient>
            </defs>
        </svg>
        
        <!-- Background Poster (Blurred) -->
        <div class="absolute inset-0 z-0">
            <img 
                :src="activeTask?.poster" 
                class="w-full h-full object-cover blur-xl opacity-30 scale-110"
                onerror="this.style.display='none'"
            >
            <div class="absolute inset-0 bg-gradient-to-b from-dark-900/80 via-dark-900/60 to-dark-900/90"></div>
        </div>
        
        <!-- Close Button -->
        <button 
            @click="closePlayer()"
            class="absolute top-6 left-6 z-50 w-12 h-12 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-colors"
        >
            <i class="fas fa-times text-white text-xl"></i>
        </button>
        
        <!-- Task Info (Top Right) -->
        <div class="absolute top-6 right-6 z-50 text-right">
            <div class="glass px-4 py-2 rounded-xl inline-flex items-center gap-2 mb-2">
                <i class="fas fa-coins text-gold-400"></i>
                <span class="text-gold-gradient font-bold">+$<span x-text="activeTask?.commission.toFixed(2)"></span></span>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="relative z-10 h-full flex flex-col items-center justify-center px-6">
            
            <!-- Video/Poster Container -->
            <div class="relative w-full max-w-sm aspect-[9/16] rounded-3xl overflow-hidden glass-strong mb-8 poster-shine">
                <img 
                    :src="activeTask?.poster" 
                    :alt="activeTask?.title"
                    class="w-full h-full object-cover"
                    onerror="this.src='https://placehold.co/360x640/1a1a25/a855f7?text=Movie'"
                >
                
                <!-- Play/Pause Overlay (Fake Video Effect) -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-20 h-20 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20 animate-pulse">
                        <i class="fas fa-play text-white text-2xl ml-1"></i>
                    </div>
                </div>
                
                <!-- Video Progress Bar -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/10">
                    <div 
                        class="h-full bg-gradient-to-r from-gold-400 via-gold-500 to-gold-600 transition-all duration-1000 ease-linear"
                        :style="'width: ' + getProgress() + '%'"
                    ></div>
                </div>
                
                <!-- Movie Info Overlay -->
                <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/90 via-black/50 to-transparent">
                    <h2 class="text-2xl font-playfair font-bold mb-1" x-text="activeTask?.title"></h2>
                    <div class="flex items-center gap-3 text-sm text-gray-300">
                        <span class="flex items-center gap-1">
                            <i class="fas fa-star text-gold-400"></i>
                            <span x-text="activeTask?.rating"></span>
                        </span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span x-text="activeTask?.genre"></span>
                    </div>
                </div>
            </div>
            
            <!-- Circular Timer -->
            <div class="relative w-36 h-36 mb-8">
                <svg class="timer-ring w-full h-full" viewBox="0 0 120 120">
                    <!-- Background Circle -->
                    <circle 
                        class="timer-ring-bg"
                        cx="60" 
                        cy="60" 
                        r="54" 
                        fill="none" 
                        stroke-width="8"
                    />
                    <!-- Progress Circle -->
                    <circle 
                        class="timer-ring-progress"
                        cx="60" 
                        cy="60" 
                        r="54" 
                        fill="none" 
                        stroke-width="8"
                        :stroke-dasharray="getCircumference()"
                        :stroke-dashoffset="getStrokeDashoffset()"
                    />
                </svg>
                
                <!-- Timer Text -->
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span 
                        class="text-4xl font-bold"
                        :class="timer === 0 ? 'text-gold-gradient' : 'text-white'"
                        x-text="timer"
                    ></span>
                    <span class="text-xs text-gray-400 uppercase tracking-wider">Seconds</span>
                </div>
                
                <!-- Completion Glow -->
                <div 
                    x-show="timer === 0"
                    class="absolute inset-0 rounded-full animate-pulse"
                    style="box-shadow: 0 0 40px rgba(245, 158, 11, 0.5), 0 0 80px rgba(245, 158, 11, 0.3);"
                ></div>
            </div>
            
            <!-- Claim Button -->
            <button 
                @click="claimReward()"
                class="w-full max-w-xs py-4 px-8 rounded-2xl font-bold text-lg transition-all duration-300 flex items-center justify-center gap-3"
                :class="timer === 0 ? 'btn-claim-ready text-dark-900 hover:scale-105' : 'btn-disabled text-gray-400'"
                :disabled="timer > 0"
            >
                <i class="fas" :class="timer === 0 ? 'fa-gift' : 'fa-hourglass-half'"></i>
                <span x-text="timer === 0 ? 'Claim $' + activeTask?.commission.toFixed(2) : 'Watching...'"></span>
            </button>
            
            <!-- Helper Text -->
            <p class="text-center text-sm text-gray-500 mt-4 max-w-xs">
                <span x-show="timer > 0">Watch until the end to claim your reward</span>
                <span x-show="timer === 0" class="text-gold-400">🎉 Ready to claim your commission!</span>
            </p>
            
        </div>
        
        <!-- Side Actions (TikTok Style) -->
        <div class="absolute right-6 bottom-1/3 z-50 flex flex-col items-center gap-6">
            <button class="flex flex-col items-center gap-1 group">
                <div class="w-12 h-12 rounded-full glass flex items-center justify-center group-hover:bg-white/10 transition-colors">
                    <i class="fas fa-heart text-white group-hover:text-pink-500 transition-colors"></i>
                </div>
                <span class="text-xs text-gray-400">12.5K</span>
            </button>
            
            <button class="flex flex-col items-center gap-1 group">
                <div class="w-12 h-12 rounded-full glass flex items-center justify-center group-hover:bg-white/10 transition-colors">
                    <i class="fas fa-comment text-white group-hover:text-neon-purple transition-colors"></i>
                </div>
                <span class="text-xs text-gray-400">2.3K</span>
            </button>
            
            <button class="flex flex-col items-center gap-1 group">
                <div class="w-12 h-12 rounded-full glass flex items-center justify-center group-hover:bg-white/10 transition-colors">
                    <i class="fas fa-share text-white group-hover:text-neon-cyan transition-colors"></i>
                </div>
                <span class="text-xs text-gray-400">Share</span>
            </button>
            
            <button class="flex flex-col items-center gap-1 group">
                <div class="w-12 h-12 rounded-full glass flex items-center justify-center group-hover:bg-white/10 transition-colors">
                    <i class="fas fa-bookmark text-white group-hover:text-gold-400 transition-colors"></i>
                </div>
                <span class="text-xs text-gray-400">Save</span>
            </button>
        </div>
        
    </div>
    
    <!-- ==================== BOTTOM NAVIGATION ==================== -->
    <nav x-show="view === 'list'" class="fixed bottom-0 left-0 right-0 z-40 px-4 pb-4">
        <div class="glass-strong rounded-3xl py-3 px-2 max-w-lg mx-auto">
            <div class="flex items-center justify-around">
                <!-- Home -->
                <a href="<?php echo e(url('/')); ?>" 
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-home text-xl"></i>
                    <span class="text-[10px] font-medium">Home</span>
                </a>
                
                <!-- Tasks -->
                <a href="<?php echo e(url('/tasks')); ?>" 
                   class="nav-active relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-list-check text-xl"></i>
                    <span class="text-[10px] font-medium">Tasks</span>
                </a>
                
                <!-- Level (Center - Larger) -->
                <a href="<?php echo e(url('/level')); ?>" 
                   class="relative flex flex-col items-center gap-1 px-4 py-2 -mt-8">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 via-pink-500 to-gold-500 flex items-center justify-center shadow-lg animate-pulse-glow">
                        <i class="fas fa-layer-group text-2xl text-white"></i>
                    </div>
                    <span class="text-[10px] font-medium text-gray-500">Level</span>
                </a>
                
                <!-- Earnings -->
                <a href="<?php echo e(url('/earnings')); ?>" 
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-chart-line text-xl"></i>
                    <span class="text-[10px] font-medium">Earnings</span>
                </a>
                
                <!-- Me -->
                <a href="<?php echo e(url('/me')); ?>" 
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-user text-xl"></i>
                    <span class="text-[10px] font-medium">Me</span>
                </a>
            </div>
        </div>
    </nav>
    
</body>
</html>
<?php /**PATH /home/saeed/Documents/wealthreel-v2/resources/views/tasks.blade.php ENDPATH**/ ?>