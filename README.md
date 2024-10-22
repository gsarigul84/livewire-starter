### Laravel Livewire Boilerplate With Tailwind CSS, Preline.co and FilamentPHP

This is a boilerplate for Laravel Livewire with Tailwind CSS, Preline.co and FilamentPHP. Docker-compose file contains _only_ mariadb service. You can add more services if you want.
Following blade components are included in this boilerplate:

- Alert
- Button
- Card
- Input
- Select
- Textarea

You can use these components in your blade files.

Please refer to (livewire)[https://livewire.laravel.com], (filament.php)[https://filamentphp.com/], (tailwindcss)[https://tailwindcss.com/] and (preline.co)[https://preline.co] for more information.

### Installation

1. Clone the repository
2. 
3. Run `composer install`
4. Run `npm install`
5. Change .env file according to your environment
6. Run `npm run dev`
7. Run `php artisan migrate`
8. Run `php artisan serve`
9. Visit `http://localhost:8000`

You need to have docker and docker-compose installed on your machine to run the mariadb service. If you don't have docker and docker-compose installed, you can install them by following the instructions on the official docker website.

### Configuration

`App\Providers\Filament\AdminPanelProvider.php` file contains the following code:

```php
    ... // More code above
    return $panel
            ->default()
            ->id('admin')
            ->path('admin') // Change this to your desired path
            ... // Mode code below
```



### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

My own snippets, just what you see on this repository are under [WTFPL](https://www.wtfpl.net/), so, have fun..?
