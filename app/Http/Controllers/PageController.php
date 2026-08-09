<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Render halaman statis dari config/pages.php.
     */
    public function show(Request $request, string $page)
    {
        $cfg = config("pages.{$page}") ?? null;
        abort_unless($cfg, 404);

        $forceDark = (bool) $request->route('forceDark', false);
        $theme = $forceDark ? 'dark' : ($request->query('dark', '0') === '1' ? 'dark' : 'light');

        return view("pages.{$page}", array_merge($cfg, [
            'theme'         => $theme,
            'headerVariant' => $cfg['header'] ?? 'standard',
            'footerVariant' => $cfg['footer'] ?? 'standard',
            'bodyClass'     => $cfg['body'] ?? 'at-magic-cursor',
            'showBackToTop' => $cfg['backtotop'] ?? true,
        ]));
    }
}
