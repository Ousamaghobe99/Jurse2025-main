<?php

namespace App\CRUD;

use App\Models\Authors;
use EasyPanel\Contracts\CRUDComponent;
use EasyPanel\Parsers\Fields\Field;

class AuthorsComponent implements CRUDComponent
{
    public $create = true;
    public $delete = true;
    public $update = true;
    public $with_user_id = true;

    public function getModel()
    {
        return Authors::class;
    }

    public function fields()
    {
        return ['firstname', 'lastname', 'organism'];
    }

    public function searchable()
    {
        return ['firstname', 'lastname', 'organism'];
    }

    public function inputs()
    {
        return [
            'firstname' => Field::title('Prénom'),
            'lastname' => Field::title('Nom'),
            'organism' => Field::title('Organisme'),
        ];
    }

    public function getFormFields()
    {
        return [
            ['type' => 'text', 'name' => 'firstname', 'label' => 'Prénom'],
            ['type' => 'text', 'name' => 'lastname', 'label' => 'Nom'],
            ['type' => 'text', 'name' => 'organism', 'label' => 'Organisme'],
            // Ajouter d'autres champs ici
        ];
    }

    public function validationRules()
    {
        return [];
    }

    public function storePaths()
    {
        return [];
    }
}
