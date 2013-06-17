<?php

namespace {{ namespace }}\Entity\Pages;

use {{ namespace }}\Form\Pages\FormPageAdminType;
use {{ namespace }}\PagePartAdmin\FormPagePagePartAdminConfigurator;
use {{ namespace }}\PagePartAdmin\BannerPagePartAdminConfigurator;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\FormBundle\Entity\AbstractFormPage;
use Kunstmaan\PagePartBundle\Helper\HasPageTemplateInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * FormPage
 *
 * @ORM\Entity()
 * @ORM\Table(name="{{ prefix }}form_pages")
 */
class FormPage extends AbstractFormPage implements HasPageTemplateInterface
{

    /**
     * Returns the default backend form type for this form
     *
     * @return AbstractType
     */
    public function getDefaultAdminType()
    {
        return new FormPageAdminType();
    }

    /**
     * @return array
     */
    public function getPossibleChildTypes()
    {
        return array(
            array(
                'name' => 'ContentPage',
                'class' => "{{ namespace }}\Entity\Pages\ContentPage"
            ),
            array (
                'name' => 'FormPage',
                'class' => "{{ namespace }}\Entity\Pages\FormPage"
            )
        );
    }

    /**
     * @return string[]
     */
    public function getPagePartAdminConfigurations()
    {
        return array("{{ bundle.getName() }}:form", "{{ bundle.getName() }}:banners", "{{ bundle.getName() }}:footer");
    }

    /**
     * {@inheritdoc}
     */
    public function getPageTemplates()
    {
        return array("{{ bundle.getName() }}:formpage", "{{ bundle.getName() }}:formpage-singlecolumn");
    }

    /**
     * @return string
     */
    public function getDefaultView()
    {
        return "{{ bundle.getName() }}:Pages\FormPage:view.html.twig";
    }
}