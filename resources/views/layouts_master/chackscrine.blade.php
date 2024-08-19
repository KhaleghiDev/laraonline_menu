
@if (request()->get('width') <= 768)
    @else
    <div class="error">
        صفحه نمایش شما بزرگتر از 768 پیکسل است و نمایش این محتوا امکان پذیر نیست.
    </div>
@endif
