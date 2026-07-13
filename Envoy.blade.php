@servers(['web' => 'user@your-server.com'])

@task('deploy', ['on' => 'web'])
    cd /path/to/your/project
    git pull origin master
    composer install --no-dev --optimize-autoloader
    php artisan migrate --force
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    php artisan optimize
@endtask

@task('rollback', ['on' => 'web'])
    cd /path/to/your/project
    php artisan migrate:rollback
@endtask

@task('status', ['on' => 'web'])
    cd /path/to/your/project
    php artisan status
@endtask
