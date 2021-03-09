<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     *
     * @param \App\Models\Project $project
     * @return void
     */
    public function created(Project $project)
    {
        //
    }

    /**
     * Handle the Project "updated" event.
     *
     * @param \App\Models\Project $project
     * @return void
     */
    public function updated(Project $project)
    {
        //
    }

    /**
     * Handle the Project "deleted" event.
     *
     * @param \App\Models\Project $project
     * @return void
     */
    public function deleting(Project $project)
    {
        //ELiminar una imagen de la carpeta que contiene esa imagen. ....... Quite 'url' al final de logo en el storage
        if ($project->logo) {
            Storage::delete($project->logo);
        }

    }

    /**
     * Handle the Project "restored" event.
     *
     * @param \App\Models\Project $project
     * @return void
     */
    public function restored(Project $project)
    {
        //
    }

    /**
     * Handle the Project "force deleted" event.
     *
     * @param \App\Models\Project $project
     * @return void
     */
    public function forceDeleted(Project $project)
    {
        //
    }
}
