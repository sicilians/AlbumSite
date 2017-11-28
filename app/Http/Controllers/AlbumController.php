<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlbumForm;
use App\Album;
use Illuminate\Http\Request;

/**
 * This controller handles all the CRUD functionalities associated with this
 * application.
 */
class AlbumController extends Controller
{
    /**
     * Displays a listing of albums.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::paginate(10);
        
        return view('album.index', compact('albums'));
    }

    /**
     * Shows the form for creating a new album.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Stores a newly created album in the album database.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest $form
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAlbumForm $form)
    {
        $form->persist();
        
        $this->flashSuccessMessage('Album has been successfully added!');
        
        return redirect(route('albums.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Shows the form for editing the specified album.
     *
     * @param  \App\Album $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('album.edit', compact('album'));
    }

    /**
     * Updates the specified album in the album database.
     *
     * @param  \Illuminate\Foundation\Http\FormRequest $form
     * @param  \App\Album $album
     * @return \Illuminate\Http\Response
     */
    public function update(CreateAlbumForm $form, Album $album)
    {
        $input = $form->all();
        
        $album->update([
            'slug'   => str_slug($input['title'], "-"), 
            'title'  => $input['title'],
            'artist' => $input['artist']
        ]);
        
        $this->flashSuccessMessage('Album successfully edited.');
        
        return redirect(route('albums.index'));
    }

    /**
     * Removes the specified album from the album database.
     *
     * @param  \App\Album $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        
        $this->flashSuccessMessage('Album has been successfully deleted!');
        
        return redirect(route('albums.index'));
    }
}
