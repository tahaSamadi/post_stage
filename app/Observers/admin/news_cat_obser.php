<?php

namespace App\Observers\admin;

use App\Models\news_cats;

class news_cat_obser
{
    /**
     * Handle the news_cats "created" event.
     */
    public function created(news_cats $news_cats): void
    {
        //
    }

    /**
     * Handle the news_cats "updated" event.
     */
    public function updated(news_cats $news_cats): void
    {
        //
    }

    /**
     * Handle the news_cats "deleted" event.
     */
    public function deleted(news_cats $news_cats): void
    {
        //
    }

    /**
     * Handle the news_cats "restored" event.
     */
    public function restored(news_cats $news_cats): void
    {
        //
    }

    /**
     * Handle the news_cats "force deleted" event.
     */
    public function forceDeleted(news_cats $news_cats): void
    {
        //
    }
}
