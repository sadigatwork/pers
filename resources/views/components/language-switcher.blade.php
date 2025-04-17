// language-switcher.blade.php
@if(app()->isLocale('en'))
    <a href="{{ url('ar' . Str::after(url()->current(), 'en')) }}" dir="rtl">
        العربية
    </a>
@else
    <a href="{{ url('en' . Str::after(url()->current(), 'ar')) }}" dir="ltr">
        English
    </a>
@endif