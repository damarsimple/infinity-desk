for VARIABLE in Category Product Review Procurement Cart Change
do
    php artisan make:controller "$VARIABLE"Controller --resource
done
