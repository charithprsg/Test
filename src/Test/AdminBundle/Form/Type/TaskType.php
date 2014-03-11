<?php
/**
 * Created by JetBrains PhpStorm.
 * User: CHARITH
 * Date: 2/26/14
 * Time: 8:52 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\TaskBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description');

        $builder->add('tags', 'collection', array('type' => new TagType()));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Test\AdminBundle\Entity\Task',
        ));
    }

    public function getName()
    {
        return 'task';
    }
}