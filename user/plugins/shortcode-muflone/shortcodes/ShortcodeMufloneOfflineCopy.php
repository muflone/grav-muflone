<?php

namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class ShortcodeMufloneOfflineCopy extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('muflone-offline-copy', function(ShortcodeInterface $sc) {
            $output = $this->twig->processTemplate('partials/offline-copy.html.twig', [
                'content' => $sc->getContent(),
                'page' => $this->grav['page'],
             ]);
            return $output;
        });
    }
}
