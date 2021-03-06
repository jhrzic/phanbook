<?php
/**
 * Phanbook : Delightfully simple forum software
 *
 * Licensed under The GNU License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link    http://phanbook.com Phanbook Project
 * @since   1.0.0
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */
namespace Phanbook\Frontend\Controllers;

/**
 * Class LanguageController
 *
 */
class LanguageController extends ControllerBase
{
    public function indexAction()
    {
        $code = $this->dispatcher->getParam('code') ?: 'en';
        $this->cookies->set('code', $code, time() + 15 * 86400);
        $this->flashSession->success(t('Update language is success!'));
        return $this->currentRedirect();
    }
}
