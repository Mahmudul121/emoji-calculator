<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use Exception;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dataCalculate(CalculatorRequest $req)
    {
        try {
            $data = $req->all();
            $result = $this->calculate($data['type'], $data['value1'], $data['value2']);
            return redirect()->back()->with('result', $result);
        } catch (Exception $e) {
            return redirect()->back()->with('server_error', 'Something went wrong.');
        }
    }

    public function calculate(string $operation, int $a, int $b)
    {
        switch ($operation) {
            case '+':
                return $this->add($a, $b);
            case '-':
                return $this->subtract($a, $b);
            case '*':
                return $this->multiply($a, $b);
            case '/':
                return $this->divide($a, $b);
            default:
                return null;
        }
    }
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }
    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }
    public function divide(int $a, int $b): int
    {
        return floor($a / $b);
    }
}
