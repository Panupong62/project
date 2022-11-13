<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyCRUDController extends Controller
{
    /// Create Index
    public function index() {
        $data['companies'] = Company::orderBy('id', 'asc')->paginate(5);
        return view('companies.index', $data);
    }

    // Create resource
    public function create() {
        return view('companies.create');
    }
     // Store resource
     public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phon' => 'required',
            'address' => 'required'
        ]);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phon = $request->phon;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success', 'เพิ่มข้อมูลสำเร็จแล้ว.');
    }

    public function edit(Company $company) {
        return view('companies.edit', compact('company'));
    }
    public function show(Company $company) {
        return view('companies.show', compact('company'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phon' => 'required',
            'address' => 'required'
        ]);
        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phon = $request->phon;
        $company->address = $request->address;
        $company->save();
        return redirect()->route('companies.index')->with('success', 'แก้ไขข้อมูลสำเร็จแล้ว.');
    }

    public function destroy(Company $company) {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'ทำการลบข้อมูลสำเร็จแล้ว.');
    }

}
