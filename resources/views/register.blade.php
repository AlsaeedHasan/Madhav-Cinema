<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Register - Madhav Cinema</title>
    
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
                        'glow-purple': 'glow-purple 2s ease-in-out infinite',
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
                        'glow-purple': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(168, 85, 247, 0.5), 0 0 40px rgba(168, 85, 247, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(168, 85, 247, 0.7), 0 0 60px rgba(168, 85, 247, 0.4)' },
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
        
        /* Animated Background Orbs */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.6;
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
            border-color: rgba(168, 85, 247, 0.5);
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.2), 0 0 40px rgba(168, 85, 247, 0.1);
            outline: none;
        }
        
        .glass-input::placeholder {
            color: rgba(156, 163, 175, 0.6);
        }
        
        /* Referral Code Input - Special Purple Glow */
        .glass-input-referral {
            background: rgba(168, 85, 247, 0.05);
            border: 1px solid rgba(168, 85, 247, 0.3);
            transition: all 0.3s ease;
        }
        
        .glass-input-referral:focus {
            background: rgba(168, 85, 247, 0.1);
            border-color: rgba(168, 85, 247, 0.6);
            box-shadow: 0 0 25px rgba(168, 85, 247, 0.3), 0 0 50px rgba(168, 85, 247, 0.15);
            outline: none;
        }
        
        /* Button Gradient Purple */
        .btn-purple {
            background: linear-gradient(135deg, #a855f7 0%, #ec4899 100%);
        }
        
        .btn-purple-pulse {
            animation: glow-purple 2s ease-in-out infinite;
        }
        
        /* Logo Glow */
        .logo-glow {
            box-shadow: 0 0 40px rgba(168, 85, 247, 0.4), 0 0 80px rgba(168, 85, 247, 0.2);
        }
        
        /* Shimmer Effect */
        .shimmer {
            background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.1) 50%, transparent 100%);
            background-size: 200% 100%;
            animation: shimmer 2s linear infinite;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #12121a;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #a855f7, #ec4899);
            border-radius: 3px;
        }
    </style>
