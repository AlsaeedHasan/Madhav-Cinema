<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Notifications - Madhav Cinema</title>
    
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
        
        /* Animated Background Orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.5;
            animation: float 8s ease-in-out infinite;
        }
        
        /* Tab Styles */
        .tab-btn {
            transition: all 0.3s ease;
        }
        
        .tab-btn.active {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.3) 0%, rgba(168, 85, 247, 0.3) 100%);
            border-color: rgba(245, 158, 11, 0.5);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        }
        
        /* Notification Card */
        .notification-card {
            transition: all 0.3s ease;
        }
        
        .notification-card:hover {
            transform: translateX(5px);
            border-color: rgba(245, 158, 11, 0.3);
        }
        
        /* Unread Dot */
        .unread-dot {
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(1.2); }
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          currentTab: 'system',
          systemNotices: [
              { id: 1, icon: 'fa-bullhorn', title: 'System Maintenance', preview: 'Scheduled maintenance on Dec 31st from 2:00 AM to 4:00 AM UTC. Please plan accordingly.', date: '2024-12-29', unread: true },
              { id: 2, icon: 'fa-gift', title: 'New Year Bonus Event', preview: 'Celebrate 2025 with us! Double rewards on all investments from Jan 1-3.', date: '2024-12-28', unread: true },
              { id: 3, icon: 'fa-shield-halved', title: 'Security Update', preview: 'We have enhanced our security protocols. Please update your password.', date: '2024-12-25', unread: false },
              { id: 4, icon: 'fa-star', title: 'VIP Benefits Upgraded', preview: 'VIP members now enjoy additional 5% bonus on all earnings.', date: '2024-12-20', unread: false },
              { id: 5, icon: 'fa-film', title: 'New Movies Added', preview: '10 new blockbuster movies available for investment. Check them out!', date: '2024-12-18', unread: false }
          ],
          activities: [
              { id: 1, icon: 'fa-coins', title: 'Daily Bonus Received', amount: '+$12.50', date: '2024-12-30 09:00', type: 'bonus' },
              { id: 2, icon: 'fa-arrow-up', title: 'Withdrawal Completed', amount: '-$500.00', date: '2024-12-29 15:30', type: 'withdraw' },
              { id: 3, icon: 'fa-users', title: 'Team Commission', amount: '+$28.00', date: '2024-12-29 10:00', type: 'commission' },
              { id: 4, icon: 'fa-play-circle', title: 'Task Completed', amount: '+$5.00', date: '2024-12-28 14:20', type: 'task' },
              { id: 5, icon: 'fa-arrow-down', title: 'Recharge Successful', amount: '+$200.00', date: '2024-12-28 11:00', type: 'recharge' },
              { id: 6, icon: 'fa-crown', title: 'VIP Upgrade', amount: 'VIP 3', date: '2024-12-27 16:45', type: 'vip' }
          ],
          getActivityColor(type) {
              const colors = {
                  'bonus': 'text-green-400 bg-green-500/20',
                  'withdraw': 'text-red-400 bg-red-500/20',
                  'commission': 'text-gold-400 bg-gold-500/20',
                  'task': 'text-blue-400 bg-blue-500/20',
                  'recharge': 'text-cyan-400 bg-cyan-500/20',
                  'vip': 'text-purple-400 bg-purple-500/20'
              };
              return colors[type] || 'text-gray-400 bg-gray-500/20';
          },
          getAmountColor(type) {
              if (type === 'withdraw') return 'text-red-400';
              if (type === 'vip') return 'text-purple-400';
              return 'text-green-400';
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
                <a href="{{ url('/') }}" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Notification Center</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-check-double text-lg"></i>
                </button>
            </div>
        </header>
        
        <!-- Tabs -->
        <section class="px-5 py-4">
            <div class="glass rounded-2xl p-1.5 flex gap-1">
                <button 
                    @click="currentTab = 'system'"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="currentTab === 'system' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-bullhorn"></i>
                    <span>System Notice</span>
                    <span class="unread-dot" x-show="systemNotices.filter(n => n.unread).length > 0"></span>
                </button>
                <button 
                    @click="currentTab = 'activity'"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="currentTab === 'activity' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-clock-rotate-left"></i>
                    <span>My Activity</span>
                </button>
            </div>
        </section>
        
        <!-- System Notices -->
        <section x-show="currentTab === 'system'" class="px-5 space-y-3">
            <template x-for="notice in systemNotices" :key="notice.id">
                <div class="notification-card glass rounded-2xl p-4 flex gap-4">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl bg-gold-500/20 flex items-center justify-center flex-shrink-0 relative">
                        <i class="fas text-gold-400" :class="notice.icon"></i>
                        <div x-show="notice.unread" class="unread-dot absolute -top-1 -right-1"></div>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1 min-w-0">
                        <div class="flex items-start justify-between gap-2 mb-1">
                            <h3 class="font-semibold text-white" :class="notice.unread ? '' : 'text-gray-300'" x-text="notice.title"></h3>
                            <span class="text-xs text-gray-500 flex-shrink-0" x-text="notice.date"></span>
                        </div>
                        <p class="text-sm text-gray-400 line-clamp-2" x-text="notice.preview"></p>
                    </div>
                </div>
            </template>
            
            <!-- Empty State -->
            <div x-show="systemNotices.length === 0" class="glass rounded-2xl p-12 text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-gray-800 flex items-center justify-center mb-4">
                    <i class="fas fa-bell-slash text-3xl text-gray-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-400 mb-2">No Notifications</h3>
                <p class="text-sm text-gray-500">You're all caught up! Check back later for updates.</p>
            </div>
        </section>
        
        <!-- Activity -->
        <section x-show="currentTab === 'activity'" class="px-5 space-y-3">
            <template x-for="activity in activities" :key="activity.id">
                <div class="notification-card glass rounded-2xl p-4 flex items-center gap-4">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0"
                         :class="getActivityColor(activity.type).split(' ')[1]">
                        <i class="fas" :class="[activity.icon, getActivityColor(activity.type).split(' ')[0]]"></i>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1 min-w-0">
                        <h3 class="font-semibold text-white" x-text="activity.title"></h3>
                        <p class="text-xs text-gray-500" x-text="activity.date"></p>
                    </div>
                    
                    <!-- Amount -->
                    <div class="text-right">
                        <span class="font-bold" :class="getAmountColor(activity.type)" x-text="activity.amount"></span>
                    </div>
                </div>
            </template>
            
            <!-- Load More -->
            <button class="w-full glass rounded-2xl py-4 text-center text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-chevron-down mr-2"></i>
                Load More
            </button>
            
            <!-- Empty State -->
            <div x-show="activities.length === 0" class="glass rounded-2xl p-12 text-center">
                <div class="w-20 h-20 mx-auto rounded-full bg-gray-800 flex items-center justify-center mb-4">
                    <i class="fas fa-clock-rotate-left text-3xl text-gray-600"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-400 mb-2">No Activity Yet</h3>
                <p class="text-sm text-gray-500">Your recent activities will appear here.</p>
            </div>
        </section>
        
    </div>
    
</body>
</html>
