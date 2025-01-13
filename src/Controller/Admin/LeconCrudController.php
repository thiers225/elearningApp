<?php

namespace App\Controller\Admin;

use App\Entity\Enum\TypeLeconEnum;
use App\Entity\Lecon;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LeconCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lecon::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre'),
            NumberField::new('ordre'),
            ChoiceField::new('type')
            ->setChoices(array_combine(
                array_map(fn(TypeLeconEnum $enum) => $enum->value, TypeLeconEnum::cases()),
                TypeLeconEnum::cases()
            ))
            ->renderExpanded(false)
            ->allowMultipleChoices(false), 
            TextEditorField::new('contenu'),
        ];
    }
    
}
