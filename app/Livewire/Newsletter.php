<?php

namespace App\Livewire;

use Livewire\Component;

// This is the Livewire component that handles the newsletter form's logic.
class Newsletter extends Component
{
    // Public properties that store the form's data and state.
    public string $name = '';
    public string $email = '';
    public bool $subscribed = false;

    // Defines the validation rules for the inputs.
    protected function rules(): array
    {
        return [
            // Name is required and must be at least 3 characters.
            'name' => 'required|min:3',

            // Email is required, must be a valid email, and must be from Gmail or Yahoo.
            'email' => [
                'required',
                'email',
                'regex:/@(gmail\.com|yahoo\.com)$/i'
            ],
        ];
    }

    // Custom error messages for specific validation rules.
    protected function messages(): array
    {
        return [
            'email.regex' => 'Please use a valid Gmail or Yahoo email.',
        ];
    }

    // This runs automatically when a property is updated, for real-time validation.
    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    // This method is called when the form is submitted.
    public function save(): void
    {
        // Validate all inputs.
        $this->validate();

        // If validation passes, clear the form fields.
        $this->reset(['name', 'email']);

        // Show the success message.
        $this->subscribed = true;
    }

    // Renders this component's Blade view (the HTML).
    public function render()
    {
        return view('livewire.newsletter');
    }
}