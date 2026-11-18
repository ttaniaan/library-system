<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::latest()->get();
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'member_code' => 'required|string|unique:members,member_code',
            'phone'       => 'required|string|max:20',
            'address'     => 'required|string',
        ]);

        Member::create($request->all());

        return redirect()->route('members.index')->with('success', 'Data anggota berhasil ditambahkan.');
    }

    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'member_code' => 'required|string|unique:members,member_code,' . $member->id,
            'phone'       => 'required|string|max:20',
            'address'     => 'required|string',
        ]);

        $member->update($request->all());

        return redirect()->route('members.index')->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Data anggota berhasil dihapus.');
    }
}