# CarWash

Carwash Point of Sale

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [License](#license)

## Requirements

- PHP >= 8.1
- Composer
- Laravel 11
- Database (e.g., MySQL, PostgreSQL)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/ilhaammulia/carwash-test.git
    ```

2. **Navigate into the project directory:**

    ```bash
    cd carwash-test
    ```

3. **Install the dependencies:**

    ```bash
    composer install
    ```

4. **Copy the `.env.example` file to `.env`:**

    ```bash
    cp .env.example .env
    ```

5. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

6. **Run migrations (if applicable):**

    ```bash
    php artisan migrate
    ```

7. **Seed the database (optional):**

    ```bash
    php artisan db:seed
    ```

8. **Start the development server:**

    ```bash
    php artisan serve
    ```

    Your application should now be accessible at `http://localhost:8000`.

## Configuration

- **Environment Variables:** Update your `.env` file with the appropriate values for your environment. Example:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

- **App Configuration:** You can adjust settings in the `config` directory files.

## License

Specify the license under which your project is distributed. For example:

- **MIT License:** See the `LICENSE` file for details.
