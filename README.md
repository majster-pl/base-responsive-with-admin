
  

<p  align="center"><a  target="_blank"><img  src="https://github.com/majster-pl/base-responsive-with-admin/blob/main/public/images/logo.svg?raw=true"  width="200"></a></p>

  

  

# Base bone website setup with side menu and admin panel.

  

This is a source code for base bone website setup created using breeze and orchid admin panel with user roles and permissions.

## Used technologies:
		Laravel
		Livewire
		Turbolinks
		Breeze
		Orchid
		Spatie
		TailwindCSS & Tailwind Elements
		Remixicon
		AlpineJs
		Turbolinks
		

## Gallery
|  <img  src="https://github.com/majster-pl/base-responsive-with-admin/blob/main/resources/demo-images/1.png?raw=true"  width="300">| <img  src="https://github.com/majster-pl/base-responsive-with-admin/blob/main/resources/demo-images/2.png?raw=true"  width="300"> |
|--|--|
| <img  src="https://github.com/majster-pl/base-responsive-with-admin/blob/main/resources/demo-images/3.png?raw=true"  width="300"> | <img  src="https://github.com/majster-pl/base-responsive-with-admin/blob/main/resources/demo-images/4.png?raw=true"  width="300"> |


## Get started

  

Clone repo:

    git clone https://github.com/majster-pl/base-responsive-with-admin && cd base-responsive-with-admin

  

install packages:

    npm install -s
    composer install

Copy .env file:

    cp .env.example .env

Generate application key using command below and enter generated key to .env file.

    php artisan key:generate

  
Change .evn file with your db etc.

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
    DASHBOARD_PREFIX='admin'

Migrate database:

    php artisan migrate
Create admin user and setup password:

    php artisan orchid:admin Admin admin@admin.org password


## Running the project

### Run locally:
    npm run dev
    php artisan serve

#### Admin panel:
Visit http://localhost:8000/admin and use earlier setup email and password.

#### Main page:
Visit http://localhost:8000/ and use earlier setup email and password.


### To build project for **production** run:

    npm run build

Upload project to the server.

