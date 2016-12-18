<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        if(1 == 1) {
            if (2 == 2) {
                if (3 == 3) {
                    if (4 == 4) {
                        if (5 == 5) {
                            return new ViewModel();
                        }
                    }
                }
            }
        }

        return new ViewModel();
    }
}
