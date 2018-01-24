<?php
/**
 * Created by PhpStorm.
 * User: heiner
 * Date: 17.01.18
 * Time: 17:11
 */

namespace AppBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text')
            ->add('body', 'textarea')
            ->add('category', 'sonata_type_model', [
                'class' => 'AppBundle\Entity\Category',
                'property' => 'name',
            ])
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
//        $listMapper->addIdentifier('title');
        $listMapper
            ->addIdentifier('title')
            ->add('draft')
            ->add('category.name')
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('category', null, [], 'entity', [
                'class'    => 'AppBundle\Entity\Category',
                'choice_label' => 'name',
            ])
        ;
    }

//    protected function configureRoutes(RouteCollection $collection)
//    {
//        $collection->add('edit');
//    }


}