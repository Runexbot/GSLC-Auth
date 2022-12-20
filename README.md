# GSLC Sesi 10 Laravel Authentication with Socialite
Berikut adalah hasil code GSLC sesi 10, untuk autentikasi bisa manual atau menggunakan platform lain seperti Google.

## Installation & Setup
1. Clone project dari repository Github 
```sh
git clone https://github.com/Runexbot/GSLC-Auth.git
```

2. Setup Laravel & install npm dependencies
```sh
composer install
npm install
```

3. Copy .env file and fill the credentials as below
```sh
cp .env.example .env
```

| Variable | Description |
| :--- | :--- |
| `DB_DATABASE` | Your database name |
| `MAIL_USERNAME` | Your mailtrap email* |
| `MAIL_PASSWORD` | Your mailtrap password* |
| `MAIL_ENCRYPTION` | Mail encryption type* |
| `MAIL_FROM_ADDRESS` | Your email address |
| `GOOGLE_CLIENT_ID` | Your Google Client ID |
| `GOOGLE_CLIENT_SECRET` | Your Google Client Secret |
*You can fill these credentials from this website https://mailtrap.io

4. Migrate Database
 ```sh
php artisan migrate:fresh
```

5. Generate application key
 ```sh
php artisan key:generate
```

6. Run app
```sh
php artisan serve
```
