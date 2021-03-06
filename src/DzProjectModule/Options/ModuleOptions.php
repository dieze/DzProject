<?php

/**
 * Fichier d'options pour le Module DzProjectModule
 *
 * PHP version 5.3.0
 *
 * @category Source
 * @package  DzProjectModule\Options
 * @author   Adrien Desfourneaux (aka Dieze) <dieze51@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://github.com/dieze/DzProjectModule
 */

namespace DzProjectModule\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * Classe d'options pour le Module DzProjectModule
 *
 * @category Source
 * @package  DzProjectModule\Options
 * @author   Adrien Desfourneaux (aka Dieze) <dieze51@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link     https://github.com/dieze/DzProjectModule
 */
class ModuleOptions extends AbstractOptions implements
    ProjectControllerOptionsInterface,
    ProjectServiceOptionsInterface,
    ProjectWidgetsOptionsInterface,
    ProjectListOptionsInterface
{
    /**
     * Utiliser le paramètre redirect s'il est présent
     *
     * @var bool
     *
     * @see ProjectControllerOptionsInterface
     */
    protected $useRedirectParameterIfPresent = true;

    /**
     * Nom de la classe d'entité projet
     *
     * @var string
     *
     * @see \DzProjectModule\Options\ProjectServiceOptionsInterface
     */
    protected $projectEntityClass = 'DzProjectModule\Entity\Project';

    /**
     * Template de vue pour le widget de listing des projets
     *
     * @var string
     *
     * @see \DzProjectModule\Options\ProjectWidgetsOptionsInterface
     */
    protected $projectListWidgetViewTemplate = 'dz-project-module/project/list.phtml';

    /**
     * Template de vue pour le widget d'affichage du formualire d'ajout de projet
     *
     * @var string
     *
     * @see \DzProjectModule\Options\ProjectWidgetsOptionsInterface
     */
    protected $projectAddWidgetViewTemplate = 'dz-project-module/project/add.phtml';

    /**
     * Template de vue pour le widget d'affichage du formulaire de suppression de projet
     *
     * @var string
     *
     * @see \DzProjectModule\Options\ProjectWidgetsOptionsInterface
     */
    protected $projectDeleteWidgetViewTemplate = 'dz-project-module/project/delete.phtml';

    /**
     * Afficher ou non les actions de suppression de projet
     * dans le listing des projets
     *
     * @var bool
     *
     * @see \DzProjectModule\Options\ProjectListOptionsInterface
     */
    protected $projectListHasDeleteAction = true;

    /**
     * Afficher ou non l'action d'ajout
     * dans le listing des projets
     *
     * @var bool
     */
    protected $projectListHasAddAction = true;

    /**
     * Définit s'il faut utiliser le paramètre redirect
     * s'il est présent
     *
     * @param bool $useRedirectParameterIfPresent Valeur de l'option
     *
     * @return ModuleOptions
     */
    public function setUseRedirectParameterIfPresent($useRedirectParameterIfPresent)
    {
        $this->useRedirectParameterIfPresent = $useRedirectParameterIfPresent;

        return $this;
    }

    /**
     * Obtient s'il faut utiliser le paramètre redirect
     * s'il est présent
     *
     * @return bool
     */
    public function getUseRedirectParameterIfPresent()
    {
        return $this->useRedirectParameterIfPresent;
    }

    /**
     * Définit le nom de la classe d'entité projet
     *
     * @param string $projectEntityClass Nom de la classe d'entité projet
     *
     * @return ModuleOptions
     */
    public function setProjectEntityClass($projectEntityClass)
    {
        $this->projectEntityClass = $projectEntityClass;

        return $this;
    }

    /**
     * Obtient le nom de la classe d'entité projet
     *
     * @return string
     */
    public function getProjectEntityClass()
    {
        return $this->projectEntityClass;
    }

    /**
     * Définit le template de vue pour le widget de listing des projets
     *
     * @param string $projectListWidgetViewTemplate Chemin vers le template
     *
     * @return ModuleOptions
     */
    public function setProjectListWidgetViewTemplate($projectListWidgetViewTemplate)
    {
        $this->projectListWidgetViewTemplate = $projectListWidgetViewTemplate;

        return $this;
    }

    /**
     * Obtient le template de vue pour le widget de listing des projets
     *
     * @return string
     */
    public function getProjectListWidgetViewTemplate()
    {
        return $this->projectListWidgetViewTemplate;
    }

    /**
     * Définit le template de vue pour le widget d'affichage du formulaire d'ajout de projet
     *
     * @param string $projectAddWidgetViewTemplate Chemin vers le template
     *
     * @return ModuleOptions
     */
    public function setProjectAddWidgetViewTemplate($projectAddWidgetViewTemplate)
    {
        $this->projectAddWidgetViewTemplate = $projectAddWidgetViewTemplate;

        return $this;
    }

    /**
     * Obtient le template de vue pour le widget d'affichage du formulaire d'ajout de projet
     *
     * @return string
     */
    public function getProjectAddWidgetViewTemplate()
    {
        return $this->projectAddWidgetViewTemplate;
    }

    /**
     * Définit le template de vue pour le widget d'affichage du formulaire de suppression de projet
     *
     * @param string $projectDeleteWidgetViewTemplate Chemin vers le template
     *
     * @return ModuleOptions
     */
    public function setProjectDeleteWidgetViewTemplate($projectDeleteWidgetViewTemplate)
    {
        $this->projectDeleteWidgetViewTemplate = $projectDeleteWidgetViewTemplate;

        return $this;
    }

    /**
     * Obtient le template de vue pour le widget d'affichage du formulaire de suppression de projet
     *
     * @return string
     */
    public function getProjectDeleteWidgetViewTemplate()
    {
        return $this->projectDeleteWidgetViewTemplate;
    }

    /**
     * Définit s'il faut afficher les actions de suppression de projet
     * dans listing de projets
     *
     * @param bool $hasDeleteAction Valeur de l'option
     *
     * @return ModuleOptions
     */
    public function setProjectListHasDeleteAction($hasDeleteAction)
    {
        $this->projectListHasDeleteAction = $hasDeleteAction;

        return $this;
    }

    /**
     * Obtient s'il faut afficher les actions de suppression de projet
     * dans le listing des projets
     *
     * @return bool
     */
    public function getProjectListHasDeleteAction()
    {
        return $this->projectListHasDeleteAction;
    }

    /**
     * Définit s'il faut afficher l'action d'ajout de projet
     * dans le listing des projets
     *
     * @param bool $hasAddAction Valeur de l'option
     *
     * @return ModuleOptions
     */
    public function setProjectListHasAddAction($hasAddAction)
    {
        $this->projectListHasAddAction = $hasAddAction;

        return $this;
    }

    /**
     * Obtient s'il faut afficher l'action d'ajout de projet
     * dans le listing des projets
     *
     * @return bool
     */
    public function getProjectListHasAddAction()
    {
        return $this->projectListHasAddAction;
    }
}
