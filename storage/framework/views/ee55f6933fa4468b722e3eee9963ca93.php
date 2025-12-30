<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Withdraw - Madhav Cinema</title>
    
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
                        'glow-pink': 'glow-pink 2s ease-in-out infinite',
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
                        'glow-pink': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(236, 72, 153, 0.5), 0 0 40px rgba(236, 72, 153, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(236, 72, 153, 0.7), 0 0 60px rgba(236, 72, 153, 0.4)' },
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
            background: linear-gradient(180deg, #ec4899, #ef4444);
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
        
        /* Pink Gradient Text */
        .text-pink-gradient {
            background: linear-gradient(135deg, #ec4899 0%, #ef4444 100%);
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
        
        /* Glass Input */
        .glass-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .glass-input:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(236, 72, 153, 0.5);
            box-shadow: 0 0 20px rgba(236, 72, 153, 0.2), 0 0 40px rgba(236, 72, 153, 0.1);
            outline: none;
        }
        
        .glass-input::placeholder {
            color: rgba(156, 163, 175, 0.6);
        }
        
        /* Button Gradient Pink */
        .btn-pink {
            background: linear-gradient(135deg, #ec4899 0%, #ef4444 100%);
        }
        
        .btn-pink-pulse {
            animation: glow-pink 2s ease-in-out infinite;
        }
        
        /* Glow Gold */
        .glow-gold {
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.3), 0 0 60px rgba(245, 158, 11, 0.1);
        }
        
        /* Quick Amount Button */
        .quick-amount {
            transition: all 0.3s ease;
        }
        
        .quick-amount.active {
            background: linear-gradient(135deg, #ec4899 0%, #ef4444 100%);
            color: white;
        }
        
        /* Withdraw Method */
        .method-option {
            transition: all 0.3s ease;
        }
        
        .method-option.active {
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.2) 0%, rgba(239, 68, 68, 0.2) 100%);
            border-color: rgba(236, 72, 153, 0.5);
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          availableBalance: 1245.50,
          amount: '',
          walletAddress: 'TKx7gHJdM9kN2pQrS4vW8yZ1aB3cD5eF6g789',
          fundPassword: '',
          showPassword: false,
          selectedMethod: 'usdt',
          quickAmounts: [50, 100, 500, 1000],
          fee: 1,
          minWithdraw: 10,
          methods: [
              { id: 'usdt', name: 'USDT TRC20', icon: 'fa-coins', color: 'text-green-400' },
              { id: 'bank', name: 'Bank Card', icon: 'fa-building-columns', color: 'text-blue-400' }
          ],
          setAmount(val) {
              this.amount = val;
          },
          setMaxAmount() {
              this.amount = this.availableBalance;
          },
          get feeAmount() {
              return this.amount ? (parseFloat(this.amount) * this.fee / 100).toFixed(2) : '0.00';
          },
          get receiveAmount() {
              const amt = parseFloat(this.amount) || 0;
              const fee = amt * this.fee / 100;
              return (amt - fee).toFixed(2);
          },
          get canSubmit() {
              const amt = parseFloat(this.amount) || 0;
              return amt >= this.minWithdraw && amt <= this.availableBalance && this.fundPassword.length >= 6;
          }
      }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-pink-500/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-red-500/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-purple-600/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10">
        
        <!-- Header -->
        <header class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-3">
                <a href="<?php echo e(url('/earnings')); ?>" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-pink-gradient">Withdraw Funds</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-history text-lg"></i>
                </button>
            </div>
        </header>
        
        <!-- Balance Card -->
        <section class="px-5 py-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden glow-gold">
                <div class="absolute inset-0 shimmer"></div>
                
                <!-- Decorative -->
                <div class="absolute top-4 right-4 opacity-10">
                    <i class="fas fa-wallet text-5xl text-gold-400"></i>
                </div>
                
                <div class="relative z-10">
                    <p class="text-gray-400 text-sm mb-2 flex items-center gap-2">
                        <i class="fas fa-coins text-gold-400"></i>
                        Available to Withdraw
                    </p>
                    <h2 class="text-4xl font-bold text-gold-gradient font-playfair mb-4">
                        $<span x-text="availableBalance.toLocaleString('en-US', { minimumFractionDigits: 2 })"></span>
                    </h2>
                    
                    <!-- Quick Stats -->
                    <div class="flex items-center gap-4 text-sm">
                        <div class="flex items-center gap-1 text-gray-400">
                            <i class="fas fa-arrow-trend-up text-green-400"></i>
                            <span>Today: +$28.40</span>
                        </div>
                        <div class="flex items-center gap-1 text-gray-400">
                            <i class="fas fa-clock text-yellow-400"></i>
                            <span>Pending: $0</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Withdraw Method -->
        <section class="px-5 mb-6">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Withdraw To</h3>
            <div class="grid grid-cols-2 gap-3">
                <template x-for="method in methods" :key="method.id">
                    <button 
                        @click="selectedMethod = method.id"
                        class="method-option glass rounded-xl p-4 flex items-center gap-3"
                        :class="selectedMethod === method.id ? 'active' : ''">
                        <div class="w-10 h-10 rounded-xl bg-dark-700 flex items-center justify-center">
                            <i class="fas" :class="[method.icon, method.color]"></i>
                        </div>
                        <span class="font-medium text-sm" x-text="method.name"></span>
                    </button>
                </template>
            </div>
        </section>
        
        <!-- Withdraw Form -->
        <section class="px-5 mb-6 space-y-4">
            
            <!-- Amount Input -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <label class="text-sm text-gray-400">Withdraw Amount</label>
                    <button 
                        @click="setMaxAmount()"
                        class="text-xs text-neon-pink font-semibold hover:text-pink-400 transition-colors">
                        MAX
                    </button>
                </div>
                <div class="relative">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-2xl text-pink-400 font-bold">$</div>
                    <input 
                        type="number" 
                        x-model="amount"
                        placeholder="0.00"
                        class="glass-input w-full pl-12 pr-4 py-5 rounded-2xl text-white text-2xl font-bold placeholder-gray-600"
                    >
                </div>
                
                <!-- Quick Amount Buttons -->
                <div class="flex flex-wrap gap-2 mt-3">
                    <template x-for="amt in quickAmounts" :key="amt">
                        <button 
                            @click="setAmount(amt)"
                            class="quick-amount glass px-4 py-2 rounded-xl font-semibold text-sm"
                            :class="amount == amt ? 'active' : 'text-gray-400 hover:text-white'">
                            $<span x-text="amt"></span>
                        </button>
                    </template>
                </div>
            </div>
            
            <!-- Wallet Address -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Wallet Address</label>
                <div class="relative">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <input 
                        type="text" 
                        x-model="walletAddress"
                        placeholder="Enter your wallet address"
                        class="glass-input w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500 font-mono text-sm"
                    >
                </div>
                <p class="text-xs text-gray-600 mt-1">
                    <i class="fas fa-info-circle mr-1"></i>
                    Make sure the address matches the selected network
                </p>
            </div>
            
            <!-- Fund Password -->
            <div>
                <label class="block text-sm text-gray-400 mb-2">Fund Password</label>
                <div class="relative">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input 
                        :type="showPassword ? 'text' : 'password'" 
                        x-model="fundPassword"
                        placeholder="Enter your fund password"
                        class="glass-input w-full pl-12 pr-12 py-4 rounded-xl text-white placeholder-gray-500"
                    >
                    <button 
                        type="button"
                        @click="showPassword = !showPassword"
                        class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-pink-400 transition-colors">
                        <i class="fas" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                    </button>
                </div>
            </div>
            
        </section>
        
        <!-- Fee Summary -->
        <section class="px-5 mb-6">
            <div class="glass rounded-2xl p-4 space-y-3">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-400">Withdraw Amount</span>
                    <span class="font-semibold">$<span x-text="amount || '0.00'"></span></span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-400">Fee (<span x-text="fee"></span>%)</span>
                    <span class="text-red-400">-$<span x-text="feeAmount"></span></span>
                </div>
                <div class="border-t border-white/10 pt-3">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-300 font-medium">You'll Receive</span>
                        <span class="text-xl font-bold text-green-400">$<span x-text="receiveAmount"></span></span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Info/Warning -->
        <section class="px-5 mb-6">
            <div class="glass rounded-xl p-4 flex items-start gap-3">
                <i class="fas fa-info-circle text-blue-400 mt-0.5"></i>
                <div class="text-xs text-gray-400 space-y-1">
                    <p>• Minimum withdrawal: <span class="text-white font-semibold">$<span x-text="minWithdraw"></span></span></p>
                    <p>• Processing fee: <span class="text-white font-semibold"><span x-text="fee"></span>%</span></p>
                    <p>• Processing time: <span class="text-white font-semibold">1-24 hours</span></p>
                    <p>• Withdrawals are processed in order received</p>
                </div>
            </div>
        </section>
        
        <!-- Submit Button -->
        <section class="px-5 pb-8">
            <button 
                :disabled="!canSubmit"
                :class="canSubmit ? 'btn-pink btn-pink-pulse hover:scale-[1.02]' : 'bg-gray-700 cursor-not-allowed'"
                class="w-full py-4 rounded-2xl font-bold text-white text-lg flex items-center justify-center gap-3 transition-transform">
                <i class="fas fa-paper-plane"></i>
                <span>Submit Withdrawal</span>
            </button>
            
            <!-- Validation Messages -->
            <div class="mt-4 space-y-2 text-center">
                <p x-show="amount && parseFloat(amount) < minWithdraw" class="text-xs text-red-400">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    Minimum withdrawal is $<span x-text="minWithdraw"></span>
                </p>
                <p x-show="amount && parseFloat(amount) > availableBalance" class="text-xs text-red-400">
                    <i class="fas fa-exclamation-circle mr-1"></i>
                    Insufficient balance
                </p>
                <p x-show="fundPassword && fundPassword.length < 6" class="text-xs text-yellow-400">
                    <i class="fas fa-exclamation-triangle mr-1"></i>
                    Fund password must be at least 6 characters
                </p>
            </div>
        </section>
        
    </div>
    
</body>
</html>
<?php /**PATH /home/saeed/Documents/wealthreel-v2/resources/views/withdraw.blade.php ENDPATH**/ ?>