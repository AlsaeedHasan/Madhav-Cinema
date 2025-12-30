<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Security Settings - Madhav Cinema</title>
    
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
        
        /* Glass Input */
        .glass-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .glass-input:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(245, 158, 11, 0.5);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.2), 0 0 40px rgba(245, 158, 11, 0.1);
            outline: none;
        }
        
        .glass-input::placeholder {
            color: rgba(156, 163, 175, 0.6);
        }
        
        /* Button Gradient */
        .btn-gradient {
            background: linear-gradient(135deg, #f59e0b 0%, #a855f7 100%);
            animation: glow-gold 2s ease-in-out infinite;
        }
        
        .btn-gradient:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          activeTab: 'login',
          showOldPassword: false,
          showNewPassword: false,
          showConfirmPassword: false,
          oldPassword: '',
          newPassword: '',
          confirmPassword: '',
          get passwordsMatch() {
              return this.newPassword === this.confirmPassword && this.newPassword.length > 0;
          },
          get canSubmit() {
              return this.oldPassword.length >= 6 && this.newPassword.length >= 6 && this.passwordsMatch;
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
                <a href="<?php echo e(url('/me')); ?>" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Security Settings</h1>
            </div>
            <div class="w-10 h-10 rounded-full bg-gold-500/20 flex items-center justify-center">
                <i class="fas fa-shield-halved text-gold-400"></i>
            </div>
        </header>
        
        <!-- Tabs -->
        <section class="px-5 py-6">
            <div class="glass rounded-2xl p-1.5 flex gap-1">
                <button 
                    @click="activeTab = 'login'; oldPassword = ''; newPassword = ''; confirmPassword = '';"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="activeTab === 'login' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-key"></i>
                    <span>Login Password</span>
                </button>
                <button 
                    @click="activeTab = 'fund'; oldPassword = ''; newPassword = ''; confirmPassword = '';"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="activeTab === 'fund' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-lock"></i>
                    <span>Fund Password</span>
                </button>
            </div>
        </section>
        
        <!-- Form Section -->
        <section class="px-5">
            <div class="glass rounded-3xl p-6 space-y-5">
                
                <!-- Icon Header -->
                <div class="text-center mb-6">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-gold-400 to-neon-purple flex items-center justify-center mb-3">
                        <i class="fas text-2xl text-white" :class="activeTab === 'login' ? 'fa-key' : 'fa-wallet'"></i>
                    </div>
                    <h2 class="text-lg font-semibold text-white" x-text="activeTab === 'login' ? 'Change Login Password' : 'Change Fund Password'"></h2>
                    <p class="text-sm text-gray-400 mt-1" x-text="activeTab === 'login' ? 'Used for account login' : 'Required for withdrawals'"></p>
                </div>
                
                <!-- Old Password -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Current Password</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input 
                            :type="showOldPassword ? 'text' : 'password'" 
                            x-model="oldPassword"
                            placeholder="Enter current password"
                            class="glass-input w-full pl-12 pr-12 py-4 rounded-xl text-white placeholder-gray-500"
                        >
                        <button 
                            type="button"
                            @click="showOldPassword = !showOldPassword"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gold-400 transition-colors">
                            <i class="fas" :class="showOldPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                </div>
                
                <!-- New Password -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">New Password</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input 
                            :type="showNewPassword ? 'text' : 'password'" 
                            x-model="newPassword"
                            placeholder="Enter new password"
                            class="glass-input w-full pl-12 pr-12 py-4 rounded-xl text-white placeholder-gray-500"
                        >
                        <button 
                            type="button"
                            @click="showNewPassword = !showNewPassword"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gold-400 transition-colors">
                            <i class="fas" :class="showNewPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">
                        <i class="fas fa-info-circle mr-1"></i>
                        Minimum 6 characters
                    </p>
                </div>
                
                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Confirm New Password</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input 
                            :type="showConfirmPassword ? 'text' : 'password'" 
                            x-model="confirmPassword"
                            placeholder="Confirm new password"
                            class="glass-input w-full pl-12 pr-12 py-4 rounded-xl text-white placeholder-gray-500"
                        >
                        <button 
                            type="button"
                            @click="showConfirmPassword = !showConfirmPassword"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gold-400 transition-colors">
                            <i class="fas" :class="showConfirmPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    
                    <!-- Match Indicator -->
                    <div class="mt-2" x-show="confirmPassword.length > 0">
                        <p x-show="passwordsMatch" class="text-xs text-green-400">
                            <i class="fas fa-check-circle mr-1"></i>
                            Passwords match
                        </p>
                        <p x-show="!passwordsMatch" class="text-xs text-red-400">
                            <i class="fas fa-times-circle mr-1"></i>
                            Passwords do not match
                        </p>
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- Fund Password Note -->
        <section class="px-5 mt-4" x-show="activeTab === 'fund'">
            <div class="glass rounded-xl p-4 flex items-start gap-3">
                <i class="fas fa-info-circle text-blue-400 mt-0.5"></i>
                <p class="text-sm text-gray-400">
                    <span class="text-white font-medium">Fund password</span> is required for all withdrawal operations. Keep it secure and different from your login password.
                </p>
            </div>
        </section>
        
        <!-- Submit Button -->
        <section class="px-5 mt-6">
            <button 
                :disabled="!canSubmit"
                :class="canSubmit ? 'btn-gradient hover:scale-[1.02]' : 'bg-gray-700 cursor-not-allowed'"
                class="w-full py-4 rounded-2xl font-bold text-white text-lg flex items-center justify-center gap-3 transition-transform">
                <i class="fas fa-check-circle"></i>
                <span>Update Password</span>
            </button>
        </section>
        
        <!-- Security Tips -->
        <section class="px-5 mt-6">
            <div class="glass rounded-2xl p-4">
                <h4 class="text-sm font-semibold text-gray-300 mb-3 flex items-center gap-2">
                    <i class="fas fa-lightbulb text-gold-400"></i>
                    Security Tips
                </h4>
                <ul class="text-xs text-gray-500 space-y-2">
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-green-400 mt-0.5"></i>
                        Use a combination of letters, numbers, and symbols
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-green-400 mt-0.5"></i>
                        Avoid using personal information like birthdays
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-green-400 mt-0.5"></i>
                        Never share your password with anyone
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check text-green-400 mt-0.5"></i>
                        Change your password regularly for better security
                    </li>
                </ul>
            </div>
        </section>
        
    </div>
    
</body>
</html>
<?php /**PATH /home/saeed/Documents/wealthreel-v2/resources/views/password.blade.php ENDPATH**/ ?>