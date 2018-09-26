<?php
namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\AdminBundle\Form\Type\ModelAutocompleteType;

class aulaAdmin extends AbstractAdmin
{
  protected function configureFormFields(FormMapper $formMapper)
  {
    $formMapper->add('module','sonata_type_model_list', array())
                ->add('floor','sonata_type_model_list', array())
                    // ->add('module','sonata_type_model_autocomplete', array(
                    //     'property'=>'moduleName',
                    //     'multiple'=>'false',
                    //     'to_string_callback' => function($entity, $property)
                    //     {
                    //         return $entity->getModuleName();
                    //      },
                    // ))
                   ->add('aulaName', TextType::class);

  }
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper->add('module.moduleName');
  }
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper->addIdentifier('id')
      ->add('aulaName')
      ->add('module.moduleName')
      ->add('floor.floor')
      ->add('module.id');
  }
}

?>
