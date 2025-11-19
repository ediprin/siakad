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

# Terminal 1 - Laravel server

php artisan serve

# Terminal 2 - Vite dev server

npm run dev
