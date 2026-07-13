# TutorialPluginMatrix

Repositorio de prácticas del curso **CEPRUD** sobre desarrollo de plugins para Moodle e integración con Matrix/Element.

Contiene dos componentes independientes:

| Componente | Descripción |
|---|---|
| [`holamundo/`](./holamundo/README.md) | Plugin de bloque para Moodle: saludo personalizable + contador de visitas |
| [`moodle-matrix-dev/`](./moodle-matrix-dev/README.md) | Entorno Docker local con Moodle, MariaDB, Synapse (Matrix) y Element Web |

---

## Requisitos previos

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) instalado y corriendo
- WSL (Windows Subsystem for Linux) con Ubuntu
- Acceso a `http://localhost:8000` (Moodle), `http://localhost:8008` (Synapse), `http://localhost:8081` (Element)

---

## Inicio rápido

```bash
# 1. Clonar o descargar el repositorio
cd /mnt/c/Users/julia/Desktop/PracticasCEPRUD/TutorialPluginMatrix

# 2. Levantar el entorno
cd moodle-matrix-dev
docker compose up -d

# 3. Instalar el plugin de Moodle
docker cp \
  /mnt/c/Users/julia/Desktop/PracticasCEPRUD/TutorialPluginMatrix/holamundo \
  moodle-app:/bitnami/moodle/blocks/holamundo

docker exec --user root moodle-app \
  chown -R daemon:daemon /bitnami/moodle/blocks/holamundo

# 4. Activar el plugin en Moodle
# Abre http://localhost:8000/admin/index.php → "Actualizar base de datos de Moodle ahora"
```

---

## Credenciales por defecto

| Servicio | URL | Usuario | Contraseña |
|---|---|---|---|
| Moodle | `http://localhost:8000` | `admin` | `adminpass123` |
| Element Web | `http://localhost:8081` | `admin` | `adminpass123` |
| MariaDB | `localhost:3306` (solo interno) | `bn_moodle` | `moodle_db_pass` |

---

## Documentación detallada

- 📦 **Plugin `holamundo`** → [`holamundo/README.md`](./holamundo/README.md)
  - Estructura del plugin, instalación paso a paso, comandos de diagnóstico
- 🐳 **Entorno Docker** → [`moodle-matrix-dev/README.md`](./moodle-matrix-dev/README.md)
  - Configuración de Moodle + Matrix, obtención del token de acceso, activación del proveedor Matrix
