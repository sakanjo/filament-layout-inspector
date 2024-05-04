<?php

namespace SaKanjo\FilamentLayoutInspector;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\View;

class LayoutInspectorPlugin implements Plugin
{
    use Concerns\HasScreens;
    use Concerns\WithVisibility;
    use EvaluatesClosures;

    public function getId(): string
    {
        return 'sakanjo/layout-inspector';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        // @phpstan-ignore-next-line
        return filament(
            app(static::class)->getId()
        );
    }

    public function register(Panel $panel): void
    {
        if (! $this->isVisible()) {
            return;
        }

        $panel
            ->renderHook(
                name: PanelsRenderHook::BODY_START,
                hook: fn () => View::make('filament-layout-inspector::layout-inspector', [
                    'screens' => $this->getScreens(),
                ])->render()
            );
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
