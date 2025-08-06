# Fundación DAADIOS - Sitio Web Oficial

Página web oficial de la Fundación DAADIOS, diseñada para transformar vidas a través de la educación. Este sitio permite a estudiantes de secundaria del cantón de Escazú aplicar al programa de becas y conocer más sobre los servicios que ofrecemos.

## 🌟 Características

- **Diseño Responsivo**: Optimizado para dispositivos móviles, tabletas y escritorio
- **Estética Personalizada**: Basada en el libro de marca oficial de DAADIOS
- **Formularios Funcionales**: Integración con Formspree para envío de solicitudes
- **Navegación Fluida**: Scroll suave entre secciones
- **Optimizado para SEO**: Meta tags y estructura semántica
- **Accesible**: Cumple con estándares de accesibilidad web

## 🎨 Paleta de Colores

- **Naranja Vibrante**: #F58220 (Color principal)
- **Amarillo**: #FFC20E (Color secundario)
- **Marrón**: #C15E20 (Acento)
- **Azul**: #1C78BE (Secundario)
- **Celeste**: #41B9D8 (Secundario)

## 🚀 Instalación y Desarrollo

### Prerrequisitos
- Node.js 18+ 
- npm o yarn

### Instalación
```bash
# Clonar el repositorio
git clone [repository-url]
cd TCU-PagWeb

# Instalar dependencias
npm install

# Ejecutar en modo desarrollo
npm run dev
```

### Scripts Disponibles
- `npm run dev` - Inicia el servidor de desarrollo
- `npm run build` - Construye la aplicación para producción
- `npm run preview` - Previsualiza la build de producción
- `npm run astro` - Ejecuta comandos de Astro CLI


## 🎯 Secciones del Sitio

1. **Inicio**: Hero section con llamada a la acción
2. **Sobre Nosotros**: Misión, visión y propósito
3. **Servicios**: Tres pilares del acompañamiento
4. **Programa de Becas**: Requisitos, beneficios y cronograma
5. **Aplicar**: Formulario funcional de solicitud
6. **Contacto**: Información de contacto y ubicación

## 📧 Configuración del Formulario

El formulario de aplicación está configurado para enviar los datos a:
- **Email**: progbecas@fundaciondaadios.org
- **Servicio**: Formspree (configurable en Application.astro)

Para cambiar el servicio de formularios, modifica la acción del form en `src/components/Application.astro`:

```html
<form action="https://formspree.io/f/your-form-id" method="POST">
```

## 🚀 Despliegue

### Vercel
```bash
npm run build
# Subir la carpeta dist/ a Vercel
```

### Netlify
```bash
npm run build
# Arrastrar la carpeta dist/ a Netlify
```

### GitHub Pages
```bash
npm run build
# Configurar GitHub Actions para despliegue automático
```

## 🎨 Personalización

### Colores
Los colores se definen en `src/components/BaseLayout.astro` en las variables CSS:

```css
:root {
  --color-primary: #F58220;
  --color-yellow: #FFC20E;
  /* ... más colores */
}
```

### Tipografía
Se utiliza la fuente **Poppins** como tipografía principal, cargada desde Google Fonts.

### Logos
Los logos están en formato SVG en la carpeta `public/` y pueden ser editados directamente.

## 📱 Responsive Design

El sitio está optimizado para:
- **Móvil**: 320px - 768px
- **Tablet**: 768px - 1024px  
- **Desktop**: 1024px+

## 🔧 Tecnologías Utilizadas

- **Astro**: Framework de desarrollo web
- **HTML5**: Estructura semántica
- **CSS3**: Estilos y animaciones
- **JavaScript**: Interactividad
- **SVG**: Gráficos vectoriales
- **Formspree**: Manejo de formularios

## � Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo LICENSE para más detalles.
