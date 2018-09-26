<?php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\AdminBundle\Form\Type\ModelAutocompleteType;

class floorAdmin extends AbstractAdmin
{
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper->add('floor', TextType::class);
  }
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    
  }
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper->addIdentifier('id')
        ->add('floor');
  }
}

?>