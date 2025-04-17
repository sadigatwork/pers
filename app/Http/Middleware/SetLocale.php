// SetLocale Middleware
public function handle($request, Closure $next) {
    $locale = $request->segment(1); // en/ar route prefix
    app()->setLocale($locale);
    if($locale == 'ar') {
        config(['app.direction' => 'rtl']);
    }
    return $next($request);
}