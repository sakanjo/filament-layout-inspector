<?php

namespace SaKanjo\FilamentLayoutInspector\Concerns;

use Closure;

trait HasScreens
{
    // max-sm:hidden max-md:hidden max-lg:hidden max-xl:hidden max-2xl:hidden

    /** @var string[] */
    protected Closure|array $screens = ['sm', 'md', 'lg', 'xl', '2xl'];

    /**
     * @param  string[]  $screens
     */
    public function screens(Closure|array $screens): static
    {
        $this->screens = $screens;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getScreens(): array
    {
        return $this->evaluate($this->screens);
    }
}
