<?php

namespace App\Form\Type;

use App\Entity\Image;
use App\Enum\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $categoryChoices = array();
        foreach (Category::cases() as $category)
        {
            $categoryChoices[$category->getLabel()] = $category->value;
        }

        $builder
            ->add('file', FileType::class, ['mapped' => false])
            ->add('author', TextType::class)
            ->add('sourceUrl', TextType::class)
            ->add('category', ChoiceType::class, ['choices' => $categoryChoices, 'expanded' => true]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Image::class
        ]);
    }
}