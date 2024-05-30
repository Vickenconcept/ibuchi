<?php

namespace App\Livewire;

use App\Models\Service as ModelsService;
use Livewire\Component;
use PhpParser\Node\Stmt\Return_;

class Service extends Component
{
    public $services;
    public $selectedTypes = [];
    public $selectedServices = [];
    public $count = 0;
    public $clicked = true;

    public function mount()
    {
        $this->services = ModelsService::with('categories')->get();
        $this->selectedTypes = session()->get('service_data', []);
        // dd($this->selectedTypes);
        session()->forget('service_data');
    }

    public function submit()
    {
        $this->selectedServices = $this->selectedTypes;

        dd($this->selectedTypes);
    }
    public function checkStatus($id, $type, $name)
    {
        $cleaningCount = count(array_filter($this->selectedTypes, fn ($t) => $t['type'] === 'cleaning'));

        // dd($cleaningCount);
        if ($type === 'cleaning' && $cleaningCount > 2) {
            for ($i = count($this->selectedTypes) - 1; $i >= 0; $i--) {
                if ($this->selectedTypes[$i]['type'] === 'cleaning') {
                    unset($this->selectedTypes[$i]);
                    $this->selectedTypes = array_values($this->selectedTypes);
                    break;
                }
            }

            session()->flash('error', 'You cannot select more than two cleaning services.');
        } else {

            $ids = array_column($this->selectedTypes, 'id');
            

            // $key = array_search($id, $ids);
            // if ($key !== false) {
            //     // unset($this->selectedTypes[$key]);
            //     dd('kkk');
            // } 
            if (!in_array($id, $ids)) {
                $this->count++;
                $this->selectedTypes[] = ['id' => $id, 'type' => $type, 'name' => $name];
                session()->put('service_data', $this->selectedTypes);
            }


            // $this->selectedTypes = session()->get('service_data');
        }
    }

    public function render()
    {
        return view('livewire.service');
    }
}
