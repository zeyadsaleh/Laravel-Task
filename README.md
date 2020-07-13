# Project Title

Verification using SMS or Email

## Prerequisites

- [node.js & npm](https://nodejs.org/)
- [Composer](https://getcomposer.org/download/)
- [laravel](http://laravel.com/)


# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


1. Clone the repository
    git clone https://github.com/zeyadsaleh/Laravel-Task.git

2. Switch to the repo folder

    cd Laravel-Task

3. Install all the dependencies using composer

    composer install

4. Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env
    
5. Provide your Twilio credentials in .env file -> TWILIO_SID, TWILIO_AUTH_TOKEN and TWILIO_VERIFY_SID

6. Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


## Versioning

This is version 1 (v1), so use the prefix v1 in the url. 

## Authors

**Zeyad Saleh** 

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

Copyright (c) 2020 Zeyad Mostafa Saleh


