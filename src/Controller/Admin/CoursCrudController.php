<?php

namespace App\Controller\Admin;

use App\Entity\Cours;
use App\Entity\Enum\NiveauCoursEnum;
use App\Service\CustomFileNamer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class CoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cours::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image','Image')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(true),
            TextField::new('titre', 'Titre'),
            ChoiceField::new('niveau', 'Niveau')
            ->setChoices(array_combine(
                array_map(fn(NiveauCoursEnum $enum) => $enum->value, NiveauCoursEnum::cases()),
                NiveauCoursEnum::cases()
            ))
            ->renderExpanded(false)
            ->allowMultipleChoices(false),
            SlugField::new('slug')->setTargetFieldName('titre'),
            TextEditorField::new('description', 'Description'),
        ];
    }



    
}
