<?php

namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class ShortcodeMufloneTranslations extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('muflone-translations', function(ShortcodeInterface $sc) {
            $output = $this->twig->processTemplate('partials/translations.html.twig', [
                'content' => $sc->getContent(),
                'type' => $sc->getParameter('type', ''),
                'name' => $sc->getParameter('name', ''),
                'package' => $sc->getParameter('package', ''),
                'github' => 'https://github.com/muflone/' . $sc->getParameter('package', ''),
                'transifex' => 'https://www.transifex.com/projects/p/' . $sc->getParameter('package', '') . '/',
             ]);
            return $output;
        });
    }
}
