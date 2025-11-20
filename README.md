Install PHP dependencies
composer install

Install Node dependencies
npm install

Environment setup
cp .env.example .env
php artisan key:generate

Database setup
php artisan migrate
php artisan db:seed

Build frontend assets
npm run build

Start development server
