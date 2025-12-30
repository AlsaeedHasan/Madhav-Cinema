<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>VIP Membership - Madhav Cinema</title>
    
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
                        'scale-in': 'scale-in 0.3s ease-out',
                        'fade-in': 'fade-in 0.3s ease-out',
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
                        'glow-gold': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(245, 158, 11, 0.6), 0 0 40px rgba(245, 158, 11, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(245, 158, 11, 0.8), 0 0 60px rgba(245, 158, 11, 0.5)' },
                        },
                        'scale-in': {
                            '0%': { transform: 'scale(0.9)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
                        },
                        'fade-in': {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
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
        
        /* Animated Background Orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.5;
            animation: float 8s ease-in-out infinite;
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
        
        /* VIP Card Borders */
        .vip-border-silver {
            border: 2px solid transparent;
            background: linear-gradient(#12121a, #12121a) padding-box,
                        linear-gradient(135deg, #9ca3af 0%, #d1d5db 50%, #9ca3af 100%) border-box;
        }
        
        .vip-border-gold {
            border: 2px solid transparent;
            background: linear-gradient(#12121a, #12121a) padding-box,
                        linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #d97706 100%) border-box;
        }
        
        .vip-border-platinum {
            border: 2px solid transparent;
            background: linear-gradient(#12121a, #12121a) padding-box,
                        linear-gradient(135deg, #a855f7 0%, #ec4899 50%, #a855f7 100%) border-box;
        }
        
        .vip-border-diamond {
            border: 2px solid transparent;
            background: linear-gradient(#12121a, #12121a) padding-box,
                        linear-gradient(135deg, #06b6d4 0%, #3b82f6 50%, #8b5cf6 100%) border-box;
        }
        
        .vip-border-elite {
            border: 2px solid transparent;
            background: linear-gradient(#12121a, #12121a) padding-box,
                        linear-gradient(135deg, #fcd34d 0%, #a855f7 50%, #06b6d4 100%) border-box;
        }
        
        /* Crown Colors */
        .crown-silver { color: #d1d5db; }
        .crown-gold { color: #f59e0b; }
        .crown-platinum { color: #a855f7; }
        .crown-diamond { color: #06b6d4; }
        .crown-elite { 
            background: linear-gradient(135deg, #fcd34d 0%, #a855f7 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Button Gradient */
        .btn-gold {
            background: linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #d97706 100%);
        }
        
        .btn-gold-pulse {
            animation: glow-gold 2s ease-in-out infinite;
        }
        
        /* Modal Overlay */
        .modal-overlay {
            background: rgba(10, 10, 15, 0.9);
            backdrop-filter: blur(10px);
        }
        
        /* Progress Bar Gradient */
        .progress-gradient {
            background: linear-gradient(90deg, #a855f7 0%, #ec4899 50%, #f59e0b 100%);
        }
        
        /* ROI Badge */
        .roi-badge {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(6, 182, 212, 0.15) 100%);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-24" 
      x-data="{ 
          showModal: false, 
          selectedLevel: null,
          walletBalance: 500.00,
          currentLevel: 0,
          levels: [
              { 
                  id: 1, 
                  name: 'VIP 1', 
                  tier: 'Silver',
                  price: 36, 
                  dailyIncome: 1.20, 
                  tasks: 5, 
                  monthlyIncome: 36,
                  roi: 100,
                  icon: 'fa-crown',
                  colorClass: 'silver',
                  features: ['5 Daily Tasks', 'Basic Support', '24h Withdrawal']
              },
              { 
                  id: 2, 
                  name: 'VIP 2', 
                  tier: 'Gold',
                  price: 120, 
                  dailyIncome: 4.00, 
                  tasks: 10, 
                  monthlyIncome: 120,
                  roi: 100,
                  icon: 'fa-crown',
                  colorClass: 'gold',
                  features: ['10 Daily Tasks', 'Priority Support', '12h Withdrawal']
              },
              { 
                  id: 3, 
                  name: 'VIP 3', 
                  tier: 'Platinum',
                  price: 350, 
                  dailyIncome: 12.00, 
                  tasks: 15, 
                  monthlyIncome: 360,
                  roi: 103,
                  icon: 'fa-crown',
                  colorClass: 'platinum',
                  features: ['15 Daily Tasks', 'VIP Support', '6h Withdrawal', 'Bonus Tasks']
              },
              { 
                  id: 4, 
                  name: 'VIP 4', 
                  tier: 'Diamond',
                  price: 800, 
                  dailyIncome: 28.00, 
                  tasks: 20, 
                  monthlyIncome: 840,
                  roi: 105,
                  icon: 'fa-gem',
                  colorClass: 'diamond',
                  features: ['20 Daily Tasks', '24/7 Support', '3h Withdrawal', 'Exclusive Movies']
              },
              { 
                  id: 5, 
                  name: 'VIP 5', 
                  tier: 'Elite',
                  price: 2000, 
                  dailyIncome: 75.00, 
                  tasks: 30, 
                  monthlyIncome: 2250,
                  roi: 112,
                  icon: 'fa-star',
                  colorClass: 'elite',
                  features: ['30 Daily Tasks', 'Personal Manager', 'Instant Withdrawal', 'All Perks']
              }
          ],
          openModal(level) {
              this.selectedLevel = level;
              this.showModal = true;
          },
          closeModal() {
              this.showModal = false;
              this.selectedLevel = null;
          },
          confirmUpgrade() {
              if (this.selectedLevel && this.walletBalance >= this.selectedLevel.price) {
                  this.walletBalance -= this.selectedLevel.price;
                  this.currentLevel = this.selectedLevel.id;
                  this.closeModal();
              }
          },
          getProgressToNext() {
              if (this.currentLevel >= 5) return 100;
              const currentPrice = this.currentLevel > 0 ? this.levels[this.currentLevel - 1].price : 0;
              const nextPrice = this.levels[this.currentLevel].price;
              return Math.min((this.walletBalance / nextPrice) * 100, 100);
          }
      }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-purple-600/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-gold-500/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-pink-600/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10">
        
        <!-- Header -->
        <header class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-3">
                <a href="<?php echo e(url('/')); ?>" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">VIP Membership</h1>
            </div>
            <div class="flex items-center gap-3">
                <div class="glass px-4 py-2 rounded-full flex items-center gap-2">
                    <i class="fas fa-wallet text-neon-purple"></i>
                    <span class="text-sm font-semibold">$<span x-text="walletBalance.toFixed(2)"></span></span>
                </div>
            </div>
        </header>
        
        <!-- Current Status Card -->
        <section class="px-5 py-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden">
                <div class="absolute inset-0 shimmer"></div>
                <div class="relative z-10">
                    <!-- Current Level Display -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 via-pink-500 to-gold-500 flex items-center justify-center shadow-lg">
                                <i class="fas fa-crown text-2xl text-white" x-show="currentLevel > 0"></i>
                                <i class="fas fa-user text-2xl text-white" x-show="currentLevel === 0"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm mb-1">Current Status</p>
                                <h2 class="text-2xl font-bold">
                                    <span x-show="currentLevel === 0">Free Member</span>
                                    <span x-show="currentLevel > 0" class="text-gold-gradient" x-text="'VIP ' + currentLevel"></span>
                                </h2>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-gray-400 text-xs mb-1">Daily Earnings</p>
                            <p class="text-xl font-bold text-green-400">
                                $<span x-text="currentLevel > 0 ? levels[currentLevel - 1].dailyIncome.toFixed(2) : '0.00'"></span>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Progress to Next Level -->
                    <div x-show="currentLevel < 5">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm text-gray-400">Progress to <span x-text="'VIP ' + (currentLevel + 1)"></span></span>
                            <span class="text-sm text-gold-400" x-text="Math.round(getProgressToNext()) + '%'"></span>
                        </div>
                        <div class="h-3 bg-dark-700 rounded-full overflow-hidden">
                            <div class="h-full progress-gradient rounded-full transition-all duration-500" 
                                 :style="'width: ' + getProgressToNext() + '%'"></div>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">
                            Need $<span x-text="(levels[currentLevel].price - walletBalance).toFixed(2)"></span> more to upgrade
                        </p>
                    </div>
                    
                    <!-- Max Level Reached -->
                    <div x-show="currentLevel >= 5" class="text-center py-2">
                        <p class="text-gold-gradient font-semibold">🎉 Maximum Level Achieved!</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Section Title -->
        <div class="px-5 mb-4 flex items-center justify-between">
            <h2 class="text-lg font-semibold flex items-center gap-2">
                <i class="fas fa-crown text-gold-400"></i>
                <span>VIP Packages</span>
            </h2>
            <div class="flex items-center gap-2 text-sm text-gray-400">
                <i class="fas fa-fire text-orange-400"></i>
                <span>Best Value</span>
            </div>
        </div>
        
        <!-- VIP Cards List -->
        <section class="px-5 pb-8 space-y-4">
            <template x-for="level in levels" :key="level.id">
                <div class="rounded-3xl p-5 relative overflow-hidden transition-all duration-300 hover:scale-[1.02]"
                     :class="'vip-border-' + level.colorClass">
                    
                    <!-- Shimmer on hover -->
                    <div class="absolute inset-0 shimmer opacity-0 hover:opacity-100 transition-opacity"></div>
                    
                    <!-- Card Content -->
                    <div class="relative z-10">
                        <!-- Header Row -->
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <!-- Crown Icon -->
                                <div class="w-14 h-14 rounded-2xl glass flex items-center justify-center">
                                    <i class="fas text-3xl" 
                                       :class="[level.icon, 'crown-' + level.colorClass]"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold" x-text="level.name"></h3>
                                    <p class="text-sm text-gray-400" x-text="level.tier + ' Tier'"></p>
                                </div>
                            </div>
                            
                            <!-- Price Badge -->
                            <div class="text-right">
                                <p class="text-3xl font-bold text-gold-gradient">$<span x-text="level.price"></span></p>
                                <p class="text-xs text-gray-500">One-time</p>
                            </div>
                        </div>
                        
                        <!-- Stats Grid -->
                        <div class="grid grid-cols-3 gap-3 mb-4">
                            <!-- Daily Income -->
                            <div class="glass rounded-xl p-3 text-center">
                                <p class="text-xs text-gray-400 mb-1">Daily Income</p>
                                <p class="text-lg font-bold text-green-400">$<span x-text="level.dailyIncome.toFixed(2)"></span></p>
                            </div>
                            
                            <!-- Tasks -->
                            <div class="glass rounded-xl p-3 text-center">
                                <p class="text-xs text-gray-400 mb-1">Daily Tasks</p>
                                <p class="text-lg font-bold text-neon-purple" x-text="level.tasks"></p>
                            </div>
                            
                            <!-- Monthly Income -->
                            <div class="glass rounded-xl p-3 text-center">
                                <p class="text-xs text-gray-400 mb-1">Monthly</p>
                                <p class="text-lg font-bold text-gold-400">$<span x-text="level.monthlyIncome"></span></p>
                            </div>
                        </div>
                        
                        <!-- ROI Badge -->
                        <div class="roi-badge rounded-xl px-4 py-2 mb-4 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-chart-line text-green-400"></i>
                                <span class="text-sm text-gray-300">Return on Investment</span>
                            </div>
                            <span class="text-lg font-bold text-green-400" x-text="level.roi + '%'"></span>
                        </div>
                        
                        <!-- Features List -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <template x-for="feature in level.features" :key="feature">
                                <span class="glass px-3 py-1 rounded-full text-xs text-gray-300 flex items-center gap-1">
                                    <i class="fas fa-check text-green-400 text-[10px]"></i>
                                    <span x-text="feature"></span>
                                </span>
                            </template>
                        </div>
                        
                        <!-- Action Button -->
                        <button 
                            @click="openModal(level)"
                            class="w-full py-3.5 rounded-xl font-bold text-dark-900 transition-all duration-300 flex items-center justify-center gap-2"
                            :class="currentLevel >= level.id ? 'bg-gray-600 text-gray-400 cursor-not-allowed' : 'btn-gold hover:scale-[1.02] btn-gold-pulse'"
                            :disabled="currentLevel >= level.id">
                            <i class="fas" :class="currentLevel >= level.id ? 'fa-check' : 'fa-rocket'"></i>
                            <span x-text="currentLevel >= level.id ? 'Activated' : 'Upgrade Now'"></span>
                        </button>
                    </div>
                    
                    <!-- Current Level Badge -->
                    <div x-show="currentLevel === level.id" 
                         class="absolute top-4 right-4 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        CURRENT
                    </div>
                </div>
            </template>
        </section>
        
    </div>
    
    <!-- ==================== UPGRADE MODAL ==================== -->
    <div x-show="showModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-5 modal-overlay"
         @click.self="closeModal()">
        
        <div x-show="showModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="glass-strong rounded-3xl p-6 w-full max-w-sm relative overflow-hidden">
            
            <div class="absolute inset-0 shimmer"></div>
            
            <div class="relative z-10">
                <!-- Modal Header -->
                <div class="text-center mb-6">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-br from-gold-400 via-gold-500 to-gold-600 flex items-center justify-center mx-auto mb-4 glow-gold">
                        <i class="fas fa-crown text-dark-900 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-playfair font-bold text-gold-gradient mb-2">Confirm Upgrade</h3>
                    <p class="text-gray-400">Upgrade to <span class="text-white font-semibold" x-text="selectedLevel?.name"></span>?</p>
                </div>
                
                <!-- Transaction Details -->
                <div class="glass rounded-2xl p-4 mb-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400">Package Price</span>
                        <span class="text-xl font-bold text-gold-gradient">$<span x-text="selectedLevel?.price"></span></span>
                    </div>
                    <div class="border-t border-white/10"></div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400">Wallet Balance</span>
                        <span class="font-semibold" :class="walletBalance >= (selectedLevel?.price || 0) ? 'text-green-400' : 'text-red-400'">
                            $<span x-text="walletBalance.toFixed(2)"></span>
                        </span>
                    </div>
                    <div class="border-t border-white/10"></div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400">After Purchase</span>
                        <span class="font-semibold" :class="(walletBalance - (selectedLevel?.price || 0)) >= 0 ? 'text-white' : 'text-red-400'">
                            $<span x-text="(walletBalance - (selectedLevel?.price || 0)).toFixed(2)"></span>
                        </span>
                    </div>
                </div>
                
                <!-- Insufficient Balance Warning -->
                <div x-show="walletBalance < (selectedLevel?.price || 0)" 
                     class="glass rounded-xl p-3 mb-4 border border-red-500/30 bg-red-500/10">
                    <div class="flex items-center gap-2 text-red-400">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span class="text-sm">Insufficient balance. Please deposit funds.</span>
                    </div>
                </div>
                
                <!-- Benefits Preview -->
                <div class="glass rounded-xl p-3 mb-6">
                    <p class="text-xs text-gray-400 mb-2">You'll receive:</p>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-1">
                            <i class="fas fa-coins text-gold-400 text-xs"></i>
                            <span class="text-sm">$<span x-text="selectedLevel?.dailyIncome.toFixed(2)"></span>/day</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="fas fa-tasks text-neon-purple text-xs"></i>
                            <span class="text-sm" x-text="selectedLevel?.tasks + ' tasks'"></span>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex gap-3">
                    <button @click="closeModal()" 
                            class="flex-1 py-3.5 rounded-xl font-semibold bg-gray-700 hover:bg-gray-600 transition-colors">
                        Cancel
                    </button>
                    <button @click="confirmUpgrade()" 
                            class="flex-1 py-3.5 rounded-xl font-bold text-dark-900 transition-all duration-300 flex items-center justify-center gap-2"
                            :class="walletBalance >= (selectedLevel?.price || 0) ? 'btn-gold btn-gold-pulse hover:scale-[1.02]' : 'bg-gray-600 text-gray-400 cursor-not-allowed'"
                            :disabled="walletBalance < (selectedLevel?.price || 0)">
                        <i class="fas fa-check"></i>
                        <span>Confirm</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ==================== BOTTOM NAVIGATION ==================== -->
    <nav class="fixed bottom-0 left-0 right-0 z-40 px-4 pb-4">
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
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-list-check text-xl"></i>
                    <span class="text-[10px] font-medium">Tasks</span>
                </a>
                
                <!-- Level (Center - Larger) - ACTIVE -->
                <a href="<?php echo e(url('/level')); ?>" 
                   class="relative flex flex-col items-center gap-1 px-4 py-2 -mt-8">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-gold-400 via-gold-500 to-gold-600 flex items-center justify-center shadow-lg animate-glow-gold">
                        <i class="fas fa-crown text-2xl text-dark-900"></i>
                    </div>
                    <span class="text-[10px] font-medium text-gold-400">Level</span>
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
<?php /**PATH /home/saeed/Documents/wealthreel-v2/resources/views/level.blade.php ENDPATH**/ ?>