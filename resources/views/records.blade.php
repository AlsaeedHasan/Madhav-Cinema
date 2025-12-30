<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Transaction Records - Madhav Cinema</title>
    
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
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
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
            height: 6px;
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
        
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.5;
            animation: float 8s ease-in-out infinite;
        }
        
        /* Scrollable Tabs */
        .tabs-container {
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        .tabs-container::-webkit-scrollbar {
            display: none;
        }
        
        .tab-btn {
            transition: all 0.3s ease;
            white-space: nowrap;
        }
        
        .tab-btn.active {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.3) 0%, rgba(168, 85, 247, 0.3) 100%);
            border-color: rgba(245, 158, 11, 0.5);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        }
        
        .record-card {
            transition: all 0.3s ease;
        }
        
        .record-card:hover {
            transform: translateX(5px);
            border-color: rgba(245, 158, 11, 0.3);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          currentTab: 'all',
          tabs: [
              { id: 'all', label: 'All', icon: 'fa-list' },
              { id: 'recharge', label: 'Recharge', icon: 'fa-arrow-down' },
              { id: 'withdraw', label: 'Withdraw', icon: 'fa-arrow-up' },
              { id: 'investment', label: 'Investment', icon: 'fa-chart-line' },
              { id: 'rewards', label: 'Rewards', icon: 'fa-gift' }
          ],
          records: [
              { id: 1, type: 'recharge', title: 'Deposit via USDT', amount: '+$500.00', date: '2024-12-30 14:30', status: 'completed', icon: 'fa-arrow-down', color: 'text-cyan-400 bg-cyan-500/20' },
              { id: 2, type: 'rewards', title: 'Daily Login Bonus', amount: '+$2.00', date: '2024-12-30 09:00', status: 'completed', icon: 'fa-gift', color: 'text-pink-400 bg-pink-500/20' },
              { id: 3, type: 'investment', title: 'Plan B Investment', amount: '-$200.00', date: '2024-12-29 16:45', status: 'completed', icon: 'fa-chart-line', color: 'text-purple-400 bg-purple-500/20' },
              { id: 4, type: 'rewards', title: 'Team Commission Lvl 1', amount: '+$15.50', date: '2024-12-29 12:00', status: 'completed', icon: 'fa-users', color: 'text-gold-400 bg-gold-500/20' },
              { id: 5, type: 'withdraw', title: 'Withdrawal to USDT', amount: '-$300.00', date: '2024-12-28 18:20', status: 'completed', icon: 'fa-arrow-up', color: 'text-red-400 bg-red-500/20' },
              { id: 6, type: 'rewards', title: 'Lucky Spin Reward', amount: '+$5.00', date: '2024-12-28 15:00', status: 'completed', icon: 'fa-dice', color: 'text-green-400 bg-green-500/20' },
              { id: 7, type: 'investment', title: 'Plan A Return', amount: '+$7.50', date: '2024-12-28 00:00', status: 'completed', icon: 'fa-coins', color: 'text-gold-400 bg-gold-500/20' },
              { id: 8, type: 'recharge', title: 'Deposit via Bank', amount: '+$1,000.00', date: '2024-12-27 10:15', status: 'completed', icon: 'fa-arrow-down', color: 'text-cyan-400 bg-cyan-500/20' },
              { id: 9, type: 'withdraw', title: 'Withdrawal to Bank', amount: '-$150.00', date: '2024-12-26 14:30', status: 'pending', icon: 'fa-clock', color: 'text-yellow-400 bg-yellow-500/20' },
              { id: 10, type: 'rewards', title: 'VIP Upgrade Bonus', amount: '+$50.00', date: '2024-12-25 12:00', status: 'completed', icon: 'fa-crown', color: 'text-gold-400 bg-gold-500/20' }
          ],
          get filteredRecords() {
              if (this.currentTab === 'all') return this.records;
              return this.records.filter(r => r.type === this.currentTab);
          },
          getStatusBadge(status) {
              if (status === 'completed') return 'bg-green-500/20 text-green-400';
              if (status === 'pending') return 'bg-yellow-500/20 text-yellow-400';
              return 'bg-red-500/20 text-red-400';
          }
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
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Transaction Records</h1>
            </div>
            <button class="p-2 text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-filter text-lg"></i>
            </button>
        </header>
        
        <!-- Summary Cards -->
        <section class="px-5 py-4">
            <div class="grid grid-cols-2 gap-3">
                <div class="glass rounded-2xl p-4 text-center">
                    <p class="text-xs text-gray-400 mb-1">Total In</p>
                    <p class="text-xl font-bold text-green-400">+$1,580.00</p>
                </div>
                <div class="glass rounded-2xl p-4 text-center">
                    <p class="text-xs text-gray-400 mb-1">Total Out</p>
                    <p class="text-xl font-bold text-red-400">-$650.00</p>
                </div>
            </div>
        </section>
        
        <!-- Scrollable Tabs -->
        <section class="px-5 mb-4">
            <div class="tabs-container">
                <div class="glass rounded-2xl p-1.5 flex gap-1 min-w-max">
                    <template x-for="tab in tabs" :key="tab.id">
                        <button 
                            @click="currentTab = tab.id"
                            class="tab-btn py-2.5 px-4 rounded-xl font-semibold text-sm flex items-center gap-2"
                            :class="currentTab === tab.id ? 'active text-white' : 'text-gray-400 hover:text-white'">
                            <i class="fas" :class="tab.icon"></i>
                            <span x-text="tab.label"></span>
                        </button>
                    </template>
                </div>
            </div>
        </section>
        
        <!-- Records List -->
        <section class="px-5 space-y-3">
            <template x-for="record in filteredRecords" :key="record.id">
                <div class="record-card glass rounded-2xl p-4 flex items-center gap-4">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0"
                         :class="record.color.split(' ')[1]">
                        <i class="fas" :class="[record.icon, record.color.split(' ')[0]]"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <h3 class="font-semibold text-white truncate" x-text="record.title"></h3>
                            <span class="px-2 py-0.5 rounded-full text-xs font-medium flex-shrink-0"
                                  :class="getStatusBadge(record.status)"
                                  x-text="record.status"></span>
                        </div>
                        <p class="text-xs text-gray-500" x-text="record.date"></p>
                    </div>
                    
                    <!-- Amount -->
                    <div class="text-right flex-shrink-0">
                        <p class="font-bold" 
                           :class="record.amount.startsWith('+') ? 'text-green-400' : 'text-red-400'"
                           x-text="record.amount"></p>
                    </div>
                </div>
            </template>
            
            <!-- Empty State -->
            <div x-show="filteredRecords.length === 0" class="glass rounded-2xl p-12 text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-gray-800 flex items-center justify-center mb-4">
                    <i class="fas fa-receipt text-3xl text-gray-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-400 mb-2">No Records Found</h3>
                <p class="text-sm text-gray-500">Transactions will appear here once completed.</p>
            </div>
            
            <!-- Load More -->
            <button x-show="filteredRecords.length > 0" 
                    class="w-full glass rounded-2xl py-4 text-center text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-chevron-down mr-2"></i>
                Load More
            </button>
        </section>
        
        <!-- Quick Actions -->
        <section class="px-5 mt-6">
            <div class="grid grid-cols-2 gap-3">
                <a href="{{ url('/recharge') }}" class="glass rounded-2xl p-4 flex items-center gap-3 hover:bg-white/10 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-green-500/20 flex items-center justify-center">
                        <i class="fas fa-plus text-green-400"></i>
                    </div>
                    <span class="font-semibold text-white">Recharge</span>
                </a>
                <a href="{{ url('/withdraw') }}" class="glass rounded-2xl p-4 flex items-center gap-3 hover:bg-white/10 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-red-500/20 flex items-center justify-center">
                        <i class="fas fa-minus text-red-400"></i>
                    </div>
                    <span class="font-semibold text-white">Withdraw</span>
                </a>
            </div>
        </section>
        
    </div>
    
</body>
</html>
