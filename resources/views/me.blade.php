<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My Profile - Madhav Cinema</title>
    
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
                        'bounce-in': 'bounce-in 0.5s ease-out',
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
                            '0%, 100%': { boxShadow: '0 0 20px rgba(245, 158, 11, 0.4)' },
                            '50%': { boxShadow: '0 0 35px rgba(245, 158, 11, 0.6)' },
                        },
                        'bounce-in': {
                            '0%': { transform: 'scale(0.9)', opacity: '0' },
                            '50%': { transform: 'scale(1.05)' },
                            '100%': { transform: 'scale(1)', opacity: '1' },
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
        
        /* Avatar Ring */
        .avatar-ring {
            background: linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #a855f7 100%);
            padding: 4px;
        }
        
        .avatar-ring-vip {
            animation: glow-gold 2s ease-in-out infinite;
        }
        
        /* VIP Badge 3D Effect */
        .vip-badge-3d {
            background: linear-gradient(135deg, #fcd34d 0%, #f59e0b 50%, #d97706 100%);
            box-shadow: 
                0 4px 6px rgba(245, 158, 11, 0.3),
                0 1px 3px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
        
        /* Menu Item Hover */
        .menu-item {
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .menu-item:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(5px);
        }
        .menu-item:hover .menu-icon {
            transform: scale(1.1);
        }
        .menu-item:hover .menu-chevron {
            transform: translateX(3px);
            color: #a855f7;
        }
        
        /* Logout Button */
        .btn-logout {
            background: linear-gradient(135deg, #ef4444 0%, #ec4899 100%);
        }
        
        /* Copy Tooltip */
        .copy-tooltip {
            animation: bounce-in 0.5s ease-out;
        }
        
        /* Modal Overlay */
        .modal-overlay {
            background: rgba(10, 10, 15, 0.9);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-24" 
      x-data="{ 
          showLogoutModal: false,
          copied: false,
          user: {
              name: 'John Anderson',
              phone: '+1 234 **** 89',
              email: 'john.a***@gmail.com',
              vipLevel: 2,
              referralCode: 'MADHAV2025',
              avatar: 'https://placehold.co/200x200/1a1a25/gold?text=JA',
              joinDate: 'Dec 15, 2024',
              totalEarnings: 3450.00,
              teamSize: 12
          },
          copyCode() {
              navigator.clipboard.writeText(this.user.referralCode);
              this.copied = true;
              setTimeout(() => this.copied = false, 2000);
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
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">My Profile</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-cog text-lg"></i>
                </button>
                <button class="p-2 text-gray-400 hover:text-white transition-colors relative">
                    <i class="fas fa-bell text-lg"></i>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
            </div>
        </header>
        
        <!-- Profile Header Card -->
        <section class="px-5 py-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden">
                <div class="absolute inset-0 shimmer"></div>
                
                <!-- Decorative Crown -->
                <div class="absolute top-4 right-4 opacity-10">
                    <i class="fas fa-crown text-5xl text-gold-400"></i>
                </div>
                
                <div class="relative z-10">
                    <!-- Avatar & Basic Info -->
                    <div class="flex items-center gap-5 mb-6">
                        <!-- Avatar with Ring -->
                        <div class="avatar-ring avatar-ring-vip rounded-full flex-shrink-0">
                            <div class="w-20 h-20 rounded-full overflow-hidden bg-dark-700">
                                <img 
                                    :src="user.avatar" 
                                    :alt="user.name"
                                    class="w-full h-full object-cover"
                                    onerror="this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-gradient-to-br from-purple-500 to-pink-500\'><i class=\'fas fa-user text-2xl text-white\'></i></div>'"
                                >
                            </div>
                        </div>
                        
                        <!-- User Info -->
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h2 class="text-xl font-bold" x-text="user.name"></h2>
                                <!-- VIP Badge 3D -->
                                <span class="vip-badge-3d px-2.5 py-0.5 rounded-full text-xs font-bold text-dark-900 flex items-center gap-1">
                                    <i class="fas fa-crown text-[10px]"></i>
                                    <span x-text="'VIP ' + user.vipLevel"></span>
                                </span>
                            </div>
                            <p class="text-sm text-gray-400 flex items-center gap-2 mb-1">
                                <i class="fas fa-phone text-xs text-neon-purple"></i>
                                <span x-text="user.phone"></span>
                            </p>
                            <p class="text-xs text-gray-500 flex items-center gap-2">
                                <i class="fas fa-calendar text-xs"></i>
                                <span>Joined <span x-text="user.joinDate"></span></span>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Referral Code Box -->
                    <div class="glass rounded-2xl p-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-neon-purple to-neon-pink flex items-center justify-center">
                                <i class="fas fa-gift text-white"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Your Referral Code</p>
                                <p class="font-mono font-bold text-gold-gradient text-lg tracking-wider" x-text="user.referralCode"></p>
                            </div>
                        </div>
                        
                        <!-- Copy Button -->
                        <div class="relative">
                            <button 
                                @click="copyCode()"
                                class="w-12 h-12 rounded-xl glass flex items-center justify-center hover:bg-white/10 transition-all group">
                                <i class="fas fa-copy text-gray-400 group-hover:text-gold-400 transition-colors"></i>
                            </button>
                            
                            <!-- Copied Tooltip -->
                            <div 
                                x-show="copied"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 -translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="copy-tooltip absolute -top-10 left-1/2 -translate-x-1/2 bg-green-500 text-white text-xs font-semibold px-3 py-1.5 rounded-lg whitespace-nowrap">
                                <i class="fas fa-check mr-1"></i> Copied!
                                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 rotate-45 w-2 h-2 bg-green-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Quick Actions Grid -->
        <section class="px-5 mb-6">
            <div class="grid grid-cols-3 gap-3">
                <!-- Recharge -->
                <a href="{{ url('/earnings') }}" class="glass rounded-2xl p-4 text-center hover:bg-white/[0.08] transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-wallet text-white text-lg"></i>
                    </div>
                    <p class="text-sm font-medium text-white">Recharge</p>
                    <p class="text-xs text-gray-500">Add Funds</p>
                </a>
                
                <!-- Withdraw -->
                <a href="{{ url('/earnings') }}" class="glass rounded-2xl p-4 text-center hover:bg-white/[0.08] transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-pink-500 to-red-500 flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-money-bill-wave text-white text-lg"></i>
                    </div>
                    <p class="text-sm font-medium text-white">Withdraw</p>
                    <p class="text-xs text-gray-500">Cash Out</p>
                </a>
                
                <!-- Setup -->
                <a href="#" class="glass rounded-2xl p-4 text-center hover:bg-white/[0.08] transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-sliders text-white text-lg"></i>
                    </div>
                    <p class="text-sm font-medium text-white">Setup</p>
                    <p class="text-xs text-gray-500">Settings</p>
                </a>
            </div>
        </section>
        
        <!-- Stats Summary -->
        <section class="px-5 mb-6">
            <div class="glass rounded-2xl p-4 flex items-center justify-around">
                <div class="text-center">
                    <p class="text-2xl font-bold text-gold-gradient">$<span x-text="user.totalEarnings.toLocaleString()"></span></p>
                    <p class="text-xs text-gray-500">Total Earnings</p>
                </div>
                <div class="w-px h-10 bg-white/10"></div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-purple-gradient" x-text="user.teamSize"></p>
                    <p class="text-xs text-gray-500">Team Members</p>
                </div>
                <div class="w-px h-10 bg-white/10"></div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-400">VIP <span x-text="user.vipLevel"></span></p>
                    <p class="text-xs text-gray-500">Current Level</p>
                </div>
            </div>
        </section>
        
        <!-- Settings Menu -->
        <section class="px-5 mb-6">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3 px-1">Account Settings</h3>
            <div class="glass rounded-2xl overflow-hidden divide-y divide-white/5">
                
                <!-- My Team -->
                <a href="#" class="menu-item flex items-center gap-4 p-4">
                    <div class="menu-icon w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center transition-transform">
                        <i class="fas fa-users text-white"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">My Team</p>
                        <p class="text-xs text-gray-500">View your referrals & earnings</p>
                    </div>
                    <i class="menu-chevron fas fa-chevron-right text-gray-600 transition-all"></i>
                </a>
                
                <!-- Invite Friends -->
                <a href="#" class="menu-item flex items-center gap-4 p-4">
                    <div class="menu-icon w-10 h-10 rounded-xl bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center transition-transform">
                        <i class="fas fa-user-plus text-dark-900"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Invite Friends</p>
                        <p class="text-xs text-gray-500">Share & earn commission</p>
                    </div>
                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-0.5 rounded-full mr-2">HOT</span>
                    <i class="menu-chevron fas fa-chevron-right text-gray-600 transition-all"></i>
                </a>
                
                <!-- Change Password -->
                <a href="#" class="menu-item flex items-center gap-4 p-4">
                    <div class="menu-icon w-10 h-10 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center transition-transform">
                        <i class="fas fa-lock text-white"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Change Password</p>
                        <p class="text-xs text-gray-500">Update your security</p>
                    </div>
                    <i class="menu-chevron fas fa-chevron-right text-gray-600 transition-all"></i>
                </a>
                
                <!-- Bank Account -->
                <a href="#" class="menu-item flex items-center gap-4 p-4">
                    <div class="menu-icon w-10 h-10 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center transition-transform">
                        <i class="fas fa-building-columns text-white"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Bank Account</p>
                        <p class="text-xs text-gray-500">Manage withdrawal methods</p>
                    </div>
                    <i class="menu-chevron fas fa-chevron-right text-gray-600 transition-all"></i>
                </a>
                
                <!-- App Download -->
                <a href="#" class="menu-item flex items-center gap-4 p-4">
                    <div class="menu-icon w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center transition-transform">
                        <i class="fas fa-mobile-screen text-white"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">App Download</p>
                        <p class="text-xs text-gray-500">Get our mobile app</p>
                    </div>
                    <span class="bg-neon-purple/20 text-neon-purple text-xs font-semibold px-2 py-0.5 rounded-full mr-2">NEW</span>
                    <i class="menu-chevron fas fa-chevron-right text-gray-600 transition-all"></i>
                </a>
                
                <!-- Help Center -->
                <a href="#" class="menu-item flex items-center gap-4 p-4">
                    <div class="menu-icon w-10 h-10 rounded-xl bg-gradient-to-br from-gray-500 to-gray-600 flex items-center justify-center transition-transform">
                        <i class="fas fa-circle-question text-white"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Help Center</p>
                        <p class="text-xs text-gray-500">FAQs & Support</p>
                    </div>
                    <i class="menu-chevron fas fa-chevron-right text-gray-600 transition-all"></i>
                </a>
                
            </div>
        </section>
        
        <!-- Logout Button -->
        <section class="px-5 pb-8">
            <button 
                @click="showLogoutModal = true"
                class="btn-logout w-full py-4 rounded-2xl font-bold text-white flex items-center justify-center gap-3 hover:scale-[1.02] transition-transform">
                <i class="fas fa-right-from-bracket"></i>
                <span>Sign Out</span>
            </button>
            
            <!-- App Version -->
            <p class="text-center text-xs text-gray-600 mt-4">
                Madhav Cinema v1.0.0
            </p>
        </section>
        
    </div>
    
    <!-- ==================== LOGOUT CONFIRMATION MODAL ==================== -->
    <div x-show="showLogoutModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-5 modal-overlay"
         @click.self="showLogoutModal = false">
        
        <div x-show="showLogoutModal"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             class="glass-strong rounded-3xl p-6 w-full max-w-sm relative overflow-hidden">
            
            <div class="text-center">
                <!-- Icon -->
                <div class="w-20 h-20 rounded-full bg-gradient-to-br from-red-500 to-pink-500 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-right-from-bracket text-white text-3xl"></i>
                </div>
                
                <!-- Title -->
                <h3 class="text-2xl font-playfair font-bold mb-2">Sign Out?</h3>
                <p class="text-gray-400 mb-6">Are you sure you want to sign out of your account?</p>
                
                <!-- Buttons -->
                <div class="flex gap-3">
                    <button 
                        @click="showLogoutModal = false"
                        class="flex-1 py-3.5 rounded-xl font-semibold bg-gray-700 hover:bg-gray-600 transition-colors">
                        Cancel
                    </button>
                    <button 
                        @click="window.location.href = '/'"
                        class="flex-1 py-3.5 rounded-xl font-bold text-white btn-logout hover:scale-[1.02] transition-transform flex items-center justify-center gap-2">
                        <i class="fas fa-check"></i>
                        <span>Sign Out</span>
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
                <a href="{{ url('/') }}" 
                   class="text-gray-500 hover:text-gray-300 relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
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
                
                <!-- Me - ACTIVE -->
                <a href="{{ url('/me') }}" 
                   class="nav-active relative flex flex-col items-center gap-1 px-4 py-2 transition-all duration-300">
                    <i class="fas fa-user text-xl"></i>
                    <span class="text-[10px] font-medium">Me</span>
                </a>
            </div>
        </div>
    </nav>
    
</body>
</html>
