for VARIABLE in Category Product Review Procurement Cart
do
    php artisan make:model "$VARIABLE" -mcr
done
