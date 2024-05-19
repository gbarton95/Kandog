# Kandog

Kandog is a web application that provides resources to dog trainers and related professionals in Zaragoza with the aim of educating the public on the care and education of their dogs.

## Features

- **Trainer Management**: Trainers can manage their own profiles and their clients.
- **Client Management**: Owners can register and manage their dogs.
- **Session Management**: Trainers can add sessions, receive notifications for upcoming sessions, and view a complete list of past and pending sessions.
- **PDF Reports**: Generate detailed reports for dogs, filling in pertinent information for each day.
- **Resource Access**: Provides educational resources for dog care and training.
- **User-Friendly Interface**: Built with Blade templates and Bootstrap for responsive and intuitive design.

## Technologies Used

- **Laravel**: PHP framework for web applications.
- **Blade**: Laravel's powerful, simple templating engine.
- **Bootstrap**: CSS framework for responsive and modern web design.
- **DOMPDF**: Generate PDFs from HTML in Laravel.
- **GuzzleHTTP**: HTTP client for making requests.

## Installation

Follow these steps to get a local copy of Kandog up and running.

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js and npm

### Steps

1. **Clone the repository**

    ```sh
    git clone https://github.com/your-username/kandog.git
    cd kandog
    ```

2. **Install dependencies**

    ```sh
    composer install
    npm install
    npm run dev
    ```

3. **Copy the example environment file and configure**

    ```sh
    cp .env.example .env
    ```

    Open `.env` and update the database credentials and other necessary settings.

4. **Generate application key**

    ```sh
    php artisan key:generate
    ```

5. **Run migrations**

    ```sh
    php artisan migrate
    ```

6. **Serve the application**

    ```sh
    php artisan serve
    ```

    Open your browser and go to `http://localhost:8000`.

## Usage

1. **Register as a trainer**: Create an account to manage your clients.
2. **Add clients**: As a trainer, you can add and manage the profiles of dog owners and their pets.
3. **Access resources**: Explore the educational materials available to help in the training and care of dogs.
4. **Manage your sessions**: Add sessions, get notified of upcoming sessions, and view a list of all pending and past sessions.
5. **Generate reports**: Create detailed PDF reports for dogs, filling in the relevant information for each day.

## Contributing

We welcome contributions from the community. To contribute, follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## Dependencies

Here are the main dependencies used in this project:

- **barryvdh/laravel-dompdf**: ^2.2 - DOMPDF wrapper for Laravel
- **guzzlehttp/guzzle**: ^7.2 - Guzzle, an HTTP client for PHP
- **laravel/framework**: ^10.10 - The Laravel Framework
- **laravel/sanctum**: ^3.3 - Laravel Sanctum for API authentication
- **laravel/tinker**: ^2.8 - Laravel Tinker for interacting with your application
- **twbs/bootstrap**: ^5.3 - Bootstrap CSS framework

### Dev Dependencies

- **fakerphp/faker**: ^1.9.1 - Faker for generating fake data
- **laravel-lang/common**: ^6.2 - Common language files for Laravel
- **laravel/breeze**: ^1.29 - Simple authentication scaffolding for Laravel
- **laravel/pint**: ^1.0 - Laravel Pint for code style
- **laravel/sail**: ^1.18 - Laravel Sail for Docker development environment
- **mockery/mockery**: ^1.4.4 - Mockery for mocking objects in tests
- **nunomaduro/collision**: ^7.0 - Collision for error handling
- **phpunit/phpunit**: ^10.1 - PHPUnit for testing
- **spatie/laravel-ignition**: ^2.0 - Ignition for detailed error reporting

## License

Kandog is an open-source software.

## Contact

For any questions or suggestions, please reach out to:

- **Email**: gabrielabart@yahoo.es
- **GitHub Issues**: [https://github.com/gbarton95/kandog/issues](https://github.com/gbarton95/kandog/issues)

---

Thank you for using Kandog! We hope our application helps you in providing excellent care and training for dogs in Zaragoza.
