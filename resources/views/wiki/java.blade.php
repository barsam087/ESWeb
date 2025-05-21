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
            <div class="flex-1">
            <h1 class="text-3xl font-bold mb-6 border-b border-gray-700 pb-2" id="installing-java">نصب جاوا</h1>
            
            <h2 class="text-2xl font-semibold mt-8 mb-4" id="automatically-installing-java">نصب خودکار جاوا (توصیه شده)</h2>
            <div class="prose prose-invert max-w-none">
                <p>در پریم لانچر نسخه ۹.۰ به بالا، می‌توانید اجازه دهید لانچر به صورت خودکار جاوا را در ویندوز، مک و لینوکس (در تمام بسته‌ها موجود نیست) مدیریت کند با فعال کردن گزینه‌های "Autodetect Java version" و "Auto-download Mojang Java" در:</p>
                <div class="bg-gray-800 p-4 rounded-lg my-4 border-l-4 border-blue-500">
                    <p>Settings (نوار ابزار بالا) > Java</p>
                </div>
                <p>این باعث می‌شود لانچر به صورت خودکار نسخه مناسب جاوا را برای نسخه ماینکرفت شما دانلود کند (جاوا ۸ برای نسخه‌های قبل از ۱.۱۷، جاوا ۱۷ برای ۱.۱۷ تا ۱.۲۰.۴ و غیره). بقیه این صفحه به توضیح نصب دستی جاوا می‌پردازد و احتمالاً برای شما لازم نیست.</p>
                <p>اگر دانلودر جاوا برای شما در دسترس نیست - که در بیشتر بسته‌های لینوکس به جز Flatpak و AppImage رسمی اینطور است - نصب دستی توصیه می‌شود.</p>
            </div>
            </div>


            <div class="prose prose-invert max-w-none">
            <h2 class="text-2xl font-semibold mt-8 mb-4" id="automatically-installing-java">نصب دستی جاوا (توصیه نشده)</h2>
            <h2>فهرست دانلود جاوا</h2>
            <h2>ورژن جاوا را از لیست زیر دانلود کنید</h2>

            <table class="divide-y divide-gray-700" dir="ltr">
            <thead>
            <tr>
            <th style="text-align:center">Minecraft</th>
            <th style="text-align:center">CPU type</th>
            <th>Download page</th>
            <th>Viable alternatives</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td style="text-align:center">Minecraft <strong>1.20.5</strong> or above</td>
            <td style="text-align:center">x86-64</td>
            <td><a href="https://aka.ms/download-jdk/microsoft-jdk-21-windows-x64.msi">Microsoft OpenJDK 21 for Windows x64, <code>.msi</code> installer</a></td>
            <td>Azul, Coretto, Temurin, GraalVM</td>
            </tr>
            <tr>
            <td style="text-align:center"></td>
            <td style="text-align:center">x86</td>
            <td>Not available :(</td>
            <td></td>
            </tr>
            <tr>
            <td style="text-align:center"></td>
            <td style="text-align:center">aarch64</td>
            <td><a href="https://aka.ms/download-jdk/microsoft-jdk-21-windows-aarch64.msi">Microsoft OpenJDK 21 for Windows aarch64, <code>.msi</code> installer</a></td>
            <td>Azul</td>
            </tr>
            <tr>
            <td style="text-align:center">Minecraft <strong>1.17</strong> to <strong>1.20.4</strong></td>
            <td style="text-align:center">x86-64</td>
            <td><a href="https://aka.ms/download-jdk/microsoft-jdk-17-windows-x64.msi">Microsoft OpenJDK 17 for Windows x64, <code>.msi</code> installer</a></td>
            <td>Azul, Coretto, Temurin, GraalVM</td>
            </tr>
            <tr>
            <td style="text-align:center"></td>
            <td style="text-align:center">x86</td>
            <td><a href="https://adoptium.net/temurin/releases/?version=17&amp;arch=x86&amp;os=windows">Temurin OpenJDK 17 for Windows x32, <code>.msi</code> installer</a></td>
            <td>Azul, Coretto</td>
            </tr>
            <tr>
            <td style="text-align:center"></td>
            <td style="text-align:center">aarch64</td>
            <td><a href="https://aka.ms/download-jdk/microsoft-jdk-17-windows-aarch64.msi">Microsoft OpenJDK 17 for Windows aarch64, <code>.msi</code> installer</a></td>
            <td>Azul</td>
            </tr>
            <tr>
            <td style="text-align:center">Minecraft <strong>1.16</strong> or below</td>
            <td style="text-align:center">x86-64</td>
            <td><a href="https://adoptium.net/temurin/releases/?version=8&amp;arch=x64&amp;os=windows">Temurin OpenJDK 8 for Windows x64, <code>.msi</code> installer</a></td>
            <td>Azul, Coretto</td>
            </tr>
            <tr>
            <td style="text-align:center"></td>
            <td style="text-align:center">x86</td>
            <td><a href="https://adoptium.net/temurin/releases/?version=8&amp;arch=x86&amp;os=windows">Temurin OpenJDK 8 for Windows x64, <code>.msi</code> installer</a></td>
            <td>Azul, Coretto</td>
            </tr>
            <tr>
            <td style="text-align:center"></td>
            <td style="text-align:center">aarch64</td>
            <td>Not available :(</td>
            <td></td>
            </tr>
            </tbody>
            </table>

            </div>
            <p>برای استفاده از جاوا</p>
            <p>راست کلیک روی version > Edit > Settings > Java > Java installation > Auto-Detect...</p>
            <hr class="border-gray-700 my-8">
            

            

        </div>
        
        @include('layouts.toc')
</div>


    @include('layouts.footer')
</body>
</html>