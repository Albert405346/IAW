# IAW
Implantació Aplicacions Web

# Execució del projecte Activitat 4: Entonr LAMP amb Docker Compose

- **Descripció: Crearem un entorn híbrid (LAMP: Linux, Apache, Mysql i PHP) amb Docker i Docker Compose**

## Instal·lació de Docker i Docker Compose
- **Requisits: tenir instal·lat Docker i Docker Compose** *Com?*
- *Instal·lant paquets requerits, creant un repositori per a la clau GPG, descarreguant-la, configurant repositoris, actualitzant-los e instal·lant Docker i dependències.*

## Creació dels contenidors
- **Objectius: crear 3 contenidors amb Docker Compose que continguin:**
1. WEB (Servidor Web/Llenguatge de programació): Apache + PHP
2. D.B (Database): MySQL
3. phpMyAdmin (Interfície gràfica per a MySQL)

- **Passos:**
1. Crear l'estructura de carpetes *(projecta-lamp-docker/)*
2. Editar l'arxiu *docker-compose.yml* definint cada cotenidor
3. Editar l'arxiu *index.php* definint el missatge *Hola món!*
4. Activar-los amb *sudo docker-compose up -d*

## Comprovacions
- **Estat dels contenidors amb sudo docker ps**
- Accedir als serveis:
- **WEB + MySQL amb localhost:8080/**
- **phpMyAdmin amb localhost:8081/**
