<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESlauncher</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        neon: {
                            cyan: '#00f7ff',
                            pink: '#ff00f7',
                            purple: '#c400ff',
                        },
                        dark: {
                            950: '#0a0a0f',
                            900: '#121218',
                            800: '#1a1a22',
                        },
                    },
                    fontFamily: {
                        sans: ['"Space Grotesk"', 'sans-serif'],
                        mono: ['"Space Mono"', 'monospace'],
                    },
                    animation: {
                        'orbit': 'orbit 12s linear infinite',
                        'orbit-reverse': 'orbit 12s linear infinite reverse',
                        'pulse-slow': 'pulse 6s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'text-gradient': 'text-gradient 8s ease infinite',
                        'float': 'float 8s ease-in-out infinite',
                    },
                    keyframes: {
                        orbit: {
                            '0%': { transform: 'rotate(0deg) translateX(80px) rotate(0deg)' },
                            '100%': { transform: 'rotate(360deg) translateX(80px) rotate(-360deg)' },
                        },
                        'text-gradient': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Space+Mono&display=swap" rel="stylesheet">
    <style>
        .neu {
            border-radius: 20px;
            background: linear-gradient(145deg, #121218, #0f0f15);
            box-shadow:  8px 8px 16px #0a0a0f,
                        -8px -8px 16px #1a1a22;
        }
        
        .neu-inset {
            border-radius: 12px;
            background: linear-gradient(145deg, #0f0f15, #121218);
            box-shadow: inset 5px 5px 10px #0a0a0f,
                        inset -5px -5px 10px #1a1a22;
        }
        
        .glow {
            filter: drop-shadow(0 0 8px currentColor);
        }
        
        .gradient-border {
            position: relative;
            border-radius: 20px;
        }
        
        .gradient-border::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            border-radius: 22px;
            background: linear-gradient(45deg, #00f7ff, #ff00f7, #c400ff);
            background-size: 200% 200%;
            animation: text-gradient 4s ease infinite;
            z-index: -1;
        }
        
        .holographic {
            background: linear-gradient(135deg, 
                rgba(0, 247, 255, 0.1) 0%, 
                rgba(196, 0, 255, 0.1) 50%, 
                rgba(255, 0, 247, 0.1) 100%);
            position: relative;
            overflow: hidden;
        }
        
        .holographic::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0) 45%,
                rgba(255, 255, 255, 0.03) 50%,
                rgba(255, 255, 255, 0) 55%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            animation: shine 6s infinite;
        }
        
        @keyframes shine {
            0% { transform: rotate(30deg) translate(-30%, -30%); }
            100% { transform: rotate(30deg) translate(30%, 30%); }
        }
    </style>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body class="min-h-screen bg-dark-950 text-gray-100 font-sans overflow-x-hidden">
    @include('layouts.nav')

        <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-3xl bg-dark-950 rounded-xl shadow-sm p-8 text-right">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold ">سیاست حفظ حریم خصوصی</h1>
                <div class="w-20 h-1 bg-blue-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="mb-10">
                <div class="flex items-start mb-6">
                    <div class="bg-dark-800 p-3 rounded-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold  mb-2">ما هیچ داده‌ای جمع‌آوری نمی‌کنیم</h2>
                        <p class=" leading-relaxed">
                            نرم‌افزار ما به گونه‌ای طراحی شده است که هیچ اطلاعات شخصی، داده‌های کاربران یا هرگونه اطلاعات قابل شناسایی را جمع‌آوری، ذخیره یا پردازش نمی‌کند. ما به حریم خصوصی شما احترام می‌گذاریم.
                        </p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="border-b border-gray-100 pb-6">
                        <h3 class="text-lg font-medium  mb-3">اطلاعات ما به چه صورت است؟</h3>
                        <p class=" leading-relaxed">
                            نرم‌افزار ما به صورت کاملاً ناشناس و بدون نیاز به ثبت‌نام یا ورود به سیستم کار می‌کند. تمام پردازش‌ها به صورت محلی در دستگاه شما انجام می‌شود و هیچ اطلاعاتی به سرورهای ما ارسال نمی‌شود.
                        </p>
                    </div>

                    <div class="border-b border-gray-100 pb-6">
                        <h3 class="text-lg font-medium  mb-3">هیچ ردپایی از شما باقی نمی‌ماند</h3>
                        <p class=" leading-relaxed">
                            ما از هیچ ابزار تحلیلی، کوکی‌های ردیابی یا فناوری‌های مشابه استفاده نمی‌کنیم. شما می‌توانید با خیال راحت از نرم‌افزار ما استفاده کنید بدون اینکه نگران ردیابی فعالیت‌های خود باشید.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium  mb-3">تعهد ما به شما</h3>
                        <p class=" leading-relaxed">
                            ما متعهد می‌شویم که این سیاست را در تمامی نسخه‌های آینده نرم‌افزار خود حفظ کنیم. اگر هرگونه تغییری در این سیاست ایجاد شود، به صورت شفاف به شما اطلاع‌رسانی خواهد شد.
                        </p>
                    </div>
                </div>
            </div>

            <div class="bg-dark-800 rounded-lg p-6 text-center">
                <h3 class="text-lg font-medium text-blue-800 mb-2">سوالی دارید؟</h3>
                <p>در دیسکورد تیکت باز کنید</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>