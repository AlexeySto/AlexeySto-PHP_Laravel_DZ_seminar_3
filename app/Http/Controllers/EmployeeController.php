<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        return view('get-employee-data');
    }

    public function store(Request $request) {
        $employee = self::getEmployee($request);
        $employee->save();
        return "Сотрудник добавлен в базу данных!";
    }

    public function update(Request $request, $id) {
        // $employee = new Employee(); // TODO ??? Employee->findOne(['id' => $id]);
        $employee = Employee::query()->where('id', '=', $id)->take(1)->get();
        if ($employee) {
            $employee = self::getEmployee($request);
            $employee->id = $id;
            $employee->update();
        
            return "Данные о сотруднике обновлены!";
        }
        return "Нет сотрудника с таким id!";

    }

    private function getEmployee(Request $request): Employee {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->position = $request->input('position');
        $employee->age = $request->input('age');
        $employee->email = $request->input('email');
        $employee->workData = $request->input('workData');
        $employee->address = self::getAddress($request->input('address'));
        return $employee;
    }

    private function getPath(Request $request): string
    {
        return $request->path();
    }

    private function getUrl(Request $request): string
    {
        return $request->url();
    }

    private function getAddress(string $address): string
    {
        $response = json_decode($address, true) ?? [];
        $address = [
            'street' => $response['address']['street'] ?? '',
            'suite' => $response['address']['suite'] ?? '',
            'city' => $response['address']['city'] ?? '',
            'zipcode' => $response['address']['zipcode'] ?? '',
            'geo' => [$response['address']['geo']['lat'] ?? '', $response['address']['geo']['lng'] ?? '']
        ];
        return implode(', ', $address);
    }

}
