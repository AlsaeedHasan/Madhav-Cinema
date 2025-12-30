<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Lucky Spin - Madhav Cinema</title>
    
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
                        'spin-slow': 'spin 20s linear infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite',
                        'bounce-slow': 'bounce 2s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(245, 158, 11, 0.5)' },
                            '50%': { boxShadow: '0 0 40px rgba(245, 158, 11, 0.8)' },
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
        
        /* Wheel Styles */
        .wheel-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 0 auto;
        }
        
        .wheel {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            position: relative;
            transition: transform 5s cubic-bezier(0.17, 0.67, 0.12, 0.99);
            background: conic-gradient(
                #ef4444 0deg 45deg,
                #f59e0b 45deg 90deg,
                #22c55e 90deg 135deg,
                #3b82f6 135deg 180deg,
                #a855f7 180deg 225deg,
                #ec4899 225deg 270deg,
                #06b6d4 270deg 315deg,
                #fcd34d 315deg 360deg
            );
            box-shadow: 
                0 0 0 8px rgba(255, 255, 255, 0.1),
                0 0 0 12px rgba(245, 158, 11, 0.3),
                0 0 40px rgba(245, 158, 11, 0.4),
                inset 0 0 30px rgba(0, 0, 0, 0.3);
        }
        
        .wheel-segment {
            position: absolute;
            width: 50%;
            height: 50%;
            left: 50%;
            top: 0;
            transform-origin: 0% 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 12px;
            color: white;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        
        .wheel-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 18px;
            color: #0a0a0f;
            cursor: pointer;
            z-index: 10;
            box-shadow: 
                0 4px 15px rgba(245, 158, 11, 0.5),
                inset 0 2px 4px rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }
        
        .wheel-center:hover {
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 
                0 6px 25px rgba(245, 158, 11, 0.7),
                inset 0 2px 4px rgba(255, 255, 255, 0.3);
        }
        
        .wheel-center:active {
            transform: translate(-50%, -50%) scale(0.95);
        }
        
        .wheel-pointer {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 30px solid #f59e0b;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.5));
            z-index: 20;
        }
        
        .wheel.spinning {
            animation: none;
        }
        
        /* Prize Labels */
        .prize-label {
            position: absolute;
            width: 60px;
            text-align: center;
            font-size: 11px;
            font-weight: 600;
            color: white;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }
        
        /* Confetti effect placeholder */
        .confetti {
            position: fixed;
            pointer-events: none;
            z-index: 100;
        }
        
        /* Lights around wheel */
        .wheel-lights {
            position: absolute;
            inset: -15px;
            border-radius: 50%;
            background: transparent;
            animation: pulse-glow 1s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen pb-8" 
      x-data="{ 
          remainingSpins: 3,
          isSpinning: false,
          rotation: 0,
          lastPrize: null,
          showResult: false,
          prizes: [
              { label: '$0.50', value: 0.5, color: '#ef4444' },
              { label: '$1.00', value: 1, color: '#f59e0b' },
              { label: '$2.00', value: 2, color: '#22c55e' },
              { label: '$5.00', value: 5, color: '#3b82f6' },
              { label: '$10.00', value: 10, color: '#a855f7' },
              { label: 'VIP Day', value: 'vip', color: '#ec4899' },
              { label: '$0.10', value: 0.1, color: '#06b6d4' },
              { label: '$20.00', value: 20, color: '#fcd34d' }
          ],
          spin() {
              if (this.isSpinning || this.remainingSpins <= 0) return;
              
              this.isSpinning = true;
              this.showResult = false;
              this.remainingSpins--;
              
              const randomPrize = Math.floor(Math.random() * 8);
              const spins = 5 + Math.random() * 3;
              const segmentAngle = 360 / 8;
              const targetAngle = (spins * 360) + (randomPrize * segmentAngle) + (segmentAngle / 2);
              
              this.rotation = targetAngle;
              this.lastPrize = this.prizes[randomPrize];
              
              setTimeout(() => {
                  this.isSpinning = false;
                  this.showResult = true;
              }, 5000);
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
                <h1 class="text-xl font-playfair font-bold text-gold-gradient">Lucky Spin</h1>
            </div>
            <div class="flex items-center gap-2 glass rounded-full px-4 py-2">
                <i class="fas fa-ticket text-gold-400"></i>
                <span class="font-bold" x-text="remainingSpins"></span>
                <span class="text-gray-400 text-sm">Spins</span>
            </div>
        </header>
        
        <!-- Title Section -->
        <section class="px-5 py-6 text-center">
            <h2 class="text-3xl font-playfair font-bold text-gold-gradient mb-2">Spin & Win!</h2>
            <p class="text-gray-400">Try your luck and win amazing prizes</p>
        </section>
        
        <!-- Wheel Section -->
        <section class="px-5 py-4">
            <div class="wheel-container">
                <!-- Lights Effect -->
                <div class="wheel-lights"></div>
                
                <!-- Pointer -->
                <div class="wheel-pointer"></div>
                
                <!-- Wheel -->
                <div class="wheel" :style="'transform: rotate(' + rotation + 'deg)'">
                    <!-- Prize Labels positioned on wheel -->
                    <div class="prize-label" style="top: 15%; left: 50%; transform: translateX(-50%) rotate(22.5deg);">$0.50</div>
                    <div class="prize-label" style="top: 25%; right: 10%; transform: rotate(67.5deg);">$1.00</div>
                    <div class="prize-label" style="top: 50%; right: 5%; transform: translateY(-50%) rotate(112.5deg);">$2.00</div>
                    <div class="prize-label" style="bottom: 25%; right: 10%; transform: rotate(157.5deg);">$5.00</div>
                    <div class="prize-label" style="bottom: 15%; left: 50%; transform: translateX(-50%) rotate(202.5deg);">$10</div>
                    <div class="prize-label" style="bottom: 25%; left: 10%; transform: rotate(247.5deg);">VIP</div>
                    <div class="prize-label" style="top: 50%; left: 5%; transform: translateY(-50%) rotate(292.5deg);">$0.10</div>
                    <div class="prize-label" style="top: 25%; left: 10%; transform: rotate(337.5deg);">$20</div>
                </div>
                
                <!-- Center Button -->
                <button 
                    @click="spin()"
                    :disabled="isSpinning || remainingSpins <= 0"
                    class="wheel-center"
                    :class="{ 'opacity-50 cursor-not-allowed': isSpinning || remainingSpins <= 0 }">
                    <span x-show="!isSpinning">GO!</span>
                    <i x-show="isSpinning" class="fas fa-spinner fa-spin"></i>
                </button>
            </div>
        </section>
        
        <!-- Result Modal -->
        <div x-show="showResult" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             class="fixed inset-0 flex items-center justify-center z-50 px-5"
             style="background: rgba(0,0,0,0.8);">
            <div class="glass rounded-3xl p-8 text-center max-w-sm w-full">
                <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center mb-4 animate-bounce-slow">
                    <i class="fas fa-gift text-3xl text-dark-900"></i>
                </div>
                <h3 class="text-2xl font-playfair font-bold text-gold-gradient mb-2">Congratulations!</h3>
                <p class="text-gray-400 mb-4">You won</p>
                <p class="text-4xl font-bold text-white mb-6" x-text="lastPrize ? lastPrize.label : ''"></p>
                <button 
                    @click="showResult = false"
                    class="w-full py-3 rounded-xl bg-gradient-to-r from-gold-400 to-gold-600 text-dark-900 font-bold">
                    Claim Reward
                </button>
            </div>
        </div>
        
        <!-- Spins Info -->
        <section class="px-5 py-4">
            <div class="glass rounded-2xl p-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-gold-500/20 flex items-center justify-center">
                        <i class="fas fa-ticket text-gold-400 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-white">Remaining Spins</p>
                        <p class="text-sm text-gray-400">Get more by completing tasks</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-3xl font-bold text-gold-gradient" x-text="remainingSpins"></p>
                </div>
            </div>
        </section>
        
        <!-- Prizes List -->
        <section class="px-5 py-4">
            <h3 class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                <i class="fas fa-trophy text-gold-400"></i>
                Prize Pool
            </h3>
            <div class="grid grid-cols-4 gap-2">
                <template x-for="prize in prizes" :key="prize.label">
                    <div class="glass rounded-xl p-3 text-center">
                        <div class="w-8 h-8 mx-auto rounded-full mb-2 flex items-center justify-center" 
                             :style="'background: ' + prize.color + '40'">
                            <i class="fas text-sm" 
                               :class="prize.value === 'vip' ? 'fa-crown' : 'fa-coins'"
                               :style="'color: ' + prize.color"></i>
                        </div>
                        <p class="text-xs font-semibold text-white" x-text="prize.label"></p>
                    </div>
                </template>
            </div>
        </section>
        
        <!-- Rules -->
        <section class="px-5 py-4">
            <div class="glass rounded-2xl p-4">
                <h4 class="font-semibold text-white mb-3 flex items-center gap-2">
                    <i class="fas fa-scroll text-gold-400"></i>
                    Rules & Information
                </h4>
                <ul class="text-sm text-gray-400 space-y-2">
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-400 mt-0.5"></i>
                        <span>Each VIP member gets 3 free spins daily</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-400 mt-0.5"></i>
                        <span>Prizes are credited instantly to your wallet</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-400 mt-0.5"></i>
                        <span>Complete tasks to earn extra spin tickets</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-400 mt-0.5"></i>
                        <span>VIP Day prize upgrades your VIP for 24 hours</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-check-circle text-green-400 mt-0.5"></i>
                        <span>Spins reset daily at midnight UTC</span>
                    </li>
                </ul>
            </div>
        </section>
        
    </div>
    
</body>
</html>
