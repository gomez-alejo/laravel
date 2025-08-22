            <!-- Header Superior -->
            <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 p-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <button id="sidebarToggle" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-bars text-gray-600 dark:text-gray-300"></i>
                        </button>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Mi Espacio</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Viernes, 22 de Agosto 2025</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <!-- Búsqueda -->
                        <div class="relative hidden md:block">
                            <input type="text" placeholder="Buscar tareas..." class="w-64 pl-10 pr-4 py-2 bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all dark:text-white dark:placeholder-gray-400">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        
                        <!-- Theme Toggle -->
                        <button onclick="toggleTheme()" class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <i id="themeIcon" class="fas fa-moon text-gray-600 dark:text-gray-300"></i>
                        </button>
                        
                        <!-- Notificaciones -->
                        <button class="relative p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <i class="fas fa-bell text-gray-600 dark:text-gray-300"></i>
                            <div class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full animate-bounce"></div>
                        </button>
                        
                        <!-- Botón Crear -->
                        <button onclick="createTask()" class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white px-4 py-2 rounded-xl font-medium flex items-center space-x-2 transition-all duration-200 shadow-lg transform hover:scale-105">
                            <i class="fas fa-plus"></i>
                            <span class="hidden sm:inline">Crear Tarea</span>
                        </button>
                    </div>
                </div>
            </header>