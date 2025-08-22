@extends('layouts.app')

@section('title', 'Home')

@vite(['resources/css/home.css',])


@section('content')
        <!-- Contenido Principal -->
        <main class="flex-1 flex flex-col overflow-hidden">
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

            <!-- Contenido -->
            <div class="flex-1 overflow-auto bg-gray-50 dark:bg-gray-900">
                <div class="p-6">
                    <!-- Welcome Section -->
                    <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-6 mb-6 text-white animate-fade-in">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-3xl font-bold mb-2">¡Hola, Sophia!</h2>
                                <p class="text-blue-100">¿Listo para comenzar el día con algunas tareas?</p>
                            </div>
                            <div class="hidden md:block">
                                <div class="w-24 h-24 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                                    <i class="fas fa-rocket text-3xl animate-bounce"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 animate-fade-in" style="animation-delay: 0.1s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-red-100 dark:bg-red-900 rounded-lg">
                                    <i class="fas fa-tasks text-red-500 text-xl"></i>
                                </div>
                                <span class="text-2xl font-bold text-gray-800 dark:text-white">2</span>
                            </div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Tareas Vencidas</h3>
                            <div class="mt-2 flex items-center text-sm text-red-500">
                                <i class="fas fa-arrow-up mr-1"></i>
                                <span>Próximos 7 Días</span>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 animate-fade-in" style="animation-delay: 0.2s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-blue-100 dark:bg-blue-900 rounded-lg">
                                    <i class="fas fa-clock text-blue-500 text-xl"></i>
                                </div>
                                <span class="text-2xl font-bold text-gray-800 dark:text-white">15</span>
                            </div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Próximos 7 Días</h3>
                            <div class="mt-2 flex items-center text-sm text-blue-500">
                                <i class="fas fa-calendar mr-1"></i>
                                <span>Esta semana</span>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 animate-fade-in" style="animation-delay: 0.3s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-purple-100 dark:bg-purple-900 rounded-lg">
                                    <i class="fas fa-lightbulb text-purple-500 text-xl"></i>
                                </div>
                                <span class="text-2xl font-bold text-gray-800 dark:text-white">5</span>
                            </div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Sugerencias</h3>
                            <div class="mt-2 flex items-center text-sm text-purple-500">
                                <i class="fas fa-star mr-1"></i>
                                <span>IA Inteligente</span>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 animate-fade-in" style="animation-delay: 0.4s">
                            <div class="flex items-center justify-between mb-4">
                                <div class="p-3 bg-green-100 dark:bg-green-900 rounded-lg">
                                    <i class="fas fa-chart-line text-green-500 text-xl"></i>
                                </div>
                                <span class="text-2xl font-bold text-gray-800 dark:text-white">78%</span>
                            </div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Progreso Semanal</h3>
                            <div class="mt-2 w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full transition-all duration-1000" style="width: 78%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content Areas -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Tareas de Hoy -->
                        <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Tareas de Hoy</h3>
                                <button class="text-sm text-blue-500 hover:text-blue-600 font-medium">Ver todas</button>
                            </div>
                            
                            <!-- Placeholder para tareas -->
                            <div class="space-y-4">
                                <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600 flex items-center justify-center">
                                    <div class="text-center">
                                        <i class="fas fa-tasks text-3xl text-gray-400 mb-2"></i>
                                        <p class="text-gray-500 dark:text-gray-400">Las tareas aparecerán aquí</p>
                                        <button onclick="createTask()" class="mt-2 text-blue-500 hover:text-blue-600 font-medium">
                                            + Crear primera tarea
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Panel Lateral -->
                        <div class="space-y-6">
                            <!-- Calendario Mini -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Agosto 2025</h3>
                                <div class="text-center">
                                    <div class="p-8 bg-gray-50 dark:bg-gray-700 rounded-lg border-2 border-dashed border-gray-300 dark:border-gray-600">
                                        <i class="fas fa-calendar-alt text-2xl text-gray-400 mb-2"></i>
                                        <p class="text-gray-500 dark:text-gray-400 text-sm">Vista de calendario</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Progreso Semanal -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-4">Progreso Semanal</h3>
                                <div class="space-y-3">
                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-600 dark:text-gray-400">Tareas Completadas</span>
                                            <span class="text-gray-800 dark:text-white font-medium">60%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full transition-all duration-1000" style="width: 60%"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between text-sm mb-1">
                                            <span class="text-gray-600 dark:text-gray-400">Tareas Restantes</span>
                                            <span class="text-gray-800 dark:text-white font-medium">40%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                            <div class="bg-gray-400 h-2 rounded-full transition-all duration-1000" style="width: 40%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection

@vite(['resources/js/home.js'])

