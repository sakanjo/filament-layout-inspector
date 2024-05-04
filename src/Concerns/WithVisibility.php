<?php

namespace SaKanjo\FilamentLayoutInspector\Concerns;

use Closure;

trait WithVisibility
{
    protected Closure|bool $isVisible = true;

    public function visible(Closure|bool $condition): static
    {
        $this->isVisible = $condition;

        return $this;
    }

    public function isVisible(): bool
    {
        return $this->evaluate($this->isVisible);
    }
}
