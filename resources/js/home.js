// Variables globales mínimas
let isDarkMode = false;

// Inicialización cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Inicializando Planix...');
    
    try {
        // Inicializar componentes principales
        initializeTheme();
        setupEventListeners();
        
        console.log('✅ Planix inicializado correctamente');
    } catch (error) {
        console.error('❌ Error al inicializar Planix:', error);
    }
});

// Configurar event listeners esenciales
function setupEventListeners() {
    console.log('⚙️ Configurando event listeners...');
    
    // Sidebar controls
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarClose = document.getElementById('sidebarClose');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', toggleSidebar);
    }
    
    if (sidebarClose) {
        sidebarClose.addEventListener('click', closeSidebar);
    }
    
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', closeSidebar);
    }
    
    // Responsive handling
    window.addEventListener('resize', handleResize);
}

// Inicializar tema
function initializeTheme() {
    console.log('🎨 Inicializando tema...');
    
    // Cargar tema guardado o detectar sistema
    const savedTheme = localStorage.getItem('planix-theme') || 'system';
    
    if (savedTheme === 'system') {
        isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    } else {
        isDarkMode = savedTheme === 'dark';
    }
    
    applyTheme();
    
    // Escuchar cambios del sistema
    if (window.matchMedia) {
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (localStorage.getItem('planix-theme') === 'system') {
                isDarkMode = e.matches;
                applyTheme();
            }
        });
    }
}

// Aplicar tema
function applyTheme() {
    if (isDarkMode) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
    updateThemeIcon();
}

// Actualizar icono del tema
function updateThemeIcon() {
    const themeIcon = document.getElementById('themeIcon');
    if (themeIcon) {
        themeIcon.className = isDarkMode 
            ? 'fas fa-sun text-gray-600 dark:text-gray-300' 
            : 'fas fa-moon text-gray-600 dark:text-gray-300';
    }
}

// Toggle del tema - FUNCIÓN GLOBAL
function toggleTheme() {
    console.log('🌙 Cambiando tema...');
    
    isDarkMode = !isDarkMode;
    applyTheme();
    
    // Guardar preferencia
    localStorage.setItem('planix-theme', isDarkMode ? 'dark' : 'light');
    
    showNotification(`Tema ${isDarkMode ? 'oscuro' : 'claro'} activado`, 'success');
}

// Navegación - FUNCIÓN GLOBAL (solo notificaciones)
function navigateTo(section, projectId = null) {
    console.log(`🧭 Navegando a: ${section}${projectId ? ` (${projectId})` : ''}`);
    
    // Cerrar sidebar en móvil
    if (window.innerWidth < 1024) {
        closeSidebar();
    }
    
    // Mostrar notificación de cambio de vista
    const sectionName = getSeccionName(section);
    showNotification(`📍 ${sectionName}`, 'info');
}

// Obtener nombre de sección
function getSeccionName(section) {
    const nombres = {
        'hoy': 'Mi Espacio',
        'calendario': 'Calendario',
        'tareas': 'Tareas',
        'proyectos': 'Proyectos',
        'progreso': 'Progreso',
        'configuracion': 'Configuración'
    };
    return nombres[section] || section;
}

// Toggle del sidebar
function toggleSidebar() {
    console.log('📱 Toggle sidebar');
    
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    
    if (!sidebar || !overlay) return;
    
    const isHidden = sidebar.classList.contains('-translate-x-full');
    
    if (isHidden) {
        openSidebar();
    } else {
        closeSidebar();
    }
}

// Abrir sidebar
function openSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    
    if (!sidebar || !overlay) return;
    
    sidebar.classList.remove('-translate-x-full');
    overlay.classList.remove('opacity-0', 'pointer-events-none');
    overlay.classList.add('opacity-100');
}

// Cerrar sidebar
function closeSidebar() {
    console.log('❌ Cerrando sidebar');
    
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    
    if (!sidebar || !overlay) return;
    
    sidebar.classList.add('-translate-x-full');
    overlay.classList.remove('opacity-100');
    overlay.classList.add('opacity-0', 'pointer-events-none');
}

// Sistema de notificaciones simplificado
function showNotification(message, type = 'success', duration = 3000) {
    console.log(`🔔 ${type.toUpperCase()}: ${message}`);
    
    // Crear elemento de notificación
    const notification = document.createElement('div');
    
    // Obtener configuración de tipo
    const typeConfig = getNotificationTypeConfig(type);
    
    notification.className = `fixed top-4 right-4 z-50 px-4 py-3 rounded-xl shadow-xl text-white text-sm font-medium transform translate-x-full transition-all duration-300 flex items-center space-x-2 min-w-64 max-w-md ${typeConfig.bgClass}`;
    
    // Agregar icono y mensaje
    notification.innerHTML = `
        <i class="${typeConfig.icon}"></i>
        <span class="flex-1">${message}</span>
        <button onclick="this.parentElement.remove()" class="ml-2 p-1 hover:bg-white hover:bg-opacity-20 rounded transition-colors">
            <i class="fas fa-times text-xs"></i>
        </button>
    `;
    
    // Agregar al DOM
    document.body.appendChild(notification);
    
    // Mostrar con animación
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
        notification.classList.add('translate-x-0');
    }, 100);
    
    // Auto-remover después del tiempo especificado
    setTimeout(() => {
        hideNotification(notification);
    }, duration);
}

// Configuración de tipos de notificación
function getNotificationTypeConfig(type) {
    const configs = {
        success: {
            bgClass: 'bg-gradient-to-r from-green-500 to-green-600',
            icon: 'fas fa-check-circle'
        },
        error: {
            bgClass: 'bg-gradient-to-r from-red-500 to-red-600',
            icon: 'fas fa-exclamation-circle'
        },
        warning: {
            bgClass: 'bg-gradient-to-r from-yellow-500 to-yellow-600',
            icon: 'fas fa-exclamation-triangle'
        },
        info: {
            bgClass: 'bg-gradient-to-r from-blue-500 to-blue-600',
            icon: 'fas fa-info-circle'
        }
    };
    
    return configs[type] || configs.info;
}

// Ocultar notificación
function hideNotification(notification) {
    if (!notification || !document.body.contains(notification)) return;
    
    notification.classList.remove('translate-x-0');
    notification.classList.add('translate-x-full');
    
    setTimeout(() => {
        if (document.body.contains(notification)) {
            document.body.removeChild(notification);
        }
    }, 300);
}

// Manejar redimensionamiento de ventana
function handleResize() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    
    if (!sidebar || !overlay) return;
    
    if (window.innerWidth >= 1024) {
        // Desktop: mostrar sidebar, ocultar overlay
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('opacity-100');
        overlay.classList.add('opacity-0', 'pointer-events-none');
    } else {
        // Mobile: asegurar que el sidebar esté oculto si no está activo
        if (!overlay.classList.contains('opacity-100')) {
            sidebar.classList.add('-translate-x-full');
        }
    }
}

// Funciones placeholder para mantener la interfaz sin errores
function createTask() {
    // Solo mantiene la función para que no haya errores en onclick
    console.log('Función createTask deshabilitada');
}

// Hacer funciones disponibles globalmente
window.navigateTo = navigateTo;
window.toggleTheme = toggleTheme;
window.createTask = createTask;

console.log('🚀 JavaScript simplificado de Planix cargado completamente');