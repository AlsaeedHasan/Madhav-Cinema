<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Wealth Box - Madhav Cinema</title>
    
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
        
        .text-gold-gradient {
            background: linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #d97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .shimmer {
            background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.1) 50%, transparent 100%);
            background-size: 200% 100%;
            animation: shimmer 2s linear infinite;
        }
        
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.5;
            animation: float 8s ease-in-out infinite;
        }
        
        .tab-btn {
            transition: all 0.3s ease;
        }
        
        .tab-btn.active {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.3) 0%, rgba(168, 85, 247, 0.3) 100%);
            border-color: rgba(245, 158, 11, 0.5);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        }
        
        .glow-gold {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.3), 0 0 60px rgba(245, 158, 11, 0.1);
        }
        
        .plan-card {
            transition: all 0.3s ease;
        }
        
        .plan-card:hover {
            transform: translateY(-3px);
            border-color: rgba(245, 158, 11, 0.3);
        }
        
        .btn-invest {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }
        
        .btn-invest:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          activeTab: 'plans',
          totalInvested: 2500.00,
          totalProfit: 380.50,
          plans: [
              { id: 1, name: 'Plan A - Starter', cycle: '7 Days', rate: '1.5%', minInvest: 50, color: 'from-blue-400 to-blue-600' },
              { id: 2, name: 'Plan B - Growth', cycle: '14 Days', rate: '2.0%', minInvest: 200, color: 'from-green-400 to-green-600' },
              { id: 3, name: 'Plan C - Premium', cycle: '21 Days', rate: '2.5%', minInvest: 500, color: 'from-purple-400 to-purple-600' },
              { id: 4, name: 'Plan D - Elite', cycle: '30 Days', rate: '3.0%', minInvest: 1000, color: 'from-gold-400 to-gold-600' },
              { id: 5, name: 'Plan E - VIP', cycle: '45 Days', rate: '3.5%', minInvest: 5000, color: 'from-pink-400 to-pink-600' }
          ],
          myInvestments: [
              { id: 1, plan: 'Plan B - Growth', amount: 500, dailyReturn: 10.00, daysLeft: 8, progress: 43 },
              { id: 2, plan: 'Plan C - Premium', amount: 1000, dailyReturn: 25.00, daysLeft: 15, progress: 29 },
              { id: 3, plan: 'Plan A - Starter', amount: 100, dailyReturn: 1.50, daysLeft: 2, progress: 71 }
          ]
      }">
    
    <!-- Background Orbs -->
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
                <a href="{{ url('/') }}" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Wealth Box</h1>
            </div>
            <div class="w-10 h-10 rounded-full bg-gold-500/20 flex items-center justify-center">
                <i class="fas fa-piggy-bank text-gold-400"></i>
            </div>
        </header>
        
        <!-- Hero Stats Card -->
        <section class="px-5 py-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden glow-gold">
                <div class="absolute inset-0 shimmer"></div>
                
                <div class="absolute top-4 right-4 opacity-10">
                    <i class="fas fa-chart-line text-5xl text-gold-400"></i>
                </div>
                
                <div class="relative z-10">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass rounded-2xl p-4 text-center">
                            <p class="text-xs text-gray-400 mb-1">
                                <i class="fas fa-wallet mr-1"></i>Total Invested
                            </p>
                            <p class="text-2xl font-bold text-white font-playfair">$<span x-text="totalInvested.toLocaleString('en-US', { minimumFractionDigits: 2 })"></span></p>
                        </div>
                        <div class="glass rounded-2xl p-4 text-center">
                            <p class="text-xs text-gray-400 mb-1">
                                <i class="fas fa-coins mr-1"></i>Total Profit
                            </p>
                            <p class="text-2xl font-bold text-green-400 font-playfair">+$<span x-text="totalProfit.toLocaleString('en-US', { minimumFractionDigits: 2 })"></span></p>
                        </div>
                    </div>
                    
                    <div class="mt-4 flex items-center justify-center gap-2 text-sm text-gray-400">
                        <i class="fas fa-info-circle text-gold-400"></i>
                        <span>Earnings are credited daily to your wallet</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Tabs -->
        <section class="px-5 mb-4">
            <div class="glass rounded-2xl p-1.5 flex gap-1">
                <button 
                    @click="activeTab = 'plans'"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="activeTab === 'plans' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-list"></i>
                    <span>Investment Plans</span>
                </button>
                <button 
                    @click="activeTab = 'active'"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="activeTab === 'active' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-spinner"></i>
                    <span>My Investments</span>
                    <span class="bg-gold-500 text-dark-900 text-xs px-2 py-0.5 rounded-full font-bold" x-text="myInvestments.length"></span>
                </button>
            </div>
        </section>
        
        <!-- Investment Plans -->
        <section x-show="activeTab === 'plans'" class="px-5 space-y-4">
            <template x-for="plan in plans" :key="plan.id">
                <div class="plan-card glass rounded-2xl p-5 relative overflow-hidden">
                    <!-- Plan Header -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br flex items-center justify-center" :class="plan.color">
                                <i class="fas fa-gem text-white text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-white" x-text="plan.name"></h3>
                                <p class="text-xs text-gray-400" x-text="'Cycle: ' + plan.cycle"></p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl font-bold text-gold-gradient" x-text="plan.rate"></p>
                            <p class="text-xs text-gray-500">Daily Return</p>
                        </div>
                    </div>
                    
                    <!-- Plan Details -->
                    <div class="grid grid-cols-3 gap-3 mb-4">
                        <div class="glass rounded-xl p-3 text-center">
                            <p class="text-xs text-gray-500">Min Invest</p>
                            <p class="font-semibold text-white">$<span x-text="plan.minInvest"></span></p>
                        </div>
                        <div class="glass rounded-xl p-3 text-center">
                            <p class="text-xs text-gray-500">Duration</p>
                            <p class="font-semibold text-white" x-text="plan.cycle"></p>
                        </div>
                        <div class="glass rounded-xl p-3 text-center">
                            <p class="text-xs text-gray-500">Total Return</p>
                            <p class="font-semibold text-green-400" x-text="(parseFloat(plan.rate) * parseInt(plan.cycle)).toFixed(1) + '%'"></p>
                        </div>
                    </div>
                    
                    <!-- Invest Button -->
                    <button class="btn-invest w-full py-3 rounded-xl font-bold text-dark-900 flex items-center justify-center gap-2 transition-transform">
                        <i class="fas fa-plus-circle"></i>
                        <span>Invest Now</span>
                    </button>
                </div>
            </template>
        </section>
        
        <!-- My Investments -->
        <section x-show="activeTab === 'active'" class="px-5 space-y-4">
            <template x-for="inv in myInvestments" :key="inv.id">
                <div class="glass rounded-2xl p-5">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-semibold text-white" x-text="inv.plan"></h3>
                        <span class="px-3 py-1 bg-green-500/20 text-green-400 text-xs rounded-full font-medium">Active</span>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-3 mb-4">
                        <div class="text-center">
                            <p class="text-xs text-gray-500">Invested</p>
                            <p class="font-semibold text-white">$<span x-text="inv.amount"></span></p>
                        </div>
                        <div class="text-center">
                            <p class="text-xs text-gray-500">Daily Return</p>
                            <p class="font-semibold text-green-400">+$<span x-text="inv.dailyReturn.toFixed(2)"></span></p>
                        </div>
                        <div class="text-center">
                            <p class="text-xs text-gray-500">Days Left</p>
                            <p class="font-semibold text-gold-400" x-text="inv.daysLeft"></p>
                        </div>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="mb-2">
                        <div class="flex items-center justify-between text-xs mb-1">
                            <span class="text-gray-500">Progress</span>
                            <span class="text-gold-400" x-text="inv.progress + '%'"></span>
                        </div>
                        <div class="h-2 bg-dark-700 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-gold-400 to-gold-600 rounded-full transition-all" 
                                 :style="'width: ' + inv.progress + '%'"></div>
                        </div>
                    </div>
                </div>
            </template>
            
            <!-- Empty State -->
            <div x-show="myInvestments.length === 0" class="glass rounded-2xl p-12 text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-gray-800 flex items-center justify-center mb-4">
                    <i class="fas fa-seedling text-3xl text-gray-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-400 mb-2">No Active Investments</h3>
                <p class="text-sm text-gray-500">Start investing to grow your wealth!</p>
            </div>
        </section>
        
    </div>
    
</body>
</html>
