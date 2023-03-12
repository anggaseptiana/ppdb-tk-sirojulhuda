<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function tampil_blog()
    {
        return view('blog.index', [
            'blog' => Blog::orderBy('id', 'desc')->get(),
            'title' => 'Kelola Blog TK Sirojul Huda'
        ]);
    }

    public function tambah_blog()
    {
        return view('blog.create', [
            'title' => 'Kelola Blog TK Sirojul Huda'
        ]);
    }

    public function simpan_blog(Request $request)
    {
       $rules = [
            'tanggal' => 'required',
            'judul' => 'required|string|max:155',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:7000',
            'keterangan' => 'required'
        ];

        $validated = $request->validate($rules);
        $validated['foto'] = $request->file('foto')->storeAs('blog',$request->file('foto')->getClientOriginalName());
        
        Blog::create($validated);


        if ($rules) {
            return redirect()
                ->route('tampil_blog')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function edit_blog($id)
    {
        return view('blog.edit', [
            'title' => 'Kelola Blog TK Sirojul Huda',
            'blog' => Blog::select('*')->where('id', $id)->get()
        ]);
    }

    public function update_blog(Request $request)
    {
        $blog = [
            'judul' => 'required|string|max:155',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:7000',
            'keterangan' => 'required'
        ];
        
        $validatedData = $request->validate($blog);

        if ($request->hasFile('foto')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['foto'] = $request->file('foto')->storeAs('blog',$request->file('foto')->getClientOriginalName());

        }

        Blog::where('id', $request->id)->update($validatedData);

        return redirect('admin/blog');
 
    }

    public function hapus_blog(Blog $blog)
    {
        Blog::destroy($blog->id);
        return redirect('/admin/blog')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">Data Blog <strong>berhasil dihapus</strong>.<button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }
}
?>
