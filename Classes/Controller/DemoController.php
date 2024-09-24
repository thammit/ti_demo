<?php

declare(strict_types=1);

namespace ThammIT\TiDemo\Controller;


/**
 * This file is part of the "demo" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Niels Lehmkuhl
 */

/**
 * DemoController
 */
class DemoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
