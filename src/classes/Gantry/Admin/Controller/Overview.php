<?php
namespace Gantry\Admin\Controller;

use Gantry\Component\Controller\BaseController;

class Overview extends BaseController
{
    public function index()
    {
        echo $this->container['admin.theme']->render('@gantry-admin/overview.html.twig');
    }
}
