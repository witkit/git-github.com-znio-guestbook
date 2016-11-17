<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\SendEmailRequest;
use Request;
use Auth;
use Session;
use Mail;


class PagesController extends Controller
{
    /**
     * PagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('pages.index')->with('posts', $posts);
    }

    /**
     * Display page about.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display page contact.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Sends a message to the author of the page.
     *
     * @param SendEmailRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendMessage(SendEmailRequest $request)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'messageContent' => $request->message,
        ];

        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('sid386@gmail.com');
            $message->subject("Wiadomość od użytkownika");
        });

        return redirect('/')->with('success', "Dziękujemy za Twoją wiadomość!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post($request->all());
        $post->ip_address = Request::ip();
        $post->save();

        return redirect('/')->with('success', 'Twoja wiadomość została dodana. Dziękujemy.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('pages.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreatePostRequest $request)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $oldMail = $post->name . " ( " . $post->email . " )";
        $post->delete();

        return redirect('/')->with('success', "Usunięto wpis od : " . $oldMail);
    }

}
