<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Foundation\Console\PolicyMakeCommand as BasePolicyMakeCommand;

class PolicyMakeCommand extends BasePolicyMakeCommand
{
    use OverridableMakeCommand;
}
