<?php

namespace App\Livewire;

use Livewire\Component;

// The class name is changed to match your component.
class Newsletter extends Component
{
    public string $name = '';
    public string $email = '';
    public bool $subscribed = false;

    protected function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => [
                'required',
                'email',
                'regex:/@(gmail\.com|yahoo\.com)$/i'
            ],
        ];
    }

    protected function messages(): array
    {
        return [
            'email.regex' => 'Please use a valid Gmail or Yahoo email.',
        ];
    }

    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function save(): void
    {
        $this->validate();

        $this->reset(['name', 'email']);

        $this->subscribed = true;
    }

    public function render()
    {
        // This will now look for newsletter.blade.php
        return view('livewire.newsletter');
    }
}