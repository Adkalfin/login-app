<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StatusController extends Controller
{
    /**
     * Set user status to pending.
     */
    public function setPending(User $user)
    {
        $user->update(['status' => 'pending']);
        // Redirect atau tindakan lain setelah status diubah menjadi pending
    }

    /**
     * Set user status to approved.
     */
    public function setApproved(User $user)
    {
        $user->update(['status' => 'approved']);
        // Redirect atau tindakan lain setelah status diubah menjadi approved
    }

    /**
     * Set user status to rejected.
     */
    public function setRejected(User $user)
    {
        $user->update(['status' => 'rejected']);
        // Redirect atau tindakan lain setelah status diubah menjadi rejected
    }
}
