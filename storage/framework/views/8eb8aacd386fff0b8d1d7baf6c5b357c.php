<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Earnings & Wallet - Madhav Cinema</title>
    
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
                        'glow-green': 'glow-green 2s ease-in-out infinite',
                        'glow-pink': 'glow-pink 2s ease-in-out infinite',
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
                        'glow-green': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(16, 185, 129, 0.4)' },
                            '50%': { boxShadow: '0 0 30px rgba(16, 185, 129, 0.6)' },
                        },
                        'glow-pink': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(236, 72, 153, 0.4)' },
                            '50%': { boxShadow: '0 0 30px rgba(236, 72, 153, 0.6)' },
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
            height: 6px;
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
        
        /* Tab Active Glow */
        .tab-active {
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.2) 0%, rgba(236, 72, 153, 0.2) 100%);
            border: 1px solid rgba(168, 85, 247, 0.5);
            color: #a855f7;
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
        }
        
        /* Button Gradients */
        .btn-recharge {
            background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%);
        }
        
        .btn-withdraw {
            background: linear-gradient(135deg, #ec4899 0%, #ef4444 100%);
        }
        
        /* Transaction Icon Colors */
        .icon-deposit {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(6, 182, 212, 0.2) 100%);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }
        
        .icon-withdraw {
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.2) 0%, rgba(239, 68, 68, 0.2) 100%);
            border: 1px solid rgba(236, 72, 153, 0.3);
        }
        
        .icon-task {
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.2) 0%, rgba(59, 130, 246, 0.2) 100%);
            border: 1px solid rgba(168, 85, 247, 0.3);
        }
        
        .icon-team {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.2) 0%, rgba(234, 179, 8, 0.2) 100%);
            border: 1px solid rgba(245, 158, 11, 0.3);
        }
        
        /* Hide scrollbar for tabs */
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
          currentTab: 'all',
          totalBalance: 1245.50,
          todayProfit: 28.40,
          totalRevenue: 3450.00,
          teamCommission: 156.80,
          tabs: [
              { id: 'all', label: 'All', icon: 'fa-list' },
              { id: 'deposit', label: 'Deposit', icon: 'fa-arrow-down' },
              { id: 'withdraw', label: 'Withdraw', icon: 'fa-arrow-up' },
              { id: 'task', label: 'Task Income', icon: 'fa-check-circle' },
              { id: 'team', label: 'Team Reward', icon: 'fa-users' }
          ],
          transactions: [
              { id: 1, type: 'deposit', title: 'Wallet Recharge', description: 'USDT Deposit', amount: 500.00, isIncome: true, date: '2024-12-30', time: '14:32', icon: 'fa-arrow-down', status: 'completed' },
              { id: 2, type: 'task', title: 'VIP 2 Task Revenue', description: 'Dune: Part Two', amount: 0.35, isIncome: true, date: '2024-12-30', time: '13:45', icon: 'fa-film', status: 'completed' },
              { id: 3, type: 'task', title: 'VIP 2 Task Revenue', description: 'Oppenheimer', amount: 0.24, isIncome: true, date: '2024-12-30', time: '12:20', icon: 'fa-film', status: 'completed' },
              { id: 4, type: 'team', title: 'Team Commission', description: 'Level 1 Referral Bonus', amount: 12.50, isIncome: true, date: '2024-12-29', time: '18:00', icon: 'fa-users', status: 'completed' },
              { id: 5, type: 'withdraw', title: 'Withdrawal Request', description: 'To Bank Account', amount: 200.00, isIncome: false, date: '2024-12-29', time: '10:15', icon: 'fa-arrow-up', status: 'completed' },
              { id: 6, type: 'task', title: 'VIP 2 Task Revenue', description: 'The Batman', amount: 0.28, isIncome: true, date: '2024-12-28', time: '16:30', icon: 'fa-film', status: 'completed' },
              { id: 7, type: 'deposit', title: 'VIP Upgrade', description: 'VIP 2 Package Purchase', amount: 120.00, isIncome: false, date: '2024-12-28', time: '09:00', icon: 'fa-crown', status: 'completed' },
              { id: 8, type: 'team', title: 'Team Commission', description: 'Level 2 Referral Bonus', amount: 5.25, isIncome: true, date: '2024-12-27', time: '20:45', icon: 'fa-users', status: 'completed' }
          ],
          get filteredTransactions() {
              if (this.currentTab === 'all') return this.transactions;
              return this.transactions.filter(t => t.type === this.currentTab);
          },
          getIconClass(type) {
              const classes = {
                  'deposit': 'icon-deposit',
                  'withdraw': 'icon-withdraw',
                  'task': 'icon-task',
                  'team': 'icon-team'
              };
              return classes[type] || 'icon-task';
          },
          getIconColor(type) {
              const colors = {
                  'deposit': 'text-green-400',
                  'withdraw': 'text-pink-400',
                  'task': 'text-neon-purple',
                  'team': 'text-gold-400'
              };
              return colors[type] || 'text-gray-400';
          }
      }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-purple-600/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-green-500/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
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
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Earnings & Wallet</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-bell text-lg"></i>
                </button>
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-question-circle text-lg"></i>
                </button>
            </div>
        </header>
        
        <!-- Total Assets Card (Hero) -->
        <section class="px-5 py-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden">
                <div class="absolute inset-0 shimmer"></div>
                
                <!-- Decorative Elements -->
                <div class="absolute top-4 right-4 opacity-10">
                    <i class="fas fa-wallet text-6xl text-gold-400"></i>
                </div>
                
                <div class="relative z-10">
                    <!-- Main Balance -->
                    <div class="text-center mb-6">
                        <p class="text-gray-400 text-sm mb-2 flex items-center justify-center gap-2">
                            <i class="fas fa-eye text-xs"></i>
                            Total Balance
                        </p>
                        <h2 class="text-5xl font-bold text-gold-gradient font-playfair mb-1">
                            $<span x-text="totalBalance.toLocaleString('en-US', { minimumFractionDigits: 2 })"></span>
                        </h2>
                        <p class="text-green-400 text-sm flex items-center justify-center gap-1">
                            <i class="fas fa-arrow-up text-xs"></i>
                            <span>+2.4% from yesterday</span>
                        </p>
                    </div>
                    
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-3 gap-3 mb-6">
                        <!-- Today's Profit -->
                        <div class="glass rounded-2xl p-4 text-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-chart-line text-white text-sm"></i>
                            </div>
                            <p class="text-lg font-bold text-green-400">+$<span x-text="todayProfit.toFixed(2)"></span></p>
                            <p class="text-[10px] text-gray-500 uppercase tracking-wider">Today</p>
                        </div>
                        
                        <!-- Total Revenue -->
                        <div class="glass rounded-2xl p-4 text-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-coins text-white text-sm"></i>
                            </div>
                            <p class="text-lg font-bold text-purple-gradient">$<span x-text="totalRevenue.toLocaleString()"></span></p>
                            <p class="text-[10px] text-gray-500 uppercase tracking-wider">Revenue</p>
                        </div>
                        
                        <!-- Team Commission -->
                        <div class="glass rounded-2xl p-4 text-center">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center mx-auto mb-2">
                                <i class="fas fa-users text-dark-900 text-sm"></i>
                            </div>
                            <p class="text-lg font-bold text-gold-gradient">$<span x-text="teamCommission.toFixed(2)"></span></p>
                            <p class="text-[10px] text-gray-500 uppercase tracking-wider">Team</p>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="grid grid-cols-2 gap-4">
                        <button class="btn-recharge py-4 rounded-2xl font-bold text-white flex items-center justify-center gap-2 hover:scale-[1.02] transition-transform animate-glow-green">
                            <i class="fas fa-plus-circle"></i>
                            <span>Recharge</span>
                        </button>
                        <button class="btn-withdraw py-4 rounded-2xl font-bold text-white flex items-center justify-center gap-2 hover:scale-[1.02] transition-transform animate-glow-pink">
                            <i class="fas fa-arrow-up-from-bracket"></i>
                            <span>Withdraw</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Transaction Filters (Tabs) -->
        <section class="px-5 mb-4">
            <div class="flex gap-2 overflow-x-auto hide-scrollbar pb-2">
                <template x-for="tab in tabs" :key="tab.id">
                    <button 
                        @click="currentTab = tab.id"
                        class="flex items-center gap-2 px-4 py-2.5 rounded-xl whitespace-nowrap transition-all duration-300"
                        :class="currentTab === tab.id ? 'tab-active' : 'glass text-gray-400 hover:text-white'">
                        <i class="fas text-sm" :class="tab.icon"></i>
                        <span class="text-sm font-medium" x-text="tab.label"></span>
                    </button>
                </template>
            </div>
        </section>
        
        <!-- Section Title -->
        <div class="px-5 mb-4 flex items-center justify-between">
            <h2 class="text-lg font-semibold flex items-center gap-2">
                <i class="fas fa-history text-neon-purple"></i>
                <span>Transaction History</span>
            </h2>
            <span class="text-sm text-gray-500" x-text="filteredTransactions.length + ' records'"></span>
        </div>
        
        <!-- Transaction History List -->
        <section class="px-5 pb-8">
            <div class="space-y-3">
                <template x-for="transaction in filteredTransactions" :key="transaction.id">
                    <div class="glass rounded-2xl p-4 flex items-center gap-4 hover:bg-white/[0.03] transition-colors">
                        <!-- Icon -->
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0"
                             :class="getIconClass(transaction.type)">
                            <i class="fas text-lg" :class="[transaction.icon, getIconColor(transaction.type)]"></i>
                        </div>
                        
                        <!-- Details -->
                        <div class="flex-1 min-w-0">
                            <h4 class="font-semibold text-white truncate" x-text="transaction.title"></h4>
                            <p class="text-sm text-gray-500 truncate" x-text="transaction.description"></p>
                            <p class="text-xs text-gray-600 mt-1">
                                <span x-text="transaction.date"></span>
                                <span class="mx-1">•</span>
                                <span x-text="transaction.time"></span>
                            </p>
                        </div>
                        
                        <!-- Amount -->
                        <div class="text-right flex-shrink-0">
                            <p class="text-lg font-bold"
                               :class="transaction.isIncome ? 'text-green-400' : 'text-red-400'">
                                <span x-text="transaction.isIncome ? '+' : '-'"></span>$<span x-text="transaction.amount.toFixed(2)"></span>
                            </p>
                            <span class="text-xs px-2 py-0.5 rounded-full"
                                  :class="transaction.status === 'completed' ? 'bg-green-500/20 text-green-400' : 'bg-yellow-500/20 text-yellow-400'"
                                  x-text="transaction.status === 'completed' ? 'Completed' : 'Pending'"></span>
                        </div>
                    </div>
                </template>
                
                <!-- Empty State -->
                <div x-show="filteredTransactions.length === 0" class="glass rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 rounded-full bg-dark-700 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-inbox text-3xl text-gray-600"></i>
                    </div>
                    <h4 class="text-gray-400 font-medium mb-1">No transactions found</h4>
                    <p class="text-sm text-gray-600">Transactions of this type will appear here</p>
                </div>
            </div>
            
            <!-- Load More Button -->
            <div x-show="filteredTransactions.length > 0" class="mt-6 text-center">
                <button class="glass px-6 py-3 rounded-xl text-gray-400 hover:text-white hover:bg-white/[0.05] transition-all inline-flex items-center gap-2">
                    <i class="fas fa-arrow-down text-sm"></i>
                    <span>Load More</span>
                </button>
            </div>
        </section>
        
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
                
                <!-- Level (Center - Larger) -->
                <a href="<?php echo e(url('/level')); ?>" 
                   class="relative flex flex-col items-center gap-1 px-4 py-2 -mt-8">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 via-pink-500 to-gold-500 flex items-center justify-center shadow-lg animate-pulse-glow">
                        <i class="fas fa-layer-group text-2xl text-white"></i>
                    </div>
                    <span class="text-[10px] font-medium text-gray-500">Level</span>
                </a>
                
                <!-- Earnings - ACTIVE -->
                <a href="<?php echo e(url('/earnings')); ?>" 
                   class="nav-active relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
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
<?php /**PATH /home/saeed/Documents/wealthreel-v2/resources/views/earnings.blade.php ENDPATH**/ ?>