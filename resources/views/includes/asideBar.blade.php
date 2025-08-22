        <!-- Sidebar -->
        <aside id="sidebar" class="fixed lg:static lg:translate-x-0 w-64 h-full bg-white dark:bg-gray-800 shadow-xl border-r border-gray-200 dark:border-gray-700 transition-all duration-300 flex flex-col z-40 -translate-x-full lg:z-auto">
            <!-- Header del Sidebar -->
            <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3 animate-fade-in">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold text-lg shadow-lg">
                            P
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-800 dark:text-white">Planix</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Organiza tu mundo</p>
                        </div>
                    </div>
                    
                    <!-- Botón de cerrar para móvil -->
                    <button id="sidebarClose" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                        <i class="fas fa-times text-gray-600 dark:text-gray-300 text-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Usuario -->
            <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center space-x-3 animate-slide-in">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center text-white font-semibold shadow-lg">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="font-semibold text-gray-800 dark:text-white">Sophia</h2>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Mi Espacio</p>
                    </div>
                    <button class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg transition-colors">
                        <i class="fas fa-chevron-down text-gray-400"></i>
                    </button>
                </div>
            </div>

            <!-- Navegación Principal -->
            <nav class="flex-1 p-4 space-y-2">
                <a href="{{route('home')}}"><button onclick="navigateTo('hoy')" class="nav-item active w-full flex items-center space-x-3 p-3 rounded-xl transition-all duration-200">
                    <i class="fas fa-home text-lg"></i>
                    <span class="font-medium">Inicio</span>
                    <div class="ml-auto w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                </button></a>
                
                <a href="{{route('calendario')}}"><button onclick="navigateTo('calendario')" class="nav-item w-full flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-calendar-alt text-lg"></i>
                    <span class="font-medium">Calendario</span>
                </button></a>
                
                <button onclick="navigateTo('tareas')" class="nav-item w-full flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-tasks text-lg"></i>
                    <span class="font-medium">Tareas</span>
                    <div class="ml-auto bg-orange-500 text-white text-xs px-2 py-1 rounded-full">3</div>
                </button>
                
                <button onclick="navigateTo('proyectos')" class="nav-item w-full flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-folder text-lg"></i>
                    <span class="font-medium">Proyectos</span>
                </button>
                
                <button onclick="navigateTo('progreso')" class="nav-item w-full flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-chart-bar text-lg"></i>
                    <span class="font-medium">Progreso</span>
                    <div class="ml-auto">
                        <span class="text-xs text-green-500 font-semibold">78%</span>
                    </div>
                </button>
            </nav>

            <!-- Proyectos Recientes -->
            <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                <h3 class="text-sm font-semibold text-gray-500 dark:text-gray-400 mb-3 uppercase tracking-wide">Proyectos</h3>
                <div class="space-y-2">
                    <button onclick="navigateTo('proyecto', 'web-design')" class="w-full flex items-center space-x-3 p-2 rounded-lg transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <span class="text-sm">Diseño Web</span>
                        <div class="ml-auto text-xs text-gray-400">5</div>
                    </button>
                    <button onclick="navigateTo('proyecto', 'mobile-app')" class="w-full flex items-center space-x-3 p-2 rounded-lg transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                        <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
                        <span class="text-sm">App Móvil</span>
                        <div class="ml-auto text-xs text-gray-400">2</div>
                    </button>
                    <button onclick="navigateTo('proyecto', 'marketing')" class="w-full flex items-center space-x-3 p-2 rounded-lg transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        <span class="text-sm">Marketing</span>
                        <div class="ml-auto text-xs text-gray-400">1</div>
                    </button>
                </div>
            </div>

            <!-- Configuración -->
            <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                <button onclick="navigateTo('configuracion')" class="nav-item w-full flex items-center space-x-3 p-3 rounded-xl transition-all duration-200 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-gray-800 dark:hover:text-white">
                    <i class="fas fa-cog text-lg"></i>
                    <span class="font-medium">Configuración</span>
                </button>
            </div>
        </aside>