<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Invite Friends - Madhav Cinema</title>
    
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
                        'glow-gold': 'glow-gold 2s ease-in-out infinite',
                        'gradient-move': 'gradient-move 3s ease-in-out infinite',
                        'sparkle': 'sparkle 2s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: '1', boxShadow: '0 0 20px rgba(168, 85, 247, 0.4)' },
                            '50%': { opacity: '0.8', boxShadow: '0 0 40px rgba(168, 85, 247, 0.6)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
                        },
                        'glow-gold': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(245, 158, 11, 0.5), 0 0 40px rgba(245, 158, 11, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(245, 158, 11, 0.7), 0 0 60px rgba(245, 158, 11, 0.4)' },
                        },
                        'gradient-move': {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        'sparkle': {
                            '0%, 100%': { opacity: '0.5', transform: 'scale(1)' },
                            '50%': { opacity: '1', transform: 'scale(1.2)' },
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
            background: linear-gradient(180deg, #f59e0b, #a855f7);
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
        
        /* Animated Background Orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.5;
            animation: float 8s ease-in-out infinite;
        }
        
        /* Poster Card */
        .poster-card {
            background: linear-gradient(180deg, rgba(26, 26, 37, 0.9) 0%, rgba(18, 18, 26, 0.95) 100%);
            border: 2px solid transparent;
            background-clip: padding-box;
            position: relative;
        }
        
        .poster-card::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, #f59e0b 0%, #a855f7 50%, #ec4899 100%);
            border-radius: inherit;
            z-index: -1;
            background-size: 200% 200%;
            animation: gradient-move 3s ease-in-out infinite;
        }
        
        /* QR Code Container */
        .qr-container {
            background: white;
            padding: 12px;
            border-radius: 16px;
        }
        
        /* Copy Button */
        .copy-btn {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            background-size: 200% 200%;
            animation: gradient-move 3s ease-in-out infinite;
        }
        
        .copy-btn:hover {
            transform: scale(1.02);
        }
        
        /* Social Share Button */
        .social-btn {
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            transform: translateY(-3px);
        }
        
        /* Sparkle Stars */
        .sparkle {
            animation: sparkle 2s ease-in-out infinite;
        }
        
        /* Film Strip Decoration */
        .film-strip {
            background: repeating-linear-gradient(
                90deg,
                #1a1a25 0px,
                #1a1a25 10px,
                #0a0a0f 10px,
                #0a0a0f 15px
            );
            height: 20px;
        }
        
        /* Glow Gold */
        .glow-gold {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.3), 0 0 60px rgba(245, 158, 11, 0.1);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          referralCode: 'REF123456',
          referralLink: 'https://madhav.com/ref/REF123456',
          copied: false,
          copyLink() {
              navigator.clipboard.writeText(this.referralLink);
              this.copied = true;
              setTimeout(() => this.copied = false, 2000);
          }
      }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-gold-500/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-purple-600/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-neon-pink/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
        <div class="orb w-48 h-48 bg-gold-400/20 bottom-1/3 right-1/4" style="animation-delay: 3s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10">
        
        <!-- Header -->
        <header class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-3">
                <a href="{{ url('/me') }}" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Invite Friends</h1>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ url('/team') }}" class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-users text-lg"></i>
                </a>
            </div>
        </header>
        
        <!-- Movie Premiere Poster -->
        <section class="px-5 py-6">
            <div class="poster-card rounded-3xl overflow-hidden">
                <!-- Film Strip Top -->
                <div class="film-strip"></div>
                
                <div class="p-6 text-center relative">
                    <!-- Sparkle Decorations -->
                    <div class="absolute top-4 left-4 text-gold-400 sparkle" style="animation-delay: 0s;">
                        <i class="fas fa-star text-xs"></i>
                    </div>
                    <div class="absolute top-8 right-8 text-gold-400 sparkle" style="animation-delay: 0.5s;">
                        <i class="fas fa-star text-sm"></i>
                    </div>
                    <div class="absolute top-16 left-12 text-neon-purple sparkle" style="animation-delay: 1s;">
                        <i class="fas fa-star text-xs"></i>
                    </div>
                    <div class="absolute bottom-20 right-6 text-neon-pink sparkle" style="animation-delay: 1.5s;">
                        <i class="fas fa-star text-xs"></i>
                    </div>
                    
                    <!-- Logo/Icon -->
                    <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-gradient-to-br from-gold-400 via-gold-500 to-gold-600 flex items-center justify-center glow-gold">
                        <i class="fas fa-film text-3xl text-dark-900"></i>
                    </div>
                    
                    <!-- Title -->
                    <h2 class="text-3xl font-playfair font-bold text-gold-gradient mb-2">MADHAV CINEMA</h2>
                    <p class="text-gray-400 mb-1">Premium Movie Investment Platform</p>
                    
                    <!-- Tagline -->
                    <div class="glass rounded-xl py-3 px-6 inline-block my-4">
                        <p class="text-lg font-semibold text-white">
                            <i class="fas fa-coins text-gold-400 mr-2"></i>
                            Earn Daily Income
                        </p>
                    </div>
                    
                    <!-- Benefits -->
                    <div class="flex justify-center gap-6 mb-6 text-sm">
                        <div class="text-center">
                            <div class="w-10 h-10 mx-auto rounded-full bg-green-500/20 flex items-center justify-center mb-1">
                                <i class="fas fa-check text-green-400"></i>
                            </div>
                            <p class="text-gray-400">Daily Returns</p>
                        </div>
                        <div class="text-center">
                            <div class="w-10 h-10 mx-auto rounded-full bg-gold-500/20 flex items-center justify-center mb-1">
                                <i class="fas fa-gift text-gold-400"></i>
                            </div>
                            <p class="text-gray-400">VIP Rewards</p>
                        </div>
                        <div class="text-center">
                            <div class="w-10 h-10 mx-auto rounded-full bg-neon-purple/20 flex items-center justify-center mb-1">
                                <i class="fas fa-users text-neon-purple"></i>
                            </div>
                            <p class="text-gray-400">Team Bonus</p>
                        </div>
                    </div>
                    
                    <!-- QR Code -->
                    <div class="qr-container inline-block mb-4">
                        <img src="https://placehold.co/150x150/ffffff/1a1a25?text=QR+CODE" 
                             alt="QR Code" 
                             class="w-36 h-36">
                    </div>
                    
                    <p class="text-xs text-gray-500 mb-2">Scan to Join</p>
                    
                    <!-- Referral Code -->
                    <div class="glass rounded-xl py-2 px-4 inline-flex items-center gap-2">
                        <span class="text-gray-400 text-sm">Code:</span>
                        <span class="font-mono font-bold text-gold-400" x-text="referralCode"></span>
                    </div>
                </div>
                
                <!-- Film Strip Bottom -->
                <div class="film-strip"></div>
            </div>
        </section>
        
        <!-- Referral Link Section -->
        <section class="px-5 mb-6">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Your Referral Link</h3>
            
            <div class="glass rounded-2xl p-4">
                <!-- Link Display -->
                <div class="glass rounded-xl p-3 mb-4 flex items-center gap-3">
                    <i class="fas fa-link text-gold-400"></i>
                    <input 
                        type="text" 
                        :value="referralLink" 
                        readonly 
                        class="bg-transparent text-white text-sm flex-1 font-mono outline-none truncate"
                    >
                </div>
                
                <!-- Copy Button -->
                <button 
                    @click="copyLink()"
                    class="copy-btn w-full py-4 rounded-2xl font-bold text-dark-900 text-lg flex items-center justify-center gap-3 transition-transform">
                    <i class="fas" :class="copied ? 'fa-check' : 'fa-copy'"></i>
                    <span x-text="copied ? 'Copied!' : 'Copy Link'"></span>
                </button>
            </div>
        </section>
        
        <!-- Share Grid -->
        <section class="px-5 mb-6">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Share Via</h3>
            
            <div class="grid grid-cols-4 gap-3">
                <!-- WhatsApp -->
                <a href="#" class="social-btn glass rounded-2xl p-4 flex flex-col items-center gap-2">
                    <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center">
                        <i class="fab fa-whatsapp text-2xl text-white"></i>
                    </div>
                    <span class="text-xs text-gray-400">WhatsApp</span>
                </a>
                
                <!-- Telegram -->
                <a href="#" class="social-btn glass rounded-2xl p-4 flex flex-col items-center gap-2">
                    <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center">
                        <i class="fab fa-telegram-plane text-2xl text-white"></i>
                    </div>
                    <span class="text-xs text-gray-400">Telegram</span>
                </a>
                
                <!-- Facebook -->
                <a href="#" class="social-btn glass rounded-2xl p-4 flex flex-col items-center gap-2">
                    <div class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center">
                        <i class="fab fa-facebook-f text-2xl text-white"></i>
                    </div>
                    <span class="text-xs text-gray-400">Facebook</span>
                </a>
                
                <!-- More -->
                <button class="social-btn glass rounded-2xl p-4 flex flex-col items-center gap-2">
                    <div class="w-12 h-12 rounded-full bg-gray-600 flex items-center justify-center">
                        <i class="fas fa-ellipsis-h text-2xl text-white"></i>
                    </div>
                    <span class="text-xs text-gray-400">More</span>
                </button>
            </div>
        </section>
        
        <!-- Commission Info -->
        <section class="px-5 mb-6">
            <div class="glass rounded-2xl p-4">
                <h4 class="text-sm font-semibold text-white mb-4 flex items-center gap-2">
                    <i class="fas fa-gift text-gold-400"></i>
                    Invite & Earn
                </h4>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 rounded-xl bg-gold-500/10 border border-gold-500/20">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gold-500/20 flex items-center justify-center">
                                <span class="font-bold text-gold-400 text-sm">1</span>
                            </div>
                            <span class="text-gray-300">Direct Invite</span>
                        </div>
                        <span class="font-bold text-gold-400">30%</span>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 rounded-xl bg-neon-purple/10 border border-neon-purple/20">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-neon-purple/20 flex items-center justify-center">
                                <span class="font-bold text-neon-purple text-sm">2</span>
                            </div>
                            <span class="text-gray-300">Level 2 Referral</span>
                        </div>
                        <span class="font-bold text-neon-purple">20%</span>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 rounded-xl bg-neon-pink/10 border border-neon-pink/20">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-neon-pink/20 flex items-center justify-center">
                                <span class="font-bold text-neon-pink text-sm">3</span>
                            </div>
                            <span class="text-gray-300">Level 3 Referral</span>
                        </div>
                        <span class="font-bold text-neon-pink">10%</span>
                    </div>
                </div>
                
                <p class="text-xs text-gray-500 mt-4 text-center">
                    <i class="fas fa-info-circle mr-1"></i>
                    Commission is calculated from your referrals' daily earnings
                </p>
            </div>
        </section>
        
        <!-- View Team Button -->
        <section class="px-5 pb-8">
            <a href="{{ url('/team') }}" 
               class="glass w-full py-4 rounded-2xl font-semibold text-white flex items-center justify-center gap-3 hover:bg-white/10 transition-colors">
                <i class="fas fa-users text-gold-400"></i>
                <span>View My Team</span>
                <i class="fas fa-arrow-right text-gray-400"></i>
            </a>
        </section>
        
    </div>
    
</body>
</html>
