<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public ?string $message;

    private string $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $message = null, string $type = 'success')
    {
        //
        $this->message = $message;
        $this->type = $type;
    }

    public function backgroundColorClass(): string
    {
        return [
            'success' => 'bg-green-50',
            'error' => 'bg-red-50',
            'warning' => 'bg-yellow-50',
            'info' => 'bg-blue-50',
        ][$this->type];
    }

    public function textColorClass(): string
    {
        return [
            'success' => 'text-green-800',
            'error' => 'text-red-800',
            'warning' => 'text-yellow-800',
            'info' => 'text-blue-800',
        ][$this->type];
    }

    public function textdarkColorClass(): string
    {
        return [
            'success' => 'text-green-400',
            'error' => 'text-red-400',
            'warning' => 'text-yellow-300',
            'info' => 'text-blue-400',
        ][$this->type];
    }


    public function buttonColorClass(): string
    {
        return [
            'success' => 'text-green-500',
            'error' => 'text-red-500',
            'warning' => 'text-yellow-500',
            'info' => 'text-blue-500',
        ][$this->type];
    }

    public function buttondarkColorClass(): string
    {
        return [
            'success' => 'text-green-400',
            'error' => 'text-red-400',
            'warning' => 'text-yellow-300',
            'info' => 'text-blue-400',
        ][$this->type];
    }

    public function hoverColorClass(): string
    {
        return [
            'success' => 'bg-green-200',
            'error' => 'bg-red-200',
            'warning' => 'bg-yellow-200',
            'info' => 'bg-blue-200',
        ][$this->type];
    }

    public function ringColorClass(): string
    {
        return [
            'success' => 'ring-green-400',
            'error' => 'ring-red-400',
            'warning' => 'ring-yellow-400',
            'info' => 'ring-blue-400',
        ][$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
