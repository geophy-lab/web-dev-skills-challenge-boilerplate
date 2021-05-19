<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class MapboxCssComposer {
    public function compose(View $view): void {
        $view->with('version', $this->version());
    }

    private function version(): string {
        $packageJsonContents = file_get_contents(__DIR__ . '/../../../../package.json');
        $packageJson = json_decode($packageJsonContents, associative: true);
        $semverVersion = $packageJson['dependencies']['mapbox-gl'];

        return str_replace('^', 'v', $semverVersion);
    }
}