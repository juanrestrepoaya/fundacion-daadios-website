@echo off
echo ========================================
echo    CONSTRUCCION PARA 506 HOSTING
echo    Fundacion DAADIOS Website
echo ========================================
echo.

echo [1/4] Limpiando archivos anteriores...
if exist dist rmdir /s /q dist

echo [2/4] Instalando dependencias...
call npm install

echo [3/4] Construyendo el sitio web...
call npm run build

echo [4/4] Verificando archivos generados...
if exist dist (
    echo.
    echo ✅ CONSTRUCCION EXITOSA!
    echo.
    echo Los archivos estan listos en la carpeta 'dist'
    echo Sube todo el contenido de la carpeta 'dist' a tu hosting
    echo.
    echo Archivos principales:
    dir dist /b
    echo.
    echo ========================================
    echo    LISTO PARA 506 HOSTING
    echo ========================================
) else (
    echo.
    echo ❌ ERROR: No se pudo construir el sitio
    echo Revisa los errores anteriores
)

pause
