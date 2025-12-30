<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>About Us - Madhav Cinema</title>
    
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
        
        /* Glow Gold */
        .glow-gold {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.3), 0 0 60px rgba(245, 158, 11, 0.1);
        }
        
        /* License Frame */
        .license-frame {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1) 0%, rgba(168, 85, 247, 0.1) 100%);
            border: 2px solid rgba(245, 158, 11, 0.3);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" x-data>
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-gold-500/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-purple-600/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-neon-pink/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10">
        
        <!-- Header -->
        <header class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-3">
                <a href="<?php echo e(url('/me')); ?>" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">About Us</h1>
            </div>
        </header>
        
        <!-- Hero Section -->
        <section class="px-5 py-10 text-center">
            <div class="w-28 h-28 mx-auto rounded-3xl bg-gradient-to-br from-gold-400 via-gold-500 to-gold-600 flex items-center justify-center glow-gold mb-6 animate-float">
                <i class="fas fa-film text-5xl text-dark-900"></i>
            </div>
            
            <h2 class="text-4xl font-playfair font-bold text-gold-gradient mb-3">MADHAV CINEMA</h2>
            <p class="text-gray-400 mb-2">Premium Movie Investment Platform</p>
            <span class="inline-block glass rounded-full px-4 py-1 text-sm text-gray-400">
                <i class="fas fa-code-branch mr-1"></i>
                Version 1.0.0
            </span>
        </section>
        
        <!-- Our Story -->
        <section class="px-5 mb-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden">
                <div class="absolute inset-0 shimmer"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center">
                            <i class="fas fa-book-open text-dark-900"></i>
                        </div>
                        <h3 class="text-xl font-playfair font-bold text-white">Our Story</h3>
                    </div>
                    
                    <p class="text-gray-300 leading-relaxed mb-4">
                        Madhav Cinema was founded with a revolutionary vision: to bridge the gap between movie enthusiasts and the film investment industry. We believe that everyone should have the opportunity to participate in the exciting world of movie production and share in its success.
                    </p>
                    
                    <p class="text-gray-400 leading-relaxed">
                        Our platform enables users to invest in carefully selected movie projects, earn daily returns, and be part of the entertainment industry's growth. With cutting-edge technology and a commitment to transparency, we've created a secure and rewarding investment ecosystem.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Our Vision -->
        <section class="px-5 mb-6">
            <div class="glass rounded-3xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-neon-purple to-neon-pink flex items-center justify-center">
                        <i class="fas fa-eye text-white"></i>
                    </div>
                    <h3 class="text-xl font-playfair font-bold text-white">Our Vision</h3>
                </div>
                
                <blockquote class="border-l-4 border-neon-purple pl-4 italic text-gray-300">
                    "To democratize movie investments and create a global community where passion for cinema meets financial opportunity."
                </blockquote>
                
                <div class="grid grid-cols-3 gap-4 mt-6">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gold-gradient mb-1">50K+</div>
                        <div class="text-xs text-gray-500">Active Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gold-gradient mb-1">$2M+</div>
                        <div class="text-xs text-gray-500">Distributed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-gold-gradient mb-1">100+</div>
                        <div class="text-xs text-gray-500">Countries</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Why Choose Us -->
        <section class="px-5 mb-6">
            <h3 class="text-lg font-playfair font-bold text-white mb-4 flex items-center gap-2">
                <i class="fas fa-star text-gold-400"></i>
                Why Choose Us
            </h3>
            
            <div class="space-y-3">
                <div class="glass rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-green-500/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-shield-halved text-green-400"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white">Secure & Reliable</h4>
                        <p class="text-sm text-gray-400">Bank-grade security for your investments</p>
                    </div>
                </div>
                
                <div class="glass rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-blue-400"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white">24/7 Operations</h4>
                        <p class="text-sm text-gray-400">Earn returns around the clock</p>
                    </div>
                </div>
                
                <div class="glass rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-gold-500/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-bolt text-gold-400"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white">Instant Withdrawals</h4>
                        <p class="text-sm text-gray-400">Fast processing within 24 hours</p>
                    </div>
                </div>
                
                <div class="glass rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-users text-purple-400"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white">Team Rewards</h4>
                        <p class="text-sm text-gray-400">Earn up to 30% commission from referrals</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Company License -->
        <section class="px-5 mb-6">
            <div class="glass rounded-3xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center">
                        <i class="fas fa-certificate text-dark-900"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-playfair font-bold text-white">Company License</h3>
                        <p class="text-sm text-gray-400">Verified & Certified</p>
                    </div>
                </div>
                
                <div class="license-frame rounded-2xl p-4 mb-4">
                    <img src="https://placehold.co/400x250/1a1a25/gold?text=Business+License" 
                         alt="Business License" 
                         class="w-full rounded-xl">
                </div>
                
                <div class="flex items-center justify-center gap-2 text-sm text-gray-400">
                    <i class="fas fa-check-circle text-green-400"></i>
                    <span>Licensed & Regulated Entertainment Investment Platform</span>
                </div>
            </div>
        </section>
        
        <!-- Contact Card -->
        <section class="px-5 mb-6">
            <div class="glass rounded-3xl p-6 text-center">
                <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-br from-neon-cyan to-neon-blue flex items-center justify-center mb-4">
                    <i class="fas fa-headset text-2xl text-white"></i>
                </div>
                
                <h3 class="text-xl font-playfair font-bold text-white mb-2">Need Help?</h3>
                <p class="text-gray-400 mb-4">Our support team is available 24/7</p>
                
                <div class="space-y-3">
                    <a href="mailto:support@madhavcinema.com" class="glass rounded-xl p-4 flex items-center justify-center gap-3 hover:bg-white/10 transition-colors">
                        <i class="fas fa-envelope text-gold-400"></i>
                        <span class="text-gray-300">support@madhavcinema.com</span>
                    </a>
                    
                    <a href="#" class="glass rounded-xl p-4 flex items-center justify-center gap-3 hover:bg-white/10 transition-colors">
                        <i class="fab fa-telegram-plane text-blue-400"></i>
                        <span class="text-gray-300">@MadhavCinemaSupport</span>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <section class="px-5 text-center">
            <p class="text-gray-600 text-sm">
                © 2024 Madhav Cinema. All rights reserved.
            </p>
            <div class="flex justify-center gap-4 mt-4">
                <a href="#" class="text-gray-500 hover:text-gold-400 transition-colors text-sm">Terms of Service</a>
                <span class="text-gray-700">•</span>
                <a href="#" class="text-gray-500 hover:text-gold-400 transition-colors text-sm">Privacy Policy</a>
            </div>
        </section>
        
    </div>
    
</body>
</html>
<?php /**PATH /home/saeed/Documents/wealthreel-v2/resources/views/about.blade.php ENDPATH**/ ?>