<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }

    // Responsible for handling creation of  records
    public function create()
    {
        return view('records.create');
    }

    // Responsible for handling storing of  records
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'author' => 'required|string|max:100',
            'publication_year' => 'required|integer|min:1000|max:' . date('Y'),
            'category' => 'required|string|max:50',
            'isbn' => 'required|unique:records,isbn',
        ]);

        Record::create($request->all());

        return redirect()->route('records.index')->with('success', 'Record added successfully!');
    }

    // Responsible for handling editing of  records
    public function edit(Record $record)
    {
        return view('records.edit', compact('record'));
    }

    // Responsible for handling updates of  records
    public function update(Request $request, Record $record)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'author' => 'required|string|max:100',
            'publication_year' => 'required|integer|min:1000|max:' . date('Y'),
            'category' => 'required|string|max:50',
            'isbn' => 'required|unique:records,isbn,' . $record->id,
        ]);

        $record->update($request->all());

        return redirect()->route('records.index')->with('success', 'Record updated successfully!');
    }

    // Responsible for  destroying of  records
    public function destroy(Record $record)
    {
        $record->delete();
        return redirect()->route('records.index')->with('success', 'Record deleted successfully!');
    }
}
