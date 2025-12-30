<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My Team - Madhav Cinema</title>
    
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
        
        /* Level Tab */
        .level-tab {
            transition: all 0.3s ease;
        }
        
        .level-tab.active {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.3) 0%, rgba(168, 85, 247, 0.3) 100%);
            border-color: rgba(245, 158, 11, 0.5);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        }
        
        /* Member Card */
        .member-card {
            transition: all 0.3s ease;
        }
        
        .member-card:hover {
            transform: translateX(5px);
            border-color: rgba(245, 158, 11, 0.3);
        }
        
        /* VIP Badge */
        .vip-badge {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 4px;
        }
        
        /* Floating Button */
        .floating-btn {
            background: linear-gradient(135deg, #f59e0b 0%, #a855f7 100%);
            animation: glow-gold 2s ease-in-out infinite;
        }
        
        /* Glow Gold */
        .glow-gold {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.3), 0 0 60px rgba(245, 158, 11, 0.1);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-24" 
      x-data="{ 
          currentLevel: 1,
          totalMembers: 125,
          totalCommission: 450.50,
          levelStats: {
              1: { count: 45, commission: 280.00, label: 'Direct' },
              2: { count: 52, commission: 120.50, label: 'Level 2' },
              3: { count: 28, commission: 50.00, label: 'Level 3' }
          },
          members: {
              1: [
                  { id: 1, name: 'James Wilson', avatar: 'JW', vip: 3, commission: 85.00, date: '2024-12-15' },
                  { id: 2, name: 'Sarah Chen', avatar: 'SC', vip: 5, commission: 120.50, date: '2024-12-10' },
                  { id: 3, name: 'Mike Johnson', avatar: 'MJ', vip: 2, commission: 45.00, date: '2024-12-05' },
                  { id: 4, name: 'Emily Davis', avatar: 'ED', vip: 4, commission: 29.50, date: '2024-11-28' }
              ],
              2: [
                  { id: 5, name: 'Alex Brown', avatar: 'AB', vip: 2, commission: 35.00, date: '2024-12-12' },
                  { id: 6, name: 'Lisa Wang', avatar: 'LW', vip: 3, commission: 42.50, date: '2024-12-08' },
                  { id: 7, name: 'Tom Miller', avatar: 'TM', vip: 1, commission: 28.00, date: '2024-12-01' },
                  { id: 8, name: 'Nina Patel', avatar: 'NP', vip: 2, commission: 15.00, date: '2024-11-25' }
              ],
              3: [
                  { id: 9, name: 'Chris Lee', avatar: 'CL', vip: 1, commission: 18.00, date: '2024-12-14' },
                  { id: 10, name: 'Diana Ross', avatar: 'DR', vip: 2, commission: 12.50, date: '2024-12-06' },
                  { id: 11, name: 'Kevin Hart', avatar: 'KH', vip: 1, commission: 10.00, date: '2024-11-30' },
                  { id: 12, name: 'Amy Zhang', avatar: 'AZ', vip: 1, commission: 9.50, date: '2024-11-20' }
              ]
          },
          getVipColor(vip) {
              const colors = {
                  1: 'from-gray-400 to-gray-500',
                  2: 'from-green-400 to-green-600',
                  3: 'from-blue-400 to-blue-600',
                  4: 'from-purple-400 to-purple-600',
                  5: 'from-yellow-400 to-yellow-600'
              };
              return colors[vip] || colors[1];
          }
      }">
    
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
                <a href="{{ url('/me') }}" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">My Team</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-chart-line text-lg"></i>
                </button>
            </div>
        </header>
        
        <!-- Hero Stats Card -->
        <section class="px-5 py-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden glow-gold">
                <div class="absolute inset-0 shimmer"></div>
                
                <!-- Decorative -->
                <div class="absolute top-4 right-4 opacity-10">
                    <i class="fas fa-users text-5xl text-gold-400"></i>
                </div>
                
                <div class="relative z-10">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center">
                            <i class="fas fa-crown text-dark-900"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Team Leader</p>
                            <p class="font-semibold text-white">Premium Account</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass rounded-2xl p-4 text-center">
                            <p class="text-3xl font-bold text-gold-gradient font-playfair" x-text="totalMembers"></p>
                            <p class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-users mr-1"></i>Total Members
                            </p>
                        </div>
                        <div class="glass rounded-2xl p-4 text-center">
                            <p class="text-3xl font-bold text-green-400 font-playfair">$<span x-text="totalCommission.toFixed(2)"></span></p>
                            <p class="text-xs text-gray-400 mt-1">
                                <i class="fas fa-coins mr-1"></i>Total Commission
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Level Tabs -->
        <section class="px-5 mb-4">
            <div class="glass rounded-2xl p-1.5 flex gap-1">
                <template x-for="level in [1, 2, 3]" :key="level">
                    <button 
                        @click="currentLevel = level"
                        class="level-tab flex-1 py-3 px-4 rounded-xl font-semibold text-sm transition-all"
                        :class="currentLevel === level ? 'active text-white' : 'text-gray-400 hover:text-white'">
                        <span x-text="level === 1 ? 'Level 1 (Direct)' : 'Level ' + level"></span>
                        <span class="block text-xs mt-0.5 opacity-70" x-text="levelStats[level].count + ' members'"></span>
                    </button>
                </template>
            </div>
        </section>
        
        <!-- Level Stats -->
        <section class="px-5 mb-4">
            <div class="flex items-center justify-between glass rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-gold-400 to-neon-purple flex items-center justify-center">
                        <span class="font-bold text-dark-900" x-text="currentLevel"></span>
                    </div>
                    <div>
                        <p class="font-semibold" x-text="'Level ' + currentLevel + ' Team'"></p>
                        <p class="text-xs text-gray-400" x-text="levelStats[currentLevel].count + ' active members'"></p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-lg font-bold text-green-400">$<span x-text="levelStats[currentLevel].commission.toFixed(2)"></span></p>
                    <p class="text-xs text-gray-400">Commission</p>
                </div>
            </div>
        </section>
        
        <!-- Members List -->
        <section class="px-5 space-y-3">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider flex items-center justify-between">
                <span>Team Members</span>
                <span class="text-gold-400" x-text="'Level ' + currentLevel"></span>
            </h3>
            
            <template x-for="member in members[currentLevel]" :key="member.id">
                <div class="member-card glass rounded-2xl p-4 flex items-center justify-between">
                    <!-- Left: Avatar + Info -->
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br" 
                                 :class="getVipColor(member.vip)"
                                 style="display: flex; align-items: center; justify-content: center;">
                                <span class="font-bold text-white text-sm" x-text="member.avatar"></span>
                            </div>
                            <div class="absolute -bottom-1 -right-1 vip-badge text-white font-bold">
                                V<span x-text="member.vip"></span>
                            </div>
                        </div>
                        <div>
                            <p class="font-semibold text-white" x-text="member.name"></p>
                            <p class="text-xs text-gray-400 flex items-center gap-1">
                                <i class="fas fa-calendar-alt"></i>
                                <span x-text="member.date"></span>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Right: Commission -->
                    <div class="text-right">
                        <p class="font-bold text-green-400">+$<span x-text="member.commission.toFixed(2)"></span></p>
                        <p class="text-xs text-gray-500">Earned</p>
                    </div>
                </div>
            </template>
            
            <!-- Empty State (if no members) -->
            <div x-show="members[currentLevel].length === 0" class="glass rounded-2xl p-8 text-center">
                <i class="fas fa-users-slash text-4xl text-gray-600 mb-4"></i>
                <p class="text-gray-400">No members at this level yet</p>
                <p class="text-xs text-gray-500 mt-1">Invite friends to grow your team!</p>
            </div>
        </section>
        
        <!-- Commission Breakdown -->
        <section class="px-5 mt-6">
            <div class="glass rounded-2xl p-4">
                <h4 class="text-sm font-semibold text-gray-400 mb-3 flex items-center gap-2">
                    <i class="fas fa-percent text-gold-400"></i>
                    Commission Rates
                </h4>
                <div class="space-y-2">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-400">Level 1 (Direct)</span>
                        <span class="font-bold text-gold-400">30%</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-400">Level 2</span>
                        <span class="font-bold text-neon-purple">20%</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-400">Level 3</span>
                        <span class="font-bold text-neon-pink">10%</span>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
    
    <!-- Floating Invite Button -->
    <a href="{{ url('/invite') }}" 
       class="floating-btn fixed bottom-8 left-1/2 -translate-x-1/2 px-8 py-4 rounded-full font-bold text-white flex items-center gap-3 z-50 shadow-2xl hover:scale-105 transition-transform">
        <i class="fas fa-user-plus"></i>
        <span>Invite Member</span>
    </a>
    
</body>
</html>
