    <!-- Interactive background grid -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0 opacity-20">
        <div class="absolute inset-0 grid grid-cols-12 grid-rows-12 gap-px">
            <template x-for="i in 144" :key="i">
                <div class="bg-dark-800 hover:bg-neon-cyan transition-all duration-1000" 
                     @mousemove="document.querySelector(`.bg-cell-${i}`).classList.add('bg-neon-cyan'); setTimeout(() => document.querySelector(`.bg-cell-${i}`).classList.remove('bg-neon-cyan'), 1000)">
                </div>
            </template>
        </div>
    </div>

    <!-- Navigation with morphing menu -->
    <nav class="relative z-50 py-6 px-6 md:px-12 lg:px-24 flex justify-between items-center">
        <a href="/">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-xl neu flex items-center justify-center">
                <!-- <div class="w-6 h-6 rounded-lg bg-gradient-to-br from-neon-cyan to-neon-purple"></div> -->
                 <img src="{{ asset('/logo.png') }}" alt="">
            </div>
            <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-neon-cyan to-neon-purple">ESLauncher</span>
        </div>
        </a>

        
        <div class="hidden md:flex items-center space-x-1">
            <a href="/news">
            <button class="px-5 py-2 rounded-xl neu hover:neu-inset transition-all duration-300 text-sm font-medium group relative overflow-hidden">
                <span class="relative z-10">news</span>
                <span class="absolute inset-0 bg-gradient-to-r from-neon-cyan/20 to-neon-purple/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>
            </a>

            <a href="/about">
            <button class="px-5 py-2 rounded-xl neu hover:neu-inset transition-all duration-300 text-sm font-medium group relative overflow-hidden">
                <span class="relative z-10">about</span>
                <span class="absolute inset-0 bg-gradient-to-r from-neon-purple/20 to-neon-pink/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>
            </a>

            <a href="/wiki">
                <button class="px-5 py-2 rounded-xl neu hover:neu-inset transition-all duration-300 text-sm font-medium group relative overflow-hidden" >
                <span class="relative z-10">tutorial</span>
                <span class="absolute inset-0 bg-gradient-to-r from-neon-pink/20 to-neon-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>
            </a>

            <button class="px-5 py-2 rounded-xl neu hover:neu-inset transition-all duration-300 text-sm font-medium group relative overflow-hidden" onclick="location.href='https://discord.gg/RnhuqbBFyv'"  type="button">
                <span class="relative z-10">discord</span>
                <span class="absolute inset-0 bg-gradient-to-r from-neon-pink/20 to-neon-cyan/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
            </button>
        </div>
        
        <a href="/downloads">
        <button class="px-6 py-2.5 rounded-xl gradient-border text-sm font-medium group">
            <div class="px-4 py-1.5 rounded-[18px]  group-hover:bg-dark-800 transition-all duration-300">
                Download
            </div>
        </button>
        </a>

    </nav>