<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::withoutDoubleEncoding();
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        
        // $descriotion= $_POST['descriotion'];
        // $Vedio_name= $_POST['Vedio_name'];
        // $image = $_POST['image'];
        
    }

    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

// if (isset($_POST['submit'])){
    
// }