<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Recharge - Madhav Cinema</title>
    
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
                        'glow-green': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(16, 185, 129, 0.5), 0 0 40px rgba(16, 185, 129, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(16, 185, 129, 0.7), 0 0 60px rgba(16, 185, 129, 0.4)' },
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
            background: linear-gradient(180deg, #10b981, #06b6d4);
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
        
        /* Green Gradient Text */
        .text-green-gradient {
            background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%);
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
            border-color: rgba(16, 185, 129, 0.5);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.2), 0 0 40px rgba(16, 185, 129, 0.1);
            outline: none;
        }
        
        .glass-input::placeholder {
            color: rgba(156, 163, 175, 0.6);
        }
        
        /* Method Selector */
        .method-btn {
            transition: all 0.3s ease;
        }
        
        .method-btn.active {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2) 0%, rgba(6, 182, 212, 0.2) 100%);
            border-color: rgba(16, 185, 129, 0.5);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.2);
        }
        
        /* Button Gradient Green */
        .btn-green {
            background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%);
        }
        
        .btn-green-pulse {
            animation: glow-green 2s ease-in-out infinite;
        }
        
        /* Upload Area */
        .upload-area {
            border: 2px dashed rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .upload-area:hover {
            border-color: rgba(16, 185, 129, 0.5);
            background: rgba(16, 185, 129, 0.05);
        }
        
        /* Quick Amount Button */
        .quick-amount {
            transition: all 0.3s ease;
        }
        
        .quick-amount.active {
            background: linear-gradient(135deg, #10b981 0%, #06b6d4 100%);
            color: white;
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          selectedMethod: 'trc20',
          amount: '',
          walletAddress: 'TKx7gHJdM9kN2pQrS4vW8yZ1aB3cD5eF6g123',
          copied: false,
          uploadedFile: null,
          methods: [
              { id: 'trc20', name: 'USDT TRC20', icon: 'fa-coins', color: 'text-green-400' },
              { id: 'erc20', name: 'USDT ERC20', icon: 'fa-ethereum', color: 'text-blue-400' },
              { id: 'bank', name: 'Bank Card', icon: 'fa-credit-card', color: 'text-gold-400' }
          ],
          quickAmounts: [50, 100, 200, 500, 1000],
          copyAddress() {
              navigator.clipboard.writeText(this.walletAddress);
              this.copied = true;
              setTimeout(() => this.copied = false, 2000);
          },
          setAmount(val) {
              this.amount = val;
          },
          handleFileUpload(event) {
              const file = event.target.files[0];
              if (file) {
                  this.uploadedFile = file.name;
              }
          }
      }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-green-500/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-cyan-500/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-emerald-600/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10">
        
        <!-- Header -->
        <header class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-3">
                <a href="{{ url('/earnings') }}" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-green-gradient">Recharge Account</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-history text-lg"></i>
                </button>
            </div>
        </header>
        
        <!-- Method Selector -->
        <section class="px-5 py-6">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Select Payment Method</h3>
            <div class="grid grid-cols-3 gap-3">
                <template x-for="method in methods" :key="method.id">
                    <button 
                        @click="selectedMethod = method.id"
                        class="method-btn glass rounded-xl p-4 text-center"
                        :class="selectedMethod === method.id ? 'active' : ''">
                        <i class="fas text-2xl mb-2" :class="[method.icon, method.color]"></i>
                        <p class="text-xs font-medium text-white" x-text="method.name"></p>
                    </button>
                </template>
            </div>
        </section>
        
        <!-- QR Code Section -->
        <section class="px-5 mb-6">
            <div class="glass rounded-3xl p-6 relative overflow-hidden">
                <div class="absolute inset-0 shimmer"></div>
                
                <div class="relative z-10">
                    <!-- QR Code -->
                    <div class="flex justify-center mb-6">
                        <div class="p-4 bg-white rounded-2xl">
                            <img 
                                src="https://placehold.co/180x180/white/black?text=QR+Code" 
                                alt="Payment QR Code"
                                class="w-44 h-44 rounded-lg"
                                onerror="this.parentElement.innerHTML='<div class=\'w-44 h-44 bg-gray-200 rounded-lg flex items-center justify-center\'><i class=\'fas fa-qrcode text-6xl text-gray-400\'></i></div>'"
                            >
                        </div>
                    </div>
                    
                    <!-- Network Info -->
                    <div class="text-center mb-4">
                        <span class="inline-flex items-center gap-2 bg-green-500/20 text-green-400 px-4 py-2 rounded-full text-sm font-semibold">
                            <i class="fas fa-circle-check"></i>
                            <span x-text="selectedMethod === 'trc20' ? 'TRC20 Network' : (selectedMethod === 'erc20' ? 'ERC20 Network' : 'Bank Transfer')"></span>
                        </span>
                    </div>
                    
                    <!-- Wallet Address -->
                    <div class="mb-4">
                        <label class="block text-sm text-gray-400 mb-2">Wallet Address</label>
                        <div class="flex gap-2">
                            <input 
                                type="text" 
                                :value="walletAddress"
                                readonly
                                class="glass-input flex-1 px-4 py-3 rounded-xl text-white text-sm font-mono"
                            >
                            <button 
                                @click="copyAddress()"
                                class="relative px-6 py-3 rounded-xl font-bold text-white transition-all"
                                :class="copied ? 'bg-green-500' : 'btn-green hover:scale-105'">
                                <span x-show="!copied" class="flex items-center gap-2">
                                    <i class="fas fa-copy"></i>
                                    COPY
                                </span>
                                <span x-show="copied" class="flex items-center gap-2">
                                    <i class="fas fa-check"></i>
                                    COPIED
                                </span>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Warning -->
                    <div class="glass rounded-xl p-3 flex items-start gap-3">
                        <i class="fas fa-triangle-exclamation text-yellow-400 mt-0.5"></i>
                        <p class="text-xs text-gray-400">
                            Only send <span class="text-green-400 font-semibold" x-text="selectedMethod.toUpperCase()"></span> to this address. 
                            Sending other assets may result in permanent loss.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Amount Section -->
        <section class="px-5 mb-6">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Enter Amount</h3>
            
            <!-- Amount Input -->
            <div class="relative mb-4">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-2xl text-green-400 font-bold">$</div>
                <input 
                    type="number" 
                    x-model="amount"
                    placeholder="0.00"
                    class="glass-input w-full pl-12 pr-4 py-5 rounded-2xl text-white text-2xl font-bold placeholder-gray-600"
                >
            </div>
            
            <!-- Quick Amount Buttons -->
            <div class="flex flex-wrap gap-2">
                <template x-for="amt in quickAmounts" :key="amt">
                    <button 
                        @click="setAmount(amt)"
                        class="quick-amount glass px-5 py-2.5 rounded-xl font-semibold text-sm"
                        :class="amount == amt ? 'active' : 'text-gray-400 hover:text-white'">
                        $<span x-text="amt"></span>
                    </button>
                </template>
            </div>
        </section>
        
        <!-- Proof Upload Section -->
        <section class="px-5 mb-6">
            <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Upload Payment Proof</h3>
            
            <label class="upload-area rounded-2xl p-8 flex flex-col items-center justify-center cursor-pointer">
                <input 
                    type="file" 
                    accept="image/*"
                    class="hidden"
                    @change="handleFileUpload($event)"
                >
                
                <template x-if="!uploadedFile">
                    <div class="text-center">
                        <div class="w-16 h-16 rounded-full bg-dark-700 flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-cloud-arrow-up text-2xl text-gray-500"></i>
                        </div>
                        <p class="text-gray-400 mb-1">Click to upload screenshot</p>
                        <p class="text-xs text-gray-600">PNG, JPG up to 5MB</p>
                    </div>
                </template>
                
                <template x-if="uploadedFile">
                    <div class="text-center">
                        <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-check text-2xl text-green-400"></i>
                        </div>
                        <p class="text-green-400 font-medium mb-1" x-text="uploadedFile"></p>
                        <p class="text-xs text-gray-500">Click to change</p>
                    </div>
                </template>
            </label>
        </section>
        
        <!-- Submit Button -->
        <section class="px-5 pb-8">
            <button 
                class="btn-green btn-green-pulse w-full py-4 rounded-2xl font-bold text-white text-lg flex items-center justify-center gap-3 hover:scale-[1.02] transition-transform">
                <i class="fas fa-check-circle"></i>
                <span>Confirm Recharge</span>
            </button>
            
            <!-- Help Text -->
            <p class="text-center text-xs text-gray-600 mt-4">
                <i class="fas fa-clock mr-1"></i>
                Processing time: 5-30 minutes
            </p>
        </section>
        
    </div>
    
</body>
</html>
