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

<div class="container mx-auto px-4 py-8 flex flex-col lg:flex-row gap-8">
        <!-- Main Content -->
        <div class="flex-1" dir="rtl">
            <h1 class="text-3xl font-bold mb-6 border-b border-gray-700 pb-2">ایجاد instance</h1>
            
            <div class="prose prose-invert max-w-none">
<div class="bg-drak-950 rounded-lg shadow-md p-6 my-4 font-vazir text-right">
    <h1 id="creating-an-instance" class="text-2xl font-bold mb-4 text-blue-600 border-b pb-2">
        ایجاد یک instance جدید
        <a href="#creating-an-instance" class="text-gray-400 hover:text-blue-500 ml-2 text-lg">#</a>
    </h1>
    <p class="mb-6 leading-relaxed">
        برای ایجاد یک instance جدید، کافیست روی دکمه <strong class="text-blue-600">افزودن instance</strong> در نوار منوی بالایی کلیک کنید، یا روی فضای خالی در وسط لانچر راست-کلیک کرده و گزینه <strong class="text-blue-600">ایجاد instance</strong> را انتخاب نمایید.
    </p>

    <h2 id="editing-an-instance" class="text-xl font-bold mt-8 mb-4 text-blue-600 border-b pb-2">
        ویرایش instance
        <a href="#editing-an-instance" class="text-gray-400 hover:text-blue-500 ml-2 text-lg">#</a>
    </h2>
    <p class="mb-6 leading-relaxed">
        پس از ایجاد instance، می‌توانید با راست-کلیک روی آن، منوی زمینه حاوی برخی تنظیمات پایه را مشاهده کنید. از این لیست، گزینه <strong class="text-blue-600">ویرایش instance</strong> را انتخاب کنید تا به منوی ویرایش دسترسی پیدا کنید.
    </p>

    <h3 id="configure-instance-java" class="text-lg font-bold mt-8 mb-4 text-blue-600 border-b pb-2">
        پیکربندی جاوا برای instance
        <a href="#configure-instance-java" class="text-gray-400 hover:text-blue-500 ml-2 text-lg">#</a>
    </h3>
    <p class="leading-relaxed">
        ESLauncher هنوز به صورت خودکار نسخه صحیح جاوا را برای instance شما تنظیم نمی‌کند. برای انتخاب <strong class="text-blue-600">دستی</strong> یک نسخه از جاوا، پنجره <strong class="text-blue-600">تنظیمات</strong> را از نوار منوی بالایی باز کنید، تب <strong class="text-blue-600">جاوا</strong> را در نوار کناری سمت چپ انتخاب نمایید، و در بخش <strong class="text-blue-600">رانتایم جاوا</strong>، روی <strong class="text-blue-600">تشخیص خودکار...</strong> کلیک کنید، سپس نسخه مناسب را انتخاب نمایید. صفحه <a href="../installing-java" class="text-blue-600 hover:underline">نصب جاوا</a> ما اطلاعات بیشتری درباره نسخه‌های صحیح جاوا برای هر نسخه ماینکرفت ارائه می‌دهد.
    </p>

    <hr class="my-8 border-gray-200">
</div>
                
                
            </div>
            
            <hr class="border-gray-700 my-8">
            

            

        </div>
        
@include('layouts.toc')
</div>


    @include('layouts.footer')
</body>
</html>