</head>
<body class="bg-dark-900 text-white min-h-screen flex items-center justify-center p-5" 
      x-data="{ showPassword: false, showConfirmPassword: false, agreedToTerms: false }">
    
    <!-- Animated Background Orbs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="orb w-96 h-96 bg-purple-600/30 -top-48 -left-48" style="animation-delay: 0s;"></div>
        <div class="orb w-80 h-80 bg-pink-500/30 top-1/4 -right-40" style="animation-delay: 2s;"></div>
        <div class="orb w-64 h-64 bg-blue-600/30 bottom-1/4 left-1/4" style="animation-delay: 4s;"></div>
        <div class="orb w-72 h-72 bg-gold-500/20 bottom-0 right-1/4" style="animation-delay: 6s;"></div>
    </div>
    
    <!-- Main Container -->
    <div class="relative z-10 w-full max-w-md">
        
        <!-- Register Card -->
        <div class="glass-strong rounded-3xl p-8 relative overflow-hidden">
            <div class="absolute inset-0 shimmer"></div>
            
            <div class="relative z-10">
                
                <!-- Logo & Header -->
                <div class="text-center mb-6">
                    <!-- Logo Icon -->
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 via-pink-500 to-neon-purple flex items-center justify-center mx-auto mb-4 logo-glow">
                        <i class="fas fa-user-plus text-white text-2xl"></i>
                    </div>
                    
                    <!-- Title -->
                    <h1 class="text-2xl font-playfair font-bold text-purple-gradient mb-1">Create Account</h1>
                    
                    <!-- Subtitle -->
                    <p class="text-gray-400 text-sm">Join the revolution of movie investment</p>
                </div>
                
                <!-- Register Form -->
                <form action="#" method="POST" class="space-y-4">
                    
                    <!-- Username Input -->
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-user"></i>
                        </div>
                        <input 
                            type="text" 
                            name="username" 
                            placeholder="Username"
                            class="glass-input w-full pl-12 pr-4 py-3.5 rounded-xl text-white placeholder-gray-500"
                            required
                        >
                    </div>
                    
                    <!-- Phone Number Input -->
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-phone"></i>
                        </div>
                        <input 
                            type="tel" 
                            name="phone" 
                            placeholder="Phone Number"
                            class="glass-input w-full pl-12 pr-4 py-3.5 rounded-xl text-white placeholder-gray-500"
                            required
                        >
                    </div>
                    
                    <!-- Password Input -->
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input 
                            :type="showPassword ? 'text' : 'password'" 
                            name="password" 
                            placeholder="Password"
                            class="glass-input w-full pl-12 pr-12 py-3.5 rounded-xl text-white placeholder-gray-500"
                            required
                        >
                        <!-- Show/Hide Toggle -->
                        <button 
                            type="button"
                            @click="showPassword = !showPassword"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-neon-purple transition-colors">
                            <i class="fas" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    
                    <!-- Confirm Password Input -->
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input 
                            :type="showConfirmPassword ? 'text' : 'password'" 
                            name="password_confirmation" 
                            placeholder="Confirm Password"
                            class="glass-input w-full pl-12 pr-12 py-3.5 rounded-xl text-white placeholder-gray-500"
                            required
                        >
                        <!-- Show/Hide Toggle -->
                        <button 
                            type="button"
                            @click="showConfirmPassword = !showConfirmPassword"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-neon-purple transition-colors">
                            <i class="fas" :class="showConfirmPassword ? 'fa-eye-slash' : 'fa-eye'"></i>
                        </button>
                    </div>
                    
                    <!-- Referral Code Input (Critical - Special Styling) -->
                    <div class="relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-neon-purple">
                            <i class="fas fa-gift"></i>
                        </div>
                        <input 
                            type="text" 
                            name="referral_code" 
                            placeholder="Referral Code (Required)"
                            class="glass-input-referral w-full pl-12 pr-4 py-3.5 rounded-xl text-white placeholder-purple-300/50"
                            required
                        >
                        <div class="absolute right-4 top-1/2 -translate-y-1/2">
                            <span class="text-xs text-neon-purple font-semibold bg-purple-500/20 px-2 py-1 rounded-lg">
                                <i class="fas fa-star text-[10px] mr-1"></i>REQUIRED
                            </span>
                        </div>
                    </div>
                    
                    <!-- Terms & Conditions -->
                    <div class="flex items-start gap-3 py-2">
                        <div class="relative mt-0.5">
                            <input 
                                type="checkbox" 
                                id="terms" 
                                x-model="agreedToTerms"
                                class="w-5 h-5 rounded border-2 border-gray-600 bg-transparent checked:bg-neon-purple checked:border-neon-purple focus:ring-0 focus:ring-offset-0 cursor-pointer"
                            >
                        </div>
                        <label for="terms" class="text-sm text-gray-400 cursor-pointer">
                            I agree to the 
                            <a href="#" class="text-neon-purple hover:text-purple-400">Terms of Service</a> 
                            and 
                            <a href="#" class="text-neon-purple hover:text-purple-400">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <!-- Register Button -->
                    <button 
                        type="submit"
                        :disabled="!agreedToTerms"
                        :class="agreedToTerms ? 'btn-purple btn-purple-pulse hover:scale-[1.02]' : 'bg-gray-700 cursor-not-allowed'"
                        class="w-full py-4 rounded-xl font-bold text-white text-lg flex items-center justify-center gap-2 transition-transform">
                        <i class="fas fa-rocket"></i>
                        <span>Create Account</span>
                    </button>
                    
                </form>
                
                <!-- Divider -->
                <div class="flex items-center gap-4 my-5">
                    <div class="flex-1 h-px bg-white/10"></div>
                    <span class="text-gray-600 text-sm">or sign up with</span>
                    <div class="flex-1 h-px bg-white/10"></div>
                </div>
                
                <!-- Social Login -->
                <div class="grid grid-cols-3 gap-3 mb-5">
                    <button class="glass py-3 rounded-xl hover:bg-white/10 transition-colors flex items-center justify-center">
                        <i class="fab fa-google text-xl text-white"></i>
                    </button>
                    <button class="glass py-3 rounded-xl hover:bg-white/10 transition-colors flex items-center justify-center">
                        <i class="fab fa-facebook-f text-xl text-blue-500"></i>
                    </button>
                    <button class="glass py-3 rounded-xl hover:bg-white/10 transition-colors flex items-center justify-center">
                        <i class="fab fa-apple text-xl text-white"></i>
                    </button>
                </div>
                
                <!-- Login Link -->
                <p class="text-center text-gray-400">
                    Already have an account? 
                    <a href="{{ url('/login') }}" class="text-neon-purple font-semibold hover:text-purple-400 transition-colors">
                        Login
                    </a>
                </p>
                
            </div>
        </div>
        
        <!-- Footer -->
        <p class="text-center text-gray-600 text-xs mt-6">
            Protected by advanced security. Your data is safe with us.
            <i class="fas fa-shield-halved text-neon-purple ml-1"></i>
        </p>
        
    </div>
    
</body>
</html>
