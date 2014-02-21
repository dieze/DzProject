<?php

/**
 * Fichier de source du DzProjectAddWidget
 * Widget qui affiche le formulaire d'Ajout de projet
 *
 * PHP version 5.3.3
 *
 * @category Source
 * @package  DzProject\View\Helper
 * @author   Adrien Desfourneaux (aka Dieze) <dieze51@gmail.com>
 * @license  http://opensource.org/licenses/GPL-2.0 GNU General Public License, version 2
 * @link     https://github.com/dieze/DzProject/blob/master/src/DzProject/View/Helper/DzProjectAddWidget.php
 */

namespace DzProject\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;
use DzProject\Controller\ProjectController;
use Zend\Stdlib\Response;

/**
 * Widget d'affichage du formulaire d'ajout de projet.
 *
 * @category Source
 * @package  DzProject\View\Helper
 * @author   Adrien Desfourneaux (aka Dieze) <dieze51@gmail.com>
 * @license  http://opensource.org/licenses/GPL-2.0 GNU General Public License, version 2
 * @link     https://github.com/dieze/DzProject/blob/master/src/DzProject/View/Helper/DzProjectAddWidget.php
 */
class DzProjectAddWidget extends AbstractHelper
{
    /**
     * Contrôleur de projet
     * @var ProjectController
     */
    protected $projectController;

    /**
     * Template de vue pour le widget d'affichage
     * du formulaire d'ajout de projet
     *
     * @var string Template à utiliser
     */
    protected $viewTemplate;

    /**
     * __invoke
     *
     * @param array $options array of options
     *
     * @access public
     *
     * @return mixed
     */
    public function __invoke($options = array())
    {
        if (array_key_exists('render', $options)) {
            $render = $options['render'];
        } else {
            $render = true;
        }

        if (array_key_exists('redirectSuccess', $options)) {
            $redirectSuccess = $options['redirectSuccess'];
        } else {
            $redirectSuccess = false;
        }

        if (array_key_exists('redirectFailure', $options)) {
            $redirectFailure = $options['redirectFailure'];
        } else {
            $redirectFailure = false;
        }

        if (array_key_exists('hasTitle', $options)) {
            $hasTitle = $options['hasTitle'];
        } else {
            $hasTitle = true;
        }

        if (array_key_exists('hasSubmit', $options)) {
            $hasSubmit = $options['hasSubmit'];
        } else {
            $hasSubmit = true;
        }

        $projectController = $this->getProjectController();

        if ($redirectSuccess) {
            $projectController->getRequest()->getQuery()->set('redirectSuccess', $redirectSuccess);
        }

        if ($redirectFailure) {
            $projectController->getRequest()->getQuery()->set('redirectFailure', $redirectFailure);
        }

        $projectController->getRequest()->getQuery()->set('hasTitle', $hasTitle);
        $projectController->getRequest()->getQuery()->set('hasSubmit', $hasSubmit);

        $response = $projectController->addAction();

        if (is_array($response)) {
            $viewModel = new ViewModel($response);
        } elseif ($response instanceof ViewModel) {
            $viewModel = $response;
        } elseif ($response instanceof Response) {
            return $response;
        }

        $viewModel->setVariable('isWidget', true)
            ->setTemplate($this->viewTemplate);

        if ($render) {
            return $this->getView()->render($viewModel);
        } else {
            return $viewModel;
        }
    }

    /**
     * Définit le contrôleur de projets
     *
     * @param ProjectController $projectController Contrôleur de projets
     *
     * @return DzProjectAddWidget
     */
    public function setProjectController($projectController)
    {
        $this->projectController = $projectController;

        return $this;
    }

    /**
     * Obtient le contrôleur de projets
     *
     * @return ProjectController
     */
    public function getProjectController()
    {
        return $this->projectController;
    }

    /**
     * Définit le template de vue pour le widget d'affichage du formulaire d'ajout de projet
     *
     * @param string $viewTemplate Nouveau template de vue
     *
     * @return DzProjecAddWidget
     */
    public function setViewTemplate($viewTemplate)
    {
        $this->viewTemplate = $viewTemplate;

        return $this;
    }
}
