# Optime Consulting Test
Follow the next steps to download and install the project into your local machine.
This project was created using 
- **Symfony Framework 3.3.14**
## Clone the project
    git clone https://github.com/WilmerGuevara/optimeconsulting-test.git
## 	Change directory
    cd optimeconsulting-test
## 	Composer install
    composer install
Using this command composer will install all necessary dependencies to setup and run the project.
## 	Build parameters
When composer is finishing installation process, this will ask for database configuration, so you can fill the next fields with your own configuration.
```yaml
database_host: 127.0.0.1
database_port: (your_port)
database_name: (db_name)
database_user: (your_db_user)
database_password: (your_db_password)
mailer_transport: smtp
mailer_host: 127.0.0.1
mailer_user: null
mailer_password: null
secret: (press_enter)
```
## Generate Database using Doctrine
    php bin/console doctrine:database:create
## 	Generate Database schema
    php bin/console doctrine:schema:create
## 	Run the server
    php bin/console server:run
## 	SQL Help
Use the following to create example categories into your database.
```sql
INSERT INTO `category` (`id`, `code`, `name`, `description`, `active`) VALUES
(1, 'Cat01', 'Zapatos', 'Categoría para zapatos', 1),
(2, 'Cat02', 'Colores', 'Categoría para colores', 1),
(3, 'Cat03', 'Sabores', 'Categoría para sabores', 0),
(4, 'Cat04', 'Tallas', 'Categoría para tallas', 0),
(5, 'Cat05', 'Tecnología', 'Categoría para tecnología', 0),
(6, 'Cat06', 'Raza', 'Categoría para razas', 0);
```
Use the following sql script to create example products into your database.
```sql
INSERT INTO `product` (`id`, `category_id`, `code`, `name`, `description`, `brand`, `price`) VALUES
(1, 1, 'pdto01', 'Tennis Deportivos', 'Tennis deportivos', 'Nike', 200000),
(2, 2, 'pdto02', 'Azul', 'Color azul', 'Prismacolor', 1000),
(3, 3, 'pdto03', 'Menta', 'Sabor menta helada', 'Ice', 2000),
(4, 4, 'pdto04', 'Jean', 'Jean Talla 30', 'Levis', 250000),
(5, 6, 'pdto05', 'Toby', 'Cachorro de 2 meses', 'Labrador', 350000),
(6, 1, 'pdto06', 'Tennis de marcha', 'Tennis para trotar', 'Adidas', 500000);
```