docker-compose down
docker-compose up -d
docker exec futurebazar composer install
docker exec futurebazar php artisan optimize:clear