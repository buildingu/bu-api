## About BuildingU-backend

This is an Admin/API  application developed with the purpose of replicate the functionality of the current building-u website. 

## Dependencies

<ul>
    <li>"livewire/livewire": "^2.5"</li>
    <li>"owenvoke/blade-fontawesome": "^1.9"</li>
    <li>"spatie/laravel-medialibrary": "^9.0.0"</li>
    <li>"spatie/laravel-permission": "^4.2"</li>
</ul>

## API Documentation

This API documentation will be informed when available.

## Local environment

In order to set up locally is recommended to have docker and docker compose. This project was made using the sail Laravel utility.
With these requirements out of the way you need to execute:

<ol>
    <li>Clone repository</li>
    <li><code>cd localpath/building-u-backend</code></li>    
    <li><code>cp .env.example .env</code></li>
    <li><code>composer install</code></li>
    <li><code>php artisan key:generate</code></li>
</ol>

You can start the project running <code>php artisan serve</code> in your <code>localpath/building-u-backend/</code> folder.
