<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Todo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Psy\Util\Str;
use App\Models\Students;
use App\Models\Artical;

class PagesController extends Controller
{

    public function students()
    {
        $students = new Students();

//        $students->first_name = 'Tanya';
//        $students->last_name = 'Baranov';
//        $students->age = 32;
//        $students->group_number = 000;
//
//        $students->specialty = 'web dev';
//
//        $students->save();
        $students = Students::all();
        return view('students', [
            'students' => $students
        ]);
    }

    public function todos()
    {
        $todo = new Todo();
        $todo->title = 'Testin toodos';
        $todo->note = 'test';

        $todo = $todo->save();
//        if ($todo) {
//            return 'ok';
//
//        }
        /*
         *  Add to DB
          */

//        $todo = Todo::create([
//            'title' => 'dsfdsfsdf',
//            'note' => 'asdasdasd'
//        ]);

        /*
         * Delete items from BD
         */
//        $todo = Todo::find(2);
//        $todo->delete();

        /*
         * Изменение данных
         */

//        $todo = Todo::find(3);
//        $todo->status = 1;
//        $todo->save();
        $todos = Todo::all();
        $todos = Todo::where('status', 1)->where('title', 'Testin toodos')->get();

        /*
         * Удаление данных из БД
         */
//        $todo = Todo::find(1);
//        $todo->delete();

        return view('todos', [
            'todos' => $todos
        ]);
    }

    public function helloPage()
    {
        $my_skills = ['hello', '123123', 'Sasha'];
        $name = 'Tanya';
        $res = [
            'name' => $name,
            'skills' => $my_skills
        ];

        if (1 == 1) {
            $res['test'] = 'rararara';
        }

        return view('hello', $res);
    }

    public function testPage()
    {
        return view('test');
    }


    public function blog()
    {
        $articles = Artical::all();

        return view('test', [
            'articles' => $articles
        ]);
    }

    public function articlePage($id)
    {

        $article = Artical::find($id);

        if (!$article) {
            return abort(404);
        }

//        $comments = Comment::where('article_id', $article->id)->get();
//        dd($comments);
        $comments = $article->comments;
//        dd($article->comments);
        return view('single-article', [
            'article' => $article,
            'comments' => $comments,
        ]);
    }

}
