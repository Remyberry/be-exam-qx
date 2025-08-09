<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;

class LogModelEvents
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //z
    }

    /**
     * Handle the "created" event.
     */
    public function created(Model $model): void
    {
        $this->logActivity('created', $model);
    }

    /**
     * Handle the "updated" event.
     */
    public function updated(Model $model): void
    {
        $changes = [
            'old' => $model->getOriginal(),
            'new' => $model->getChanges(),
        ];
        $this->logActivity('updated', $model, $changes);
    }

    /**
     * Handle the "deleted" event.
     */
    public function deleted(Model $model): void
    {
        $this->logActivity('deleted', $model);
    }

    /**
     * Log the model activity.
     */
    protected function logActivity(string $eventName, Model $model, array $changes = []): void
    {
        $user = Auth::check() ? Auth::user()->id : null;

        $logMessage = "Model Event: {$eventName} on {$model->getMorphClass()} with ID {$model->id}";

        if (!empty($changes)) {
            $logMessage .= " | Changes: " . json_encode($changes);
        }

        Log::info("User ID: {$user} | " . $logMessage);
    }
}
