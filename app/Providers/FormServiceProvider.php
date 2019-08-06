<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('cmtext','components.form.text',['name','value'=>null,'attributes'=>[]]);
        Form::component('cmtextarea','components.form.textarea',['name','value'=>null,'attributes'=>[]]);
        Form::component('cmhidden','components.form.hidden',['name','value'=>null,'attributes'=>[]]);
        Form::component('cmsubmit','components.form.submit',['value'=>null,'attributes'=>[]]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
