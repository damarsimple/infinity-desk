for VARIABLE in Category Product Review Procurement Cart Change
do
    php artisan make:model "$VARIABLE" -mcr
done
