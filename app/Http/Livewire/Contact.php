<?php

namespace App\Http\Livewire;

use App\Models\ContactForm;
use Livewire\Component;


class Contact extends Component
{
    public $name;
    public $mobile;
    public $email;
    public $pharmacy;
    public $medicationSafetyIssues;
    public $description;
    public $formSubmitted = false; // Property to track form submission
    public $successMessage = ''; // Property to store success message
    public $showModal = false; // Property to control modal visibility



    protected $rules = [
        'name' => 'required|min:6',
        'mobile' => 'required|numeric|digits:11|regex:/^01[0-9]{9}$/',
        'email' => 'required|email',
        'pharmacy' => 'required',
        'medicationSafetyIssues' => 'required',
        'description' => 'required|min:10',
    ];
    // Real-time validation for name
    public function updatedName()
    {
        $this->validateOnly('name');
    }

    // Real-time validation for mobileNumber
    public function updatedMobile()
    {
        $this->validateOnly('mobile');
    }

    // Real-time validation for email
    public function updatedEmail()
    {
        $this->validateOnly('email');
    }

    // Real-time validation for pharmacy
    public function updatedPharmacy()
    {
        $this->validateOnly('pharmacy');
    }

    // Real-time validation for medicationSafetyissues
    public function updatedMedicationSafetyissues()
    {
        $this->validateOnly('medicationSafetyIssues');
    }

    // Real-time validation for description
    public function updatedDescription()
    {
        $this->validateOnly('description');
    }

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        ContactForm::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'pharmacy' => $this->pharmacy,
            'medicationSafetyIssues' => $this->medicationSafetyIssues,
            'description' => $this->description

        ]);

        $this->formSubmitted = true;

        // Set the success message
        $this->successMessage = 'Medication safety issue reported successfully.';

        // Show the modal
        $this->showModal = true;

        // Clear form fields
        $this->resetFormFields();
    }

    public function resetFormFields()
    {
        $this->name = '';
        $this->mobile = '';
        $this->email = '';
        $this->pharmacy = '';
        $this->medicationSafetyIssues = '';
        $this->description = '';
    }

    public function returnToHome()
    {
        // Redirect to the home page
        return redirect('/');
    }

    public function anotherContact()
    {
        // Redirect to the home page
        return redirect('/report');
    }



    public function render()
    {
        return view('livewire.contact')->extends('layouts.app');
    }
}
