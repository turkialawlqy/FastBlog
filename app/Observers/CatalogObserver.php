<?php

namespace App\Observers;

use App\Models\Catalog;
use Illuminate\Support\Facades\Auth;

class CatalogObserver
{


    /**
     * Handle the Catalog "creating" event.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return void
     */
    public function creating(Catalog $catalog)
    {
        //
        if (Auth()->check()) {
            $catalog->created_by = Auth()->user()->id;
        }
    }

    /**
     * Handle the Catalog "created" event.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return void
     */
    public function created(Catalog $catalog)
    {
        //
        $catalog->syncSlug();
    }
    /**
     * Handle the Catalog "updating" event.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return void
     */
    public function updating(Catalog $catalog)
    {
        //
        if (Auth()->check()) {
            $catalog->updated_by = Auth()->user()->id;
        }
    }
    /**
     * Handle the Catalog "updated" event.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return void
     */
    public function updated(Catalog $catalog)
    {
        //
        $catalog->syncSlug();
    }

    /**
     * Handle the Catalog "deleted" event.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return void
     */
    public function deleted(Catalog $catalog)
    {
        //
    }

    /**
     * Handle the Catalog "restored" event.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return void
     */
    public function restored(Catalog $catalog)
    {
        //
    }

    /**
     * Handle the Catalog "force deleted" event.
     *
     * @param  \App\Models\Catalog  $catalog
     * @return void
     */
    public function forceDeleted(Catalog $catalog)
    {
        //
    }
}
