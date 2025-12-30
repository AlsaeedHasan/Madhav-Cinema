<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Withdrawal Method - Madhav Cinema</title>
    
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
                            '0%, 100%': { boxShadow: '0 0 20px rgba(34, 197, 94, 0.5), 0 0 40px rgba(34, 197, 94, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(34, 197, 94, 0.7), 0 0 60px rgba(34, 197, 94, 0.4)' },
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
            background: linear-gradient(180deg, #22c55e, #10b981);
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
            background: linear-gradient(135deg, #22c55e 0%, #10b981 100%);
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
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.3) 0%, rgba(16, 185, 129, 0.3) 100%);
            border-color: rgba(34, 197, 94, 0.5);
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
        }
        
        /* Glass Input */
        .glass-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .glass-input:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(34, 197, 94, 0.5);
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.2), 0 0 40px rgba(34, 197, 94, 0.1);
            outline: none;
        }
        
        .glass-input::placeholder {
            color: rgba(156, 163, 175, 0.6);
        }
        
        .glass-input:read-only {
            opacity: 0.7;
            cursor: not-allowed;
        }
        
        /* Button Gradient Green */
        .btn-green {
            background: linear-gradient(135deg, #22c55e 0%, #10b981 100%);
            animation: glow-green 2s ease-in-out infinite;
        }
        
        .btn-green:hover {
            transform: scale(1.02);
        }
        
        /* Select Dropdown */
        .glass-select {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%239ca3af'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 1.5em 1.5em;
        }
        
        .glass-select:focus {
            background-color: rgba(255, 255, 255, 0.08);
            border-color: rgba(34, 197, 94, 0.5);
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.2);
            outline: none;
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          activeMethod: 'usdt',
          // USDT Fields
          usdtNetwork: 'TRC20',
          usdtName: '',
          usdtAddress: '',
          // Bank Fields
          bankName: '',
          accountName: '',
          accountNumber: '',
          // Validation
          get canSubmitUsdt() {
              return this.usdtName.trim().length > 0 && this.usdtAddress.trim().length > 20;
          },
          get canSubmitBank() {
              return this.bankName.trim().length > 0 && this.accountName.trim().length > 0 && this.accountNumber.trim().length > 8;
          },
          get canSubmit() {
              return this.activeMethod === 'usdt' ? this.canSubmitUsdt : this.canSubmitBank;
          }
      }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-green-500/20 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-emerald-600/20 top-1/3 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-teal-500/20 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10">
        
        <!-- Header -->
        <header class="glass-strong px-5 py-4 flex items-center justify-between sticky top-0 z-50">
            <div class="flex items-center gap-3">
                <a href="{{ url('/me') }}" class="p-2 -ml-2 text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left text-lg"></i>
                </a>
                <h1 class="text-xl font-playfair font-bold text-green-gradient">Withdrawal Method</h1>
            </div>
            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center">
                <i class="fas fa-credit-card text-green-400"></i>
            </div>
        </header>
        
        <!-- Tabs -->
        <section class="px-5 py-6">
            <div class="glass rounded-2xl p-1.5 flex gap-1">
                <button 
                    @click="activeMethod = 'usdt'"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="activeMethod === 'usdt' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-coins"></i>
                    <span>USDT Address</span>
                </button>
                <button 
                    @click="activeMethod = 'bank'"
                    class="tab-btn flex-1 py-3 px-4 rounded-xl font-semibold text-sm flex items-center justify-center gap-2"
                    :class="activeMethod === 'bank' ? 'active text-white' : 'text-gray-400 hover:text-white'">
                    <i class="fas fa-building-columns"></i>
                    <span>Bank Card</span>
                </button>
            </div>
        </section>
        
        <!-- Warning Card -->
        <section class="px-5 mb-6">
            <div class="glass rounded-xl p-4 flex items-start gap-3 border-l-4 border-yellow-500">
                <i class="fas fa-exclamation-triangle text-yellow-400 mt-0.5"></i>
                <p class="text-sm text-gray-300">
                    <span class="text-yellow-400 font-semibold">Important:</span> Please ensure the information is correct. <span class="text-white font-medium">It cannot be modified after binding.</span>
                </p>
            </div>
        </section>
        
        <!-- USDT Form -->
        <section x-show="activeMethod === 'usdt'" class="px-5">
            <div class="glass rounded-3xl p-6 space-y-5">
                
                <!-- Icon Header -->
                <div class="text-center mb-6">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center mb-3">
                        <i class="fas fa-coins text-2xl text-white"></i>
                    </div>
                    <h2 class="text-lg font-semibold text-white">USDT Wallet Address</h2>
                    <p class="text-sm text-gray-400 mt-1">Receive withdrawals in USDT</p>
                </div>
                
                <!-- Network (Read-only) -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Network</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <input 
                            type="text" 
                            x-model="usdtNetwork"
                            readonly
                            class="glass-input w-full pl-12 pr-4 py-4 rounded-xl text-white font-medium"
                        >
                        <div class="absolute right-4 top-1/2 -translate-y-1/2">
                            <span class="px-2 py-1 bg-green-500/20 text-green-400 text-xs rounded-full font-medium">Recommended</span>
                        </div>
                    </div>
                </div>
                
                <!-- Real Name -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Real Name</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-user"></i>
                        </div>
                        <input 
                            type="text" 
                            x-model="usdtName"
                            placeholder="Enter your real name"
                            class="glass-input w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500"
                        >
                    </div>
                    <p class="text-xs text-gray-500 mt-2">
                        <i class="fas fa-info-circle mr-1"></i>
                        Must match your account name
                    </p>
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
                            x-model="usdtAddress"
                            placeholder="Enter TRC20 wallet address"
                            class="glass-input w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500 font-mono text-sm"
                        >
                    </div>
                    <p class="text-xs text-gray-500 mt-2">
                        <i class="fas fa-exclamation-circle mr-1 text-yellow-400"></i>
                        Only enter TRC20 network addresses
                    </p>
                </div>
                
            </div>
        </section>
        
        <!-- Bank Card Form -->
        <section x-show="activeMethod === 'bank'" class="px-5">
            <div class="glass rounded-3xl p-6 space-y-5">
                
                <!-- Icon Header -->
                <div class="text-center mb-6">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center mb-3">
                        <i class="fas fa-building-columns text-2xl text-white"></i>
                    </div>
                    <h2 class="text-lg font-semibold text-white">Bank Card Details</h2>
                    <p class="text-sm text-gray-400 mt-1">Receive withdrawals to bank account</p>
                </div>
                
                <!-- Bank Name -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Bank Name</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-university"></i>
                        </div>
                        <select 
                            x-model="bankName"
                            class="glass-select w-full pl-12 pr-12 py-4 rounded-xl text-white">
                            <option value="" disabled selected class="bg-dark-800">Select your bank</option>
                            <option value="SBI" class="bg-dark-800">State Bank of India</option>
                            <option value="HDFC" class="bg-dark-800">HDFC Bank</option>
                            <option value="ICICI" class="bg-dark-800">ICICI Bank</option>
                            <option value="Axis" class="bg-dark-800">Axis Bank</option>
                            <option value="PNB" class="bg-dark-800">Punjab National Bank</option>
                            <option value="Kotak" class="bg-dark-800">Kotak Mahindra Bank</option>
                            <option value="BOB" class="bg-dark-800">Bank of Baroda</option>
                            <option value="Other" class="bg-dark-800">Other Bank</option>
                        </select>
                    </div>
                </div>
                
                <!-- Account Name -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Account Holder Name</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-user"></i>
                        </div>
                        <input 
                            type="text" 
                            x-model="accountName"
                            placeholder="Enter account holder name"
                            class="glass-input w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500"
                        >
                    </div>
                    <p class="text-xs text-gray-500 mt-2">
                        <i class="fas fa-info-circle mr-1"></i>
                        As shown on your bank account
                    </p>
                </div>
                
                <!-- Account Number -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Account Number</label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-hashtag"></i>
                        </div>
                        <input 
                            type="text" 
                            x-model="accountNumber"
                            placeholder="Enter account number"
                            inputmode="numeric"
                            class="glass-input w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500 font-mono tracking-wider"
                        >
                    </div>
                </div>
                
                <!-- IFSC Code (Optional) -->
                <div>
                    <label class="block text-sm text-gray-400 mb-2">IFSC Code <span class="text-gray-600">(Optional)</span></label>
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-barcode"></i>
                        </div>
                        <input 
                            type="text" 
                            placeholder="Enter IFSC code"
                            class="glass-input w-full pl-12 pr-4 py-4 rounded-xl text-white placeholder-gray-500 uppercase tracking-wider"
                        >
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- Current Bound Account (Info) -->
        <section class="px-5 mt-6">
            <div class="glass rounded-2xl p-4">
                <h4 class="text-sm font-semibold text-gray-300 mb-3 flex items-center gap-2">
                    <i class="fas fa-link text-green-400"></i>
                    Current Bound Account
                </h4>
                <div class="flex items-center justify-between p-3 rounded-xl bg-dark-700/50">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gray-600/30 flex items-center justify-center">
                            <i class="fas fa-times text-gray-500"></i>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm">No account bound</p>
                            <p class="text-xs text-gray-600">Bind an account to withdraw funds</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Submit Button -->
        <section class="px-5 mt-6">
            <button 
                :disabled="!canSubmit"
                :class="canSubmit ? 'btn-green hover:scale-[1.02]' : 'bg-gray-700 cursor-not-allowed'"
                class="w-full py-4 rounded-2xl font-bold text-white text-lg flex items-center justify-center gap-3 transition-transform">
                <i class="fas fa-check-circle"></i>
                <span>Save Information</span>
            </button>
        </section>
        
        <!-- Help Section -->
        <section class="px-5 mt-6 pb-4">
            <div class="text-center">
                <p class="text-sm text-gray-500">
                    <i class="fas fa-question-circle mr-1"></i>
                    Having trouble? <a href="#" class="text-green-400 hover:underline">Contact Support</a>
                </p>
            </div>
        </section>
        
    </div>
    
</body>
</html>
