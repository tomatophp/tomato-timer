<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $project_id
 * @property integer $issue_id
 * @property integer $account_id
 * @property integer $employee_id
 * @property string $type
 * @property string $status
 * @property string $color
 * @property string $icon
 * @property string $description
 * @property string $start_at
 * @property string $last_stop_at
 * @property string $last_restart_at
 * @property string $end_at
 * @property float $total_time
 * @property float $total_money
 * @property integer $rounds
 * @property boolean $is_running
 * @property boolean $is_done
 * @property boolean $is_billable
 * @property boolean $is_paid
 * @property string $created_at
 * @property string $updated_at
 * @property Account $account
 * @property User $user
 * @property Issue $issue
 * @property Project $project
 * @property Type[] $types
 * @property TimersMeta[] $timersMetas
 */
class Timer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['project_id', 'issue_id', 'account_id', 'employee_id', 'type', 'status', 'color', 'icon', 'description', 'start_at', 'last_stop_at', 'last_restart_at', 'end_at', 'total_time', 'total_money', 'rounds', 'is_running', 'is_done', 'is_billable', 'is_paid', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'employee_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue()
    {
        return $this->belongsTo('App\Models\Issue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function types()
    {
        return $this->belongsToMany('App\Models\Type', 'timers_has_tags', null, 'tag_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timersMetas()
    {
        return $this->hasMany('App\Models\TimersMeta');
    }
}