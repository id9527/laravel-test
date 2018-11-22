@servers(['web' => 'root@127.0.0.1'])

@task('deploy')
    cd /var/www/laravel
    git pull origin master
    composer install --no-dev
    php artisan migrate --force
@endtask
