# sfCarRent
 # SFCarRent

SFCarRent is a Symfony-based web application for managing car rental services.

## Features

- User registration and authentication
- Listing available cars for rent
- Reserving cars for specific dates
- Managing reservations
- Admin dashboard for managing cars and users

## Installation

1. Clone the repository:

    ```
    git clone https://github.com/yourusername/sfcarrent.git
    ```

2. Navigate to the project directory:

    ```
    cd sfcarrent
    ```

3. Install dependencies:

    ```
    composer install
    ```

4. Set up the database:

    ```
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

5. Start the Symfony server:

    ```
    symfony serve
    ```

6. Access the application in your web browser:

    ```
    http://localhost:8000
    ```

## Usage

- Register as a new user or log in with existing credentials.
- Browse available cars for rent and view details.
- Reserve a car by selecting the dates and providing necessary information.
- Admin users can manage cars and users through the admin dashboard.

## Contributing

Contributions are welcome! Please follow the [contributing guidelines](CONTRIBUTING.md).

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements

- Thanks to Symfony and its community for providing excellent documentation and resources.

