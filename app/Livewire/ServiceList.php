<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use PhpParser\Node\Stmt\Return_;

class ServiceList extends Component
{
    public $services;
    public $email;
    public $selectedTypes = [];
    public $selectedServices = [];
    public $count = 0;
    public $clicked = true;

    public function mount()
    {
        $this->services = Service::latest()->get();
        $this->selectedTypes = session()->get('service_data', []);
    }


    public function checkStatus($id, $type, $name)
    {
        $cleaningCount = count(array_filter($this->selectedTypes, fn ($t) => $t['type'] === 'cleaning'));
        $ids = array_column($this->selectedTypes, 'id');

        $this->clicked = !$this->clicked;

        if ($this->clicked) {
            if ($type === 'cleaning' && $cleaningCount > 1) {
                $this->addToSession([]);
                $this->setSelectedTypeValue();
                session()->flash('error', 'You cannot select more than two cleaning services.');
            }

            if (in_array($id, $ids)) {
                $key = array_search($id, $ids);
                if ($key !== false) {
                    unset($this->selectedTypes[$key]);
                    $this->addToSession($this->selectedTypes);
                    $this->setSelectedTypeValue();
                }
            } else {

                if ($type === 'cleaning' && $cleaningCount >= 1) {
                    $this->addToSession([]);
                    $this->setSelectedTypeValue();

                    session()->flash('error', 'You cannot select more than two cleaning services.');
                    $this->dispatch('reload-page');
                    return;
                }

                if ($this->count == 1) {
                    $this->selectedTypes[] = ['id' => $id, 'type' => $type, 'name' => $name];
                    $this->addToSession($this->selectedTypes);
                    $this->setSelectedTypeValue();
                }
                $this->selectedTypes[] = ['id' => $id, 'type' => $type, 'name' => $name];
                $this->addToSession($this->selectedTypes);
                $this->setSelectedTypeValue();
                $this->count++;
                $this->clicked = false;
            }
        }
    }

    public function addToSession($value)
    {
        session()->put('service_data', $value);
    }

    public function setSelectedTypeValue()
    {
        $this->selectedTypes = session()->get('service_data');
    }

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $this->selectedServices = $this->selectedTypes;
    }

    public function render()
    {
        return view('livewire.service-list');
    }
}
