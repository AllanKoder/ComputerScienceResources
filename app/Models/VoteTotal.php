<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteTotal extends Model
{
    protected $fillable = ['voteable_id', 'voteable_type', 'total_votes'];
    public $timestamps = false;

    public function getTotalVotes($voteableId, $voteableType)
    {
        $totalVotes = VoteTotal::where('voteable_id', $voteableId)
                            ->where('voteable_type', $voteableType)
                            ->first();
        return $totalVotes ? $totalVotes->total_votes : 0; // Return 0 if no votes found
    }
}