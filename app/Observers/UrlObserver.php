<?php

namespace App\Observers;

use App\Models\Url;




class UrlObserver
{
  /**
     * Handle the Url "created" event.
     *
     * @param  \App\Models\Url  $url
     * @return void
     */
    public function creating(Url $url)

    {
        $urls=Url::all();
        foreach($urls as $u){
            
        if ($u->url==$url->url){
             UrlObserver::generateUrl($url);
        }
    }        
      
    }
   
  

    private static function generateUrl(Url $url){
        $url->url = preg_replace('/[0-9]+/', '', $url->url);
         $num=rand(0,200);
         $temp=$url->url.$num;
         
          
         $url->url=$temp;
         $urls=Url::all();
         foreach($urls as $u){
        if ($u->url==$url->url){
            
            UrlObserver::generateUrl($url);
        }
    }

    }

   
    /**
     * Handle the Url "created" event.
     *
     * @param  \App\Models\Url  $url
     * @return void
     */
    public function created(Url $url)

    {
        
      
    }

    /**
     * Handle the Url "updated" event.
     *
     * @param  \App\Models\Url  $url
     * @return void
     */
    public function updated(Url $url)
    {
        //
    }

    /**
     * Handle the Url "deleted" event.
     *
     * @param  \App\Models\Url  $url
     * @return void
     */
    public function deleted(Url $url)
    {
        //
    }

    /**
     * Handle the Url "restored" event.
     *
     * @param  \App\Models\Url  $url
     * @return void
     */
    public function restored(Url $url)
    {
        //
    }

    /**
     * Handle the Url "force deleted" event.
     *
     * @param  \App\Models\Url  $url
     * @return void
     */
    public function forceDeleted(Url $url)
    {
        //
    }
}
