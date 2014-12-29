<?php namespace Sentinel\Services\Forms;

use Sentinel\Services\Validation\FormValidator;

class ResendActivationForm extends FormValidator {

    protected $rules = [
        'email' => 'required|min:4|max:254|email',
    ];

    protected $messages = [];
}